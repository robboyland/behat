<?php

use Behat\Behat\Context\ClosuredContextInterface,
    Behat\Behat\Context\TranslatedContextInterface,
    Behat\Behat\Context\BehatContext,
    Behat\Behat\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;
use Behat\MinkExtension\Context\MinkContext;

//
// Require 3rd-party libraries here:
//
//   require_once 'PHPUnit/Autoload.php';
//   require_once 'PHPUnit/Framework/Assert/Functions.php';
//

/**
 * Features context.
 */
class FeatureContext extends MinkContext
{
    /**
     * Initializes context.
     * Every scenario gets its own context object.
     *
     * @param array $parameters context parameters (set them up through behat.yml)
     */
    public function __construct(array $parameters)
    {
        // Initialize your context here
    }

    /**
     * @static
     * @beforeSuite
     */
    public static function bootstrapLaravel()
    {
        $unitTesting = true;
        $testEnvironment = 'testing';
        require_once __DIR__.'/../../../../bootstrap/autoload.php';
        $app = require_once __DIR__.'/../../../../bootstrap/start.php';
        $app->boot();
    }

    /**
     * @Given /^I fill out the guest book$/
     */
    public function iFillOutTheGuestBook($name = 'John Doe', $message = 'Test message')
    {
        $this->fillField('name', $name);
        $this->fillField('message', $message);
        $this->pressButton('submit');
    }

    /**
     * @Given /^I fill out the guest book incorrectly$/
     */
    public function iFillOutTheGuestBookIncorrectly()
    {
        $this->iFillOutTheGuestBook('','');
    }

    /**
     * @Given /^there are no guests$/
     */
    public function thereAreNoGuests()
    {
        Guest::truncate();
    }
}
