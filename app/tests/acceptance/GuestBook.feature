Feature: Guest Book
  In Order to track users
  As the site owner
  I want to give users the ability to sign the guest book

  Scenario: user fills out guest book form
    Given there are no guests
    And I am on "guests/create"
    And I fill out the guest book
    Then I should see "John Doe"
    And I should see "Test Message"

  Scenario: User fills out guest book form with invalid credentials
    Given I am on "guests/create"
    And I fill out the guest book incorrectly
    Then I should see "Please fill out both fields."