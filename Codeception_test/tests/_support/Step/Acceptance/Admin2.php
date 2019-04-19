<?php
namespace Step\Acceptance;
use Page\Login as LoginPage2;
class Admin2 extends \AcceptanceTester
{

    public function loginAsAdmin2($name)
    {
        $I = $this;
        $I->amOnPage(LoginPage2::$URL);
        //$I->click(LoginPage2::)
        $I->wait(2);
        $I->see('home page');
    }

}