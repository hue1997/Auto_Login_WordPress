<?php 
use Step\Acceptance\Admin as LoginStep;
class LoginFirstCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(Step\Acceptance\Admin $I, $scenario)
    {
        $I = new LoginStep($scenario);
        $I->loginAsAdmin('nhoa16967@gmail.com','hueham123');
    }
}
