<?php
use Step\Acceptance\Admin as LoginStep;
class LI_03_Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function LI_03(LoginStep $I, $scenario)
    {
        $I = new LoginStep($scenario);
        $I->loginAsAdmin('nhoa16967@gmail.com', '123');
        $I->waitForText('Oops, that\'s not the right password. Please try again!', 5);
        $I->comment("login failure!");
    }
}
