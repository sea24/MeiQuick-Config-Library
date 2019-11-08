<?php declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/10/23
 * Time: 18:08
 */

namespace MeiQuick\Config\Library\Email\Template;


class Register implements TemplateInterface
{
    public function template(array $subjectFill = [], array $bodyFill = []): array
    {
        $subject = 'Hi %s,Here is the register subject';
        if ($subjectFill) {
            $subject = sprintf($subject, ...$subjectFill);
        }
        $body = "Hi %s This is the HTML message body, email: %s <b>in bold!</b>";
        if ($bodyFill) {
            $body = sprintf($body, ...$bodyFill);
        }
        $isHtml = true;
        return [$subject, $body, $isHtml];
    }
}