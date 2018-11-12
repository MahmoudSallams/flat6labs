<?php

/* /var/www/html/flat6labs/plugins/flat6labs/startup/components/startuplist/default.htm */
class __TwigTemplate_c41f971bdb36ab83e2139e16c98b930c60ab0984d77b1835965b8ce373be5a1e extends Twig_Template
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
        $context["startup"] = twig_get_attribute($this->env, $this->source, ($context["StartupList"] ?? null), "startup", array());
        // line 2
        echo "<div class=\"bg-gray\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12 col-md-3\">
                ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["startup"]);
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["startup"]) {
            // line 7
            echo "                    <div class=\"card\" >
                      <img class=\"card-img-top\" src=\"";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["startup"], "avatar", array()), "path", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["startup"], "name", array()), "html", null, true);
            echo "\">
                      <div class=\"card-body\">
                        <h5 class=\"card-title\">";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["startup"], "name", array()), "html", null, true);
            echo "</h5>
                         <h4 class=\"card-title\">Industry: ";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["startup"], "industry", array()), "html", null, true);
            echo "</h4>
                        <p class=\"card-text\">";
            // line 12
            echo call_user_func_array($this->env->getFunction('str_limit')->getCallable(), array("limit", twig_get_attribute($this->env, $this->source, $context["startup"], "descripion", array()), 100));
            echo "</p>
                        <a href=\"";
            // line 13
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("pr", array("id" => twig_get_attribute($this->env, $this->source, $context["startup"], "id", array())));
            echo "\" class=\"\">";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("More Info"));
            echo "</a>
                      </div>
                    </div>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 17
            echo "                    
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['startup'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/flat6labs/plugins/flat6labs/startup/components/startuplist/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 19,  69 => 17,  58 => 13,  54 => 12,  50 => 11,  46 => 10,  39 => 8,  36 => 7,  31 => 6,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set startup = StartupList.startup %}
<div class=\"bg-gray\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12 col-md-3\">
                {% for startup in startup %}
                    <div class=\"card\" >
                      <img class=\"card-img-top\" src=\"{{startup.avatar.path}}\" alt=\"{{startup.name}}\">
                      <div class=\"card-body\">
                        <h5 class=\"card-title\">{{startup.name}}</h5>
                         <h4 class=\"card-title\">Industry: {{startup.industry}}</h4>
                        <p class=\"card-text\">{{ str_limit(startup.descripion, 100) }}</p>
                        <a href=\"{{\"pr\"| page({'id':startup.id})}}\" class=\"\">{{'More Info' | _}}</a>
                      </div>
                    </div>
                {% else %}
                    
                {% endfor %}
            </div>
        </div>
    </div>
</div>", "/var/www/html/flat6labs/plugins/flat6labs/startup/components/startuplist/default.htm", "");
    }
}
