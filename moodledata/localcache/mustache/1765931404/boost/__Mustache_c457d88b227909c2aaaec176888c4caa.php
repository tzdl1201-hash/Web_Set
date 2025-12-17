<?php

class __Mustache_c457d88b227909c2aaaec176888c4caa extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="feedback_info">
';
        $buffer .= $indent . '    <span
';
        $buffer .= $indent . '        class="feedback_info">';
        $value = $context->find('str');
        $buffer .= $this->section2e9c5f34b5a038195a78fded71338f9c($context, $indent, $value);
        $buffer .= ': </span><span
';
        $buffer .= $indent . '        class="feedback_info_value">';
        $value = $this->resolveValue($context->find('completedcount'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</span>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="feedback_info">
';
        $buffer .= $indent . '    <span
';
        $buffer .= $indent . '        class="feedback_info">';
        $value = $context->find('str');
        $buffer .= $this->section59c606871183481f30b22d5204ca9d5d($context, $indent, $value);
        $buffer .= ': </span><span
';
        $buffer .= $indent . '        class="feedback_info_value">';
        $value = $this->resolveValue($context->find('itemscount'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</span>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section2e9c5f34b5a038195a78fded71338f9c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'completed_feedbacks, mod_feedback';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'completed_feedbacks, mod_feedback';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section59c606871183481f30b22d5204ca9d5d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'questions, mod_feedback';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'questions, mod_feedback';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
