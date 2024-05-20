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

/* __string_template__ea43f0fa502b9224981a77672fb573ac */
class __TwigTemplate_f04796c2553283a198877b57fcc2a590 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"mx\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Lista de enlaces • SecureFirm Technologies</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminLinkWidget';
    var iso_user = 'mx';
    var lang_is_rtl = '0';
    var full_language_code = 'es';
    var full_cldr_language_code = 'es-MX';
    var country_iso_code = 'MX';
    var _PS_VERSION_ = '8.1.5';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'A new order has been placed on your store.';
    var order_number_msg = 'Número de pedido: ';
    var total_msg = 'Total: ';
    var from_msg = 'Desde ';
    var see_order_msg = 'Ver este pedido';
    var new_customer_msg = 'A new customer registered on your store.';
    var customer_name_msg = 'Nombre del Cliente: ';
    var new_msg = 'A new message was posted on your store.';
    var see_msg = 'Leer el mensaje';
    var token = '7d4fee10d526198ebc610b26387a98a4';
    var currentIndex = 'index.php?controller=AdminLinkWidget';
    var employee_token = '1af7a335ca17e5af61ad5fb80463fa15';
    var choose_language_translate = 'Elegir idioma:';
    var default_language = '1';
    var admin_modules_link = '/admin446f8tiznq6fruc1veh/index.php/improve/modules/manage?_token=vsDh2kpGm4c6OTbjSx-6uihb8n13jhX_uYl6csFP0QI';
    var admin_notification_get_link = '/admin446f8tiznq6fruc1veh/index.php/common/notifications?_token=vsDh2kpGm4c6OTbjSx-6uihb8n13jhX_uYl6csFP0QI';
    var admin_notification_push_link = adminNotificationPushLink = '/admin446f8tiznq6fruc1veh/index.php/common/notifications/ack?_token=vsDh2kpGm4c6OTbjSx-6uihb8n13jhX_uYl6csFP0QI';
    var tab_modules_list = '';
    var update_success_msg = 'Actua";
        // line 42
        echo "lización con éxito';
    var search_product_msg = 'Buscar un producto';
  </script>



<link
      rel=\"preload\"
      href=\"/admin446f8tiznq6fruc1veh/themes/new-theme/public/2d8017489da689caedc1.preload..woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/admin446f8tiznq6fruc1veh/themes/new-theme/public/create_product_default_theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin446f8tiznq6fruc1veh/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin446f8tiznq6fruc1veh/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/admin446f8tiznq6fruc1veh\\/\";
var baseDir = \"\\/\";
var changeFormLanguageUrl = \"\\/admin446f8tiznq6fruc1veh\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=vsDh2kpGm4c6OTbjSx-6uihb8n13jhX_uYl6csFP0QI\";
var currency = {\"iso_code\":\"MXN\",\"sign\":\"\$\",\"name\":\"Peso mexicano\",\"format\":null};
var currency_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"MXN\",\"currencySymbol\":\"\$\",\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"\\u00a4#,##0.00\",\"negativePattern\":\"-\\u00a4#,##0.00\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"prim";
        // line 67
        echo "aryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/admin446f8tiznq6fruc1veh/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=8.1.5\"></script>
<script type=\"text/javascript\" src=\"/admin446f8tiznq6fruc1veh/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=8.1.5\"></script>
<script type=\"text/javascript\" src=\"/admin446f8tiznq6fruc1veh/themes/new-theme/public/create_product.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/admin446f8tiznq6fruc1veh/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_emailalerts/js/admin/ps_emailalerts.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/admin446f8tiznq6fruc1veh/index.php/common/notifications?_token=vsDh2kpGm4c6OTbjSx-6uihb8n13jhX_uYl6csFP0QI',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>


";
        // line 102
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-mx adminlinkwidget\"
  data-base-url=\"/admin446f8tiznq6fruc1veh/index.php\"  data-token=\"vsDh2kpGm4c6OTbjSx-6uihb8n13jhX_uYl6csFP0QI\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/admin446f8tiznq6fruc1veh/index.php?controller=AdminDashboard&amp;token=6a1f75fa8b0a8a2a98de455371797bd2\"></a>
      <span id=\"shop_version\">8.1.5</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Accès rapide
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/admin446f8tiznq6fruc1veh/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=502634a84097dd549dfc77d42467ceac\"
                 data-item=\"Evaluación del catálogo\"
      >Evaluación del catálogo</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/admin446f8tiznq6fruc1veh/index.php/improve/modules/manage?token=42ef3e8d5ba4ac63589dec1fe41921bc\"
                 data-item=\"Módulos instalados\"
      >Módulos instalados</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/admin446f8tiznq6fruc1veh/index.php/sell/catalog/categories/new?token=42ef3e8d5ba4ac63589dec1fe41921bc\"
                 data-item=\"Nueva categoría\"
      >Nueva categoría</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/admin446f8tiznq6fruc1veh/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=cc9748b907a7a0788c97dc02a736a549\"
                 data-item=";
        // line 137
        echo "\"Nuevo cupón\"
      >Nuevo cupón</a>
          <a class=\"dropdown-item quick-row-link new-product-button\"
         href=\"http://localhost/admin446f8tiznq6fruc1veh/index.php/sell/catalog/products-v2/create?token=42ef3e8d5ba4ac63589dec1fe41921bc\"
                 data-item=\"Nuevo producto\"
      >Nuevo producto</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/admin446f8tiznq6fruc1veh/index.php/sell/orders?token=42ef3e8d5ba4ac63589dec1fe41921bc\"
                 data-item=\"Pedidos\"
      >Pedidos</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"3\"
        data-icon=\"icon-AdminParentThemes\"
        data-method=\"add\"
        data-url=\"index.php/modules/link-widget/list?-6uihb8n13jhX_uYl6csFP0QI\"
        data-post-link=\"http://localhost/admin446f8tiznq6fruc1veh/index.php?controller=AdminQuickAccesses&token=31a7f0e9ca02660a72bdb9cbc5ccb95a\"
        data-prompt-text=\"Por favor, renombre este acceso rápido:\"
        data-link=\"Lista de enlaces - Lista\"
      >
        <i class=\"material-icons\">add_circle</i>
        Añadir página actual al Acceso Rápido
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/admin446f8tiznq6fruc1veh/index.php?controller=AdminQuickAccesses&token=31a7f0e9ca02660a72bdb9cbc5ccb95a\">
      <i class=\"material-icons\">settings</i>
      Administrar accesos rápidos
    </a>
  </div>
</div>
      </div>
      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/admin446f8tiznq6fruc1veh/index.php?controller=AdminSearch&amp;token=05eb39b018f31958423d105dec498ee6\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search";
        // line 177
        echo "_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Buscar (p. ej.: referencia de producto, nombre de cliente...)\" aria-label=\"Barra de búsqueda\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        En todas partes
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"En todas partes\" href=\"#\" data-value=\"0\" data-placeholder=\"¿Qué estás buscando?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> En todas partes</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catálogo\" href=\"#\" data-value=\"1\" data-placeholder=\"Nombre del producto, referencia, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catálogo</a>
        <a class=\"dropdown-item\" data-item=\"Clientes por nombre\" href=\"#\" data-value=\"2\" data-placeholder=\"Nombre\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clientes por nombre</a>
        <a class=\"dropdown-item\" data-item=\"Clientes por dirección IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clientes por dirección IP</a>
        <a class=\"dropdown-item\" data-item=\"Pedidos\" href=\"#\" data-value=\"3\" data-placeholder=\"ID pedido\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Pedidos</a>
        <a class=\"dropdown-item\" data-item=\"Facturas\" href=\"#\" data-value=\"4\" data-placeholder=\"Número de factura\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Facturas</a>
        <a class=\"dropdown-item\" data-item=\"Carritos\" href=\"#\" data-value=\"5\" data-placeholder=\"ID carrito\" data-icon=\"icon-shopping-cart\"><i";
        // line 192
        echo " class=\"material-icons\">shopping_cart</i> Carritos</a>
        <a class=\"dropdown-item\" data-item=\"Módulos\" href=\"#\" data-value=\"7\" data-placeholder=\"Nombre del módulo\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Módulos</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">BUSCAR</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
            <button class=\"component-search-cancel d-none\">Cancelar</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Accès rapide</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/admin446f8tiznq6fruc1veh/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=502634a84097dd549dfc77d42467ceac\"
             data-item=\"Evaluación del catálogo\"
    >Evaluación del catálogo</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/admin446f8tiznq6fruc1veh/index.php/improve/modules/manage?token=42ef3e8d5ba4ac63589dec1fe41921bc\"
             data-item=\"Módulos instalados\"
    >Módulos instalados</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/admin446f8tiznq6fruc1veh/index.php/sell/catalog/categories/new?token=42ef3e8d5ba4ac63589dec1fe41921bc\"
             data-item=\"Nueva categoría\"
    >Nueva categoría</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/admin446f8tiznq6fruc1veh/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=cc9748b907a7a0788c97dc02a736a549\"
             data-item=\"Nuevo cupón\"
    >Nuevo cupón</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/admin446f8tiznq6fruc1veh/index.php/sell/catalog/products-v2/creat";
        // line 229
        echo "e?token=42ef3e8d5ba4ac63589dec1fe41921bc\"
             data-item=\"Nuevo producto\"
    >Nuevo producto</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/admin446f8tiznq6fruc1veh/index.php/sell/orders?token=42ef3e8d5ba4ac63589dec1fe41921bc\"
             data-item=\"Pedidos\"
    >Pedidos</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"40\"
      data-icon=\"icon-AdminParentThemes\"
      data-method=\"add\"
      data-url=\"index.php/modules/link-widget/list?-6uihb8n13jhX_uYl6csFP0QI\"
      data-post-link=\"http://localhost/admin446f8tiznq6fruc1veh/index.php?controller=AdminQuickAccesses&token=31a7f0e9ca02660a72bdb9cbc5ccb95a\"
      data-prompt-text=\"Por favor, renombre este acceso rápido:\"
      data-link=\"Lista de enlaces - Lista\"
    >
      <i class=\"material-icons\">add_circle</i>
      Añadir página actual al Acceso Rápido
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/admin446f8tiznq6fruc1veh/index.php?controller=AdminQuickAccesses&token=31a7f0e9ca02660a72bdb9cbc5ccb95a\">
    <i class=\"material-icons\">settings</i>
    Administrar accesos rápidos
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

      
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>View my store</span>
    </a>
  </div>
          </div>
                          <div class=\"component header-right-component\" id=\"header-notifications-container\">
            <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"materia";
        // line 275
        echo "l-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Pedidos<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Clientes<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Mensajes<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay pedidos nuevos por ahora :(<br>
              ¿Has revisado tus <strong><a href=\"http://localhost/admin446f8tiznq6fruc1veh/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=746a4bdbc3273c74b372c228a5f1d75c\">carritos abandonados</a></strong>?<br>?. ¡Tu próximo pedido podría estar ocultándose allí!
            </p>
            <d";
        // line 326
        echo "iv class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay clientes nuevos por ahora :(<br>
              Se encuentra activo en las redes sociales últimamente?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay mensajes nuevo por ahora.<br>
              Parece que todos sus clientes están contentos :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registrado <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
          </div>
        
        <div class=\"component\" id=\"header-employee-container\">
          <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-ri";
        // line 376
        echo "ght\">
    <div class=\"employee-wrapper-avatar\">
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://localhost/img/pr/default.jpg\" alt=\"Alejandro\" /></span>
        <span class=\"employee_profile\">Bienvenido de nuevo, Alejandro</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/admin446f8tiznq6fruc1veh/index.php/configure/advanced/employees/1/edit?_token=vsDh2kpGm4c6OTbjSx-6uihb8n13jhX_uYl6csFP0QI\">
      <i class=\"material-icons\">edit</i>
      <span>Tu perfil</span>
    </a>
    </div>

    <p class=\"divider\"></p>

    
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost/admin446f8tiznq6fruc1veh/index.php?controller=AdminLogin&amp;logout=1&amp;token=abea30ce695beabff837936581a54f6b\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Cerrar sesión</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/admin446f8tiznq6fruc1veh/index.php/configure/advanced/employees/toggle-navigation?_token=vsDh2kpGm4c6OTbjSx-6uihb8n13jhX_uYl6csFP0QI\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/admin446f8tiznq6fruc1veh/index.php?controller=AdminDashboard&amp;token=6a1f75fa8b0a8a2a98de455371797bd2\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.1.5</span>
      </div>

      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"http://localhost/admin446f8tiznq6fruc1veh/index.php?controller=AdminDashboard";
        // line 421
        echo "&amp;token=6a1f75fa8b0a8a2a98de455371797bd2\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Panel de control</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Ventas</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/admin446f8tiznq6fruc1veh/index.php/sell/orders/?_token=vsDh2kpGm4c6OTbjSx-6uihb8n13jhX_uYl6csFP0QI\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Pedidos
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/admin446f8tiznq6fruc1veh/index.php/sell/orders/?_token=vsDh2kpGm4c6OTbjSx-6uihb8n13jhX_uYl6csFP0QI\" class=\"link\"> Pedidos
                                </a>
                              </li>

                                                                                  
                              
                          ";
        // line 460
        echo "                                  
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/admin446f8tiznq6fruc1veh/index.php/sell/orders/invoices/?_token=vsDh2kpGm4c6OTbjSx-6uihb8n13jhX_uYl6csFP0QI\" class=\"link\"> Facturas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/admin446f8tiznq6fruc1veh/index.php/sell/orders/credit-slips/?_token=vsDh2kpGm4c6OTbjSx-6uihb8n13jhX_uYl6csFP0QI\" class=\"link\"> Notas de Crédito
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/admin446f8tiznq6fruc1veh/index.php/sell/orders/delivery-slips/?_token=vsDh2kpGm4c6OTbjSx-6uihb8n13jhX_uYl6csFP0QI\" class=\"link\"> Albaranes de entrega
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost/admin446f8tiznq6fruc1veh/index.php?controller=AdminCarts&amp;token=746a4bdbc3273c74b372c228a5f1d75c\" class=\"link\"> Carros de compra
                                </a>
                              </li>

    ";
        // line 490
        echo "                                                                          </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/admin446f8tiznq6fruc1veh/index.php/sell/catalog/products?_token=vsDh2kpGm4c6OTbjSx-6uihb8n13jhX_uYl6csFP0QI\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catálogo
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/admin446f8tiznq6fruc1veh/index.php/sell/catalog/products?_token=vsDh2kpGm4c6OTbjSx-6uihb8n13jhX_uYl6csFP0QI\" class=\"link\"> Productos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/admin446f8tiznq6fruc1veh/index.php/sell/catalog/categories?_token=vsDh2kpGm4c6OTbjSx-6uihb8n13jhX_uYl6csFP0QI\" cl";
        // line 519
        echo "ass=\"link\"> Categorías
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/admin446f8tiznq6fruc1veh/index.php/sell/catalog/monitoring/?_token=vsDh2kpGm4c6OTbjSx-6uihb8n13jhX_uYl6csFP0QI\" class=\"link\"> Monitoreo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost/admin446f8tiznq6fruc1veh/index.php?controller=AdminAttributesGroups&amp;token=7db3821e985a7643801155c40a83469d\" class=\"link\"> Atributos y Características
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/admin446f8tiznq6fruc1veh/index.php/sell/catalog/brands/?_token=vsDh2kpGm4c6OTbjSx-6uihb8n13jhX_uYl6csFP0QI\" class=\"link\"> Marcas y Proveedores
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id";
        // line 550
        echo "=\"subtab-AdminAttachments\">
                                <a href=\"/admin446f8tiznq6fruc1veh/index.php/sell/attachments/?_token=vsDh2kpGm4c6OTbjSx-6uihb8n13jhX_uYl6csFP0QI\" class=\"link\"> Archivos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost/admin446f8tiznq6fruc1veh/index.php?controller=AdminCartRules&amp;token=cc9748b907a7a0788c97dc02a736a549\" class=\"link\"> Descuentos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/admin446f8tiznq6fruc1veh/index.php/sell/stocks/?_token=vsDh2kpGm4c6OTbjSx-6uihb8n13jhX_uYl6csFP0QI\" class=\"link\"> Existencias
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/admin446f8tiznq6fruc1veh/index.php/sell/customers/?_token=vsDh2kpGm4c6OTbjSx-6uihb8n13jhX_uYl6csFP0QI\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                    ";
        // line 581
        echo "  Clientes
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/admin446f8tiznq6fruc1veh/index.php/sell/customers/?_token=vsDh2kpGm4c6OTbjSx-6uihb8n13jhX_uYl6csFP0QI\" class=\"link\"> Clientes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/admin446f8tiznq6fruc1veh/index.php/sell/addresses/?_token=vsDh2kpGm4c6OTbjSx-6uihb8n13jhX_uYl6csFP0QI\" class=\"link\"> Direcciones
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost/admin446f8tiznq6fruc1veh/index.php?controller=AdminCustomerThreads&";
        // line 611
        echo "amp;token=99b038b8c0cc79999d8d46e8971dde77\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Servicio a Clientes
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost/admin446f8tiznq6fruc1veh/index.php?controller=AdminCustomerThreads&amp;token=99b038b8c0cc79999d8d46e8971dde77\" class=\"link\"> Servicio a Clientes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/admin446f8tiznq6fruc1veh/index.php/sell/customer-service/order-messages/?_token=vsDh2kpGm4c6OTbjSx-6uihb8n13jhX_uYl6csFP0QI\" class=\"link\"> Mensajes de Pedidos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                    ";
        // line 641
        echo "            <a href=\"http://localhost/admin446f8tiznq6fruc1veh/index.php?controller=AdminReturn&amp;token=9e2ca971463a378a9528a15c649f98eb\" class=\"link\"> Devoluciones de mercancía
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"http://localhost/admin446f8tiznq6fruc1veh/index.php?controller=AdminStats&amp;token=502634a84097dd549dfc77d42467ceac\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Estadísticas
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Mejoras</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/admin446f8tiznq6fruc1veh/index.php/improve/modules/manage?_token=vsDh2kpGm4c6OTbjSx-6uihb8n13jhX_uYl6csFP0QI\" class=\"link\">
                      <i class=";
        // line 678
        echo "\"material-icons mi-extension\">extension</i>
                      <span>
                      Módulos
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/admin446f8tiznq6fruc1veh/index.php/improve/modules/manage?_token=vsDh2kpGm4c6OTbjSx-6uihb8n13jhX_uYl6csFP0QI\" class=\"link\"> Administrador de módulos
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/admin446f8tiznq6fruc1veh/index.php/improve/design/themes/?_token=vsDh2kpGm4c6OTbjSx-6uihb8n13jhX_uYl6csFP0QI\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Diseño
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                              ";
        // line 708
        echo "                      keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"128\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/admin446f8tiznq6fruc1veh/index.php/improve/design/themes/?_token=vsDh2kpGm4c6OTbjSx-6uihb8n13jhX_uYl6csFP0QI\" class=\"link\"> Tema y logotipo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/admin446f8tiznq6fruc1veh/index.php/improve/design/mail_theme/?_token=vsDh2kpGm4c6OTbjSx-6uihb8n13jhX_uYl6csFP0QI\" class=\"link\"> Tema de Email
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/admin446f8tiznq6fruc1veh/index.php/improve/design/cms-pages/?_token=vsDh2kpGm4c6OTbjSx-6uihb8n13jhX_uYl6csFP0QI\" class=\"link\"> Páginas
                                </a>
                              </li>

                                                                                  
                              
                                                     ";
        // line 738
        echo "       
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/admin446f8tiznq6fruc1veh/index.php/improve/design/modules/positions/?_token=vsDh2kpGm4c6OTbjSx-6uihb8n13jhX_uYl6csFP0QI\" class=\"link\"> Posiciones
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost/admin446f8tiznq6fruc1veh/index.php?controller=AdminImages&amp;token=c717aea8290914c601f0645738c18256\" class=\"link\"> Ajustes de imágenes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"118\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/admin446f8tiznq6fruc1veh/index.php/modules/link-widget/list?_token=vsDh2kpGm4c6OTbjSx-6uihb8n13jhX_uYl6csFP0QI\" class=\"link\"> Lista de enlaces
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost/admin446f8tiznq6fruc1veh/index.php?controller=AdminCarriers&amp;token=ce89a99661ba77831593d0c80d9b0d69\" c";
        // line 767
        echo "lass=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Envío
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost/admin446f8tiznq6fruc1veh/index.php?controller=AdminCarriers&amp;token=ce89a99661ba77831593d0c80d9b0d69\" class=\"link\"> Paqueterias
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/admin446f8tiznq6fruc1veh/index.php/improve/shipping/preferences/?_token=vsDh2kpGm4c6OTbjSx-6uihb8n13jhX_uYl6csFP0QI\" class=\"link\"> Preferencias
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment";
        // line 799
        echo "\">
                    <a href=\"/admin446f8tiznq6fruc1veh/index.php/improve/payment/payment_methods?_token=vsDh2kpGm4c6OTbjSx-6uihb8n13jhX_uYl6csFP0QI\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Pago
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/admin446f8tiznq6fruc1veh/index.php/improve/payment/payment_methods?_token=vsDh2kpGm4c6OTbjSx-6uihb8n13jhX_uYl6csFP0QI\" class=\"link\"> Métodos de pago
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/admin446f8tiznq6fruc1veh/index.php/improve/payment/preferences?_token=vsDh2kpGm4c6OTbjSx-6uihb8n13jhX_uYl6csFP0QI\" class=\"link\"> Preferencias
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                             ";
        // line 830
        echo "                         
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/admin446f8tiznq6fruc1veh/index.php/improve/international/localization/?_token=vsDh2kpGm4c6OTbjSx-6uihb8n13jhX_uYl6csFP0QI\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      Internacional
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/admin446f8tiznq6fruc1veh/index.php/improve/international/localization/?_token=vsDh2kpGm4c6OTbjSx-6uihb8n13jhX_uYl6csFP0QI\" class=\"link\"> Localización
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/admin446f8tiznq6fruc1veh/index.php/improve/international/zones/?_token=vsDh2kpGm4c6OTbjSx-6uihb8n13jhX_uYl6csFP0QI\" class=\"link\"> Ubicaciones Geográficas
                                </a>
                              </li>

                                        ";
        // line 859
        echo "                                          
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/admin446f8tiznq6fruc1veh/index.php/improve/international/taxes/?_token=vsDh2kpGm4c6OTbjSx-6uihb8n13jhX_uYl6csFP0QI\" class=\"link\"> Impuestos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/admin446f8tiznq6fruc1veh/index.php/improve/international/translations/settings?_token=vsDh2kpGm4c6OTbjSx-6uihb8n13jhX_uYl6csFP0QI\" class=\"link\"> Traducciones
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configurar</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/admin446f8tiznq6fruc1veh/index.php/configure/shop/preferences/preferences?_token=vsDh2kpGm4c6OTbjSx-6uihb8n13jhX_uYl6csFP0QI\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Configuraci";
        // line 895
        echo "ón de la Tienda
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/admin446f8tiznq6fruc1veh/index.php/configure/shop/preferences/preferences?_token=vsDh2kpGm4c6OTbjSx-6uihb8n13jhX_uYl6csFP0QI\" class=\"link\"> General
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/admin446f8tiznq6fruc1veh/index.php/configure/shop/order-preferences/?_token=vsDh2kpGm4c6OTbjSx-6uihb8n13jhX_uYl6csFP0QI\" class=\"link\"> Configuración de Pedidos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/admin446f8tiznq6fruc1veh/index.php/configure/shop/product-preferences/?_token=vsDh2kpGm4c6OTbjSx-6uihb8n13jhX_uYl6csFP0QI\" class=\"link\"> Configuraci";
        // line 922
        echo "ón de Productos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/admin446f8tiznq6fruc1veh/index.php/configure/shop/customer-preferences/?_token=vsDh2kpGm4c6OTbjSx-6uihb8n13jhX_uYl6csFP0QI\" class=\"link\"> Configuración de Clientes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/admin446f8tiznq6fruc1veh/index.php/configure/shop/contacts/?_token=vsDh2kpGm4c6OTbjSx-6uihb8n13jhX_uYl6csFP0QI\" class=\"link\"> Contacto
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/admin446f8tiznq6fruc1veh/index.php/configure/shop/seo-urls/?_token=vsDh2kpGm4c6OTbjSx-6uihb8n13jhX_uYl6csFP0QI\" class=\"link\"> Tráfico &amp; SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-Admin";
        // line 953
        echo "ParentSearchConf\">
                                <a href=\"http://localhost/admin446f8tiznq6fruc1veh/index.php?controller=AdminSearchConf&amp;token=8770dbccd6a1b1a4f929fdd4b7ef77a7\" class=\"link\"> Buscar
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/admin446f8tiznq6fruc1veh/index.php/configure/advanced/system-information/?_token=vsDh2kpGm4c6OTbjSx-6uihb8n13jhX_uYl6csFP0QI\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Parámetros Avanzados
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/admin446f8tiznq6fruc1veh/index.php/configure/advanced/system-information/?_token=vsDh2kpGm4c6OTbjSx-6uihb8n13jhX_uYl6csFP0QI\" class=\"link\"> Información
                                </a>
                              </li>

                                                      ";
        // line 983
        echo "                            
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/admin446f8tiznq6fruc1veh/index.php/configure/advanced/performance/?_token=vsDh2kpGm4c6OTbjSx-6uihb8n13jhX_uYl6csFP0QI\" class=\"link\"> Rendimiento
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/admin446f8tiznq6fruc1veh/index.php/configure/advanced/administration/?_token=vsDh2kpGm4c6OTbjSx-6uihb8n13jhX_uYl6csFP0QI\" class=\"link\"> Administración
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/admin446f8tiznq6fruc1veh/index.php/configure/advanced/emails/?_token=vsDh2kpGm4c6OTbjSx-6uihb8n13jhX_uYl6csFP0QI\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/admin446f8tiznq6fruc1veh/index.php/configure/advanced/import/?_token=vsDh2kpGm4c6OTbjSx-6uihb8n13jhX_uYl6csFP0QI\" class=\"";
        // line 1011
        echo "link\"> Importar
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/admin446f8tiznq6fruc1veh/index.php/configure/advanced/employees/?_token=vsDh2kpGm4c6OTbjSx-6uihb8n13jhX_uYl6csFP0QI\" class=\"link\"> Equipo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/admin446f8tiznq6fruc1veh/index.php/configure/advanced/sql-requests/?_token=vsDh2kpGm4c6OTbjSx-6uihb8n13jhX_uYl6csFP0QI\" class=\"link\"> Base de datos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/admin446f8tiznq6fruc1veh/index.php/configure/advanced/logs/?_token=vsDh2kpGm4c6OTbjSx-6uihb8n13jhX_uYl6csFP0QI\" class=\"link\"> Registros/Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
               ";
        // line 1043
        echo "                 <a href=\"/admin446f8tiznq6fruc1veh/index.php/configure/advanced/webservice-keys/?_token=vsDh2kpGm4c6OTbjSx-6uihb8n13jhX_uYl6csFP0QI\" class=\"link\"> Servicios Web
                                </a>
                              </li>

                                                                                                                                                                                                                                                    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/admin446f8tiznq6fruc1veh/index.php/configure/advanced/feature-flags/?_token=vsDh2kpGm4c6OTbjSx-6uihb8n13jhX_uYl6csFP0QI\" class=\"link\"> Características nuevas y experimentales
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"111\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/admin446f8tiznq6fruc1veh/index.php/configure/advanced/security/?_token=vsDh2kpGm4c6OTbjSx-6uihb8n13jhX_uYl6csFP0QI\" class=\"link\"> Security
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Diseño</li>
          
                      <li class=";
        // line 1082
        echo "\"breadcrumb-item active\">
              <a href=\"/admin446f8tiznq6fruc1veh/index.php/modules/link-widget/list?_token=vsDh2kpGm4c6OTbjSx-6uihb8n13jhX_uYl6csFP0QI\" aria-current=\"page\">Lista de enlaces</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Lista de enlaces          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-add\"
                  href=\"/admin446f8tiznq6fruc1veh/index.php/modules/link-widget/create?_token=vsDh2kpGm4c6OTbjSx-6uihb8n13jhX_uYl6csFP0QI\"                  title=\"Nuevo bloque\"                                  >
                  <i class=\"material-icons\">add_circle_outline</i>                  Nuevo bloque
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Ayuda\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/admin446f8tiznq6fruc1veh/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fmx%252Fdoc%252FAdminLinkWidget%253Fversion%253D8.1.5%2526country%253Dmx/Ayuda?_token=vsDh2kpGm4c6OTbjSx-6uihb8n13jhX_uYl6csFP0QI\"
                   id=\"product_form_open_help\"
                >
                  Ayuda
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu";
        // line 1129
        echo "\">
        
                              <a
              class=\"btn btn-floating-item   pointer\"              id=\"page-header-desc-floating-configuration-add\"
              href=\"/admin446f8tiznq6fruc1veh/index.php/modules/link-widget/create?_token=vsDh2kpGm4c6OTbjSx-6uihb8n13jhX_uYl6csFP0QI\"              title=\"Nuevo bloque\"            >
              Nuevo bloque
              <i class=\"material-icons\">add_circle_outline</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Ayuda\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/admin446f8tiznq6fruc1veh/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fmx%252Fdoc%252FAdminLinkWidget%253Fversion%253D8.1.5%2526country%253Dmx/Ayuda?_token=vsDh2kpGm4c6OTbjSx-6uihb8n13jhX_uYl6csFP0QI\"
            >
              Ayuda
            </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  \">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1162
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>¡Oh no!</h1>
  <p class=\"mt-3\">
    La versión para móviles de esta página no está disponible todavía.
  </p>
  <p class=\"mt-2\">
    Por favor, utilice una computadora de escritorio hasta que esta página sea adaptada para dispositivos móviles.
  </p>
  <p class=\"mt-2\">
    Gracias.
  </p>
  <a href=\"http://localhost/admin446f8tiznq6fruc1veh/index.php?controller=AdminDashboard&amp;token=6a1f75fa8b0a8a2a98de455371797bd2\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Volver
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
";
        // line 1196
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 102
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1162
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1196
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "__string_template__ea43f0fa502b9224981a77672fb573ac";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1359 => 1196,  1338 => 1162,  1327 => 102,  1318 => 1196,  1278 => 1162,  1243 => 1129,  1194 => 1082,  1153 => 1043,  1119 => 1011,  1089 => 983,  1057 => 953,  1024 => 922,  995 => 895,  957 => 859,  926 => 830,  893 => 799,  859 => 767,  828 => 738,  796 => 708,  764 => 678,  725 => 641,  693 => 611,  661 => 581,  628 => 550,  595 => 519,  564 => 490,  532 => 460,  491 => 421,  444 => 376,  392 => 326,  339 => 275,  291 => 229,  252 => 192,  235 => 177,  193 => 137,  153 => 102,  116 => 67,  89 => 42,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__ea43f0fa502b9224981a77672fb573ac", "");
    }
}
