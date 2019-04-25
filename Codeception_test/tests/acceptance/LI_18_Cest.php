<?php
use Step\Acceptance\Admin as LoginStep;
class LI_18_Cest
{
    /**
     * @param LoginStep $I
     * @param $scenario
     * @throws Exception
     * [Password] enter the end SPACE value.
     */

    // tests
    public function LI_18(LoginStep $I, $scenario)
    {
        $I = new LoginStep($scenario);
        $I->loginAsAdmin('nhoa16967@gmail.com','hueham123  ');
        $I->waitForText('Reader', 7);
        $I->comment("Login Succes!");
    }
}
