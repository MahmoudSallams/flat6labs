<?php

/* /var/www/html/flat6labs/themes/flat6labs/layouts/inner.htm */
class __TwigTemplate_493000f5f4886a6ed7a9da2a10e6d9b253d8eb37b4e1d160b4fa456aac93cb31 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html ";
        // line 2
        if ((($context["activeLocale"] ?? null) == "ar")) {
            echo " dir=\"rtl\" ";
        }
        echo "  lang=\"ar\" class=\"no-js\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    
    <meta name=\"description\" content=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["seo_keyword"] ?? null), "html", null, true);
        echo "\">
    <meta name=\"keywords\" content=\"";
        // line 10
        echo twig_escape_filter($this->env, ($context["seo_description"] ?? null), "html", null, true);
        echo "\">
    <meta name=\"author\" content=\"Flat6labs\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"generator\" content=\"Flat6labs\">
     
    <link href=\"https://fonts.googleapis.com/css?family=Nanum+Gothic\" rel=\"stylesheet\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Masr-Tabda-Home-فكر</title>
      <link href=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo.png");
        echo "\" rel=\"icon\">
    <!-- Bootstrap -->
    <link href=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/styles/bootstrap.min.css");
        echo "\" rel=\"stylesheet\">
    <!-- custom style -->
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.3.1/css/all.css\" integrity=\"sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU\" crossorigin=\"anonymous\">
    <link href=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/styles/style.css");
        echo "\" rel=\"stylesheet\">
 ";
        // line 24
        if ((($context["activeLocale"] ?? null) == "en")) {
            // line 25
            echo "             <link href=\"";
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/styles/ltr.css");
            echo "\" rel=\"stylesheet\" >
         ";
        }
        // line 27
        echo "    <link href=\"https://fonts.googleapis.com/css?family=Tajawal\" rel=\"stylesheet\">
         <script src=\"https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js\"></script>
 
    ";
        // line 30
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 31
        echo "

  </head>

<body class=\"body\">
    <header class=\"inner1-header\">
        ";
        // line 37
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header1"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 38
        echo "        ";
        $context['__placeholder_headerextend_default_contents'] = null;        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('headerextend', $context['__placeholder_headerextend_default_contents']);
        unset($context['__placeholder_headerextend_default_contents']);        // line 39
        echo "    </header>
";
        // line 40
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 41
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("Footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 42
        echo "

";
        // line 44
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework'.($_minify ? '-min' : '').'.js"></script>'.PHP_EOL;
        unset($_minify);
        // line 45
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 46
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 47
        echo "
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/flat6labs/themes/flat6labs/layouts/inner.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 47,  132 => 46,  117 => 45,  112 => 44,  108 => 42,  104 => 41,  102 => 40,  99 => 39,  96 => 38,  92 => 37,  84 => 31,  81 => 30,  76 => 27,  70 => 25,  68 => 24,  64 => 23,  58 => 20,  53 => 18,  42 => 10,  38 => 9,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html {% if activeLocale==\"ar\" %} dir=\"rtl\" {% endif %}  lang=\"ar\" class=\"no-js\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    
    <meta name=\"description\" content=\"{{ seo_keyword }}\">
    <meta name=\"keywords\" content=\"{{ seo_description }}\">
    <meta name=\"author\" content=\"Flat6labs\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"generator\" content=\"Flat6labs\">
     
    <link href=\"https://fonts.googleapis.com/css?family=Nanum+Gothic\" rel=\"stylesheet\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Masr-Tabda-Home-فكر</title>
      <link href=\"{{ 'assets/images/logo.png'|theme }}\" rel=\"icon\">
    <!-- Bootstrap -->
    <link href=\"{{ 'assets/styles/bootstrap.min.css'|theme }}\" rel=\"stylesheet\">
    <!-- custom style -->
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.3.1/css/all.css\" integrity=\"sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU\" crossorigin=\"anonymous\">
    <link href=\"{{ 'assets/styles/style.css'|theme }}\" rel=\"stylesheet\">
 {% if activeLocale==\"en\" %}
             <link href=\"{{'assets/styles/ltr.css' | theme}}\" rel=\"stylesheet\" >
         {% endif %}
    <link href=\"https://fonts.googleapis.com/css?family=Tajawal\" rel=\"stylesheet\">
         <script src=\"https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js\"></script>
 
    {% styles %}


  </head>

<body class=\"body\">
    <header class=\"inner1-header\">
        {% partial \"header1\" %}
        {% placeholder headerextend %}
    </header>
{%  page %}
{% partial \"Footer\" %}


{% framework  %}
{% framework extras %}
{% scripts %}

</body>
</html>", "/var/www/html/flat6labs/themes/flat6labs/layouts/inner.htm", "");
    }
}
