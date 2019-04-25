<?php
namespace Page;

class Login
{
    // include url of current page
    public static $URL = '//log-in?redirect_to=https%3A%2F%2Fwordpress.com%2F';

    /**
     * @var string
     */
    public static $usernameField = '//input[@id="usernameOrEmail"]';

    /**
     * @var string
     */
    public static $passwordField = '//input[@id="password"]';

    /**
     * @var string
     */
    public static $continueButton = '//div[@class="login__form-action"]/button';

    /**
     * @var string
     */
    public static $changeEmailAddress='//a[@class="login__form-change-username"]';

    /**
     * @var string
     */
    public static $loginButton = '//button[@class="button form-button is-primary"]';

    /**
     * @var string
     */
    public static $signUp = '(//a[@href="/start"])[1]';

    /**
     * @var string
     */
    public static $termsOfService = '//a[@href="https://wordpress.com/tos/"]';

    /**
     * @var string
     */
    public static $continueWithGoogle = '//div[@class="social-buttons__button-container"]/button';

    /**
     * @var string
     */
    public static $create = '(//a[@href="/start"])[2]';

    /**
     * @var string
     */
    public static $mailLoginLink = '//a[@href="/log-in/link"]';

    /**
     * @var string
     */
    public static $lostPassword = '//a[@href="https://wordpress.com/wp-login.php?action=lostpassword"]';

    /**
     * @var string
     */
    public static $backToWordPress = '//a[@href="https://wordpress.com"]';

    /**
     * @var string
     */
    public static $vietnamese = '(//div[@class="translator-invite__content"])/a';

    /**
     * @var string
     */
    public static $openEye='//span[@class="form-password-input__toggle form-password-input__toggle-visibility"]';

    /**
     * @var string
     */
    public static $other = '//log-in?redirect_to=https%3A%2F%2Fwordpress.com%2F';

    public static function route($param)
    {
        return static::$URL.$param;

    }


}
