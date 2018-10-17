<?php

/* /var/www/html/flat6labs/themes/flat6labs/pages/apply-program.htm */
class __TwigTemplate_ff063ec3251d202d3dd1aebcf2225d3adbc795a744cd922caef26304ec661e34 extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('headerextend'        );
        // line 2
        echo "    <div class=\"inner1-background\">
            <div class=\"inner-1-img\">
                <img src=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/header2.png");
        echo "\" />
            </div><!-- inner-1 img -->
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"inner2-background-h3 col-xs-12\">
                        <h3>";
        // line 9
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("تقدم للبرنامج
"));
        // line 10
        echo " </h3>
                    </div><!-- inner2-background-h3 -->
                </div><!-- row-->
            </div><!-- container -->
        </div><!-- inner2-background-->
        <div class=\"inner1-header-links\">
            <div class=\"links-contain\">
                <a href=\"#\">";
        // line 17
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("تقدم لبرنامج حاضنة مصر تبداً اليوم "));
        echo "</a>
            </div><!-- links-contain -->
        </div><!-- inner1-header-links -->
";
        // line 1
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 21
        echo "
    <section class=\"need-help\">
        <div class=\"need-help-wraper\">
          <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xs-12 need-help-header\">
                  <div class=\"need-content-header\">    
                    <h4>";
        // line 28
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("نموذج برنامج حاضنة مصر تبدأ
"));
        // line 29
        echo "</h4>
                    <span class=\"divide\"></span>
                  </div><!--need-content-header -->
                  <p>";
        // line 32
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("نموذج برنامج حاضنة مصر تبدأ
 description"));
        // line 33
        echo " </div><!-- need-help-header -->
            </div><!-- row -->
         </div><!-- container -->
        </div><!-- need-help-wraper -->
    </section><!-- need-help-->
    <section class=\"basic-info\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"basic-info-header col-xs-12\">
                    <h4>";
        // line 42
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("المعلومات الأساسية"));
        echo " </h4>
                </div><!-- basic-info-header -->
            </div><!-- row -->
        </div><!-- container -->
        <div class=\"separator\"><span></span></div>
        <div class=\"inputs-wrap\">
        <form class=\"ContactUsForm\" role=\"form\"
            data-request=\"";
        // line 49
        echo twig_escape_filter($this->env, ($context["contactForm"] ?? null), "html", null, true);
        echo "::onMailSent\"
              data-request-update=\"'";
        // line 50
        echo twig_escape_filter($this->env, ($context["contactForm"] ?? null), "html", null, true);
        echo "::confirm': '.confirm-container'\">

            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"describe-project col-sm-6\">
                        <div class=\"descpeoject-contain form-group\">
                            <label for=\"describe_project-T\">";
        // line 56
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("*  وصف مختصر للمشروع "));
        echo " </label>
                            <span class=\"divide\"></span>
                            <textarea class=\"form-control\"  name=\"projectdescription\" id=\"describe_project-T\" required></textarea>
                        </div><!-- descpeoject-contain -->
                    </div><!-- descripe-project -->
                    <div class=\"describe-project col-sm-6\">
                        <div class=\"descpeoject-contain inputs-info-1 form-group\">
                            <label for=\"describe_project-i\">";
        // line 63
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("*    أسم المشروع"));
        echo " </label>
                            <span class=\"divide\"></span>
                            <input class=\"form-control\" name=\"projectname\" id=\"describe_project-i\" required>
                        </div><!-- descpeoject-contain -->
                        <div class=\"descpeoject-contain inputs-info-2 form-group\">
                            <label for=\"describe_project-i2\">";
        // line 68
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("*     موقع المشروع"));
        echo " </label>
                            <span class=\"divide\"></span>
\t\t\t\t\t\t\t<input class=\"form-control\" name=\"location\" id=\"describe_project-i2\" required>
                        </div><!-- descpeoject-contain -->
                        <div class=\"descpeoject-contain inputs-info-3 form-group\">
                            <label for=\"describe_project-i3\">";
        // line 73
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("*     موقع إلكترونى "));
        echo "</label>
                            <span class=\"divide\"></span>
                            <input class=\"form-control\" name=\"website\" id=\"describe_project-i3\" required>
                        </div><!-- descpeoject-contain -->
                    </div><!-- descripe-project -->
                    <div class=\"separator-contain col-xs-12\"><div class=\"centered-separator\"></div></div>
                </div><!-- row -->
            </div><!-- container -->
            
            <div class=\"support-needed-wrpaer\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"support-sort col-sm-6\">
                            <div class=\"support-sort-contain form-group\">
                               <label for=\"support_project-T\"> ";
        // line 87
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array(" *  أخبرنا المزيد عن الدعم الذي تحتاجه"));
        echo "</label>
                               <span class=\"divide\"></span>
                               <textarea class=\"form-control\" name=\"support\" id=\"suppor_project-T\" required></textarea>
                            </div><!-- support-sort-contain -->
                        </div><!-- support-sort -->
\t\t\t\t\t\t <div class=\"support-need col-sm-6\">
                        <div class=\"support-sort-contain inputs-support-1 form-group\">
                            <label for=\"support_project-i\">";
        // line 94
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("*    نوع الدعم الذي تحتاجه "));
        echo " </label>
                            <span class=\"divide\"></span>
                            <input class=\"form-control\" name=\"hear\" id=\"suport_project-i\" required>
                        </div><!-- descpeoject-contain -->
                        <div class=\"descpeoject-contain inputs-support2 form-group\">
                            <label for=\"describe_project-i2\">";
        // line 99
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("*  كيف سمعت عن مصر تبدأ"));
        echo " </label>
                            <span class=\"divide\"></span>
\t\t\t\t\t\t\t<input class=\"form-control\"  name=\"body\" id=\"support_project-i2\" required>
                        </div><!-- descpeoject-contain -->
                    </div><!-- descripe-project -->
\t\t\t\t\t\t<div class=\"separator-contain col-xs-12\"><div class=\"centered-separator\"></div></div>
                    </div><!-- row -->
                </div><!-- container -->
            </div><!-- support-needed-wrpaer -->
        </div><!-- inputs-wrap -->
    </section><!-- basic-info -->
\t<section class=\"connect-info\">
\t\t<div class=\"connect-info-wraper\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"connect-info-header col-xs-12\">
                      <h4> ";
        // line 115
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("معلومات التواصل"));
        echo "</h4>
                    </div><!-- basic-info-header -->
\t\t\t\t</div><!-- row -->
\t\t\t</div><!-- container -->
\t\t\t<div class=\"separator\"><span></span></div>
\t\t\t<div class=\"container connect-container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t    <div class=\"connect-email name-info col-sm-6 col-md-push-6\">
\t\t\t\t\t\t<div class=\"connect-email-contain inputs-connect form-group\">
\t\t\t\t\t\t\t<div class=\"descpeoject-contain inputs-connect form-group\">
    \t\t\t\t\t\t\t<label for=\"connect_project-i2\">";
        // line 125
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("*  الاسم"));
        echo " </label>
                                <span class=\"divide\"></span>\t 
    \t\t\t\t\t\t\t<input class=\"form-control\" name=\"name\" id=\"connect_project-i3\" >
                            </div><!-- descpeoject-contain -->
\t\t\t\t\t\t</div><!-- connect-email-contain --->
\t\t\t\t\t</div><!-- connect-email -->
\t\t\t\t\t<div class=\"connect-email col-sm-6 col-md-pull-6\">
\t\t\t\t\t\t<div class=\"connect-email-contain inputs-connect form-group\">
\t\t\t\t\t\t\t <div class=\"descpeoject-contain inputs-connect form-group\">
                                <label for=\"connect_project-i\">";
        // line 134
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("*      البريد الالكترونى"));
        echo " </label>
                                <span class=\"divide\"></span>
    \t\t\t\t\t\t\t<input class=\"form-control\" name=\"email\" id=\"connect_project-i\" required>
                            </div><!-- descpeoject-contain -->
\t\t\t\t\t\t</div><!-- connect-email-contain --->
\t\t\t\t\t</div><!-- connect-email -->
\t\t\t\t\t<div class=\"connect-email name-info col-sm-6 col-md-push-6\">
\t\t\t\t\t\t<div class=\"connect-email-contain inputs-connect form-group\">
\t\t\t\t\t\t    <div class=\"descpeoject-contain inputs-connect form-group\">
        \t\t\t\t\t\t<label for=\"connect_project-i5\">";
        // line 143
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("*  رقم الهاتف  "));
        echo "</label>
                                <span class=\"divide\"></span>\t 
        \t\t\t\t\t\t<input class=\"form-control\" name=\"phone\" id=\"connect_project-i5\" required>
        \t\t\t\t\t</div>
                        </div><!-- descpeoject-contain -->
                    </div>
\t\t\t\t\t<div class=\"connect-email col-sm-6 col-md-pull-6\">
\t\t\t\t\t\t<div class=\"connect-email-contain inputs-connect form-group\">
                             <button class=\"btn btn-default connect-btn\" type=\"submit\">";
        // line 151
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("إرسال"));
        echo "</button>
                         </div><!-- descpeoject-contain -->
                         <div class=\"confirm-container\">
                        <!--This will contain the confirmation when the email is successfully sent-->
                        </div>
\t\t\t\t\t</div><!-- connect-email-contain --->
\t\t\t\t</div><!-- row -->
\t\t\t</div><!-- container -->
\t\t\t</form>
\t\t\t<div class=\"separator-contain\" id=\"sep-connect\"><div class=\"centered-separator\"></div></div>
\t\t</div><!-- connect-info-wraper -->
\t</section><!-- connect-info -->";
    }

    public function getTemplateName()
    {
        return "/var/www/html/flat6labs/themes/flat6labs/pages/apply-program.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 151,  228 => 143,  216 => 134,  204 => 125,  191 => 115,  172 => 99,  164 => 94,  154 => 87,  137 => 73,  129 => 68,  121 => 63,  111 => 56,  102 => 50,  98 => 49,  88 => 42,  77 => 33,  74 => 32,  69 => 29,  66 => 28,  57 => 21,  55 => 1,  49 => 17,  40 => 10,  37 => 9,  29 => 4,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% put headerextend %}
    <div class=\"inner1-background\">
            <div class=\"inner-1-img\">
                <img src=\"{{'assets/images/header2.png'|theme }}\" />
            </div><!-- inner-1 img -->
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"inner2-background-h3 col-xs-12\">
                        <h3>{{\"تقدم للبرنامج
\" | _}} </h3>
                    </div><!-- inner2-background-h3 -->
                </div><!-- row-->
            </div><!-- container -->
        </div><!-- inner2-background-->
        <div class=\"inner1-header-links\">
            <div class=\"links-contain\">
                <a href=\"#\">{{\"تقدم لبرنامج حاضنة مصر تبداً اليوم \" | _}}</a>
            </div><!-- links-contain -->
        </div><!-- inner1-header-links -->
{% endput %}

    <section class=\"need-help\">
        <div class=\"need-help-wraper\">
          <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xs-12 need-help-header\">
                  <div class=\"need-content-header\">    
                    <h4>{{\"نموذج برنامج حاضنة مصر تبدأ
\" | _}}</h4>
                    <span class=\"divide\"></span>
                  </div><!--need-content-header -->
                  <p>{{\"نموذج برنامج حاضنة مصر تبدأ
 description\" | _}} </div><!-- need-help-header -->
            </div><!-- row -->
         </div><!-- container -->
        </div><!-- need-help-wraper -->
    </section><!-- need-help-->
    <section class=\"basic-info\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"basic-info-header col-xs-12\">
                    <h4>{{\"المعلومات الأساسية\" | _}} </h4>
                </div><!-- basic-info-header -->
            </div><!-- row -->
        </div><!-- container -->
        <div class=\"separator\"><span></span></div>
        <div class=\"inputs-wrap\">
        <form class=\"ContactUsForm\" role=\"form\"
            data-request=\"{{ contactForm }}::onMailSent\"
              data-request-update=\"'{{ contactForm }}::confirm': '.confirm-container'\">

            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"describe-project col-sm-6\">
                        <div class=\"descpeoject-contain form-group\">
                            <label for=\"describe_project-T\">{{\"*  وصف مختصر للمشروع \" | _}} </label>
                            <span class=\"divide\"></span>
                            <textarea class=\"form-control\"  name=\"projectdescription\" id=\"describe_project-T\" required></textarea>
                        </div><!-- descpeoject-contain -->
                    </div><!-- descripe-project -->
                    <div class=\"describe-project col-sm-6\">
                        <div class=\"descpeoject-contain inputs-info-1 form-group\">
                            <label for=\"describe_project-i\">{{\"*    أسم المشروع\" | _}} </label>
                            <span class=\"divide\"></span>
                            <input class=\"form-control\" name=\"projectname\" id=\"describe_project-i\" required>
                        </div><!-- descpeoject-contain -->
                        <div class=\"descpeoject-contain inputs-info-2 form-group\">
                            <label for=\"describe_project-i2\">{{\"*     موقع المشروع\" | _}} </label>
                            <span class=\"divide\"></span>
\t\t\t\t\t\t\t<input class=\"form-control\" name=\"location\" id=\"describe_project-i2\" required>
                        </div><!-- descpeoject-contain -->
                        <div class=\"descpeoject-contain inputs-info-3 form-group\">
                            <label for=\"describe_project-i3\">{{\"*     موقع إلكترونى \" | _}}</label>
                            <span class=\"divide\"></span>
                            <input class=\"form-control\" name=\"website\" id=\"describe_project-i3\" required>
                        </div><!-- descpeoject-contain -->
                    </div><!-- descripe-project -->
                    <div class=\"separator-contain col-xs-12\"><div class=\"centered-separator\"></div></div>
                </div><!-- row -->
            </div><!-- container -->
            
            <div class=\"support-needed-wrpaer\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"support-sort col-sm-6\">
                            <div class=\"support-sort-contain form-group\">
                               <label for=\"support_project-T\"> {{\" *  أخبرنا المزيد عن الدعم الذي تحتاجه\" | _}}</label>
                               <span class=\"divide\"></span>
                               <textarea class=\"form-control\" name=\"support\" id=\"suppor_project-T\" required></textarea>
                            </div><!-- support-sort-contain -->
                        </div><!-- support-sort -->
\t\t\t\t\t\t <div class=\"support-need col-sm-6\">
                        <div class=\"support-sort-contain inputs-support-1 form-group\">
                            <label for=\"support_project-i\">{{\"*    نوع الدعم الذي تحتاجه \" | _}} </label>
                            <span class=\"divide\"></span>
                            <input class=\"form-control\" name=\"hear\" id=\"suport_project-i\" required>
                        </div><!-- descpeoject-contain -->
                        <div class=\"descpeoject-contain inputs-support2 form-group\">
                            <label for=\"describe_project-i2\">{{\"*  كيف سمعت عن مصر تبدأ\" | _}} </label>
                            <span class=\"divide\"></span>
\t\t\t\t\t\t\t<input class=\"form-control\"  name=\"body\" id=\"support_project-i2\" required>
                        </div><!-- descpeoject-contain -->
                    </div><!-- descripe-project -->
\t\t\t\t\t\t<div class=\"separator-contain col-xs-12\"><div class=\"centered-separator\"></div></div>
                    </div><!-- row -->
                </div><!-- container -->
            </div><!-- support-needed-wrpaer -->
        </div><!-- inputs-wrap -->
    </section><!-- basic-info -->
\t<section class=\"connect-info\">
\t\t<div class=\"connect-info-wraper\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"connect-info-header col-xs-12\">
                      <h4> {{\"معلومات التواصل\" | _}}</h4>
                    </div><!-- basic-info-header -->
\t\t\t\t</div><!-- row -->
\t\t\t</div><!-- container -->
\t\t\t<div class=\"separator\"><span></span></div>
\t\t\t<div class=\"container connect-container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t    <div class=\"connect-email name-info col-sm-6 col-md-push-6\">
\t\t\t\t\t\t<div class=\"connect-email-contain inputs-connect form-group\">
\t\t\t\t\t\t\t<div class=\"descpeoject-contain inputs-connect form-group\">
    \t\t\t\t\t\t\t<label for=\"connect_project-i2\">{{\"*  الاسم\"|_}} </label>
                                <span class=\"divide\"></span>\t 
    \t\t\t\t\t\t\t<input class=\"form-control\" name=\"name\" id=\"connect_project-i3\" >
                            </div><!-- descpeoject-contain -->
\t\t\t\t\t\t</div><!-- connect-email-contain --->
\t\t\t\t\t</div><!-- connect-email -->
\t\t\t\t\t<div class=\"connect-email col-sm-6 col-md-pull-6\">
\t\t\t\t\t\t<div class=\"connect-email-contain inputs-connect form-group\">
\t\t\t\t\t\t\t <div class=\"descpeoject-contain inputs-connect form-group\">
                                <label for=\"connect_project-i\">{{\"*      البريد الالكترونى\" | _}} </label>
                                <span class=\"divide\"></span>
    \t\t\t\t\t\t\t<input class=\"form-control\" name=\"email\" id=\"connect_project-i\" required>
                            </div><!-- descpeoject-contain -->
\t\t\t\t\t\t</div><!-- connect-email-contain --->
\t\t\t\t\t</div><!-- connect-email -->
\t\t\t\t\t<div class=\"connect-email name-info col-sm-6 col-md-push-6\">
\t\t\t\t\t\t<div class=\"connect-email-contain inputs-connect form-group\">
\t\t\t\t\t\t    <div class=\"descpeoject-contain inputs-connect form-group\">
        \t\t\t\t\t\t<label for=\"connect_project-i5\">{{\"*  رقم الهاتف  \" | _}}</label>
                                <span class=\"divide\"></span>\t 
        \t\t\t\t\t\t<input class=\"form-control\" name=\"phone\" id=\"connect_project-i5\" required>
        \t\t\t\t\t</div>
                        </div><!-- descpeoject-contain -->
                    </div>
\t\t\t\t\t<div class=\"connect-email col-sm-6 col-md-pull-6\">
\t\t\t\t\t\t<div class=\"connect-email-contain inputs-connect form-group\">
                             <button class=\"btn btn-default connect-btn\" type=\"submit\">{{\"إرسال\" | _}}</button>
                         </div><!-- descpeoject-contain -->
                         <div class=\"confirm-container\">
                        <!--This will contain the confirmation when the email is successfully sent-->
                        </div>
\t\t\t\t\t</div><!-- connect-email-contain --->
\t\t\t\t</div><!-- row -->
\t\t\t</div><!-- container -->
\t\t\t</form>
\t\t\t<div class=\"separator-contain\" id=\"sep-connect\"><div class=\"centered-separator\"></div></div>
\t\t</div><!-- connect-info-wraper -->
\t</section><!-- connect-info -->", "/var/www/html/flat6labs/themes/flat6labs/pages/apply-program.htm", "");
    }
}
