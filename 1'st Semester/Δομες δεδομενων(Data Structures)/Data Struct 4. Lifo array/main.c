#include <stdio.h>
int main() {
    int n,index,i;
    index = 0;
    printf("What is the max size of the stack : ");
    scanf("%d",&n);
    int stack[n],temp;
    while(1){
        printf("1.Push stack.\t");
        printf("2.Pop stack.\t");
        printf("3.Display stack.\t");
        printf("0.Exit.\n");
        printf("Input : ");
        scanf("%d",&i);
        if(i == 1){
            if(index >= n){
                printf("The stuck is full !\n");
            }
            else{
                printf("Enter the value to push : ");
                scanf("%d",&temp);
                stack[index] = temp;
                index++;
            }
        }
        else if(i == 2) {
            if (index == 0) {
                printf("The stack is empty !\n");
            } else {
                printf("***********************************************\n");
                printf("The value poped is : %d\n", stack[index - 1]);
                printf("***********************************************\n");
                index = index -1;
            }
        }
        else if(i == 3){
            if (index == 0) {
                printf("The stack is empty !\n");
            }
            else {
                printf("***********************************************\n");
                printf(" The Stack is [ ");
                for (int j = 0; j < index; j++) {
                    printf(" '%d' ", stack[j]);
                }
                printf("]\n***********************************************\n");
            }
        }
        else if(i == 0){
            return 0;
        }
    }
}