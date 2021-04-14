<?php

class __Mustache_f81e3d973639b3ae55184933197c4cd1 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<span class="badge badge-danger">';
        $value = $this->resolveValue($context->find('status'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '</span>
';

        return $buffer;
    }
}
