<?php
use Step\Acceptance\Admin as LoginStep;
class LI_24_Cest
{
    /**
     * @param LoginStep $I
     * @param $scenario
     * @throws Exception
     * click on [Terms of Server] hyperlink
     */

    // tests
    public function LI_24(LoginStep $I, $scenario)
    {
        $I = new LoginStep($scenario);
        $I->clickOnTermsOfService();
    }
}
