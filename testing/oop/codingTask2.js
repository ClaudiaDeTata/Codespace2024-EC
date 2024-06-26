/* 
In this task you will extend the previous one with the help of some guiding topics.

Your 'User' class should look like this:

class User {
  constructor(firstName, lastName) {
    this.firstName = firstName;
    this.lastName = lastName;
  }
  
  hello() {
    return "hello";
  }  
}
Get and Set Methods 

Add the class constructor.
Add the getters and setters methods after the class constructor.
Change your hello() method to return 'Hello World!'.
Add the following:
1. Create an user object called user that will represent the User class.
2. Use the setters methods to set the firstName and lastName instance variables of your user object.
3. Use getters methods to retrieve the firstName and lastName Strings from the user object and add a blank space in between.

Your program output should now look like this:

Hello World!
My name is firstName lastSurname */

// encapsulation
// declaring the class and its properties
class User {
  constructor() { // not assigning values at the beginning to be able to change them later
    // initialise variables
    this._firstName = "";
    this._lastName = "";
 }

  // getter method to retrieve first and last name
  get firstName() {
    return this._firstName;
  }

  get lastName() {
    return this._lastName;
  }

  // setter method to set a new value for first and last name
  // overriding initial value
  set firstName(firstName) {
    this._firstName = firstName;
  }

  set lastName(lastName) {
    this._lastName = lastName;
  }

  // method
  hello() {
    return "Hello World!";
  }  
}

// object representing User class
const user = new User();

// method invocation
user.firstName = "John";
user.lastName = "Doe";

// use the getters to retrieve firstName and lastName
let fullName = user.firstName + " " + user.lastName;

console.log(user.hello());
console.log("My name is " + fullName);