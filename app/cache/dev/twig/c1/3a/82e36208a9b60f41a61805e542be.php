<?php

/* AcmeHelloBundle:Clientes:index.html.twig */
class __TwigTemplate_c13a82e36208a9b60f41a61805e542be extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<h1>Clientes list</h1>

<table class=\"records_list\">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Tlf</th>
            <th>Web</th>
            <th>Image</th>
            <th>Dir</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 17
            echo "        <tr>
            <td><a href=\"\">";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
            echo "</a></td>
            <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "nombre"), "html", null, true);
            echo "</td>
            <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "tlf"), "html", null, true);
            echo "</td>
            <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "web"), "html", null, true);
            echo "</td>
            <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "image"), "html", null, true);
            echo "</td>
            <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dir"), "html", null, true);
            echo "</td>
            <td>
                <ul>
                    <li>
                        <a href=\"\">show</a>
                    </li>
                    <li>
                        <a href=\"\">edit</a>
                    </li>
                </ul>
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 36
        echo "    </tbody>
</table>

<ul>
    <li>
        <a href=\"\">
            Create a new entry
        </a>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "AcmeHelloBundle:Clientes:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
