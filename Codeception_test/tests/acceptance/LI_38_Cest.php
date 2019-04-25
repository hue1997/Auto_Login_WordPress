<?php
use Step\Acceptance\Admin as LoginStep;
class LI_38_Cest
{
    /**
     * @param LoginStep $I
     * @param $scenario
     * @throws Exception
     * click on [Change Email Address]
     */

    // tests
    public function LI_38(LoginStep $I, $scenario)
    {
        $I = new LoginStep($scenario);
        $I->clickOnChangeEmailAddress('dohue97');
    }
}
