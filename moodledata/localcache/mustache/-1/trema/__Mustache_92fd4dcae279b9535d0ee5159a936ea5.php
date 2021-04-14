<?php

class __Mustache_92fd4dcae279b9535d0ee5159a936ea5 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<ul id="studentstracker-list" data-show="';
        $value = $this->resolveValue($context->find('truncate'), $context);
        $buffer .= $value;
        $buffer .= '">
';
        // 'users' section
        $value = $context->find('users');
        $buffer .= $this->sectionE4abe11dc8bed91d1a1f40ac441e2630($context, $indent, $value);
        $buffer .= $indent . '</ul>';

        return $buffer;
    }

    private function section4b931cdb61f1e02095692a09b36e8981(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{> block_studentstracker/student_row }}
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
                
                if ($partial = $this->mustache->loadPartial('block_studentstracker/student_row')) {
                    $buffer .= $partial->renderInternal($context, $indent . '            ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE4abe11dc8bed91d1a1f40ac441e2630(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{#hasrole}}
            {{> block_studentstracker/student_row }}
        {{/hasrole}}
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
                
                // 'hasrole' section
                $value = $context->find('hasrole');
                $buffer .= $this->section4b931cdb61f1e02095692a09b36e8981($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
