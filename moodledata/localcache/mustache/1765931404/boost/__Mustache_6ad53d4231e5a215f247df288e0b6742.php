<?php

class __Mustache_6ad53d4231e5a215f247df288e0b6742 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        if ($parent = $this->mustache->loadPartial('mod_forum/forum_discussion_post')) {
            $context->pushBlockContext(array(
                'replies' => array($this, 'block1c7c2e302e979a493958980d5d89b55c'),
            ));
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }

        return $buffer;
    }

    private function sectionE4927e8d0f7ef567164212b78e25648c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{> mod_forum/forum_discussion_nested_post }}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('mod_forum/forum_discussion_nested_post')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function block1c7c2e302e979a493958980d5d89b55c($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . '        <div class="indent" data-region="replies-container">
';
        $value = $context->find('replies');
        $buffer .= $this->sectionE4927e8d0f7ef567164212b78e25648c($context, $indent, $value);
        $buffer .= $indent . '        </div>
';
    
        return $buffer;
    }
}
