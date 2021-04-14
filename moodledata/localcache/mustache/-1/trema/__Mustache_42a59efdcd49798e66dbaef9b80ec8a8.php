<?php

class __Mustache_42a59efdcd49798e66dbaef9b80ec8a8 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="mod-debate-topic-container container">
';
        $buffer .= $indent . '    <div class="row">
';
        $buffer .= $indent . '        <div class="col-12">
';
        $buffer .= $indent . '            <div class="mod-debate-topic p-3 mod-debate-border-style">
';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->find('debate'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '
';
        $buffer .= $indent . '            </div>
';
        // 'debateformat' section
        $value = $context->find('debateformat');
        $buffer .= $this->section86c8af782fe354468c6b0ab18b21fb0f($context, $indent, $value);
        $buffer .= $indent . '            <div class="mod-debate-response-container container">
';
        $buffer .= $indent . '                <div class="row">
';
        $buffer .= $indent . '                    <div class="col-12 col-sm-6 mod-debate-no-padding">
';
        $buffer .= $indent . '                        <div class="mod-debate-positive p-3 mod-debate-border-style">
';
        $buffer .= $indent . '                            ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section4ea6e4fa28b12812b06fb3aac586ad69($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                        </div>
';
        $buffer .= $indent . '                        <div class="mod-debate-positive-response-counter p-3 mod-debate-border-style">
';
        $buffer .= $indent . '                            ';
        $value = $this->resolveValue($context->find('positive'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '
';
        $buffer .= $indent . '                        </div>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                    <div class="col-12 col-sm-6 mod-debate-no-padding">
';
        $buffer .= $indent . '                        <div class="mod-debate-negative p-3 mod-debate-border-style">
';
        $buffer .= $indent . '                            ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section0427e7df2520ed996f14a5af6a223b6e($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                        </div>
';
        $buffer .= $indent . '                        <div class="mod-debate-negative-response-counter p-3 mod-debate-border-style">
';
        $buffer .= $indent . '                            ';
        $value = $this->resolveValue($context->find('negative'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '
';
        $buffer .= $indent . '                        </div>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="container mt-2">
';
        // 'teams_capability' section
        $value = $context->find('teams_capability');
        $buffer .= $this->section0830ebdbd7704f333be980c441f12b6f($context, $indent, $value);
        $buffer .= $indent . '                <div class="row">
';
        $buffer .= $indent . '                    <div class="col-12 text-center mt-2">
';
        $buffer .= $indent . '                        <a href="';
        $value = $this->resolveValue($context->find('debateurl'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" class="btn btn-primary">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionEe46e0011370680d9bce531e55632527($context, $indent, $value);
        $buffer .= '</a>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';

        return $buffer;
    }

    private function section86c8af782fe354468c6b0ab18b21fb0f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="mod-debate-description p-3 mod-debate-border-style">
                    {{{intro}}}
                </div>
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
                
                $buffer .= $indent . '                <div class="mod-debate-description p-3 mod-debate-border-style">
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('intro'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4ea6e4fa28b12812b06fb3aac586ad69(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' pros_response_count, mod_debate';
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
                
                $buffer .= ' pros_response_count, mod_debate';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0427e7df2520ed996f14a5af6a223b6e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' cons_response_count, mod_debate';
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
                
                $buffer .= ' cons_response_count, mod_debate';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF6948e67b81861eb091d5e44c5e775b8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' manage_teams, mod_debate';
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
                
                $buffer .= ' manage_teams, mod_debate';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0830ebdbd7704f333be980c441f12b6f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="row">
                        <div class="col-12 text-center mt-2">
                            <a href="{{debateteamsurl}}" class="btn btn-primary">{{#str}} manage_teams, mod_debate{{/str}}</a>
                        </div>
                    </div>
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
                
                $buffer .= $indent . '                    <div class="row">
';
                $buffer .= $indent . '                        <div class="col-12 text-center mt-2">
';
                $buffer .= $indent . '                            <a href="';
                $value = $this->resolveValue($context->find('debateteamsurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="btn btn-primary">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionF6948e67b81861eb091d5e44c5e775b8($context, $indent, $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEe46e0011370680d9bce531e55632527(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' join_debate, mod_debate';
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
                
                $buffer .= ' join_debate, mod_debate';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
