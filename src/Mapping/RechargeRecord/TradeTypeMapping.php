<?php declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/11/4
 * Time: 13:29
 */

namespace MeiQuick\Config\Library\Mapping\RechargeRecord;

use MeiQuick\Config\Library\Mapping\MapTrait;

/**
 * recharge_record table pay_type field mapping relation
 * Class PayTypeMapping
 * @package MeiQuick\Config\Library\Mapping\RechargeRecord
 */
class TradeTypeMapping
{
    use MapTrait;

    // 支付类型映射-英文
    const MAP_EN = [
        self::RECHARGE => 'recharge',
        self::CONSUME => 'consume',
    ];

    // 支付类型映射-中文
    const MAP_ZH = [
        self::RECHARGE => '充值',
        self::CONSUME => '消费',
    ];

    // 消费类型
    const RECHARGE = 1;
    const CONSUME = 2;

    const MAP = [
        self::RECHARGE,
        self::CONSUME
    ];
}
