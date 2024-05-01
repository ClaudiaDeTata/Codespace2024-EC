// allows a class to inherit properties and methods from another class
// promotes reusability and establishes relationships between parent (superclass) and child (subclass) classes
// avoids code redundancy

// class Animal
class Animal {

  // class constructor
  constructor(name) {
      this.name = name;
  }

  // method
  sound() {
    console.log(`${this.name} makes a sound.`);
  }
}

// class Dog
class Dog extends Animal {

  // override the sound method in the Dog (subclass) class
  sound() { 
    console.log(`${this.name} barks.`);
  }
}

// class Cat
class Cat extends Animal {

  // override the sound method in the Dog (subclass) class
  sound() { 
    console.log(`${this.name} says meowww.`);
  }
}

// create the objects
const myAnimal = new Animal("Lion");
myAnimal.sound();

const myDog = new Dog("Alfie");
myDog.sound();

// example of polym
const myCat = new Cat("Camilla");
myCat.sound();

