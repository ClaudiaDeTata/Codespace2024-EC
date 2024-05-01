// encapsulation
class Circle {

  // class constructor
  constructor(radius) {
    // initialise the variables
    this._radius = radius;
  }

  // getters
  get radius() {
      return this._radius;
  }

  // setters
  set radius(radius) {
      this._radius = radius;
  }

  // calculate area method
  calculateArea() {
      return Math.PI * this._radius ** 2;
  }
}

// objects
const myCircle = new Circle(5);
console.log("Radius: ", myCircle.radius);
console.log("Area: ", myCircle.calculateArea());

// changing the radius value 
myCircle.radius = 7;
console.log("Radius: ", myCircle.radius);
console.log("Area: ", myCircle.calculateArea());