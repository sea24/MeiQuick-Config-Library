<?php declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/10/23
 * Time: 16:01
 */

namespace MeiQuick\Config\Library\Email;


class EmailConfig
{
    const MAIL_DRIVER = "smtp";
    const MAIL_HOST = "hwsmtp.exmail.qq.com";
    const MAIL_PORT = "465";
    const MAIL_USERNAME = "dev@meiquick.com";
    const MAIL_PASSWORD = "JIshu1F";
    const MAIL_ENCRYPTION = "ssl";
    const MAIL_FROM_ADDRESS = "dev@meiquick.com";
    const MAIL_FROM_NAME = "meiquick";
    const MAIL_CHARSET = "UTF-8";
}