// traditional function
function greet(name) {
  return "hello, my name is " + name;
}

// 1.
// anonymous function
let greet = function(name) {
  return "hello, my name is " + name;
}

// 2.
// arrow function
let greet = (name) => {
  return "hello, my name is " + name;
}

let greet = (name) => "hello, my name is " + name;

let greet = name => "hello, my name is " + name;

console.log(greet("John"));
