<?php
use Step\Acceptance\Admin as LoginStep;
class LI_07_Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function LI_07(LoginStep $I, $scenario)
    {
        $I = new LoginStep($scenario);
        $I->checkEmail('');
        $I->waitForText('Please enter a username or email address.', 5);
        $I->comment("Login Failure!");
    }
}
