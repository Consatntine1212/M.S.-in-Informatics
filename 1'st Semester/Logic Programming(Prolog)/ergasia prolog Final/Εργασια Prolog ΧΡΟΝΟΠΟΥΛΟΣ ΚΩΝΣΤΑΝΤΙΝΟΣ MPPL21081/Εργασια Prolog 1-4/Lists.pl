/*Small Prolog Programs */
/*--------------------------------------------*/
/*  1 Sum of List */

sumlist([],0).
sumlist([H|T],S) :- sumlist(T,S1),S is S1 + H .

 /* use : ?-sumlist([1,2,3],N).*/

/*--------------------------------------------*/
/*  2. multlist */

multlist([],1).
multlist([H|T],M) :- multlist(T,M1),M is M1 * H .

/* use : ?-multlist([1,2,3],N).*/

/*--------------------------------------------*/
/*  3. listlength(list,N) */

listlength([],0).
listlength([H|T],L) :- listlength(T,L1), L is L1 + 1 .

/*--------------------------------------------*/
/*  4. first_element(List,F) */

first_element([],"List is Empty").
first_element([H|T],F) :-  F is H .

/*--------------------------------------------*/
/*  5. last_element(List,l). */

last_element([L],L).
last_element([_|X],L):- last_element(X,L).

/*--------------------------------------------*/
/*  6. nth_element(List,N,E). */

nth_element([X|_],X,1).
nth_element([_|L],X,K) :- K > 1, K1 is K - 1, nth_element(L,X,K1).

/*--------------------------------------------*/
/*  7. element_position(List,E,N).*/

element_position([X|Ys],X,1).
element_position([Y|Ys],X,N) :- element_position(Ys,X,K), N is K+1.
/*--------------------------------------------*/
/*  8. my_member(X,List).                     */

my_member(X, [Y|Ys]) :- X = Y ; my_member(X, Ys).
/*--------------------------------------------*/
/*  9. my_select(X,List,Rest).                     */

my_select(X, [X|Xs], Xs).
my_select(X, [Y|Ys], [Y|Zs]) :- my_select(X, Ys, Zs).

/*9. my_select(X,List,Rest)   % Χ είναι στοιχείο της λίστας List, Rest η υπόλοιπη λίστα*/
/*
nyt(X,[X|T],[T]).
nyt(X,[H1|T1],[H1|T2] :- nyt(X,[X|T1],[T2]).*/
/*
sbl( _ , [], _ ).
sbl( , [X|XS], [X|XSS] ) :- sbl( XS, XSS ).
sbl( , [X|XS], [_|XSS] ) :- sbl( [X|XS], XSS ).

sbl( _ ,[] ).
sbl( [X|XSS], [X|XS] ) :- sbl( XSS, XS ).
sbl( [_|XSS], [X|XS] ) :- sbl( XSS, [X|XS]).
*/
/*--------------------------------------------*/
/* 10. my_append(L1,L2,R).     */
/*
my_append([], Lista, Listb).
my_append([X|T], Listb, [X|Listc]) :- my_append(T, Listb, Listc).*/
/*--------------------------------------------*/


merge_list([],L,L ).
merge_list([H|T],L,[H|M]):- merge_list(T,L,M).


/*--------------------------------------------*/

del(X,[X|T],T).
del(X,[H|T],[H|R]):-
    del(X,T,R).

/*--------------------------------------------*/
