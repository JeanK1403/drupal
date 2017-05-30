<?php

/* modules/commerce/modules/order/templates/commerce-order-total-summary.html.twig */
class __TwigTemplate_d4dc4974322a35611a0b97ab9b1795993d1434a03265dd914d160173bde1f7d8 extends Twig_Template
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
        $tags = array("for" => 25);
        $filters = array("t" => 23, "commerce_price_format" => 23);
        $functions = array("attach_library" => 20);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('for'),
                array('t', 'commerce_price_format'),
                array('attach_library')
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 20
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->attachLibrary("commerce_order/total_summary"), "html", null, true));
        echo "
<div";
        // line 21
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo ">
  <div class=\"order-total-line order-total-line__subtotal\">
    <span class=\"order-total-line-label\">";
        // line 23
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Subtotal")));
        echo " </span><span class=\"order-total-line-value\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('commerce_price.twig_extenstion')->formatPrice($this->getAttribute((isset($context["totals"]) ? $context["totals"] : null), "subtotal", array())), "html", null, true));
        echo "</span>
  </div>
  ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["totals"]) ? $context["totals"] : null), "adjustments", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["adjustment"]) {
            // line 26
            echo "    <div class=\"order-total-line order-total-line__adjustment\">
      <span class=\"order-total-line-label\">";
            // line 27
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["adjustment"], "label", array()), "html", null, true));
            echo " </span><span class=\"order-total-line-value\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('commerce_price.twig_extenstion')->formatPrice($this->getAttribute($context["adjustment"], "total", array())), "html", null, true));
            echo "</span>
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['adjustment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "  <div class=\"order-total-line order-total-line__total\">
    <span class=\"order-total-line-label\">";
        // line 31
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Total")));
        echo " </span><span class=\"order-total-line-value\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('commerce_price.twig_extenstion')->formatPrice($this->getAttribute((isset($context["totals"]) ? $context["totals"] : null), "total", array())), "html", null, true));
        echo "</span>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/commerce/modules/order/templates/commerce-order-total-summary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 31,  77 => 30,  66 => 27,  63 => 26,  59 => 25,  52 => 23,  47 => 21,  43 => 20,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Default order total summary template.
 *
 * Available variables:
 * - attributes: HTML attributes for the wrapper.
 * - totals: An array of order totals values with the following keys:
 *   - subtotal: The order subtotal price.
 *   - adjustments: An array of adjustment totals:
 *     - type: The adjustment type.
 *     - label: The adjustment label.
 *     - total: The adjustment total price.
 *     - weight: The adjustment weight, taken from the adjustment type.
 *   - total: The order total price.
 *
 * @ingroup themeable
 */
#}
{{ attach_library('commerce_order/total_summary') }}
<div{{ attributes }}>
  <div class=\"order-total-line order-total-line__subtotal\">
    <span class=\"order-total-line-label\">{{ 'Subtotal'|t }} </span><span class=\"order-total-line-value\">{{ totals.subtotal|commerce_price_format }}</span>
  </div>
  {% for adjustment in totals.adjustments %}
    <div class=\"order-total-line order-total-line__adjustment\">
      <span class=\"order-total-line-label\">{{ adjustment.label }} </span><span class=\"order-total-line-value\">{{ adjustment.total|commerce_price_format }}</span>
    </div>
  {% endfor %}
  <div class=\"order-total-line order-total-line__total\">
    <span class=\"order-total-line-label\">{{ 'Total'|t }} </span><span class=\"order-total-line-value\">{{ totals.total|commerce_price_format }}</span>
  </div>
</div>
";
    }
}
