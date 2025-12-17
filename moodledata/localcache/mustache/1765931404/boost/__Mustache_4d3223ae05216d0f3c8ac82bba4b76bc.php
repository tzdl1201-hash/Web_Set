<?php

class __Mustache_4d3223ae05216d0f3c8ac82bba4b76bc extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div id="discussion-container-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" data-content="forum-discussion">
';
        $value = $context->find('html');
        $buffer .= $this->section5a8f361da349f323028ef459bd789b0d($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('notifications');
        $buffer .= $this->sectionA4f0f3fb39c10e0717577cfc5fdddbe8($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $this->resolveValue($context->findDot('html.posts'), $context);
        $buffer .= $indent . ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '
';
        $value = $context->findDot('html.neighbourlinks');
        $buffer .= $this->sectionFb8e8ddc9ca3702110812af7d06781d6($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '</div>
';
        $value = $context->find('js');
        $buffer .= $this->section609418612fe3fc6746754087d78438c8($context, $indent, $value);

        return $buffer;
    }

    private function sectionC05956596aaaa7770dddd99a0a2144b1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'ms-2';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'ms-2';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA516cd9b27428dded6211681b9f3f106(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="drop-down ms-auto" data-container="discussion-tools">
                {{> mod_forum/forum_action_menu}}
            </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="drop-down ms-auto" data-container="discussion-tools">
';
                if ($partial = $this->mustache->loadPartial('mod_forum/forum_action_menu')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5a8f361da349f323028ef459bd789b0d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{{neighbourlinks}}}

    <div class="d-flex flex-column flex-sm-row mb-1">
        <div>{{{exportdiscussion}}}</div>
        <div class="{{#exportdiscussion}}ms-2{{/exportdiscussion}}">{{{modeselectorform}}}</div>
        <div class="ms-2">{{{movediscussion}}}</div>
        {{#hasanyactions}}
            <div class="drop-down ms-auto" data-container="discussion-tools">
                {{> mod_forum/forum_action_menu}}
            </div>
        {{/hasanyactions}}
    </div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    ';
                $value = $this->resolveValue($context->find('neighbourlinks'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    <div class="d-flex flex-column flex-sm-row mb-1">
';
                $buffer .= $indent . '        <div>';
                $value = $this->resolveValue($context->find('exportdiscussion'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '        <div class="';
                $value = $context->find('exportdiscussion');
                $buffer .= $this->sectionC05956596aaaa7770dddd99a0a2144b1($context, $indent, $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('modeselectorform'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '        <div class="ms-2">';
                $value = $this->resolveValue($context->find('movediscussion'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $value = $context->find('hasanyactions');
                $buffer .= $this->sectionA516cd9b27428dded6211681b9f3f106($context, $indent, $value);
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA4f0f3fb39c10e0717577cfc5fdddbe8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{> core/notification}}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core/notification')) {
                    $buffer .= $partial->renderInternal($context, $indent . '    ');
                }
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
                $buffer .= $indent . ($value === null ? '' : $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2959f3da1bef54d359f3a89711f9ae57(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{throttlingwarningmsg}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('throttlingwarningmsg'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section609418612fe3fc6746754087d78438c8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require(
[
    \'jquery\',
    \'core/templates\',
    \'mod_forum/discussion\',
    \'mod_forum/posts_list\',
    \'mod_forum/lock_toggle\',
    \'mod_forum/favourite_toggle\',
    \'mod_forum/pin_toggle\',
    \'mod_forum/subscription_toggle\'
],
function(
    $,
    Templates,
    Discussion,
    PostsList,
    LockToggle,
    FavouriteToggle,
    Pin,
    SubscribeToggle
) {
    var root = $("[data-content=\'forum-discussion\']");
    Discussion.init(root);
    PostsList.init(root, {{#quote}}{{throttlingwarningmsg}}{{/quote}});
    root = $(\'[data-container="discussion-tools"]\');
    LockToggle.init(root, true);
    FavouriteToggle.init(root, true, function(toggleElement, context) {
        return Templates.render(\'mod_forum/discussion_favourite_toggle\', context)
            .then(function(html, js) {
                return Templates.replaceNode(toggleElement, html, js);
            });
    });
    Pin.init(root, true, function(toggleElement, context) {
        return Templates.render(\'mod_forum/discussion_pin_toggle\', context)
            .then(function(html, js) {
                return Templates.replaceNode(toggleElement, html, js);
            });
    });
    SubscribeToggle.init(root, true, function(toggleElement, context) {
        return Templates.render(\'mod_forum/discussion_subscription_toggle\', context)
            .then(function(html, js) {
                return Templates.replaceNode(toggleElement, html, js);
            });
    });
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require(
';
                $buffer .= $indent . '[
';
                $buffer .= $indent . '    \'jquery\',
';
                $buffer .= $indent . '    \'core/templates\',
';
                $buffer .= $indent . '    \'mod_forum/discussion\',
';
                $buffer .= $indent . '    \'mod_forum/posts_list\',
';
                $buffer .= $indent . '    \'mod_forum/lock_toggle\',
';
                $buffer .= $indent . '    \'mod_forum/favourite_toggle\',
';
                $buffer .= $indent . '    \'mod_forum/pin_toggle\',
';
                $buffer .= $indent . '    \'mod_forum/subscription_toggle\'
';
                $buffer .= $indent . '],
';
                $buffer .= $indent . 'function(
';
                $buffer .= $indent . '    $,
';
                $buffer .= $indent . '    Templates,
';
                $buffer .= $indent . '    Discussion,
';
                $buffer .= $indent . '    PostsList,
';
                $buffer .= $indent . '    LockToggle,
';
                $buffer .= $indent . '    FavouriteToggle,
';
                $buffer .= $indent . '    Pin,
';
                $buffer .= $indent . '    SubscribeToggle
';
                $buffer .= $indent . ') {
';
                $buffer .= $indent . '    var root = $("[data-content=\'forum-discussion\']");
';
                $buffer .= $indent . '    Discussion.init(root);
';
                $buffer .= $indent . '    PostsList.init(root, ';
                $value = $context->find('quote');
                $buffer .= $this->section2959f3da1bef54d359f3a89711f9ae57($context, $indent, $value);
                $buffer .= ');
';
                $buffer .= $indent . '    root = $(\'[data-container="discussion-tools"]\');
';
                $buffer .= $indent . '    LockToggle.init(root, true);
';
                $buffer .= $indent . '    FavouriteToggle.init(root, true, function(toggleElement, context) {
';
                $buffer .= $indent . '        return Templates.render(\'mod_forum/discussion_favourite_toggle\', context)
';
                $buffer .= $indent . '            .then(function(html, js) {
';
                $buffer .= $indent . '                return Templates.replaceNode(toggleElement, html, js);
';
                $buffer .= $indent . '            });
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '    Pin.init(root, true, function(toggleElement, context) {
';
                $buffer .= $indent . '        return Templates.render(\'mod_forum/discussion_pin_toggle\', context)
';
                $buffer .= $indent . '            .then(function(html, js) {
';
                $buffer .= $indent . '                return Templates.replaceNode(toggleElement, html, js);
';
                $buffer .= $indent . '            });
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '    SubscribeToggle.init(root, true, function(toggleElement, context) {
';
                $buffer .= $indent . '        return Templates.render(\'mod_forum/discussion_subscription_toggle\', context)
';
                $buffer .= $indent . '            .then(function(html, js) {
';
                $buffer .= $indent . '                return Templates.replaceNode(toggleElement, html, js);
';
                $buffer .= $indent . '            });
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
