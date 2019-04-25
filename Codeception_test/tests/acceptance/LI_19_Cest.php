<?php
use Step\Acceptance\Admin as LoginStep;
class LI_19_Cest
{
    /**
     * @param LoginStep $I
     * @param $scenario
     * @throws Exception
     * show or hide the password.
     */

    // tests
    public function LI_19(LoginStep $I, $scenario)
    {
        $I = new LoginStep($scenario);
        $I->checkEye('dohue97', 'hueham123');
        $I->wait(3);
        $I->comment("Show and hide Password success!");
    }
}
