<?php
use Page\Login as LoginPage;
class LI_12_Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->amOnPage('/log-in?redirect_to=https%3A%2F%2Fwordpress.com%2F');
        $I->click(LoginPage::$Create);
        $I->wait(5);
    }
}
