// setting min and max numbers for the user
let minNum = 1; 
let maxNum = 100; 

// function to generate a random integer number and compare it against the user's input
function checkGuess() {
  let randomNum = Math.floor(Math.random() * (maxNum - minNum + 1)) + minNum;
    
    console.log("minNum:", minNum);
    console.log("maxNum:", maxNum);
    console.log("randomNum:", randomNum);

  let guess = parseInt(document.getElementById("guessInput").value); // variable storing the user guess
  let result = document.getElementById("result"); // variable storing result

    console.log("Guess:", guess); 
    console.log("Random Number:", randomNum); 

// if statement checking the three possibilities and printing final result    
if ( guess === randomNum ) {
   result.textContent = `You answered ${guess}. This is the correct answer! 🎉` 
} else if ( guess > randomNum ) {
   result.textContent = `You answered ${guess}. The correct answer is lower.`
 } else {
   result.textContent = `You answered ${guess}. The correct answer is higher.`
 }
}
