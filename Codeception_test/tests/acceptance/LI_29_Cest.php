<?php
use Step\Acceptance\Admin as LoginStep;
class LI_29_Cest
{
    /**
     * @param LoginStep $I
     * @param $scenario
     * @throws Exception
     *  click on [Back to wordpress.com] hyperlink
     */

    // tests
    public function LI_29(LoginStep $I, $scenario)
    {
        $I = new LoginStep($scenario);
        $I->clickOnBackToWordPress();
    }
}
