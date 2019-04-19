<?php
namespace Step\Acceptance;
use Page\Login as LoginPage3;
class Admin3 extends \AcceptanceTester
{

    public function loginAsAdmin3($name, $password)
    {
        $I = $this;
        $I->amOnPage(LoginPage3::$URL);
        $I->fillField(LoginPage3::$usernameField, $name);
        $I->click(LoginPage3::$ContinueButton);
        $I->wait(2);
        $I->fillField(LoginPage3::$passwordField, $password);
        $I->wait(2);
        $I->click(LoginPage3::$OpenEye);
        $I->wait(4);
        $I->click(LoginPage3::$loginButton);
        $I->wait(2);
        $I->see('Reader');
    }

}