<?php

/* themes/lab_drupal/page.html.twig */
class __TwigTemplate_6986d85117902649a2c3a727b560c8f2e8c01a97d0d267c14f98b9c28f3c058c extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array(),
                array()
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

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"zxx\">
\t<head>
\t\t<title>I Examen</title>
\t\t<meta charset=\"UTF-8\">
\t\t<link rel=\"stylesheet\" href=\"/drupal/themes/lab_drupal/reset.css\">
\t\t<link rel=\"stylesheet\" href=\"/drupal/themes/lab_drupal/print.css\" media=\"print\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/drupal/themes/lab_drupal/style.css\" media=\"screen\">
\t\t<link rel=\"stylesheet\" href=\"/drupal/themes/lab_drupal/desktop_first.css\" media=\"screen\">
\t\t<!--link rel=\"stylesheet\" href=\"styles/mobile_first.css\" media=\"screen\"-->
\t</head>
\t<body>
\t\t<div id=\"container\">
\t\t\t<header>
\t\t\t\t<div>
\t\t\t\t\t<h1>UNA WEB [ Jean Saborío U. ]</h1>
\t\t\t\t\t<nav>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"home\">HOME</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">ABOUT</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">COURSES</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">CONTACT</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t\t<div class=\"img\">
\t\t\t\t\t<img class=\"img\" src=\"http://img4.meristation.com/files/imagenes/general/god-of-war_td04-605x300.jpg\" alt=\"God of War 4\">
\t\t\t\t</div>
\t\t\t</header>
\t\t\t";
        // line 30
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
        echo "
\t\t\t<main id=\"content\">
\t\t\t\t<article class=\"art_1\">
\t\t\t\t\t<h2>Main Section</h2>
\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
\t\t\t\t\t<br>
\t\t\t\t\t<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
\t\t\t\t\t<br>
\t\t\t\t\t<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because </p>
\t\t\t\t</article>

\t\t\t\t<article class=\"art_2\">
\t\t\t\t\t<h3 class=\"blue\">Sub-section Center</h3>
\t\t\t\t\t
\t\t\t\t\t<div id=\"box\">
\t\t\t\t\t\t<p>A <strong>paragraph</strong> of <span class=\"red\">text</span> with an <span class=\"unassigned\">unassigned link.</span></p>
\t\t\t\t\t\t<p>A <i>second</i> row of <del>text</del> with a <a href=\"#\">web link</a></p>
\t\t\t\t\t</div>
\t\t\t\t\t<br>
\t\t\t\t\t<div class=\"img2\">
\t\t\t\t\t\t<img class=\"img2\" src=\"http://playerslink.la/wp-content/uploads/2016/12/thelastofus2-the-last-of-us-II-2-ps4-pro-4k-playereslink-osodepan-trailer-release-logo-900x444.jpg\" alt=\"The Last of Us 2\">
\t\t\t\t\t</div>
\t\t\t\t\t<br>
\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
\t\t\t\t\t<br>
\t\t\t\t\t<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? </p>
\t\t\t\t</article>

\t\t\t\t<article class=\"art_2\">
\t\t\t\t\t<h3 class=\"blue\">Sub-section Right</h3>\t
\t\t\t\t\t<p>We open at <span class=\"red\">10:00</span> every morning</p>
\t\t\t\t\t<br>
\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
\t\t\t\t\t<br>
\t\t\t\t\t<h3 class=\"green\"><i>Sub-Sub-section</i></h3>
\t\t\t\t\t<p><em>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</em></p>
\t\t\t\t\t<br>
\t\t\t\t\t<div class=\"img2\">
\t\t\t\t\t\t<img class=\"img2\" src=\"https://i.ytimg.com/vi/rxjOFd0YNo0/maxresdefault.jpg\" alt=\"Resident Evil 7\">
\t\t\t\t\t</div>
\t\t\t\t\t<br>
\t\t\t\t\t<h3 class=\"red_2\"><em>Sub-Sub-section</em></h3>
\t\t\t\t\t<p><i>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</i></p>
\t\t\t\t</article>
\t\t\t</main>
\t\t</div>
\t\t";
        // line 76
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
\t\t<footer>
\t\t\t<div>
\t\t\t\t<nav>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"#\" class=\"home\">HOME</a></li>
\t\t\t\t\t\t<li><a href=\"#\">ABOUT</a></li>
\t\t\t\t\t\t<li><a href=\"#\">COURSES</a></li>
\t\t\t\t\t\t<li><a href=\"#\">CONTACT</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</nav>
\t\t\t</div>
\t\t\t<p>Copyright @ 2017 Curso de Programación Web</p>
\t\t</footer>
\t\t";
        // line 90
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
        echo "
\t</body>
</html>";
    }

    public function getTemplateName()
    {
        return "themes/lab_drupal/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 90,  123 => 76,  74 => 30,  43 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html lang=\"zxx\">
\t<head>
\t\t<title>I Examen</title>
\t\t<meta charset=\"UTF-8\">
\t\t<link rel=\"stylesheet\" href=\"/drupal/themes/lab_drupal/reset.css\">
\t\t<link rel=\"stylesheet\" href=\"/drupal/themes/lab_drupal/print.css\" media=\"print\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/drupal/themes/lab_drupal/style.css\" media=\"screen\">
\t\t<link rel=\"stylesheet\" href=\"/drupal/themes/lab_drupal/desktop_first.css\" media=\"screen\">
\t\t<!--link rel=\"stylesheet\" href=\"styles/mobile_first.css\" media=\"screen\"-->
\t</head>
\t<body>
\t\t<div id=\"container\">
\t\t\t<header>
\t\t\t\t<div>
\t\t\t\t\t<h1>UNA WEB [ Jean Saborío U. ]</h1>
\t\t\t\t\t<nav>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"home\">HOME</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">ABOUT</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">COURSES</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">CONTACT</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t\t<div class=\"img\">
\t\t\t\t\t<img class=\"img\" src=\"http://img4.meristation.com/files/imagenes/general/god-of-war_td04-605x300.jpg\" alt=\"God of War 4\">
\t\t\t\t</div>
\t\t\t</header>
\t\t\t{{page.header}}
\t\t\t<main id=\"content\">
\t\t\t\t<article class=\"art_1\">
\t\t\t\t\t<h2>Main Section</h2>
\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
\t\t\t\t\t<br>
\t\t\t\t\t<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
\t\t\t\t\t<br>
\t\t\t\t\t<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because </p>
\t\t\t\t</article>

\t\t\t\t<article class=\"art_2\">
\t\t\t\t\t<h3 class=\"blue\">Sub-section Center</h3>
\t\t\t\t\t
\t\t\t\t\t<div id=\"box\">
\t\t\t\t\t\t<p>A <strong>paragraph</strong> of <span class=\"red\">text</span> with an <span class=\"unassigned\">unassigned link.</span></p>
\t\t\t\t\t\t<p>A <i>second</i> row of <del>text</del> with a <a href=\"#\">web link</a></p>
\t\t\t\t\t</div>
\t\t\t\t\t<br>
\t\t\t\t\t<div class=\"img2\">
\t\t\t\t\t\t<img class=\"img2\" src=\"http://playerslink.la/wp-content/uploads/2016/12/thelastofus2-the-last-of-us-II-2-ps4-pro-4k-playereslink-osodepan-trailer-release-logo-900x444.jpg\" alt=\"The Last of Us 2\">
\t\t\t\t\t</div>
\t\t\t\t\t<br>
\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
\t\t\t\t\t<br>
\t\t\t\t\t<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? </p>
\t\t\t\t</article>

\t\t\t\t<article class=\"art_2\">
\t\t\t\t\t<h3 class=\"blue\">Sub-section Right</h3>\t
\t\t\t\t\t<p>We open at <span class=\"red\">10:00</span> every morning</p>
\t\t\t\t\t<br>
\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
\t\t\t\t\t<br>
\t\t\t\t\t<h3 class=\"green\"><i>Sub-Sub-section</i></h3>
\t\t\t\t\t<p><em>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</em></p>
\t\t\t\t\t<br>
\t\t\t\t\t<div class=\"img2\">
\t\t\t\t\t\t<img class=\"img2\" src=\"https://i.ytimg.com/vi/rxjOFd0YNo0/maxresdefault.jpg\" alt=\"Resident Evil 7\">
\t\t\t\t\t</div>
\t\t\t\t\t<br>
\t\t\t\t\t<h3 class=\"red_2\"><em>Sub-Sub-section</em></h3>
\t\t\t\t\t<p><i>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</i></p>
\t\t\t\t</article>
\t\t\t</main>
\t\t</div>
\t\t{{page.content}}
\t\t<footer>
\t\t\t<div>
\t\t\t\t<nav>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"#\" class=\"home\">HOME</a></li>
\t\t\t\t\t\t<li><a href=\"#\">ABOUT</a></li>
\t\t\t\t\t\t<li><a href=\"#\">COURSES</a></li>
\t\t\t\t\t\t<li><a href=\"#\">CONTACT</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</nav>
\t\t\t</div>
\t\t\t<p>Copyright @ 2017 Curso de Programación Web</p>
\t\t</footer>
\t\t{{page.footer}}
\t</body>
</html>";
    }
}
