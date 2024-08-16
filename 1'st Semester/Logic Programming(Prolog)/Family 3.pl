/* My First Prolog Program */
% This is also a comment

/*--------------------------------------*/
/* facts				*/
/*--------------------------------------*/
male(philip).
male(charles).
male(andrew).
male(edward).
male(george_vi).
male(prince_andrew).
male(albert).
male(edward_vii).
male(alfred).
male(henry).
male(george_kent).
male(john).
male(george_v).
male(edward_viii).
male(William).
male(Harry).
male(george).
male(louis).
male(archie).
male(mark).
male(peter).
female(elizabeth_ii).
female(anne).
female(margaret).
female(elizabeth_lyon).
female(diana).
female(zara).
female(alice).
female(alexandra).
female(alice).
female(mary_of_teck).
female(mary).
female(queen_victoria).
female(vicoria).
female(diana).
female(catherine).
female(charlotte).
female(meghan).
parent(elizabeth_ii,george_vi).
parent(elizabeth_ii,elizabeth_lyon).
parent(margaret,george_vi).
parent(margaret,elizabeth_lyon).
parent(charles,philip).
parent(charles,elizabeth_ii).
parent(andrew,philip).
parent(andrew,elizabeth_ii).
parent(edward,philip).
parent(edward,elizabeth_ii).
parent(anne,philip).
parent(anne,elizabeth_ii).
parent(george_vi,a).
parent(george_vi,b).
parent(elizabeth_lyon,c).
parent(elizabeth_lyon,d).
parent(philip,prince_andrew).
parent(philip,alice).
parent(vicoria,albert).
parent(edward_vii,albert).
parent(alexandra,albert).
parent(alice,albert).
parent(alfred,albert).
parent(vicoria,queen_victoria).
parent(edward_vii,queen_victoria).
parent(alexandra,queen_victoria).
parent(alice,queen_victoria).
parent(alfred,queen_victoria).
parent(edward_viii,george_v).
parent(george_vi,george_v).
parent(mary,george_v).
parent(henry,george_v).
parent(george_kent,george_v).
parent(john,george_v).
parent(edward_viii,elizabeth_lyon).
parent(george_vi,elizabeth_lyon).
parent(mary,elizabeth_lyon).
parent(henry,elizabeth_lyon).
parent(george_kent,elizabeth_lyon).
parent(john,elizabeth_lyon).
parent(William,charles).
parent(Harry,charles).
parent(William,diana).
parent(Harry,diana).
parent(george,William).
parent(charlotte,William).
parent(louis,William).
parent(george,catherine).
parent(charlotte,catherine).
parent(louis,catherine).
parent(archie,Harry).
parent(archie,meghan).
parent(peter,mark).
parent(zara,mark).
parent(peter,anne).
parent(zara,anne).
/*--------------------------------------*/
/* rules				*/
/*--------------------------------------*/
/* Conclusion :- Condition1, Condition2, ..., Conditionn.	*/
/* ':-' means if, ',' means and, ';' means or			*/
/* X,Y,A,B : variables						*/
/*Instructions if you wont to inspect if anna is the daughter of jon "daughter(anna,jon)." */
/*or "fahter(jacob,john)." to check if jon is the father of jacob*/
father(X,Y) :- male(Y), parent(X,Y).
mother(X,Y) :- female(Y), parent(X,Y).

son(X,Y) :- male(Y), parent(Y,X).
daughter(X,Y) :- female(Y), parent(Y,X).

sibling(X,Y) :- parent(X,A),parent(Y,A), X\=Y.
sister(X,Y) :- female(Y), parent(X,A), parent(Y,A), x\=Y.
brother(X,Y) :- male(Y), parent(X,A), parent(Y,A), x\=Y.

grandfather(X,Y) :- male(Y),parent(X,A),parent(A,Y).
grandmother(X,Y) :- female(Y),parent(X,A),parent(A,Y).
aunt(X,Y) :- female(Y),parent(X,P),sibling(P,Y).
uncle(X,Y) :- male(Y),parent(X,P),sibling(P,Y).
cousin(X,Y) :- parent(X,p1),sibling(p1,p2),parent(Y,p2).
ancestor(X,Y) :- parent(X,Y).
ancestor(X,Y) :- parent(X,S) ,ancestor(S,Y).
