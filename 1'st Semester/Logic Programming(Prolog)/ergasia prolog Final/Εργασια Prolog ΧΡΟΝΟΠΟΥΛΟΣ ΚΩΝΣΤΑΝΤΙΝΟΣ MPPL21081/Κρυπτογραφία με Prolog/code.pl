go(CipherText) :- crypto_n_random_bytes(32, Ks),
   crypto_n_random_bytes(12, IV),
   crypto_data_encrypt("Fuck this shit", 'chacha20-poly1305', Ks, IV, CipherText, [tag(Ts)]).

go2(PlainText) :-   crypto_data_decrypt(CipherText, 'chacha20-poly1305', Ks, IV, PlainText, [tag(Ts)]).
