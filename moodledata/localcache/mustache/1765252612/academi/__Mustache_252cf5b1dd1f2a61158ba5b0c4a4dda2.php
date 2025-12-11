<?php

class __Mustache_252cf5b1dd1f2a61158ba5b0c4a4dda2 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<article
';
        $buffer .= $indent . '    id="p';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
        $buffer .= $indent . '    class="forum-post-container mb-2"
';
        $buffer .= $indent . '    data-post-id="';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
        $buffer .= $indent . '    data-region="post"
';
        $buffer .= $indent . '    data-target="';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '-target"
';
        $buffer .= $indent . '    tabindex="0"
';
        $buffer .= $indent . '    aria-labelledby="post-header-';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
        $buffer .= $indent . '    aria-describedby="post-content-';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
        $buffer .= $indent . '>
';
        $buffer .= $indent . '    <div
';
        $buffer .= $indent . '        class="d-flex border p-2 mb-2 forumpost focus-target ';
        $value = $context->find('unread');
        $buffer .= $this->section3ed6c5fc72aa7724e442457028079947($context, $indent, $value);
        $buffer .= ' ';
        $value = $context->find('firstpost');
        $buffer .= $this->section21f91dd58d78aa33caec1006870d7c95($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . '        aria-label=\'';
        $value = $context->find('str');
        $buffer .= $this->section2d7e7bb37b1c76e06dcc1842169465b6($context, $indent, $value);
        $buffer .= '\'
';
        $buffer .= $indent . '        data-post-id="';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" data-content="forum-post"
';
        $buffer .= $indent . '    >
';
        $buffer .= $indent . '        ';
        $value = $context->find('isfirstunread');
        $buffer .= $this->section8385bd492ccda898f38e149a71c97f98($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <div class="d-flex flex-column w-100"  data-region-content="forum-post-core">
';
        $buffer .= $indent . '            <header id="post-header-';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" class="mb-2 header d-flex">
';
        $value = $context->find('isdeleted');
        if (empty($value)) {
            
            $value = $context->find('author');
            $buffer .= $this->section5c682a58f1b853c19acce016c9b679fa($context, $indent, $value);
        }
        $buffer .= $indent . '                <div class="d-flex flex-column">
';
        $value = $context->find('parentauthorname');
        $buffer .= $this->sectionE483fbf533dac7c9d12325593db4751f($context, $indent, $value);
        $blockFunction = $context->findInBlock('subjectheading');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        } else {
            $buffer .= $indent . '                        <h3 ';
            $buffer .= 'class="h6 fw-bold mb-0" ';
            $buffer .= 'data-region-content="forum-post-core-subject" ';
            $buffer .= 'data-reply-subject="';
            $value = $this->resolveValue($context->find('replysubject'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '" ';
            $buffer .= '>';
            $blockFunction = $context->findInBlock('subject');
            if (is_callable($blockFunction)) {
                $buffer .= call_user_func($blockFunction, $context);
            } else {
                $value = $this->resolveValue($context->find('subject'), $context);
                $buffer .= ($value === null ? '' : $value);
            }
            $buffer .= '</h3>
';
        }
        $value = $context->find('isdeleted');
        if (empty($value)) {
            
            $buffer .= $indent . '                        <div class="mb-3" tabindex="-1">
';
            $buffer .= $indent . '                            ';
            $value = $context->findDot('html.authorsubheading');
            $buffer .= $this->sectionFb8e8ddc9ca3702110812af7d06781d6($context, $indent, $value);
            $buffer .= '
';
            $value = $context->findDot('html.authorsubheading');
            if (empty($value)) {
                
                $buffer .= $indent . '                                ';
                if ($parent = $this->mustache->loadPartial('core/time_element')) {
                    $context->pushBlockContext(array(
                        'elementid' => array($this, 'blockB271b05d99926cf71f42fc2fdaf098b4'),
                        'timestampval' => array($this, 'block0f58c85b5accd62eb904cca306ac20c3'),
                        'userdateformatval' => array($this, 'block3f659631444eecbe92f0647acc7c31ef'),
                    ));
                    $buffer .= $parent->renderInternal($context, $indent);
                    $context->popBlockContext();
                }
            }
            $buffer .= '                        </div>
';
        }
        $value = $context->find('isprivatereply');
        $buffer .= $this->section00a922ca5a40c4cbd79e18e319080e6b($context, $indent, $value);
        $value = $context->find('hasreplycount');
        $buffer .= $this->section1918559ef39456da08efd36a5d0c9b8a($context, $indent, $value);
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </header>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            <div class="d-flex body-content-container">
';
        $value = $context->find('isdeleted');
        if (empty($value)) {
            
            $value = $context->find('author');
            $buffer .= $this->sectionA22dcccdea2803748a329cf300bb96c2($context, $indent, $value);
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '                <div class="no-overflow w-100 content-alignment-container">
';
        $buffer .= $indent . '                    <div id="post-content-';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" class="post-content-container">
';
        $buffer .= $indent . '                        ';
        $value = $this->resolveValue($context->find('message'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '
';
        $value = $context->find('isdeleted');
        if (empty($value)) {
            
            $value = $context->find('haswordcount');
            $buffer .= $this->sectionC736bd7d7281456fc16f15841a24817d($context, $indent, $value);
            $buffer .= $indent . '
';
            $value = $context->find('attachments');
            $buffer .= $this->sectionB306e4067909c929106dbff70f7ebee5($context, $indent, $value);
            $buffer .= $indent . '
';
            $buffer .= $indent . '                        ';
            $value = $this->resolveValue($context->findDot('html.taglist'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '
';
            $buffer .= $indent . '
';
            $value = $context->find('attachments');
            $buffer .= $this->section3bd5bb626da0b6e76d640a6f7ce450c2($context, $indent, $value);
            $buffer .= $indent . '
';
            $value = $context->find('readonly');
            if (empty($value)) {
                
                $buffer .= $indent . '                            <div class="d-flex flex-wrap">
';
                $value = $context->findDot('html.rating');
                $buffer .= $this->section893db223dd83fa2088409b1056b6c899($context, $indent, $value);
                $blockFunction = $context->findInBlock('actions');
                if (is_callable($blockFunction)) {
                    $buffer .= call_user_func($blockFunction, $context);
                } else {
                    $buffer .= $indent . '                                    <div
';
                    $buffer .= $indent . '                                        class="post-actions d-flex align-self-end justify-content-end flex-wrap ms-auto p-1"
';
                    $buffer .= $indent . '                                        data-region="post-actions-container"
';
                    $buffer .= $indent . '                                        role="menubar"
';
                    $buffer .= $indent . '                                        aria-label=\'';
                    $value = $context->find('str');
                    $buffer .= $this->section2d7e7bb37b1c76e06dcc1842169465b6($context, $indent, $value);
                    $buffer .= '\'
';
                    $buffer .= $indent . '                                        aria-controls="p';
                    $value = $this->resolveValue($context->find('id'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '"
';
                    $buffer .= $indent . '                                    >
';
                    $value = $context->find('capabilities');
                    $buffer .= $this->section7b389b5269e6581e27b6c2390f35183b($context, $indent, $value);
                    $buffer .= $indent . '                                    </div>
';
                }
                $buffer .= $indent . '                            </div>
';
            }
            $buffer .= $indent . '
';
            $buffer .= $indent . '                        ';
            $blockFunction = $context->findInBlock('footer');
            if (is_callable($blockFunction)) {
                $buffer .= call_user_func($blockFunction, $context);
            }
            $buffer .= '
';
        }
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $blockFunction = $context->findInBlock('replies');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        } else {
            $buffer .= $indent . '        <div data-region="replies-container">
';
            $value = $context->find('hasreplies');
            $buffer .= $this->section0a2c07c1fe68076348109b9df6691419($context, $indent, $value);
            $buffer .= $indent . '        </div>
';
        }
        $buffer .= $indent . '</article>
';

        return $buffer;
    }

    private function section3ed6c5fc72aa7724e442457028079947(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'unread';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'unread';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section21f91dd58d78aa33caec1006870d7c95(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'firstpost starter';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'firstpost starter';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2d7e7bb37b1c76e06dcc1842169465b6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' postbyuser, mod_forum, {"post": "{{subject}}", "user": "{{author.fullname}}"} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' postbyuser, mod_forum, {"post": "';
                $value = $this->resolveValue($context->find('subject'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '", "user": "';
                $value = $this->resolveValue($context->findDot('author.fullname'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"} ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8385bd492ccda898f38e149a71c97f98(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<a id="unread" aria-hidden="true"></a>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<a id="unread" aria-hidden="true"></a>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD3a99ebfecb94beea6e88f9141126424(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' pictureof, core, {{author.fullname}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' pictureof, core, ';
                $value = $this->resolveValue($context->findDot('author.fullname'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCc6d614fa097b13fc16a9cbf590e248c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <img
                                    class="rounded-circle w-100"
                                    src="{{{.}}}"
                                    alt="{{#str}} pictureof, core, {{author.fullname}} {{/str}}"
                                    aria-hidden="true"
                                    title="{{#str}} pictureof, core, {{author.fullname}} {{/str}}"
                                >
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <img
';
                $buffer .= $indent . '                                    class="rounded-circle w-100"
';
                $buffer .= $indent . '                                    src="';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                    alt="';
                $value = $context->find('str');
                $buffer .= $this->sectionD3a99ebfecb94beea6e88f9141126424($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                    aria-hidden="true"
';
                $buffer .= $indent . '                                    title="';
                $value = $context->find('str');
                $buffer .= $this->sectionD3a99ebfecb94beea6e88f9141126424($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                >
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5c682a58f1b853c19acce016c9b679fa(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div class="me-2" style="width: 45px;">
                            {{#urls.profileimage}}
                                <img
                                    class="rounded-circle w-100"
                                    src="{{{.}}}"
                                    alt="{{#str}} pictureof, core, {{author.fullname}} {{/str}}"
                                    aria-hidden="true"
                                    title="{{#str}} pictureof, core, {{author.fullname}} {{/str}}"
                                >
                            {{/urls.profileimage}}
                        </div>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <div class="me-2" style="width: 45px;">
';
                $value = $context->findDot('urls.profileimage');
                $buffer .= $this->sectionCc6d614fa097b13fc16a9cbf590e248c($context, $indent, $value);
                $buffer .= $indent . '                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBbc21c36d03664580b5227e5ce50ba02(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' inreplyto, mod_forum, {{.}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' inreplyto, mod_forum, ';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE483fbf533dac7c9d12325593db4751f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <span class="visually-hidden">{{#str}} inreplyto, mod_forum, {{.}} {{/str}}</span>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <span class="visually-hidden">';
                $value = $context->find('str');
                $buffer .= $this->sectionBbc21c36d03664580b5227e5ce50ba02($context, $indent, $value);
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFb8e8ddc9ca3702110812af7d06781d6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{{.}}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBe063bea9e3828a4ceaa260d495c44b9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' strftimedaydatetime, core_langconfig ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' strftimedaydatetime, core_langconfig ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA308eba18ba8e2ab8f95747bd19a5e97(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'postisprivatereply, forum';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'postisprivatereply, forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section00a922ca5a40c4cbd79e18e319080e6b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div class="privatereplyinfo">
                        {{#str}}postisprivatereply, forum{{/str}}
                        </div>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <div class="privatereplyinfo">
';
                $buffer .= $indent . '                        ';
                $value = $context->find('str');
                $buffer .= $this->sectionA308eba18ba8e2ab8f95747bd19a5e97($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section97736c50c16d72b49b1eb58fe3695bea(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' numberofreplies, mod_forum, {{replycount}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' numberofreplies, mod_forum, ';
                $value = $this->resolveValue($context->find('replycount'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1918559ef39456da08efd36a5d0c9b8a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <span class="visually-hidden">{{#str}} numberofreplies, mod_forum, {{replycount}} {{/str}}</span>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <span class="visually-hidden">';
                $value = $context->find('str');
                $buffer .= $this->section97736c50c16d72b49b1eb58fe3695bea($context, $indent, $value);
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9676b028b46e3df83a3055c6a32599ed(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' memberofgroup, group, {{name}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' memberofgroup, group, ';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE103d4001a9c5c8aed5c9292425b5842(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' pictureof, core, {{name}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' pictureof, core, ';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD984f9efdea6c7842b3c8534dc635846(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                        <a href="{{urls.group}}" role="button" aria-label=\'{{#str}} memberofgroup, group, {{name}}{{/str}}\'>
                                            <img
                                                 class="rounded-circle w-100"
                                                 src="{{{.}}}"
                                                 alt="{{#str}} pictureof, core, {{name}} {{/str}}"
                                                 aria-hidden="true"
                                                 title="{{#str}} pictureof, core, {{name}} {{/str}}"
                                            >
                                        </a>
                                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                        <a href="';
                $value = $this->resolveValue($context->findDot('urls.group'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" role="button" aria-label=\'';
                $value = $context->find('str');
                $buffer .= $this->section9676b028b46e3df83a3055c6a32599ed($context, $indent, $value);
                $buffer .= '\'>
';
                $buffer .= $indent . '                                            <img
';
                $buffer .= $indent . '                                                 class="rounded-circle w-100"
';
                $buffer .= $indent . '                                                 src="';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                                 alt="';
                $value = $context->find('str');
                $buffer .= $this->sectionE103d4001a9c5c8aed5c9292425b5842($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                                 aria-hidden="true"
';
                $buffer .= $indent . '                                                 title="';
                $value = $context->find('str');
                $buffer .= $this->sectionE103d4001a9c5c8aed5c9292425b5842($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                            >
';
                $buffer .= $indent . '                                        </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC85444b6bcefca95f87e5de40f980b28(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    {{#urls.image}}
                                        <a href="{{urls.group}}" role="button" aria-label=\'{{#str}} memberofgroup, group, {{name}}{{/str}}\'>
                                            <img
                                                 class="rounded-circle w-100"
                                                 src="{{{.}}}"
                                                 alt="{{#str}} pictureof, core, {{name}} {{/str}}"
                                                 aria-hidden="true"
                                                 title="{{#str}} pictureof, core, {{name}} {{/str}}"
                                            >
                                        </a>
                                    {{/urls.image}}
                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->findDot('urls.image');
                $buffer .= $this->sectionD984f9efdea6c7842b3c8534dc635846($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4fc91cf52cac380c0d096f1ff6b215d0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                        <img class="rounded-circle w-100"
                                            src="{{{.}}}"
                                            alt="{{#str}} pictureof, core, {{name}} {{/str}}"
                                            title="{{#str}} pictureof, core, {{name}} {{/str}}"
                                        >
                                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                        <img class="rounded-circle w-100"
';
                $buffer .= $indent . '                                            src="';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                            alt="';
                $value = $context->find('str');
                $buffer .= $this->sectionE103d4001a9c5c8aed5c9292425b5842($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                            title="';
                $value = $context->find('str');
                $buffer .= $this->sectionE103d4001a9c5c8aed5c9292425b5842($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                        >
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3d589b0e14dac6472b5fe78f24993994(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                {{#urls.group}}
                                    {{#urls.image}}
                                        <a href="{{urls.group}}" role="button" aria-label=\'{{#str}} memberofgroup, group, {{name}}{{/str}}\'>
                                            <img
                                                 class="rounded-circle w-100"
                                                 src="{{{.}}}"
                                                 alt="{{#str}} pictureof, core, {{name}} {{/str}}"
                                                 aria-hidden="true"
                                                 title="{{#str}} pictureof, core, {{name}} {{/str}}"
                                            >
                                        </a>
                                    {{/urls.image}}
                                {{/urls.group}}
                                {{^urls.group}}
                                    {{#urls.image}}
                                        <img class="rounded-circle w-100"
                                            src="{{{.}}}"
                                            alt="{{#str}} pictureof, core, {{name}} {{/str}}"
                                            title="{{#str}} pictureof, core, {{name}} {{/str}}"
                                        >
                                    {{/urls.image}}
                                {{/urls.group}}
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->findDot('urls.group');
                $buffer .= $this->sectionC85444b6bcefca95f87e5de40f980b28($context, $indent, $value);
                $value = $context->findDot('urls.group');
                if (empty($value)) {
                    
                    $value = $context->findDot('urls.image');
                    $buffer .= $this->section4fc91cf52cac380c0d096f1ff6b215d0($context, $indent, $value);
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA22dcccdea2803748a329cf300bb96c2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div class="me-2 author-groups-container" style="width: 45px; flex-shrink: 0">
                            {{#groups}}
                                {{#urls.group}}
                                    {{#urls.image}}
                                        <a href="{{urls.group}}" role="button" aria-label=\'{{#str}} memberofgroup, group, {{name}}{{/str}}\'>
                                            <img
                                                 class="rounded-circle w-100"
                                                 src="{{{.}}}"
                                                 alt="{{#str}} pictureof, core, {{name}} {{/str}}"
                                                 aria-hidden="true"
                                                 title="{{#str}} pictureof, core, {{name}} {{/str}}"
                                            >
                                        </a>
                                    {{/urls.image}}
                                {{/urls.group}}
                                {{^urls.group}}
                                    {{#urls.image}}
                                        <img class="rounded-circle w-100"
                                            src="{{{.}}}"
                                            alt="{{#str}} pictureof, core, {{name}} {{/str}}"
                                            title="{{#str}} pictureof, core, {{name}} {{/str}}"
                                        >
                                    {{/urls.image}}
                                {{/urls.group}}
                            {{/groups}}
                        </div>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <div class="me-2 author-groups-container" style="width: 45px; flex-shrink: 0">
';
                $value = $context->find('groups');
                $buffer .= $this->section3d589b0e14dac6472b5fe78f24993994($context, $indent, $value);
                $buffer .= $indent . '                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC5bb1649427fd639aeb93fcd9f945e21(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' numwords, core, {{wordcount}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' numwords, core, ';
                $value = $this->resolveValue($context->find('wordcount'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC736bd7d7281456fc16f15841a24817d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <p class="fst-italic mb-0"><small>{{#str}} numwords, core, {{wordcount}} {{/str}}</small></p>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <p class="fst-italic mb-0"><small>';
                $value = $context->find('str');
                $buffer .= $this->sectionC5bb1649427fd639aeb93fcd9f945e21($context, $indent, $value);
                $buffer .= '</small></p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section276cb37c59a636c58d4c95f526f34076(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' attachmentname, mod_forum, {{filename}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' attachmentname, mod_forum, ';
                $value = $this->resolveValue($context->find('filename'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section63f7f582e0283c9cd8898a1aa8039d60(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' addtoportfolio, core_portfolio ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' addtoportfolio, core_portfolio ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC95b897453b8a2454a363ea092e35f3e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' t/portfolioadd, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' t/portfolioadd, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB2b54d92018ac7ab55a683cf86e8349e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                        <a href="{{{.}}}" title="{{#str}} addtoportfolio, core_portfolio {{/str}}">
                                            {{#pix}} t/portfolioadd, core {{/pix}}
                                        </a>
                                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                        <a href="';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" title="';
                $value = $context->find('str');
                $buffer .= $this->section63f7f582e0283c9cd8898a1aa8039d60($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                            ';
                $value = $context->find('pix');
                $buffer .= $this->sectionC95b897453b8a2454a363ea092e35f3e($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                                        </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA0da9044249cd16a1e32bca9034750cc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                        <div>{{{.}}}</div>
                                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                        <div>';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section76800365720c72010a8bcb0cfb85ca0b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <div class="attachedimages">
                                    <img
                                        src="{{{url}}}"
                                        alt="{{#str}} attachmentname, mod_forum, {{filename}} {{/str}}"
                                        style="max-width: 100%"
                                    >
                                    {{#urls.export}}
                                        <a href="{{{.}}}" title="{{#str}} addtoportfolio, core_portfolio {{/str}}">
                                            {{#pix}} t/portfolioadd, core {{/pix}}
                                        </a>
                                    {{/urls.export}}
                                    {{#html.plagiarism}}
                                        <div>{{{.}}}</div>
                                    {{/html.plagiarism}}
                                </div>
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <div class="attachedimages">
';
                $buffer .= $indent . '                                    <img
';
                $buffer .= $indent . '                                        src="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                        alt="';
                $value = $context->find('str');
                $buffer .= $this->section276cb37c59a636c58d4c95f526f34076($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                        style="max-width: 100%"
';
                $buffer .= $indent . '                                    >
';
                $value = $context->findDot('urls.export');
                $buffer .= $this->sectionB2b54d92018ac7ab55a683cf86e8349e($context, $indent, $value);
                $value = $context->findDot('html.plagiarism');
                $buffer .= $this->sectionA0da9044249cd16a1e32bca9034750cc($context, $indent, $value);
                $buffer .= $indent . '                                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB306e4067909c929106dbff70f7ebee5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            {{#isimage}}
                                <div class="attachedimages">
                                    <img
                                        src="{{{url}}}"
                                        alt="{{#str}} attachmentname, mod_forum, {{filename}} {{/str}}"
                                        style="max-width: 100%"
                                    >
                                    {{#urls.export}}
                                        <a href="{{{.}}}" title="{{#str}} addtoportfolio, core_portfolio {{/str}}">
                                            {{#pix}} t/portfolioadd, core {{/pix}}
                                        </a>
                                    {{/urls.export}}
                                    {{#html.plagiarism}}
                                        <div>{{{.}}}</div>
                                    {{/html.plagiarism}}
                                </div>
                            {{/isimage}}
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('isimage');
                $buffer .= $this->section76800365720c72010a8bcb0cfb85ca0b($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section96fdf38a3da828f079856309b8856872(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{icon}}, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('icon'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ', core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE4582362bca17629710ca07a1cd978e3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' exportattachmentname, mod_forum, {{filename}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' exportattachmentname, mod_forum, ';
                $value = $this->resolveValue($context->find('filename'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB6b635ad82ef0b91da378a60e35749bf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                        <a href="{{{.}}}" title="{{#str}} exportattachmentname, mod_forum, {{filename}} {{/str}}">
                                            {{#pix}} t/portfolioadd, core {{/pix}}
                                        </a>
                                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                        <a href="';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" title="';
                $value = $context->find('str');
                $buffer .= $this->sectionE4582362bca17629710ca07a1cd978e3($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                            ';
                $value = $context->find('pix');
                $buffer .= $this->sectionC95b897453b8a2454a363ea092e35f3e($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                                        </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3bd5bb626da0b6e76d640a6f7ce450c2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            {{^isimage}}
                                <div>
                                    <a
                                        href="{{{url}}}"
                                        aria-label="{{#str}} attachmentname, mod_forum, {{filename}} {{/str}}"
                                    >
                                        {{#pix}} {{icon}}, core {{/pix}} {{filename}}
                                    </a>
                                    {{#urls.export}}
                                        <a href="{{{.}}}" title="{{#str}} exportattachmentname, mod_forum, {{filename}} {{/str}}">
                                            {{#pix}} t/portfolioadd, core {{/pix}}
                                        </a>
                                    {{/urls.export}}
                                    {{#html.plagiarism}}
                                        <div>{{{.}}}</div>
                                    {{/html.plagiarism}}
                                </div>
                            {{/isimage}}
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('isimage');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                                <div>
';
                    $buffer .= $indent . '                                    <a
';
                    $buffer .= $indent . '                                        href="';
                    $value = $this->resolveValue($context->find('url'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '"
';
                    $buffer .= $indent . '                                        aria-label="';
                    $value = $context->find('str');
                    $buffer .= $this->section276cb37c59a636c58d4c95f526f34076($context, $indent, $value);
                    $buffer .= '"
';
                    $buffer .= $indent . '                                    >
';
                    $buffer .= $indent . '                                        ';
                    $value = $context->find('pix');
                    $buffer .= $this->section96fdf38a3da828f079856309b8856872($context, $indent, $value);
                    $buffer .= ' ';
                    $value = $this->resolveValue($context->find('filename'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '
';
                    $buffer .= $indent . '                                    </a>
';
                    $value = $context->findDot('urls.export');
                    $buffer .= $this->sectionB6b635ad82ef0b91da378a60e35749bf($context, $indent, $value);
                    $value = $context->findDot('html.plagiarism');
                    $buffer .= $this->sectionA0da9044249cd16a1e32bca9034750cc($context, $indent, $value);
                    $buffer .= $indent . '                                </div>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section893db223dd83fa2088409b1056b6c899(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    <div class="mt-2">{{{.}}}</div>
                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                    <div class="mt-2">';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7c38fbb8f8f3e49e4120d021d07feb2f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' permanentlinktopost, mod_forum ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' permanentlinktopost, mod_forum ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section763a3604c774c34d64897ef31abbb560(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' permalink, mod_forum ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' permalink, mod_forum ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFf66920492ad9e6f44b6e45158fe3d7e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                <a
                                                    data-region="post-action"
                                                    href="{{{urls.view}}}"
                                                    class="btn btn-link"
                                                    title="{{#str}} permanentlinktopost, mod_forum {{/str}}"
                                                    aria-label="{{#str}} permanentlinktopost, mod_forum {{/str}}"
                                                    role="menuitem"
                                                >
                                                    {{#str}} permalink, mod_forum {{/str}}
                                                </a>
                                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                                <a
';
                $buffer .= $indent . '                                                    data-region="post-action"
';
                $buffer .= $indent . '                                                    href="';
                $value = $this->resolveValue($context->findDot('urls.view'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                                    class="btn btn-link"
';
                $buffer .= $indent . '                                                    title="';
                $value = $context->find('str');
                $buffer .= $this->section7c38fbb8f8f3e49e4120d021d07feb2f($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                                    aria-label="';
                $value = $context->find('str');
                $buffer .= $this->section7c38fbb8f8f3e49e4120d021d07feb2f($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                                    role="menuitem"
';
                $buffer .= $indent . '                                                >
';
                $buffer .= $indent . '                                                    ';
                $value = $context->find('str');
                $buffer .= $this->section763a3604c774c34d64897ef31abbb560($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                                                </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFcb5abb8e3c94408fa1d289b5ef3f447(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' markread, mod_forum ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' markread, mod_forum ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section99d99ba3b193a41773c408ffc8d59d83(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                    <a
                                                        data-region="post-action"
                                                        href="{{{urls.markasread}}}"
                                                        class="btn btn-link"
                                                        role="menuitem"
                                                    >
                                                        {{#str}} markread, mod_forum {{/str}}
                                                    </a>
                                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                                    <a
';
                $buffer .= $indent . '                                                        data-region="post-action"
';
                $buffer .= $indent . '                                                        href="';
                $value = $this->resolveValue($context->findDot('urls.markasread'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                                        class="btn btn-link"
';
                $buffer .= $indent . '                                                        role="menuitem"
';
                $buffer .= $indent . '                                                    >
';
                $buffer .= $indent . '                                                        ';
                $value = $context->find('str');
                $buffer .= $this->sectionFcb5abb8e3c94408fa1d289b5ef3f447($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                                                    </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section31d13d35264fbc819e59cd4918196342(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' markunread, mod_forum ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' markunread, mod_forum ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD7e9333cc765750bcc28a5f5179a6e38(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                {{#unread}}
                                                    <a
                                                        data-region="post-action"
                                                        href="{{{urls.markasread}}}"
                                                        class="btn btn-link"
                                                        role="menuitem"
                                                    >
                                                        {{#str}} markread, mod_forum {{/str}}
                                                    </a>
                                                {{/unread}}
                                                {{^unread}}
                                                    <a
                                                        data-region="post-action"
                                                        href="{{{urls.markasunread}}}"
                                                        class="btn btn-link"
                                                        role="menuitem"
                                                    >
                                                        {{#str}} markunread, mod_forum {{/str}}
                                                    </a>
                                                {{/unread}}
                                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('unread');
                $buffer .= $this->section99d99ba3b193a41773c408ffc8d59d83($context, $indent, $value);
                $value = $context->find('unread');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                                                    <a
';
                    $buffer .= $indent . '                                                        data-region="post-action"
';
                    $buffer .= $indent . '                                                        href="';
                    $value = $this->resolveValue($context->findDot('urls.markasunread'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '"
';
                    $buffer .= $indent . '                                                        class="btn btn-link"
';
                    $buffer .= $indent . '                                                        role="menuitem"
';
                    $buffer .= $indent . '                                                    >
';
                    $buffer .= $indent . '                                                        ';
                    $value = $context->find('str');
                    $buffer .= $this->section31d13d35264fbc819e59cd4918196342($context, $indent, $value);
                    $buffer .= '
';
                    $buffer .= $indent . '                                                    </a>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0fb7958d41ca7a880e19a003139c431d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' permanentlinktoparentpost, mod_forum ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' permanentlinktoparentpost, mod_forum ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCf5fdc3805ec5d1701e4bc484d707b5c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' parent, mod_forum ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' parent, mod_forum ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section80cc94202a470a7178b2740e5cb21b49(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                <a
                                                    data-region="post-action"
                                                    href="{{{.}}}"
                                                    class="btn btn-link"
                                                    title="{{#str}} permanentlinktoparentpost, mod_forum {{/str}}"
                                                    aria-label="{{#str}} permanentlinktoparentpost, mod_forum {{/str}}"
                                                    role="menuitem"
                                                >
                                                    {{#str}} parent, mod_forum {{/str}}
                                                </a>
                                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                                <a
';
                $buffer .= $indent . '                                                    data-region="post-action"
';
                $buffer .= $indent . '                                                    href="';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                                    class="btn btn-link"
';
                $buffer .= $indent . '                                                    title="';
                $value = $context->find('str');
                $buffer .= $this->section0fb7958d41ca7a880e19a003139c431d($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                                    aria-label="';
                $value = $context->find('str');
                $buffer .= $this->section0fb7958d41ca7a880e19a003139c431d($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                                    role="menuitem"
';
                $buffer .= $indent . '                                                >
';
                $buffer .= $indent . '                                                    ';
                $value = $context->find('str');
                $buffer .= $this->sectionCf5fdc3805ec5d1701e4bc484d707b5c($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                                                </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD08a060cc097f193c29c5510c81c4ca5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' edit, mod_forum ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' edit, mod_forum ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9a2f7affbe693f43228c85c98a276b7b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                <a
                                                    data-region="post-action"
                                                    href="{{{urls.edit}}}"
                                                    class="btn btn-link"
                                                    role="menuitem"
                                                >
                                                    {{#str}} edit, mod_forum {{/str}}
                                                </a>
                                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                                <a
';
                $buffer .= $indent . '                                                    data-region="post-action"
';
                $buffer .= $indent . '                                                    href="';
                $value = $this->resolveValue($context->findDot('urls.edit'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                                    class="btn btn-link"
';
                $buffer .= $indent . '                                                    role="menuitem"
';
                $buffer .= $indent . '                                                >
';
                $buffer .= $indent . '                                                    ';
                $value = $context->find('str');
                $buffer .= $this->sectionD08a060cc097f193c29c5510c81c4ca5($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                                                </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0066cb1b087bd9f8c261a80ff7434d10(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' prune, mod_forum ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' prune, mod_forum ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE27283757bd44561758566524e7cfb64(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                <a
                                                    data-region="post-action"
                                                    href="{{{urls.split}}}"
                                                    class="btn btn-link"
                                                    role="menuitem"
                                                >
                                                    {{#str}} prune, mod_forum {{/str}}
                                                </a>
                                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                                <a
';
                $buffer .= $indent . '                                                    data-region="post-action"
';
                $buffer .= $indent . '                                                    href="';
                $value = $this->resolveValue($context->findDot('urls.split'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                                    class="btn btn-link"
';
                $buffer .= $indent . '                                                    role="menuitem"
';
                $buffer .= $indent . '                                                >
';
                $buffer .= $indent . '                                                    ';
                $value = $context->find('str');
                $buffer .= $this->section0066cb1b087bd9f8c261a80ff7434d10($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                                                </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC033b8edefb34009ad7ec794e2a13909(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' delete, mod_forum ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' delete, mod_forum ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEc030bbb7c528eaed6265a7619003144(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                <a
                                                    data-region="post-action"
                                                    href="{{{urls.delete}}}"
                                                    class="btn btn-link"
                                                    role="menuitem"
                                                >
                                                    {{#str}} delete, mod_forum {{/str}}
                                                </a>
                                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                                <a
';
                $buffer .= $indent . '                                                    data-region="post-action"
';
                $buffer .= $indent . '                                                    href="';
                $value = $this->resolveValue($context->findDot('urls.delete'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                                    class="btn btn-link"
';
                $buffer .= $indent . '                                                    role="menuitem"
';
                $buffer .= $indent . '                                                >
';
                $buffer .= $indent . '                                                    ';
                $value = $context->find('str');
                $buffer .= $this->sectionC033b8edefb34009ad7ec794e2a13909($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                                                </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAe37fdeec206de815fa124c8b1578fdb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' reply, mod_forum ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' reply, mod_forum ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF214a2ae8f08e914b534e36a70abfb10(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                {{$replyoutput}}
                                                    <a
                                                        data-region="post-action"
                                                        href="{{{urls.reply}}}"
                                                        class="btn btn-link"
                                                        data-post-id="{{id}}"
                                                        data-action="collapsible-link"
                                                        data-can-reply-privately="{{canreplyprivately}}"
                                                        title="{{#str}} reply, mod_forum {{/str}}"
                                                        role="menuitem"
                                                    >
                                                        {{#str}} reply, mod_forum {{/str}}
                                                    </a>
                                                {{/replyoutput}}
                                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $blockFunction = $context->findInBlock('replyoutput');
                if (is_callable($blockFunction)) {
                    $buffer .= call_user_func($blockFunction, $context);
                } else {
                    $buffer .= $indent . '                                                    <a
';
                    $buffer .= $indent . '                                                        data-region="post-action"
';
                    $buffer .= $indent . '                                                        href="';
                    $value = $this->resolveValue($context->findDot('urls.reply'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '"
';
                    $buffer .= $indent . '                                                        class="btn btn-link"
';
                    $buffer .= $indent . '                                                        data-post-id="';
                    $value = $this->resolveValue($context->find('id'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '"
';
                    $buffer .= $indent . '                                                        data-action="collapsible-link"
';
                    $buffer .= $indent . '                                                        data-can-reply-privately="';
                    $value = $this->resolveValue($context->find('canreplyprivately'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '"
';
                    $buffer .= $indent . '                                                        title="';
                    $value = $context->find('str');
                    $buffer .= $this->sectionAe37fdeec206de815fa124c8b1578fdb($context, $indent, $value);
                    $buffer .= '"
';
                    $buffer .= $indent . '                                                        role="menuitem"
';
                    $buffer .= $indent . '                                                    >
';
                    $buffer .= $indent . '                                                        ';
                    $value = $context->find('str');
                    $buffer .= $this->sectionAe37fdeec206de815fa124c8b1578fdb($context, $indent, $value);
                    $buffer .= '
';
                    $buffer .= $indent . '                                                    </a>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE39aec9113dc99cdb0ba99f04035ee20(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                    {{$replyoutput}}
                                                        <a
                                                            href="{{{urls.reply}}}"
                                                            class="btn btn-link"
                                                            data-post-id="{{id}}"
                                                            data-can-reply-privately="{{canreplyprivately}}"
                                                            title="{{#str}} reply, mod_forum {{/str}}"
                                                            role="menuitem"
                                                        >
                                                            {{#str}} reply, mod_forum {{/str}}
                                                        </a>
                                                    {{/replyoutput}}
                                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $blockFunction = $context->findInBlock('replyoutput');
                if (is_callable($blockFunction)) {
                    $buffer .= call_user_func($blockFunction, $context);
                } else {
                    $buffer .= $indent . '                                                        <a
';
                    $buffer .= $indent . '                                                            href="';
                    $value = $this->resolveValue($context->findDot('urls.reply'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '"
';
                    $buffer .= $indent . '                                                            class="btn btn-link"
';
                    $buffer .= $indent . '                                                            data-post-id="';
                    $value = $this->resolveValue($context->find('id'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '"
';
                    $buffer .= $indent . '                                                            data-can-reply-privately="';
                    $value = $this->resolveValue($context->find('canreplyprivately'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '"
';
                    $buffer .= $indent . '                                                            title="';
                    $value = $context->find('str');
                    $buffer .= $this->sectionAe37fdeec206de815fa124c8b1578fdb($context, $indent, $value);
                    $buffer .= '"
';
                    $buffer .= $indent . '                                                            role="menuitem"
';
                    $buffer .= $indent . '                                                        >
';
                    $buffer .= $indent . '                                                            ';
                    $value = $context->find('str');
                    $buffer .= $this->sectionAe37fdeec206de815fa124c8b1578fdb($context, $indent, $value);
                    $buffer .= '
';
                    $buffer .= $indent . '                                                        </a>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4ccfbb14a283a7f411eb7df913350a42(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                <a
                                                    data-region="post-action"
                                                    href="{{{urls.export}}}"
                                                    class="btn btn-link"
                                                    role="menuitem"
                                                >
                                                    {{#str}} addtoportfolio, core_portfolio {{/str}}
                                                </a>
                                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                                <a
';
                $buffer .= $indent . '                                                    data-region="post-action"
';
                $buffer .= $indent . '                                                    href="';
                $value = $this->resolveValue($context->findDot('urls.export'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                                    class="btn btn-link"
';
                $buffer .= $indent . '                                                    role="menuitem"
';
                $buffer .= $indent . '                                                >
';
                $buffer .= $indent . '                                                    ';
                $value = $context->find('str');
                $buffer .= $this->section63f7f582e0283c9cd8898a1aa8039d60($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                                                </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7b389b5269e6581e27b6c2390f35183b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                            {{#view}}
                                                <a
                                                    data-region="post-action"
                                                    href="{{{urls.view}}}"
                                                    class="btn btn-link"
                                                    title="{{#str}} permanentlinktopost, mod_forum {{/str}}"
                                                    aria-label="{{#str}} permanentlinktopost, mod_forum {{/str}}"
                                                    role="menuitem"
                                                >
                                                    {{#str}} permalink, mod_forum {{/str}}
                                                </a>
                                            {{/view}}
                                            {{#controlreadstatus}}
                                                {{#unread}}
                                                    <a
                                                        data-region="post-action"
                                                        href="{{{urls.markasread}}}"
                                                        class="btn btn-link"
                                                        role="menuitem"
                                                    >
                                                        {{#str}} markread, mod_forum {{/str}}
                                                    </a>
                                                {{/unread}}
                                                {{^unread}}
                                                    <a
                                                        data-region="post-action"
                                                        href="{{{urls.markasunread}}}"
                                                        class="btn btn-link"
                                                        role="menuitem"
                                                    >
                                                        {{#str}} markunread, mod_forum {{/str}}
                                                    </a>
                                                {{/unread}}
                                            {{/controlreadstatus}}
                                            {{#urls.viewparent}}
                                                <a
                                                    data-region="post-action"
                                                    href="{{{.}}}"
                                                    class="btn btn-link"
                                                    title="{{#str}} permanentlinktoparentpost, mod_forum {{/str}}"
                                                    aria-label="{{#str}} permanentlinktoparentpost, mod_forum {{/str}}"
                                                    role="menuitem"
                                                >
                                                    {{#str}} parent, mod_forum {{/str}}
                                                </a>
                                            {{/urls.viewparent}}
                                            {{#edit}}
                                                <a
                                                    data-region="post-action"
                                                    href="{{{urls.edit}}}"
                                                    class="btn btn-link"
                                                    role="menuitem"
                                                >
                                                    {{#str}} edit, mod_forum {{/str}}
                                                </a>
                                            {{/edit}}
                                            {{#split}}
                                                <a
                                                    data-region="post-action"
                                                    href="{{{urls.split}}}"
                                                    class="btn btn-link"
                                                    role="menuitem"
                                                >
                                                    {{#str}} prune, mod_forum {{/str}}
                                                </a>
                                            {{/split}}
                                            {{#delete}}
                                                <a
                                                    data-region="post-action"
                                                    href="{{{urls.delete}}}"
                                                    class="btn btn-link"
                                                    role="menuitem"
                                                >
                                                    {{#str}} delete, mod_forum {{/str}}
                                                </a>
                                            {{/delete}}
                                            {{#reply}}
                                                {{$replyoutput}}
                                                    <a
                                                        data-region="post-action"
                                                        href="{{{urls.reply}}}"
                                                        class="btn btn-link"
                                                        data-post-id="{{id}}"
                                                        data-action="collapsible-link"
                                                        data-can-reply-privately="{{canreplyprivately}}"
                                                        title="{{#str}} reply, mod_forum {{/str}}"
                                                        role="menuitem"
                                                    >
                                                        {{#str}} reply, mod_forum {{/str}}
                                                    </a>
                                                {{/replyoutput}}
                                            {{/reply}}
                                            {{^reply}}
                                                {{#selfenrol}}
                                                    {{$replyoutput}}
                                                        <a
                                                            href="{{{urls.reply}}}"
                                                            class="btn btn-link"
                                                            data-post-id="{{id}}"
                                                            data-can-reply-privately="{{canreplyprivately}}"
                                                            title="{{#str}} reply, mod_forum {{/str}}"
                                                            role="menuitem"
                                                        >
                                                            {{#str}} reply, mod_forum {{/str}}
                                                        </a>
                                                    {{/replyoutput}}
                                                {{/selfenrol}}
                                            {{/reply}}
                                            {{#export}}
                                                <a
                                                    data-region="post-action"
                                                    href="{{{urls.export}}}"
                                                    class="btn btn-link"
                                                    role="menuitem"
                                                >
                                                    {{#str}} addtoportfolio, core_portfolio {{/str}}
                                                </a>
                                            {{/export}}
                                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('view');
                $buffer .= $this->sectionFf66920492ad9e6f44b6e45158fe3d7e($context, $indent, $value);
                $value = $context->find('controlreadstatus');
                $buffer .= $this->sectionD7e9333cc765750bcc28a5f5179a6e38($context, $indent, $value);
                $value = $context->findDot('urls.viewparent');
                $buffer .= $this->section80cc94202a470a7178b2740e5cb21b49($context, $indent, $value);
                $value = $context->find('edit');
                $buffer .= $this->section9a2f7affbe693f43228c85c98a276b7b($context, $indent, $value);
                $value = $context->find('split');
                $buffer .= $this->sectionE27283757bd44561758566524e7cfb64($context, $indent, $value);
                $value = $context->find('delete');
                $buffer .= $this->sectionEc030bbb7c528eaed6265a7619003144($context, $indent, $value);
                $value = $context->find('reply');
                $buffer .= $this->sectionF214a2ae8f08e914b534e36a70abfb10($context, $indent, $value);
                $value = $context->find('reply');
                if (empty($value)) {
                    
                    $value = $context->find('selfenrol');
                    $buffer .= $this->sectionE39aec9113dc99cdb0ba99f04035ee20($context, $indent, $value);
                }
                $value = $context->find('export');
                $buffer .= $this->section4ccfbb14a283a7f411eb7df913350a42($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2f96b8da113d76c894e7520ea1c4794f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{> mod_forum/forum_discussion_post }}
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('mod_forum/forum_discussion_post')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0a2c07c1fe68076348109b9df6691419(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{#replies}}
                    {{> mod_forum/forum_discussion_post }}
                {{/replies}}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('replies');
                $buffer .= $this->section2f96b8da113d76c894e7520ea1c4794f($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function blockB271b05d99926cf71f42fc2fdaf098b4($context)
    {
        $indent = $buffer = '';
        $buffer .= 'created-';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
    
        return $buffer;
    }

    public function block0f58c85b5accd62eb904cca306ac20c3($context)
    {
        $indent = $buffer = '';
        $value = $this->resolveValue($context->find('timecreated'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
    
        return $buffer;
    }

    public function block3f659631444eecbe92f0647acc7c31ef($context)
    {
        $indent = $buffer = '';
        $value = $context->find('str');
        $buffer .= $this->sectionBe063bea9e3828a4ceaa260d495c44b9($context, $indent, $value);
    
        return $buffer;
    }
}
