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
     * Every scenario gets it's own context object.
     *
     * @param array $parameters context parameters (set them up through behat.yml)
     */
    public function __construct(array $parameters)
    {
        // Initialize your context here
    }

//
// Place your definition and hook methods here:
//
//    /**
//     * @Given /^I have done something with "([^"]*)"$/
//     */
//    public function iHaveDoneSomethingWith($argument)
//    {
//        doSomethingWith($argument);
//    }
//
    /**
     * @Given /^au端末で接続する$/
     */
    public function auguoPei()
    {
        $this->getSession()
             ->getDriver()
             ->getClient()
             ->setServerParameters(array('HTTP_USER_AGENT' => 'KDDI-CA39 UP.Browser/6.2.0.13.1.5 (GUI) MMP/2.0'));
        $this->getSession()->setRequestHeader('x-up-subno', '10msimmsim000_vr.ezweb.ne.jp');
//        throw new PendingException();
    }


    /**
     * @Given /^iPhoneで接続する$/
     */
    public function iphonePei()
    {
        $this->getSession()
             ->getDriver()
             ->getClient()
             ->setServerParameters(array('HTTP_USER_AGENT' => 'Mozilla/5.0 (iPhone; CPU iPhone OS 6_0 like Mac OS X) AppleWebKit/536.26 (KHTML, like Gecko) Version/6.0 Mobile/10A403 Safari/8536.25'));
         //$this->getSession()->setRequestHeader('x-up-subno', '10msimmsim000_vr.ezweb.ne.jp');
        //throw new PendingException();
    }
}
