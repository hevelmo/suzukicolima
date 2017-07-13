<?php

/* contacto/container.twig */
class __TwigTemplate_7fb7e76ad218d513cd8f851e26d7163fb5ae1c20320bdcb7567e8c4084536405 extends Twig_Template
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
    <div class=\"promos-wrapper-contact\">
        <div class=\"promos-container-contact\">
            <div class=\"promotion-contact\">
                <div class=\"promo-content-contact\">
                    <div class=\"description\">
                        <p class=\"description_title\">CONTÁCTANOS</p>
                        <p>Envía tus comentarios o contáctanos directamente en nuestras redes sociales.</p>
                    </div>
                </div>
                <div class=\"contact_main\">
                    <div id=\"content-section-form-contact\">
                        ";
        // line 13
        $this->loadTemplate("contacto/container.twig", "contacto/container.twig", 13, "1622225155")->display($context);
        // line 14
        echo "                    </div>
                    <div class=\"contact_sidebar\">
                        <div class=\"contact_social\">
                            <p class=\"contact_social_title\">Domicilio Colima</p>
                            <p>Av. Felipe Sevilla No. 536.</p>
                            <p>Col. Lomas de Circunvalación. Colima, Colima.</p>
                            <p>Tel. 01(31)2316-3263</p>
                            <p>CP. 28010</p>
                        <br>
                            <p class=\"contact_social_title\">Domicilio Manzanillo</p>
                            <p>BLV. Miguel de la Madrid Hurtado 1058</p>
                            <p>Col. Soleares Manzanillo, Colima</p>
                            <p>Tel. 01 314 33 30 370</p>
                        <br>
                            <p class=\"contact_social_title\">Redes sociales</p>
                            <p>Comparte tus experiencias con la comunidad Suzuki</p>
                            <div class=\"social fb\"><a onclick=\"ga('send', 'event', 'Social', 'Liga_externa', 'Contacto_Facebook_Colima');\" href=\"https://www.facebook.com/SuzukiColimaOficial/\" target=\"_blank\">Facebook Colima</a></div>
                            <div class=\"social fb\" style=\"margin-top: 10px;\"><a onclick=\"ga('send', 'event', 'Social', 'Liga_externa', 'Contacto_Facebook_Manzanillo');\" href=\"https://www.facebook.com/SuzukiManzanilloOficial/\" target=\"_blank\">Facebook Manzanillo</a></div>
                            <div class=\"social in\"><a onclick=\"ga('send', 'event', 'Social', 'Liga_externa', 'Contacto_Instagram_Gdl');\" href=\"https://www.instagram.com/suzukiguadalajara/\" target=\"_blank\">Instagram</a></div>
                        </div>
                    </div>
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
        return "contacto/container.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 14,  33 => 13,  19 => 1,);
    }
}


/* contacto/container.twig */
class __TwigTemplate_7fb7e76ad218d513cd8f851e26d7163fb5ae1c20320bdcb7567e8c4084536405_1622225155 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 13
        $this->parent = $this->loadTemplate("contacto/contact_form.twig", "contacto/container.twig", 13);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "contacto/contact_form.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "contacto/container.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 13,  35 => 14,  33 => 13,  19 => 1,);
    }
}
/* <div id="content-content">*/
/*     <div class="promos-wrapper-contact">*/
/*         <div class="promos-container-contact">*/
/*             <div class="promotion-contact">*/
/*                 <div class="promo-content-contact">*/
/*                     <div class="description">*/
/*                         <p class="description_title">CONTÁCTANOS</p>*/
/*                         <p>Envía tus comentarios o contáctanos directamente en nuestras redes sociales.</p>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="contact_main">*/
/*                     <div id="content-section-form-contact">*/
/*                         {% embed "contacto/contact_form.twig" %}{% endembed %}*/
/*                     </div>*/
/*                     <div class="contact_sidebar">*/
/*                         <div class="contact_social">*/
/*                             <p class="contact_social_title">Domicilio Colima</p>*/
/*                             <p>Av. Felipe Sevilla No. 536.</p>*/
/*                             <p>Col. Lomas de Circunvalación. Colima, Colima.</p>*/
/*                             <p>Tel. 01(31)2316-3263</p>*/
/*                             <p>CP. 28010</p>*/
/*                         <br>*/
/*                             <p class="contact_social_title">Domicilio Manzanillo</p>*/
/*                             <p>BLV. Miguel de la Madrid Hurtado 1058</p>*/
/*                             <p>Col. Soleares Manzanillo, Colima</p>*/
/*                             <p>Tel. 01 314 33 30 370</p>*/
/*                         <br>*/
/*                             <p class="contact_social_title">Redes sociales</p>*/
/*                             <p>Comparte tus experiencias con la comunidad Suzuki</p>*/
/*                             <div class="social fb"><a onclick="ga('send', 'event', 'Social', 'Liga_externa', 'Contacto_Facebook_Colima');" href="https://www.facebook.com/SuzukiColimaOficial/" target="_blank">Facebook Colima</a></div>*/
/*                             <div class="social fb" style="margin-top: 10px;"><a onclick="ga('send', 'event', 'Social', 'Liga_externa', 'Contacto_Facebook_Manzanillo');" href="https://www.facebook.com/SuzukiManzanilloOficial/" target="_blank">Facebook Manzanillo</a></div>*/
/*                             <div class="social in"><a onclick="ga('send', 'event', 'Social', 'Liga_externa', 'Contacto_Instagram_Gdl');" href="https://www.instagram.com/suzukiguadalajara/" target="_blank">Instagram</a></div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="clearfix"></div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
