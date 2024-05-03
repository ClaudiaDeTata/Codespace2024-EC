// polymorphism

// class creation and declaration of its properties
class User {
  constructor() {
    // initializing with 0 articles
    this.numberOfArticles = 0;
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
    return 0;
  }
};

// creating class Author that inherits User
class Author extends User {
  // method ovverride
  calcScores() {
    return this.numberOfArticles * 10 + 20 ;
  };
};

// creating class Editor that inherits User
class Editor extends User {
  // method ovverride
  calcScores() {
    return this.numberOfArticles * 6 + 15 ;
  };
};

// create instance of author
const author = new Author();
// setter method used to change the number of articles for author 
author.numberOfArticles = 8;

// output
console.log("Author:", author.calcScores());

// create instance of author
const editor = new Editor();
// setter method used to change the number of articles for editor
editor.numberOfArticles = 15;

// output
console.log("Editor:", editor.calcScores());

