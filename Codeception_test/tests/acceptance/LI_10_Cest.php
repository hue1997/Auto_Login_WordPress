<?php
use Step\Acceptance\Admin as LoginStep;
class LI_10_Cest
{
    /**
     * @param LoginStep $I
     * @param $scenario
     * @throws Exception
     *  [Email Address or Username] enter the first SPACE value.
     */

    // tests
    public function LI_10(LoginStep $I, $scenario)
    {
        $I = new LoginStep($scenario);
        $I->checkEmail('  nhoa16967@gmail.com');
        $I->waitForText('User does not exist.', 5);
        $I->comment("Login Failure!");
    }
}
