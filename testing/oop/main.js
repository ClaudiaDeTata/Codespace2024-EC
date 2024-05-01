// how you can call methods defined within a class on instances of that class
class Car {
      // class constructor
      constructor(make, model) {
          // declaring and initializing the instance variables
          this.make = make;
          this.model = model;
      } 

      // methods
      drive() {
          // show info to the user
          console.log("Vrooom!");
      }
}

// instantiate the class Car ( = create the object)
const myCar = new Car("Toyota", "Yaris");
console.log(myCar.make);
console.log(myCar.model);
myCar.drive();
