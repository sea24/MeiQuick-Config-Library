<?php declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/10/26
 * Time: 10:17
 */

namespace MeiQuick\Config\Library\Sms\Template;


interface TemplateInterface
{
    public static function template(array $fill = []): string;
}