<?php
use Step\Acceptance\Admin3 as LoginStep3;
class LI_07_Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(Step\Acceptance\Admin3 $I, $scenario)
    {
        $I = new LoginStep3($scenario);
        $I->loginAsAdmin3('nhoa16967@gmail.com','hueham123');
        $I->see('show pass');
    }
}
