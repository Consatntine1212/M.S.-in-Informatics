
/*----------------------*/
/* Map Planner		*/
/*----------------------*/
mymap(
% Column,X 1 2 3 4 5 6 7   Line,Y
	[ [0,9,0,3,1,1,0],	% 1
	  [0,6,0,0,0,0,0],	% 2
	  [0,1,0,1,0,0,1],	% 3
	  [0,0,0,0,0,1,1],	% 4
	  [0,1,1,1,1,1,1],	% 5
	  [0,0,1,0,0,1,1]	% 6
	]).

start((1,5)).
finish((4,5)).

/*----------------------------------------------*/
/* Map Path finder				*/
/*  ?- map_path((1,1),(5,2),[],1,10,Path).	*/
/*----------------------------------------------*/


go1 :- map_path((1,1),(5,2),[],1,100,Path), print_path(Path).
map_path(Y,Y,_,_,_,[]) :- !.
map_path(_,_,_,Max,Max,[]) :- write(" Max Counter "),nl,!.

map_path(Start, Finish, Visited, Counter, Max,[(Direction,Start,Next)|Rest]) :-
	move(Direction,Start,Next),
	valid(Next,E),
	not(member(Next,Visited)),
	Counter1 is Counter+1,
	map_path(Next, Finish,[Next|Visited],Counter1,Max,Rest).

path_from_to :-
	start(S), finish(F), mymap(M),
	map_path(Start, Finish, Visited, Counter, Max,[(Direction,Start,Next)|Rest]).
valid(Next,E) :-
	mymap(Map),
	Next=(C,L),
	in_map(Map, C, L),
	nth_map(Map, C1, L1, E),
	E=0.

/*------------------------------------------------------*/
/* Pws mporw na kinhthw ??? North - East - South - West		*/
/*   North-West	North	North-East			*/
/*		    Λ					*/
/*		    |					*/
/*	   West <- Here -> East				*/
/*		    |					*/
/*		    V					*/
/*    South-West	South	South-East			*/
/*------------------------------------------------------*/
move(north,	(C,L), (C1,L1)) :- C1 is C,     L1 is L-1.	% North
move(north_east,    (C,L), (C1,L1)) :- C1 is C+1, L1 is L-1.	% North-East
move(east,	(C,L), (C1,L1)) :- C1 is C+1, L1 is L.	% East
move(south_east,	(C,L), (C1,L1)) :- C1 is C+1, L1 is L+1.	% South-East
move(south,	(C,L), (C1,L1)) :- C1 is C,     L1 is L+1.	% South
move(south_west,	(C,L), (C1,L1)) :- C1 is C-1, L1 is L+1.	% South-West
move(west,	(C,L), (C1,L1)) :- C1 is C-1, L1 is L.	% West
move(north_west,	(C,L), (C1,L1)) :- C1 is C-1, L1 is L-1.	% North-West

/*--------------------------------------*/
/* Valid Position			*/
/*  ?- valid_position((2,1)).		*/
/* false				*/
/*--------------------------------------*/
valid_position((C,L)) :-
	mymap(Map),
% To tetragwno pou tha mas paei to move prepei na einai entos xarth
	in_map(Map, C, L),
% Keno to tetragwno pou tha mas paei to move, na einai 0
	nth_map(Map, C, L, E),
	E=0.


in_map(Map, C, L) :-
	length(Map,MaxL),
	Map=[Head|_Tail], length(Head,MaxC),
	1=<C, C=<MaxC, 1=<L, L=<MaxL.


/*------------------------------*/
/* Poio einai to (3,4) tou xarth ?	*/
/* Column = 3, Line = 4 => einai to 0	*/
/*------------------------------*/
nth_map(Map, C, L, Element) :-
	nth_element(Map, L, Line),
	nth_element(Line, C, Element), !.

map_position(Map, Element, C, L) :-
	element_position(Map, Line, L),
	element_position(Line, Element, C).

/*====== End of Map Planner ======*/


/* Lists Handling			*/
/*				*/
/* ?-sum([2,3,-4],[5,-6,7],Z).	*/
/* Z=[7, -3, 3].			*/
/*				*/
/* ?-mul([2,3,-4],[5,-6,7],Z).	*/
/* Z=[10, -18, -28].		*/
/*				*/
/* ?-sumlist([2,3,-4],Z).		*/
/* Z=1.				*/
/*				*/
/* ?-multiplylist([2,3,-4],Z).		*/
/* Z=-24.			*/
/*				*/
/* ?- internal_product1([1,2,0],[3,4,5],X).	*/
/* X = 11				*/
/*				*/
/* ?- internal_product2([1,2,0],[3,4,5],X).	*/
/* X = 1*3+2*4+0*5 = 11		*/
/* ?- first_element([1,2,3,4],X).		*/
/* X=1					*/
/* ?- last_element([1,2,3,4],X).		*/
/* X=4					*/


sum([], [], []).
sum([H1|T1], [H2|T2], [H|T] ) :-
	H is H1+H2,
	sum(T1,T2,T).
mul([], [], []).
mul([H1|T1],[H2|T2],[H|T]) :-
        H is H1*H2,
        mul(T1,T2,T).
sumlist([],0).
sumlist([H|T], R) :-
	sumlist(T,S),
	R is H+S.
multiplylist([],1).
multiplylist([H|T], R) :-
	multiplylist(T,S),
	R is H*S.
/* esoteriko_ginomeno */
/* ?- internal_product([1,2,0],[3,4,5],X). */
/* X = 1*3+2*4+0*5 =11		    */
/* ?- internal_product([1],[3],X). */
/* X = 1*3 =3		    */
/* [7:40 PM] KONSTANTINOS KOLIOS */
/* ?- internal_product1([1,-2,3],[4,5,6],X). */
internal_product1([], [], 0).
internal_product1([H1|T1], [H2|T2], X) :-
	H is H1*H2,
	internal_product1(T1,T2,R),
	X is H + R.
/* [7:31 PM] ΜΑΞΙΜΟΣ ΕΝΡΙΚΟΣ ΝΙΚΗΦΟΡΑΚΗΣ */
/* ?- internal_product2([1,-2,3],[4,5,6],X). */
internal_product2(L1, L2, R) :-
	mul(L1, L2, L3), sumlist(L3, R).

/* first_element(List,First)			*/
/* ?- first_element([1,2,3,4],X).		*/
/* X=1					*/
first_element([X|_Y], X).
/* last_element(List,Last)			*/
/* ?- last_element([1,2,3,4],X).		*/
/* X=4					*/
last_element([X],X).
last_element([X|Y],Z) :-
	write(X), write(" "),write(Y),nl,
	last_element(Y,Z).
/* A is member of the list [A|Tail] because it is	*/
/* the first element of the list [A|Tail]	*/
mymember1(A,[A|_]).
mymember1(A,[_|Tail]) :- mymember1(A,Tail).

/*---------------------------------------*/
/* Χαρίτων				*/
/*---------------------------------------*/
mymember2(A,[Head|Tail]) :- (A = Head; mymember2(A,Tail)).

/*---------------------------------------*/
/* Βρισκει το Ν-οστο στοιχειο μιας λιστας	*/
/* nth_element(List, N, Element)		*/
/* List, N : input, Element : output		*/
/*--------------------------------------*/
nth_element([Head|_], 1, Head).
nth_element([_|Tail], N, E) :-
	M is N-1,
	nth_element(Tail, M, E).
/*---------------------------------------*/
/* Βρισκει σε ποιά θέση N της λίστας List	*/
/* βρίσκεται το στοιχείο Ε			*/
/* element_position(List, Element, N)		*/
/* List, Element : input, N : output */
/*--------------------------------------*/
element_position([Head|_], Head, 1).
element_position([_Head|Tail], E, N) :-
	element_position(Tail, E, M),
	N is M+1.
myappend([],Y,Y).
myappend([X|Xs], Ys, [X|Rest]) :-
	myappend(Xs, Ys, Rest).


/*---------------------------------------*/
/*
myflattenall([],[]).
myflattenall([Head|Tail], Rest) :-
	Head=[],
	myflattenall(Tail, Rest).
myflattenall([Head|Tail], [X|Rest]) :-
	Head=[X|Xs],
	not(list(X)),
	myflattenall([Xs|Tail], Rest).
myflattenall([Head|Tail], Rest) :-
	Head=[X|Xs],
	list(X),
	myflattenall(X,Xlist),
	append(Xlist,Xs,NewXs),
	myflattenall([NewXs|Tail], Rest).
*/
myflatten2([],[]).
myflatten2([Head|Tail], Rest) :-
	Head=[],
	myflatten2(Tail, Rest).
myflatten2([Head|Tail], [X|Rest]) :-
	Head=[X|Xs],
	myflatten2([Xs|Tail], Rest).

list([]).
list([_X|Xs]) :- list(Xs).

print_path([]) :- write("Finished"),nl, !.
print_path([(Direction,(C,L),(C1,L1))|Xs]) :-
	write((C,L)), write(" , "),
	write(Direction),write(" , "),write((C1,L1)),write(" => "),nl,
	print_path(Xs).


% gia counter 2 orismata :
% (A) Counter, Arxiki timi 1
% (B) Max value of Counter

print_nl(Max,Max).
print_nl(Counter,Max) :-
	write(Counter),nl,
	Counter1 is Counter+1,
	print_nl(Counter1,Max).

cls :- write('\e[2J').













