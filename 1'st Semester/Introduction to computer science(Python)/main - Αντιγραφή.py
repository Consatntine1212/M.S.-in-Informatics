# deterministic pushdown automaton DPDA in Python
def main():
    status = False
    myStack = []
    while status == False:
        status = True
        string = input("Please enter the expression for the DPDA : ")
        for i in range(len(string)):
            if string[i] != "(" and string[i] != ")":
                status = False
                print("The input hase to be exlusivly '(' or ')'")
                break
    count = 0
    for i in range(len(string)):
        if string[i] == "(":
            myStack.append(string[i])
            print("Step ",i+1,".We push '(' to the stuck . Stuck : ",myStack,"Rest of the expression : ", string[i:])
            count = count + 1
        elif string[i] == ")" and count > 0:
            myStack.pop
            print("Step ",i+1,".We pop from the stuck . Stuck : ",myStack,"Rest of the expression : ", string[i:])
            count = count - 1
        else:
            print("NO the DPDA does not recognize the expression  ", string )
            exit()
    if count == 0:
        print("YES the DPDA does recognize the expression  ", string)
    else:
        print("NO the DPDA does not recognize the expression  ", string )



if __name__ == '__main__':
    main()


