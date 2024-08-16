#include <stdio.h>
#include <stdlib.h>

 struct stack{
    int value;
    struct stack *next;
};
struct stack *head;

void stack_push(){
    int tmp;
    printf("Please enter the number to Push : ");
    scanf("%d",&tmp);
    struct stack *pts;
    pts = malloc(sizeof(struct stack));
    pts->value = tmp;
    pts->next = head;
    head=pts;
}

void stack_pop(){
    int tmp;
    struct stack *pts;
    pts = head;
    if(pts==NULL){
        printf("The stack is empty\n");
        return;
    }
    tmp = pts->value;
    head = pts->next;
    printf("*****************************************************\n");
    printf("The Poped number is : %d\n",tmp);
    printf("*****************************************************\n");
}

void readAll(){
    struct stack *temp;
    temp=head;
    if(temp==NULL){
        printf("The stack is empty\n");
        return;
    }
    printf("*****************************************************\n");
    printf("The stuck is :\n [ ");
    while (temp!=NULL){
        printf("  %d   ", temp->value);
        temp=temp->next;
    }
    printf(" ]\n*****************************************************\n");
}


int main() {

    while(1){
        int i;
        printf("1.Push Stack.\t");
        printf("2.Pop Stack.\t");
        printf("3.Desplay  Stack.\t");
        printf("0.Exit.\n");
        printf("Input : ");
        scanf("%d",&i);
        if(i == 1){
            stack_push();
        }
        else if(i == 2){
            stack_pop();
        }
        else if(i == 0){
            return 0;
        } else if(i == 3){
            readAll();
        }
    }
}
