<?php

namespace Ecjia\Component\AdminNotification;

/**
 * 消息通知提示
 * @author royalwang
 *
 */
class AdminNotification
{

    /**
     * top-right
     * top-center
     * top-left
     * bottom-right
     * bottom-left
     * @var string
     */
    private $position = 'top-right';

    /**
     * st-error
     * st-success
     * st-info
     * @var string
     */
    private $type;


    private $autoclose;

    /**
     * animations:
     * fast
     * slow
     * integer
     * @var string
     */
    private $speed;

    /**
     * true or false
     * @var bool
     */
    private $duplicates;

    private $content;

    /**
     * Create instance
     *
     * @return  void
     */
    public static function make($content)
    {
        return new static($content);
    }

    public function __construct($content)
    {
        $this->content = $content;
    }

    /**
     * @return string
     */
    public function getPosition(): string
    {
        return $this->position;
    }

    /**
     * @param string $position
     * @return AdminNotification
     */
    public function setPosition(string $position): AdminNotification
    {
        $this->position = $position;
        return $this;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return AdminNotification
     */
    public function setType(string $type): AdminNotification
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAutoclose()
    {
        return $this->autoclose;
    }

    /**
     * @param mixed $autoclose
     * @return AdminNotification
     */
    public function setAutoclose($autoclose)
    {
        $this->autoclose = $autoclose;
        return $this;
    }

    /**
     * @return string
     */
    public function getSpeed(): string
    {
        return $this->speed;
    }

    /**
     * @param string $speed
     * @return AdminNotification
     */
    public function setSpeed(string $speed): AdminNotification
    {
        $this->speed = $speed;
        return $this;
    }

    /**
     * @return bool
     */
    public function isDuplicates(): bool
    {
        return $this->duplicates;
    }

    /**
     * @param bool $duplicates
     * @return AdminNotification
     */
    public function setDuplicates(bool $duplicates): AdminNotification
    {
        $this->duplicates = $duplicates;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     * @return AdminNotification
     */
    public function setContent($content)
    {
        $this->content = $content;
        return $this;
    }


}