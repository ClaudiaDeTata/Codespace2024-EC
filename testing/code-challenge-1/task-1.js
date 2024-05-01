/* Coding Task 1
Write a function expression called reverseString(). 
It should accept a single argument representing a person's name. 
It should return a reverse string as shown below:

reverseString("John");
reverseString("James");
Output

nhoJ
semaJ 

// function declaration, name is a parameter 
let reverseString = name => {
  // if the length of the name is 0 or 1, return the name unchanged
  if (name.length <= 1) {
    return name }
    else { 
      // split name into an array
      let chars = name.split("");
      // initializing an empty string to store the reversed string
      let result = "";
      // index initialized to iterate starting from the last character of the array
      let i = chars.length - 1;
      // iteration of the array from the last character to the first
      while ( i >= 0 ) {
        // every character will be added at the beginning of the string 
        result += chars[i];
        // moving to previous character of the array
        i--;
      }
      return result;
    }
};

console.log(reverseString("John"));
console.log(reverseString("Claudia"));

// split()
// reverse()
// join() */

let reverseString = name => name.split("").reverse().join("");

console.log(reverseString("John"));
console.log(reverseString("Claudia"));