
sumlist([], [0]).
sumlist([H1|T1], [H|T] ) :-
H is H1+H2, ???
sumlist(T1,T).

mul([],1).
mul([H|T], R) :-
mul(T,S),
R is H*S.

/*Esoteriko Ginomeno */
ip([],[]
V/* esoteriko_ginomeno */
/* ?- internal_product([1,2,0],[3,4,5],X). */
/* X = 1*3+2*4+0*5 =11 */
internal_product([], [], 0).
internal_product([H1|T1], [H2|T2], [H|T] ) :-
H is H1+H2,
internal_product(T1,T2,T).

internal_product([], [], 0).
internal_product([H1|T1], [H2|T2], × ) :-
H is H1*H2,
internal_product(T1,T2,R).
X is H + R
