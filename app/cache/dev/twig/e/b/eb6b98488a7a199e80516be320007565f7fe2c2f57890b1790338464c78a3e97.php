<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_eb6b98488a7a199e80516be320007565f7fe2c2f57890b1790338464c78a3e97 extends Twig_Template
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
        $__internal_06e5f4dadb7b96a259e4a8639a5b4d6c5697646b6ee7d084ef089b62633a5b23 = $this->env->getExtension("native_profiler");
        $__internal_06e5f4dadb7b96a259e4a8639a5b4d6c5697646b6ee7d084ef089b62633a5b23->enter($__internal_06e5f4dadb7b96a259e4a8639a5b4d6c5697646b6ee7d084ef089b62633a5b23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("TwigBundle:Exception:trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_06e5f4dadb7b96a259e4a8639a5b4d6c5697646b6ee7d084ef089b62633a5b23->leave($__internal_06e5f4dadb7b96a259e4a8639a5b4d6c5697646b6ee7d084ef089b62633a5b23_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
