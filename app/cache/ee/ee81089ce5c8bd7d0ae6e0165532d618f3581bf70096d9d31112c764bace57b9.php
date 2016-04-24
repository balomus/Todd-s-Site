<?php

/* editcontent/fields/_select.twig */
class __TwigTemplate_4f562217c060a832d434b18f984a1ae787fbc35b6e31c7e8c168aca6b7b703cc extends Twig_Template
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
        // line 2
        $context["option"] = array("class" => (($this->getAttribute(        // line 3
(isset($context["field"]) ? $context["field"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class", array()), "")) : ("")), "label" => (($this->getAttribute(        // line 4
(isset($context["field"]) ? $context["field"] : null), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array()), "")) : ("")), "multiple" => ($this->getAttribute(        // line 5
(isset($context["field"]) ? $context["field"] : null), "multiple", array(), "any", true, true) && $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "multiple", array())), "values" => (($this->getAttribute(        // line 6
(isset($context["field"]) ? $context["field"] : null), "values", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "values", array()), array())) : (array())), "info" => (($this->getAttribute(        // line 7
(isset($context["field"]) ? $context["field"] : null), "info", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "info", array()), "")) : ("")));
        // line 9
        echo "
";
        // line 11
        echo "
";
        // line 12
        if (twig_test_iterable($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "values", array()))) {
            // line 13
            echo "    ";
            $context["values"] = $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "values", array());
        } else {
            // line 15
            echo "    ";
            $context["lookuptype"] = $this->env->getExtension('Bolt')->first(twig_split_filter($this->env, $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "values", array()), "/"));
            // line 16
            echo "    ";
            $context["lookupfield"] = $this->env->getExtension('Bolt')->last(twig_split_filter($this->env, $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "values", array()), "/"));
            // line 17
            echo "    ";
            if (twig_in_filter(",", (isset($context["lookupfield"]) ? $context["lookupfield"] : null))) {
                // line 18
                echo "        ";
                $context["lookupfield"] = twig_split_filter($this->env, (isset($context["lookupfield"]) ? $context["lookupfield"] : null), ",");
                // line 19
                echo "    ";
            }
            // line 20
            echo "    ";
            $context["sortingorder"] = (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "sort", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "sort", array()), $this->env->getExtension('Bolt')->first((isset($context["lookupfield"]) ? $context["lookupfield"] : null)))) : ($this->env->getExtension('Bolt')->first((isset($context["lookupfield"]) ? $context["lookupfield"] : null))));
            // line 21
            echo "    ";
            $context["querylimit"] = (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "limit", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "limit", array()), 500)) : (500));
            // line 22
            echo "    ";
            $context["wherefilter"] = (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "filter", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "filter", array()), array())) : (array()));
            // line 23
            echo "    ";
            $template_storage = new Bolt\Storage($context['app']);
            $context['lookups'] =             $template_storage->getContent((isset($context["lookuptype"]) ? $context["lookuptype"] : null), array("order" => (isset($context["sortingorder"]) ? $context["sortingorder"] : null), "hydrate" => false, "limit" => (isset($context["querylimit"]) ? $context["querylimit"] : null)), $pager, (isset($context["wherefilter"]) ? $context["wherefilter"] : null) );
            // line 24
            echo "    ";
            $context["values"] = $this->env->getExtension('Bolt')->selectField((isset($context["lookups"]) ? $context["lookups"] : null), (isset($context["lookupfield"]) ? $context["lookupfield"] : null), $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "multiple", array()), (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "keys", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "keys", array()), "id")) : ("id")));
        }
        // line 26
        echo "
";
        // line 28
        $context["selection"] = (($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array(), "any", false, true), "get", array(0 => (isset($context["contentkey"]) ? $context["contentkey"] : null)), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array(), "any", false, true), "get", array(0 => (isset($context["contentkey"]) ? $context["contentkey"] : null)), "method"), null)) : (null));
        // line 29
        if ( !twig_test_iterable((isset($context["selection"]) ? $context["selection"] : null))) {
            // line 30
            echo "    ";
            $context["selection"] = array(0 => (isset($context["selection"]) ? $context["selection"] : null));
        }
        // line 32
        echo "
";
        // line 34
        if (twig_in_filter($this->env->getExtension('Bolt')->first((isset($context["selection"]) ? $context["selection"] : null)), twig_get_array_keys_filter((isset($context["values"]) ? $context["values"] : null)))) {
            // line 35
            echo "    ";
            $context["onlyids"] = true;
        } else {
            // line 37
            echo "    ";
            $context["onlyids"] = false;
        }
        // line 39
        echo "
";
        // line 40
        $context["attr_select"] = array("class" => $this->getAttribute(        // line 41
(isset($context["option"]) ? $context["option"] : null), "class", array()), "id" =>         // line 42
(isset($context["key"]) ? $context["key"] : null), "multiple" => $this->getAttribute(        // line 43
(isset($context["option"]) ? $context["option"] : null), "multiple", array()), "name" => (($this->getAttribute(        // line 44
(isset($context["option"]) ? $context["option"] : null), "multiple", array())) ? (((isset($context["name"]) ? $context["name"] : null) . "[]")) : ((isset($context["name"]) ? $context["name"] : null))));
        // line 46
        echo "
";
        // line 48
        if ((($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "autocomplete", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "autocomplete", array()), false)) : (false))) {
            // line 49
            echo "    ";
            $context["attr_select"] = twig_array_merge((isset($context["attr_select"]) ? $context["attr_select"] : null), array("class" => ""));
            // line 50
            echo "    ";
            $context["attr_select"] = twig_array_merge((isset($context["attr_select"]) ? $context["attr_select"] : null), array("style" => "width: 100%;"));
        }
        // line 52
        echo "
";
        // line 53
        if ((($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "sortable", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "sortable", array()), false)) : (false))) {
            // line 54
            echo "    ";
            $context["oldclass"] = $this->getAttribute((isset($context["attr_select"]) ? $context["attr_select"] : null), "class", array());
            // line 55
            echo "    ";
            $context["attr_select"] = twig_array_merge((isset($context["attr_select"]) ? $context["attr_select"] : null), array("class" => ((isset($context["oldclass"]) ? $context["oldclass"] : null) . " select2-sortable wide")));
            // line 56
            echo "    
    ";
            // line 57
            $context["newvals"] = array();
            // line 58
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["selection"]) ? $context["selection"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["sel"]) {
                // line 59
                echo "        ";
                $context["newvals"] = twig_array_merge((isset($context["newvals"]) ? $context["newvals"] : null), array($context["key"] => $this->getAttribute((isset($context["values"]) ? $context["values"] : null), $context["sel"], array(), "array")));
                // line 60
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['sel'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "    ";
            $context["values"] = call_user_func_array($this->env->getFunction('unique')->getCallable(), array((isset($context["newvals"]) ? $context["newvals"] : null), (isset($context["values"]) ? $context["values"] : null)));
        }
        // line 64
        echo "
<fieldset class=\"multiselect\">

    <label class=\"col-sm-3 control-label\">";
        // line 67
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "info", array())) ? ($this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "infopop", array(0 => (isset($context["labelkey"]) ? $context["labelkey"] : null), 1 => $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "info", array())), "method")) : ((isset($context["labelkey"]) ? $context["labelkey"] : null))), "html", null, true);
        echo "</label>
    <div class=\"col-sm-9";
        // line 68
        if ((($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "sortable", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "sortable", array()), false)) : (false))) {
            echo " sortable-select2-container";
        }
        echo "\">
        <select";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "attr", array(0 => (isset($context["attr_select"]) ? $context["attr_select"] : null)), "method"), "html", null, true);
        echo ">
            ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["values"]) ? $context["values"] : null));
        foreach ($context['_seq'] as $context["id"] => $context["value"]) {
            // line 71
            echo "                ";
            $context["is_array"] = (twig_test_iterable($context["value"]) && (twig_length_filter($this->env, $context["value"]) > 1));
            // line 72
            echo "                ";
            $context["attr_opt"] = array("value" =>             // line 73
$context["id"], "selected" => (twig_in_filter(            // line 74
$context["id"], (isset($context["selection"]) ? $context["selection"] : null)) || ( !(isset($context["onlyids"]) ? $context["onlyids"] : null) && twig_in_filter((((isset($context["is_array"]) ? $context["is_array"] : null)) ? ($this->getAttribute($context["value"], 0, array(), "array")) : ($context["value"])), (isset($context["selection"]) ? $context["selection"] : null)))), "data-order" =>             // line 75
(isset($context["ordering"]) ? $context["ordering"] : null));
            // line 77
            echo "
                <option";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "attr", array(0 => (isset($context["attr_opt"]) ? $context["attr_opt"] : null)), "method"), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, (((isset($context["is_array"]) ? $context["is_array"] : null)) ? (twig_join_filter(twig_slice($this->env, $context["value"], 0, null), " / ")) : ($context["value"])), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "        </select>

        ";
        // line 82
        if ($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "multiple", array())) {
            // line 83
            echo "        <div>";
            // line 84
            echo "            <a href=\"#\" class=\"btn btn-default btn-xs\" onclick=\"jQuery('#";
            echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
            echo " option').prop('selected', true); return false;\">
                <i class=\"fa fa-fw fa-check-square-o\"></i>";
            // line 85
            echo $this->env->getExtension('Bolt')->trans("Select all");
            echo "
            </a>
            <a href=\"#\" class=\"btn btn-default btn-xs\" onclick=\"jQuery('#";
            // line 87
            echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
            echo " option').prop('selected', false); return false;\">
                <i class=\"fa fa-fw fa-square-o\"></i>";
            // line 88
            echo $this->env->getExtension('Bolt')->trans("Select none");
            echo "
            </a>
        </div>
        ";
        }
        // line 92
        echo "    </div>
    
    ";
        // line 94
        if ((($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "sortable", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "sortable", array()), false)) : (false))) {
            // line 95
            echo "        <script>
            \$(function() {
                \$('#";
            // line 97
            echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
            echo "').select2Sortable({});
            });
        </script>
    ";
        } elseif ((($this->getAttribute(        // line 100
(isset($context["field"]) ? $context["field"] : null), "autocomplete", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "autocomplete", array()), false)) : (false))) {
            // line 101
            echo "        <script>
            \$(function() {
                \$('#";
            // line 103
            echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
            echo "').select2({
                    placeholder: \"";
            // line 104
            echo $this->env->getExtension('Bolt')->trans("(none)");
            echo "\",
                    allowClear: true
                });
            });
        </script>
    ";
        }
        // line 109
        echo "    

</fieldset>
";
    }

    public function getTemplateName()
    {
        return "editcontent/fields/_select.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 109,  249 => 104,  245 => 103,  241 => 101,  239 => 100,  233 => 97,  229 => 95,  227 => 94,  223 => 92,  216 => 88,  212 => 87,  207 => 85,  202 => 84,  200 => 83,  198 => 82,  194 => 80,  184 => 78,  181 => 77,  179 => 75,  178 => 74,  177 => 73,  175 => 72,  172 => 71,  168 => 70,  164 => 69,  158 => 68,  154 => 67,  149 => 64,  145 => 61,  139 => 60,  136 => 59,  131 => 58,  129 => 57,  126 => 56,  123 => 55,  120 => 54,  118 => 53,  115 => 52,  111 => 50,  108 => 49,  106 => 48,  103 => 46,  101 => 44,  100 => 43,  99 => 42,  98 => 41,  97 => 40,  94 => 39,  90 => 37,  86 => 35,  84 => 34,  81 => 32,  77 => 30,  75 => 29,  73 => 28,  70 => 26,  66 => 24,  62 => 23,  59 => 22,  56 => 21,  53 => 20,  50 => 19,  47 => 18,  44 => 17,  41 => 16,  38 => 15,  34 => 13,  32 => 12,  29 => 11,  26 => 9,  24 => 7,  23 => 6,  22 => 5,  21 => 4,  20 => 3,  19 => 2,);
    }
}
/* {#=== OPTIONS ========================================================================================================#}*/
/* {% set option = {*/
/*     class:     field.class|default(''),*/
/*     label:     field.label|default(''),*/
/*     multiple:  (field.multiple is defined and field.multiple),*/
/*     values:    field.values|default([]),*/
/*     info:      field.info|default('')*/
/* } %}*/
/* */
/* {#=== INIT ===========================================================================================================#}*/
/* */
/* {% if option.values is iterable %}*/
/*     {% set values = option.values %}*/
/* {% else %}*/
/*     {% set lookuptype = option.values|split('/')|first %}*/
/*     {% set lookupfield = option.values|split('/')|last %}*/
/*     {% if ',' in lookupfield %}*/
/*         {% set lookupfield = lookupfield|split(',') %}*/
/*     {% endif %}*/
/*     {% set sortingorder = field.sort|default(lookupfield|first) %}*/
/*     {% set querylimit = field.limit|default(500) %}*/
/*     {% set wherefilter = field.filter|default({}) %}*/
/*     {% setcontent lookups = lookuptype where wherefilter order sortingorder nohydrate limit querylimit %}*/
/*     {% set values = lookups|selectfield(lookupfield, option.multiple, field.keys|default('id')) %}*/
/* {% endif %}*/
/* */
/* {# get the current selection. Either a single value, or an array. #}*/
/* {% set selection = context.content.get(contentkey)|default(null) %}*/
/* {% if selection is not iterable %}*/
/*     {% set selection = [ selection ] %}*/
/* {% endif %}*/
/* */
/* {# If the current selection contains an existing id, we must use _only_ the id, and not accept a fallback. #}*/
/* {% if selection|first in values|keys %}*/
/*     {% set onlyids = true %}*/
/* {% else %}*/
/*     {% set onlyids = false %}*/
/* {% endif %}*/
/* */
/* {% set attr_select = {*/
/*     class:     option.class,*/
/*     id:        key,*/
/*     multiple:  option.multiple,*/
/*     name:      (option.multiple) ? name ~ '[]' : name,*/
/* } %}*/
/* */
/* {# If the field has autocomplete, we need to set our own style, and remove the class attribute. #}*/
/* {% if field.autocomplete|default(false) %}*/
/*     {% set attr_select = attr_select|merge({'class': ''}) %}*/
/*     {% set attr_select = attr_select|merge({'style': 'width: 100%;'}) %}*/
/* {% endif %}*/
/* */
/* {% if field.sortable|default(false) %}*/
/*     {% set oldclass = attr_select.class %}*/
/*     {% set attr_select = attr_select|merge({ class: oldclass~' select2-sortable wide'}) %}*/
/*     */
/*     {% set newvals = [] %}*/
/*     {% for key, sel in selection %}*/
/*         {% set newvals = newvals|merge({ (key):values[sel]})%}*/
/*     {% endfor %}*/
/*     {% set values = unique(newvals, values)%}*/
/* {% endif %}*/
/* {#=== FIELDSET =======================================================================================================#}*/
/* */
/* <fieldset class="multiselect">*/
/* */
/*     <label class="col-sm-3 control-label">{{ (option.info) ? macro.infopop(labelkey, option.info) : labelkey }}</label>*/
/*     <div class="col-sm-9{% if field.sortable|default(false) %} sortable-select2-container{% endif %}">*/
/*         <select{{ macro.attr(attr_select) }}>*/
/*             {% for id, value in values %}*/
/*                 {% set is_array = (value is iterable and (value | length) > 1) %}*/
/*                 {% set attr_opt = {*/
/*                     value:     id,*/
/*                     selected:  id in selection or (not onlyids and (is_array ? value[0] : value) in selection),*/
/*                     "data-order": ordering*/
/*                 } %}*/
/* */
/*                 <option{{ macro.attr(attr_opt) }}>{{ is_array ? value[0:]|join(' / ') : value }}</option>*/
/*             {% endfor %}*/
/*         </select>*/
/* */
/*         {% if option.multiple %}*/
/*         <div>{# TODO: move onclick-events to JS #}*/
/*             <a href="#" class="btn btn-default btn-xs" onclick="jQuery('#{{ key }} option').prop('selected', true); return false;">*/
/*                 <i class="fa fa-fw fa-check-square-o"></i>{{ __("Select all") }}*/
/*             </a>*/
/*             <a href="#" class="btn btn-default btn-xs" onclick="jQuery('#{{ key }} option').prop('selected', false); return false;">*/
/*                 <i class="fa fa-fw fa-square-o"></i>{{ __("Select none") }}*/
/*             </a>*/
/*         </div>*/
/*         {% endif %}*/
/*     </div>*/
/*     */
/*     {% if field.sortable|default(false) %}*/
/*         <script>*/
/*             $(function() {*/
/*                 $('#{{ key }}').select2Sortable({});*/
/*             });*/
/*         </script>*/
/*     {% elseif field.autocomplete|default(false) %}*/
/*         <script>*/
/*             $(function() {*/
/*                 $('#{{ key }}').select2({*/
/*                     placeholder: "{{ __('(none)') }}",*/
/*                     allowClear: true*/
/*                 });*/
/*             });*/
/*         </script>*/
/*     {% endif %}    */
/* */
/* </fieldset>*/
/* */
