// abstraction

// abstract class User
class User {
  // constructor with username initialisation and 
  constructor() {
    // check if attemptis made to instantiate the abstract class directly
    if (this.constructor === User) {
     throw new Error("Cannot instantiate abstract class");
    }
    //initialise variables
    this._username = "";
  }
  
  // getter method to retrive the value of username
  get username() {
    return this._username;
  }

  // setter method to set a new value for username
  set username(username) {
    this._username = username;
  }

  // abstract method
  stateYourRole() {
    // placeholder that reminds the method needs to be implemented in subclasses
    throw new Error("Method must be implemented in the subclasses.");
  }
}

// admin class inheriting User class
class Admin extends User {
  // constructor
  constructor() {
    // call the parent class constructor
    super();
  }
    // method override
    stateYourRole() {
      return "Admin";
    }
  }

// viewer class inheriting User class
class Viewer extends User {
  // constructor
  constructor() {
    // call the parent class constructor
    super();
  }
    // method
    stateYourRole() {
      return "Viewer";
    }
  }

// create an object from the User class
// const user = new User();
// user.stateYouRole();

// creating an admin object from the Admin class
const admin = new Admin();
// set a username
admin.username = "Balthazar";
// output
console.log("Username: ", admin.username);
console.log("Role: ", admin.stateYourRole());

// creating a viewer object from the Viewer class
const viewer = new Viewer();
// set a username
viewer.username = "Melchior";
//output
console.log("Username: ", viewer.username);
console.log("Role: ", viewer.stateYourRole());