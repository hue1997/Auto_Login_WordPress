<?php
use Step\Acceptance\Admin as LoginStep;
class LI_36_Cest
{
    /**
     * @param LoginStep $I
     * @param $scenario
     * @throws Exception
     * Click on [Vietnamese] hyperlink
     */

    // tests
    public function LI_36(LoginStep $I, $scenario)
    {
        $I = new LoginStep($scenario);
        $I->clickOnVietnamese();
    }
}
