<?php declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/11/4
 * Time: 13:08
 */

namespace MeiQuick\Config\Library\Mapping;


class PlatformMapping
{
    consT MAP = [
        'web' => self::WEB,
        'wap' => self::WAP,
        'android' => self::ANDROID,
        'ios' => self::IOS,
        'wx' => self::WX,
        'xcx' => self::XCX,
        'terminal' => self::TERMINAL,
    ];

    const MAP_ZH = [
        self::WEB => '电脑网页',
        self::WAP => '手机网页',
        self::ANDROID => '安卓',
        self::IOS => '苹果',
        self::WX => '微信',
        self::XCX => '小程序',
        self::TERMINAL => '终端',
    ];

    const MAP_EN = [
        self::WEB => 'web',
        self::WAP => 'wap',
        self::ANDROID => 'android',
        self::IOS => 'ios',
        self::WX => 'wechat',
        self::XCX => 'mini program',
        self::TERMINAL => 'terminal',
    ];

    const WEB = 1;
    const WAP = 2;
    const ANDROID = 3;
    const IOS = 4;
    const WX = 5;
    const XCX = 6;
    const TERMINAL = 7;

    /**
     * return mapping relation
     * @param string $needle
     * @return bool|mixed
     */
    public static function findMap(string $needle)
    {
        if (isset(self::MAP[$needle])) {
            return self::MAP[$needle];
        }
        return false;
    }
}