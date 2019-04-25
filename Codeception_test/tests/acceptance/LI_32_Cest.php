<?php
use Step\Acceptance\Admin as LoginStep;
class LI_32_Cest
{
    /**
     * @param LoginStep $I
     * @param $scenario
     * @throws Exception
     * Click on [Sign Up] hyperlink
     */

    // tests
    public function LI_32(LoginStep $I, $scenario)
    {
        $I = new LoginStep($scenario);
        $I->clickOnSignUp();
    }
}
