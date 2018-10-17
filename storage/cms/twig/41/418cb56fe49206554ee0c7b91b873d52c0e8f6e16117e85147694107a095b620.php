<?php

/* /var/www/html/flat6labs/themes/flat6labs/pages/singleNews.htm */
class __TwigTemplate_3e3eeaa2bc68129b5ec881c33341f8d7d9e5cafeedf9b5f8f043c363e73a2bf3 extends Twig_Template
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
        $context["post"] = twig_get_attribute($this->env, $this->source, ($context["newsPost"] ?? null), "post", array());
        // line 2
        echo "<div class=\"container\">
    <div class=\"post\">
        <div class=\"post-content\">
               <div class=\"col-md-12-flex\">
                    ";
        // line 6
        if (twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "image", array())) {
            // line 7
            echo "                        <img src=\"";
            echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "image", array()));
            echo "\" class=\"img-responsive\">
                    ";
        }
        // line 9
        echo "                </div>
            <h2 class=\"post-title\">";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", array()), "html", null, true);
        echo "</h2>
               <span> ";
        // line 11
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "published_at", array()), "Y-m-d"), "html", null, true);
        echo "</span>
            ";
        // line 12
        if (twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "introductory", array())) {
            echo "<div class=\"post-introductory\">";
            echo twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "introductory", array());
            echo "</div>";
        }
        // line 13
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "content", array())) {
            echo "<div class=\"post-content\">";
            echo twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "content", array());
            echo "</div>";
        }
        // line 14
        echo "    

        </div>
    </div>
</div";
    }

    public function getTemplateName()
    {
        return "/var/www/html/flat6labs/themes/flat6labs/pages/singleNews.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 14,  56 => 13,  50 => 12,  46 => 11,  42 => 10,  39 => 9,  33 => 7,  31 => 6,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set post = newsPost.post %}
<div class=\"container\">
    <div class=\"post\">
        <div class=\"post-content\">
               <div class=\"col-md-12-flex\">
                    {% if post.image %}
                        <img src=\"{{ post.image|media }}\" class=\"img-responsive\">
                    {% endif %}
                </div>
            <h2 class=\"post-title\">{{ post.title }}</h2>
               <span> {{ post.published_at|date('Y-m-d') }}</span>
            {% if post.introductory %}<div class=\"post-introductory\">{{ post.introductory|raw }}</div>{% endif %}
            {% if post.content %}<div class=\"post-content\">{{ post.content|raw }}</div>{% endif %}
    

        </div>
    </div>
</div", "/var/www/html/flat6labs/themes/flat6labs/pages/singleNews.htm", "");
    }
}
