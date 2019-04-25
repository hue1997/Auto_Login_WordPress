<?php
use Step\Acceptance\Admin as LoginStep;
class LI_02_Cest
{
    /**
     * @param LoginStep $I
     * @param $scenario
     * @throws Exception
     * Check [Email Address or Username] and [Password] valid
     */

    // tests
    public function LI_02(LoginStep $I, $scenario)
    {
        $I = new LoginStep($scenario);
        $I->loginAsAdmin('dohue97','hueham123');
        $I->waitForText('Reader', 5);
        $I->comment("Login Succes!");
    }
}
