# JavaScript Random Number Generator

## Introduction:

The purpose of this task is to develop a solution for a game generating a random number taking in a guess and returning a string containing both the guess and whether the guess is higher, lower or exact.
I have chosen to program my game in Java Script and add HTML structure and CSS style, while also using Bootstrap, to obtain a better structured and visually appealing presentation of the game. 

## Features:

1. Setting Minimum and Maximum Values:
To begin with, I have set the minimum and maximum values for the number the user will type in the input form, assigning this variables the lowest and highest possible number that the user will be allowed to type in the input form.
This variables are 1 for the minimum number and 100 for the maximum number.
This has been done, considering that with Java Script, variables can be easily updated, thanks to its flexibility.

2. Random Number Generation with checkGuess() Function:
A function called checkGuess() has been declared, its purpose is to generate a random integer number and check this number against the user's guess.
To make sure the number has both this characteristics, I have used two built-in JS methods:
- Math.random() that returns a random floating-point number between 0 and 1;
- Math.floor() which returns an integer number rounding up the floating-point number resulted from Math.random.
Inside the function I have calculated the range of possible values included between the two variables minNum and MaxNum, ensuring that the entire range, including both maxNum and minNum, is covered.
The number obtained with Math.random is then multiplied with the aforementioned range, to make sure the number we obtain, falls within the correct range and by adding minNum, we make sure the range starts from minNumn and not from 0.

3. Debugging with Console Logs
Console.logs are included for debugging purposes to help troubleshooting and to ensure the correct functioning of the code. They can be removed in a production environment. 

4. Fallback Validation with parseInt():
The parseInt() function parses a string argument and returns an integer; even if my type element in the input form has already been set to number, I have used this as a fallback validation method to ensure compatibility.

5. DOM Manipulation for HTML Updates:    
I have accessed the DOM to modify and update the HTML document structure, by using the getElementById method. I have then accessed the input form value by using dot notation to access the value property of the element.

6. Conditional Statements with if Statement:
Using the if statement, I can handle the three possible outcomes when the user guesses the number. For each scenario, I have set the appropriate result message to be displayed.

7. Secure Content Rendering with textContent:
I have used textContent to get the result element, preferring this to innerHTML, so that the content is not parsed as HTML, but as plain text, providing a better choice in terms of performance and to ensure security, preventing HTML injections and cross-site scripting attacks.

8. String Interpolation for Readability:
Finally, I have used string interpolation to embed the guess variable within literals, this allows dynamic insertion of variables into strings, making the code more readable and maintainable.

