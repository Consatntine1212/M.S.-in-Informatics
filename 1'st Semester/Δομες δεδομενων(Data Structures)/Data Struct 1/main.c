#include <stdio.h>
/// Υποθέτουμε ότι A, B, C είναι πίνακες με δείκτη 1..10 και τύπο στοιχείων
/// «πραγματικούς αριθμούς». Να γραφεί μια διαδικασία C η οποία χρησιμοποιεί
/// λειτουργίες retrieve και update για να υλοποιήσει την πρόσθεση πινάκων A := B + C.

/// retrieve and update do not return the answer but instead entrer or retrieve it from the given pointer
void retrieve (float * array, float  *c, int i){
    *c = array[i];
}
void update (float * array, float  *c, int i){
    array[i]= *c;
}
int main() {
    float B[9],C[9],A[9],temp,temp2,temp3;
    printf("Type a number for :\n");
    /// retrieve B[] and C[]
    for(int i  = 0 ; i < 10; i++) {
        printf("B[%d] :", i);
        scanf("%f", &temp);
        update(B,&temp,i);
    }
    printf("Type a number for :\n");
    for(int i  = 0 ; i < 10; i++) {
        printf("C[%d] :", i);
        scanf("%f", &temp);
        update(C,&temp,i);
    }
    /// retrieve B[i] and C[i] add the together and update C[i]
    for(int i  = 0 ; i < 10; i++) {
        retrieve(B,&temp,i);
        retrieve(C,&temp2,i);
        temp3 = temp + temp2;
        update(A,&temp3,i);
    }
    for(int i  = 0 ; i < 10; i++) {
        printf("A[%d] : %f .", i,A[i]);
    }
}