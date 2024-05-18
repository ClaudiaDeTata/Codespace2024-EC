describe('Activity 1', () => {
  it('Submits form and checks input field value', () => {
    cy.visit('https://example.cypress.io')

    cy.contains('submit').click()

    cy.url().should('include', '/commands/actions')

    cy.get('#fullName1').type('Claudia De Tata')

    cy.get('#fullName1').should('have.value', 'Claudia De Tata')
  })
})


