<?php declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/10/23
 * Time: 18:08
 */

namespace MeiQuick\Config\Library\Email\Template;


class UserTemplate implements TemplateInterface
{
    public function template(array $subjectFill = [], array $bodyFill = []): array
    {
        $subject = 'Hi! Here is the verification code';
        $body = "Hi! The verification code is: <b>%s</b>";
        if ($bodyFill) {
            $body = sprintf($body, ...$bodyFill);
        }
        $isHtml = true;
        return [$subject, $body, $isHtml];
    }
}
