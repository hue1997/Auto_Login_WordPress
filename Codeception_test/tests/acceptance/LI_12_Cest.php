<?php
use Step\Acceptance\Admin as LoginStep;
class LI_12_Cest
{
    /**
     * @param LoginStep $I
     * @param $scenario
     * @throws Exception
     * [Email Address or Username] enter the middle SPACE value
     */

    // tests
    public function LI_12(LoginStep $I, $scenario)
    {
        $I = new LoginStep($scenario);
        $I->checkEmail('nhoa16967  @gmail.com');
        $I->waitForText('User does not exist.', 5);
        $I->comment("Login Failure!");
    }
}
