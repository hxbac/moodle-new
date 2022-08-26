<?php

class __Mustache_2591f475144a3d70676904bd142eb1b8 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div id="block-recentlyaccessedcourses-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" class="my_course_content_container block-recentlyaccessedcourses block-cards" data-region="recentlyaccessedcourses" data-userid="';
        $value = $this->resolveValue($context->find('userid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" data-displaycoursecategory="';
        $value = $this->resolveValue($context->find('displaycategories'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        $buffer .= $indent . '  <div class="my_course_content mb30">
';
        $buffer .= $indent . '    <div class="my_course_content_header">
';
        $buffer .= $indent . '      <div class="col-xl-8">
';
        $buffer .= $indent . '        <div class="instructor_search_result style2">
';
        $buffer .= $indent . '          <h4>';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section42ef7cd70867819fc9f95ca62e1aeb49($context, $indent, $value);
        $buffer .= '</h4>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '      <div class="col-xl-4">
';
        $buffer .= $indent . '        <div class="candidate_revew_select style2 text-right">
';
        $buffer .= $indent . '          <ul class="mb0">
';
        // 'pagingbar' section
        $value = $context->find('pagingbar');
        $buffer .= $this->section589559170d706d2084a081a739e2a439($context, $indent, $value);
        $buffer .= $indent . '          </ul>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="container-fluid p-0">
';
        if ($partial = $this->mustache->loadPartial('block_recentlyaccessedcourses/recentlyaccessedcourses-view')) {
            $buffer .= $partial->renderInternal($context, $indent . '      ');
        }
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '</div>
';
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->sectionD64823e37d7a62b8b7571498826a32e2($context, $indent, $value);

        return $buffer;
    }

    private function section42ef7cd70867819fc9f95ca62e1aeb49(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'pluginname, block_recentlyaccessedcourses';
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
                
                $buffer .= 'pluginname, block_recentlyaccessedcourses';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section589559170d706d2084a081a739e2a439(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
              <div class="d-flex paging-bar-container" data-region="paging-bar-container">
                {{> core/paged_content_paging_bar }}
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
                
                $buffer .= $indent . '              <div class="d-flex paging-bar-container" data-region="paging-bar-container">
';
                if ($partial = $this->mustache->loadPartial('core/paged_content_paging_bar')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $buffer .= $indent . '              </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD64823e37d7a62b8b7571498826a32e2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  require(
  [
  \'jquery\',
  \'block_recentlyaccessedcourses/main\'
  ],
  function(
  $,
  Main
  ) {
  var root = $(\'#block-recentlyaccessedcourses-{{uniqid}}\');
  var userid = root.attr(\'data-userid\');

  Main.init(userid, root);
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
                
                $buffer .= $indent . '  require(
';
                $buffer .= $indent . '  [
';
                $buffer .= $indent . '  \'jquery\',
';
                $buffer .= $indent . '  \'block_recentlyaccessedcourses/main\'
';
                $buffer .= $indent . '  ],
';
                $buffer .= $indent . '  function(
';
                $buffer .= $indent . '  $,
';
                $buffer .= $indent . '  Main
';
                $buffer .= $indent . '  ) {
';
                $buffer .= $indent . '  var root = $(\'#block-recentlyaccessedcourses-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '\');
';
                $buffer .= $indent . '  var userid = root.attr(\'data-userid\');
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '  Main.init(userid, root);
';
                $buffer .= $indent . '  });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
