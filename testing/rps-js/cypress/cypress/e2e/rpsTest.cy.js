describe('Rps Test', () => {
  beforeEach(() => {
    cy.visit('http://127.0.0.1:3000/c:/xampp/htdocs/Codespace2024-EC/testing/rps-js/rps.html'); 
  });
  
  // testing buttons and checking their content
  it('contains three buttons: Rock, Paper, Scissors', () => {
    cy.get('.choices button').should('have.length', 3);
    cy.get('#rock').should('exist').and('have.text', 'Rock');
    cy.get('#paper').should('exist').and('have.text', 'Paper');
    cy.get('#scissors').should('exist').and('have.text', 'Scissors');
});

// simulating the buttons are clicked and checking their text content
it('updates the user choice when a button is clicked', () => {
  cy.get('#rock').click();
  cy.get('#user-choice').should('have.text', 'rock');

  cy.get('#paper').click();
  cy.get('#user-choice').should('have.text', 'paper');

  cy.get('#scissors').click();
  cy.get('#user-choice').should('have.text', 'scissors');
});


});