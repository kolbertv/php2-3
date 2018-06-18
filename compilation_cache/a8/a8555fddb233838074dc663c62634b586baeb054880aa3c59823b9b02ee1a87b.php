<?php

/* footer.html */
class __TwigTemplate_91e02105064d4bc82c7f53fd867a7bb24f3e78bcf92a4a4861a6e9bb897af7fa extends Twig_Template
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
        echo "</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "footer.html";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "footer.html", "C:\\geekBrains\\git\\php2-3\\templates\\footer.html");
    }
}
