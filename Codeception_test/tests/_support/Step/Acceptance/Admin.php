<?php
namespace Step\Acceptance;
use Page\Login as LoginPage;

/**
 * Class Admin
 * @package Step\Acceptance
 */
class Admin extends \AcceptanceTester
{
    /**
     * @param $name
     * @param $password
     * @throws \Exception
     */
    public function loginAsAdmin($name, $password)
    {
        $I = $this;
        $I->amOnPage(LoginPage::$URL);
        $I->fillField(LoginPage::$usernameField, $name);
        $I->click(LoginPage::$continueButton);
        $I->waitForElementVisible(LoginPage::$passwordField, 4);
        $I->fillField(LoginPage::$passwordField, $password);
        $I->click(LoginPage::$loginButton);
    }

    public function showPass($name, $password)
    {
        $I = $this;
        $I->amOnPage(LoginPage::$URL);
        $I->fillField(LoginPage::$usernameField, $name);
        $I->click(LoginPage::$continueButton);
        $I->waitForElementVisible(LoginPage::$passwordField, 4);
        $I->fillField(LoginPage::$passwordField, $password);
    }

    /**
     * @param $name
     * @throws \Exception
     * check email
     */
    public function checkEmail($name)
    {
        $I = $this;
        $I->amOnPage(LoginPage::$URL);
        $I->fillField(LoginPage::$usernameField, $name);
        $I->click(LoginPage::$continueButton);
    }

    public function checkEye($name, $password)
    {
        $I = $this;
        $I->amOnPage(LoginPage::$URL);
        $I->fillField(LoginPage::$usernameField, $name);
        $I->click(LoginPage::$continueButton);
        $I->waitForElementVisible(LoginPage::$passwordField, 4);
        $I->fillField(LoginPage::$passwordField, $password);
        $I->click(LoginPage::$openEye);
        $I->wait(3);
        $I->click(LoginPage::$openEye);
    }

    /**
     * Test click on Sign-Up hyperlink
     * @throws \Exception
     */
    public function clickOnSignUp()
    {
        $I = $this;
        $I->amonPage(LoginPage::$URL);
        $I->click(LoginPage::$signUp);
        $I->comment("Click Succes!");
    }

    /**
     * Test click on Continue With Google hyperlink
     * @throws \Exception
     */
    public function clickOnContinueWithGoogle()
    {
        $I = $this;
        $I->amonPage(LoginPage::$URL);
        $I->click(LoginPage::$continueWithGoogle);
        $I->comment("Click Succes!");
    }

    /**
     * Test click on Change Email Address hyperlink
     * @throws \Exception
     */
    public function clickOnChangeEmailAddress($name)
    {
        $I = $this;
        $I->amonPage(LoginPage::$URL);
        $I->fillField(LoginPage::$usernameField, $name);
        $I->click(LoginPage::$continueButton);
        $I->wait(3);
        //$I->waitForElementNotVisible(LoginPage::$changeEmailAddress,5);
        $I->click(LoginPage::$changeEmailAddress);
        $I->comment("Click Succes!");
    }

    /**
     * Test click on Terms Of Service hyperlink
     * @throws \Exception
     */
    public function clickOnTermsOfService()
    {
        $I = $this;
        $I->amonPage(LoginPage::$URL);
        $I->click(LoginPage::$termsOfService);
        $I->waitForText('Terms of Service', 3);
        $I->comment("Click Succes!");
    }

    /**
     * Test click on Create A New Account hyperlink
     * @throws \Exception
     */
    public function clickOnCreateANewAccount()
    {
        $I = $this;
        $I->amonPage(LoginPage::$URL);
        $I->click(LoginPage::$create);
        $I->comment("Click Succes!");
    }

    /**
     * Test click on Login Link hyperlink
     * @throws \Exception
     */
    public function clickOnLoginLink()
    {
        $I = $this;
        $I->amonPage(LoginPage::$URL);
        $I->click(LoginPage::$mailLoginLink);
        $I->waitForText('Email me a login link.', 5);
        $I->comment("Click Succes!");
    }

    /**
     * Test click on Lost Your Password hyperlink
     * @throws \Exception
     */
    public function clickOnLostPassword()
    {
        $I = $this;
        $I->amonPage(LoginPage::$URL);
        $I->click(LoginPage::$lostPassword);
        $I->waitForText('Lost Password', 5);
        $I->comment("Click Succes!");
    }

    /**
     * Test click on Back To WordPress hyperlink
     * @throws \Exception
     */
    public function clickOnBackToWordPress()
    {
        $I = $this;
        $I->amonPage(LoginPage::$URL);
        $I->click(LoginPage::$backToWordPress);
        $I->comment("Click Succes!");
    }

    /**
     * Test click on Vietnamese hyperlink
     * @throws \Exception
     */
    public function clickOnVietnamese()
    {
        $I = $this;
        $I->amonPage(LoginPage::$URL);
        $I->click(LoginPage::$vietnamese);
        $I->waitForText('Translate', 5);
        $I->comment("Click Succes!");
    }


}