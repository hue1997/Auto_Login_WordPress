<?php
namespace Step\Acceptance;
use Page\Login as LoginPage1;
class Admin1 extends \AcceptanceTester
{

    public function loginAsAdmin1($name, $continue)
    {
        $I = $this;
        $I->amOnPage(LoginPage1::$URL);
        $I->fillField(LoginPage1::$usernameField, $name);
        $I->click(LoginPage1::$ContinueButton, $continue);
        $I->wait(2);
        //$I->see('Dont go to home');
    }

}