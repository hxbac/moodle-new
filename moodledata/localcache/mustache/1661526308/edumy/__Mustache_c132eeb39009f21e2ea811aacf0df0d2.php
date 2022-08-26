<?php

class __Mustache_c132eeb39009f21e2ea811aacf0df0d2 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="ccn_footer_surround">
';
        $buffer .= $indent . '  <section class="footer_one">
';
        $buffer .= $indent . '    <div class="container">
';
        $buffer .= $indent . '      <div class="row">
';
        // 'footer_column_1' section
        $value = $context->find('footer_column_1');
        $buffer .= $this->sectionEf02b34395e241fec3ea3d7465aa94a8($context, $indent, $value);
        // 'footer_column_2' section
        $value = $context->find('footer_column_2');
        $buffer .= $this->sectionD0bdab56f18437843ab7c6ea08622791($context, $indent, $value);
        // 'footer_column_3' section
        $value = $context->find('footer_column_3');
        $buffer .= $this->section6cd8f671f8f884db11cb9b2c36b69ce6($context, $indent, $value);
        // 'footer_column_4' section
        $value = $context->find('footer_column_4');
        $buffer .= $this->sectionBe5366d7da017347ba336231f8356a57($context, $indent, $value);
        // 'footer_column_5' section
        $value = $context->find('footer_column_5');
        $buffer .= $this->sectionA2c9b9ec0206fb0c8c0e6621d705cb32($context, $indent, $value);
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '  </section>
';
        $buffer .= $indent . '  <section class="footer_middle_area p0">
';
        $buffer .= $indent . '    <div class="container">
';
        $buffer .= $indent . '      <div class="row">
';
        // 'logo_footer' section
        $value = $context->find('logo_footer');
        $buffer .= $this->section2b1054e35b2d42fa996b0dbe5e12a533($context, $indent, $value);
        // 'footer_menu' section
        $value = $context->find('footer_menu');
        $buffer .= $this->section3ab669d3e2fb8a76b6efe596e0d9d66a($context, $indent, $value);
        $buffer .= $indent . '        <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 pb15 pt15">
';
        $buffer .= $indent . '          <div class="footer_social_widget mt15">
';
        $buffer .= $indent . '            <ul>
';
        if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_social_icons')) {
            $buffer .= $partial->renderInternal($context, $indent . '              ');
        }
        $buffer .= $indent . '            </ul>
';
        $buffer .= $indent . '          </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '  </section>
';
        // 'cocoon_copyright' section
        $value = $context->find('cocoon_copyright');
        $buffer .= $this->section998c8d78bdcea878de51c5c476c4766c($context, $indent, $value);
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionEf02b34395e241fec3ea3d7465aa94a8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
          <div class="{{{footer_col_1_class}}}">
            <div class="footer_contact_widget">
              <h4>{{{ footer_col_1_title }}}</h4>
              {{{ footer_col_1_body }}}
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
                
                $buffer .= $indent . '          <div class="';
                $value = $this->resolveValue($context->find('footer_col_1_class'), $context);
                $buffer .= $value;
                $buffer .= '">
';
                $buffer .= $indent . '            <div class="footer_contact_widget">
';
                $buffer .= $indent . '              <h4>';
                $value = $this->resolveValue($context->find('footer_col_1_title'), $context);
                $buffer .= $value;
                $buffer .= '</h4>
';
                $buffer .= $indent . '              ';
                $value = $this->resolveValue($context->find('footer_col_1_body'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '          </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD0bdab56f18437843ab7c6ea08622791(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
          <div class="{{{footer_col_2_class}}}">
            <div class="footer_company_widget">
              <h4>{{{ footer_col_2_title }}}</h4>
              {{{ footer_col_2_body }}}
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
                
                $buffer .= $indent . '          <div class="';
                $value = $this->resolveValue($context->find('footer_col_2_class'), $context);
                $buffer .= $value;
                $buffer .= '">
';
                $buffer .= $indent . '            <div class="footer_company_widget">
';
                $buffer .= $indent . '              <h4>';
                $value = $this->resolveValue($context->find('footer_col_2_title'), $context);
                $buffer .= $value;
                $buffer .= '</h4>
';
                $buffer .= $indent . '              ';
                $value = $this->resolveValue($context->find('footer_col_2_body'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '          </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6cd8f671f8f884db11cb9b2c36b69ce6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
          <div class="{{{footer_col_3_class}}}">
            <div class="footer_program_widget">
              <h4>{{{ footer_col_3_title }}}</h4>
              {{{ footer_col_3_body }}}
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
                
                $buffer .= $indent . '          <div class="';
                $value = $this->resolveValue($context->find('footer_col_3_class'), $context);
                $buffer .= $value;
                $buffer .= '">
';
                $buffer .= $indent . '            <div class="footer_program_widget">
';
                $buffer .= $indent . '              <h4>';
                $value = $this->resolveValue($context->find('footer_col_3_title'), $context);
                $buffer .= $value;
                $buffer .= '</h4>
';
                $buffer .= $indent . '              ';
                $value = $this->resolveValue($context->find('footer_col_3_body'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '          </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBe5366d7da017347ba336231f8356a57(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
          <div class="{{{footer_col_4_class}}}">
            <div class="footer_support_widget">
              <h4>{{{ footer_col_4_title }}}</h4>
              {{{ footer_col_4_body }}}
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
                
                $buffer .= $indent . '          <div class="';
                $value = $this->resolveValue($context->find('footer_col_4_class'), $context);
                $buffer .= $value;
                $buffer .= '">
';
                $buffer .= $indent . '            <div class="footer_support_widget">
';
                $buffer .= $indent . '              <h4>';
                $value = $this->resolveValue($context->find('footer_col_4_title'), $context);
                $buffer .= $value;
                $buffer .= '</h4>
';
                $buffer .= $indent . '              ';
                $value = $this->resolveValue($context->find('footer_col_4_body'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '          </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA2c9b9ec0206fb0c8c0e6621d705cb32(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
          <div class="{{{footer_col_5_class}}}">
            <div class="footer_apps_widget">
              <h4>{{{ footer_col_5_title }}}</h4>
              {{{ footer_col_5_body }}}
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
                
                $buffer .= $indent . '          <div class="';
                $value = $this->resolveValue($context->find('footer_col_5_class'), $context);
                $buffer .= $value;
                $buffer .= '">
';
                $buffer .= $indent . '            <div class="footer_apps_widget">
';
                $buffer .= $indent . '              <h4>';
                $value = $this->resolveValue($context->find('footer_col_5_title'), $context);
                $buffer .= $value;
                $buffer .= '</h4>
';
                $buffer .= $indent . '              ';
                $value = $this->resolveValue($context->find('footer_col_5_body'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '          </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB12784031803f53105160b71bcba2487(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'col-md-3 col-lg-3 col-xl-3';
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
                
                $buffer .= 'col-md-3 col-lg-3 col-xl-3';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEbcb475427c7d7727fb30e127940463d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' style="{{{logo_styles_footer}}}" ';
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
                
                $buffer .= ' style="';
                $value = $this->resolveValue($context->find('logo_styles_footer'), $context);
                $buffer .= $value;
                $buffer .= '" ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section06b0d7f0150745c41938da77afaa3d43(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' <img class="img-fluid" src="{{{footerlogo1}}}" alt="{{ sitename }}" {{#logo_styles_footer}} style="{{{logo_styles_footer}}}" {{/logo_styles_footer}}>';
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
                
                $buffer .= ' <img class="img-fluid" src="';
                $value = $this->resolveValue($context->find('footerlogo1'), $context);
                $buffer .= $value;
                $buffer .= '" alt="';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" ';
                // 'logo_styles_footer' section
                $value = $context->find('logo_styles_footer');
                $buffer .= $this->sectionEbcb475427c7d7727fb30e127940463d($context, $indent, $value);
                $buffer .= '>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section254d7600dae2d4e2af67ba2cfb1315f4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<span>{{ sitename }}</span>';
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
                
                $buffer .= '<span>';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2b1054e35b2d42fa996b0dbe5e12a533(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
          <div class="col-sm-4 {{#logotype_footer}}col-md-3 col-lg-3 col-xl-3{{/logotype_footer}}{{^logotype_footer}}col-md-1 mr25{{/logotype_footer}} pb15 pt15">
            <div class="logo-widget">
              {{#logo_image_footer}} <img class="img-fluid" src="{{{footerlogo1}}}" alt="{{ sitename }}" {{#logo_styles_footer}} style="{{{logo_styles_footer}}}" {{/logo_styles_footer}}>{{/logo_image_footer}}
              {{#logotype_footer}}<span>{{ sitename }}</span>{{/logotype_footer}}
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
                
                $buffer .= $indent . '          <div class="col-sm-4 ';
                // 'logotype_footer' section
                $value = $context->find('logotype_footer');
                $buffer .= $this->sectionB12784031803f53105160b71bcba2487($context, $indent, $value);
                // 'logotype_footer' inverted section
                $value = $context->find('logotype_footer');
                if (empty($value)) {
                    
                    $buffer .= 'col-md-1 mr25';
                }
                $buffer .= ' pb15 pt15">
';
                $buffer .= $indent . '            <div class="logo-widget">
';
                $buffer .= $indent . '              ';
                // 'logo_image_footer' section
                $value = $context->find('logo_image_footer');
                $buffer .= $this->section06b0d7f0150745c41938da77afaa3d43($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '              ';
                // 'logotype_footer' section
                $value = $context->find('logotype_footer');
                $buffer .= $this->section254d7600dae2d4e2af67ba2cfb1315f4($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '          </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3ab669d3e2fb8a76b6efe596e0d9d66a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
          <div class="col-sm-8 col-md-5 col-lg-6 col-xl-6 text-center pb25 pt25">
            <div class="footer_menu_widget">
              {{{footer_menu}}}
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
                
                $buffer .= $indent . '          <div class="col-sm-8 col-md-5 col-lg-6 col-xl-6 text-center pb25 pt25">
';
                $buffer .= $indent . '            <div class="footer_menu_widget">
';
                $buffer .= $indent . '              ';
                $value = $this->resolveValue($context->find('footer_menu'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '          </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section998c8d78bdcea878de51c5c476c4766c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <section class="footer_bottom_area pt25 pb25">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 offset-lg-3">
            <div class="copyright-widget text-center">
              <p>{{{ cocoon_copyright }}}</p>
              <div class="tool_usertours-resettourcontainer"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
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
                
                $buffer .= $indent . '    <section class="footer_bottom_area pt25 pb25">
';
                $buffer .= $indent . '      <div class="container">
';
                $buffer .= $indent . '        <div class="row">
';
                $buffer .= $indent . '          <div class="col-lg-6 offset-lg-3">
';
                $buffer .= $indent . '            <div class="copyright-widget text-center">
';
                $buffer .= $indent . '              <p>';
                $value = $this->resolveValue($context->find('cocoon_copyright'), $context);
                $buffer .= $value;
                $buffer .= '</p>
';
                $buffer .= $indent . '              <div class="tool_usertours-resettourcontainer"></div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '          </div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '      </div>
';
                $buffer .= $indent . '    </section>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
