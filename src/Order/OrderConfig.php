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

    /* 操作状态 */
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
    // 已派送
    const EXPRESS_STATE_DELIVERY = 60;

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

    /*长短装状态*/
    // 正常
    const SURPLUS_STATE_NORMAL = 0;
    // 长装
    const SURPLUS_STATE_LONG = 1;
    // 短装
    const SURPLUS_STATE_SHORT = 2;
    
    /*理赔状态*/
    // 正常
    const CLAIMS_NORMAL = 1;
    // 理赔申请中
    const CLAIMS_APPLY = 2;
    // 已理赔
    const CLAIMS_COMPLETE = 3;

    /*退件状态*/
    // 正常
    const RETURN_NORMAL = 1;
    // 退件申请中
    const RETURN_APPLY = 2;
    // 已退件
    const RETURN_COMPLETE = 3;

    /*审核问题状态*/
    // 正常
    const AUDIT_NORMAL = 1;
    // 包裹商品少件审核不通过
    const AUDIT_LESS = 2;
    // 包裹商品多件审核不通过
    const AUDIT_MORE = 3;
    // 包裹商品信息不符审核不通
    const AUDIT_INCOMPATIBLE = 4;
    // 包裹商品含违禁品审核不通过
    const AUDIT_VIOLATION = 5;
    // 包裹商品损坏审核不通过
    const AUDIT_BREAK = 6;
    // 商品凭证缺失审核不通过
    const AUDIT_LACK = 7;


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

    /*路单完成状态 is_finish */
    // 正常
    const LADING_FINISH_FALSE = 0;
    // 已完成
    const LADING_FINISH_TRUE = 1;

    /*站点类型*/
    // 国内
    const STATION_INSIDE = 1;
    // 国外
    const STATION_OUTSIDE = 2;

    /*派送方式*/
    // 自取
    const DELIVERY_SELF = 1;
    // 送货上门
    const DELIVERY_DISPATCH = 2;
    
}
