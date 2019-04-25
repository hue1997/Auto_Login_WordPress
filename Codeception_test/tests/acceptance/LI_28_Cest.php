<?php
use Step\Acceptance\Admin as LoginStep;
class LI_28_Cest
{
    /**
     * @param LoginStep $I
     * @param $scenario
     * @throws Exception
     * click on [Lost your password] hyperlink
     */

    // tests
    public function LI_28(LoginStep $I, $scenario)
    {
        $I = new LoginStep($scenario);
        $I->clickOnLostPassword();
    }
}
