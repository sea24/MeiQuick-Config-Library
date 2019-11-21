<?php declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/11/4
 * Time: 13:41
 */

namespace MeiQuick\Config\Library\Mapping\RechargeRecord;

use MeiQuick\Config\Library\Mapping\MapTrait;

/**
 * recharge_record table pay_status field mapping relation
 * Class PayStatusMapping
 * @package MeiQuick\Config\Library\Mapping\RechargeRecord
 */
class PayStatusMapping
{
    use MapTrait;

    const MAP_EN = [
        self::NON_PAY => 'non-payment',
        self::PAID => 'paid'
    ];

    const MAP_ZH = [
        self::NON_PAY => '待付款',
        self::PAID => '已付款'
    ];

    const NON_PAY = 0;
    const PAID = 1;

    const MAP = [
        self::NON_PAY,
        self::PAID
    ];
}