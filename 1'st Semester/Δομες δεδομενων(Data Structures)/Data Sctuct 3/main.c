#include <stdio.h>
#include <stdlib.h>
#include <string.h>

struct student{
    long long am;
    char surname[20];
    char name[20];
    char patronym[20];
    char adress[20];
    long long phonenum;
    long long mobilenum;
    char cursename[20];
}st;
/// A  linked list of pointers to struct student
struct classlist{
    struct student *structPointer;
    struct classlist* next;
};
struct classlist *head;
int n;
///We can't declare the array allstudents[] yet because we dont know its size yet
struct student* allstudents;
int* pointersarray;
///--------------------------------------------------------------------------///
void singlestudent(){
    char tmp_ch[20];
    printf("Enter the student's information\n");
    printf(" AM: ");
    scanf("%lld", &st.am);
    printf("Surname: ");
    scanf("%s",st.surname);
    printf("Name: ");
    scanf("%s",st.name);
    printf("Patronym: ");
    scanf("%s",st.patronym);
    printf("Adress: ");
    scanf("%s",st.adress);
    printf("Phone number: ");
    scanf("%lld", &st.phonenum);
    printf("Mobile phone number: ");
    scanf("%lld", &st.mobilenum);
    printf("Elective curse name: ");
    scanf("%s",st.cursename);
    printf("The students information are :\nAM : %lld \nSurname : %s \nName : %s \nPatronym : %s\nAdress : %s \nPhone number : %lld \nMobile phone number : %lld \nElective curse name : %s \n\n",st.am,st.surname,st.name,st.patronym,st.adress,st.phonenum,st.mobilenum,st.cursename);
}
///--------------------------------------------------------------------------///
int main() {
    int i,j,count;
    char classname[20];
    while (1) {
        printf("1.Represent student struct for a single student.\n");
        printf("2.Represent student struct for n student using an array.\n");
        printf("3.Display the information of the n students.\n");
        printf("4.Display the information of all the students in the array that are enrolled in a class using struct of pointers.\n");
        printf("0.Exit.\n");
        scanf("%d", &j);
        if (j == 1){
            singlestudent();
            printf("The students information are :\nAM : %lld \nSurname : %s \nName : %s \nPatronym : %s\nAdress : %s \nPhone number : %lld \nMobile phone number : %lld \nElective curse name : %s \n\n",st.am,st.surname,st.name,st.patronym,st.adress,st.phonenum,st.mobilenum,st.cursename);
        }
        if(j == 2){
            printf("Please enter the numbers of students : ");
            scanf("%d", &n);
            allstudents = (struct student*)malloc(sizeof(struct student)*n);
            for ( i = 0; i < n; i++) {
                printf("Enter the %d student's information\n", i + 1);
                printf(" AM                : ");
                scanf("%lld", &allstudents[i].am);
                printf("Surname            : ");
                scanf("%s", allstudents[i].surname);
                printf("Name               : ");
                scanf("%s", allstudents[i].name);
                printf("Patronym           : ");
                scanf("%s", allstudents[i].patronym);
                printf("Adress             : ");
                scanf("%s", allstudents[i].adress);
                printf("Phone number       : ");
                scanf("%lld", &allstudents[i].phonenum);
                printf("Mobile phone number: ");
                scanf("%lld", &allstudents[i].mobilenum);
                printf("Elective curse name: ");
                scanf("%s", allstudents[i].cursename);
            }
        }
        if(j == 3){
            for ( i = 0 ;i < n ; i++){
                printf("The students information are :\nAM                 : %lld \nSurname            : %s \nName               : %s \nPatronym           : %s\nAdress             : %s \nPhone number       : %lld \nMobile phone number : %lld \nElective curse name : %s \n\n",allstudents[i].am,allstudents[i].surname,allstudents[i].name,allstudents[i].patronym,allstudents[i].adress,allstudents[i].phonenum,allstudents[i].mobilenum,allstudents[i].cursename);
            }
        }
        if(j == 4){
            printf("Please enter the name of the class : ");
            scanf("%s", classname);
            for(i = 0 ; i < n ; i++){
                if (strcmp(allstudents[i].cursename, classname) == 0){
                    struct classlist *pts;
                    pts= malloc(sizeof(struct classlist));
                    pts->structPointer = &allstudents[i];
                    if(head==NULL){
                        printf("\n2\n");
                        pts->next = NULL;
                        head = pts;
                    } else{
                        printf("\n3\n");
                        pts->next = head;
                        head = pts;
                    }
                }
            }
            {
                struct classlist *temp;
                temp=head;
                if(temp==NULL){
                    return 0;
                }
                printf("*****************************************************\n");
                count = 1;
                printf("The information of the students that chose class '%s' are :\n  ",classname);
                while (temp!=NULL){
                    printf("The %d students information are :\nAM                 : %lld \nSurname            : %s \nName               : %s \nPatronym           : %s\nAdress             : %s \nPhone number       : %lld \nMobile phone number : %lld \nElective curse name : %s \n\n",count,temp->structPointer->am,temp->structPointer->surname,temp->structPointer->name,temp->structPointer->patronym,temp->structPointer->adress,temp->structPointer->phonenum,temp->structPointer->mobilenum,temp->structPointer->cursename);
                    temp=temp->next;
                    count++;
                }
                printf("*****************************************************\n");
            }

        }

    }
}