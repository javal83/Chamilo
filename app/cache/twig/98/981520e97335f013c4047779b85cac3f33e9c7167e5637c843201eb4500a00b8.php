<?php

/* default/javascript/editor/ckeditor/elfinder.tpl */
class __TwigTemplate_d15278ac9dbbd84fe9c1b593e1bb4c37a8f583dc9ca58c953c42734640f5e814 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default/layout/no_layout.tpl", "default/javascript/editor/ckeditor/elfinder.tpl", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default/layout/no_layout.tpl";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->loadTemplate("default/javascript/editor/elfinder_standalone.tpl", "default/javascript/editor/ckeditor/elfinder.tpl", 4)->display($context);
    }

    public function getTemplateName()
    {
        return "default/javascript/editor/ckeditor/elfinder.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "default/layout/no_layout.tpl" %}*/
/* */
/* {% block body %}*/
/*     {% include 'default/javascript/editor/elfinder_standalone.tpl' %}*/
/* {% endblock %}*/
/* */
