<?php

/* PgGsbFraisBundle:Home:connexion.html.twig */
class __TwigTemplate_0b0d6671b10c8c265e75cf9de36dd3f55b81b86e0b71dfe916f7cedd739e70f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PgGsbFraisBundle::layout.html.twig", "PgGsbFraisBundle:Home:connexion.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'bloc1' => array($this, 'block_bloc1'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PgGsbFraisBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c085b3ee0110d80e38170e9b58c938b49a7a76b927d3bafed64506f65fc780ae = $this->env->getExtension("native_profiler");
        $__internal_c085b3ee0110d80e38170e9b58c938b49a7a76b927d3bafed64506f65fc780ae->enter($__internal_c085b3ee0110d80e38170e9b58c938b49a7a76b927d3bafed64506f65fc780ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PgGsbFraisBundle:Home:connexion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c085b3ee0110d80e38170e9b58c938b49a7a76b927d3bafed64506f65fc780ae->leave($__internal_c085b3ee0110d80e38170e9b58c938b49a7a76b927d3bafed64506f65fc780ae_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_50f9e2de82af6e487660327286f8ed2a369d7d8932a2e4c8efb3d72724649fc0 = $this->env->getExtension("native_profiler");
        $__internal_50f9e2de82af6e487660327286f8ed2a369d7d8932a2e4c8efb3d72724649fc0->enter($__internal_50f9e2de82af6e487660327286f8ed2a369d7d8932a2e4c8efb3d72724649fc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo " ";
        $this->displayBlock('bloc1', $context, $blocks);
        // line 24
        echo "    
    ";
        
        $__internal_50f9e2de82af6e487660327286f8ed2a369d7d8932a2e4c8efb3d72724649fc0->leave($__internal_50f9e2de82af6e487660327286f8ed2a369d7d8932a2e4c8efb3d72724649fc0_prof);

    }

    // line 3
    public function block_bloc1($context, array $blocks = array())
    {
        $__internal_835da9b3371afb7118175cd63487f569c1aec1b13fcb117431c6fcfa8af7ce11 = $this->env->getExtension("native_profiler");
        $__internal_835da9b3371afb7118175cd63487f569c1aec1b13fcb117431c6fcfa8af7ce11->enter($__internal_835da9b3371afb7118175cd63487f569c1aec1b13fcb117431c6fcfa8af7ce11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bloc1"));

        echo " 
 <div id=\"contenu\">
      <h2>Identification utilisateur</h2>
      ";
        // line 6
        if (array_key_exists("message", $context)) {
            // line 7
            echo "            <div class =\"erreur\">
            <ul>";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "</ul></div>
      ";
        }
        // line 10
        echo "<form method=\"POST\" action=\"";
        echo $this->env->getExtension('routing')->getPath("pg_gsb_frais_validerconnexion");
        echo "\">
        <p>
          <label for=\"nom\">Login*</label>
           <input id=\"login\" type=\"text\" name=\"login\"  size=\"30\" maxlength=\"45\">
        </p>
\t<p>
            <label for=\"mdp\">Mot de passe*</label>
            <input id=\"mdp\"  type=\"password\"  name=\"mdp\" size=\"30\" maxlength=\"45\">
        </p>
         <input type=\"submit\" value=\"Valider\" name=\"valider\">
         <input type=\"reset\" value=\"Annuler\" name=\"annuler\"> 
      </p>
</form>
</div>
    ";
        
        $__internal_835da9b3371afb7118175cd63487f569c1aec1b13fcb117431c6fcfa8af7ce11->leave($__internal_835da9b3371afb7118175cd63487f569c1aec1b13fcb117431c6fcfa8af7ce11_prof);

    }

    public function getTemplateName()
    {
        return "PgGsbFraisBundle:Home:connexion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 10,  67 => 8,  64 => 7,  62 => 6,  52 => 3,  44 => 24,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends "PgGsbFraisBundle::layout.html.twig" %}*/
/* {% block body %}*/
/*  {% block bloc1 %} */
/*  <div id="contenu">*/
/*       <h2>Identification utilisateur</h2>*/
/*       {%if(message is defined )%}*/
/*             <div class ="erreur">*/
/*             <ul>{{message}}</ul></div>*/
/*       {%endif%}*/
/* <form method="POST" action="{{path('pg_gsb_frais_validerconnexion')}}">*/
/*         <p>*/
/*           <label for="nom">Login*</label>*/
/*            <input id="login" type="text" name="login"  size="30" maxlength="45">*/
/*         </p>*/
/* 	<p>*/
/*             <label for="mdp">Mot de passe*</label>*/
/*             <input id="mdp"  type="password"  name="mdp" size="30" maxlength="45">*/
/*         </p>*/
/*          <input type="submit" value="Valider" name="valider">*/
/*          <input type="reset" value="Annuler" name="annuler"> */
/*       </p>*/
/* </form>*/
/* </div>*/
/*     {% endblock %}    */
/*     {% endblock%}*/
/*      */
