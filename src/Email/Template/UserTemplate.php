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
        $subject = 'Hello,%s';
        if ($subjectFill) {
            $subject = sprintf($subject, ...$subjectFill);
        }
        $body = "Here is your verification code:<b>%s</b><br/>
                -The code expires in 30mins.<br/>
                -Please don’t share this code with anyone else.<br/>
                Enjoy!<br/>
                美快国际转运 www.meiquick.com";
        if ($bodyFill) {
            $body = sprintf($body, ...$bodyFill);
        }
        $isHtml = true;
        return [$subject, $body, $isHtml];
    }
}
