<?php

class __Mustache_360efc529ffaa0d0d28abf43bfbfec64 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'rowclass' section
        $value = $context->find('rowclass');
        $buffer .= $this->section926b8378d9c86a522d7f1514aa0e12b4($context, $indent, $value);

        return $buffer;
    }

    private function section926b8378d9c86a522d7f1514aa0e12b4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<li class="{{{ rowclass }}}" style="background:{{{ rowcolor }}}">
    <span class="pull-left">
        {{{ messaging }}}
        <a class="btn btn-link p-0 pl-1" 
            role="button" 
            data-container="body" 
            data-toggle="popover" 
            data-placement="right"
            data-html="true" 
            tabindex="0" 
            data-trigger="focus" 
            data-original-title="" 
            title="" 
            data-content=\'{{> block_studentstracker/user_infos }}\'>
            <i class="icon fa fa-question-circle text-info fa-fw" title="" aria-label=""></i>
        </a>
        {{{ picture }}}
    </span>
    <span class="text-right">{{{ lastaccesscourse }}}</span>
</li>
';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<li class="';
                $value = $this->resolveValue($context->find('rowclass'), $context);
                $buffer .= $value;
                $buffer .= '" style="background:';
                $value = $this->resolveValue($context->find('rowcolor'), $context);
                $buffer .= $value;
                $buffer .= '">
';
                $buffer .= $indent . '    <span class="pull-left">
';
                $buffer .= $indent . '        ';
                $value = $this->resolveValue($context->find('messaging'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '        <a class="btn btn-link p-0 pl-1" 
';
                $buffer .= $indent . '            role="button" 
';
                $buffer .= $indent . '            data-container="body" 
';
                $buffer .= $indent . '            data-toggle="popover" 
';
                $buffer .= $indent . '            data-placement="right"
';
                $buffer .= $indent . '            data-html="true" 
';
                $buffer .= $indent . '            tabindex="0" 
';
                $buffer .= $indent . '            data-trigger="focus" 
';
                $buffer .= $indent . '            data-original-title="" 
';
                $buffer .= $indent . '            title="" 
';
                $buffer .= $indent . '            data-content=\'';
                if ($partial = $this->mustache->loadPartial('block_studentstracker/user_infos')) {
                    $buffer .= $partial->renderInternal($context);
                }
                $buffer .= '\'>
';
                $buffer .= $indent . '            <i class="icon fa fa-question-circle text-info fa-fw" title="" aria-label=""></i>
';
                $buffer .= $indent . '        </a>
';
                $buffer .= $indent . '        ';
                $value = $this->resolveValue($context->find('picture'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '    </span>
';
                $buffer .= $indent . '    <span class="text-right">';
                $value = $this->resolveValue($context->find('lastaccesscourse'), $context);
                $buffer .= $value;
                $buffer .= '</span>
';
                $buffer .= $indent . '</li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
