<?php

class __Mustache_f66af74ec46854a82b9f03a83c49afe1 extends Mustache_Template
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
        $buffer .= $indent . '                <a>';
        $value = $this->resolveValue($context->find('debate'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '</a>
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
        $buffer .= $indent . '                        <div class="mod-debate-positive p-3 mod-debate-border-style" id="mod-debate-pos-side">
';
        $buffer .= $indent . '                            ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section83bdd2bb69203cb50af137efd08cf498($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                            <i class="fa fa-plus-square fa-2x float-right mod-debate-positive-icon"></i>
';
        $buffer .= $indent . '                        </div>
';
        $buffer .= $indent . '                        <div class="p-3 mod-debate-border-style" id="mod-debate-insert-postive-response">
';
        $buffer .= $indent . '                            <div class="mod-debate-response-text">
';
        $buffer .= $indent . '                                <textarea id="mod-debate-positive-response-input" class="mod-debate-response-input"
';
        $buffer .= $indent . '                                          type="text"></textarea>
';
        $buffer .= $indent . '                            </div>
';
        $buffer .= $indent . '                            <div class="mod-debate-user-info mt-3">
';
        $buffer .= $indent . '                                <img src="';
        $value = $this->resolveValue($context->find('current_user_profile_image'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" class="mod-debate-user-image mr-1">
';
        $buffer .= $indent . '                                ';
        $value = $this->resolveValue($context->find('current_user_full_name'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '
';
        $buffer .= $indent . '                            </div>
';
        $buffer .= $indent . '                            <div class="mod-debate-response-buttons">
';
        $buffer .= $indent . '                                <div class="container">
';
        $buffer .= $indent . '                                    <div class="row">
';
        $buffer .= $indent . '                                        <div class="col-12 col-sm-6 mt-3">
';
        $buffer .= $indent . '                                            <div class="btn btn-primary mod-debate-button"
';
        $buffer .= $indent . '                                                 id="mod-debate-cancel-respose">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionC2b402f8a9ad18f65096f0342a7fe9e2($context, $indent, $value);
        $buffer .= '</div>
';
        $buffer .= $indent . '                                        </div>
';
        $buffer .= $indent . '                                        <div class="col-12 col-sm-6 mt-3">
';
        $buffer .= $indent . '                                            <div class="btn btn-primary mod-debate-button"
';
        $buffer .= $indent . '                                                 id="mod-debate-update-response">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section54d55ceadcefbc219d2a564aa746a944($context, $indent, $value);
        $buffer .= '</div>
';
        $buffer .= $indent . '                                        </div>
';
        $buffer .= $indent . '                                    </div>
';
        $buffer .= $indent . '                                </div>
';
        $buffer .= $indent . '                            </div>
';
        $buffer .= $indent . '                        </div>
';
        // 'positive' section
        $value = $context->find('positive');
        $buffer .= $this->sectionA342b86c6de812c85b80337edfb1624d($context, $indent, $value);
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                    <div class="col-12 col-sm-6 mod-debate-no-padding">
';
        $buffer .= $indent . '                        <div class="mod-debate-negative p-3 mod-debate-border-style" id="mod-debate-neg-side">
';
        $buffer .= $indent . '                            ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionF44340159af9f9f83eadfb93e5316901($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                            <i class="fa fa-plus-square fa-2x float-right mod-debate-negative-icon"></i>
';
        $buffer .= $indent . '                        </div>
';
        $buffer .= $indent . '                        <div class="p-3 mod-debate-border-style" id="mod-debate-insert-negative-response">
';
        $buffer .= $indent . '                            <div class="mod-debate-response-text">
';
        $buffer .= $indent . '                                <textarea id="mod-debate-negative-response-input" class="mod-debate-response-input"
';
        $buffer .= $indent . '                                          type="text"></textarea>
';
        $buffer .= $indent . '                            </div>
';
        $buffer .= $indent . '                            <div class="mod-debate-user-info mt-3">
';
        $buffer .= $indent . '                                <img src="';
        $value = $this->resolveValue($context->find('current_user_profile_image'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" class="mod-debate-user-image mr-1">
';
        $buffer .= $indent . '                                ';
        $value = $this->resolveValue($context->find('current_user_full_name'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '
';
        $buffer .= $indent . '                            </div>
';
        $buffer .= $indent . '                            <div class="mod-debate-response-buttons mt-2">
';
        $buffer .= $indent . '                                <div class="container">
';
        $buffer .= $indent . '                                    <div class="row">
';
        $buffer .= $indent . '                                        <div class="col-12 col-sm-6 text-left">
';
        $buffer .= $indent . '                                            <div class="btn btn-primary mod-debate-button"
';
        $buffer .= $indent . '                                                 id="mod-debate-cancel-respose">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionC2b402f8a9ad18f65096f0342a7fe9e2($context, $indent, $value);
        $buffer .= '</div>
';
        $buffer .= $indent . '                                        </div>
';
        $buffer .= $indent . '                                        <div class="col-12 col-sm-6 text-right">
';
        $buffer .= $indent . '                                            <div class="btn btn-primary mod-debate-button"
';
        $buffer .= $indent . '                                                 id="mod-debate-update-response">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section54d55ceadcefbc219d2a564aa746a944($context, $indent, $value);
        $buffer .= '</div>
';
        $buffer .= $indent . '                                        </div>
';
        $buffer .= $indent . '                                    </div>
';
        $buffer .= $indent . '                                </div>
';
        $buffer .= $indent . '                            </div>
';
        $buffer .= $indent . '                        </div>
';
        // 'negative' section
        $value = $context->find('negative');
        $buffer .= $this->section896458f988013f0df2c55cde93d92807($context, $indent, $value);
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

    private function section83bdd2bb69203cb50af137efd08cf498(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' pros, mod_debate';
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
                
                $buffer .= ' pros, mod_debate';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC2b402f8a9ad18f65096f0342a7fe9e2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                cancel, mod_debate';
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
                
                $buffer .= '
';
                $buffer .= $indent . '                                                cancel, mod_debate';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section54d55ceadcefbc219d2a564aa746a944(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' save, mod_debate';
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
                
                $buffer .= ' save, mod_debate';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7326973a5130036e61feaeb71ab3743f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' edit, mod_debate';
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
                
                $buffer .= ' edit, mod_debate';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4b95124c6a76a5b689623632db0ee471(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                <a class="dropdown-item mod-debate-positive-edit"
                                                   data-id="{{id}}">{{#str}} edit, mod_debate{{/str}}</a>
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
                
                $buffer .= $indent . '                                                <a class="dropdown-item mod-debate-positive-edit"
';
                $buffer .= $indent . '                                                   data-id="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section7326973a5130036e61feaeb71ab3743f($context, $indent, $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEfa5e5ceb23a66a96b9ee46e047acd0a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' delete, mod_debate';
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
                
                $buffer .= ' delete, mod_debate';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB55a6d4fdb5bf95327a55310078f71ea(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                <a class="dropdown-item mod-debate-positive-delete"
                                                   data-id="{{id}}">{{#str}} delete, mod_debate{{/str}}</a>
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
                
                $buffer .= $indent . '                                                <a class="dropdown-item mod-debate-positive-delete"
';
                $buffer .= $indent . '                                                   data-id="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionEfa5e5ceb23a66a96b9ee46e047acd0a($context, $indent, $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section713ff8529b831bb48b43a3e0dc922a84(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                        <div class="float-right dropleft">
                                            <i class="fa fa-ellipsis-h" type="icon" data-toggle="dropdown"
                                               aria-haspopup="true" aria-expanded="false"></i>
                                            <div class="dropdown-menu">
                                                {{#user_edit_capability}}
                                                <a class="dropdown-item mod-debate-positive-edit"
                                                   data-id="{{id}}">{{#str}} edit, mod_debate{{/str}}</a>
                                                {{/user_edit_capability}}
                                                {{#user_delete_capability}}
                                                <a class="dropdown-item mod-debate-positive-delete"
                                                   data-id="{{id}}">{{#str}} delete, mod_debate{{/str}}</a>
                                                {{/user_delete_capability}}
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
                
                $buffer .= $indent . '                                        <div class="float-right dropleft">
';
                $buffer .= $indent . '                                            <i class="fa fa-ellipsis-h" type="icon" data-toggle="dropdown"
';
                $buffer .= $indent . '                                               aria-haspopup="true" aria-expanded="false"></i>
';
                $buffer .= $indent . '                                            <div class="dropdown-menu">
';
                // 'user_edit_capability' section
                $value = $context->find('user_edit_capability');
                $buffer .= $this->section4b95124c6a76a5b689623632db0ee471($context, $indent, $value);
                // 'user_delete_capability' section
                $value = $context->find('user_delete_capability');
                $buffer .= $this->sectionB55a6d4fdb5bf95327a55310078f71ea($context, $indent, $value);
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA342b86c6de812c85b80337edfb1624d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <div class="p-3 mod-debate-border-style" id="{{elementidcontainer}}">
                                <div class="mod-debate-response-text" id="{{elementid}}">
                                    {{response}}
                                </div>
                                <div class="mod-debate-user-info mt-3">
                                    <img src="{{user_profile_image}}" class="mod-debate-user-image mr-1">
                                    {{user_full_name}}
                                    {{#user_capability}}
                                        <div class="float-right dropleft">
                                            <i class="fa fa-ellipsis-h" type="icon" data-toggle="dropdown"
                                               aria-haspopup="true" aria-expanded="false"></i>
                                            <div class="dropdown-menu">
                                                {{#user_edit_capability}}
                                                <a class="dropdown-item mod-debate-positive-edit"
                                                   data-id="{{id}}">{{#str}} edit, mod_debate{{/str}}</a>
                                                {{/user_edit_capability}}
                                                {{#user_delete_capability}}
                                                <a class="dropdown-item mod-debate-positive-delete"
                                                   data-id="{{id}}">{{#str}} delete, mod_debate{{/str}}</a>
                                                {{/user_delete_capability}}
                                            </div>
                                        </div>
                                    {{/user_capability}}
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
                
                $buffer .= $indent . '                            <div class="p-3 mod-debate-border-style" id="';
                $value = $this->resolveValue($context->find('elementidcontainer'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                <div class="mod-debate-response-text" id="';
                $value = $this->resolveValue($context->find('elementid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                    ';
                $value = $this->resolveValue($context->find('response'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                                <div class="mod-debate-user-info mt-3">
';
                $buffer .= $indent . '                                    <img src="';
                $value = $this->resolveValue($context->find('user_profile_image'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="mod-debate-user-image mr-1">
';
                $buffer .= $indent . '                                    ';
                $value = $this->resolveValue($context->find('user_full_name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '
';
                // 'user_capability' section
                $value = $context->find('user_capability');
                $buffer .= $this->section713ff8529b831bb48b43a3e0dc922a84($context, $indent, $value);
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF44340159af9f9f83eadfb93e5316901(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' cons, mod_debate';
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
                
                $buffer .= ' cons, mod_debate';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section950c2c1f0f5a43dd219fc4b7b1c8526d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                <a class="dropdown-item mod-debate-negative-edit"
                                                   data-id="{{id}}">{{#str}} edit, mod_debate{{/str}}</a>
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
                
                $buffer .= $indent . '                                                <a class="dropdown-item mod-debate-negative-edit"
';
                $buffer .= $indent . '                                                   data-id="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section7326973a5130036e61feaeb71ab3743f($context, $indent, $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section253460ce7019fbfaf01f8db7ee06414e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                <a class="dropdown-item mod-debate-negative-delete"
                                                   data-id="{{id}}">{{#str}} delete, mod_debate{{/str}}</a>
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
                
                $buffer .= $indent . '                                                <a class="dropdown-item mod-debate-negative-delete"
';
                $buffer .= $indent . '                                                   data-id="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionEfa5e5ceb23a66a96b9ee46e047acd0a($context, $indent, $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB446d6dbfa85b67a935173c21d703ee7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                        <div class="float-right dropleft">
                                            <i class="fa fa-ellipsis-h" type="icon" data-toggle="dropdown"
                                               aria-haspopup="true" aria-expanded="false"></i>
                                            <div class="dropdown-menu">
                                                {{#user_edit_capability}}
                                                <a class="dropdown-item mod-debate-negative-edit"
                                                   data-id="{{id}}">{{#str}} edit, mod_debate{{/str}}</a>
                                                {{/user_edit_capability}}
                                                {{#user_delete_capability}}
                                                <a class="dropdown-item mod-debate-negative-delete"
                                                   data-id="{{id}}">{{#str}} delete, mod_debate{{/str}}</a>
                                                {{/user_delete_capability}}
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
                
                $buffer .= $indent . '                                        <div class="float-right dropleft">
';
                $buffer .= $indent . '                                            <i class="fa fa-ellipsis-h" type="icon" data-toggle="dropdown"
';
                $buffer .= $indent . '                                               aria-haspopup="true" aria-expanded="false"></i>
';
                $buffer .= $indent . '                                            <div class="dropdown-menu">
';
                // 'user_edit_capability' section
                $value = $context->find('user_edit_capability');
                $buffer .= $this->section950c2c1f0f5a43dd219fc4b7b1c8526d($context, $indent, $value);
                // 'user_delete_capability' section
                $value = $context->find('user_delete_capability');
                $buffer .= $this->section253460ce7019fbfaf01f8db7ee06414e($context, $indent, $value);
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section896458f988013f0df2c55cde93d92807(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <div class="p-3 mod-debate-border-style" id="{{elementidcontainer}}">
                                <div class="mod-debate-response-text" id="{{elementid}}">
                                    {{response}}
                                </div>
                                <div class="mod-debate-user-info mt-3">
                                    <img src="{{user_profile_image}}" class="mod-debate-user-image mr-1">
                                    {{user_full_name}}
                                    {{#user_capability}}
                                        <div class="float-right dropleft">
                                            <i class="fa fa-ellipsis-h" type="icon" data-toggle="dropdown"
                                               aria-haspopup="true" aria-expanded="false"></i>
                                            <div class="dropdown-menu">
                                                {{#user_edit_capability}}
                                                <a class="dropdown-item mod-debate-negative-edit"
                                                   data-id="{{id}}">{{#str}} edit, mod_debate{{/str}}</a>
                                                {{/user_edit_capability}}
                                                {{#user_delete_capability}}
                                                <a class="dropdown-item mod-debate-negative-delete"
                                                   data-id="{{id}}">{{#str}} delete, mod_debate{{/str}}</a>
                                                {{/user_delete_capability}}
                                            </div>
                                        </div>
                                    {{/user_capability}}
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
                
                $buffer .= $indent . '                            <div class="p-3 mod-debate-border-style" id="';
                $value = $this->resolveValue($context->find('elementidcontainer'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                <div class="mod-debate-response-text" id="';
                $value = $this->resolveValue($context->find('elementid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                    ';
                $value = $this->resolveValue($context->find('response'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                                <div class="mod-debate-user-info mt-3">
';
                $buffer .= $indent . '                                    <img src="';
                $value = $this->resolveValue($context->find('user_profile_image'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="mod-debate-user-image mr-1">
';
                $buffer .= $indent . '                                    ';
                $value = $this->resolveValue($context->find('user_full_name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '
';
                // 'user_capability' section
                $value = $context->find('user_capability');
                $buffer .= $this->sectionB446d6dbfa85b67a935173c21d703ee7($context, $indent, $value);
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
