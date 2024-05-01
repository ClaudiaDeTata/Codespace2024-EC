// allows objects to be treated as instances of their parent class rather than their actual class
// enables flexibility and interchangeability of objects

// class shape
class Shape {
    // class constructor
    constructor () {}

    // method
    area() {
        console.log("Area method to be implemented...");
    }
}

// class Square
class Square extends Shape {
    // class constructor
    constructor(side) {
         // calls the Shape (superclass) constructor 
         super();
         // initializing instance variables 
         this.side = side;
    }

     // ovveride method  area
     area() {
      return this.side ** 2;
  }
}

// class Circle
class Circle extends Shape {
  // class constructor
  constructor(radius) {
       // calls the Shape (superclass) constructor 
       super();
       // initializing instance variables 
       this.radius = radius;
  }

        // ovveride method  area
     area() {
      return Math.PI * this.radius ** 2;
     }
  }

  // create instances (objects)
  const square = new Square(2);
  const circle = new Circle(2);

  // calculate and show the area to the user
  console.log("Square area: ", square.area());
  console.log("Circle area: ", circle.area());