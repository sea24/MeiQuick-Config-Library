<?php declare(strict_types=1);


namespace MeiQuick\Config\Library\Mapping;


trait MapTrait
{
    /**
     * 验证客户端传递的参数是否在当前枚举的范围内
     * return mapping relation
     * @param string $needle
     * @return bool|mixed
     */
    public static function valid(string $needle): bool
    {
        if (strpos($needle, ',')) {
            $needles = explode(',', $needle);
        } else {
            $needles = [$needle];
        }
        foreach ($needles as $needle) {
            if (!in_array($needle, static::MAP)) {
                return false;
            }
        }
        return true;
    }

    /**
     * 根据客户端传递的语言获取映射列表
     * @param string $lang
     * @return array
     */
    public static function map(string $lang = 'zh-CN'): array
    {
        if ($lang === 'zh-CN') {
            return static::MAP_ZH;
        }
        return static::MAP_EN;
    }
}