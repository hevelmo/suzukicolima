<?php

/* modelos/container.twig */
class __TwigTemplate_6b02ec4c1dc1007e967d16da3bfdd26527a63ceb7ed49546d4be68e0030a4fa5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div id=\"content-content\">
    <div class=\"promos-wrapper-models\">
        <div class=\"promos-container-models\">
            <div id=\"promocion-models-section\" class=\"promotion-models\">
                <div class=\"promo-content-models\">
                    <div class=\"description\">
                        <p class=\"description_title\">GAMA DE MODELOS</p>
                        ";
        // line 9
        echo "                    </div>
                </div>
                <div class=\"models_main\">
                    <div id=\"content-sections-models\">
                        ";
        // line 13
        $this->loadTemplate("modelos/container.twig", "modelos/container.twig", 13, "18639450")->display($context);
        // line 14
        echo "                    </div>
                    <div class=\"clearfix\"></div>
                </div>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modelos/container.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 14,  34 => 13,  28 => 9,  19 => 1,);
    }
}


/* modelos/container.twig */
class __TwigTemplate_6b02ec4c1dc1007e967d16da3bfdd26527a63ceb7ed49546d4be68e0030a4fa5_18639450 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 13
        $this->parent = $this->loadTemplate("modelos/gama_models.twig", "modelos/container.twig", 13);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "modelos/gama_models.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "modelos/container.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 13,  36 => 14,  34 => 13,  28 => 9,  19 => 1,);
    }
}
/* <div id="content-content">*/
/*     <div class="promos-wrapper-models">*/
/*         <div class="promos-container-models">*/
/*             <div id="promocion-models-section" class="promotion-models">*/
/*                 <div class="promo-content-models">*/
/*                     <div class="description">*/
/*                         <p class="description_title">GAMA DE MODELOS</p>*/
/*                         {#<p>En tres sencillos pasos podrás obtener una cotización y un asesor listo para ayudarte.</p>#}*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="models_main">*/
/*                     <div id="content-sections-models">*/
/*                         {% embed "modelos/gama_models.twig" %}{% endembed %}*/
/*                     </div>*/
/*                     <div class="clearfix"></div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
