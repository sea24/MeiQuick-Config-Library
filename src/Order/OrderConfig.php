<?php

namespace MeiQuick\Config\Library\Order;

/**
 * Class OrderConfig
 */
class OrderConfig
{
    /* 订单状态 */
    // 正常
    const ORDER_STATE_NORMAL = 1;
    // 已完成
    const ORDER_STATE_FINISH = 2;
    // 审核失败
    const ORDER_STATE_AUDIT_FAILED = 3;
    // 待付款
    const ORDER_STATE_WAIT_FOR_PAYMENT = 4;
    // 已取消
    const ORDER_STATE_CANCELLED = 5;
    // 退件中
    const ORDER_STATE_RETURNING = 6;
    // 已退件
    const ORDER_STATE_RETURNED = 7;

    /* 惭怍状态 */
    // 待收件
    const OPERATION_STATE_UNRECEIVE = 0;
    // 已收件
    const OPERATION_STATE_RECEIVED = 10;
    // 审核成功
    const OPERATION_STATE_AUDIT_SUCCESS = 20;
    // 已称重
    const OPERATION_STATE_WEIGHED = 30;
    // 已付款
    const OPERATION_STATE_PAID = 40;
    // 已打印面单
    const OPERATION_STATE_PRINTED = 50;
    // 已分拣（等待发航空）
    const OPERATION_STATE_ENTRY_LADING = 60;
    // 已接收
    const OPERATION_STATE_COLLECTED = 70;
    // 已出仓
    const OPERATION_STATE_TRANSFER = 80;

    /* 物流节点信息 */
    // 待入库
    const EXPRESS_STATE_UNSTORAGE = 0;
    // 已入库
    const EXPRESS_STATE_STORAGED = 10;
    // 待出库
    const EXPRESS_STATE_WAIT_FOR_OUTBOUND = 20;
    // 已出库
    const EXPRESS_STATE_OUTBOUND = 30;
    // 已到达美国仓库
    const EXPRESS_STATE_ARRIVED = 40;
    // 待签收
    const EXPRESS_STATE_SIGNED = 50;

    /* 运输状态 */
    // 待入库
    const TRAVEL_STATE_UNSTORAGE = 0;
    // 运输中
    const TRAVEL_STATE_TRANSPORT = 1;
    // 待处理
    const TRAVEL_STATE_WAIT_FOR_HANDLE = 2;
    // 已完成
    const TRAVEL_STATE_FINISHED = 3;

    /*支付状态*/
    // 未支付
    const PAY_STATE_UNPAID = 0;
    // 已支付
    const PAY_STATE_PAID = 1;

    /*打印面单状态*/
    // 未打印
    const PRINT_STATE_UNPRINT = 0;
    // 已打印
    const PRINT_STATE_PRINTED = 1;

    /*暂停状态*/
    // 正常
    const SUSPEND_NORMAL = 1;
    // 暂停
    const SUSPEND_ACTIVE = 2;

    /*锁定状态*/
    // 正常
    const LOCK_NORMAL = 1;
    // 锁定
    const LOCK_ACTIVE = 2;


    /*路单状态*/
    // 未录入
    const LADING_NOT_ENTERED = 0;
    // 录入中
    const LADING_ENTERING = 1;
    // 已出库
    const LADING_OUTBOUND = 2;
    // 已接收
    const LADING_COLLECTED = 3;
    // 已拆包
    const LADING_BREAKED = 4;

    /*站点类型*/
    // 国内
    const STATION_INSIDE = 1;
    // 国外
    const STATION_OUTSIDE = 2;


    /*********************************************** 包裹查询 ******************************************************/
    // 运输状态
    const TRAVEL_STATE_MATCH = [
        '1' => self::TRAVEL_STATE_UNSTORAGE,
        '2' => self::TRAVEL_STATE_TRANSPORT,
        '3' => self::TRAVEL_STATE_WAIT_FOR_HANDLE,
        '4' => self::TRAVEL_STATE_FINISHED
    ];
    // 订单状态
    const ORDER_STATE_MATCH = [
        '1' => self::ORDER_STATE_NORMAL,
        '2' => self::ORDER_STATE_FINISH,
        '3' => self::ORDER_STATE_AUDIT_FAILED,
        '4' => self::ORDER_STATE_WAIT_FOR_PAYMENT,
        '5' => self::ORDER_STATE_CANCELLED,
        '6' => self::ORDER_STATE_RETURNING,
        '7' => self::ORDER_STATE_RETURNED
    ];
    // 物流状态
    const EXPRESS_STATE_MATCH = [
        '1' => self::EXPRESS_STATE_UNSTORAGE,
        '2' => self::EXPRESS_STATE_STORAGED,
        '3' => self::EXPRESS_STATE_WAIT_FOR_OUTBOUND,
        '4' => self::EXPRESS_STATE_OUTBOUND,
        '5' => self::EXPRESS_STATE_ARRIVED,
        '6' => self::EXPRESS_STATE_SIGNED
    ];
}
