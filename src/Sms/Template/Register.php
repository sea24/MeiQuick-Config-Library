<?php declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/10/26
 * Time: 10:15
 */

namespace MeiQuick\Config\Library\Sms\Template;


class Register implements TemplateInterface
{
    public static function template(array $fill = []): string
    {
        return sprintf(
            '【美快国际转运】您的验证码：%s，5分钟内有效，当前正在申请用户注册，验证码仅用于身份验证，请勿泄露给他人！',
            ...$fill
        );
    }
}