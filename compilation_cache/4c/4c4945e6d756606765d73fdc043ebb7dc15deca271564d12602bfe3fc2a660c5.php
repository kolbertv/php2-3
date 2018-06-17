<?php

/* prim1.php */
class __TwigTemplate_226dd9dc563c59618e3797d163481c5dab83342186340ce8e943dd00ceb2ed87 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<h2>Шаблон пример 1</h2>

<p>username: ";
        // line 3
        echo twig_escape_filter($this->env, ($context["username"] ?? null), "html", null, true);
        echo "</p>
<p>password: ";
        // line 4
        echo twig_escape_filter($this->env, ($context["password"] ?? null), "html", null, true);
        echo "</p>

";
    }

    public function getTemplateName()
    {
        return "prim1.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  27 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "prim1.php", "D:\\GeekBrains\\Git\\php2-3\\templates\\prim1.php");
    }
}
