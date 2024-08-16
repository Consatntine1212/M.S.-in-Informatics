/* My First Prolog Program */
% This is also a comment

/*--------------------------------------*/
/* facts 				*/
/*--------------------------------------*/

/* parents(Paidi, Pateras, Mhtera) 	*/
/* parents, goneis : predicate		*/
/* kostas, marios, niki, ... atoms	*/

goneis(kostas, marios, niki).
goneis(thodwra, marios, niki).
goneis(marios, papous_kostas, giagia_eirini).
goneis(niki, papous_themis, giagia_thodora).

/*--------------------------------------*/
/* rules 				*/
/*--------------------------------------*/
/* Conclusion :- Condition1, Condition2, ..., Conditionn. 	*/
/* ':-' means if, ',' means and, ';' means or			*/
/* X,Y,A,B : variables						*/

adelfia(X,Y) :- goneis(X,A,B), goneis(Y,A,B), X\=Y.
papous(X,X_Papous) :- 
	goneis(X, X_Pateras, X_Mhtera), 
	goneis(X_Pateras, X_Papous, X_Giagia).

papous(X,X_Papous) :- 
	goneis(X, X_Pateras, X_Mhtera), 
	goneis(X_Mhtera, X_Papous, X_Giagia).





