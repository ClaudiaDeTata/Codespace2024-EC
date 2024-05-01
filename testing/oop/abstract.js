// involves simplifying complex systems by modelling class based on the essential properties and behaviours an object should have#
// hides unnecessary details from the user

// abstract class
class BankAccount {

    // class constructor
    constructor (balance) {
        // check if an attempt of creating an object was made
        if ( this.constructor === BankAccount ) {
             throw new TypeError("This class cannot be instantiated..");
        }

        // balance the account
        this.balance = balance;
    }

    // abstract methods
    deposit(amount) {
      throw new TypeError("This method cannot be called..");
    }

    withdraw(amount) {
      throw new TypeError("This method cannot be called..");
    }
}

// create a savings account
class SavingsAccount extends BankAccount {

  // class constructor
  constructor(balance, interestRate) {
    // call the super class constructor
    super(balance);
    // initialize the interest property
    this.interestRate = this.interestRate;
  }

  // implement abstract methods
  // deposit
  // @override method (coming from the parent)
  deposit(amount) {
      this.balance += amount + (amount * this.interestRate) / 100;
  }
  // withdraw
  // @override method
  withdraw(amount) {
    // check if we have sufficient funds 
    if (amount <= this.balance) {
        this.balance -= amount;
    } else {
        console.log("Insufficient funds...");
    }
  }
}

// create a basic account
class BasicAccount extends BankAccount {

  // class constructor
  constructor(balance, overdraftLimit) {
    // call the super class constructor
    super(balance);
    
    this.overdraftLimit = overdraftLimit;
  }

  // implement abstract methods
  // deposit
  // @override method (coming from the parent)
  deposit(amount) {
      this.balance += amount;
  }
  // withdraw
  // @override method
  withdraw(amount) {
    // check if we have sufficient funds 
    if (amount <= this.balance + this.overdraftLimit) {
        this.balance -= amount;
    } else {
        console.log("Insufficient funds...");
    }
  }
}

// create the objects
// SavingsAccount
const savingsAccount = new SavingsAccount(1000, 5);

// deposit funds
savingsAccount.deposit(200);
console.log("SavingsAccount Balance after deposit: ", savingsAccount.balance);

// withdraw funds
savingsAccount.withdraw(200);
console.log("SavingsAccount Balance after withdraw: ", savingsAccount.balance);


// create the objects
// BasicAccount
const basicAccount = new BasicAccount(1000, 5);

// deposit funds
basicAccount.deposit(200);
console.log("BasicAccount Balance after deposit: ", basicAccount.balance);

// withdraw funds
basicAccount.withdraw(1900);
console.log("basicAccount Balance after withdraw: ", basicAccount.balance);

