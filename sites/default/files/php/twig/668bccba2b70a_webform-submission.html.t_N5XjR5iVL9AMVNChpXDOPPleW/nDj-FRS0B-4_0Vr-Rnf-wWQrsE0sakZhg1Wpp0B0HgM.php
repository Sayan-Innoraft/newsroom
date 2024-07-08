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

/* modules/contrib/webform/templates/webform-submission.html.twig */
class __TwigTemplate_bd8008e0297c1a855a2ed4fd8c2b6be6 extends Template
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
        // line 17
        $context["classes"] = ["webform-submission", ("webform-submission--webform-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source,         // line 19
($context["webform"] ?? null), "id", [], "method", false, false, true, 19), 19, $this->source))), ((CoreExtension::getAttribute($this->env, $this->source,         // line 20
($context["webform_submission"] ?? null), "isSticky", [], "method", false, false, true, 20)) ? ("webform-submission--sticky") : ("")), ((        // line 21
($context["view_mode"] ?? null)) ? (("webform-submission--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 21, $this->source)))) : (""))];
        // line 24
        yield "<div";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 24), 24, $this->source), "html", null, true);
        yield ">
";
        // line 25
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["navigation"] ?? null), 25, $this->source), "html", null, true);
        yield "
";
        // line 26
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["information"] ?? null), 26, $this->source), "html", null, true);
        yield "
";
        // line 27
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["submission"] ?? null), 27, $this->source), "html", null, true);
        yield "
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["webform", "webform_submission", "view_mode", "attributes", "navigation", "information", "submission"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "modules/contrib/webform/templates/webform-submission.html.twig";
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
        return array (  58 => 27,  54 => 26,  50 => 25,  45 => 24,  43 => 21,  42 => 20,  41 => 19,  40 => 17,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/webform/templates/webform-submission.html.twig", "/app/modules/contrib/webform/templates/webform-submission.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 17);
        static $filters = array("clean_class" => 19, "escape" => 24);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['clean_class', 'escape'],
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
