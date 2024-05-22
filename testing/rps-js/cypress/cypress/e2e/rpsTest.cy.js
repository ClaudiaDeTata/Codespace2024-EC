describe('RPS Game', () => {
  // open the url before each test
  beforeEach(() => {
    cy.visit('http://127.0.0.1:5500/rps.html')
    // assign alias to the option button
    cy.get('[data-cy="rock"]').as('rock')
    cy.get('[data-cy="paper"]').as('paper')
    cy.get('[data-cy="scissors"]').as('scissors')
    // assign alias to the user-option, computer-option and result elements
    cy.get('[data-cy="user-option"]').as('userOption')
    cy.get('[data-cy="computer-option"]').as('computerOption')
    cy.get('[data-cy="result"]').as('result')
  })
 
  // play the game with 'Rock' option and checks the result
  it('Play the game with the Rock option and checks the result', () => {
    // click on the 'Rock' button should exist
    cy.get('@rock').should('exist').click()

    // check that the user option is set to 'Rock'
    cy.get('@userOption').should('have.text', "Rock")

    // check the computer option
    cy.get('@computerOption').then((option) => {
      // if the computer option is set to 'Rock'
      if (option.text().includes("Rock")) {
        // the result is a tie
        cy.get('@result').contains("it's a tie!")
      } 
      // if the computer option is set to 'Paper'
      else if (option.text().includes("Paper")) {
        // the result is a computer win
       cy.get('@result').contains("you lose!")
      // if the computer option is set to 'Scissors'
      } else {
          // the result is a user win
          cy.get('@result').contains("you win!")
      }
    })
  })

  // play the game with 'Paper' option and checks the result
  it('Play the game with the Paper option and checks the result', () => {
    // click on the 'Paper' button should exist
    cy.get('@paper').should('exist').click()

    // check that the user option is set to 'Paper'
    cy.get('@userOption').should('have.text', "Paper")

    // check the computer option
    cy.get('@computerOption').then((option) => {
      // if the computer option is set to 'Paper'
      if (option.text().includes("Paper")) {
        // the result is a tie
        cy.get('@result').contains("it's a tie!")
      } 
      // if the computer option is set to 'Rock'
      else if (option.text().includes("Rock")) {
        // the result is a user win
       cy.get('@result').contains("you win!") 
     }
      // if the computer option is set to 'Scissors'
      else {
          // the result is a computer win
        cy.get('@result').contains("you lose!")
      }
    })
  })

  // play the game with 'Scissors' option and check the result
   it('Play the game with the Scissors option and checks the result', () => {
    // click on the 'Scissors' button should exist
    cy.get('@scissors').should('exist').click()

    // check that the user option is set to 'Scissors'
    cy.get('@userOption').should('have.text', "Scissors")

    // check the computer option
    cy.get('@computerOption').then((option) => {
      // if the computer option is set to 'Scissors'
      if (option.text().includes("Scissors")) {
        // the result is a tie
        cy.get('@result').contains("it's a tie!")
      } 
      // if the computer option is set to 'Rock'
      else if (option.text().includes("Rock")) {
        // the result is a computer win
       cy.get('@result').contains("you lose!") }
         // if the computer option is set to 'Paper'
         else {
          // the result is a user win
          cy.get('@result').contains("you win!")
      }
    })
  })
})