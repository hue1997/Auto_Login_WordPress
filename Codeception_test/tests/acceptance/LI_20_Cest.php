<?php
use Step\Acceptance\Admin as LoginStep;
class LI_20_Cest
{
    /**
     * @param LoginStep $I
     * @param $scenario
     * @throws Exception
     * login to account with on many other tabs.
     */

    // tests
    public function LI_20(LoginStep $I, $scenario)
    {
        $I = new LoginStep($scenario);
        $I->loginAsAdmin('dohue97','hueham123');
        $I->wait(2);
        $I->openNewTab();
        $I->loginAsAdmin('dohue97','hueham123');
        $I->waitForText('Reader', 5);
        $I->comment("Login Succes!");
    }
}
