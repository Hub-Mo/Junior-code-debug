# Junior-code-debug

## Exercise 1

saw that a variable $x was called but didnt see the declaration anywhere. in the debugger loggen this value = null. 

>solution: putting $x parameter in the new_exercise function.
---

## Exercise 2 

loggen the array in the debugger console. monday was index 0 but it was echoing $week[1].

>solutions: changed [1] -> [0]
---

## exercise 3 

first deleted exclamation point and it echoed debuggen A, placed it back and then it worked like it should ? 

>solution: idk (going to ask about this in class, maybe something i didnt catch yet).
---

## exercise 4

wasted ALOT of time on this one because it seemd right to me. then after searching the syntax of a PHP foreach loop. found the " cHarActEr ";

>solution: &
---


## exercise 5

first try was : < 'aa'. didnt work for some reason. after some more tries i added count($arr) and put that as the max.

>solution: count($arr) <= 25;
---

## exercise 6

this was a hard one for me and im sure it could be solved in a better way then i did. but it works so its OK.

used debugger at the start and went trough everything step by step. i have found that the rand[] that chooses a random number in $heroes went to index 2... wich is zero. 

added a variable with int 0 and this pics the first array in $heroes. after that it increments that vatiable++ and in the second loop chooses the second array in $heroes. (worked). after that i noticed that the names where displaying in the wrong place. so dealt with that by echoing the string first and then implode the names of the heroes.

>solution: removed the first rand[] replaced this with a variable that gets incremented by a function. and echoed string first then impoded array to display the names right.
---

## exercise 7

when i change 'Y' into 2022 manualy it gives me an error that it should be a string. and if i change it back it wants an integer?

> solution: removed int.
---

## exercise 8 

returnd 2 values and it was using OR instead of AND.

>solution: changed || -> && and removed the second return value and plced this with the first return value.
---

## exercise 9 

it didnt work for https. fixed this by giving it space.

>solution: gave the link a space at the start and end and echoed everything.
---

## exercise 10

changed the for loop to a foreach loop and checked if the items in the valid fruits are in areTheseFruits. if not push it to that array and if areTheseFruits contains something that is not in valid fruits. it unsets it.

> solution : foreach insted of for and second for each to compare valid fruits with areTheseFruits and push pear in areTheseFruits.
---

# End