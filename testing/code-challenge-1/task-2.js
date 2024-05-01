/* Write a function expression called reverseArray(). 
It should accept an array as a single argument. 
It should return a reversed array and it should work for any data type.

reverseArray([1, 2, 3, 4, 5]);
reverseArray(["I", "like", "JavaScript"]);
Output

[5, 4, 3, 2, 1]
["JavaScript", "like", "I"] 

// initializing the function reverseArray to an array as a single argument
let reverseArray = array => { 
  // slice() method used to make sure the function works for any data type 
  // reverse() method used to reverse the elements of the array
  array.slice().reverse(); 
}; */

let reverseArray = array => array.reverse();

console.log(reverseArray([1, 2, 3, 4, 5]));
console.log(reverseArray(["I", "like", "Javascript"]));


