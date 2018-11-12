<?php

/* /var/www/html/flat6labs/plugins/flat6labs/coaches/components/coacheslist/default.htm */
class __TwigTemplate_e69a8eb9141413b5c16e6b5146d803af167e273c277d05579b6d83c356248daf extends Twig_Template
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
        echo "
";
        // line 2
        $context["coaches"] = twig_get_attribute($this->env, $this->source, ($context["CoachesList"] ?? null), "coaches", array());
        // line 3
        echo "<div class=\"bg-gray\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12 col-md-3\">
                ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["coaches"]);
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["coaches"]) {
            // line 8
            echo "                    <div class=\"card\" >
                      <img style=\"border-radius:100%;\" class=\"card-img-top\" src=\"";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["coaches"], "avatar", array()), "path", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coaches"], "name", array()), "html", null, true);
            echo "\">
                      <div class=\"card-body\">
                        <h5 class=\"card-title align-center\">";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coaches"], "name", array()), "html", null, true);
            echo "</h5>
                        <p class=\"card-text\">";
            // line 12
            echo call_user_func_array($this->env->getFunction('str_limit')->getCallable(), array("limit", twig_get_attribute($this->env, $this->source, $context["coaches"], "description", array()), 100));
            echo "</p>
                        <a href=\"";
            // line 13
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("pr", array("id" => twig_get_attribute($this->env, $this->source, $context["coaches"], "id", array())));
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coaches'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/flat6labs/plugins/flat6labs/coaches/components/coacheslist/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 19,  68 => 17,  57 => 13,  53 => 12,  49 => 11,  42 => 9,  39 => 8,  34 => 7,  28 => 3,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% set coaches = CoachesList.coaches %}
<div class=\"bg-gray\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12 col-md-3\">
                {% for coaches in coaches %}
                    <div class=\"card\" >
                      <img style=\"border-radius:100%;\" class=\"card-img-top\" src=\"{{coaches.avatar.path}}\" alt=\"{{coaches.name}}\">
                      <div class=\"card-body\">
                        <h5 class=\"card-title align-center\">{{coaches.name}}</h5>
                        <p class=\"card-text\">{{ str_limit(coaches.description, 100) }}</p>
                        <a href=\"{{\"pr\"| page({'id':coaches.id})}}\" class=\"\">{{'More Info' | _}}</a>
                      </div>
                    </div>
                {% else %}
                    
                {% endfor %}
            </div>
        </div>
    </div>
</div>
", "/var/www/html/flat6labs/plugins/flat6labs/coaches/components/coacheslist/default.htm", "");
    }
}
