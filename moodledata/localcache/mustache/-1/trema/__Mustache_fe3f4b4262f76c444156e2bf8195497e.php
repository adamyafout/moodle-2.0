<?php

class __Mustache_fe3f4b4262f76c444156e2bf8195497e extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="studentstracker_header">
';
        $buffer .= $indent . '    ';
        // 'usercount' section
        $value = $context->find('usercount');
        $buffer .= $this->section0b87052f30df9a4bc508786b5e9f84b9($context, $indent, $value);
        $value = $this->resolveValue($context->find('textheader'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('block_studentstracker/students_list')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="text-center">
';
        $buffer .= $indent . '    <div id="tracker_showmore" class="justify-content-center"></div>
';
        $buffer .= $indent . '    <div id="tracker_showless" class="justify-content-center"></div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="studentstracker_footer d-flex">';
        $value = $this->resolveValue($context->find(' textfooter'), $context);
        $buffer .= $value;
        $buffer .= '</div>
';
        $buffer .= $indent . '
';
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->sectionDedc0c86ca71cad0e9be96cbb2b428c2($context, $indent, $value);

        return $buffer;
    }

    private function section0b87052f30df9a4bc508786b5e9f84b9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<span class="badge badge-warning pl-2">{{{ usercount }}}</span>';
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
                
                $buffer .= '<span class="badge badge-warning pl-2">';
                $value = $this->resolveValue($context->find('usercount'), $context);
                $buffer .= $value;
                $buffer .= '</span>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDedc0c86ca71cad0e9be96cbb2b428c2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'jquery\', \'block_studentstracker/ui\'], function($, st) {
    $(document).ready(function() {
        st.init();
        $(\'#studentstracker-list, #tracker_showmore\').fadeIn();
        $(\'#studentstracker-list, #tracker_showmore\').css({display: \'block\'});
    });
});
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
                
                $buffer .= $indent . 'require([\'jquery\', \'block_studentstracker/ui\'], function($, st) {
';
                $buffer .= $indent . '    $(document).ready(function() {
';
                $buffer .= $indent . '        st.init();
';
                $buffer .= $indent . '        $(\'#studentstracker-list, #tracker_showmore\').fadeIn();
';
                $buffer .= $indent . '        $(\'#studentstracker-list, #tracker_showmore\').css({display: \'block\'});
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
