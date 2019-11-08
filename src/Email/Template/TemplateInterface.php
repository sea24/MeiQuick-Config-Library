<?php declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/10/23
 * Time: 18:12
 */

namespace MeiQuick\Config\Library\Email\Template;


interface TemplateInterface
{
    public function template(array $subjectFill, array $bodyFill): array;
}