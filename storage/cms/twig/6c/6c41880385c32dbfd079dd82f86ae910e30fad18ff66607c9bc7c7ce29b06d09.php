<?php

/* /var/www/html/flat6labs/themes/flat6labs/pages/pr.htm */
class __TwigTemplate_76e6b3f95ca5a01cdb01da1a686fdfafdd156b3c09584e4ce395782a44dcfc09 extends Twig_Template
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
        $context["project"] = twig_get_attribute($this->env, $this->source, ($context["ProjectItem"] ?? null), "project", array());
        // line 2
        echo "
<div class=\"container\">
        <div class=\"post-content\">
               <div class=\"col-md-12-flex\">
                  <h1>";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "title", array()), "html", null, true);
        echo "</h1>
                  <br>
                  <div  class=\"project-list-item-box-red\" style=\" border-bottom: 1px solid #b40017;\"></div>
                    <br>
                  <p>";
        // line 10
        echo twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "description", array());
        echo "</p>
               </div>
        </div>
</div>
<br>
<br>
<br>
<br><br>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/flat6labs/themes/flat6labs/pages/pr.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 10,  31 => 6,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set project = ProjectItem.project %}

<div class=\"container\">
        <div class=\"post-content\">
               <div class=\"col-md-12-flex\">
                  <h1>{{project.title}}</h1>
                  <br>
                  <div  class=\"project-list-item-box-red\" style=\" border-bottom: 1px solid #b40017;\"></div>
                    <br>
                  <p>{{project.description | raw}}</p>
               </div>
        </div>
</div>
<br>
<br>
<br>
<br><br>", "/var/www/html/flat6labs/themes/flat6labs/pages/pr.htm", "");
    }
}
