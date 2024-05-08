// polymorphism

// class creation and declaration of its properties
class User {
  constructor() {
    // initializing with 0 articles
    this._numberOfArticles = 0;
  }

   // getter method to retrieve the value of nOA
   get numberOfArticles() {
    return this._numberOfArticles;
  }

  // setter method to set a new value for nOA
  set numberOfArticles(numberOfArticles) {
    this._numberOfArticles = numberOfArticles;
  }

  // method 
  calcScores() {
    // placeholder that reminds the method needs to be implemented in subclasses
    throw new Error("Method must be implemented in the subclasses.");
  }
};

// creating Author class that inherits from User
class Author extends User {
  // class constructor
  constructor(){
    // calling super class constructor
    super();
  }
  // method ovverride
  calcScores() {
    // nOA from get method
    return this.numberOfArticles * 10 + 20 ;
  }
};

// creating Editor class that inherits from User
class Editor extends User {
  // class constructor
  constructor(){
    // calling super class constructor
    super();
  }
  // method ovverride
  calcScores() {
    return this.numberOfArticles * 6 + 15 ;
  };
};

// create instance of author
const author = new Author();
// setter method used to change the number of articles for author 
author.numberOfArticles = 8;

// output 100
console.log("Author:", author.calcScores());

// create instance of author
const editor = new Editor();
// setter method used to change the number of articles for editor
editor.numberOfArticles = 15;

// output 105
console.log("Editor:", editor.calcScores());

