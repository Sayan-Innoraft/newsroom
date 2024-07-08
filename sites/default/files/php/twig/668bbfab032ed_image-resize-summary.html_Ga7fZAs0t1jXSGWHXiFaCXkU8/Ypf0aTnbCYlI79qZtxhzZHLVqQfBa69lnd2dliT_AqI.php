<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* core/modules/image/templates/image-resize-summary.html.twig */
class __TwigTemplate_4027802a52133e79def81eb9f4336bd6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "width", [], "any", false, false, true, 18) && CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "height", [], "any", false, false, true, 18))) {
            // line 19
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "width", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
            yield "×";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "height", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
        } else {
            // line 21
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "width", [], "any", false, false, true, 21)) {
                // line 22
                yield "    ";
                yield t("width @data.width", array("@data.width" => CoreExtension::getAttribute($this->env, $this->source,                 // line 23
($context["data"] ?? null), "width", [], "any", false, false, true, 23), ));
                // line 25
                yield "  ";
            } elseif (CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "height", [], "any", false, false, true, 25)) {
                // line 26
                yield "    ";
                yield t("height @data.height", array("@data.height" => CoreExtension::getAttribute($this->env, $this->source,                 // line 27
($context["data"] ?? null), "height", [], "any", false, false, true, 27), ));
                // line 29
                yield "  ";
            }
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["data"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "core/modules/image/templates/image-resize-summary.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  60 => 29,  58 => 27,  56 => 26,  53 => 25,  51 => 23,  49 => 22,  47 => 21,  42 => 19,  40 => 18,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/modules/image/templates/image-resize-summary.html.twig", "/app/core/modules/image/templates/image-resize-summary.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 18, "trans" => 22);
        static $filters = array("escape" => 19);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'trans'],
                ['escape'],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
