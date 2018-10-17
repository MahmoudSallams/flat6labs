<?php

/* /var/www/html/flat6labs/themes/flat6labs/partials/Footer.htm */
class __TwigTemplate_c39023c79a83b200789a511d2839429f9034c3f3a6123bcde8071fa63f51994f extends Twig_Template
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
        echo "<div class=\"news-subscription\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12 text-right\">
                <h2 class=\"h2\">   ";
        // line 5
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("إشترك فى النشرة البريدية  "));
        echo " 
                </h2>
            </div>
            <div class=\"col-md-10 col-md-offset-2\">
                <form data-request=\"onSubscription\" data-request-success=\"alert('";
        // line 9
        echo twig_escape_filter($this->env, ($context["text_messages"] ?? null), "html", null, true);
        echo "')\">
                    <input type=\"hidden\" name=\"name\" value=\"User\">
                    ";
        // line 11
        if ((($context["category_count"] ?? null) == 0)) {
            // line 12
            echo "                        <input type=\"hidden\" name=\"category[]\" value=\"0\">
                        
                    ";
        } else {
            // line 15
            echo "                        <label>";
            echo twig_escape_filter($this->env, ($context["text_category"] ?? null), "html", null, true);
            echo "</label>
                        ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["category_list"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 17
                echo "                            <div class=\"checkbox\">
                                <label>
                                    <input type=\"checkbox\" name=\"category[]\" value=\"";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", array()), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", array()), "html", null, true);
                echo "
                                </label>
                            </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "                    ";
        }
        // line 24
        echo "                    <div class=\"subscribe-box\">
                        <input name=\"email\" type=\"email\" class=\"form-control\" id=\"subscribersEmail\"  placeholder=\" ";
        // line 25
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("ادخل بريدك الالكتروني "));
        echo " \" required>
                        <span class=\"\">
                            <button class=\"btn btn-default\" type=\"submit\"> ";
        // line 27
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("اشترك الان  "));
        echo " <i class=\"fas fa-angle-left\"></i></button>
                       </span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<footer class=\"footer\">
        <div class=\"container\">
            <div class=\"row text-center\">
                <div class=\"col-xs-4 col-md-5 text-right\">  
                    <a href=\"https://www.facebook.com/startegyptcom\" class=\"facebook\" target=\"_blank\"> <span><i class=\"fab fa-facebook-f\"></i> facebook </span></a>
                </div>
                <div class=\"col-xs-4 col-md-2\">  
                  <a href=\"https://twitter.com/startegyptcom\" class=\"twitter\" target=\"_blank\"><span> <i class=\"fab fa-twitter\"></i> twitter  </span></a>
                </div>
                <div class=\"col-xs-4 col-md-4 text-left\">  
                    <a href=\"https://www.instagram.com/startegypt/\" class=\"instagram\" target=\"_blank\"><span> <i class=\"fab fa-instagram\"></i> instagram    </span></a>
                </div>    

            </div>
        </div>
</footer>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/flat6labs/themes/flat6labs/partials/Footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 27,  79 => 25,  76 => 24,  73 => 23,  61 => 19,  57 => 17,  53 => 16,  48 => 15,  43 => 12,  41 => 11,  36 => 9,  29 => 5,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"news-subscription\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12 text-right\">
                <h2 class=\"h2\">   {{\"إشترك فى النشرة البريدية  \" | _}} 
                </h2>
            </div>
            <div class=\"col-md-10 col-md-offset-2\">
                <form data-request=\"onSubscription\" data-request-success=\"alert('{{ text_messages }}')\">
                    <input type=\"hidden\" name=\"name\" value=\"User\">
                    {% if category_count == 0 %}
                        <input type=\"hidden\" name=\"category[]\" value=\"0\">
                        
                    {% else %}
                        <label>{{ text_category }}</label>
                        {% for category in category_list %}
                            <div class=\"checkbox\">
                                <label>
                                    <input type=\"checkbox\" name=\"category[]\" value=\"{{ category.id }}\"> {{ category.name }}
                                </label>
                            </div>
                            {% endfor %}
                    {% endif %}
                    <div class=\"subscribe-box\">
                        <input name=\"email\" type=\"email\" class=\"form-control\" id=\"subscribersEmail\"  placeholder=\" {{\"ادخل بريدك الالكتروني \" | _}} \" required>
                        <span class=\"\">
                            <button class=\"btn btn-default\" type=\"submit\"> {{\"اشترك الان  \" | _}} <i class=\"fas fa-angle-left\"></i></button>
                       </span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<footer class=\"footer\">
        <div class=\"container\">
            <div class=\"row text-center\">
                <div class=\"col-xs-4 col-md-5 text-right\">  
                    <a href=\"https://www.facebook.com/startegyptcom\" class=\"facebook\" target=\"_blank\"> <span><i class=\"fab fa-facebook-f\"></i> facebook </span></a>
                </div>
                <div class=\"col-xs-4 col-md-2\">  
                  <a href=\"https://twitter.com/startegyptcom\" class=\"twitter\" target=\"_blank\"><span> <i class=\"fab fa-twitter\"></i> twitter  </span></a>
                </div>
                <div class=\"col-xs-4 col-md-4 text-left\">  
                    <a href=\"https://www.instagram.com/startegypt/\" class=\"instagram\" target=\"_blank\"><span> <i class=\"fab fa-instagram\"></i> instagram    </span></a>
                </div>    

            </div>
        </div>
</footer>", "/var/www/html/flat6labs/themes/flat6labs/partials/Footer.htm", "");
    }
}
