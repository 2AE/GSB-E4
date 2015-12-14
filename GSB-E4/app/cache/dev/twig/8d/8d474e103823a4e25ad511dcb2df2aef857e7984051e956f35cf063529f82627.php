<?php

/* PgGsbFraisBundle::layout.html.twig */
class __TwigTemplate_f7415b62879b87dbfb8965119ba56e066b044ac65a8550618f0bae317c11b0b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
            'bloc1' => array($this, 'block_bloc1'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_26fb7033a96174a7d4d7cee726a13ec67dabc05f2dbeeb9cef6c5f5d290fb203 = $this->env->getExtension("native_profiler");
        $__internal_26fb7033a96174a7d4d7cee726a13ec67dabc05f2dbeeb9cef6c5f5d290fb203->enter($__internal_26fb7033a96174a7d4d7cee726a13ec67dabc05f2dbeeb9cef6c5f5d290fb203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PgGsbFraisBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\"
       \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"fr\" lang=\"fr\">
  <head>
    <title>Intranet du Laboratoire Galaxy-Swiss Bourdin</title>
    <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/gsbfrais/styles/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"./images/favicon.ico\" />
  </head>
  <body>
    <div id=\"page\">
      <div id=\"entete\">
        <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/gsbfrais/images/logo.jpg"), "html", null, true);
        echo "\" id=\"logoGSB\" alt=\"Laboratoire Galaxy-Swiss Bourdin\" title=\"Laboratoire Galaxy-Swiss Bourdin\" />
        <h1>Suivi du remboursement des frais</h1>
      </div>
     </div>
          ";
        // line 17
        $this->displayBlock('menu', $context, $blocks);
        // line 19
        echo "          ";
        $this->displayBlock('body', $context, $blocks);
        // line 23
        echo "    </body>
  </html>

          
          
";
        
        $__internal_26fb7033a96174a7d4d7cee726a13ec67dabc05f2dbeeb9cef6c5f5d290fb203->leave($__internal_26fb7033a96174a7d4d7cee726a13ec67dabc05f2dbeeb9cef6c5f5d290fb203_prof);

    }

    // line 17
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2effb92ccd8d6c3a94180e86ba5f5fdd74e66c637b2b5dff08f80701c9f013e3 = $this->env->getExtension("native_profiler");
        $__internal_2effb92ccd8d6c3a94180e86ba5f5fdd74e66c637b2b5dff08f80701c9f013e3->enter($__internal_2effb92ccd8d6c3a94180e86ba5f5fdd74e66c637b2b5dff08f80701c9f013e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 18
        echo "          ";
        
        $__internal_2effb92ccd8d6c3a94180e86ba5f5fdd74e66c637b2b5dff08f80701c9f013e3->leave($__internal_2effb92ccd8d6c3a94180e86ba5f5fdd74e66c637b2b5dff08f80701c9f013e3_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_a2993d21052cbcb8c92ee67395bc59d23ba71c99945a7efc911756a0032d6c20 = $this->env->getExtension("native_profiler");
        $__internal_a2993d21052cbcb8c92ee67395bc59d23ba71c99945a7efc911756a0032d6c20->enter($__internal_a2993d21052cbcb8c92ee67395bc59d23ba71c99945a7efc911756a0032d6c20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " 
                 ";
        // line 20
        $this->displayBlock('bloc1', $context, $blocks);
        // line 22
        echo "          ";
        
        $__internal_a2993d21052cbcb8c92ee67395bc59d23ba71c99945a7efc911756a0032d6c20->leave($__internal_a2993d21052cbcb8c92ee67395bc59d23ba71c99945a7efc911756a0032d6c20_prof);

    }

    // line 20
    public function block_bloc1($context, array $blocks = array())
    {
        $__internal_70f653ddc66ca5208d56d9e060ee059c23d6c3f3014e4295f36a07631941b5c0 = $this->env->getExtension("native_profiler");
        $__internal_70f653ddc66ca5208d56d9e060ee059c23d6c3f3014e4295f36a07631941b5c0->enter($__internal_70f653ddc66ca5208d56d9e060ee059c23d6c3f3014e4295f36a07631941b5c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bloc1"));

        // line 21
        echo "                 ";
        
        $__internal_70f653ddc66ca5208d56d9e060ee059c23d6c3f3014e4295f36a07631941b5c0->leave($__internal_70f653ddc66ca5208d56d9e060ee059c23d6c3f3014e4295f36a07631941b5c0_prof);

    }

    public function getTemplateName()
    {
        return "PgGsbFraisBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 21,  96 => 20,  89 => 22,  87 => 20,  79 => 19,  72 => 18,  66 => 17,  54 => 23,  51 => 19,  49 => 17,  42 => 13,  33 => 7,  25 => 1,);
    }
}
/* <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"*/
/*        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">*/
/* <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">*/
/*   <head>*/
/*     <title>Intranet du Laboratoire Galaxy-Swiss Bourdin</title>*/
/*     <meta http-equiv="content-type" content="text/html; charset=utf-8" />*/
/*     <link href="{{ asset('bundles/gsbfrais/styles/styles.css') }}" rel="stylesheet" type="text/css" />*/
/*     <link rel="shortcut icon" type="image/x-icon" href="./images/favicon.ico" />*/
/*   </head>*/
/*   <body>*/
/*     <div id="page">*/
/*       <div id="entete">*/
/*         <img src="{{ asset('bundles/gsbfrais/images/logo.jpg')}}" id="logoGSB" alt="Laboratoire Galaxy-Swiss Bourdin" title="Laboratoire Galaxy-Swiss Bourdin" />*/
/*         <h1>Suivi du remboursement des frais</h1>*/
/*       </div>*/
/*      </div>*/
/*           {% block menu %}*/
/*           {% endblock %}*/
/*           {% block body %} */
/*                  {% block bloc1 %}*/
/*                  {% endblock %}*/
/*           {% endblock %}*/
/*     </body>*/
/*   </html>*/
/* */
/*           */
/*           */
/* */
