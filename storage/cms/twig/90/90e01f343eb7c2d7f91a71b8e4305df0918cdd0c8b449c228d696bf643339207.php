<?php

/* /Users/dev01/Desktop/apps/october-B/themes/demo/partials/explain/plugins.htm */
class __TwigTemplate_d11aa771e5313c3fc6e0c35e26280aba59bddf9920bf70706bdc14b0de2a88e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '__internal_405a2ce3adbc75632a77082d9405edfc0e7ab65a2c49a1e2b3297c0d23ea1f2f' => array($this, 'block___internal_405a2ce3adbc75632a77082d9405edfc0e7ab65a2c49a1e2b3297c0d23ea1f2f'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<hr />

<p class=\"lead\">
    <i class=\"icon-copy\"></i> &nbsp; The HTML markup for this example:
</p>
<pre>
";
        // line 7
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_405a2ce3adbc75632a77082d9405edfc0e7ab65a2c49a1e2b3297c0d23ea1f2f", $context, $blocks));
        // line 9
        echo "</pre>

<hr />

<p class=\"lead\">
    <i class=\"icon-question\"></i> &nbsp; Wait, only one line is needed?
</p>
<p><em>Yes!</em> unlike the <a href=\"";
        // line 16
        echo $this->env->getExtension('CMS')->pageFilter("ajax");
        echo "\">AJAX example</a>, components are simple building blocks that can be used with a small amount of code.</p>
<p>The <code>demoTodo</code> component used here is provided by the plugin called <strong>October\\Demo</strong>, you can find it in the <code>plugins/october/demo</code> folder.</p>";
    }

    // line 7
    public function block___internal_405a2ce3adbc75632a77082d9405edfc0e7ab65a2c49a1e2b3297c0d23ea1f2f($context, array $blocks = array())
    {
        // line 8
        echo "{% component 'demoTodo' %}";
        echo "
";
    }

    public function getTemplateName()
    {
        return "/Users/dev01/Desktop/apps/october-B/themes/demo/partials/explain/plugins.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 8,  45 => 7,  39 => 16,  30 => 9,  28 => 7,  20 => 1,);
    }
}
/* <hr />*/
/* */
/* <p class="lead">*/
/*     <i class="icon-copy"></i> &nbsp; The HTML markup for this example:*/
/* </p>*/
/* <pre>*/
/* {% filter escape %}*/
/* {{ "{% component 'demoTodo' %}" }}*/
/* {% endfilter %}</pre>*/
/* */
/* <hr />*/
/* */
/* <p class="lead">*/
/*     <i class="icon-question"></i> &nbsp; Wait, only one line is needed?*/
/* </p>*/
/* <p><em>Yes!</em> unlike the <a href="{{ 'ajax'|page }}">AJAX example</a>, components are simple building blocks that can be used with a small amount of code.</p>*/
/* <p>The <code>demoTodo</code> component used here is provided by the plugin called <strong>October\Demo</strong>, you can find it in the <code>plugins/october/demo</code> folder.</p>*/
