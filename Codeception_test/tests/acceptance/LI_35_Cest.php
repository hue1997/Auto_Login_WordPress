<?php
use Step\Acceptance\Admin as LoginStep;
class LI_35_Cest
{
    /**
     * @param LoginStep $I
     * @param $scenario
     * @throws Exception
     * password show ***
     */

    // tests
    public function LI_35(LoginStep $I, $scenario)
    {
        $I = new LoginStep($scenario);
        $I->showPass('nhoa16967@gmail.com','hueham123');
        $I->comment("Login Succes!");
    }
}
