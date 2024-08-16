/*- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - */

:- use_module(library(crypto)).
:- use_module(library(format)).
:- use_module(library(charsio)).
:- use_module(library(iso_ext)).
:- use_module(library(lists)).
:- use_module(library(dcgs)).
:- use_module(library(pio)).

%?- encrypt_file("enscryerypt.pl").

encrypt_file(File) :-
        current_output(Out),
        encrypt_file_(File, Out).

encrypt_file_(File, Out) :-
        read_password(Password),
        encrypt_file_(File, Password, Out).

encrypt_file_(File, Password, Out) :-
        phrase_from_file(seq(String), File, [type(binary)]),
        phrase_to_stream(encrypt_string_(String, Password), Out).

encrypt_string(String, Out) :-
        read_password(Password),
        phrase_to_stream(encrypt_string_(String, Password), Out).

/* - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
?- phrase(encrypt_string_("hello", "password"), Cs).
%@    Cs = "cost(19).\ntag([13,2 ..."
%@ ;  false.
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - */

encrypt_string_(String, Password) -->
        { Cost = 19,
          crypto_n_random_bytes(16, Salt),
          crypto_password_hash(Password, Hash, [algorithm('pbkdf2-sha512'),
                                                cost(Cost),
                                                salt(Salt)]),
          crypto_data_hkdf(Hash, 32, Ks, [info("key"),algorithm(sha256)]),
          crypto_data_hkdf(Hash, 12, IV, [info("iv"),algorithm(sha256)]),
          crypto_data_encrypt(String, 'chacha20-poly1305', Ks, IV,
                              Encrypted, [tag(Ts),encoding(octet)]),
          chars_base64(Encrypted, B64, []) },
        portray_clause_(cost(Cost)),
        portray_clause_(tag(Ts)),
        portray_clause_(salt(Salt)),
        "ciphertext(\"\\\n",
        string_lines(B64, 72),
        "\").\n".

read_file_to_terms(File, Terms) :-
        setup_call_cleanup(open(File, read, S, []),
                           stream_to_terms_(S, Terms),
                           close(S)).

stream_to_terms_(S, Terms) :-
        read(S, Term),
        (   Term == end_of_file ->
            Terms = []
        ;   Terms = [Term|Rest],
            stream_to_terms_(S, Rest)
        ).

decrypt_file_(File, Password) :-
        read_file_to_terms(File, Terms),
        decrypt_parameters(Terms, Password).

decrypt_parameters(Terms, Password) :-
        memberchk(tag(Ts), Terms),
        memberchk(salt(Salt), Terms),
        memberchk(ciphertext(B64), Terms),
        memberchk(cost(Cost), Terms),
        chars_base64(Encrypted, B64, []),
        crypto_password_hash(Password, Hash, [algorithm('pbkdf2-sha512'),
                                              cost(Cost),
                                              salt(Salt)]),
        crypto_data_hkdf(Hash, 32, Ks, [info("key"),algorithm(sha256)]),
        crypto_data_hkdf(Hash, 12, IV, [info("iv"),algorithm(sha256)]),
        crypto_data_decrypt(Encrypted, 'chacha20-poly1305', Ks, IV,
                            String, [encoding(octet),tag(Ts)]),
        current_output(S0),
        open(stream(S0), write, S, [type(binary)]),
        format(S, "~s", [String]).

decrypt_file(File) :-
        read_password(Password),
        decrypt_file(File, Password).

read_password(P) :-
        format("Password: ", []),
        read_password_([], P).

read_password_(Cs0, Cs) :-
        get_single_char(C),
        (   C = '\n' -> reverse(Cs0, Cs)
        ;   read_password_([C|Cs0], Cs)
        ).

%?- phrase(string_lines("this is a very nice test", 5), Ls).
%@    Ls = "this \\\nis a \\\nvery  ...".

string_lines(String, Split) -->
        { length(First, Split) },
        (   { append(First, Remainder, String) } ->
            First,
            "\\\n",
            string_lines(Remainder, Split)
        ;   String
        ).