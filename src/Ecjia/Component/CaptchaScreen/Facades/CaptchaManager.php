<?php


namespace Ecjia\Component\CaptchaScreen\Facades;

use Ecjia\Component\CaptchaScreen\CaptchaScreen;
use Royalcms\Component\Support\Facades\Facade;

/**
 * Class CaptchaManager
 * @package Ecjia\Component\CaptchaScreen\Facades
 *
 * @method static CaptchaScreenManager addScreen(CaptchaScreen $screen)
 * @method static CaptchaScreenManager removeScreen(CaptchaScreen $screen)
 * @method static CaptchaScreenManager removeScreenWithName($name)
 * @method static CaptchaScreenManager setScreens(array $screens)
 * @method static array getScreens()
 * @method static string render($value = null)
 */
class CaptchaManager extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'ecjia.captcha.screen';
    }

}