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

/*------------------------------------------------------*/	
/*   North-West	  North	  North-East			*/
/*		    Λ					*/
/*		    |					*/
/*	 West   <- Here ->  East			*/
/*		    |					*/
/*		    V					*/
/*    South-West  South  South-East			*/
/*------------------------------------------------------*/
move(north,	    (C,L), (C1,L1)) :- C1 is C,   L1 is L-1.	% North
move(north_east,    (C,L), (C1,L1)) :- C1 is C+1, L1 is L-1.	% North-East
move(east,	    (C,L), (C1,L1)) :- C1 is C+1, L1 is L.	% East
move(south_east,    (C,L), (C1,L1)) :- C1 is C+1, L1 is L+1.	% South-East
move(south,	    (C,L), (C1,L1)) :- C1 is C,   L1 is L+1.	% South
move(south_west,    (C,L), (C1,L1)) :- C1 is C-1, L1 is L+1.	% South-West
move(west,	    (C,L), (C1,L1)) :- C1 is C-1, L1 is L.	% West
move(north_west,    (C,L), (C1,L1)) :- C1 is C-1, L1 is L-1.	% North-West

/*----------------------------------------------*/

validmove(X,Y) :- move(X,Y), valid_square(Y).
valid_square(Y) :- in_limits(Y), empty_square(Y).
in_limits((C,L)) :-
	map(Map), length(Map,MaxL),
	Map=[Line|_],length(Line, MaxC),
	1=<C, C=<MaxC, 1=<L, L=<MaxL.
empty_square((C,L)) :- map(M),cl_element(M,C,L,0).

/*----------------------------------------------*/

%  X = (Cx,Lx), Y = (Cy, Ly)

findpath :-
	start(S),finish(F),
	path(S,F,[S],P), print_list(P).

path(X,Y,_,[X,Y]) :- validmove(X,Y).
path(X,Y,Visited,[X|Rest]) :-
	validmove(X,Z),
	not(member(Z,Visited)),
	path(Z,Y,[Z|Visited],Rest).


/*------------------ Library ------------------------*/


% nth_element(List,N,E)
% ?- nth_elelemt([a,b,c,d,f],4,E)
% E=d

nth_element([X|_],1,X) :- !.
nth_element([_|Xs],N,X) :- N1 is N-1, nth_element(Xs,N1,X).

% cl_element(Map,C,L,E)
cl_element(Map,C,L,E) :-
	nth_element(Map,L,Line),
	nth_element(Line,C,E).

print_list([]) :- !.
print_list([X|Xs]) :- writeln(X), print_list(Xs).











