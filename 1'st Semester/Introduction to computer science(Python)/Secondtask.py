import random

table = []
#-------------------------------------------------------------------------------------------------#
#def Check determines if the winning conditions are met if yes it returns true if no it returns false.
def Check():
    status = False
    for l in range(3):
        if table[l][0] != "empty":
            if table[l][0] == table[l][1] and table[l][1] == table[l][2]:
                status = True
            elif table[l][0] == "small" and table[l][1] == "medium" and table[l][2] == "large":
                status = True
            elif table[l][2] == "small" and table[l][1] == "medium" and table[l][0] == "large":
                status = True
    #///////////////////////////////////////////////////////////////////////////////////////////# 
    for l in range(3):
        if table[0][l] != "empty":
            if table[0][l] == table[1][l] and table[1][l] == table[2][l]:
                status = True
            elif table[0][l] == "small" and table[1][l] == "medium" and table[2][l] == "large":
                status = True
            elif table[2][l] == "small" and table[1][l] == "medium" and table[0][l] == "large":
                status = True
    #///////////////////////////////////////////////////////////////////////////////////////////# 
    if table[0][0] == "small" and table[1][1] == "medium" and table[2][2] == "large":
        status = True
    elif table[2][2] == "small" and table[1][1] == "medium" and table[0][0] == "large":
        status = True
    #///////////////////////////////////////////////////////////////////////////////////////////#    
    if table[2][0] == "small" and table[1][1] == "medium" and table[0][2] == "large":
        status = True
    elif table[0][2] == "small" and table[1][1] == "medium" and table[2][0] == "large":
        status = True
    #///////////////////////////////////////////////////////////////////////////////////////////# 
    return status

#-------------------------------------------------------------------------------------------------#
c = 0
for r in range(100):
    #The program first declares a 3 by 3 list that represent the game and a list with 9 small 9 medium and 9 large lids.
    table = [ [ "empty", "empty", "empty"], [ "empty", "empty", "empty"], [ "empty", "empty", "empty"]]
    lids = []
    incerted = False
    for i in range(9):
        lids.append("small")
    for i in range(9):
        lids.append("medium")
    for i in range(9):
        lids.append("large")
    # While there is still empty space in the table, we chouse a random point to insert the new lid and a random part of the list of lids which we pop 
    while "empty" in table[0] or "empty" in table[1] or "empty" in table[2]:
        i = random.randint(0 ,2)
        j = random.randint(0 ,2)
        ran = random.randint(0,len(lids) - 1)
        poped = lids.pop(ran)
    #If the new lid feet's the chosen spot we add it to the table and add 1 to the number of steps if not we append it back to the list of lids .
    #If a chosen lid does not feet in the spot, then the process is not counted as a step 
        if poped == "small":
            if table[i][j] != "small" and table[i][j] != "medium" and table[i][j] != "large":
                table[i][j] = poped
                c = c + 1
            else:
                lids.append(poped)
        elif  poped == "medium":
            if table[i][j] != "medium" and table[i][j] != "large":
                table[i][j] = poped
                c = c + 1
            else:
                lids.append(poped)
        elif  poped == "large":
            if table[i][j] != "large":
                table[i][j] = poped
                c = c + 1
            else:
                lids.append(poped)
    # We call the function check witch checks if there is a winning triad of lids and returns True or false and if there is a wining triad we end the current game 
        output = Check()
        if output == True:
            break
print("After 100 repets of the game the avarage moves to end the game where", c / 100)      
#-------------------------------------------------------------------------------------------------#            


