<?php declare(strict_types=1);


namespace MeiQuick\Rpc\Lib;

/**
 * Class UserInterface
 *
 * @since 2.0
 */
interface Message
{
    /**
     * 预发送消息
     * @return array
     */
    public function prepareMsg($prepareMsgData): array;

    /**
     * 确认并且投递参数
     * @return array
     */
    public function confirmMsgToSend($msgId,$flag): array;

    /**
     * 消息消费成功
     * @return array
     */
    public function ackMsg($msgId): array;

    /**
     * 消息状态确认
     * @return array
     */
    public function SelectMsgTime($msgType): array;


}