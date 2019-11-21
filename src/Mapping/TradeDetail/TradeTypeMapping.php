<?php declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/11/5
 * Time: 17:21
 */

namespace MeiQuick\Config\Library\Mapping\TradeDetail;


use MeiQuick\Config\Library\Mapping\MapTrait;

/**
 * trade_detail table trade_type field mapping relation
 * Class TradeType
 * @package MeiQuick\Config\Library\Mapping\TradeDetail
 */
class TradeTypeMapping
{
    use MapTrait;

    const MAP_EN = [
        self::RECHARGE => 'recharge',
        self::CONSUME => 'consume',
        self::REFUND => 'refund',
        self::FILL_BUCKLE => 'fill buckle',
    ];

    const MAP_ZH = [
        self::RECHARGE => '充值',
        self::CONSUME => '消费',
        self::REFUND => '退款',
        self::FILL_BUCKLE => '补扣',
    ];

    const RECHARGE = 1;
    const CONSUME = 2;
    const REFUND = 3;
    const FILL_BUCKLE = 4;

    const MAP = [
        self::RECHARGE,
        self::CONSUME,
        self::REFUND,
        self::FILL_BUCKLE
    ];
}