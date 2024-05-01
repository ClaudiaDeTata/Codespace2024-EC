
// 1. Write an arrow function expression called greet(). It should accept a single argument representing a person's name.
// concatenation
let greet = name => "Hi " + name + "!";

console.log(greet("John"));
console.log(greet("Claudia"));
console.log(greet("Anna"));

// alternative J style approach
// interpolation
// let greet = name => `Hi ${name}!` 


/* 2. Convert the function isEven() into an equivalent arrow function.
 function isEven(num) {
  return num % 2 === 0;
}; */

let isEven = num => num % 2 === 0;

console.log(isEven(14));
console.log(isEven(55));
console.log(isEven(987.25)); 


/* 3. Convert the following JavaScript function declaration to arrow function syntax:

function counterFunc(counter) {
  if (counter > 100) {
    counter = 0;
  } else {
    counter++;
  }
  
  return counter;
}  */

// ternary operator
// condition ? expression1 : expression2
// counter++ = post-increment operator
// counter-- = post-decrement op
let counterFunc = counter => (counter > 100 ? counter = 0 : counter++);

console.log(counterFunc(25));
console.log(counterFunc(150)); 
console.log(counterFunc(89));

/* 4. Write an arrow function for the following JavaScript function:

function nameAge(name, age) {
  console.log("Hello " + name);
  console.log("You are " + age + " years old");
}; */

let nameAge = (name, age) => { 
    console.log("Hello " + name);
    console.log("You are " + age + " years old");
     };

     nameAge("Claudia", 42);

/* 5. Write the arrow function for the following:

function printOnly() {
  console.log("printing");
}; */

let printOnly = () => console.log("printing");

printOnly();

/* 6. Write the arrow function for the following:
function sum(num1, num2) {
    return num1 + num2
  }; */

  // return can be removed as there is only one line of code
  let sum = (num1, num2) => num1 + num2;

  console.log(sum(25, 15)); 
  console.log(sum(33, 99));




