<?php
namespace Page;

class Login
{
    // include url of current page
    public static $URL = '//log-in?redirect_to=https%3A%2F%2Fwordpress.com%2F';

    public static $usernameField = '//*[@id="usernameOrEmail"]';
    public static $passwordField = '//*[@id="password"]';
    public static $ContinueButton = '//*[@id="primary"]/div/main/div/div[1]/div/form/div[1]/div[2]/button';
    public static $loginButton = '//*[@id="primary"]/div/main/div/div[1]/div/form/div[1]/div[2]/button';
    public static $SignUp = '//*[@id="header"]/div/a/span';
    public static $TermsOfService = '//*[@id="primary"]/div/main/div/div[1]/div/form/div[1]/p/a';
    public static $ContinueWithGoogle = '//*[@id="primary"]/div/main/div/div[1]/div/form/div[2]/div[2]/div/div/div/button/span';
    public static $Create = '//*[@id="primary"]/div/main/div/div[2]/a[1]';
    public static $MailLoginLink = '//*[@id="primary"]/div/main/div/div[2]/a[2]';
    public static $LostPassword = '//*[@id="primary"]/div/main/div/div[2]/a[3]';
    public static $Back = '//*[@id="primary"]/div/main/div/div[2]/a[4]';
    public static $Vietnamese = '//*[@id="primary"]/div/main/div/div[3]/div/a';
    public static $OpenEye='//*[@id="primary"]/div/main/div/div[1]/div/form/div[1]/div[1]/div/div/span/svg/g/path';
    public static $Other = '//log-in?redirect_to=https%3A%2F%2Fwordpress.com%2F';

    public static function route($param)
    {
        return static::$URL.$param;

    }


}
