<?php
use Step\Acceptance\Admin as LoginStep;
class LI_11_Cest
{
    /**
     * @param LoginStep $I
     * @param $scenario
     * @throws Exception
     * [Email Address or Username] enter the first SPACE value
     */

    // tests
    public function LI_11(LoginStep $I, $scenario)
    {
        $I = new LoginStep($scenario);
        $I->loginAsAdmin('  dohue97','hueham123');
        $I->waitForText('Reader', 7);
        $I->comment("Login Succes!");
    }
}
