<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__10ec63eda641a1b4c01b90da31efa5c0e6c63138ace706fc4b1039770a8ce4c8 */
class __TwigTemplate_3486c224e96a910f181d14708ece9af7f9cd6485a7dcf6c3aab3db6ec941937b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo ($context["form_title"] ?? null);
    }

    public function getTemplateName()
    {
        return "__string_template__10ec63eda641a1b4c01b90da31efa5c0e6c63138ace706fc4b1039770a8ce4c8";
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{{ form_title }}", "__string_template__10ec63eda641a1b4c01b90da31efa5c0e6c63138ace706fc4b1039770a8ce4c8", "");
    }
}
