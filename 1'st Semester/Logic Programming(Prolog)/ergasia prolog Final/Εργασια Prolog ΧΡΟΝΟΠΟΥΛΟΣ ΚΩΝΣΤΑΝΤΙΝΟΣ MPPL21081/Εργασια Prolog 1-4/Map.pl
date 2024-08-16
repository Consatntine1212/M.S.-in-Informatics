/*--------------------------------------------*/
%   X  1 2 3 4 5     Y
map1([
      [0,0,0,0,0],  %1
      [1,0,0,1,1],  %2
      [1,1,0,1,1],  %3
      [1,1,1,1,1],  %4
      [1,1,1,1,1]   %5
]).

nth_map(Map, C, L, Element) :-
    nth_element(Map, L, Line),
    nth_element(Line, C, Element), !.

map_position(Map, Element, C, L) :-
    element_position(Map, Line, L),
    element_position(Line, Element, C).

nth_element([X|_], 1, X) :- !.
nth_element([_|Xs], N, E) :- M is N-1, nth_element(Xs, M, E).

printlist([]) :- nl. !.
printlist([X|Xs]) :- write(X), write(' '), printlist(Xs).

printmap([]) :- nl , !.
printmap([Line|Rest]) :- printlist(Line), printmap(Rest).

map_maxXY(M, X, Y):-
   firstElement(M, F),
   listlength(F, X),
   listlength(M, Y).

/*--------------- Library --------------------*/

/*--------------------------------------------*/

element_position([X|_], X, 1).
element_position([_|Xs], X, N) :-
    element_position(Xs, X, N1), N is N1 + 1.


listlength([], 0).
listlength([_|Xs], S) :- listlength(Xs, K), S is K+1.
firstElement([X|_], X).
