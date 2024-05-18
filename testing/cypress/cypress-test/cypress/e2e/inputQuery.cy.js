describe('Activity 2', () => {
  it('Fills and validates email input form', () => {
    cy.visit('https://example.cypress.io/commands/actions')

    cy.contains('submit')

    cy.url().should('include', '/commands/actions')

    cy.get('#email1').type('detatacl@gmail.com')

    cy.get('#email1').should('have.value', 'detatacl@gmail.com')
  })
})



