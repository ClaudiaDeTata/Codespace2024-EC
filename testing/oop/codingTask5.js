// abstraction

// abstract class User
class User {
  // constructor with username initialisation and 
  constructor(username) {
    this.username = username;
  }
  // abstract method
  stateYourRole() {
  }

  // getter method to retrive the value of username
  get username() {
    return this._username;
  }

  // setter method to set a new value for username
  set username(username) {
    this._username = username;
  }
}

// admin class inheriting User class
class Admin extends User {
  // constructor
  constructor(username) {
    // call the parent class constructor
    super(username);
  }
    // method
    stateYourRole() {
      return "Admin";
    }
  }

// viewer class inheriting User class
class Viewer extends User {
  // constructor
  constructor(username) {
    // call the parent class constructor
    super(username);
  }
    // method
    stateYourRole() {
      return "Viewer";
    }
  }

// creating an admin instance
// passing username as an argument
let admin = new Admin("Balthazar");
// output
console.log(`Username: ${admin.username}. Role: ${admin.stateYourRole()}`);

// creating a viewer instance
// passing username as an argument
let viewer = new Viewer("Melchior");
//output
console.log(`Username: ${viewer.username}. Role: ${viewer.stateYourRole()}`);