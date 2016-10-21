List of php functions:

1. Pristup(par1, par2, par3, par4) is function that helps you to connect to server and executes SQL query.
par1 parameter is server name, par2 is name of the user who is attempting to connect to server, par3
is an password to access server and par4 is SQL query that executes afterwards. An function to rule'em all ...

2. test_input(par) basically combines of PHP's list of built-in functions: 
trim(par), stripslashes(par) and htmlspecialchars(par) all-in-one.

3. Function proverai(par) is my function that checks input of correct characters. 
Correct characters are: a-z, A-Z and 0-9. It has been done by using regex.
par is parametar variable that hold value of a input field that we checking.

4. function provera(par) is function that checks email input fields for errors that user can accidentaly(or deliberatelly) do.
There's no difference in HTML type attribute and it's value "email" but in only of what warning messages it diplays.
