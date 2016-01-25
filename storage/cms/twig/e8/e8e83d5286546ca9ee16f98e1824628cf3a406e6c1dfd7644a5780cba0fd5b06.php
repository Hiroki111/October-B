<?php

/* /Users/dev01/Desktop/apps/october-B/themes/demo/layouts/default.htm */
class __TwigTemplate_fd85438e043b0071ae1894a6eadf8bb50094b7d74404319174be19a944413ac2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <title>Hiro.october-B - ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
    <meta name=\"description\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "meta_description", array()), "html", null, true);
        echo "\">
    <meta name=\"title\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "meta_title", array()), "html", null, true);
        echo "\">
    <meta name=\"author\" content=\"OctoberCMS\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"generator\" content=\"OctoberCMS\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 11
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/october.png");
        echo "\" />
    ";
        // line 12
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 13
        echo "    <link href=\"";
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/css/theme.css"));
        // line 15
        echo "\" rel=\"stylesheet\">
</head>
<body>
    <header>
        <h1>Header</h1>
    </header>
    <div id = \"divA\">
        <h2>Div A</h2>
        <ul>
            <li>item 1</li>
            <li>item 2</li>
            <li>item 3</li>
        </ul>
    </div>
    <div id = \"divB\">
        <h2>Div B</h2>
        <ul>
            <li>item 1</li>
            <li>item 2</li>
            <li>item 3</li>
        </ul>
    </div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/Users/dev01/Desktop/apps/october-B/themes/demo/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 15,  47 => 13,  44 => 12,  40 => 11,  33 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <title>Hiro.october-B - {{ this.page.title }}</title>*/
/*     <meta name="description" content="{{ this.page.meta_description }}">*/
/*     <meta name="title" content="{{ this.page.meta_title }}">*/
/*     <meta name="author" content="OctoberCMS">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*     <meta name="generator" content="OctoberCMS">*/
/*     <link rel="icon" type="image/png" href="{{ 'assets/images/october.png'|theme }}" />*/
/*     {% styles %}*/
/*     <link href="{{ [*/
/*     'assets/css/theme.css'*/
/*     ]|theme }}" rel="stylesheet">*/
/* </head>*/
/* <body>*/
/*     <header>*/
/*         <h1>Header</h1>*/
/*     </header>*/
/*     <div id = "divA">*/
/*         <h2>Div A</h2>*/
/*         <ul>*/
/*             <li>item 1</li>*/
/*             <li>item 2</li>*/
/*             <li>item 3</li>*/
/*         </ul>*/
/*     </div>*/
/*     <div id = "divB">*/
/*         <h2>Div B</h2>*/
/*         <ul>*/
/*             <li>item 1</li>*/
/*             <li>item 2</li>*/
/*             <li>item 3</li>*/
/*         </ul>*/
/*     </div>*/
/* </body>*/
/* </html>*/
