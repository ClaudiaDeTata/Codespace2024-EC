describe('Activity 3', () => {
  it('Clicks button and interacts with canvas', () => {
    cy.visit('https://example.cypress.io/commands/actions')

    cy.get('.action-btn').click()

    cy.get('#action-canvas').click()

    cy.get('#action-canvas').click('topLeft')

    cy.get('#action-canvas').click('bottomRight')
  })
})

