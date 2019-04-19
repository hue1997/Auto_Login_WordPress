<?php
use Step\Acceptance\Admin as LoginStep;
use Page\Login as LoginPage;

class LI_23_Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(Step\Acceptance\Admin $I, $scenario)
    {
        $I = new LoginStep($scenario);
        $I->loginAsAdmin('nhoa16967@gmail.com','hueham123');
        $I->wait('5');
        $I->click(LoginPage::$Other);
        $I->loginAsAdmin('nhoa16967@gmail.com','hueham123');
    }
}
