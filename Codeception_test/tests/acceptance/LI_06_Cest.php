<?php
use Step\Acceptance\Admin as LoginStep;
class LI_06_Cest
{
    /**
     * @param LoginStep $I
     * @param $scenario
     * @throws Exception
     * check [Email Address or Username] is Space value
     */

    // tests
    public function LI_06(LoginStep $I, $scenario)
    {
        $I = new LoginStep($scenario);
        $I->loginAsAdmin('   ', 'hueham123');
        $I->waitForText('<strong>ERROR</strong>: The username field is empty.', 5);
        $I->comment("Login Succes!");
    }
}
