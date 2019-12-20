<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* security/register.html.twig */
class __TwigTemplate_da432b623a86958825bd97e15c0248927ef92ad0fa0c03c99ac6704d1580536b extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/register.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/register.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "membre";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/plugins/fontawesome-free/css/all.min.css"), "html", null, true);
        echo " \">
    <!-- Ionicons -->
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"), "html", null, true);
        echo "\">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css"), "html", null, true);
        echo "\">
    <!-- iCheck -->
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/plugins/icheck-bootstrap/icheck-bootstrap.min.css"), "html", null, true);
        echo "\">
    <!-- JQVMap -->
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/plugins/jqvmap/jqvmap.min.css"), "html", null, true);
        echo "\">
    <!-- Theme style -->
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/dist/css/adminlte.min.css"), "html", null, true);
        echo "\">
    <!-- overlayScrollbars -->
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/plugins/overlayScrollbars/css/OverlayScrollbars.min.css"), "html", null, true);
        echo "\">
    <!-- Daterange picker -->
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/plugins/daterangepicker/daterangepicker.css"), "html", null, true);
        echo "\">
    <!-- summernote -->
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/plugins/summernote/summernote-bs4.css"), "html", null, true);
        echo "\">
    <!-- Google Font: Source Sans Pro -->
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700\" rel=\"stylesheet"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 29
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 30
        echo "    
    <div class=\"wrapper\">


  <!-- Main Sidebar Container -->
  <aside class=\"main-sidebar sidebar-dark-primary elevation-4\">
    <!-- Sidebar -->
    <div class=\"sidebar\">
        <!-- Sidebar Menu -->
            <nav class=\"mt-2\">
                <ul class=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\" data-accordion=\"false\">   
                    <li class=\"nav-item\">
                        <a href=\"#\" class=\"nav-link\">
                        <i class=\"fas fa-circle nav-icon\"></i>
                        <p>Utilisateur</p>
                        </a>
                    </li>
                </ul>
            </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class=\"content-wrapper\">
    

    <!-- Main content -->
    <section class=\"content\">
      <div class=\"container-fluid\">
            <!-- Button trigger modal -->
            <br><button type=\"button\" class=\"btn btn-info\" data-toggle=\"modal\" data-target=\"#modelId\">
                Ajouter
            </button>
            
            <!-- debut Modal ajout -->
            <div class=\"modal fade\" id=\"modelId\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modelTitleId\" aria-hidden=\"true\">
                <div class=\"modal-dialog\" role=\"document\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h6 class=\"modal-title\">Ajout d'un utilisateur</h6>
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">&times;</span>
                                </button>
                        </div>
                        <div class=\"modal-body\">
                            ";
        // line 77
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formRegister"]) || array_key_exists("formRegister", $context) ? $context["formRegister"] : (function () { throw new RuntimeError('Variable "formRegister" does not exist.', 77, $this->source); })()), 'form_start');
        echo "
                                    ";
        // line 79
        echo "                                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formRegister"]) || array_key_exists("formRegister", $context) ? $context["formRegister"] : (function () { throw new RuntimeError('Variable "formRegister" does not exist.', 79, $this->source); })()), "username", [], "any", false, false, false, 79), 'row', ["label" => "Nom d'utilisateur"]);
        echo "
                                    ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formRegister"]) || array_key_exists("formRegister", $context) ? $context["formRegister"] : (function () { throw new RuntimeError('Variable "formRegister" does not exist.', 80, $this->source); })()), "password", [], "any", false, false, false, 80), 'row', ["label" => "Mot de passe"]);
        echo "
                                    ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formRegister"]) || array_key_exists("formRegister", $context) ? $context["formRegister"] : (function () { throw new RuntimeError('Variable "formRegister" does not exist.', 81, $this->source); })()), "email", [], "any", false, false, false, 81), 'row', ["label" => "Email"]);
        echo "
                                    ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formRegister"]) || array_key_exists("formRegister", $context) ? $context["formRegister"] : (function () { throw new RuntimeError('Variable "formRegister" does not exist.', 82, $this->source); })()), "fonction", [], "any", false, false, false, 82), 'row');
        echo "
                                <div class=\"modal-footer\">
                                    <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
                                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Annuler</button>
                                </div>
                            ";
        // line 87
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formRegister"]) || array_key_exists("formRegister", $context) ? $context["formRegister"] : (function () { throw new RuntimeError('Variable "formRegister" does not exist.', 87, $this->source); })()), 'form_end');
        echo "
                        </div>
                    </div>
                </div>
            </div><br><br><br>
            <!-- fin Modal ajout -->

            

            <!-- debut Modal supprimer -->
            <div class=\"modal fade\" id=\"modalSuppr\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modelTitleId\" aria-hidden=\"true\">
                <div class=\"modal-dialog\" role=\"document\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title\">Suppression d'un utilisateur</h5>
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                <span aria-hidden=\"true\">&times;</span>
                                </button>
                        </div>
                        <div class=\"modal-body\">
                            <form id=\"deleteForm\" method=\"post\">
                            ";
        // line 109
        echo "                                <input type=\"hidden\" name=\"delete_id _method\" id=\"delete_id\">
                                    
                                    <div class=\"container-fluid\">
                                        Vous voulez vraiment supprimer cet utilisateur ?
                                    </div>

                                    <div class=\"modal-footer\">
                                        <button type=\"submit\" class=\"btn btn-primary\" name=\"deleteData\">Oui</button>
                                        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Non</button>
                                    </div>
                            </form>    
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- fin Modal supprimer -->

            

            <!-- debut table utilisateur -->
                <table class=\"table table-striped table-responsive\" style=\"width=100%;\">
                    <thead class=\"thead-inverse\">
                        <tr>
                            <th>Nom d'utilisateur</th>
                            ";
        // line 135
        echo "                            <th>Email</th>
                            <th>Fonction</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 141
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["affichUser"]) || array_key_exists("affichUser", $context) ? $context["affichUser"] : (function () { throw new RuntimeError('Variable "affichUser" does not exist.', 141, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 142
            echo "                            <tr>
                                <td style=\"display:none;\">";
            // line 143
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "id", [], "any", false, false, false, 143), "html", null, true);
            echo "</td>
                                <td>";
            // line 144
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "username", [], "any", false, false, false, 144), "html", null, true);
            echo "</td>
                                <td>";
            // line 145
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "email", [], "any", false, false, false, 145), "html", null, true);
            echo "</td>
                                <td>";
            // line 146
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "fonction", [], "any", false, false, false, 146), "html", null, true);
            echo "</td>
                                <td style=\"display:none;\">";
            // line 147
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "password", [], "any", false, false, false, 147), "html", null, true);
            echo "</td>
                                <td>
                                    <button type=\"button\" class=\"btn btn-success btnEdit\">Editer</button>
                                    <button type=\"button\" class=\"btn btn-danger btnSuppr\">Supprimer</button>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 154
        echo "                    </tbody>
                </table>
            <!-- fin table utilisateur -->

            <!-- debut Modal editer -->
            <div class=\"modal fade\" id=\"modalEditer\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modelTitleId\" aria-hidden=\"true\">
                <div class=\"modal-dialog\" role=\"document\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h6 class=\"modal-title\">Modifier un utilisateur</h6>
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">&times;</span>
                                </button>
                        </div>
                        <div class=\"modal-body\">
                        <form action=\"#\" method=\"post\">

                            <input type=\"hidden\" name=\"update_id\" id=\"update_id\">

                            <div class=\"form-group\">
                              <label>Nom d'utilisateur</label>
                              <input type=\"text\" name=\"nom\" id=\"nom\" class=\"form-control\" aria-describedby=\"helpId\">
                              <!--small id=\"helpId\" class=\"text-muted\">Help text</small-->
                            </div>

                            <div class=\"form-group\">
                              <label>Email</label>
                              <input type=\"email\" name=\"email\" id=\"email\" class=\"form-control\">
                            </div>

                            <div class=\"form-group\">
                              <label>Fonction</label>
                              <input type=\"text\" name=\"fonction\"  id=\"fonction\" class=\"form-control\">
                            </div>

                            <div class=\"form-group\">
                              <label>Mot de passe</label>
                              <input type=\"password\" name=\"password\"  id=\"password\" class=\"form-control\">
                            </div>

                            <div class=\"modal-footer\">
                                <button type=\"submit\" class=\"btn btn-info\" name=\"updateUtilisateur\">Modifier</button>
                                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</button>
                            </div>
                        </form>  
                    </div>
                    </div>
                </div>
            </div><br><br><br>
            <!-- fin Modal editer -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class=\"main-footer\">
    <strong>Copyright &copy; 2014-2019 <a href=\"#\">Mamamia</a>.</strong>
    All rights reserved.
    <div class=\"float-right d-none d-sm-inline-block\">
      <b>Version</b> 3.0.1
    </div>
  </footer>

</div>
<!-- ./wrapper -->


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 224
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 225
        echo "    <!-- jQuery -->
    <script src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/plugins/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/plugins/jquery-ui/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        \$.widget.bridge('uibutton', \$.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/plugins/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
    <!-- ChartJS -->
    <script src=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/plugins/chart.js/Chart.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Sparkline -->
    <script src=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/plugins/sparklines/sparkline.js"), "html", null, true);
        echo "\"></script>
    <!-- JQVMap -->
    <script src=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/plugins/jqvmap/jquery.vmap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/plugins/jqvmap/maps/jquery.vmap.usa.js"), "html", null, true);
        echo "\"></script>
    <!-- jQuery Knob Chart -->
    <script src=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/plugins/jquery-knob/jquery.knob.min.js"), "html", null, true);
        echo "\"></script>
    <!-- daterangepicker -->
    <script src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/plugins/moment/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/plugins/daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Summernote -->
    <script src=\"";
        // line 250
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/plugins/summernote/summernote-bs4.min.js"), "html", null, true);
        echo "\"></script>
    <!-- overlayScrollbars -->
    <script src=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"), "html", null, true);
        echo "\"></script>
    <!-- AdminLTE App -->
    <script src=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/dist/js/adminlte.js"), "html", null, true);
        echo "\"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/dist/js/pages/dashboard.js"), "html", null, true);
        echo "\"></script>
    <!-- AdminLTE for demo purposes -->
    <script src=\"";
        // line 258
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/dist/js/demo.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(function(){

            // ----------------------------- editer--------------------
            \$('.btnEdit').on('click',function(){

                \$(\"#modalEditer\").modal('show');

                //  \$tr = \$(this).closest('tr');
                //  let tr = \$(\"#modalEditer\").closest('tr');
                //  console.log(tr);
                //  console.console.log(tr.html());

                \$tr = \$(this).closest('tr');
                let data = \$tr.children(\"td\").map(function(){
                    return \$(this).text();
                }).get();

                // console.log(data);

                \$('#update_id').val(data[0]);
                \$('#nom').val(data[1]);
                \$('#email').val(data[2]);
                \$('#fonction').val(data[3]);
                \$('#password').val(data[4]);
                
            });


            // --------------supprimer----------------------------------
            \$('.btnSuppr').on('click',function(){

                \$('#modalSuppr').modal('show');

                \$tr = \$(this).closest('tr');

                let data = \$tr.children(\"td\").map(function(){
                    return \$(this).text();
                }).get();

                \$('#delete_id').val(data[0]);

                \$('#deleteForm').attr('action','/admin/'+data[0]);

            });
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  499 => 258,  494 => 256,  489 => 254,  484 => 252,  479 => 250,  474 => 248,  469 => 246,  465 => 245,  460 => 243,  455 => 241,  451 => 240,  446 => 238,  441 => 236,  436 => 234,  427 => 228,  422 => 226,  419 => 225,  409 => 224,  331 => 154,  318 => 147,  314 => 146,  310 => 145,  306 => 144,  302 => 143,  299 => 142,  295 => 141,  287 => 135,  260 => 109,  236 => 87,  228 => 82,  224 => 81,  220 => 80,  215 => 79,  211 => 77,  162 => 30,  152 => 29,  140 => 24,  135 => 22,  130 => 20,  125 => 18,  120 => 16,  115 => 14,  110 => 12,  105 => 10,  100 => 8,  95 => 6,  90 => 5,  80 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}membre{% endblock %}
{% block stylesheets %}
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('/css/bootstrap.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('/plugins/fontawesome-free/css/all.min.css') }} \">
    <!-- Ionicons -->
    <link rel=\"stylesheet\" href=\"{{ asset('/https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') }}\">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel=\"stylesheet\" href=\"{{ asset('/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}\">
    <!-- iCheck -->
    <link rel=\"stylesheet\" href=\"{{ asset('/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}\">
    <!-- JQVMap -->
    <link rel=\"stylesheet\" href=\"{{ asset('/plugins/jqvmap/jqvmap.min.css') }}\">
    <!-- Theme style -->
    <link rel=\"stylesheet\" href=\"{{ asset('/dist/css/adminlte.min.css') }}\">
    <!-- overlayScrollbars -->
    <link rel=\"stylesheet\" href=\"{{ asset('/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}\">
    <!-- Daterange picker -->
    <link rel=\"stylesheet\" href=\"{{ asset('/plugins/daterangepicker/daterangepicker.css') }}\">
    <!-- summernote -->
    <link rel=\"stylesheet\" href=\"{{ asset('/plugins/summernote/summernote-bs4.css') }}\">
    <!-- Google Font: Source Sans Pro -->
    <link href=\"{{ asset('/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700\" rel=\"stylesheet') }}\">
{% endblock %}

    

{% block body %}
    
    <div class=\"wrapper\">


  <!-- Main Sidebar Container -->
  <aside class=\"main-sidebar sidebar-dark-primary elevation-4\">
    <!-- Sidebar -->
    <div class=\"sidebar\">
        <!-- Sidebar Menu -->
            <nav class=\"mt-2\">
                <ul class=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\" data-accordion=\"false\">   
                    <li class=\"nav-item\">
                        <a href=\"#\" class=\"nav-link\">
                        <i class=\"fas fa-circle nav-icon\"></i>
                        <p>Utilisateur</p>
                        </a>
                    </li>
                </ul>
            </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class=\"content-wrapper\">
    

    <!-- Main content -->
    <section class=\"content\">
      <div class=\"container-fluid\">
            <!-- Button trigger modal -->
            <br><button type=\"button\" class=\"btn btn-info\" data-toggle=\"modal\" data-target=\"#modelId\">
                Ajouter
            </button>
            
            <!-- debut Modal ajout -->
            <div class=\"modal fade\" id=\"modelId\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modelTitleId\" aria-hidden=\"true\">
                <div class=\"modal-dialog\" role=\"document\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h6 class=\"modal-title\">Ajout d'un utilisateur</h6>
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">&times;</span>
                                </button>
                        </div>
                        <div class=\"modal-body\">
                            {{ form_start(formRegister) }}
                                    {# {{ form_widget(formRegister) }} #}
                                    {{ form_row(formRegister.username, {'label' : \"Nom d'utilisateur\"}) }}
                                    {{ form_row(formRegister.password, {'label' : \"Mot de passe\"}) }}
                                    {{ form_row(formRegister.email, {'label' : \"Email\"}) }}
                                    {{ form_row(formRegister.fonction) }}
                                <div class=\"modal-footer\">
                                    <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
                                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Annuler</button>
                                </div>
                            {{ form_end(formRegister) }}
                        </div>
                    </div>
                </div>
            </div><br><br><br>
            <!-- fin Modal ajout -->

            

            <!-- debut Modal supprimer -->
            <div class=\"modal fade\" id=\"modalSuppr\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modelTitleId\" aria-hidden=\"true\">
                <div class=\"modal-dialog\" role=\"document\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title\">Suppression d'un utilisateur</h5>
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                <span aria-hidden=\"true\">&times;</span>
                                </button>
                        </div>
                        <div class=\"modal-body\">
                            <form id=\"deleteForm\" method=\"post\">
                            {# <form action=\"{{ path('security.delete',{id : }) }}\" method=\"post\"> #}
                                <input type=\"hidden\" name=\"delete_id _method\" id=\"delete_id\">
                                    
                                    <div class=\"container-fluid\">
                                        Vous voulez vraiment supprimer cet utilisateur ?
                                    </div>

                                    <div class=\"modal-footer\">
                                        <button type=\"submit\" class=\"btn btn-primary\" name=\"deleteData\">Oui</button>
                                        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Non</button>
                                    </div>
                            </form>    
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- fin Modal supprimer -->

            

            <!-- debut table utilisateur -->
                <table class=\"table table-striped table-responsive\" style=\"width=100%;\">
                    <thead class=\"thead-inverse\">
                        <tr>
                            <th>Nom d'utilisateur</th>
                            {# <th>Mot de passe</th> #}
                            <th>Email</th>
                            <th>Fonction</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for row in affichUser %}
                            <tr>
                                <td style=\"display:none;\">{{ row.id }}</td>
                                <td>{{ row.username }}</td>
                                <td>{{ row.email }}</td>
                                <td>{{ row.fonction }}</td>
                                <td style=\"display:none;\">{{ row.password }}</td>
                                <td>
                                    <button type=\"button\" class=\"btn btn-success btnEdit\">Editer</button>
                                    <button type=\"button\" class=\"btn btn-danger btnSuppr\">Supprimer</button>
                                </td>
                            </tr>
                        {% endfor  %}
                    </tbody>
                </table>
            <!-- fin table utilisateur -->

            <!-- debut Modal editer -->
            <div class=\"modal fade\" id=\"modalEditer\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modelTitleId\" aria-hidden=\"true\">
                <div class=\"modal-dialog\" role=\"document\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h6 class=\"modal-title\">Modifier un utilisateur</h6>
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">&times;</span>
                                </button>
                        </div>
                        <div class=\"modal-body\">
                        <form action=\"#\" method=\"post\">

                            <input type=\"hidden\" name=\"update_id\" id=\"update_id\">

                            <div class=\"form-group\">
                              <label>Nom d'utilisateur</label>
                              <input type=\"text\" name=\"nom\" id=\"nom\" class=\"form-control\" aria-describedby=\"helpId\">
                              <!--small id=\"helpId\" class=\"text-muted\">Help text</small-->
                            </div>

                            <div class=\"form-group\">
                              <label>Email</label>
                              <input type=\"email\" name=\"email\" id=\"email\" class=\"form-control\">
                            </div>

                            <div class=\"form-group\">
                              <label>Fonction</label>
                              <input type=\"text\" name=\"fonction\"  id=\"fonction\" class=\"form-control\">
                            </div>

                            <div class=\"form-group\">
                              <label>Mot de passe</label>
                              <input type=\"password\" name=\"password\"  id=\"password\" class=\"form-control\">
                            </div>

                            <div class=\"modal-footer\">
                                <button type=\"submit\" class=\"btn btn-info\" name=\"updateUtilisateur\">Modifier</button>
                                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</button>
                            </div>
                        </form>  
                    </div>
                    </div>
                </div>
            </div><br><br><br>
            <!-- fin Modal editer -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class=\"main-footer\">
    <strong>Copyright &copy; 2014-2019 <a href=\"#\">Mamamia</a>.</strong>
    All rights reserved.
    <div class=\"float-right d-none d-sm-inline-block\">
      <b>Version</b> 3.0.1
    </div>
  </footer>

</div>
<!-- ./wrapper -->


{% endblock %}

{% block javascripts %}
    <!-- jQuery -->
    <script src=\"{{ asset('/plugins/jquery/jquery.min.js') }}\"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src=\"{{ asset('/plugins/jquery-ui/jquery-ui.min.js') }}\"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        \$.widget.bridge('uibutton', \$.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src=\"{{ asset('/plugins/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>
    <!-- ChartJS -->
    <script src=\"{{ asset('/plugins/chart.js/Chart.min.js') }}\"></script>
    <!-- Sparkline -->
    <script src=\"{{ asset('/plugins/sparklines/sparkline.js') }}\"></script>
    <!-- JQVMap -->
    <script src=\"{{ asset('/plugins/jqvmap/jquery.vmap.min.js') }}\"></script>
    <script src=\"{{ asset('/plugins/jqvmap/maps/jquery.vmap.usa.js') }}\"></script>
    <!-- jQuery Knob Chart -->
    <script src=\"{{ asset('/plugins/jquery-knob/jquery.knob.min.js') }}\"></script>
    <!-- daterangepicker -->
    <script src=\"{{ asset('/plugins/moment/moment.min.js') }}\"></script>
    <script src=\"{{ asset('/plugins/daterangepicker/daterangepicker.js') }}\"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src=\"{{ asset('/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}\"></script>
    <!-- Summernote -->
    <script src=\"{{ asset('/plugins/summernote/summernote-bs4.min.js') }}\"></script>
    <!-- overlayScrollbars -->
    <script src=\"{{ asset('/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}\"></script>
    <!-- AdminLTE App -->
    <script src=\"{{ asset('/dist/js/adminlte.js') }}\"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src=\"{{ asset('/dist/js/pages/dashboard.js') }}\"></script>
    <!-- AdminLTE for demo purposes -->
    <script src=\"{{ asset('/dist/js/demo.js') }}\"></script>
    <script>
        \$(function(){

            // ----------------------------- editer--------------------
            \$('.btnEdit').on('click',function(){

                \$(\"#modalEditer\").modal('show');

                //  \$tr = \$(this).closest('tr');
                //  let tr = \$(\"#modalEditer\").closest('tr');
                //  console.log(tr);
                //  console.console.log(tr.html());

                \$tr = \$(this).closest('tr');
                let data = \$tr.children(\"td\").map(function(){
                    return \$(this).text();
                }).get();

                // console.log(data);

                \$('#update_id').val(data[0]);
                \$('#nom').val(data[1]);
                \$('#email').val(data[2]);
                \$('#fonction').val(data[3]);
                \$('#password').val(data[4]);
                
            });


            // --------------supprimer----------------------------------
            \$('.btnSuppr').on('click',function(){

                \$('#modalSuppr').modal('show');

                \$tr = \$(this).closest('tr');

                let data = \$tr.children(\"td\").map(function(){
                    return \$(this).text();
                }).get();

                \$('#delete_id').val(data[0]);

                \$('#deleteForm').attr('action','/admin/'+data[0]);

            });
        });
    </script>
{% endblock %}
", "security/register.html.twig", "C:\\Users\\root\\Documents\\projetSymfony\\gestionMateriel\\templates\\security\\register.html.twig");
    }
}
