<?php declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/10/25
 * Time: 10:48
 */

namespace MeiQuick\Config\Library\Sms;


class SmsConfig
{
    // sms api请求地址
    const API_URL = 'http://api.sms.cn/sms/';

    // 接口账号
    const UID = 'a2565855778';

    // 接口密码
    const PWD = 'Megao347168';

    const FORMAT = 'json';

    const TEMP_LATE_REGISTER = '【美快国际转运】您的验证码：%s，5分钟内有效，当前正在申请用户注册，验证码仅用于身份验证，请勿泄露给他人！';
}