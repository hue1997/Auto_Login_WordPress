<?php
use Step\Acceptance\Admin as LoginStep;
class LI_02_Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(Step\Acceptance\Admin $I, $scenario)
    {
        $I = new LoginStep($scenario);
        $I->loginAsAdmin('nhoa16967@gmail.com','123');
        $I->see('Password invalid');
    }
}
