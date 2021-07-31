Feature: Default
    In order to gain access to home page
    As an anonymous user
    I need to access main page

    Scenario: Acces homepage
        Given I am on "/"
        Then I should see "Home"
