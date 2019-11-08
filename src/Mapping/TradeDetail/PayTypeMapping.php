<?php declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/11/5
 * Time: 17:21
 */

namespace MeiQuick\Config\Library\Mapping\TradeDetail;


/**
 * trade_detail table pay_type field mapping relation
 * Class TradeType
 * @package MeiQuick\Config\Library\Mapping\TradeDetail
 */
class PayTypeMapping
{
    const MAP_EN = [
        self::BALANCE => 'balance',
        self::ALIPAY => 'alipay',
        self::WXPAY => 'wxpay',
    ];

    const MAP_ZH = [
        self::BALANCE => '账户余额',
        self::ALIPAY => '支付宝',
        self::WXPAY => '微信支付',
    ];

    const BALANCE = 1;
    const ALIPAY = 2;
    const WXPAY = 3;
}