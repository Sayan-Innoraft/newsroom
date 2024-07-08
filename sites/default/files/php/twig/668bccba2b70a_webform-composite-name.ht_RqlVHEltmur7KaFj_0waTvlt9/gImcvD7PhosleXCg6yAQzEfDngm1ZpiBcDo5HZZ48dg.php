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

/* modules/contrib/webform/templates/webform-composite-name.html.twig */
class __TwigTemplate_4caaae33574ceb6fd1cf1b0769c6c87d extends Template
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
        // line 16
        if (($context["flexbox"] ?? null)) {
            // line 17
            yield "<div class=\"webform-name\">
  <div class=\"webform-flexbox\">
    ";
            // line 19
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "title", [], "any", false, false, true, 19)) {
                // line 20
                yield "      <div class=\"webform-flex webform-flex--2 webform-name__title\"><div class=\"webform-flex--container\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "title", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
                yield "</div></div>
    ";
            }
            // line 22
            yield "    ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "first", [], "any", false, false, true, 22)) {
                // line 23
                yield "      <div class=\"webform-flex webform-flex--3 webform-name__first\"><div class=\"webform-flex--container\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "first", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
                yield "</div></div>
    ";
            }
            // line 25
            yield "    ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "middle", [], "any", false, false, true, 25)) {
                // line 26
                yield "      <div class=\"webform-flex webform-flex--2 webform-name__middle\"><div class=\"webform-flex--container\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "middle", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
                yield "</div></div>
    ";
            }
            // line 28
            yield "    ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "last", [], "any", false, false, true, 28)) {
                // line 29
                yield "      <div class=\"webform-flex webform-flex--3 webform-name__last\"><div class=\"webform-flex--container\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "last", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
                yield "</div></div>
    ";
            }
            // line 31
            yield "    ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "suffix", [], "any", false, false, true, 31)) {
                // line 32
                yield "      <div class=\"webform-flex webform-flex--1 webform-name__suffix\"><div class=\"webform-flex--container\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "suffix", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
                yield "</div></div>
    ";
            }
            // line 34
            yield "    ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "degree", [], "any", false, false, true, 34)) {
                // line 35
                yield "      <div class=\"webform-flex webform-flex--1 webform-name__degree\"><div class=\"webform-flex--container\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "degree", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
                yield "</div></div>
    ";
            }
            // line 37
            yield "  </div>
</div>
";
        } else {
            // line 40
            yield "  ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 40, $this->source), "html", null, true);
            yield "
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["flexbox", "content"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "modules/contrib/webform/templates/webform-composite-name.html.twig";
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
        return array (  104 => 40,  99 => 37,  93 => 35,  90 => 34,  84 => 32,  81 => 31,  75 => 29,  72 => 28,  66 => 26,  63 => 25,  57 => 23,  54 => 22,  48 => 20,  46 => 19,  42 => 17,  40 => 16,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/webform/templates/webform-composite-name.html.twig", "/app/modules/contrib/webform/templates/webform-composite-name.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 16);
        static $filters = array("escape" => 20);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
