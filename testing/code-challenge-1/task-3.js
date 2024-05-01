/* Write a function expression called mostExpensiveItem(). 
It should accept an array of items as a single argument. 
It should return the item that has the most cost tied up, calculated by the amount in stock * price.

Test Data

[
   { item: "irn bru", price: 3.25, stock: 50 },
   { item: "fanta", price: 3.98, stock: 45 },
   { item: "diet coke", price: 4.40, stock: 38 }, 
   { item: "7up", price: 3.99, stock: 42 }, 
]
Output

{ item: 'fanta', price: 3.98, stock: 45 } */


// initializing array list
let drinks =  
[
   { item: "irn bru", price: 3.25, stock: 50 },
   { item: "fanta", price: 3.98, stock: 45 },
   { item: "diet coke", price: 4.40, stock: 38 }, 
   { item: "7up", price: 3.99, stock: 42 }, 
];

// initializing function expression to find the most expensive item 
let mostExpensiveItem = drinks => { 
    // initializing variable maxCost as the product of the price and the stock of the first element
    let maxCost = drinks[0].price * drinks[0].stock;
    // initializing variable mostExpensive as the first element of the array 
    let mostExpensive = drinks[0];
        
        // index initialized at 1 (second element) as we already have the price of the first element
        // iterating through the list length
        for ( let i = 1; i < drinks.length; i++ ) {
            // initializing currentCost as the product of the price and the stock of every elemet of the array
            let currentCost = drinks[i].price * drinks[i].stock;
            // if currentCost is greater than maxCost, update the value of maxCost and mostExpensive
            if ( currentCost > maxCost ) { 
               maxCost = currentCost;
               // update mostExpensive as the last drink iterated through
               mostExpensive = drinks[i];
  }
}
// return the most expensive item
return mostExpensive;
};

console.log(mostExpensiveItem(drinks)); 


/* Alt code
// array of items
const items =  
[
   { item: "irn bru", price: 3.25, stock: 50 },
   { item: "fanta", price: 3.98, stock: 45 },
   { item: "diet coke", price: 4.40, stock: 38 }, 
   { item: "7up", price: 3.99, stock: 42 }, 
];

// function retunr most expensive item
const mostExpensiveItem = array => {
   
   // empty object to add the most expensive item
   let mostExpensiveItemObj = {};

   // cost tied up to the most expensive item
   let mostExpensiveItemCost = 0;

   // for loop to loop through the array of items
   for ( let i = 0; i < array.length; i++ ) {
      // calculate the cost tied up on a single item
      const costTiedUpSingleItem = array[i].price * array[i].stock;

      // check the most expensive item
      if (costTiedUpSingleItem > mostExpensiveItemCost) {
         mostExpensiveItemCost = costTiedUpSingleItem;
         mostExpensiveItemObj = array[i]; 
      }
   }
   // return most expensive item
   return mostExpensiveItemObj;
}

// show the item
console.log(mostExpensiveItem(items));





