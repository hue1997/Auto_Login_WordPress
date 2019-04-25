<?php
use Step\Acceptance\Admin as LoginStep;
class LI_13_Cest
{
    /**
     * @param LoginStep $I
     * @param $scenario
     * @throws Exception
     * [Email Address or Username] enter the middle SPACE value
     */

    // tests
    public function LI_13(LoginStep $I, $scenario)
    {
        $I = new LoginStep($scenario);
        $I->loginAsAdmin('dohue  97','hueham123');
        $I->waitForText('Reader', 7);
        $I->comment("Login Succes!");
    }
}
