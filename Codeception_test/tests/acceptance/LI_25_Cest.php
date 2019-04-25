<?php
use Step\Acceptance\Admin as LoginStep;
class LI_25_Cest
{
    /**
     * @param LoginStep $I
     * @param $scenario
     * @throws Exception
     * [Continue with google when you were registration
     */

    // tests
    public function LI_25(LoginStep $I, $scenario)
    {
        $I = new LoginStep($scenario);
        $I->clickOnContinueWithGoogle();
    }
}
