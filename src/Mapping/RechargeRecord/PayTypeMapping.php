<?php declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/11/4
 * Time: 13:29
 */

namespace MeiQuick\Config\Library\Mapping\RechargeRecord;

/**
 * recharge_record table pay_type field mapping relation
 * Class PayTypeMapping
 * @package MeiQuick\Config\Library\Mapping\RechargeRecord
 */
class PayTypeMapping
{
    // 支付类型映射-英文
    const MAP_EN = [
        self::ALI_PAY => 'ali_pay',
        self::WX_PAY => 'wx_pay',
    ];

    // 支付类型映射-中文
    const MAP_ZH = [
        self::ALI_PAY => '支付宝',
        self::WX_PAY => '微信支付',
    ];

    // 支付类型
    const ALI_PAY = 1;
    const WX_PAY = 2;

}