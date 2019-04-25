<?php
use Step\Acceptance\Admin as LoginStep;
class LI_17_Cest
{
    /**
     * @param LoginStep $I
     * @param $scenario
     * @throws Exception
     * [Password] enter the middle SPACE value.
     */

    // tests
    public function LI_17(LoginStep $I, $scenario)
    {
        $I = new LoginStep($scenario);
        $I->loginAsAdmin('nhoa16967@gmail.com','hue  ham123');
        $I->waitForText('Oops, that\'s not the right password. Please try again!', 7);
        $I->comment("Login fsilure!");
    }
}
