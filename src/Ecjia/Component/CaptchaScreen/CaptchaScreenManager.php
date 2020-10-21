<?php

namespace Ecjia\Component\CaptchaScreen;

use RC_Hook;

class CaptchaScreenManager
{
    /**
     * 验证码场景值
     * @return array
     */
    protected $screens = [];

    public function __construct($screens = [])
    {
        $this->screens = $screens;
    }

    /**
     * @param CaptchaScreen $screen
     * @return $this
     */
    public function addScreen(CaptchaScreen $screen)
    {
        $this->screens[] = $screen;

        return $this;
    }

    /**
     * @param CaptchaScreen $screen
     * @return $this
     */
    public function removeScreen(CaptchaScreen $screen)
    {
        $this->screens = collect($this->screens)->map(function (CaptchaScreen $item) use ($screen) {
            if ($item === $screen) {
                return null;
            }
            return $item;
        })->filter->toArray();

        return $this;
    }

    /**
     * @param CaptchaScreen $name
     * @return $this
     */
    public function removeScreenWithName($name)
    {
        $this->screens = collect($this->screens)->filter(function (CaptchaScreen $item) use ($name) {
            if ($item->getName() === $name) {
                return null;
            }
            return $item;
        })->toArray();

        return $this;
    }

    /**
     * @param array $screens
     * @return CaptchaScreenManager
     */
    public function setScreens(array $screens): CaptchaScreenManager
    {
        $this->screens = $screens;
        return $this;
    }

    /**
     * @return array
     */
    public function getScreens(): array
    {
        return RC_Hook::apply_filters('captcha_screens_filter', $this->screens);
    }

    public function render($value = null)
    {
        return collect($this->getScreens())->map(function (CaptchaScreen $item) use ($value) {
            $item->checkSelected($value);
            return $this->renderTemplate($item);
        })->implode("\n");
    }

    /**
     * @param CaptchaScreen $screen
     * @return string
     */
    protected function renderTemplate(CaptchaScreen $screen)
    {
        $name = $screen->getName();
        $value = $screen->getValue();
        $label = $screen->getLabel();
        if ($screen->isSelected()) {
            $selected = 'checked="checked"';
        } else {
            $selected = '';
        }

        return <<<TEMPLATE
<input type="checkbox" name="{$name}" value="{$value}" {$selected} /><span>{$label}</span>
TEMPLATE;

    }


}