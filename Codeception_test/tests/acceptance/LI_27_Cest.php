<?php
use Step\Acceptance\Admin as LoginStep;
class LI_27_Cest
{
    /**
     * @param LoginStep $I
     * @param $scenario
     * @throws Exception
     * click on [Email me a login link] hyperlink
     */

    // tests
    public function LI_27(LoginStep $I, $scenario)
    {
        $I = new LoginStep($scenario);
        $I->clickOnLoginLink();
    }
}
