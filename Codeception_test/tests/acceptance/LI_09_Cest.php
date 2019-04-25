<?php
use Step\Acceptance\Admin as LoginStep;
class LI_09_Cest
{
    /**
     * @param LoginStep $I
     * @param $scenario
     * @throws Exception
     * [Email Address or Username] with special character.
     */

    // tests
    public function LI_09(LoginStep $I, $scenario)
    {
        $I = new LoginStep($scenario);
        $I->checkEmail('&*^');
        $I->waitForText('404', 5);
        $I->comment("Login Failure!");
    }
}
