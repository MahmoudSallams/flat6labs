<?php

/* /var/www/html/flat6labs/plugins/flat6labs/speakers/components/speakerslist/default.htm */
class __TwigTemplate_97150c7031d360e7cd6c7aa23c44c2611fd3f3a0a2e87d35a3b73c117e3fcc23 extends Twig_Template
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
        $context["speakers"] = twig_get_attribute($this->env, $this->source, ($context["SpeakersList"] ?? null), "speakers", array());
        // line 3
        echo "<div class=\"bg-gray\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12 col-md-3\">
                ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["speakers"]);
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["speakers"]) {
            // line 8
            echo "                    <div class=\"card\" >
                      <img style=\"border-radius:100%;\" class=\"card-img-top\" src=\"";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["speakers"], "avatar", array()), "path", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["speakers"], "name", array()), "html", null, true);
            echo "\">
                      <div class=\"card-body\">
                        <h5 class=\"card-title align-center\">";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["speakers"], "name", array()), "html", null, true);
            echo "</h5>
                        <p class=\"card-text\">";
            // line 12
            echo call_user_func_array($this->env->getFunction('str_limit')->getCallable(), array("limit", twig_get_attribute($this->env, $this->source, $context["speakers"], "description", array()), 100));
            echo "</p>
                        <a href=\"";
            // line 13
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("pr", array("id" => twig_get_attribute($this->env, $this->source, $context["speakers"], "id", array())));
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['speakers'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/flat6labs/plugins/flat6labs/speakers/components/speakerslist/default.htm";
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
{% set speakers = SpeakersList.speakers %}
<div class=\"bg-gray\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12 col-md-3\">
                {% for speakers in speakers %}
                    <div class=\"card\" >
                      <img style=\"border-radius:100%;\" class=\"card-img-top\" src=\"{{speakers.avatar.path}}\" alt=\"{{speakers.name}}\">
                      <div class=\"card-body\">
                        <h5 class=\"card-title align-center\">{{speakers.name}}</h5>
                        <p class=\"card-text\">{{ str_limit(speakers.description, 100) }}</p>
                        <a href=\"{{\"pr\"| page({'id':speakers.id})}}\" class=\"\">{{'More Info' | _}}</a>
                      </div>
                    </div>
                {% else %}
                    
                {% endfor %}
            </div>
        </div>
    </div>
</div>", "/var/www/html/flat6labs/plugins/flat6labs/speakers/components/speakerslist/default.htm", "");
    }
}
