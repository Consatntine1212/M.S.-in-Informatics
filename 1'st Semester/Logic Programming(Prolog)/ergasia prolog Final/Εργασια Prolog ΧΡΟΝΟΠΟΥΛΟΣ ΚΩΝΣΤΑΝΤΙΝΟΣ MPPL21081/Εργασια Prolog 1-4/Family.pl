/* My First Prolog Program */
% This is also a comment

/*--------------------------------------*/
/* facts				*/
/*--------------------------------------*/
male(cruz).
male(cash).
male(jamal).
male(esteban).
male(aedan).
male(jonah).
male(carlos).
male(sidney).
male(zaid).
male(sammy).
male(nash).
male(broderick).
female(emerson).
female(jakayla).
female(angelique).
female(victoria).
female(adelaide).
female(kimora).
female(kailee).
female(daniela).
female(ariana).
female(celeste).
female(alexia).
female(francesca).


parent(esteban,celeste).
parent(victoria,celeste).
parent(cash,esteban).
parent(jakayla,esteban).
parent(cruz,cash).
parent(emerson,cash).
parent(aedan,alexia).
parent(adelaide,alexia).
parent(jamal,aedan).
parent(angelique,aedan).
parent(cruz,angelique).
parent(emerson,angelique).
parent(carlos,sammy).
parent(kimora,sammy).
parent(sidney,ariana).
parent(kailee,ariana).
parent(jonah,carlos).
parent(adelaide,carlos).
parent(jonah,kailee).
parent(adelaide,kailee).
parent(cruz,jonah).
parent(emerson,jonah).


/*--------------------------------------*/
/* rules				*/
/*--------------------------------------*/
/* Conclusion :- Condition1, Condition2, ..., Conditionn.	*/
/* ':-' means if, ',' means and, ';' means or			*/
/* X,Y,A,B : variables						*/
/*Instructions if you wont to inspect if anna is the daughter of jon "daughter(anna,jon)." */
/*or "fahter(jacob,john)." to check if jon is the father of jacob*/





father(X,Y) :- male(X),parent(X,Y).
mother(X,Y) :- female(X),parent(X,Y).
sibling(X,Y) :- parent(A,X),parent(A,Y), X\=Y.
grandfather(X,Y) :- male(X),parent(X,S),parent(S,Y).
grandmother(X,Y) :- female(X),parent(X,S),parent(S,Y).
aunt(X,Y) :- female(X),sibling(X,Parent),parent(Parent,Y),X\=Y.
uncle(X,Y) :- male(X),sibling(X,Parent),parent(Parent,Y),X\=Y.
cousin(X,Y) :- grandfather(G,X),grandfather(G,Y);
               grandmother(G,X),grandmother(G,Y),X\=Y.
seccousin(X,Y) :- parent(P1,X),cousin(P1,P2), parent(P2,X),X\=Y.
ancestor(X,Y) :- parent(X,Y).
ancestor(X,Y) :- parent(X,Somebody),ancestor(Somebody,Y).
allkids(X,List) :- findall(Y,parent(X,Y),List).
