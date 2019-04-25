<?php
use Step\Acceptance\Admin as LoginStep;
class LI_26_Cest
{
    /**
     * @param LoginStep $I
     * @param $scenario
     * @throws Exception
     * click on [Create a new account link] hyperlink
     */

    // tests
    public function LI_26(LoginStep $I, $scenario)
    {
        $I = new LoginStep($scenario);
        $I->clickOnCreateANewAccount();
    }
}
