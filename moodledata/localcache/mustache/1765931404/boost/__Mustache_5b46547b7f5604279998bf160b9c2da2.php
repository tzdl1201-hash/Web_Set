<?php

class __Mustache_5b46547b7f5604279998bf160b9c2da2 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div>
';
        $buffer .= $indent . '    <div><strong>';
        $value = $this->resolveValue($context->find('name'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</strong></div>
';
        $buffer .= $indent . '    <div>';
        $value = $this->resolveValue($context->find('description'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }
}
