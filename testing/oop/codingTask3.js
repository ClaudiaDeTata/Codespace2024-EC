/* 
Inheritance (Subclass and Superclass)
In this task your are required to create an Admin class, which is a child class of the User class:

1. Create a  User class:
§ Add to the class a property with the name of username.

§ Create a setter method that can set the value of the username.

2. Create the Admin class that inherits the User class:
§ Add a method by the name of expressYourRole(), and make it return the string: "Admin".

§ Add to the Admin class another method, sayHello(), that returns the string "Hello admin, XXX" 
with the username instead of XXX.

3. Create an object admin out of the class Admin:
§ Set its name to "Balthazar" and say hello to the user. */


// inheritance 
// class creation
class User {
  // class constructor
  constructor() {
    // initializing variables
    this._username = "";
  }

  // getter method to retrieve the value of username
  get username() {
    return this._username;
  }

  // setter method to set a new value for username
  set username(username) {
    this._username = username;
  }
};

// defining class Admin that inherits from User
class Admin extends User {
  // class constructor
  constructor() {
    // call super class constructor
    super(); // if we had passed a value into the constructor, we should pass it on the super as well
  }

// method
expressYourRole() {
  return "Admin";
} 

// method
sayHello() {
  // calling the super class get method
  return `Hello admin, ${this.username}`;
 }
}

// object admin creation and setting the name of the user
const admin = new Admin();

// set username
admin.username = "Balthazar";

// output
console.log(admin.sayHello());


