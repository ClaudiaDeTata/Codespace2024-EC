describe('My First Test', () => {
  it('Gets, types and asserts', () => {
    cy.visit('https://example.cypress.io')

    cy.contains('type').click()

    // Should be on a new URL which
    // includes '/commands/actions'
    cy.url().should('include', '/commands/actions')

    // Get an input, type into it
    cy.get('.action-email').type('fake@email.com')

    //  Verify that the value has been updated
    cy.get('.action-email').should('have.value', 'fake@email.com')
  })
})

/* 
1. Visit: https://example.cypress.io
2. Find the element with content: type
3. Click on it
4. Get the URL
5. Assert it includes: /commands/actions
6. Get the input with the action-email data-testid
7. Type fake@email.com into the input
8. Assert the input reflects the new value */

/*
1. Given a user visits https://example.cypress.io
2. When they click the link labeled type
3. And they type "fake@email.com" into the [data-testid="action-email"] input
4. Then the URL should include /commands/actions
5. And the [data-testid="action-email"] input has "fake@email.com" as its value */