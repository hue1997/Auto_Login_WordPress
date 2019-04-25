<?php
use Step\Acceptance\Admin as LoginStep;
class LI_04_Cest
{
    /**
     * @param LoginStep $I
     * @param $scenario
     * @throws Exception
     * check [Email Address or Username] invalid
     */

    // tests
    public function LI_04(LoginStep $I, $scenario)
    {
        $I = new LoginStep($scenario);
        $I->checkEmail('dohue@gmail.com');
        $I->waitForText('User does not exist.', 5);
        $I->comment("Check success!");
    }
}
