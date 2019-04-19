<?php
use Step\Acceptance\Admin1 as LoginStep1;
class LI_06_Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(Step\Acceptance\Admin1 $I, $scenario)
    {
        $I = new LoginStep1($scenario);
        $I->loginAsAdmin1('','//*[@id="primary"]/div/main/div/div[1]/div/form/div[1]/div[2]/button');
        $I->see('Email invalid');
    }
}
