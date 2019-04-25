<?php
use Step\Acceptance\Admin as LoginStep;
class LI_05_Cest
{
    /**
     * @param LoginStep $I
     * @param $scenario
     * @throws Exception
     * Check [Email Address or Username] invalid
     */

    // tests
    public function LI_05(LoginStep $I, $scenario)
    {
        $I = new LoginStep($scenario);
        $I->checkEmail('hue');
        $I->waitForText('User does not exist.', 5);
        $I->comment("Check success!");
    }
}
