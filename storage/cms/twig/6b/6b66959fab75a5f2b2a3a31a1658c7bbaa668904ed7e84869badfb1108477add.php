<?php

/* /var/www/html/flat6labs/themes/flat6labs/pages/home.htm */
class __TwigTemplate_06151632645f3f59c0e36ce5c71123394f1885a5ba6e1e980a4dab540ec861fc extends Twig_Template
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
        echo "<header class='overlay home-header'>
    <div class=\"container\">
        <div class=\"header-nav-items\">
            <div class=\"header-nav-items-logo\">
                <img src=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo.png");
        echo "\" />
            </div>
            <div class=\"header-nav-items-nav\">
                ";
        // line 8
        if (twig_get_attribute($this->env, $this->source, ($context["staticMenu"] ?? null), "menuItems", array())) {
            // line 9
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["staticMenu"] ?? null), "menuItems", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 10
                echo "                        <a href=\"";
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
            // line 12
            echo "                ";
        }
        // line 13
        echo "                ";
        if ((($context["activeLocale"] ?? null) == "ar")) {
            // line 14
            echo "                    <a href=\"#\" data-request=\"onSwitchLocale\" class='lang-btn' data-request-data=\"locale: 'en'\">English</a>
                ";
        } else {
            // line 16
            echo "                    <a href=\"#\" data-request=\"onSwitchLocale\" class=\"lang-btn\" data-request-data=\"locale: 'ar'\">عربى</a>
                ";
        }
        // line 17
        echo "    
            </div>
            <div class=\"header-nav-items-icon\">
                <a href=\"#\" ><img src=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/nav-page-img.png");
        echo "\" /></a>
            </div>
            <div onclick=\"\$('.header-nav-items-nav').slideToggle();\" class=\"header-nav-items-button\">
                <a href=\"#\" ><i class=\"fa fa-bars\"></i></a>
            </div>
        </div>
    </div>
    <div class=\"container\">
        <div class=\"row\" >
            <div class = \"col-xs-12 col-md-2 logo-home-contain\">
                <img src = \"";
        // line 30
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/nav-page-img-1.png ");
        echo "\" class=\"img-responsive logo-home-2\">
                <div class=\"captions-box\">
                    <!-- <span class=\"active captions logo-home-captions\">
                    ";
        // line 33
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array(" الدورة الاولى"));
        echo "
                    </span> --><!-- logo-home-contain -->
                </div><!-- captions-box -->
                <div class=\"captions-box\">
                    <!--  <span class=\"captions logo-home-captions\">
                                        ";
        // line 38
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("من برنامج مصر تبدأ "));
        echo "      
                                        </span> --><!-- logo-home-contain -->
                </div><!-- captions-box -->
            </div><!-- logo-home-contain -->
            <div class=\"col-md-8\">
                <div class=\"captions-box\">
                    <div>
                        <span class=\"captions caption-1\">
                          ";
        // line 46
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("فّكر..طّور..انطلق"));
        echo "    
                        </span><!-- caption-1 -->
                    </div>
                    <div class=\"captions-box-child\">
                        <div>
                            <span class=\"captions caption-2\">
                            ";
        // line 52
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("فّكر..طّور..انطلقdescription "));
        echo "
                            </span><!-- caption-2 -->
                        </div>
                        <div>
                            <span class=\"captions caption-2\">
                            ";
        // line 57
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("فّكر..طّور..انطلقdescrip222tion "));
        echo "
                            
                            </span><!-- caption-2 -->
                        </div>
                        <div>
                            <button class=\"form-control go-button\">
                              <a style=\"
    color: #b40017;
\" href=\"http://34.251.139.234/flat6labs/apply-program\">  <span>
                                  
                                  ";
        // line 67
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("تقدم الأن"));
        echo "
                                  <i class=\"fas fa-angle-left\"></i>
                                </span></a>
                            </button>
                        </div>
                    </div><!-- captions-box-child -->
                </div><!-- captions-box -->
            </div>
        </div><!-- container-->
    </div><!-- overlay -->        
</header><!-- Header -->

<section class=\"supporters\" id=\"supporter\" >

    <div class=\"container\">
        <div class=\"row\">
             <div class=\"supporter-captions-box supporter-box-1 col-sm-6\">
                 <span class=\"captions supporter-caption\">
                  ";
        // line 85
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("الداعمون لمبادرة مصر تبدأ"));
        echo "   
                 </span><!-- supporter-caption -->
             </div><!-- supporter-captions-box -->
         </div>
     </div>
     <div class=\"container\">
         <div class=\"row\">
             <div class=\"supporter-captions-box supporter-box-2 col-sm-6\">
                 <span class=\"captions supporter-caption\">
                   ";
        // line 94
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("الداعمون لمبادرة مصر تبدأ description  "));
        echo "   
                 </span><!-- supporter-caption -->
             </div><!-- supporter-captions-box -->
        </div>  
    </div>
    <div class=\"container\">
        <div class=\"sponsors row\">
            <div class=\"supporter-sponsor col-sm-2 col-xs-12\">
                <div>
                    <span>";
        // line 103
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("تحت إدارة"));
        echo "</span>
                </div>
                <div>
                    <img src = \"";
        // line 106
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/flat-6-logo.png");
        echo "\" class=\"img-responsive\">
                </div>
            </div>
            <div class=\"supporter-sponsor col-sm-2 col-xs-12\">
                <div>
                    <span>";
        // line 111
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("بدعم من"));
        echo "</span>
                </div>
                <div>
                    <img src = \"";
        // line 114
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/arabnet-logo.png ");
        echo "\" class=\"img-responsive\">
                </div>
            </div>
            <div class=\"supporter-sponsor col-sm-2 col-xs-12\">
                <div class=\"special-sponsor-class\">
                    <span>";
        // line 119
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("بتمويل من"));
        echo "</span>
                </div>
                <div>
                    <img src = \"";
        // line 122
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/lsf-logo.png ");
        echo "\" class=\"img-responsive lsf-logo\">
                </div>
            </div>
        </div>
    </div><!-- sponsors -->
</section><!-- supporters -->
";
        // line 128
        $context["projects"] = twig_get_attribute($this->env, $this->source, ($context["ProjectList"] ?? null), "projects", array());
        // line 129
        echo "<section id=\"project-list\">
    <div class='container'>
        <div class=\"project-list-title\">
            <h3>
                 ";
        // line 133
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array(" عندك فكرة مشروع؟ "));
        echo "     
                <span>
                    ";
        // line 135
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("انضم لمبادرة مصر تبدأ"));
        echo "    
                </span>
            </h3>
<!--             <img src = \"";
        // line 138
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/idea-img.png ");
        echo "\" class=\"img-responsive\">
 -->        </div>
        <div class=\"project-list-items\">
            ";
        // line 141
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["projects"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["project"]) {
            // line 142
            echo "                <div class=\"project-list-item\" style=\"background-image: url('";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["project"], "avatar", array()), "path", array()), "html", null, true);
            echo "')\">
                    <div class=\"project-list-item-box\">
                        <span class=\"project-number\">0";
            // line 144
            echo twig_escape_filter($this->env, ($context["key"] + 1), "html", null, true);
            echo "</span>
                        <div class=\"project-list-item-box-red\">
                            <span class=\"flat-logo-white\"></span>
                            <h4>";
            // line 147
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "title", array()), "html", null, true);
            echo "</h4>
                            <div class=\"project-list-item-box-red-content\">
                                ";
            // line 149
            echo call_user_func_array($this->env->getFunction('str_limit')->getCallable(), array("limit", twig_get_attribute($this->env, $this->source, $context["project"], "description", array()), 100));
            echo "
                            </div>
                            <a href=\"";
            // line 151
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("pr", array("id" => twig_get_attribute($this->env, $this->source, $context["project"], "id", array())));
            echo "\">
                                ";
            // line 152
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("  إعرف المزيد "));
            echo " 
                            </a>
                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 158
        echo "        </div>
        <div class=\"project-list-arrow-box arrow-box\">
            <div id='project-list-news-arrow-prev' class=\"arrow-button arrow-btn-box\"><i class=\"fas fa-angle-left\"></i></div>
            <div id='project-list-news-arrow-next' class=\"arrow-button arrow-btn-box\"><i class=\"fas fa-angle-right\"></i></div>
        </div>
    </div>
</section>
<section class=\"project-idea hidden\">
    <div class=\"row project-idea-details\">
        <div class=\"project-idea-caption col-sm-8 col-xs-12\">
            <span>
          ";
        // line 169
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array(" عندك فكرة مشروع؟ "));
        echo "     
            </span>

            <span>
             ";
        // line 173
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("انضم لمبادرة مصر تبدأ"));
        echo "    
            </span>
        </div><!-- project-img -->
        <div class=\"project-img col-sm-4 col-xs-12\">
            <img src = \"";
        // line 177
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/idea-img.png ");
        echo "\" class=\"img-responsive\">
        </div><!-- project-idea-caption -->
    </div>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-2  rules\">
                <img src=\"";
        // line 183
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/rule-1.png ");
        echo "\" class=\"img-responsive\">
                <div class=\"clearfix\"></div>
                <div class=\"rules-caption-box\">
                    <span class=\"rules-caption\">";
        // line 186
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("فّكر وشارك في أنشطتنا"));
        echo " </span>
                </div>
            </div>
            <div class=\"col-sm-6 rules col-sm-pull-1\">
                <img src = \"";
        // line 190
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/vector-idea.png ");
        echo "\" class=\"img-responsive vector-idea\">
                <img src = \"";
        // line 191
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/rule-2.png ");
        echo "\" class=\"img-responsive vector-idea rule-2\">
                <div class=\"develope-notes\">
                    <h3>
             ";
        // line 194
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("طّور مشروعك في الحاضنة "));
        echo "            
                    </h3>

                    <p>
                  ";
        // line 198
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("طّور مشروعك في الحاضنة descripion "));
        echo "
                         الاجتماعي 
                    </p>
                    <span>
                   ";
        // line 202
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("إعرف المزيد "));
        echo "     
                    </span>
                </div>
              <!--  <img src = \"";
        // line 205
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/box-info.png");
        echo "\" class=\"img-responsive vector-idea\">-->
            </div>
            <div class=\"col-sm-2 col-sm-pull-2 rules\">
                <img src=\"";
        // line 208
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/rule-3.png");
        echo "\" class=\"img-responsive\">
                <div class=\"clearfix\"></div>
                <div class=\"rules-caption-box\">
                    <span class=\"rules-caption\">";
        // line 211
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("انطلق بشركتك في المسرعة"));
        echo "</span>
                </div>
            </div>
        </div>
    </div>
    <div class=\"arrow-box\">
        <div class=\"arrow-button arrow-btn-box\"><i class=\"fas fa-angle-left\"></i></div>
        <div class=\"arrow-button arrow-btn-box\"><i class=\"fas fa-angle-right\"></i></div>
    </div>
</section>

<div class=\"steps\" id=\"stagesoftheprogram\">
    <div class=\"container\">
    <div class=\"project-idea-details\" style=\"margin-bottom: 0px;position: relative;
    padding: 0px;\">
        <div class=\"project-idea-caption\">
            <span>
          ";
        // line 228
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array(" مراحل برنامج احتضان مصر تبدأ "));
        echo "     
            </span>

            <span>
             ";
        // line 232
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("من فكرة إلى شركة"));
        echo "    
            </span>
        </div><!-- project-img -->
        <div style=\"clear:both;\"></div>
    </div>
    
        <div class=\"service-list-items\">
        ";
        // line 239
        $context["stages"] = twig_get_attribute($this->env, $this->source, ($context["StagesList"] ?? null), "stages", array());
        // line 240
        echo "        \t<!-- Loop On this -->
        \t";
        // line 241
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["stage"]) {
            // line 242
            echo "            \t<div class=\"service-outer-box\">
            \t\t<div class=\"service-arrow\"></div>
            \t\t<div class=\"service-inner-box\">
            \t\t\t<div class=\"service-inner-box-text\">";
            // line 245
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stage"], "title", array()), "html", null, true);
            echo "</div>\t
            \t\t</div>
            \t</div>
        \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 249
        echo "        </div>
        <div class=\"service-descriptions\">
        \t<!-- Loop On this -->
        \t";
        // line 252
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["stage"]) {
            // line 253
            echo "        \t    <p>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stage"], "description", array()), "html", null, true);
            echo "</p>
        \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 255
        echo "        </div>
    </div>
</div>
<div class=\"intro-group\">
    <div class=\"container\">
        <div class=\"row\">
            ";
        // line 261
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["newsPosts"] ?? null), "posts", array());
        // line 262
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 263
            echo "                <div class=\"col-sm-12\">
                    <h2 class=\"h2 text-right\">
                        ";
            // line 265
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", array()), "html", null, true);
            echo "                
                    </h2>
                </div>
                <div class=\"clearfix\"></div>
                ";
            // line 269
            if (twig_get_attribute($this->env, $this->source, $context["post"], "image", array())) {
                // line 270
                echo "                    <div class=\"col-sm-6 col-xs-12 intro-img\">
                        <img class=\"img-responsive\" src=\"";
                // line 271
                echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["post"], "image", array()));
                echo "\" alt=\"intro-group\">
                    </div>
                ";
            }
            // line 274
            echo "                <div class=\"col-sm-6 col-xs-12 text-right intro-paragraph\">
                    <span >
                        ";
            // line 276
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "published_at", array()), "Y-m-d"), "html", null, true);
            echo "
                    </span>
                    <p class=\"lead\">
                         ";
            // line 279
            if (twig_get_attribute($this->env, $this->source, $context["post"], "introductory", array())) {
                // line 280
                echo "                                        ";
                echo twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "introductory", array()), 0, 250);
                echo "
                                    ";
            } elseif (twig_get_attribute($this->env, $this->source,             // line 281
$context["post"], "content", array())) {
                // line 282
                echo "                                        ";
                echo twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "content", array()), 0, 250);
                echo "
                                    ";
            }
            // line 284
            echo "                    </p>
                    <a href=\"";
            // line 285
            echo $this->extensions['Cms\Twig\Extension']->pageFilter(($context["postPage"] ?? null), array("slug" => twig_get_attribute($this->env, $this->source, $context["post"], "slug", array())));
            echo "\"> 
                        ";
            // line 286
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", array()), "html", null, true);
            echo ">>
                    </a>
                </div>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 290
            echo "                ";
            echo twig_escape_filter($this->env, ($context["noPostsMessage"] ?? null), "html", null, true);
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 292
        echo "        </div>
    </div>
</div>
<!-- support and help -->
<div class=\"support red-bg\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-5 col-xs-12 text-right \">
                <h3 class=\"h3\">";
        // line 300
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("تحتاج لدعم؟ "));
        echo "</h3>
                <p>";
        // line 301
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("تحتاج لدعم؟ description"));
        echo "</p>
                <button class=\"btn btn-lg btn-white\">
                    <a href=\"https://www.flat6labs.com/?lang=ar\"><i class=\"fas fa-angle-left\"></i>";
        // line 303
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("تواصل معنا"));
        echo "</a>
                </button>
                <button class=\"btn btn-lg btn-white\">
                    <a href=\"https://www.flat6labs.com/?lang=ar\"><i class=\"fas fa-angle-left\"></i>  ";
        // line 306
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("معلومات أكثر هنا"));
        echo " </a>
                </button>
            </div>
            <div class=\"col-sm-5 col-xs-12 text-right border-right\">
                <h3 class=\"h2\">";
        // line 310
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("تقدم للمسرعة "));
        echo "</h3>
                <p>";
        // line 311
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("تقدم للمسرعة description "));
        echo "</p>
                <button class=\"btn btn-lg btn-white\">
                    <a href=\"https://www.flat6labs.com/?lang=ar\"><i class=\"fas fa-angle-left\"></i>";
        // line 313
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("انطلق بشركتك  "));
        echo "  </a>
                </button>
                <button class=\"btn btn-lg btn-white\">
                    <a href=\"https://www.flat6labs.com/?lang=ar\"><i class=\"fas fa-angle-left\"></i>";
        // line 316
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("تقدم من هنا"));
        echo " </a>
                </button>
            </div>
        </div>
        
    </div>
</div>
   <!-- latest news -->
<div class=\" latest-news\">
    <div class=\"container\">
        <h2 class=\"h2 text-right\">
            ";
        // line 327
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array(" آخر الآخبار "));
        echo "     
        </h2>
        <div class=\"news-content\">
            <div class=\"news-content-items\">
                ";
        // line 331
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["newsPosts2"] ?? null), "posts", array());
        // line 332
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 333
            echo "                    <div class=\"news-content-item\" style=\"background-image: url('";
            echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["post"], "image", array()));
            echo "')\">
                        <div class=\"news-content-item-box\">
                            <span> ";
            // line 335
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "published_at", array()), "Y-m-d"), "html", null, true);
            echo "</span>
                            <div class=\"news-content-item-box-gray\">
                                <span class=\"flat-logo\"></span>
                                <div class=\"news-content-item-box-gray-content\">
                                    ";
            // line 339
            if (twig_get_attribute($this->env, $this->source, $context["post"], "introductory", array())) {
                // line 340
                echo "                                        ";
                echo twig_get_attribute($this->env, $this->source, $context["post"], "introductory", array());
                echo "
                                    ";
            } elseif (twig_get_attribute($this->env, $this->source,             // line 341
$context["post"], "content", array())) {
                // line 342
                echo "                                        ";
                echo twig_get_attribute($this->env, $this->source, $context["post"], "content", array());
                echo "
                                    ";
            }
            // line 344
            echo "                                </div>
                                <a href=\"";
            // line 345
            echo $this->extensions['Cms\Twig\Extension']->pageFilter(($context["postPage"] ?? null), array("slug" => twig_get_attribute($this->env, $this->source, $context["post"], "slug", array())));
            echo "\">
                                    ";
            // line 346
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("  إعرف المزيد "));
            echo " 
                                </a>
                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 352
        echo "            </div>
            <div class=\"arrow-box\">
                <div id='news-arrow-prev' class=\"arrow-button arrow-btn-box\"><i class=\"fas fa-angle-left\"></i></div>
                <div id='news-arrow-next' class=\"arrow-button arrow-btn-box\"><i class=\"fas fa-angle-right\"></i></div>
            </div>
        </div>
    </div>
</div>
<script>
    \$(document).ready(function(){
        
        \$('.news-content-items').slick({
            slidesToShow: 2,
            slidesToScroll: 1,
            dots: false,
            centerMode: false,
            focusOnSelect: true,
            appendArrows: \$('.news-content .arrow-box'),
            prevArrow:\$('#news-arrow-prev'),
            nextArrow:\$('#news-arrow-next'),
            ";
        // line 372
        if ((($context["activeLocale"] ?? null) == "ar")) {
            // line 373
            echo "                rtl: true,
            ";
        }
        // line 375
        echo "            responsive: [
                {
                  breakpoint: 768,
                  settings: {
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 1
                  }
                },
                {
                  breakpoint: 480,
                  settings: {
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 1
                  }
                }
            ]
        });
        
        \$.fn.worcboxFocus = function(options){
            \$(this).each(function (){
                \$element = \$(this);
                var current = 0;
                var count = \$(this).children().length;
                console.log(count);
                \$element.children(':eq('+ current +')').addClass('current-focus');
                options.prevArrow.click(function(){
                    console.log('here');
                    current++;
                    if(current >= count){
                        current = 0;
                    }
                    \$element.children().removeClass('current-focus');
                    \$element.children(':eq('+ current +')').addClass('current-focus');
                })
                options.nextArrow.click(function(){
                    console.log('here');
                    current--;
                    if(current < 0){
                        current = count - 1;
                    }
                    \$element.children().removeClass('current-focus');
                    \$element.children(':eq('+ current +')').addClass('current-focus');
                })
            })
        };
        \$('.project-list-items').worcboxFocus({
            prevArrow: \$('#project-list-news-arrow-prev'),
            nextArrow: \$('#project-list-news-arrow-next'),
        });
    });
    \$(\".service-outer-box\").click(function(){
        \$(\".service-outer-box\").removeClass('active');
        \$(this).addClass('active');
        \$(\".service-descriptions\").children('p').removeClass('active');
        \$(\".service-descriptions\").children('p:eq('+ \$(this).index() +')').addClass('active')
        if(!first){
            \$(\"html, body\").animate({
            'scrollTop': \$(\".service-descriptions\").offset().top - ( \$(window).height() -  \$(\".service-descriptions\").outerHeight())
            })
        }
        first = false;
        
    });
    var first = true;
    \$(\".service-outer-box:eq(0)\").click()

</script>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/flat6labs/themes/flat6labs/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  705 => 375,  701 => 373,  699 => 372,  677 => 352,  665 => 346,  661 => 345,  658 => 344,  652 => 342,  650 => 341,  645 => 340,  643 => 339,  636 => 335,  630 => 333,  625 => 332,  623 => 331,  616 => 327,  602 => 316,  596 => 313,  591 => 311,  587 => 310,  580 => 306,  574 => 303,  569 => 301,  565 => 300,  555 => 292,  546 => 290,  537 => 286,  533 => 285,  530 => 284,  524 => 282,  522 => 281,  517 => 280,  515 => 279,  509 => 276,  505 => 274,  499 => 271,  496 => 270,  494 => 269,  487 => 265,  483 => 263,  477 => 262,  475 => 261,  467 => 255,  458 => 253,  454 => 252,  449 => 249,  439 => 245,  434 => 242,  430 => 241,  427 => 240,  425 => 239,  415 => 232,  408 => 228,  388 => 211,  382 => 208,  376 => 205,  370 => 202,  363 => 198,  356 => 194,  350 => 191,  346 => 190,  339 => 186,  333 => 183,  324 => 177,  317 => 173,  310 => 169,  297 => 158,  285 => 152,  281 => 151,  276 => 149,  271 => 147,  265 => 144,  259 => 142,  255 => 141,  249 => 138,  243 => 135,  238 => 133,  232 => 129,  230 => 128,  221 => 122,  215 => 119,  207 => 114,  201 => 111,  193 => 106,  187 => 103,  175 => 94,  163 => 85,  142 => 67,  129 => 57,  121 => 52,  112 => 46,  101 => 38,  93 => 33,  87 => 30,  74 => 20,  69 => 17,  65 => 16,  61 => 14,  58 => 13,  55 => 12,  42 => 10,  37 => 9,  35 => 8,  29 => 5,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<header class='overlay home-header'>
    <div class=\"container\">
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
                <a href=\"#\" ><img src=\"{{'assets/images/nav-page-img.png'|theme }}\" /></a>
            </div>
            <div onclick=\"\$('.header-nav-items-nav').slideToggle();\" class=\"header-nav-items-button\">
                <a href=\"#\" ><i class=\"fa fa-bars\"></i></a>
            </div>
        </div>
    </div>
    <div class=\"container\">
        <div class=\"row\" >
            <div class = \"col-xs-12 col-md-2 logo-home-contain\">
                <img src = \"{{ 'assets/images/nav-page-img-1.png ' |theme }}\" class=\"img-responsive logo-home-2\">
                <div class=\"captions-box\">
                    <!-- <span class=\"active captions logo-home-captions\">
                    {{\" الدورة الاولى\" | _}}
                    </span> --><!-- logo-home-contain -->
                </div><!-- captions-box -->
                <div class=\"captions-box\">
                    <!--  <span class=\"captions logo-home-captions\">
                                        {{\"من برنامج مصر تبدأ \" | _}}      
                                        </span> --><!-- logo-home-contain -->
                </div><!-- captions-box -->
            </div><!-- logo-home-contain -->
            <div class=\"col-md-8\">
                <div class=\"captions-box\">
                    <div>
                        <span class=\"captions caption-1\">
                          {{\"فّكر..طّور..انطلق\" | _}}    
                        </span><!-- caption-1 -->
                    </div>
                    <div class=\"captions-box-child\">
                        <div>
                            <span class=\"captions caption-2\">
                            {{\"فّكر..طّور..انطلقdescription \" | _}}
                            </span><!-- caption-2 -->
                        </div>
                        <div>
                            <span class=\"captions caption-2\">
                            {{\"فّكر..طّور..انطلقdescrip222tion \" | _}}
                            
                            </span><!-- caption-2 -->
                        </div>
                        <div>
                            <button class=\"form-control go-button\">
                              <a style=\"
    color: #b40017;
\" href=\"http://34.251.139.234/flat6labs/apply-program\">  <span>
                                  
                                  {{\"تقدم الأن\" | _}}
                                  <i class=\"fas fa-angle-left\"></i>
                                </span></a>
                            </button>
                        </div>
                    </div><!-- captions-box-child -->
                </div><!-- captions-box -->
            </div>
        </div><!-- container-->
    </div><!-- overlay -->        
</header><!-- Header -->

<section class=\"supporters\" id=\"supporter\" >

    <div class=\"container\">
        <div class=\"row\">
             <div class=\"supporter-captions-box supporter-box-1 col-sm-6\">
                 <span class=\"captions supporter-caption\">
                  {{\"الداعمون لمبادرة مصر تبدأ\" | _}}   
                 </span><!-- supporter-caption -->
             </div><!-- supporter-captions-box -->
         </div>
     </div>
     <div class=\"container\">
         <div class=\"row\">
             <div class=\"supporter-captions-box supporter-box-2 col-sm-6\">
                 <span class=\"captions supporter-caption\">
                   {{\"الداعمون لمبادرة مصر تبدأ description  \" | _}}   
                 </span><!-- supporter-caption -->
             </div><!-- supporter-captions-box -->
        </div>  
    </div>
    <div class=\"container\">
        <div class=\"sponsors row\">
            <div class=\"supporter-sponsor col-sm-2 col-xs-12\">
                <div>
                    <span>{{\"تحت إدارة\" | _}}</span>
                </div>
                <div>
                    <img src = \"{{ 'assets/images/flat-6-logo.png' |theme }}\" class=\"img-responsive\">
                </div>
            </div>
            <div class=\"supporter-sponsor col-sm-2 col-xs-12\">
                <div>
                    <span>{{\"بدعم من\" | _}}</span>
                </div>
                <div>
                    <img src = \"{{ 'assets/images/arabnet-logo.png ' |theme }}\" class=\"img-responsive\">
                </div>
            </div>
            <div class=\"supporter-sponsor col-sm-2 col-xs-12\">
                <div class=\"special-sponsor-class\">
                    <span>{{\"بتمويل من\" | _}}</span>
                </div>
                <div>
                    <img src = \"{{ 'assets/images/lsf-logo.png ' |theme }}\" class=\"img-responsive lsf-logo\">
                </div>
            </div>
        </div>
    </div><!-- sponsors -->
</section><!-- supporters -->
{% set projects = ProjectList.projects %}
<section id=\"project-list\">
    <div class='container'>
        <div class=\"project-list-title\">
            <h3>
                 {{\" عندك فكرة مشروع؟ \" | _}}     
                <span>
                    {{\"انضم لمبادرة مصر تبدأ\" | _}}    
                </span>
            </h3>
<!--             <img src = \"{{ 'assets/images/idea-img.png ' |theme }}\" class=\"img-responsive\">
 -->        </div>
        <div class=\"project-list-items\">
            {% for key,project in projects %}
                <div class=\"project-list-item\" style=\"background-image: url('{{ project.avatar.path }}')\">
                    <div class=\"project-list-item-box\">
                        <span class=\"project-number\">0{{key + 1}}</span>
                        <div class=\"project-list-item-box-red\">
                            <span class=\"flat-logo-white\"></span>
                            <h4>{{project.title}}</h4>
                            <div class=\"project-list-item-box-red-content\">
                                {{ str_limit(project.description, 100) }}
                            </div>
                            <a href=\"{{\"pr\" | page({'id':project.id})}}\">
                                {{\"  إعرف المزيد \" | _}} 
                            </a>
                        </div>
                    </div>
                </div>
            {% endfor %}
        </div>
        <div class=\"project-list-arrow-box arrow-box\">
            <div id='project-list-news-arrow-prev' class=\"arrow-button arrow-btn-box\"><i class=\"fas fa-angle-left\"></i></div>
            <div id='project-list-news-arrow-next' class=\"arrow-button arrow-btn-box\"><i class=\"fas fa-angle-right\"></i></div>
        </div>
    </div>
</section>
<section class=\"project-idea hidden\">
    <div class=\"row project-idea-details\">
        <div class=\"project-idea-caption col-sm-8 col-xs-12\">
            <span>
          {{\" عندك فكرة مشروع؟ \" | _}}     
            </span>

            <span>
             {{\"انضم لمبادرة مصر تبدأ\" | _}}    
            </span>
        </div><!-- project-img -->
        <div class=\"project-img col-sm-4 col-xs-12\">
            <img src = \"{{ 'assets/images/idea-img.png ' |theme }}\" class=\"img-responsive\">
        </div><!-- project-idea-caption -->
    </div>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-2  rules\">
                <img src=\"{{ 'assets/images/rule-1.png ' |theme }}\" class=\"img-responsive\">
                <div class=\"clearfix\"></div>
                <div class=\"rules-caption-box\">
                    <span class=\"rules-caption\">{{\"فّكر وشارك في أنشطتنا\" | _}} </span>
                </div>
            </div>
            <div class=\"col-sm-6 rules col-sm-pull-1\">
                <img src = \"{{ 'assets/images/vector-idea.png ' |theme }}\" class=\"img-responsive vector-idea\">
                <img src = \"{{ 'assets/images/rule-2.png ' |theme }}\" class=\"img-responsive vector-idea rule-2\">
                <div class=\"develope-notes\">
                    <h3>
             {{\"طّور مشروعك في الحاضنة \" | _}}            
                    </h3>

                    <p>
                  {{\"طّور مشروعك في الحاضنة descripion \" | _}}
                         الاجتماعي 
                    </p>
                    <span>
                   {{\"إعرف المزيد \" | _}}     
                    </span>
                </div>
              <!--  <img src = \"{{ 'assets/images/box-info.png' |theme }}\" class=\"img-responsive vector-idea\">-->
            </div>
            <div class=\"col-sm-2 col-sm-pull-2 rules\">
                <img src=\"{{ 'assets/images/rule-3.png' |theme }}\" class=\"img-responsive\">
                <div class=\"clearfix\"></div>
                <div class=\"rules-caption-box\">
                    <span class=\"rules-caption\">{{\"انطلق بشركتك في المسرعة\" | _}}</span>
                </div>
            </div>
        </div>
    </div>
    <div class=\"arrow-box\">
        <div class=\"arrow-button arrow-btn-box\"><i class=\"fas fa-angle-left\"></i></div>
        <div class=\"arrow-button arrow-btn-box\"><i class=\"fas fa-angle-right\"></i></div>
    </div>
</section>

<div class=\"steps\" id=\"stagesoftheprogram\">
    <div class=\"container\">
    <div class=\"project-idea-details\" style=\"margin-bottom: 0px;position: relative;
    padding: 0px;\">
        <div class=\"project-idea-caption\">
            <span>
          {{\" مراحل برنامج احتضان مصر تبدأ \" | _}}     
            </span>

            <span>
             {{\"من فكرة إلى شركة\" | _}}    
            </span>
        </div><!-- project-img -->
        <div style=\"clear:both;\"></div>
    </div>
    
        <div class=\"service-list-items\">
        {% set stages = StagesList.stages %}
        \t<!-- Loop On this -->
        \t{% for stage in stages %}
            \t<div class=\"service-outer-box\">
            \t\t<div class=\"service-arrow\"></div>
            \t\t<div class=\"service-inner-box\">
            \t\t\t<div class=\"service-inner-box-text\">{{stage.title}}</div>\t
            \t\t</div>
            \t</div>
        \t{% endfor %}
        </div>
        <div class=\"service-descriptions\">
        \t<!-- Loop On this -->
        \t{% for stage in stages %}
        \t    <p>{{stage.description}}</p>
        \t{% endfor %}
        </div>
    </div>
</div>
<div class=\"intro-group\">
    <div class=\"container\">
        <div class=\"row\">
            {% set posts = newsPosts.posts %}
            {% for post in posts %}
                <div class=\"col-sm-12\">
                    <h2 class=\"h2 text-right\">
                        {{ post.title }}                
                    </h2>
                </div>
                <div class=\"clearfix\"></div>
                {% if post.image %}
                    <div class=\"col-sm-6 col-xs-12 intro-img\">
                        <img class=\"img-responsive\" src=\"{{ post.image|media }}\" alt=\"intro-group\">
                    </div>
                {% endif %}
                <div class=\"col-sm-6 col-xs-12 text-right intro-paragraph\">
                    <span >
                        {{ post.published_at|date('Y-m-d') }}
                    </span>
                    <p class=\"lead\">
                         {% if post.introductory %}
                                        {{ post.introductory |slice(0,250) | raw  }}
                                    {% elseif post.content %}
                                        {{ post.content |slice(0,250) | raw }}
                                    {% endif %}
                    </p>
                    <a href=\"{{postPage| page({\"slug\":post.slug})}}\"> 
                        {{ post.title }}>>
                    </a>
                </div>
            {% else %}
                {{ noPostsMessage }}
            {% endfor %}
        </div>
    </div>
</div>
<!-- support and help -->
<div class=\"support red-bg\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-5 col-xs-12 text-right \">
                <h3 class=\"h3\">{{\"تحتاج لدعم؟ \" | _}}</h3>
                <p>{{\"تحتاج لدعم؟ description\" | _}}</p>
                <button class=\"btn btn-lg btn-white\">
                    <a href=\"https://www.flat6labs.com/?lang=ar\"><i class=\"fas fa-angle-left\"></i>{{\"تواصل معنا\" | _}}</a>
                </button>
                <button class=\"btn btn-lg btn-white\">
                    <a href=\"https://www.flat6labs.com/?lang=ar\"><i class=\"fas fa-angle-left\"></i>  {{\"معلومات أكثر هنا\" | _}} </a>
                </button>
            </div>
            <div class=\"col-sm-5 col-xs-12 text-right border-right\">
                <h3 class=\"h2\">{{\"تقدم للمسرعة \" | _}}</h3>
                <p>{{\"تقدم للمسرعة description \" | _}}</p>
                <button class=\"btn btn-lg btn-white\">
                    <a href=\"https://www.flat6labs.com/?lang=ar\"><i class=\"fas fa-angle-left\"></i>{{\"انطلق بشركتك  \" | _}}  </a>
                </button>
                <button class=\"btn btn-lg btn-white\">
                    <a href=\"https://www.flat6labs.com/?lang=ar\"><i class=\"fas fa-angle-left\"></i>{{\"تقدم من هنا\" | _}} </a>
                </button>
            </div>
        </div>
        
    </div>
</div>
   <!-- latest news -->
<div class=\" latest-news\">
    <div class=\"container\">
        <h2 class=\"h2 text-right\">
            {{\" آخر الآخبار \" | _}}     
        </h2>
        <div class=\"news-content\">
            <div class=\"news-content-items\">
                {% set posts = newsPosts2.posts %}
                {% for post in posts %}
                    <div class=\"news-content-item\" style=\"background-image: url('{{ post.image | media }}')\">
                        <div class=\"news-content-item-box\">
                            <span> {{ post.published_at|date('Y-m-d') }}</span>
                            <div class=\"news-content-item-box-gray\">
                                <span class=\"flat-logo\"></span>
                                <div class=\"news-content-item-box-gray-content\">
                                    {% if post.introductory %}
                                        {{ post.introductory  | raw  }}
                                    {% elseif post.content %}
                                        {{ post.content | raw }}
                                    {% endif %}
                                </div>
                                <a href=\"{{postPage| page({\"slug\":post.slug})}}\">
                                    {{\"  إعرف المزيد \" | _}} 
                                </a>
                            </div>
                        </div>
                    </div>
                {% endfor %}
            </div>
            <div class=\"arrow-box\">
                <div id='news-arrow-prev' class=\"arrow-button arrow-btn-box\"><i class=\"fas fa-angle-left\"></i></div>
                <div id='news-arrow-next' class=\"arrow-button arrow-btn-box\"><i class=\"fas fa-angle-right\"></i></div>
            </div>
        </div>
    </div>
</div>
<script>
    \$(document).ready(function(){
        
        \$('.news-content-items').slick({
            slidesToShow: 2,
            slidesToScroll: 1,
            dots: false,
            centerMode: false,
            focusOnSelect: true,
            appendArrows: \$('.news-content .arrow-box'),
            prevArrow:\$('#news-arrow-prev'),
            nextArrow:\$('#news-arrow-next'),
            {% if activeLocale  == 'ar' %}
                rtl: true,
            {% endif %}
            responsive: [
                {
                  breakpoint: 768,
                  settings: {
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 1
                  }
                },
                {
                  breakpoint: 480,
                  settings: {
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 1
                  }
                }
            ]
        });
        
        \$.fn.worcboxFocus = function(options){
            \$(this).each(function (){
                \$element = \$(this);
                var current = 0;
                var count = \$(this).children().length;
                console.log(count);
                \$element.children(':eq('+ current +')').addClass('current-focus');
                options.prevArrow.click(function(){
                    console.log('here');
                    current++;
                    if(current >= count){
                        current = 0;
                    }
                    \$element.children().removeClass('current-focus');
                    \$element.children(':eq('+ current +')').addClass('current-focus');
                })
                options.nextArrow.click(function(){
                    console.log('here');
                    current--;
                    if(current < 0){
                        current = count - 1;
                    }
                    \$element.children().removeClass('current-focus');
                    \$element.children(':eq('+ current +')').addClass('current-focus');
                })
            })
        };
        \$('.project-list-items').worcboxFocus({
            prevArrow: \$('#project-list-news-arrow-prev'),
            nextArrow: \$('#project-list-news-arrow-next'),
        });
    });
    \$(\".service-outer-box\").click(function(){
        \$(\".service-outer-box\").removeClass('active');
        \$(this).addClass('active');
        \$(\".service-descriptions\").children('p').removeClass('active');
        \$(\".service-descriptions\").children('p:eq('+ \$(this).index() +')').addClass('active')
        if(!first){
            \$(\"html, body\").animate({
            'scrollTop': \$(\".service-descriptions\").offset().top - ( \$(window).height() -  \$(\".service-descriptions\").outerHeight())
            })
        }
        first = false;
        
    });
    var first = true;
    \$(\".service-outer-box:eq(0)\").click()

</script>", "/var/www/html/flat6labs/themes/flat6labs/pages/home.htm", "");
    }
}
