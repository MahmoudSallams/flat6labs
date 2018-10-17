<?php

/* /var/www/html/flat6labs/themes/flat6labs/partials/header1.htm */
class __TwigTemplate_b525441f2ab4d8cc30616bfd785f7a668147a92d16fefead993000534d48ec4c extends Twig_Template
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
        echo "<div class=\"container\">
    <div class=\"header-nav-items\">
        <div class=\"header-nav-items-logo\">
            <img src=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo.png");
        echo "\" />
        </div>
        <div class=\"header-nav-items-nav\">
            ";
        // line 7
        if (twig_get_attribute($this->env, $this->source, ($context["staticMenu"] ?? null), "menuItems", array())) {
            // line 8
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["staticMenu"] ?? null), "menuItems", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 9
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "url", array()), "html", null, true);
                echo "\" class=\"";
                echo ((twig_get_attribute($this->env, $this->source, $context["item"], "isActive", array())) ? ("active") : (""));
                echo "\" ><span>";
                echo call_user_func_array($this->env->getFilter('_')->getCallable(), array(twig_get_attribute($this->env, $this->source, $context["item"], "title", array())));
                echo "</span></a>    
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "            ";
        }
        // line 12
        echo "            ";
        if ((($context["activeLocale"] ?? null) == "ar")) {
            // line 13
            echo "                <a href=\"#\" data-request=\"onSwitchLocale\" class='lang-btn' data-request-data=\"locale: 'en'\">English</a>
            ";
        } else {
            // line 15
            echo "                <a href=\"#\" data-request=\"onSwitchLocale\" class=\"lang-btn\" data-request-data=\"locale: 'ar'\">عربى</a>
            ";
        }
        // line 16
        echo "    
        </div>
        <div class=\"header-nav-items-icon\">
            <a href=\"#\" ><img src=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/inner-e.png");
        echo "\" /></a>
        </div>
        <div onclick=\"\$('.header-nav-items-nav').slideToggle();\" class=\"header-nav-items-button\">
            <a href=\"#\" ><i class=\"fa fa-bars\"></i></a>
        </div>
    </div>
</div>
<!-- <div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"nav-inner col-xs-12\">
        
            <div class=\"nav-contain-links col-xs-2\">
                <a href=\"#\" ><img src=\"";
        // line 31
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/inner-e.png");
        echo "\" /></a>
            </div>
            <div class=\"nav-contain-links col-xs-8\">
                ";
        // line 34
        if (twig_get_attribute($this->env, $this->source, ($context["staticMenu"] ?? null), "menuItems", array())) {
            // line 35
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["staticMenu"] ?? null), "menuItems", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 36
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "url", array()), "html", null, true);
                echo "\" ><span>";
                echo call_user_func_array($this->env->getFilter('_')->getCallable(), array(twig_get_attribute($this->env, $this->source, $context["item"], "title", array())));
                echo "</span></a>    
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "                ";
        }
        // line 39
        echo "            
                 <a href=\"#\" ><span>";
        // line 40
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("الداعمون"));
        echo "</span></a>
                    <a href=\"#\" ><span>";
        // line 41
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("مراحل البرنامج"));
        echo "</span></a>
                    <a href=\"#\" ><span>";
        // line 42
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("تقدم للمسرعة"));
        echo "</span></a>
                    <a href=\"#\" ><span>";
        // line 43
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("أخر الاخبار"));
        echo "</span></a>
               
                
                ";
        // line 46
        echo call_user_func_array($this->env->getFunction('form_open')->getCallable(), array("open"));
        echo "
                    <select name=\"locale\" data-request=\"onSwitchLocale\" class=\"form-control\">
                        ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["locales"] ?? null));
        foreach ($context['_seq'] as $context["code"] => $context["name"]) {
            // line 49
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $context["code"], "html", null, true);
            echo "\" ";
            echo ((($context["code"] == ($context["activeLocale"] ?? null))) ? ("selected") : (""));
            echo ">";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['code'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "                    </select>
                ";
        // line 52
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), array("close"));
        echo "
            
                  ";
        // line 54
        if ((($context["activeLocale"] ?? null) == "ar")) {
            // line 55
            echo "                    <a href=\"#\" data-request=\"onSwitchLocale\" class='lang-btn' data-request-data=\"locale: 'en'\">English</a>
                ";
        } else {
            // line 57
            echo "                    <a href=\"#\" data-request=\"onSwitchLocale\" class=\"lang-btn\" data-request-data=\"locale: 'ar'\">عربى</a>
                ";
        }
        // line 59
        echo "            </div>nav-contain
            <div class=\"nav-logo col-xs-2\">
                <div class=\"inner-logo-contain\">
                    <img src=\"";
        // line 62
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo.png");
        echo "\" />
                </div>logo-contain
            </div>nav-logo
        </div>nav-inner
    </div>row
</div>container -->";
    }

    public function getTemplateName()
    {
        return "/var/www/html/flat6labs/themes/flat6labs/partials/header1.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 62,  176 => 59,  172 => 57,  168 => 55,  166 => 54,  161 => 52,  158 => 51,  145 => 49,  141 => 48,  136 => 46,  130 => 43,  126 => 42,  122 => 41,  118 => 40,  115 => 39,  112 => 38,  101 => 36,  96 => 35,  94 => 34,  88 => 31,  73 => 19,  68 => 16,  64 => 15,  60 => 13,  57 => 12,  54 => 11,  41 => 9,  36 => 8,  34 => 7,  28 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container\">
    <div class=\"header-nav-items\">
        <div class=\"header-nav-items-logo\">
            <img src=\"{{'assets/images/logo.png'|theme }}\" />
        </div>
        <div class=\"header-nav-items-nav\">
            {% if staticMenu.menuItems %}
                {% for item in staticMenu.menuItems %}
                    <a href=\"{{item.url}}\" class=\"{{item.isActive ? 'active':''}}\" ><span>{{item.title | _}}</span></a>    
                {% endfor %}
            {% endif %}
            {% if activeLocale  == 'ar' %}
                <a href=\"#\" data-request=\"onSwitchLocale\" class='lang-btn' data-request-data=\"locale: 'en'\">English</a>
            {% else %}
                <a href=\"#\" data-request=\"onSwitchLocale\" class=\"lang-btn\" data-request-data=\"locale: 'ar'\">عربى</a>
            {% endif %}    
        </div>
        <div class=\"header-nav-items-icon\">
            <a href=\"#\" ><img src=\"{{'assets/images/inner-e.png'|theme }}\" /></a>
        </div>
        <div onclick=\"\$('.header-nav-items-nav').slideToggle();\" class=\"header-nav-items-button\">
            <a href=\"#\" ><i class=\"fa fa-bars\"></i></a>
        </div>
    </div>
</div>
<!-- <div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"nav-inner col-xs-12\">
        
            <div class=\"nav-contain-links col-xs-2\">
                <a href=\"#\" ><img src=\"{{'assets/images/inner-e.png'|theme }}\" /></a>
            </div>
            <div class=\"nav-contain-links col-xs-8\">
                {% if staticMenu.menuItems %}
                    {% for item in staticMenu.menuItems %}
                        <a href=\"{{item.url}}\" ><span>{{item.title | _}}</span></a>    
                    {% endfor %}
                {% endif %}
            
                 <a href=\"#\" ><span>{{\"الداعمون\" | _}}</span></a>
                    <a href=\"#\" ><span>{{\"مراحل البرنامج\" | _}}</span></a>
                    <a href=\"#\" ><span>{{\"تقدم للمسرعة\" | _}}</span></a>
                    <a href=\"#\" ><span>{{\"أخر الاخبار\"| _}}</span></a>
               
                
                {{ form_open() }}
                    <select name=\"locale\" data-request=\"onSwitchLocale\" class=\"form-control\">
                        {% for code, name in locales %}
                            <option value=\"{{ code }}\" {{ code == activeLocale ? 'selected' }}>{{ name }}</option>
                        {% endfor %}
                    </select>
                {{ form_close() }}
            
                  {% if activeLocale  == 'ar' %}
                    <a href=\"#\" data-request=\"onSwitchLocale\" class='lang-btn' data-request-data=\"locale: 'en'\">English</a>
                {% else %}
                    <a href=\"#\" data-request=\"onSwitchLocale\" class=\"lang-btn\" data-request-data=\"locale: 'ar'\">عربى</a>
                {% endif %}
            </div>nav-contain
            <div class=\"nav-logo col-xs-2\">
                <div class=\"inner-logo-contain\">
                    <img src=\"{{'assets/images/logo.png'|theme }}\" />
                </div>logo-contain
            </div>nav-logo
        </div>nav-inner
    </div>row
</div>container -->", "/var/www/html/flat6labs/themes/flat6labs/partials/header1.htm", "");
    }
}
