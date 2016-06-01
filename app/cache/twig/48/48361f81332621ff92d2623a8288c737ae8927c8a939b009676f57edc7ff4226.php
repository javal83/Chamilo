<?php

/* default/layout/no_layout.tpl */
class __TwigTemplate_ecea38bb80e042700070b9ff5ed7150891e5d17a4b82c7c7d10cc96a773d1ba3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'name' => array($this, 'block_name'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!--[if lt IE 7]> <html lang=\"";
        // line 2
        echo (isset($context["document_language"]) ? $context["document_language"] : null);
        echo "\" class=\"no-js lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>    <html lang=\"";
        // line 3
        echo (isset($context["document_language"]) ? $context["document_language"] : null);
        echo "\" class=\"no-js lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>    <html lang=\"";
        // line 4
        echo (isset($context["document_language"]) ? $context["document_language"] : null);
        echo "\" class=\"no-js lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!--><html lang=\"";
        // line 5
        echo (isset($context["document_language"]) ? $context["document_language"] : null);
        echo "\" class=\"no-js\"> <!--<![endif]-->
<head>
";
        // line 7
        $this->loadTemplate(((isset($context["template"]) ? $context["template"] : null) . "/layout/head.tpl"), "default/layout/no_layout.tpl", 7)->display($context);
        // line 8
        echo "</head>
<body dir=\"";
        // line 9
        echo (isset($context["text_direction"]) ? $context["text_direction"] : null);
        echo "\" class=\"";
        echo (isset($context["section_name"]) ? $context["section_name"] : null);
        echo "\">
";
        // line 10
        $this->displayBlock('name', $context, $blocks);
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 15
        echo "</body>
</html>";
    }

    // line 10
    public function block_name($context, array $blocks = array())
    {
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/layout/no_layout.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  66 => 12,  61 => 10,  56 => 15,  54 => 12,  52 => 10,  46 => 9,  43 => 8,  41 => 7,  36 => 5,  32 => 4,  28 => 3,  24 => 2,  21 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <!--[if lt IE 7]> <html lang="{{document_language}}" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->*/
/* <!--[if IE 7]>    <html lang="{{document_language}}" class="no-js lt-ie9 lt-ie8"> <![endif]-->*/
/* <!--[if IE 8]>    <html lang="{{document_language}}" class="no-js lt-ie9"> <![endif]-->*/
/* <!--[if gt IE 8]><!--><html lang="{{document_language}}" class="no-js"> <!--<![endif]-->*/
/* <head>*/
/* {% include template ~ "/layout/head.tpl" %}*/
/* </head>*/
/* <body dir="{{text_direction}}" class="{{section_name}}">*/
/* {% block name%}*/
/* {% endblock %}*/
/* {% block body %}*/
/*     {{ content }}*/
/* {% endblock %}*/
/* </body>*/
/* </html>*/
