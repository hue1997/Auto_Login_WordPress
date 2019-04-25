<?php
use Step\Acceptance\Admin as LoginStep;
class LI_30_Cest
{
    /**
     * @param LoginStep $I
     * @param $scenario
     * @throws Exception
     */

    // tests
    public function LI_30(LoginStep $I, $scenario)
    {
        $I = new LoginStep($scenario);
        $I->loginAsAdmin('dohue97','hueham123');
        $I->closeTab();
        $I->openNewTab();
        $I->comment('Login Success');
    }
}
