<?php

class __Mustache_8ab00ebbb056295423dfd4a462404ff6 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="no-overflow">
';
        $buffer .= $indent . '    <p><a href="mailto:';
        $value = $this->resolveValue($context->find('email'), $context);
        $buffer .= $value;
        $buffer .= '">';
        $value = $this->resolveValue($context->find('email'), $context);
        $buffer .= $value;
        $buffer .= '</a></p>
';
        // 'lastaccess' section
        $value = $context->find('lastaccess');
        $buffer .= $this->sectionC24f12be22bcf1d50fdcb0882d581686($context, $indent, $value);
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section562bf08325590b16999e90e78977d099(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' lastaccess, core ';
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
                
                $buffer .= ' lastaccess, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC24f12be22bcf1d50fdcb0882d581686(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <p class="mb-0">{{# str }} lastaccess, core {{/ str }} : {{{ datelastaccess }}}</p>
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
                
                $buffer .= $indent . '        <p class="mb-0">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section562bf08325590b16999e90e78977d099($context, $indent, $value);
                $buffer .= ' : ';
                $value = $this->resolveValue($context->find('datelastaccess'), $context);
                $buffer .= $value;
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
