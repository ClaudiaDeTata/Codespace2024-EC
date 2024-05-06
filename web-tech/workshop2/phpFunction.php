<!-- Create a PHP function that takes in a string as an argument 
and returns the string with all vowels replaced with the character "x".

1. Define a PHP function replaceVowelsWithX that takes in a string argument $str.
2. Define an array $vowels that contains all the vowels in both lowercase and uppercase.
3. Use the str_replace function to replace all occurrences of the vowels in $str with the character "x".
4. Return the modified string as the output of the function.
5. Then use the echo statement to output the modified string to the screen.

Output

    Input:  Hello World!
    Output: HXllX WXrld! -->

<?php
    // initializing function passing a string as argument
    function replaceVowelsWithX($str)

     { 
      // array definition  
      $vowels = array ("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
      // str_replace() function
      $result = str_replace($vowels,"x", $str);
      // return output
      return $result;
     }  
     
     // return initial string 
     $input = "Hello World!";
     // return modified string
     $output = replaceVowelsWithX($input);
     // echo statement to output the result
     echo "Input: $input<br>Output: $output";
?>