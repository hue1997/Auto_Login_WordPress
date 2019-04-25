<?php
use Step\Acceptance\Admin as LoginStep;
class LI_01Cest
{
    /**
     * @param LoginStep $I
     * @param $scenario
     * @throws Exception
     * Check [Email Address or Username] and [Password] valid
     */

    // tests
    public function LI_01(LoginStep $I, $scenario)
    {
        $I = new LoginStep($scenario);
        $I->loginAsAdmin('nhoa16967@gmail.com','hueham123');
        $I->waitForText('Reader', 5);
        $I->comment("Login Succes!");
    }
}
