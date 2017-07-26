<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_068b6cccb2d9e0c29871bd8bff3574b83a52f046ebd0ea42e1b5fddf5cb2ae5e extends Twig_Template
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
        $__internal_eadcdcfbd20597383dded8fe037b4541755ba9fb561ffa81468f3d9d7c73c9ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eadcdcfbd20597383dded8fe037b4541755ba9fb561ffa81468f3d9d7c73c9ab->enter($__internal_eadcdcfbd20597383dded8fe037b4541755ba9fb561ffa81468f3d9d7c73c9ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_4a48b2030ed50b80ee2b1a9a89606eb5eb6eff7c0e15cf3c40e14b1eb0f1e927 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a48b2030ed50b80ee2b1a9a89606eb5eb6eff7c0e15cf3c40e14b1eb0f1e927->enter($__internal_4a48b2030ed50b80ee2b1a9a89606eb5eb6eff7c0e15cf3c40e14b1eb0f1e927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_eadcdcfbd20597383dded8fe037b4541755ba9fb561ffa81468f3d9d7c73c9ab->leave($__internal_eadcdcfbd20597383dded8fe037b4541755ba9fb561ffa81468f3d9d7c73c9ab_prof);

        
        $__internal_4a48b2030ed50b80ee2b1a9a89606eb5eb6eff7c0e15cf3c40e14b1eb0f1e927->leave($__internal_4a48b2030ed50b80ee2b1a9a89606eb5eb6eff7c0e15cf3c40e14b1eb0f1e927_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "C:\\Users\\mhfer\\Documents\\symfonyOracle\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}
