<?php

/* /var/www/html/flat6labs/themes/flat6labs/layouts/main.htm */
class __TwigTemplate_7ba2f134b85f28bd21bdc8a571f24673a162953ca4a2511a5a646d18d2944b50 extends Twig_Template
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
        echo "   lang=\"en\" class=\"no-js\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    
    <meta name=\"description\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["seo_keyword"] ?? null), "html", null, true);
        echo "\">
    <meta name=\"keywords\" content=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["seo_description"] ?? null), "html", null, true);
        echo "\">
    <meta name=\"author\" content=\"Flat6labs\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"generator\" content=\"Flat6labs\">
    
    <link href=\"https://fonts.googleapis.com/css?family=Nanum+Gothic\" rel=\"stylesheet\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Masr-Tabda-Home-Page</title>
          <link href=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo.png");
        echo "\" rel=\"icon\">
    <!-- Bootstrap -->
    <link href=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/styles/bootstrap.min.css");
        echo "\" rel=\"stylesheet\">
    <!-- custom style -->
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.3.1/css/all.css\" integrity=\"sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU\" crossorigin=\"anonymous\">
    <link href=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/styles/style.css");
        echo "\" rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css?family=Tajawal\" rel=\"stylesheet\">
        <script src=\"https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js\"></script>
        ";
        // line 25
        if ((($context["activeLocale"] ?? null) == "en")) {
            // line 26
            echo "            <link href=\"";
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/styles/ltr.css");
            echo "\" rel=\"stylesheet\" >
        ";
        }
        // line 28
        echo "        <link rel=\"stylesheet\" type=\"text/css\" href=";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/styles/slick.css");
        echo " />
        <link rel=\"stylesheet\" type=\"text/css\" href=";
        // line 29
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/styles/slick-theme.css");
        echo " />
        <script type=\"text/javascript\" src=";
        // line 30
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/styles/slick.min.js");
        echo "></script>
        <script async src=\"";
        // line 31
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/scripts/bootstrap.min.js");
        echo "\"></script>
        <script async src=\"";
        // line 32
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/scripts/script.js");
        echo "\"></script>

    ";
        // line 34
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 35
        echo "

  </head>

<body>
";
        // line 40
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 41
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 42
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("Footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 43
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
        // line 44
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 45
        echo "
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/flat6labs/themes/flat6labs/layouts/main.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 45,  134 => 44,  119 => 43,  115 => 42,  113 => 41,  109 => 40,  102 => 35,  99 => 34,  94 => 32,  90 => 31,  86 => 30,  82 => 29,  77 => 28,  71 => 26,  69 => 25,  63 => 22,  57 => 19,  52 => 17,  41 => 9,  37 => 8,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html {% if activeLocale==\"ar\" %} dir=\"rtl\" {% endif %}   lang=\"en\" class=\"no-js\">
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
    <title>Masr-Tabda-Home-Page</title>
          <link href=\"{{ 'assets/images/logo.png'|theme }}\" rel=\"icon\">
    <!-- Bootstrap -->
    <link href=\"{{ 'assets/styles/bootstrap.min.css'|theme }}\" rel=\"stylesheet\">
    <!-- custom style -->
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.3.1/css/all.css\" integrity=\"sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU\" crossorigin=\"anonymous\">
    <link href=\"{{ 'assets/styles/style.css'|theme }}\" rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css?family=Tajawal\" rel=\"stylesheet\">
        <script src=\"https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js\"></script>
        {% if activeLocale==\"en\" %}
            <link href=\"{{'assets/styles/ltr.css' | theme}}\" rel=\"stylesheet\" >
        {% endif %}
        <link rel=\"stylesheet\" type=\"text/css\" href={{'assets/styles/slick.css' | theme}} />
        <link rel=\"stylesheet\" type=\"text/css\" href={{'assets/styles/slick-theme.css' | theme}} />
        <script type=\"text/javascript\" src={{'assets/styles/slick.min.js' | theme}}></script>
        <script async src=\"{{ 'assets/scripts/bootstrap.min.js' |theme }}\"></script>
        <script async src=\"{{ 'assets/scripts/script.js' |theme }}\"></script>

    {% styles %}


  </head>

<body>
{% partial \"header\" %}
{%  page %}
{% partial \"Footer\" %}
{% framework extras %}
{% scripts %}

</body>
</html>", "/var/www/html/flat6labs/themes/flat6labs/layouts/main.htm", "");
    }
}
