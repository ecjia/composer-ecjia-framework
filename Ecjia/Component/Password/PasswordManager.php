<?php


namespace Ecjia\Component\Password;


class PasswordManager
{

    protected $driver = 'md5'; // hash

    public function driver($name = null)
    {
        if (empty($name)) {
            $name = $this->getDefaultDriver();
        }

        if ($name == 'md5') {
            return $this->getMd5Password();
        }
        elseif ($name == 'hash') {
            return $this->getHashPassword();
        }
    }

    /**
     * 获取MD5的密码管理器
     * @return PasswordMd5
     */
    public function getMd5Password()
    {
        return new PasswordMd5();
    }

    /**
     * 获取Hash格式的密码管理器
     * @return PasswordHash
     */
    public function getHashPassword()
    {
        return new PasswordHash();
    }

    /**
     * 获取默认驱动，md5
     * @return string
     */
    public function getDefaultDriver()
    {
        return 'md5';
    }


    /**
     * 自动兼容驱动
     * @param $password
     * @return PasswordInterface
     */
    public function autoCompatibleDriver($password)
    {
        if (strlen($password) == 32) {
            return $this->driver('md5');
        }

        return $this->driver('hash');
    }

    /**
     * @return $this
     */
    public static function make()
    {
        static $instance;
        if (empty($instance)) {
            $instance = new static();
        }
        return $instance;
    }
}