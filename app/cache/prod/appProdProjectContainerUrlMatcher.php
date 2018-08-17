<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = $allowSchemes = array();
        if ($ret = $this->doMatch($pathinfo, $allow, $allowSchemes)) {
            return $ret;
        }
        if ($allow) {
            throw new MethodNotAllowedException(array_keys($allow));
        }
        if (!in_array($this->context->getMethod(), array('HEAD', 'GET'), true)) {
            // no-op
        } elseif ($allowSchemes) {
            redirect_scheme:
            $scheme = $this->context->getScheme();
            $this->context->setScheme(key($allowSchemes));
            try {
                if ($ret = $this->doMatch($pathinfo)) {
                    return $this->redirect($pathinfo, $ret['_route'], $this->context->getScheme()) + $ret;
                }
            } finally {
                $this->context->setScheme($scheme);
            }
        } elseif ('/' !== $pathinfo) {
            $pathinfo = '/' !== $pathinfo[-1] ? $pathinfo.'/' : substr($pathinfo, 0, -1);
            if ($ret = $this->doMatch($pathinfo, $allow, $allowSchemes)) {
                return $this->redirect($pathinfo, $ret['_route']) + $ret;
            }
            if ($allowSchemes) {
                goto redirect_scheme;
            }
        }

        throw new ResourceNotFoundException();
    }

    private function doMatch(string $rawPathinfo, array &$allow = array(), array &$allowSchemes = array()): ?array
    {
        $allow = $allowSchemes = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $context = $this->context;
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        switch ($pathinfo) {
            default:
                $routes = array(
                    '/admin/_partial/channels/' => array(array('_route' => 'sylius_admin_partial_channel_index', '_controller' => 'sylius.controller.channel:indexAction', '_sylius' => array('repository' => array('method' => 'findAll'), 'template' => '$template', 'permission' => true)), null, array('GET' => 0), null),
                    '/admin/_partial/taxons/tree' => array(array('_route' => 'sylius_admin_partial_taxon_tree', '_controller' => 'sylius.controller.taxon:indexAction', '_sylius' => array('template' => '$template', 'repository' => array('method' => 'findRootNodes'), 'permission' => true)), null, array('GET' => 0), null),
                    '/admin/ajax/taxons/root-nodes' => array(array('_route' => 'sylius_admin_ajax_taxon_root_nodes', '_controller' => 'sylius.controller.taxon:indexAction', '_format' => 'json', '_sylius' => array('serialization_groups' => array('Autocomplete'), 'permission' => true, 'repository' => array('method' => 'findRootNodes'))), null, array('GET' => 0), null),
                    '/admin/ajax/taxons/leafs' => array(array('_route' => 'sylius_admin_ajax_taxon_leafs', '_controller' => 'sylius.controller.taxon:indexAction', '_format' => 'json', '_sylius' => array('serialization_groups' => array('Autocomplete'), 'permission' => true, 'repository' => array('method' => 'findChildren', 'arguments' => array('parentCode' => '$parentCode')))), null, array('GET' => 0), null),
                    '/admin/ajax/taxons/leaf' => array(array('_route' => 'sylius_admin_ajax_taxon_by_code', '_controller' => 'sylius.controller.taxon:indexAction', '_format' => 'json', '_sylius' => array('serialization_groups' => array('Autocomplete'), 'permission' => true, 'repository' => array('method' => 'findBy', 'arguments' => array(array('code' => '$code'))))), null, array('GET' => 0), null),
                    '/admin/ajax/taxons/search' => array(array('_route' => 'sylius_admin_ajax_taxon_by_name_phrase', '_controller' => 'sylius.controller.taxon:indexAction', '_format' => 'json', '_sylius' => array('serialization_groups' => array('Autocomplete'), 'permission' => true, 'repository' => array('method' => 'findByNamePart', 'arguments' => array('phrase' => '$phrase')))), null, array('GET' => 0), null),
                    '/admin/ajax/taxons/generate-slug/' => array(array('_route' => 'sylius_admin_ajax_generate_taxon_slug', '_controller' => 'sylius.controller.taxon_slug:generateAction', '_format' => 'json'), null, array('GET' => 0), null),
                    '/admin/ajax/products/generate-slug/' => array(array('_route' => 'sylius_admin_ajax_generate_product_slug', '_controller' => 'sylius.controller.product_slug:generateAction', '_format' => 'json'), null, array('GET' => 0), null),
                    '/admin/ajax/products/search' => array(array('_route' => 'sylius_admin_ajax_product_by_name_phrase', '_controller' => 'sylius.controller.product:indexAction', '_format' => 'json', '_sylius' => array('serialization_groups' => array('Autocomplete'), 'permission' => true, 'repository' => array('method' => 'findByNamePart', 'arguments' => array('phrase' => '$phrase', 'locale' => 'expr:service(\'sylius.context.locale\').getLocaleCode()')))), null, array('GET' => 0), null),
                    '/admin/ajax/products/code' => array(array('_route' => 'sylius_admin_ajax_product_by_code', '_controller' => 'sylius.controller.product:indexAction', '_format' => 'json', '_sylius' => array('serialization_groups' => array('Autocomplete'), 'permission' => true, 'repository' => array('method' => 'findBy', 'arguments' => array(array('code' => '$code'))))), null, array('GET' => 0), null),
                    '/admin/ajax/products/' => array(array('_route' => 'sylius_admin_ajax_product_index', '_controller' => 'sylius.controller.product:indexAction', '_format' => 'json', '_sylius' => array('permission' => true, 'grid' => 'sylius_admin_product')), null, array('GET' => 0), null),
                    '/admin/ajax/product-taxons/update' => array(array('_route' => 'sylius_admin_ajax_product_taxons_update_position', '_controller' => 'sylius.controller.product_taxon:updatePositionsAction', '_format' => 'json', '_sylius' => array('permission' => true)), null, array('PUT' => 0), null),
                    '/admin/ajax/product-variants/update' => array(array('_route' => 'sylius_admin_ajax_product_variants_update_position', '_controller' => 'sylius.controller.product_variant:updatePositionsAction', '_format' => 'json', '_sylius' => array('permission' => true)), null, array('PUT' => 0), null),
                    '/admin/ajax/product-variants/search' => array(array('_route' => 'sylius_admin_ajax_product_variants_by_phrase', '_controller' => 'sylius.controller.product_variant:indexAction', '_format' => 'json', '_sylius' => array('serialization_groups' => array('Autocomplete'), 'permission' => true, 'repository' => array('method' => 'findByPhraseAndProductCode', 'arguments' => array('phrase' => '$phrase', 'locale' => 'expr:service(\'sylius.context.locale\').getLocaleCode()', 'productCode' => '$productCode')))), null, array('GET' => 0), null),
                    '/admin/ajax/product-variants/' => array(array('_route' => 'sylius_admin_ajax_product_variants_by_codes', '_controller' => 'sylius.controller.product_variant:indexAction', '_format' => 'json', '_sylius' => array('serialization_groups' => array('Autocomplete'), 'permission' => true, 'repository' => array('method' => 'findByCodesAndProductCode', 'arguments' => array('$code', '$productCode')))), null, array('GET' => 0), null),
                    '/admin/ajax/render-province-form' => array(array('_route' => 'sylius_admin_ajax_render_province_form', '_controller' => 'sylius.controller.province:choiceOrTextFieldFormAction', '_sylius' => array('template' => '@SyliusAdmin/Common/Form/_province.html.twig')), null, null, null),
                    '/admin/ajax/get-version' => array(array('_route' => 'sylius_admin_ajax_get_version', '_controller' => 'sylius.controller.admin.notification:getVersionAction', '_format' => 'json'), null, null, null),
                    '/admin/' => array(array('_route' => 'sylius_admin_dashboard', '_controller' => 'sylius.controller.admin.dashboard:indexAction'), null, null, null),
                    '/admin/users/' => array(array('_route' => 'sylius_admin_admin_user_index', '_controller' => 'sylius.controller.admin_user:indexAction', '_sylius' => array('grid' => 'sylius_admin_admin_user', 'section' => 'admin', 'template' => 'SyliusAdminBundle:Crud:index.html.twig', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_users_able_to_access_administration_panel', 'templates' => array('form' => 'SyliusAdminBundle:AdminUser:_form.html.twig'), 'icon' => 'lock'))), null, array('GET' => 0), null),
                    '/admin/users/new' => array(array('_route' => 'sylius_admin_admin_user_create', '_controller' => 'sylius.controller.admin_user:createAction', '_sylius' => array('section' => 'admin', 'template' => 'SyliusAdminBundle:Crud:create.html.twig', 'redirect' => 'sylius_admin_admin_user_index', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_users_able_to_access_administration_panel', 'templates' => array('form' => 'SyliusAdminBundle:AdminUser:_form.html.twig')))), null, array('GET' => 0, 'POST' => 1), null),
                    '/admin/users/bulk-delete' => array(array('_route' => 'sylius_admin_admin_user_bulk_delete', '_controller' => 'sylius.controller.admin_user:bulkDeleteAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_users_able_to_access_administration_panel', 'templates' => array('form' => 'SyliusAdminBundle:AdminUser:_form.html.twig')), 'paginate' => false, 'repository' => array('method' => 'findById', 'arguments' => array('$ids')))), null, array('DELETE' => 0), null),
                    '/admin/channels/' => array(array('_route' => 'sylius_admin_channel_index', '_controller' => 'sylius.controller.channel:indexAction', '_sylius' => array('grid' => 'sylius_admin_channel', 'section' => 'admin', 'template' => 'SyliusAdminBundle:Crud:index.html.twig', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.configure_channels_available_in_your_store', 'templates' => array('form' => 'SyliusAdminBundle:Channel:_form.html.twig'), 'icon' => 'share alternate'))), null, array('GET' => 0), null),
                    '/admin/channels/new' => array(array('_route' => 'sylius_admin_channel_create', '_controller' => 'sylius.controller.channel:createAction', '_sylius' => array('section' => 'admin', 'template' => 'SyliusAdminBundle:Crud:create.html.twig', 'redirect' => 'sylius_admin_channel_update', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.configure_channels_available_in_your_store', 'templates' => array('form' => 'SyliusAdminBundle:Channel:_form.html.twig')))), null, array('GET' => 0, 'POST' => 1), null),
                    '/admin/channels/bulk-delete' => array(array('_route' => 'sylius_admin_channel_bulk_delete', '_controller' => 'sylius.controller.channel:bulkDeleteAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.configure_channels_available_in_your_store', 'templates' => array('form' => 'SyliusAdminBundle:Channel:_form.html.twig')), 'paginate' => false, 'repository' => array('method' => 'findById', 'arguments' => array('$ids')))), null, array('DELETE' => 0), null),
                    '/admin/countries/' => array(array('_route' => 'sylius_admin_country_index', '_controller' => 'sylius.controller.country:indexAction', '_sylius' => array('grid' => 'sylius_admin_country', 'section' => 'admin', 'template' => 'SyliusAdminBundle:Crud:index.html.twig', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_shipping_destinations', 'templates' => array('form' => 'SyliusAdminBundle:Country:_form.html.twig'), 'icon' => 'flag'))), null, array('GET' => 0), null),
                    '/admin/countries/new' => array(array('_route' => 'sylius_admin_country_create', '_controller' => 'sylius.controller.country:createAction', '_sylius' => array('section' => 'admin', 'template' => 'SyliusAdminBundle:Crud:create.html.twig', 'redirect' => 'sylius_admin_country_update', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_shipping_destinations', 'templates' => array('form' => 'SyliusAdminBundle:Country:_form.html.twig')))), null, array('GET' => 0, 'POST' => 1), null),
                    '/admin/countries/bulk-delete' => array(array('_route' => 'sylius_admin_country_bulk_delete', '_controller' => 'sylius.controller.country:bulkDeleteAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_shipping_destinations', 'templates' => array('form' => 'SyliusAdminBundle:Country:_form.html.twig')), 'paginate' => false, 'repository' => array('method' => 'findById', 'arguments' => array('$ids')))), null, array('DELETE' => 0), null),
                    '/admin/currencies/' => array(array('_route' => 'sylius_admin_currency_index', '_controller' => 'sylius.controller.currency:indexAction', '_sylius' => array('grid' => 'sylius_admin_currency', 'section' => 'admin', 'template' => 'SyliusAdminBundle:Crud:index.html.twig', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_currencies_available_in_the_store', 'templates' => array('form' => 'SyliusAdminBundle:Currency:_form.html.twig'), 'icon' => 'dollar'))), null, array('GET' => 0), null),
                    '/admin/currencies/new' => array(array('_route' => 'sylius_admin_currency_create', '_controller' => 'sylius.controller.currency:createAction', '_sylius' => array('section' => 'admin', 'template' => 'SyliusAdminBundle:Crud:create.html.twig', 'redirect' => 'sylius_admin_currency_update', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_currencies_available_in_the_store', 'templates' => array('form' => 'SyliusAdminBundle:Currency:_form.html.twig')))), null, array('GET' => 0, 'POST' => 1), null),
                    '/admin/currencies/bulk-delete' => array(array('_route' => 'sylius_admin_currency_bulk_delete', '_controller' => 'sylius.controller.currency:bulkDeleteAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_currencies_available_in_the_store', 'templates' => array('form' => 'SyliusAdminBundle:Currency:_form.html.twig')), 'paginate' => false, 'repository' => array('method' => 'findById', 'arguments' => array('$ids')))), null, array('DELETE' => 0), null),
                    '/admin/customers/' => array(array('_route' => 'sylius_admin_customer_index', '_controller' => 'sylius.controller.customer:indexAction', '_sylius' => array('grid' => 'sylius_admin_customer', 'section' => 'admin', 'template' => 'SyliusAdminBundle:Crud:index.html.twig', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_your_customers', 'templates' => array('form' => 'SyliusAdminBundle:Customer:_form.html.twig'), 'icon' => 'users'))), null, array('GET' => 0), null),
                    '/admin/customers/new' => array(array('_route' => 'sylius_admin_customer_create', '_controller' => 'sylius.controller.customer:createAction', '_sylius' => array('section' => 'admin', 'template' => 'SyliusAdminBundle:Crud:create.html.twig', 'redirect' => 'sylius_admin_customer_update', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_your_customers', 'templates' => array('form' => 'SyliusAdminBundle:Customer:_form.html.twig')))), null, array('GET' => 0, 'POST' => 1), null),
                    '/admin/customers/bulk-delete' => array(array('_route' => 'sylius_admin_customer_bulk_delete', '_controller' => 'sylius.controller.customer:bulkDeleteAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_your_customers', 'templates' => array('form' => 'SyliusAdminBundle:Customer:_form.html.twig')), 'paginate' => false, 'repository' => array('method' => 'findById', 'arguments' => array('$ids')))), null, array('DELETE' => 0), null),
                    '/admin/orders-statistics' => array(array('_route' => 'sylius_admin_customer_orders_statistics', '_controller' => 'sylius.controller.customer_statistics:renderAction', '_sylius' => array('section' => 'admin', 'permission' => true)), null, array('GET' => 0), null),
                    '/admin/customer-groups/' => array(array('_route' => 'sylius_admin_customer_group_index', '_controller' => 'sylius.controller.customer_group:indexAction', '_sylius' => array('grid' => 'sylius_admin_customer_group', 'section' => 'admin', 'template' => 'SyliusAdminBundle:Crud:index.html.twig', 'permission' => true, 'vars' => array('header' => 'sylius.ui.customer_groups', 'subheader' => 'sylius.ui.manage_customer_groups', 'templates' => array('form' => 'SyliusAdminBundle:CustomerGroup:_form.html.twig'), 'icon' => 'archive'))), null, array('GET' => 0), null),
                    '/admin/customer-groups/new' => array(array('_route' => 'sylius_admin_customer_group_create', '_controller' => 'sylius.controller.customer_group:createAction', '_sylius' => array('section' => 'admin', 'template' => 'SyliusAdminBundle:Crud:create.html.twig', 'redirect' => 'sylius_admin_customer_group_update', 'permission' => true, 'vars' => array('header' => 'sylius.ui.customer_groups', 'subheader' => 'sylius.ui.manage_customer_groups', 'templates' => array('form' => 'SyliusAdminBundle:CustomerGroup:_form.html.twig')))), null, array('GET' => 0, 'POST' => 1), null),
                    '/admin/customer-groups/bulk-delete' => array(array('_route' => 'sylius_admin_customer_group_bulk_delete', '_controller' => 'sylius.controller.customer_group:bulkDeleteAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'vars' => array('header' => 'sylius.ui.customer_groups', 'subheader' => 'sylius.ui.manage_customer_groups', 'templates' => array('form' => 'SyliusAdminBundle:CustomerGroup:_form.html.twig')), 'paginate' => false, 'repository' => array('method' => 'findById', 'arguments' => array('$ids')))), null, array('DELETE' => 0), null),
                    '/admin/exchange-rates/' => array(array('_route' => 'sylius_admin_exchange_rate_index', '_controller' => 'sylius.controller.exchange_rate:indexAction', '_sylius' => array('grid' => 'sylius_admin_exchange_rate', 'section' => 'admin', 'template' => 'SyliusAdminBundle:Crud:index.html.twig', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_exchange_rates', 'templates' => array('form' => 'SyliusAdminBundle:ExchangeRate:_form.html.twig'), 'icon' => 'sliders'))), null, array('GET' => 0), null),
                    '/admin/exchange-rates/new' => array(array('_route' => 'sylius_admin_exchange_rate_create', '_controller' => 'sylius.controller.exchange_rate:createAction', '_sylius' => array('section' => 'admin', 'template' => 'SyliusAdminBundle:Crud:create.html.twig', 'redirect' => 'sylius_admin_exchange_rate_update', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_exchange_rates', 'templates' => array('form' => 'SyliusAdminBundle:ExchangeRate:_form.html.twig')))), null, array('GET' => 0, 'POST' => 1), null),
                    '/admin/exchange-rates/bulk-delete' => array(array('_route' => 'sylius_admin_exchange_rate_bulk_delete', '_controller' => 'sylius.controller.exchange_rate:bulkDeleteAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_exchange_rates', 'templates' => array('form' => 'SyliusAdminBundle:ExchangeRate:_form.html.twig')), 'paginate' => false, 'repository' => array('method' => 'findById', 'arguments' => array('$ids')))), null, array('DELETE' => 0), null),
                    '/admin/inventory/' => array(array('_route' => 'sylius_admin_inventory_index', '_controller' => 'sylius.controller.product_variant:indexAction', '_sylius' => array('template' => '@SyliusAdmin/Crud/index.html.twig', 'grid' => 'sylius_admin_inventory', 'section' => 'admin', 'permission' => true, 'vars' => array('icon' => 'history', 'templates' => array('breadcrumb' => '@SyliusAdmin/Inventory/Index/_breadcrumb.html.twig'), 'header' => 'sylius.ui.inventory', 'subheader' => 'sylius.ui.manage_inventory'))), null, array('GET' => 0), null),
                    '/admin/locales/' => array(array('_route' => 'sylius_admin_locale_index', '_controller' => 'sylius.controller.locale:indexAction', '_sylius' => array('grid' => 'sylius_admin_locale', 'section' => 'admin', 'template' => 'SyliusAdminBundle:Crud:index.html.twig', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_languages_available_in_the_store', 'templates' => array('form' => 'SyliusAdminBundle:Locale:_form.html.twig'), 'icon' => 'translate'))), null, array('GET' => 0), null),
                    '/admin/locales/new' => array(array('_route' => 'sylius_admin_locale_create', '_controller' => 'sylius.controller.locale:createAction', '_sylius' => array('section' => 'admin', 'template' => 'SyliusAdminBundle:Crud:create.html.twig', 'redirect' => 'sylius_admin_locale_index', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_languages_available_in_the_store', 'templates' => array('form' => 'SyliusAdminBundle:Locale:_form.html.twig')))), null, array('GET' => 0, 'POST' => 1), null),
                    '/admin/locales/bulk-delete' => array(array('_route' => 'sylius_admin_locale_bulk_delete', '_controller' => 'sylius.controller.locale:bulkDeleteAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_languages_available_in_the_store', 'templates' => array('form' => 'SyliusAdminBundle:Locale:_form.html.twig')), 'paginate' => false, 'repository' => array('method' => 'findById', 'arguments' => array('$ids')))), null, array('DELETE' => 0), null),
                    '/admin/orders/' => array(array('_route' => 'sylius_admin_order_index', '_controller' => 'sylius.controller.order:indexAction', '_sylius' => array('grid' => 'sylius_admin_order', 'section' => 'admin', 'template' => 'SyliusAdminBundle:Crud:index.html.twig', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.process_your_orders', 'icon' => 'cart'))), null, array('GET' => 0), null),
                    '/admin/payment-methods/' => array(array('_route' => 'sylius_admin_payment_method_index', '_controller' => 'sylius.controller.payment_method:indexAction', '_sylius' => array('grid' => 'sylius_admin_payment_method', 'section' => 'admin', 'template' => 'SyliusAdminBundle:Crud:index.html.twig', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_payment_methods_available_to_your_customers', 'templates' => array('form' => 'SyliusAdminBundle:PaymentMethod:_form.html.twig'), 'icon' => 'payment'))), null, array('GET' => 0), null),
                    '/admin/payment-methods/bulk-delete' => array(array('_route' => 'sylius_admin_payment_method_bulk_delete', '_controller' => 'sylius.controller.payment_method:bulkDeleteAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_payment_methods_available_to_your_customers', 'templates' => array('form' => 'SyliusAdminBundle:PaymentMethod:_form.html.twig')), 'paginate' => false, 'repository' => array('method' => 'findById', 'arguments' => array('$ids')))), null, array('DELETE' => 0), null),
                    '/admin/payment-gateways' => array(array('_route' => 'sylius_admin_get_payment_gateways', '_controller' => 'sylius.controller.payment_method:getPaymentGatewaysAction', 'template' => 'SyliusAdminBundle:PaymentMethod/Gateways:paymentGateways.html.twig'), null, array('GET' => 0), null),
                    '/admin/products/bulk-delete' => array(array('_route' => 'sylius_admin_product_bulk_delete', '_controller' => 'sylius.controller.product:bulkDeleteAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_your_product_catalog', 'templates' => array('form' => 'SyliusAdminBundle:Product:_form.html.twig')), 'paginate' => false, 'repository' => array('method' => 'findById', 'arguments' => array('$ids')))), null, array('DELETE' => 0), null),
                    '/admin/products/' => array(array('_route' => 'sylius_admin_product_index', '_controller' => 'sylius.controller.product:indexAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'grid' => 'sylius_admin_product', 'template' => 'SyliusAdminBundle:Product:index.html.twig', 'vars' => array('subheader' => 'sylius.ui.manage_your_product_catalog', 'icon' => 'cube'))), null, array('GET' => 0), null),
                    '/admin/products/new/simple' => array(array('_route' => 'sylius_admin_product_create_simple', '_controller' => 'sylius.controller.product:createAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'factory' => array('method' => 'createWithVariant'), 'template' => 'SyliusAdminBundle:Crud:create.html.twig', 'redirect' => 'sylius_admin_product_update', 'vars' => array('subheader' => 'sylius.ui.manage_your_product_catalog', 'templates' => array('form' => 'SyliusAdminBundle:Product:_form.html.twig'), 'route' => array('name' => 'sylius_admin_product_create_simple')))), null, array('GET' => 0, 'POST' => 1), null),
                    '/admin/product-association-types/' => array(array('_route' => 'sylius_admin_product_association_type_index', '_controller' => 'sylius.controller.product_association_type:indexAction', '_sylius' => array('grid' => 'sylius_admin_product_association_type', 'section' => 'admin', 'template' => 'SyliusAdminBundle:Crud:index.html.twig', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_association_types_of_your_products', 'templates' => array('form' => 'SyliusAdminBundle:ProductAssociationType:_form.html.twig'), 'icon' => 'tasks'))), null, array('GET' => 0), null),
                    '/admin/product-association-types/new' => array(array('_route' => 'sylius_admin_product_association_type_create', '_controller' => 'sylius.controller.product_association_type:createAction', '_sylius' => array('section' => 'admin', 'template' => 'SyliusAdminBundle:Crud:create.html.twig', 'redirect' => 'sylius_admin_product_association_type_update', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_association_types_of_your_products', 'templates' => array('form' => 'SyliusAdminBundle:ProductAssociationType:_form.html.twig')))), null, array('GET' => 0, 'POST' => 1), null),
                    '/admin/product-association-types/bulk-delete' => array(array('_route' => 'sylius_admin_product_association_type_bulk_delete', '_controller' => 'sylius.controller.product_association_type:bulkDeleteAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_association_types_of_your_products', 'templates' => array('form' => 'SyliusAdminBundle:ProductAssociationType:_form.html.twig')), 'paginate' => false, 'repository' => array('method' => 'findById', 'arguments' => array('$ids')))), null, array('DELETE' => 0), null),
                    '/admin/product-attributes/' => array(array('_route' => 'sylius_admin_product_attribute_index', '_controller' => 'sylius.controller.product_attribute:indexAction', '_sylius' => array('grid' => 'sylius_admin_product_attribute', 'section' => 'admin', 'template' => 'SyliusAdminBundle:Crud:index.html.twig', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_attributes_of_your_products', 'templates' => array('form' => 'SyliusAdminBundle:ProductAttribute:_form.html.twig'), 'icon' => 'cubes'))), null, array('GET' => 0), null),
                    '/admin/product-attributes/bulk-delete' => array(array('_route' => 'sylius_admin_product_attribute_bulk_delete', '_controller' => 'sylius.controller.product_attribute:bulkDeleteAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_attributes_of_your_products', 'templates' => array('form' => 'SyliusAdminBundle:ProductAttribute:_form.html.twig')), 'paginate' => false, 'repository' => array('method' => 'findById', 'arguments' => array('$ids')))), null, array('DELETE' => 0), null),
                    '/admin/attribute-types' => array(array('_route' => 'sylius_admin_get_attribute_types', '_controller' => 'sylius.controller.product_attribute:getAttributeTypesAction', 'template' => 'SyliusAdminBundle:ProductAttribute/Types:attributeTypes.html.twig'), null, array('GET' => 0), null),
                    '/admin/attributes' => array(array('_route' => 'sylius_admin_get_product_attributes', '_controller' => 'sylius.controller.product_attribute:renderAttributesAction', 'template' => 'SyliusAdminBundle:Product/Attribute:attributeChoice.html.twig'), null, array('GET' => 0), null),
                    '/admin/attribute-forms' => array(array('_route' => 'sylius_admin_render_attribute_forms', '_controller' => 'sylius.controller.product_attribute:renderAttributeValueFormsAction', 'template' => 'SyliusAdminBundle:Product/Attribute:attributeValues.html.twig'), null, array('GET' => 0), null),
                    '/admin/product-options/' => array(array('_route' => 'sylius_admin_product_option_index', '_controller' => 'sylius.controller.product_option:indexAction', '_sylius' => array('grid' => 'sylius_admin_product_option', 'section' => 'admin', 'template' => 'SyliusAdminBundle:Crud:index.html.twig', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_configuration_options_of_your_products', 'templates' => array('form' => 'SyliusAdminBundle:ProductOption:_form.html.twig'), 'icon' => 'options'))), null, array('GET' => 0), null),
                    '/admin/product-options/new' => array(array('_route' => 'sylius_admin_product_option_create', '_controller' => 'sylius.controller.product_option:createAction', '_sylius' => array('section' => 'admin', 'template' => 'SyliusAdminBundle:Crud:create.html.twig', 'redirect' => 'sylius_admin_product_option_update', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_configuration_options_of_your_products', 'templates' => array('form' => 'SyliusAdminBundle:ProductOption:_form.html.twig')))), null, array('GET' => 0, 'POST' => 1), null),
                    '/admin/product-options/bulk-delete' => array(array('_route' => 'sylius_admin_product_option_bulk_delete', '_controller' => 'sylius.controller.product_option:bulkDeleteAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_configuration_options_of_your_products', 'templates' => array('form' => 'SyliusAdminBundle:ProductOption:_form.html.twig')), 'paginate' => false, 'repository' => array('method' => 'findById', 'arguments' => array('$ids')))), null, array('DELETE' => 0), null),
                    '/admin/product-reviews/' => array(array('_route' => 'sylius_admin_product_review_index', '_controller' => 'sylius.controller.product_review:indexAction', '_sylius' => array('grid' => 'sylius_admin_product_review', 'section' => 'admin', 'template' => 'SyliusAdminBundle:Crud:index.html.twig', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_reviews_of_your_products', 'templates' => array('form' => 'SyliusAdminBundle:ProductReview:_form.html.twig'), 'icon' => 'newspaper'))), null, array('GET' => 0), null),
                    '/admin/product-reviews/bulk-delete' => array(array('_route' => 'sylius_admin_product_review_bulk_delete', '_controller' => 'sylius.controller.product_review:bulkDeleteAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_reviews_of_your_products', 'templates' => array('form' => 'SyliusAdminBundle:ProductReview:_form.html.twig')), 'paginate' => false, 'repository' => array('method' => 'findById', 'arguments' => array('$ids')))), null, array('DELETE' => 0), null),
                    '/admin/promotions/' => array(array('_route' => 'sylius_admin_promotion_index', '_controller' => 'sylius.controller.promotion:indexAction', '_sylius' => array('grid' => 'sylius_admin_promotion', 'section' => 'admin', 'template' => 'SyliusAdminBundle:Crud:index.html.twig', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_discounts_and_promotional_campaigns', 'templates' => array('form' => '@SyliusAdmin/Promotion/_form.html.twig'), 'icon' => 'in cart'))), null, array('GET' => 0), null),
                    '/admin/promotions/new' => array(array('_route' => 'sylius_admin_promotion_create', '_controller' => 'sylius.controller.promotion:createAction', '_sylius' => array('section' => 'admin', 'template' => 'SyliusAdminBundle:Crud:create.html.twig', 'redirect' => 'sylius_admin_promotion_update', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_discounts_and_promotional_campaigns', 'templates' => array('form' => '@SyliusAdmin/Promotion/_form.html.twig')))), null, array('GET' => 0, 'POST' => 1), null),
                    '/admin/promotions/bulk-delete' => array(array('_route' => 'sylius_admin_promotion_bulk_delete', '_controller' => 'sylius.controller.promotion:bulkDeleteAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_discounts_and_promotional_campaigns', 'templates' => array('form' => '@SyliusAdmin/Promotion/_form.html.twig')), 'paginate' => false, 'repository' => array('method' => 'findById', 'arguments' => array('$ids')))), null, array('DELETE' => 0), null),
                    '/admin/login' => array(array('_route' => 'sylius_admin_login', '_controller' => 'sylius.controller.security:loginAction', '_sylius' => array('template' => 'SyliusAdminBundle:Security:login.html.twig', 'permission' => true, 'logged_in_route' => 'sylius_admin_dashboard')), null, array('GET' => 0), null),
                    '/admin/login-check' => array(array('_route' => 'sylius_admin_login_check', '_controller' => 'sylius.controller.security:checkAction'), null, array('POST' => 0), null),
                    '/admin/logout' => array(array('_route' => 'sylius_admin_logout'), null, array('GET' => 0), null),
                    '/admin/shipping-categories/' => array(array('_route' => 'sylius_admin_shipping_category_index', '_controller' => 'sylius.controller.shipping_category:indexAction', '_sylius' => array('grid' => 'sylius_admin_shipping_category', 'section' => 'admin', 'template' => 'SyliusAdminBundle:Crud:index.html.twig', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_shipping_categories_for_your_store', 'templates' => array('form' => 'SyliusAdminBundle:ShippingCategory:_form.html.twig'), 'icon' => 'list layout'))), null, array('GET' => 0), null),
                    '/admin/shipping-categories/new' => array(array('_route' => 'sylius_admin_shipping_category_create', '_controller' => 'sylius.controller.shipping_category:createAction', '_sylius' => array('section' => 'admin', 'template' => 'SyliusAdminBundle:Crud:create.html.twig', 'redirect' => 'sylius_admin_shipping_category_update', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_shipping_categories_for_your_store', 'templates' => array('form' => 'SyliusAdminBundle:ShippingCategory:_form.html.twig')))), null, array('GET' => 0, 'POST' => 1), null),
                    '/admin/shipping-categories/bulk-delete' => array(array('_route' => 'sylius_admin_shipping_category_bulk_delete', '_controller' => 'sylius.controller.shipping_category:bulkDeleteAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_shipping_categories_for_your_store', 'templates' => array('form' => 'SyliusAdminBundle:ShippingCategory:_form.html.twig')), 'paginate' => false, 'repository' => array('method' => 'findById', 'arguments' => array('$ids')))), null, array('DELETE' => 0), null),
                    '/admin/shipping-methods/' => array(array('_route' => 'sylius_admin_shipping_method_index', '_controller' => 'sylius.controller.shipping_method:indexAction', '_sylius' => array('grid' => 'sylius_admin_shipping_method', 'section' => 'admin', 'template' => 'SyliusAdminBundle:Crud:index.html.twig', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_shipping_methods_for_your_store', 'templates' => array('form' => 'SyliusAdminBundle:ShippingMethod:_form.html.twig'), 'icon' => 'shipping'))), null, array('GET' => 0), null),
                    '/admin/shipping-methods/new' => array(array('_route' => 'sylius_admin_shipping_method_create', '_controller' => 'sylius.controller.shipping_method:createAction', '_sylius' => array('section' => 'admin', 'template' => 'SyliusAdminBundle:Crud:create.html.twig', 'redirect' => 'sylius_admin_shipping_method_update', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_shipping_methods_for_your_store', 'templates' => array('form' => 'SyliusAdminBundle:ShippingMethod:_form.html.twig')))), null, array('GET' => 0, 'POST' => 1), null),
                    '/admin/shipping-methods/bulk-delete' => array(array('_route' => 'sylius_admin_shipping_method_bulk_delete', '_controller' => 'sylius.controller.shipping_method:bulkDeleteAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_shipping_methods_for_your_store', 'templates' => array('form' => 'SyliusAdminBundle:ShippingMethod:_form.html.twig')), 'paginate' => false, 'repository' => array('method' => 'findById', 'arguments' => array('$ids')))), null, array('DELETE' => 0), null),
                    '/admin/taxons/new' => array(array('_route' => 'sylius_admin_taxon_create', '_controller' => 'sylius.controller.taxon:createAction', '_sylius' => array('section' => 'admin', 'template' => 'SyliusAdminBundle:Taxon:create.html.twig', 'redirect' => 'sylius_admin_taxon_update', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_categorization_of_your_products', 'templates' => array('form' => '@SyliusAdmin/Taxon/_form.html.twig')))), null, array('GET' => 0, 'POST' => 1), null),
                    '/admin/taxons/bulk-delete' => array(array('_route' => 'sylius_admin_taxon_bulk_delete', '_controller' => 'sylius.controller.taxon:bulkDeleteAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_categorization_of_your_products', 'templates' => array('form' => '@SyliusAdmin/Taxon/_form.html.twig')), 'paginate' => false, 'repository' => array('method' => 'findById', 'arguments' => array('$ids')))), null, array('DELETE' => 0), null),
                    '/admin/taxons/' => array(array('_route' => 'sylius_admin_taxon_index', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction', 'route' => 'sylius_admin_taxon_create', 'permanent' => true), null, array('GET' => 0), null),
                    '/admin/tax-categories/' => array(array('_route' => 'sylius_admin_tax_category_index', '_controller' => 'sylius.controller.tax_category:indexAction', '_sylius' => array('grid' => 'sylius_admin_tax_category', 'section' => 'admin', 'template' => 'SyliusAdminBundle:Crud:index.html.twig', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_taxation_of_your_products', 'templates' => array('form' => 'SyliusAdminBundle:TaxCategory:_form.html.twig'), 'icon' => 'tags'))), null, array('GET' => 0), null),
                    '/admin/tax-categories/new' => array(array('_route' => 'sylius_admin_tax_category_create', '_controller' => 'sylius.controller.tax_category:createAction', '_sylius' => array('section' => 'admin', 'template' => 'SyliusAdminBundle:Crud:create.html.twig', 'redirect' => 'sylius_admin_tax_category_update', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_taxation_of_your_products', 'templates' => array('form' => 'SyliusAdminBundle:TaxCategory:_form.html.twig')))), null, array('GET' => 0, 'POST' => 1), null),
                    '/admin/tax-categories/bulk-delete' => array(array('_route' => 'sylius_admin_tax_category_bulk_delete', '_controller' => 'sylius.controller.tax_category:bulkDeleteAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_taxation_of_your_products', 'templates' => array('form' => 'SyliusAdminBundle:TaxCategory:_form.html.twig')), 'paginate' => false, 'repository' => array('method' => 'findById', 'arguments' => array('$ids')))), null, array('DELETE' => 0), null),
                    '/admin/tax-rates/' => array(array('_route' => 'sylius_admin_tax_rate_index', '_controller' => 'sylius.controller.tax_rate:indexAction', '_sylius' => array('grid' => 'sylius_admin_tax_rate', 'section' => 'admin', 'template' => 'SyliusAdminBundle:Crud:index.html.twig', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_taxation_of_your_products', 'templates' => array('form' => 'SyliusAdminBundle:TaxRate:_form.html.twig'), 'icon' => 'money'))), null, array('GET' => 0), null),
                    '/admin/tax-rates/new' => array(array('_route' => 'sylius_admin_tax_rate_create', '_controller' => 'sylius.controller.tax_rate:createAction', '_sylius' => array('section' => 'admin', 'template' => 'SyliusAdminBundle:Crud:create.html.twig', 'redirect' => 'sylius_admin_tax_rate_update', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_taxation_of_your_products', 'templates' => array('form' => 'SyliusAdminBundle:TaxRate:_form.html.twig')))), null, array('GET' => 0, 'POST' => 1), null),
                    '/admin/tax-rates/bulk-delete' => array(array('_route' => 'sylius_admin_tax_rate_bulk_delete', '_controller' => 'sylius.controller.tax_rate:bulkDeleteAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_taxation_of_your_products', 'templates' => array('form' => 'SyliusAdminBundle:TaxRate:_form.html.twig')), 'paginate' => false, 'repository' => array('method' => 'findById', 'arguments' => array('$ids')))), null, array('DELETE' => 0), null),
                    '/admin/zones/' => array(array('_route' => 'sylius_admin_zone_index', '_controller' => 'sylius.controller.zone:indexAction', '_sylius' => array('grid' => 'sylius_admin_zone', 'section' => 'admin', 'template' => 'SyliusAdminBundle:Crud:index.html.twig', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_geographical_zones', 'templates' => array('form' => 'SyliusAdminBundle:Zone:_form.html.twig'), 'icon' => 'world'))), null, array('GET' => 0), null),
                    '/admin/zones/bulk-delete' => array(array('_route' => 'sylius_admin_zone_bulk_delete', '_controller' => 'sylius.controller.zone:bulkDeleteAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_geographical_zones', 'templates' => array('form' => 'SyliusAdminBundle:Zone:_form.html.twig')), 'paginate' => false, 'repository' => array('method' => 'findById', 'arguments' => array('$ids')))), null, array('DELETE' => 0), null),
                    '/api/oauth/v2/token' => array(array('_route' => 'fos_oauth_server_token', '_controller' => 'fos_oauth_server.controller.token:tokenAction'), null, array('GET' => 0, 'POST' => 1), null),
                    '/payment/capture/session-token' => array(array('_route' => 'payum_capture_do_session', '_controller' => 'Payum\\Bundle\\PayumBundle\\Controller\\CaptureController::doSessionTokenAction'), null, null, null),
                    '/' => array(array('_route' => 'sylius_shop_default_locale', '_controller' => 'sylius.controller.shop.locale_switch:switchAction'), null, array('GET' => 0), null),
                );

                if (!isset($routes[$pathinfo])) {
                    break;
                }
                list($ret, $requiredHost, $requiredMethods, $requiredSchemes) = $routes[$pathinfo];

                $hasRequiredScheme = !$requiredSchemes || isset($requiredSchemes[$context->getScheme()]);
                if ($requiredMethods && !isset($requiredMethods[$canonicalMethod]) && !isset($requiredMethods[$requestMethod])) {
                    if ($hasRequiredScheme) {
                        $allow += $requiredMethods;
                    }
                    break;
                }
                if (!$hasRequiredScheme) {
                    $allowSchemes += $requiredSchemes;
                    break;
                }

                return $ret;
        }

        $matchedPathinfo = $pathinfo;
        $regexList = array(
            0 => '{^(?'
                    .'|/a(?'
                        .'|dmin/(?'
                            .'|_partial/(?'
                                .'|address/log\\-entry/([^/]++)(*:59)'
                                .'|customers/(?'
                                    .'|latest/([^/]++)(*:94)'
                                    .'|([^/]++)(*:109)'
                                .')'
                                .'|orders/(?'
                                    .'|latest/([^/]++)(?'
                                        .'|(*:146)'
                                        .'|/([^/]++)(*:163)'
                                    .')'
                                    .'|([^/]++)/shipments/([^/]++)/ship(*:204)'
                                .')'
                                .'|pro(?'
                                    .'|ducts/([^/]++)(*:233)'
                                    .'|motions/([^/]++)(*:257)'
                                .')'
                                .'|taxons/([^/]++)(*:281)'
                            .')'
                            .'|ajax/taxons/([^/]++)/move(*:315)'
                            .'|impersonate(?:/([^/]++))?(*:348)'
                            .'|users/([^/]++)(?'
                                .'|/edit(*:378)'
                                .'|(*:386)'
                            .')'
                            .'|c(?'
                                .'|hannels/([^/]++)(?'
                                    .'|/edit(*:423)'
                                    .'|(*:431)'
                                .')'
                                .'|ountries/([^/]++)/edit(*:462)'
                                .'|u(?'
                                    .'|rrencies/([^/]++)/edit(*:496)'
                                    .'|stomer(?'
                                        .'|s/([^/]++)(?'
                                            .'|/(?'
                                                .'|edit(*:534)'
                                                .'|orders(*:548)'
                                            .')'
                                            .'|(*:557)'
                                        .')'
                                        .'|\\-groups/([^/]++)(?'
                                            .'|/edit(*:591)'
                                            .'|(*:599)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|exchange\\-rates/([^/]++)(?'
                                .'|/edit(*:643)'
                                .'|(*:651)'
                            .')'
                            .'|locales/([^/]++)/edit(*:681)'
                            .'|orders/([^/]++)(?'
                                .'|(*:707)'
                                .'|/(?'
                                    .'|history(*:726)'
                                    .'|edit(*:738)'
                                    .'|cancel(*:752)'
                                    .'|payments/([^/]++)/(?'
                                        .'|complete(*:789)'
                                        .'|refund(*:803)'
                                    .')'
                                .')'
                            .')'
                            .'|([^/]++)/ship(*:827)'
                            .'|p(?'
                                .'|ayment\\-methods/(?'
                                    .'|([^/]++)(?'
                                        .'|/edit(*:874)'
                                        .'|(*:882)'
                                    .')'
                                    .'|new/([^/]++)(*:903)'
                                .')'
                                .'|ro(?'
                                    .'|duct(?'
                                        .'|s/(?'
                                            .'|([^/]++)(?'
                                                .'|/edit(*:945)'
                                                .'|(*:953)'
                                            .')'
                                            .'|taxon/([^/]++)(*:976)'
                                            .'|new(*:987)'
                                            .'|([^/]++)/variants/(?'
                                                .'|(*:1016)'
                                                .'|new(*:1028)'
                                                .'|([^/]++)/edit(*:1050)'
                                                .'|bulk\\-delete(*:1071)'
                                                .'|([^/]++)(*:1088)'
                                                .'|generate(*:1105)'
                                            .')'
                                        .')'
                                        .'|\\-(?'
                                            .'|a(?'
                                                .'|ssociation\\-types/([^/]++)(?'
                                                    .'|/edit(*:1159)'
                                                    .'|(*:1168)'
                                                .')'
                                                .'|ttributes/([^/]++)(?'
                                                    .'|/(?'
                                                        .'|edit(*:1207)'
                                                        .'|new(*:1219)'
                                                    .')'
                                                    .'|(*:1229)'
                                                .')'
                                            .')'
                                            .'|options/([^/]++)(?'
                                                .'|/edit(*:1264)'
                                                .'|(*:1273)'
                                            .')'
                                            .'|review(?'
                                                .'|s/([^/]++)(?'
                                                    .'|/edit(*:1310)'
                                                    .'|(*:1319)'
                                                .')'
                                                .'|/([^/]++)/(?'
                                                    .'|accept(*:1348)'
                                                    .'|reject(*:1363)'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                    .'|motions/([^/]++)(?'
                                        .'|/(?'
                                            .'|edit(*:1403)'
                                            .'|coupons/(?'
                                                .'|(*:1423)'
                                                .'|new(*:1435)'
                                                .'|([^/]++)/edit(*:1457)'
                                                .'|generate(*:1474)'
                                                .'|bulk\\-delete(*:1495)'
                                                .'|([^/]++)(*:1512)'
                                            .')'
                                        .')'
                                        .'|(*:1523)'
                                    .')'
                                .')'
                            .')'
                            .'|sh(?'
                                .'|ipping\\-(?'
                                    .'|categories/([^/]++)(?'
                                        .'|/edit(*:1578)'
                                        .'|(*:1587)'
                                    .')'
                                    .'|methods/([^/]++)(?'
                                        .'|/(?'
                                            .'|edit(*:1624)'
                                            .'|archive(*:1640)'
                                        .')'
                                        .'|(*:1650)'
                                    .')'
                                .')'
                                .'|op\\-user/([^/]++)(*:1678)'
                            .')'
                            .'|tax(?'
                                .'|ons/(?'
                                    .'|([^/]++)(?'
                                        .'|/edit(*:1717)'
                                        .'|(*:1726)'
                                    .')'
                                    .'|new/([^/]++)(*:1748)'
                                .')'
                                .'|\\-(?'
                                    .'|categories/([^/]++)(?'
                                        .'|/edit(*:1790)'
                                        .'|(*:1799)'
                                    .')'
                                    .'|rates/([^/]++)(?'
                                        .'|/edit(*:1831)'
                                        .'|(*:1840)'
                                    .')'
                                .')'
                            .')'
                            .'|zones/(?'
                                .'|([^/]++)(?'
                                    .'|/edit(*:1877)'
                                    .'|(*:1886)'
                                .')'
                                .'|(country|province|zone)/new(*:1923)'
                            .')'
                        .')'
                        .'|pi/v([^/]++)/(?'
                            .'|orders/([^/]++)(?'
                                .'|/(?'
                                    .'|adjustments/(?'
                                        .'|(*:1987)'
                                        .'|([^/]++)(?'
                                            .'|(*:2007)'
                                        .')'
                                    .')'
                                    .'|cancel(*:2024)'
                                    .'|shipments/([^/]++)/ship(*:2056)'
                                    .'|payments/([^/]++)/complete(*:2091)'
                                .')'
                                .'|(*:2101)'
                            .')'
                            .'|users/(?'
                                .'|(*:2120)'
                                .'|([^/]++)(?'
                                    .'|(*:2140)'
                                .')'
                            .')'
                            .'|c(?'
                                .'|arts/(?'
                                    .'|(*:2163)'
                                    .'|([^/]++)(?'
                                        .'|(*:2183)'
                                        .'|/items/(?'
                                            .'|(*:2202)'
                                            .'|([^/]++)(?'
                                                .'|(*:2222)'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                                .'|h(?'
                                    .'|annels/(?'
                                        .'|(*:2249)'
                                        .'|([^/]++)(?'
                                            .'|(*:2269)'
                                        .')'
                                    .')'
                                    .'|eckouts/(?'
                                        .'|([^/]++)(*:2299)'
                                        .'|addressing/([^/]++)(*:2327)'
                                        .'|select\\-(?'
                                            .'|shipping/([^/]++)(?'
                                                .'|(*:2367)'
                                            .')'
                                            .'|payment/([^/]++)(?'
                                                .'|(*:2396)'
                                            .')'
                                        .')'
                                        .'|complete/([^/]++)(*:2424)'
                                    .')'
                                .')'
                                .'|ountries/(?'
                                    .'|(*:2447)'
                                    .'|([^/]++)(?'
                                        .'|(*:2467)'
                                        .'|/provinces/([^/]++)(?'
                                            .'|(*:2498)'
                                        .')'
                                    .')'
                                .')'
                                .'|u(?'
                                    .'|rrencies/(?'
                                        .'|(*:2526)'
                                        .'|([^/]++)(?'
                                            .'|(*:2546)'
                                        .')'
                                    .')'
                                    .'|stomers/(?'
                                        .'|(*:2568)'
                                        .'|([^/]++)(*:2585)'
                                        .'|(*:2594)'
                                        .'|([^/]++)(?'
                                            .'|(*:2614)'
                                            .'|/orders/(*:2631)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|exchange\\-rates/(?'
                                .'|(*:2663)'
                                .'|([^/\\-]++)\\-([^/]++)(?'
                                    .'|(*:2695)'
                                .')'
                            .')'
                            .'|locales/(?'
                                .'|(*:2717)'
                                .'|([^/]++)(?'
                                    .'|(*:2737)'
                                .')'
                            .')'
                            .'|p(?'
                                .'|ayment(?'
                                    .'|\\-methods/([^/]++)(*:2779)'
                                    .'|s/(?'
                                        .'|(*:2793)'
                                        .'|([^/]++)(*:2810)'
                                    .')'
                                .')'
                                .'|ro(?'
                                    .'|duct(?'
                                        .'|s/(?'
                                            .'|(*:2838)'
                                            .'|([^/]++)(?'
                                                .'|(*:2858)'
                                                .'|/(?'
                                                    .'|reviews/(?'
                                                        .'|(*:2882)'
                                                        .'|([^/]++)(?'
                                                            .'|(*:2902)'
                                                            .'|/(?'
                                                                .'|accept(*:2921)'
                                                                .'|reject(*:2936)'
                                                            .')'
                                                        .')'
                                                    .')'
                                                    .'|variants/(?'
                                                        .'|(*:2960)'
                                                        .'|([^/]++)(?'
                                                            .'|(*:2980)'
                                                        .')'
                                                    .')'
                                                .')'
                                            .')'
                                        .')'
                                        .'|\\-(?'
                                            .'|a(?'
                                                .'|ttributes/(?'
                                                    .'|(*:3016)'
                                                    .'|([^/]++)(?'
                                                        .'|(*:3036)'
                                                        .'|(*:3045)'
                                                    .')'
                                                .')'
                                                .'|ssociation\\-types/(?'
                                                    .'|(*:3077)'
                                                    .'|([^/]++)(?'
                                                        .'|(*:3097)'
                                                    .')'
                                                .')'
                                            .')'
                                            .'|options/(?'
                                                .'|(*:3120)'
                                                .'|([^/]++)(?'
                                                    .'|(*:3140)'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                    .'|motions/(?'
                                        .'|(*:3164)'
                                        .'|([^/]++)(?'
                                            .'|(*:3184)'
                                            .'|/coupons/(?'
                                                .'|(*:3205)'
                                                .'|([^/]++)(?'
                                                    .'|(*:3225)'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|tax(?'
                                .'|ons/(?'
                                    .'|([^/]++)/products(*:3270)'
                                    .'|(*:3279)'
                                    .'|([^/]++)(?'
                                        .'|(*:3299)'
                                    .')'
                                .')'
                                .'|\\-(?'
                                    .'|categories/(?'
                                        .'|(*:3329)'
                                        .'|([^/]++)(?'
                                            .'|(*:3349)'
                                        .')'
                                    .')'
                                    .'|rates/(?'
                                        .'|(*:3369)'
                                        .'|([^/]++)(*:3386)'
                                    .')'
                                .')'
                            .')'
                            .'|ship(?'
                                .'|ments/(?'
                                    .'|(*:3414)'
                                    .'|([^/]++)(*:3431)'
                                .')'
                                .'|ping\\-(?'
                                    .'|categories/(?'
                                        .'|(*:3464)'
                                        .'|([^/]++)(?'
                                            .'|(*:3484)'
                                        .')'
                                    .')'
                                    .'|methods/([^/]++)(*:3511)'
                                .')'
                            .')'
                            .'|zones/(?'
                                .'|(*:3531)'
                                .'|([^/]++)(?'
                                    .'|(*:3551)'
                                    .'|(*:3560)'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/ajax/users/check(*:3615)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/ajax/cart/add(*:3663)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/ajax/cart/([^/]++)/remove(*:3723)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/ajax/render\\-province\\-form(*:3785)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/_partial/taxons/by\\-slug/(.+)(*:3849)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/_partial/taxons/by\\-code/([^/]++)(*:3917)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/_partial/cart/summary(*:3973)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/_partial/cart/add\\-item(*:4031)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/_partial/products/latest/([^/]++)(*:4099)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/_partial/products/([^/]++)(*:4160)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/_partial/products/([^/]++)/reviews/latest(?:/([^/]++))?(*:4250)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/_partial/products/([^/]++)/associations/([^/]++)(*:4333)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/(*:4368)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/login(*:4408)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/login\\-check(*:4455)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/logout(*:4496)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/register(*:4539)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/forgotten\\-password(*:4593)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/forgotten\\-password/([^/]++)(*:4656)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/verify(*:4697)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/verify/([^/]++)(*:4747)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/products/([^/]++)(*:4799)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/taxons/(.+)(*:4845)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/products/([^/]++)/reviews/(*:4906)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/products/([^/]++)/reviews/new(*:4970)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/cart/(?'
                        .'|(*:5013)'
                    .')'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/checkout/(*:5058)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/checkout/address(*:5109)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/checkout/select\\-shipping(*:5169)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/checkout/select\\-payment(*:5228)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/checkout/complete(*:5280)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/contact/(*:5323)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/order/thank\\-you(*:5374)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/order/([^/]++)/pay(*:5427)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/order/after\\-pay(*:5478)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/order/([^/]++)(*:5527)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/account/orders/(*:5577)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/account/orders/([^/]++)(*:5635)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/account/address\\-book/(*:5692)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/account/address\\-book/add(*:5752)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/account/address\\-book/([^/]++)/edit(*:5822)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/account/address\\-book/([^/]++)(*:5887)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/account/address\\-book/([^/]++)/set\\-as\\-default(*:5969)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/account/(*:6012)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/account/dashboard(*:6064)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/account/profile/edit(*:6119)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/account/change\\-password(*:6178)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/switch\\-currency/([^/]++)(*:6238)'
                    .'|/([a-z]{2}(?:_[A-Z]{2})?)/switch\\-locale/([^/]++)(*:6296)'
                    .'|/payment/(?'
                        .'|capture/([^/]++)(*:6333)'
                        .'|notify/(?'
                            .'|unsafe/([^/]++)(*:6367)'
                            .'|([^/]++)(*:6384)'
                        .')'
                    .')'
                    .'|/media/cache/resolve/(?'
                        .'|([A-z0-9_-]*)/rc/([^/]++)/(.+)(*:6449)'
                        .'|([A-z0-9_-]*)/(.+)(*:6476)'
                    .')'
                .')$}sD',
        );

        foreach ($regexList as $offset => $regex) {
            while (preg_match($regex, $matchedPathinfo, $matches)) {
                switch ($m = (int) $matches['MARK']) {
                    case 1987:
                        $matches = array('version' => $matches[1] ?? null, 'orderId' => $matches[2] ?? null);

                        // sylius_admin_api_adjustment_index
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_adjustment_index') + $matches, array('_controller' => 'sylius.controller.adjustment:indexAction', '_sylius' => array('serialization_version' => '$version', 'repository' => array('method' => 'findByOrder', 'arguments' => array('$orderId')), 'paginate' => false)));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_adjustment_index;
                        }

                        return $ret;
                        not_sylius_admin_api_adjustment_index:

                        // sylius_admin_api_adjustment_create
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_adjustment_create') + $matches, array('_controller' => 'sylius.controller.adjustment:createAction', '_sylius' => array('serialization_version' => '$version')));
                        if (!isset(($a = array('POST' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_adjustment_create;
                        }

                        return $ret;
                        not_sylius_admin_api_adjustment_create:

                        break;
                    case 2007:
                        $matches = array('version' => $matches[1] ?? null, 'orderId' => $matches[2] ?? null, 'id' => $matches[3] ?? null);

                        // sylius_admin_api_adjustment_update
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_adjustment_update') + $matches, array('_controller' => 'sylius.controller.adjustment:updateAction', '_sylius' => array('serialization_version' => '$version')));
                        if (!isset(($a = array('PUT' => 0, 'PATCH' => 1))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_adjustment_update;
                        }

                        return $ret;
                        not_sylius_admin_api_adjustment_update:

                        // sylius_admin_api_adjustment_delete
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_adjustment_delete') + $matches, array('_controller' => 'sylius.controller.adjustment:deleteAction', '_sylius' => array('serialization_version' => '$version', 'filterable' => true, 'criteria' => array('order' => '$orderId'), 'csrf_protection' => false)));
                        if (!isset(($a = array('DELETE' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_adjustment_delete;
                        }

                        return $ret;
                        not_sylius_admin_api_adjustment_delete:

                        break;
                    case 2120:
                        $matches = array('version' => $matches[1] ?? null);

                        // sylius_api_admin_user_index
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_api_admin_user_index') + $matches, array('_controller' => 'sylius.controller.admin_user:indexAction', '_sylius' => array('serialization_groups' => array('Default'), 'serialization_version' => '$version', 'section' => 'api', 'permission' => false)));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_sylius_api_admin_user_index;
                        }

                        return $ret;
                        not_sylius_api_admin_user_index:

                        // sylius_api_admin_user_create
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_api_admin_user_create') + $matches, array('_controller' => 'sylius.controller.admin_user:createAction', '_sylius' => array('serialization_groups' => array('Default', 'Detailed'), 'serialization_version' => '$version', 'section' => 'api', 'permission' => false)));
                        if (!isset(($a = array('POST' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_api_admin_user_create;
                        }

                        return $ret;
                        not_sylius_api_admin_user_create:

                        break;
                    case 2140:
                        $matches = array('version' => $matches[1] ?? null, 'id' => $matches[2] ?? null);

                        // sylius_api_admin_user_update
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_api_admin_user_update') + $matches, array('_controller' => 'sylius.controller.admin_user:updateAction', '_sylius' => array('serialization_groups' => array('Default', 'Detailed'), 'serialization_version' => '$version', 'section' => 'api', 'permission' => false)));
                        if (!isset(($a = array('PUT' => 0, 'PATCH' => 1))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_api_admin_user_update;
                        }

                        return $ret;
                        not_sylius_api_admin_user_update:

                        // sylius_api_admin_user_show
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_api_admin_user_show') + $matches, array('_controller' => 'sylius.controller.admin_user:showAction', '_sylius' => array('serialization_groups' => array('Default', 'Detailed'), 'serialization_version' => '$version', 'section' => 'api', 'permission' => false)));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_sylius_api_admin_user_show;
                        }

                        return $ret;
                        not_sylius_api_admin_user_show:

                        // sylius_api_admin_user_delete
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_api_admin_user_delete') + $matches, array('_controller' => 'sylius.controller.admin_user:deleteAction', '_sylius' => array('csrf_protection' => false, 'serialization_version' => '$version', 'section' => 'api', 'permission' => false)));
                        if (!isset(($a = array('DELETE' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_api_admin_user_delete;
                        }

                        return $ret;
                        not_sylius_api_admin_user_delete:

                        break;
                    case 2163:
                        $matches = array('version' => $matches[1] ?? null);

                        // sylius_admin_api_order_index
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_order_index') + $matches, array('_controller' => 'sylius.controller.order:indexAction', '_sylius' => array('serialization_groups' => array('Default'), 'grid' => 'sylius_admin_api_cart', 'serialization_version' => '$version', 'section' => 'admin_api', 'permission' => false)));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_order_index;
                        }

                        return $ret;
                        not_sylius_admin_api_order_index:

                        // sylius_admin_api_cart_create
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_cart_create') + $matches, array('_controller' => 'sylius.controller.order:createAction', '_sylius' => array('serialization_version' => '$version', 'form' => 'Sylius\\Bundle\\AdminApiBundle\\Form\\Type\\OrderType', 'serialization_groups' => array('Default', 'DetailedCart'))));
                        if (!isset(($a = array('POST' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_cart_create;
                        }

                        return $ret;
                        not_sylius_admin_api_cart_create:

                        break;
                    case 2183:
                        $matches = array('version' => $matches[1] ?? null, 'id' => $matches[2] ?? null);

                        // sylius_admin_api_cart_update
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_cart_update') + $matches, array('_controller' => 'sylius.controller.order:updateAction', '_sylius' => array('serialization_version' => '$version', 'form' => 'Sylius\\Bundle\\AdminApiBundle\\Form\\Type\\OrderPromotionCouponType', 'serialization_groups' => array('Default', 'DetailedCart'))));
                        if (!isset(($a = array('PUT' => 0, 'PATCH' => 1))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_cart_update;
                        }

                        return $ret;
                        not_sylius_admin_api_cart_update:

                        // sylius_admin_api_cart_delete
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_cart_delete') + $matches, array('_controller' => 'sylius.controller.order:deleteAction', '_format' => 'json', '_sylius' => array('serialization_version' => '$version', 'csrf_protection' => false, 'repository' => array('method' => 'findCartById', 'arguments' => array('$id')))));
                        if (!isset(($a = array('DELETE' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_cart_delete;
                        }

                        return $ret;
                        not_sylius_admin_api_cart_delete:

                        // sylius_admin_api_cart_show
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_cart_show') + $matches, array('_controller' => 'sylius.controller.order:showAction', '_sylius' => array('serialization_version' => '$version', 'repository' => array('method' => 'findCartById', 'arguments' => array('$id')), 'serialization_groups' => array('Default', 'DetailedCart'))));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_cart_show;
                        }

                        return $ret;
                        not_sylius_admin_api_cart_show:

                        break;
                    case 2222:
                        $matches = array('version' => $matches[1] ?? null, 'cartId' => $matches[2] ?? null, 'id' => $matches[3] ?? null);

                        // sylius_admin_api_order_item_update
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_order_item_update') + $matches, array('_controller' => 'sylius.controller.order_item:updateAction', '_sylius' => array('serialization_groups' => array('Default', 'Detailed'), 'form' => 'Sylius\\Bundle\\AdminApiBundle\\Form\\Type\\OrderItemType', 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('cart' => '$cartId'), 'permission' => false)));
                        if (!isset(($a = array('PUT' => 0, 'PATCH' => 1))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_order_item_update;
                        }

                        return $ret;
                        not_sylius_admin_api_order_item_update:

                        // sylius_admin_api_order_item_delete
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_order_item_delete') + $matches, array('_controller' => 'sylius.controller.order_item:deleteAction', '_sylius' => array('csrf_protection' => false, 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('cart' => '$cartId'), 'permission' => false)));
                        if (!isset(($a = array('DELETE' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_order_item_delete;
                        }

                        return $ret;
                        not_sylius_admin_api_order_item_delete:

                        break;
                    case 2249:
                        $matches = array('version' => $matches[1] ?? null);

                        // sylius_admin_api_channel_index
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_channel_index') + $matches, array('_controller' => 'sylius.controller.channel:indexAction', '_sylius' => array('serialization_groups' => array('Default'), 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_channel_index;
                        }

                        return $ret;
                        not_sylius_admin_api_channel_index:

                        // sylius_admin_api_channel_create
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_channel_create') + $matches, array('_controller' => 'sylius.controller.channel:createAction', '_sylius' => array('serialization_groups' => array('Default', 'Detailed'), 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('POST' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_channel_create;
                        }

                        return $ret;
                        not_sylius_admin_api_channel_create:

                        break;
                    case 2269:
                        $matches = array('version' => $matches[1] ?? null, 'code' => $matches[2] ?? null);

                        // sylius_admin_api_channel_update
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_channel_update') + $matches, array('_controller' => 'sylius.controller.channel:updateAction', '_sylius' => array('serialization_groups' => array('Default', 'Detailed'), 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('PUT' => 0, 'PATCH' => 1))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_channel_update;
                        }

                        return $ret;
                        not_sylius_admin_api_channel_update:

                        // sylius_admin_api_channel_show
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_channel_show') + $matches, array('_controller' => 'sylius.controller.channel:showAction', '_sylius' => array('serialization_groups' => array('Default', 'Detailed'), 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_channel_show;
                        }

                        return $ret;
                        not_sylius_admin_api_channel_show:

                        // sylius_admin_api_channel_delete
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_channel_delete') + $matches, array('_controller' => 'sylius.controller.channel:deleteAction', '_sylius' => array('csrf_protection' => false, 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('DELETE' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_channel_delete;
                        }

                        return $ret;
                        not_sylius_admin_api_channel_delete:

                        break;
                    case 2367:
                        $matches = array('version' => $matches[1] ?? null, 'orderId' => $matches[2] ?? null);

                        // sylius_admin_api_checkout_available_shipping_methods
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_checkout_available_shipping_methods') + $matches, array('_controller' => 'sylius.controller.show_available_shipping_methods:showAction'));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_checkout_available_shipping_methods;
                        }

                        return $ret;
                        not_sylius_admin_api_checkout_available_shipping_methods:

                        // sylius_admin_api_checkout_select_shipping
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_checkout_select_shipping') + $matches, array('_controller' => 'sylius.controller.order:updateAction', '_sylius' => array('serialization_version' => '$version', 'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Checkout\\SelectShippingType', 'repository' => array('method' => 'find', 'arguments' => array('$orderId')), 'state_machine' => array('graph' => 'sylius_order_checkout', 'transition' => 'select_shipping'))));
                        if (!isset(($a = array('PUT' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_checkout_select_shipping;
                        }

                        return $ret;
                        not_sylius_admin_api_checkout_select_shipping:

                        break;
                    case 2396:
                        $matches = array('version' => $matches[1] ?? null, 'orderId' => $matches[2] ?? null);

                        // sylius_admin_api_checkout_available_payment_methods
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_checkout_available_payment_methods') + $matches, array('_controller' => 'sylius.controller.show_available_payment_methods:showAction'));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_checkout_available_payment_methods;
                        }

                        return $ret;
                        not_sylius_admin_api_checkout_available_payment_methods:

                        // sylius_admin_api_checkout_select_payment
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_checkout_select_payment') + $matches, array('_controller' => 'sylius.controller.order:updateAction', '_sylius' => array('serialization_version' => '$version', 'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Checkout\\SelectPaymentType', 'repository' => array('method' => 'find', 'arguments' => array('$orderId')), 'state_machine' => array('graph' => 'sylius_order_checkout', 'transition' => 'select_payment'))));
                        if (!isset(($a = array('PUT' => 0, 'PATCH' => 1))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_checkout_select_payment;
                        }

                        return $ret;
                        not_sylius_admin_api_checkout_select_payment:

                        break;
                    case 2447:
                        $matches = array('version' => $matches[1] ?? null);

                        // sylius_admin_api_country_index
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_country_index') + $matches, array('_controller' => 'sylius.controller.country:indexAction', '_sylius' => array('serialization_groups' => array('Default'), 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_country_index;
                        }

                        return $ret;
                        not_sylius_admin_api_country_index:

                        // sylius_admin_api_country_create
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_country_create') + $matches, array('_controller' => 'sylius.controller.country:createAction', '_sylius' => array('serialization_groups' => array('Default', 'Detailed'), 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('POST' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_country_create;
                        }

                        return $ret;
                        not_sylius_admin_api_country_create:

                        break;
                    case 2467:
                        $matches = array('version' => $matches[1] ?? null, 'code' => $matches[2] ?? null);

                        // sylius_admin_api_country_show
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_country_show') + $matches, array('_controller' => 'sylius.controller.country:showAction', '_sylius' => array('serialization_groups' => array('Default', 'Detailed'), 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_country_show;
                        }

                        return $ret;
                        not_sylius_admin_api_country_show:

                        // sylius_admin_api_country_delete
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_country_delete') + $matches, array('_controller' => 'sylius.controller.country:deleteAction', '_sylius' => array('csrf_protection' => false, 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('DELETE' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_country_delete;
                        }

                        return $ret;
                        not_sylius_admin_api_country_delete:

                        break;
                    case 2498:
                        $matches = array('version' => $matches[1] ?? null, 'countryCode' => $matches[2] ?? null, 'code' => $matches[3] ?? null);

                        // sylius_admin_api_province_delete
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_province_delete') + $matches, array('_controller' => 'sylius.controller.province:deleteAction', '_sylius' => array('serialization_version' => '$version', 'criteria' => array('code' => '$code'), 'csrf_protection' => false)));
                        if (!isset(($a = array('DELETE' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_province_delete;
                        }

                        return $ret;
                        not_sylius_admin_api_province_delete:

                        // sylius_admin_api_province_show
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_province_show') + $matches, array('_controller' => 'sylius.controller.province:showAction', '_sylius' => array('serialization_version' => '$version', 'serialization_groups' => array('Detailed'), 'criteria' => array('code' => '$code'))));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_province_show;
                        }

                        return $ret;
                        not_sylius_admin_api_province_show:

                        break;
                    case 2526:
                        $matches = array('version' => $matches[1] ?? null);

                        // sylius_admin_api_currency_index
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_currency_index') + $matches, array('_controller' => 'sylius.controller.currency:indexAction', '_sylius' => array('serialization_groups' => array('Default'), 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_currency_index;
                        }

                        return $ret;
                        not_sylius_admin_api_currency_index:

                        // sylius_admin_api_currency_create
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_currency_create') + $matches, array('_controller' => 'sylius.controller.currency:createAction', '_sylius' => array('serialization_groups' => array('Default', 'Detailed'), 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('POST' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_currency_create;
                        }

                        return $ret;
                        not_sylius_admin_api_currency_create:

                        break;
                    case 2546:
                        $matches = array('version' => $matches[1] ?? null, 'code' => $matches[2] ?? null);

                        // sylius_admin_api_currency_show
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_currency_show') + $matches, array('_controller' => 'sylius.controller.currency:showAction', '_sylius' => array('serialization_groups' => array('Default', 'Detailed'), 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_currency_show;
                        }

                        return $ret;
                        not_sylius_admin_api_currency_show:

                        // sylius_admin_api_currency_delete
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_currency_delete') + $matches, array('_controller' => 'sylius.controller.currency:deleteAction', '_sylius' => array('csrf_protection' => false, 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('DELETE' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_currency_delete;
                        }

                        return $ret;
                        not_sylius_admin_api_currency_delete:

                        break;
                    case 2614:
                        $matches = array('version' => $matches[1] ?? null, 'id' => $matches[2] ?? null);

                        // sylius_admin_api_customer_update
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_customer_update') + $matches, array('_controller' => 'sylius.controller.customer:updateAction', '_sylius' => array('serialization_version' => '$version', 'form' => array('type' => 'Sylius\\Bundle\\AdminApiBundle\\Form\\Type\\CustomerProfileType'))));
                        if (!isset(($a = array('PUT' => 0, 'PATCH' => 1))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_customer_update;
                        }

                        return $ret;
                        not_sylius_admin_api_customer_update:

                        // sylius_admin_api_customer_delete
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_customer_delete') + $matches, array('_controller' => 'sylius.controller.customer:deleteAction', '_sylius' => array('serialization_version' => '$version', 'csrf_protection' => false)));
                        if (!isset(($a = array('DELETE' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_customer_delete;
                        }

                        return $ret;
                        not_sylius_admin_api_customer_delete:

                        break;
                    case 2663:
                        $matches = array('version' => $matches[1] ?? null);

                        // sylius_admin_api_exchange_rate_index
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_exchange_rate_index') + $matches, array('_controller' => 'sylius.controller.exchange_rate:indexAction', '_sylius' => array('serialization_groups' => array('Default'), 'serialization_version' => '$version', 'section' => 'admin_api', 'permission' => false)));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_exchange_rate_index;
                        }

                        return $ret;
                        not_sylius_admin_api_exchange_rate_index:

                        // sylius_admin_api_exchange_rate_create
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_exchange_rate_create') + $matches, array('_controller' => 'sylius.controller.exchange_rate:createAction', '_sylius' => array('serialization_groups' => array('Default', 'Detailed'), 'serialization_version' => '$version', 'section' => 'admin_api', 'permission' => false)));
                        if (!isset(($a = array('POST' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_exchange_rate_create;
                        }

                        return $ret;
                        not_sylius_admin_api_exchange_rate_create:

                        break;
                    case 2695:
                        $matches = array('version' => $matches[1] ?? null, 'sourceCurrencyCode' => $matches[2] ?? null, 'targetCurrencyCode' => $matches[3] ?? null);

                        // sylius_admin_api_exchange_rate_update
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_exchange_rate_update') + $matches, array('_controller' => 'sylius.controller.exchange_rate:updateAction', '_sylius' => array('serialization_version' => '$version', 'serialization_groups' => array('Default', 'Detailed'), 'repository' => array('method' => 'findOneWithCurrencyPair', 'arguments' => array('$sourceCurrencyCode', '$targetCurrencyCode')))));
                        if (!isset(($a = array('PUT' => 0, 'PATCH' => 1))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_exchange_rate_update;
                        }

                        return $ret;
                        not_sylius_admin_api_exchange_rate_update:

                        // sylius_admin_api_exchange_rate_delete
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_exchange_rate_delete') + $matches, array('_controller' => 'sylius.controller.exchange_rate:deleteAction', '_sylius' => array('serialization_version' => '$version', 'repository' => array('method' => 'findOneWithCurrencyPair', 'arguments' => array('$sourceCurrencyCode', '$targetCurrencyCode')), 'csrf_protection' => false)));
                        if (!isset(($a = array('DELETE' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_exchange_rate_delete;
                        }

                        return $ret;
                        not_sylius_admin_api_exchange_rate_delete:

                        // sylius_admin_api_exchange_rate_show
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_exchange_rate_show') + $matches, array('_controller' => 'sylius.controller.exchange_rate:showAction', '_sylius' => array('serialization_version' => '$version', 'serialization_groups' => array('Default', 'Detailed'), 'repository' => array('method' => 'findOneWithCurrencyPair', 'arguments' => array('$sourceCurrencyCode', '$targetCurrencyCode')))));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_exchange_rate_show;
                        }

                        return $ret;
                        not_sylius_admin_api_exchange_rate_show:

                        break;
                    case 2717:
                        $matches = array('version' => $matches[1] ?? null);

                        // sylius_admin_api_locale_index
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_locale_index') + $matches, array('_controller' => 'sylius.controller.locale:indexAction', '_sylius' => array('serialization_groups' => array('Default'), 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_locale_index;
                        }

                        return $ret;
                        not_sylius_admin_api_locale_index:

                        // sylius_admin_api_locale_create
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_locale_create') + $matches, array('_controller' => 'sylius.controller.locale:createAction', '_sylius' => array('serialization_groups' => array('Default', 'Detailed'), 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('POST' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_locale_create;
                        }

                        return $ret;
                        not_sylius_admin_api_locale_create:

                        break;
                    case 2737:
                        $matches = array('version' => $matches[1] ?? null, 'code' => $matches[2] ?? null);

                        // sylius_admin_api_locale_show
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_locale_show') + $matches, array('_controller' => 'sylius.controller.locale:showAction', '_sylius' => array('serialization_groups' => array('Default', 'Detailed'), 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_locale_show;
                        }

                        return $ret;
                        not_sylius_admin_api_locale_show:

                        // sylius_admin_api_locale_delete
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_locale_delete') + $matches, array('_controller' => 'sylius.controller.locale:deleteAction', '_sylius' => array('csrf_protection' => false, 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('DELETE' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_locale_delete;
                        }

                        return $ret;
                        not_sylius_admin_api_locale_delete:

                        break;
                    case 2838:
                        $matches = array('version' => $matches[1] ?? null);

                        // sylius_admin_api_product_index
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_product_index') + $matches, array('_controller' => 'sylius.controller.product:indexAction', '_sylius' => array('serialization_groups' => array('Default'), 'grid' => 'sylius_admin_api_product', 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_product_index;
                        }

                        return $ret;
                        not_sylius_admin_api_product_index:

                        // sylius_admin_api_product_create
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_product_create') + $matches, array('_controller' => 'sylius.controller.product:createAction', '_sylius' => array('serialization_groups' => array('Default', 'Detailed'), 'form' => 'Sylius\\Bundle\\AdminApiBundle\\Form\\Type\\ProductType', 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('POST' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_product_create;
                        }

                        return $ret;
                        not_sylius_admin_api_product_create:

                        break;
                    case 2858:
                        $matches = array('version' => $matches[1] ?? null, 'code' => $matches[2] ?? null);

                        // sylius_admin_api_product_update
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_product_update') + $matches, array('_controller' => 'sylius.controller.product:updateAction', '_sylius' => array('serialization_groups' => array('Default', 'Detailed'), 'form' => 'Sylius\\Bundle\\AdminApiBundle\\Form\\Type\\ProductType', 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('PUT' => 0, 'PATCH' => 1))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_product_update;
                        }

                        return $ret;
                        not_sylius_admin_api_product_update:

                        // sylius_admin_api_product_show
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_product_show') + $matches, array('_controller' => 'sylius.controller.product:showAction', '_sylius' => array('serialization_groups' => array('Default', 'Detailed'), 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_product_show;
                        }

                        return $ret;
                        not_sylius_admin_api_product_show:

                        // sylius_admin_api_product_delete
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_product_delete') + $matches, array('_controller' => 'sylius.controller.product:deleteAction', '_sylius' => array('csrf_protection' => false, 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('DELETE' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_product_delete;
                        }

                        return $ret;
                        not_sylius_admin_api_product_delete:

                        break;
                    case 2882:
                        $matches = array('version' => $matches[1] ?? null, 'productCode' => $matches[2] ?? null);

                        // sylius_admin_api_product_review_index
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_product_review_index') + $matches, array('_controller' => 'sylius.controller.product_review:indexAction', '_sylius' => array('serialization_groups' => array('Default'), 'grid' => 'sylius_admin_api_product_review', 'serialization_version' => '$version', 'section' => 'admin_api', 'permission' => false)));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_product_review_index;
                        }

                        return $ret;
                        not_sylius_admin_api_product_review_index:

                        // sylius_admin_api_product_review_create
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_product_review_create') + $matches, array('_controller' => 'sylius.controller.product_review:createAction', '_sylius' => array('serialization_groups' => array('Default', 'Detailed'), 'serialization_version' => '$version', 'section' => 'admin_api', 'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Product\\ProductReviewType', 'factory' => array('method' => 'createForSubject', 'arguments' => array('expr:notFoundOnNull(service(\'sylius.repository.product\').findOneByCode($productCode))')))));
                        if (!isset(($a = array('POST' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_product_review_create;
                        }

                        return $ret;
                        not_sylius_admin_api_product_review_create:

                        break;
                    case 2902:
                        $matches = array('version' => $matches[1] ?? null, 'productCode' => $matches[2] ?? null, 'id' => $matches[3] ?? null);

                        // sylius_admin_api_product_review_update
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_product_review_update') + $matches, array('_controller' => 'sylius.controller.product_review:updateAction', '_sylius' => array('serialization_version' => '$version', 'section' => 'admin_api', 'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Product\\ProductReviewType', 'repository' => array('method' => 'findOneByIdAndProductCode', 'arguments' => array('$id', '$productCode')))));
                        if (!isset(($a = array('PUT' => 0, 'PATCH' => 1))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_product_review_update;
                        }

                        return $ret;
                        not_sylius_admin_api_product_review_update:

                        // sylius_admin_api_product_review_delete
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_product_review_delete') + $matches, array('_controller' => 'sylius.controller.product_review:deleteAction', '_sylius' => array('serialization_version' => '$version', 'section' => 'admin_api', 'repository' => array('method' => 'findOneByIdAndProductCode', 'arguments' => array('$id', '$productCode')), 'csrf_protection' => false)));
                        if (!isset(($a = array('DELETE' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_product_review_delete;
                        }

                        return $ret;
                        not_sylius_admin_api_product_review_delete:

                        // sylius_admin_api_product_review_show
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_product_review_show') + $matches, array('_controller' => 'sylius.controller.product_review:showAction', '_sylius' => array('serialization_version' => '$version', 'section' => 'admin_api', 'serialization_groups' => array('Default', 'Detailed'), 'repository' => array('method' => 'findOneByIdAndProductCode', 'arguments' => array('$id', '$productCode')))));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_product_review_show;
                        }

                        return $ret;
                        not_sylius_admin_api_product_review_show:

                        break;
                    case 2960:
                        $matches = array('version' => $matches[1] ?? null, 'productCode' => $matches[2] ?? null);

                        // sylius_admin_api_product_variant_index
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_product_variant_index') + $matches, array('_controller' => 'sylius.controller.product_variant:indexAction', '_sylius' => array('serialization_groups' => array('Default'), 'grid' => 'sylius_admin_api_product_variant', 'serialization_version' => '$version', 'section' => 'admin_api', 'permission' => false)));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_product_variant_index;
                        }

                        return $ret;
                        not_sylius_admin_api_product_variant_index:

                        // sylius_admin_api_product_variant_create
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_product_variant_create') + $matches, array('_controller' => 'sylius.controller.product_variant:createAction', '_sylius' => array('serialization_groups' => array('Default', 'Detailed'), 'serialization_version' => '$version', 'section' => 'admin_api', 'form' => 'Sylius\\Bundle\\AdminApiBundle\\Form\\Type\\ProductVariantType', 'factory' => array('method' => 'createForProduct', 'arguments' => array('expr:notFoundOnNull(service(\'sylius.repository.product\').findOneByCode($productCode))')))));
                        if (!isset(($a = array('POST' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_product_variant_create;
                        }

                        return $ret;
                        not_sylius_admin_api_product_variant_create:

                        break;
                    case 2980:
                        $matches = array('version' => $matches[1] ?? null, 'productCode' => $matches[2] ?? null, 'code' => $matches[3] ?? null);

                        // sylius_admin_api_product_variant_update
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_product_variant_update') + $matches, array('_controller' => 'sylius.controller.product_variant:updateAction', '_sylius' => array('serialization_version' => '$version', 'section' => 'admin_api', 'form' => 'Sylius\\Bundle\\AdminApiBundle\\Form\\Type\\ProductVariantType', 'repository' => array('method' => 'findOneByCodeAndProductCode', 'arguments' => array('$code', '$productCode')))));
                        if (!isset(($a = array('PUT' => 0, 'PATCH' => 1))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_product_variant_update;
                        }

                        return $ret;
                        not_sylius_admin_api_product_variant_update:

                        // sylius_admin_api_product_variant_delete
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_product_variant_delete') + $matches, array('_controller' => 'sylius.controller.product_variant:deleteAction', '_sylius' => array('serialization_version' => '$version', 'section' => 'admin_api', 'repository' => array('method' => 'findOneByCodeAndProductCode', 'arguments' => array('$code', '$productCode')), 'csrf_protection' => false)));
                        if (!isset(($a = array('DELETE' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_product_variant_delete;
                        }

                        return $ret;
                        not_sylius_admin_api_product_variant_delete:

                        // sylius_admin_api_product_variant_show
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_product_variant_show') + $matches, array('_controller' => 'sylius.controller.product_variant:showAction', '_sylius' => array('serialization_version' => '$version', 'section' => 'admin_api', 'serialization_groups' => array('Default', 'Detailed'), 'repository' => array('method' => 'findOneByCodeAndProductCode', 'arguments' => array('$code', '$productCode')))));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_product_variant_show;
                        }

                        return $ret;
                        not_sylius_admin_api_product_variant_show:

                        break;
                    case 3036:
                        $matches = array('version' => $matches[1] ?? null, 'code' => $matches[2] ?? null);

                        // sylius_admin_api_product_attribute_update
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_product_attribute_update') + $matches, array('_controller' => 'sylius.controller.product_attribute:updateAction', '_sylius' => array('serialization_groups' => array('Default', 'Detailed'), 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('PUT' => 0, 'PATCH' => 1))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_product_attribute_update;
                        }

                        return $ret;
                        not_sylius_admin_api_product_attribute_update:

                        // sylius_admin_api_product_attribute_show
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_product_attribute_show') + $matches, array('_controller' => 'sylius.controller.product_attribute:showAction', '_sylius' => array('serialization_groups' => array('Default', 'Detailed'), 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_product_attribute_show;
                        }

                        return $ret;
                        not_sylius_admin_api_product_attribute_show:

                        // sylius_admin_api_product_attribute_delete
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_product_attribute_delete') + $matches, array('_controller' => 'sylius.controller.product_attribute:deleteAction', '_sylius' => array('csrf_protection' => false, 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('DELETE' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_product_attribute_delete;
                        }

                        return $ret;
                        not_sylius_admin_api_product_attribute_delete:

                        break;
                    case 3077:
                        $matches = array('version' => $matches[1] ?? null);

                        // sylius_admin_api_product_association_type_index
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_product_association_type_index') + $matches, array('_controller' => 'sylius.controller.product_association_type:indexAction', '_sylius' => array('serialization_groups' => array('Default'), 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_product_association_type_index;
                        }

                        return $ret;
                        not_sylius_admin_api_product_association_type_index:

                        // sylius_admin_api_product_association_type_create
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_product_association_type_create') + $matches, array('_controller' => 'sylius.controller.product_association_type:createAction', '_sylius' => array('serialization_groups' => array('Default', 'Detailed'), 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('POST' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_product_association_type_create;
                        }

                        return $ret;
                        not_sylius_admin_api_product_association_type_create:

                        break;
                    case 3097:
                        $matches = array('version' => $matches[1] ?? null, 'code' => $matches[2] ?? null);

                        // sylius_admin_api_product_association_type_update
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_product_association_type_update') + $matches, array('_controller' => 'sylius.controller.product_association_type:updateAction', '_sylius' => array('serialization_groups' => array('Default', 'Detailed'), 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('PUT' => 0, 'PATCH' => 1))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_product_association_type_update;
                        }

                        return $ret;
                        not_sylius_admin_api_product_association_type_update:

                        // sylius_admin_api_product_association_type_show
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_product_association_type_show') + $matches, array('_controller' => 'sylius.controller.product_association_type:showAction', '_sylius' => array('serialization_groups' => array('Default', 'Detailed'), 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_product_association_type_show;
                        }

                        return $ret;
                        not_sylius_admin_api_product_association_type_show:

                        // sylius_admin_api_product_association_type_delete
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_product_association_type_delete') + $matches, array('_controller' => 'sylius.controller.product_association_type:deleteAction', '_sylius' => array('csrf_protection' => false, 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('DELETE' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_product_association_type_delete;
                        }

                        return $ret;
                        not_sylius_admin_api_product_association_type_delete:

                        break;
                    case 3120:
                        $matches = array('version' => $matches[1] ?? null);

                        // sylius_admin_api_product_option_index
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_product_option_index') + $matches, array('_controller' => 'sylius.controller.product_option:indexAction', '_sylius' => array('serialization_groups' => array('Default'), 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_product_option_index;
                        }

                        return $ret;
                        not_sylius_admin_api_product_option_index:

                        // sylius_admin_api_product_option_create
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_product_option_create') + $matches, array('_controller' => 'sylius.controller.product_option:createAction', '_sylius' => array('serialization_groups' => array('Default', 'Detailed'), 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('POST' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_product_option_create;
                        }

                        return $ret;
                        not_sylius_admin_api_product_option_create:

                        break;
                    case 3140:
                        $matches = array('version' => $matches[1] ?? null, 'code' => $matches[2] ?? null);

                        // sylius_admin_api_product_option_update
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_product_option_update') + $matches, array('_controller' => 'sylius.controller.product_option:updateAction', '_sylius' => array('serialization_groups' => array('Default', 'Detailed'), 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('PUT' => 0, 'PATCH' => 1))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_product_option_update;
                        }

                        return $ret;
                        not_sylius_admin_api_product_option_update:

                        // sylius_admin_api_product_option_show
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_product_option_show') + $matches, array('_controller' => 'sylius.controller.product_option:showAction', '_sylius' => array('serialization_groups' => array('Default', 'Detailed'), 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_product_option_show;
                        }

                        return $ret;
                        not_sylius_admin_api_product_option_show:

                        // sylius_admin_api_product_option_delete
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_product_option_delete') + $matches, array('_controller' => 'sylius.controller.product_option:deleteAction', '_sylius' => array('csrf_protection' => false, 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('DELETE' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_product_option_delete;
                        }

                        return $ret;
                        not_sylius_admin_api_product_option_delete:

                        break;
                    case 3164:
                        $matches = array('version' => $matches[1] ?? null);

                        // sylius_admin_api_promotion_index
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_promotion_index') + $matches, array('_controller' => 'sylius.controller.promotion:indexAction', '_sylius' => array('serialization_groups' => array('Default'), 'grid' => 'sylius_admin_api_promotion', 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_promotion_index;
                        }

                        return $ret;
                        not_sylius_admin_api_promotion_index:

                        // sylius_admin_api_promotion_create
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_promotion_create') + $matches, array('_controller' => 'sylius.controller.promotion:createAction', '_sylius' => array('serialization_groups' => array('Default', 'Detailed'), 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('POST' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_promotion_create;
                        }

                        return $ret;
                        not_sylius_admin_api_promotion_create:

                        break;
                    case 3184:
                        $matches = array('version' => $matches[1] ?? null, 'code' => $matches[2] ?? null);

                        // sylius_admin_api_promotion_update
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_promotion_update') + $matches, array('_controller' => 'sylius.controller.promotion:updateAction', '_sylius' => array('serialization_groups' => array('Default', 'Detailed'), 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('PUT' => 0, 'PATCH' => 1))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_promotion_update;
                        }

                        return $ret;
                        not_sylius_admin_api_promotion_update:

                        // sylius_admin_api_promotion_show
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_promotion_show') + $matches, array('_controller' => 'sylius.controller.promotion:showAction', '_sylius' => array('serialization_groups' => array('Default', 'Detailed'), 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_promotion_show;
                        }

                        return $ret;
                        not_sylius_admin_api_promotion_show:

                        // sylius_admin_api_promotion_delete
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_promotion_delete') + $matches, array('_controller' => 'sylius.controller.promotion:deleteAction', '_sylius' => array('csrf_protection' => false, 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('DELETE' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_promotion_delete;
                        }

                        return $ret;
                        not_sylius_admin_api_promotion_delete:

                        break;
                    case 3205:
                        $matches = array('version' => $matches[1] ?? null, 'promotionCode' => $matches[2] ?? null);

                        // sylius_admin_api_promotion_coupon_index
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_promotion_coupon_index') + $matches, array('_controller' => 'sylius.controller.promotion_coupon:indexAction', '_sylius' => array('serialization_version' => '$version', 'serialization_groups' => array('Default'), 'section' => 'admin_api', 'repository' => array('method' => 'createPaginatorForPromotion', 'arguments' => array('$promotionCode')))));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_promotion_coupon_index;
                        }

                        return $ret;
                        not_sylius_admin_api_promotion_coupon_index:

                        // sylius_admin_api_promotion_coupon_create
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_promotion_coupon_create') + $matches, array('_controller' => 'sylius.controller.promotion_coupon:createAction', '_sylius' => array('serialization_version' => '$version', 'section' => 'admin_api', 'factory' => array('method' => 'createForPromotion', 'arguments' => array('expr:service(\'sylius.repository.promotion\').findOneByCode($promotionCode)')), 'criteria' => array('promotion' => '$promotionCode'))));
                        if (!isset(($a = array('POST' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_promotion_coupon_create;
                        }

                        return $ret;
                        not_sylius_admin_api_promotion_coupon_create:

                        break;
                    case 3225:
                        $matches = array('version' => $matches[1] ?? null, 'promotionCode' => $matches[2] ?? null, 'code' => $matches[3] ?? null);

                        // sylius_admin_api_promotion_coupon_update
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_promotion_coupon_update') + $matches, array('_controller' => 'sylius.controller.promotion_coupon:updateAction', '_sylius' => array('serialization_version' => '$version', 'section' => 'admin_api', 'repository' => array('method' => 'findOneByCodeAndPromotionCode', 'arguments' => array('$code', '$promotionCode')))));
                        if (!isset(($a = array('PUT' => 0, 'PATCH' => 1))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_promotion_coupon_update;
                        }

                        return $ret;
                        not_sylius_admin_api_promotion_coupon_update:

                        // sylius_admin_api_promotion_coupon_show
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_promotion_coupon_show') + $matches, array('_controller' => 'sylius.controller.promotion_coupon:showAction', '_sylius' => array('serialization_version' => '$version', 'serialization_groups' => array('Default', 'Detailed'), 'section' => 'admin_api', 'repository' => array('method' => 'findOneByCodeAndPromotionCode', 'arguments' => array('$code', '$promotionCode')))));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_promotion_coupon_show;
                        }

                        return $ret;
                        not_sylius_admin_api_promotion_coupon_show:

                        // sylius_admin_api_promotion_coupon_delete
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_promotion_coupon_delete') + $matches, array('_controller' => 'sylius.controller.promotion_coupon:deleteAction', '_sylius' => array('serialization_version' => '$version', 'section' => 'admin_api', 'csrf_protection' => false, 'repository' => array('method' => 'findOneByCodeAndPromotionCode', 'arguments' => array('$code', '$promotionCode')))));
                        if (!isset(($a = array('DELETE' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_promotion_coupon_delete;
                        }

                        return $ret;
                        not_sylius_admin_api_promotion_coupon_delete:

                        break;
                    case 3279:
                        $matches = array('version' => $matches[1] ?? null);

                        // sylius_admin_api_taxon_index
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_taxon_index') + $matches, array('_controller' => 'sylius.controller.taxon:indexAction', '_sylius' => array('serialization_groups' => array('Default'), 'grid' => 'sylius_admin_api_taxon', 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_taxon_index;
                        }

                        return $ret;
                        not_sylius_admin_api_taxon_index:

                        // sylius_admin_api_taxon_create
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_taxon_create') + $matches, array('_controller' => 'sylius.controller.taxon:createAction', '_sylius' => array('serialization_groups' => array('Default', 'Detailed'), 'form' => 'Sylius\\Bundle\\TaxonomyBundle\\Form\\Type\\TaxonType', 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('POST' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_taxon_create;
                        }

                        return $ret;
                        not_sylius_admin_api_taxon_create:

                        break;
                    case 3299:
                        $matches = array('version' => $matches[1] ?? null, 'code' => $matches[2] ?? null);

                        // sylius_admin_api_taxon_update
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_taxon_update') + $matches, array('_controller' => 'sylius.controller.taxon:updateAction', '_sylius' => array('serialization_groups' => array('Default', 'Detailed'), 'form' => 'Sylius\\Bundle\\TaxonomyBundle\\Form\\Type\\TaxonType', 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('PUT' => 0, 'PATCH' => 1))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_taxon_update;
                        }

                        return $ret;
                        not_sylius_admin_api_taxon_update:

                        // sylius_admin_api_taxon_show
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_taxon_show') + $matches, array('_controller' => 'sylius.controller.taxon:showAction', '_sylius' => array('serialization_groups' => array('Default', 'Detailed'), 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_taxon_show;
                        }

                        return $ret;
                        not_sylius_admin_api_taxon_show:

                        // sylius_admin_api_taxon_delete
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_taxon_delete') + $matches, array('_controller' => 'sylius.controller.taxon:deleteAction', '_sylius' => array('csrf_protection' => false, 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('DELETE' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_taxon_delete;
                        }

                        return $ret;
                        not_sylius_admin_api_taxon_delete:

                        break;
                    case 3329:
                        $matches = array('version' => $matches[1] ?? null);

                        // sylius_admin_api_tax_category_index
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_tax_category_index') + $matches, array('_controller' => 'sylius.controller.tax_category:indexAction', '_sylius' => array('serialization_groups' => array('Default'), 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_tax_category_index;
                        }

                        return $ret;
                        not_sylius_admin_api_tax_category_index:

                        // sylius_admin_api_tax_category_create
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_tax_category_create') + $matches, array('_controller' => 'sylius.controller.tax_category:createAction', '_sylius' => array('serialization_groups' => array('Default', 'Detailed'), 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('POST' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_tax_category_create;
                        }

                        return $ret;
                        not_sylius_admin_api_tax_category_create:

                        break;
                    case 3349:
                        $matches = array('version' => $matches[1] ?? null, 'code' => $matches[2] ?? null);

                        // sylius_admin_api_tax_category_update
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_tax_category_update') + $matches, array('_controller' => 'sylius.controller.tax_category:updateAction', '_sylius' => array('serialization_groups' => array('Default', 'Detailed'), 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('PUT' => 0, 'PATCH' => 1))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_tax_category_update;
                        }

                        return $ret;
                        not_sylius_admin_api_tax_category_update:

                        // sylius_admin_api_tax_category_show
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_tax_category_show') + $matches, array('_controller' => 'sylius.controller.tax_category:showAction', '_sylius' => array('serialization_groups' => array('Default', 'Detailed'), 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_tax_category_show;
                        }

                        return $ret;
                        not_sylius_admin_api_tax_category_show:

                        // sylius_admin_api_tax_category_delete
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_tax_category_delete') + $matches, array('_controller' => 'sylius.controller.tax_category:deleteAction', '_sylius' => array('csrf_protection' => false, 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('DELETE' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_tax_category_delete;
                        }

                        return $ret;
                        not_sylius_admin_api_tax_category_delete:

                        break;
                    case 3464:
                        $matches = array('version' => $matches[1] ?? null);

                        // sylius_admin_api_shipping_category_index
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_shipping_category_index') + $matches, array('_controller' => 'sylius.controller.shipping_category:indexAction', '_sylius' => array('serialization_groups' => array('Default'), 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_shipping_category_index;
                        }

                        return $ret;
                        not_sylius_admin_api_shipping_category_index:

                        // sylius_admin_api_shipping_category_create
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_shipping_category_create') + $matches, array('_controller' => 'sylius.controller.shipping_category:createAction', '_sylius' => array('serialization_groups' => array('Default', 'Detailed'), 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('POST' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_shipping_category_create;
                        }

                        return $ret;
                        not_sylius_admin_api_shipping_category_create:

                        break;
                    case 3484:
                        $matches = array('version' => $matches[1] ?? null, 'code' => $matches[2] ?? null);

                        // sylius_admin_api_shipping_category_update
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_shipping_category_update') + $matches, array('_controller' => 'sylius.controller.shipping_category:updateAction', '_sylius' => array('serialization_groups' => array('Default', 'Detailed'), 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('PUT' => 0, 'PATCH' => 1))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_shipping_category_update;
                        }

                        return $ret;
                        not_sylius_admin_api_shipping_category_update:

                        // sylius_admin_api_shipping_category_show
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_shipping_category_show') + $matches, array('_controller' => 'sylius.controller.shipping_category:showAction', '_sylius' => array('serialization_groups' => array('Default', 'Detailed'), 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_shipping_category_show;
                        }

                        return $ret;
                        not_sylius_admin_api_shipping_category_show:

                        // sylius_admin_api_shipping_category_delete
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_shipping_category_delete') + $matches, array('_controller' => 'sylius.controller.shipping_category:deleteAction', '_sylius' => array('csrf_protection' => false, 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('DELETE' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_shipping_category_delete;
                        }

                        return $ret;
                        not_sylius_admin_api_shipping_category_delete:

                        break;
                    case 3551:
                        $matches = array('version' => $matches[1] ?? null, 'code' => $matches[2] ?? null);

                        // sylius_admin_api_zone_update
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_zone_update') + $matches, array('_controller' => 'sylius.controller.zone:updateAction', '_sylius' => array('serialization_groups' => array('Default', 'Detailed'), 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('PUT' => 0, 'PATCH' => 1))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_zone_update;
                        }

                        return $ret;
                        not_sylius_admin_api_zone_update:

                        // sylius_admin_api_zone_show
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_zone_show') + $matches, array('_controller' => 'sylius.controller.zone:showAction', '_sylius' => array('serialization_groups' => array('Default', 'Detailed'), 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_zone_show;
                        }

                        return $ret;
                        not_sylius_admin_api_zone_show:

                        // sylius_admin_api_zone_delete
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_admin_api_zone_delete') + $matches, array('_controller' => 'sylius.controller.zone:deleteAction', '_sylius' => array('csrf_protection' => false, 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)));
                        if (!isset(($a = array('DELETE' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_admin_api_zone_delete;
                        }

                        return $ret;
                        not_sylius_admin_api_zone_delete:

                        break;
                    case 5013:
                        $matches = array('_locale' => $matches[1] ?? null);

                        // sylius_shop_cart_summary
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_shop_cart_summary') + $matches, array('_controller' => 'sylius.controller.order:summaryAction', '_sylius' => array('template' => '@SyliusShop/Cart/summary.html.twig', 'form' => 'Sylius\\Bundle\\OrderBundle\\Form\\Type\\CartType')));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_sylius_shop_cart_summary;
                        }

                        return $ret;
                        not_sylius_shop_cart_summary:

                        // sylius_shop_cart_save
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_shop_cart_save') + $matches, array('_controller' => 'sylius.controller.order:saveAction', '_sylius' => array('template' => '@SyliusShop/Cart/summary.html.twig', 'redirect' => 'sylius_shop_cart_summary', 'form' => 'Sylius\\Bundle\\OrderBundle\\Form\\Type\\CartType', 'flash' => 'sylius.cart.save')));
                        if (!isset(($a = array('PUT' => 0, 'PATCH' => 1))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_shop_cart_save;
                        }

                        return $ret;
                        not_sylius_shop_cart_save:

                        // sylius_shop_cart_clear
                        $ret = $this->mergeDefaults(array('_route' => 'sylius_shop_cart_clear') + $matches, array('_controller' => 'sylius.controller.order:clearAction', '_sylius' => array('redirect' => 'sylius_shop_cart_summary')));
                        if (!isset(($a = array('DELETE' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_sylius_shop_cart_clear;
                        }

                        return $ret;
                        not_sylius_shop_cart_clear:

                        break;
                    default:
                        $routes = array(
                            59 => array(array('_route' => 'sylius_admin_partial_address_log_entry_index', '_controller' => 'sylius.controller.address_log_entry:indexAction', '_sylius' => array('template' => '@SyliusUi/Grid/_history.html.twig', 'grid' => 'sylius_admin_address_log_entry', 'section' => 'admin', 'permission' => true)), array('id'), array('GET' => 0), null),
                            94 => array(array('_route' => 'sylius_admin_partial_customer_latest', '_controller' => 'sylius.controller.customer:indexAction', '_sylius' => array('repository' => array('method' => 'findLatest', 'arguments' => array('!!int $count')), 'template' => '$template', 'permission' => true)), array('count'), array('GET' => 0), null),
                            109 => array(array('_route' => 'sylius_admin_partial_customer_show', '_controller' => 'sylius.controller.customer:showAction', '_sylius' => array('template' => '$template', 'vars' => '$vars', 'permission' => true)), array('id'), array('GET' => 0), null),
                            146 => array(array('_route' => 'sylius_admin_partial_order_latest', '_controller' => 'sylius.controller.order:indexAction', '_sylius' => array('repository' => array('method' => 'findLatest', 'arguments' => array('!!int $count')), 'template' => '$template', 'permission' => true)), array('count'), array('GET' => 0), null),
                            163 => array(array('_route' => 'sylius_admin_partial_order_latest_in_channel', '_controller' => 'sylius.controller.order:indexAction', '_sylius' => array('repository' => array('method' => 'findLatestInChannel', 'arguments' => array('count' => '!!int $count', 'channel' => 'expr:notFoundOnNull(service(\'sylius.repository.channel\').findOneByCode($channelCode))')), 'template' => '$template', 'permission' => true)), array('channelCode', 'count'), array('GET' => 0), null),
                            204 => array(array('_route' => 'sylius_admin_partial_shipment_ship', '_controller' => 'sylius.controller.shipment:updateAction', '_sylius' => array('event' => 'ship', 'repository' => array('method' => 'findOneByOrderId', 'arguments' => array('id' => '$id', 'orderId' => '$orderId')), 'state_machine' => array('graph' => 'sylius_shipment', 'transition' => 'ship'), 'section' => 'admin', 'permission' => true, 'template' => '@SyliusAdmin/Shipment/Partial/_ship.html.twig', 'form' => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\ShipmentShipType', 'vars' => array('route' => array('parameters' => array('orderId' => '$orderId', 'id' => '$id'))))), array('orderId', 'id'), array('GET' => 0), null),
                            233 => array(array('_route' => 'sylius_admin_partial_product_show', '_controller' => 'sylius.controller.product:showAction', '_sylius' => array('template' => '$template', 'vars' => '$vars', 'permission' => true)), array('id'), array('GET' => 0), null),
                            257 => array(array('_route' => 'sylius_admin_partial_promotion_show', '_controller' => 'sylius.controller.promotion:showAction', '_sylius' => array('template' => '$template', 'vars' => '$vars', 'permission' => true)), array('id'), array('GET' => 0), null),
                            281 => array(array('_route' => 'sylius_admin_partial_taxon_show', '_controller' => 'sylius.controller.taxon:showAction', '_sylius' => array('template' => '$template', 'vars' => '$vars', 'permission' => true)), array('id'), array('GET' => 0), null),
                            315 => array(array('_route' => 'sylius_admin_ajax_taxon_move', '_controller' => 'sylius.controller.taxon:updateAction', '_format' => 'json', '_sylius' => array('permission' => true, 'form' => 'Sylius\\Bundle\\TaxonomyBundle\\Form\\Type\\TaxonPositionType')), array('id'), array('PUT' => 0), null),
                            348 => array(array('_route' => 'sylius_admin_impersonate_user', '_controller' => 'sylius.controller.impersonate_user:impersonateAction', 'username' => '$username'), array('username'), null, null),
                            378 => array(array('_route' => 'sylius_admin_admin_user_update', '_controller' => 'sylius.controller.admin_user:updateAction', '_sylius' => array('section' => 'admin', 'template' => 'SyliusAdminBundle:Crud:update.html.twig', 'redirect' => 'sylius_admin_admin_user_index', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_users_able_to_access_administration_panel', 'templates' => array('form' => 'SyliusAdminBundle:AdminUser:_form.html.twig')))), array('id'), array('GET' => 0, 'PUT' => 1, 'PATCH' => 2), null),
                            386 => array(array('_route' => 'sylius_admin_admin_user_delete', '_controller' => 'sylius.controller.admin_user:deleteAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_users_able_to_access_administration_panel', 'templates' => array('form' => 'SyliusAdminBundle:AdminUser:_form.html.twig')))), array('id'), array('DELETE' => 0), null),
                            423 => array(array('_route' => 'sylius_admin_channel_update', '_controller' => 'sylius.controller.channel:updateAction', '_sylius' => array('section' => 'admin', 'template' => 'SyliusAdminBundle:Crud:update.html.twig', 'redirect' => 'sylius_admin_channel_update', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.configure_channels_available_in_your_store', 'templates' => array('form' => 'SyliusAdminBundle:Channel:_form.html.twig')))), array('id'), array('GET' => 0, 'PUT' => 1, 'PATCH' => 2), null),
                            431 => array(array('_route' => 'sylius_admin_channel_delete', '_controller' => 'sylius.controller.channel:deleteAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.configure_channels_available_in_your_store', 'templates' => array('form' => 'SyliusAdminBundle:Channel:_form.html.twig')))), array('id'), array('DELETE' => 0), null),
                            462 => array(array('_route' => 'sylius_admin_country_update', '_controller' => 'sylius.controller.country:updateAction', '_sylius' => array('section' => 'admin', 'template' => 'SyliusAdminBundle:Crud:update.html.twig', 'redirect' => 'sylius_admin_country_update', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_shipping_destinations', 'templates' => array('form' => 'SyliusAdminBundle:Country:_form.html.twig')))), array('id'), array('GET' => 0, 'PUT' => 1, 'PATCH' => 2), null),
                            496 => array(array('_route' => 'sylius_admin_currency_update', '_controller' => 'sylius.controller.currency:updateAction', '_sylius' => array('section' => 'admin', 'template' => 'SyliusAdminBundle:Crud:update.html.twig', 'redirect' => 'sylius_admin_currency_update', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_currencies_available_in_the_store', 'templates' => array('form' => 'SyliusAdminBundle:Currency:_form.html.twig')))), array('id'), array('GET' => 0, 'PUT' => 1, 'PATCH' => 2), null),
                            534 => array(array('_route' => 'sylius_admin_customer_update', '_controller' => 'sylius.controller.customer:updateAction', '_sylius' => array('section' => 'admin', 'template' => 'SyliusAdminBundle:Crud:update.html.twig', 'redirect' => 'sylius_admin_customer_update', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_your_customers', 'templates' => array('form' => 'SyliusAdminBundle:Customer:_form.html.twig')))), array('id'), array('GET' => 0, 'PUT' => 1, 'PATCH' => 2), null),
                            548 => array(array('_route' => 'sylius_admin_customer_order_index', '_controller' => 'sylius.controller.order:indexAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'template' => '@SyliusAdmin/Crud/index.html.twig', 'grid' => 'sylius_admin_customer_order', 'vars' => array('route' => array('parameters' => array('$customerId' => '$id')), 'templates' => array('breadcrumb' => '@SyliusAdmin/Customer/Order/Index/_breadcrumb.html.twig', 'header_title' => '@SyliusAdmin/Customer/Order/Index/_headerTitle.html.twig'), 'subheader' => 'sylius.ui.process_your_orders', 'icon' => 'cart'))), array('id'), array('GET' => 0), null),
                            557 => array(array('_route' => 'sylius_admin_customer_show', '_controller' => 'sylius.controller.customer:showAction', '_sylius' => array('section' => 'admin', 'template' => 'SyliusAdminBundle:Customer:show.html.twig', 'permission' => true)), array('id'), null, null),
                            591 => array(array('_route' => 'sylius_admin_customer_group_update', '_controller' => 'sylius.controller.customer_group:updateAction', '_sylius' => array('section' => 'admin', 'template' => 'SyliusAdminBundle:Crud:update.html.twig', 'redirect' => 'sylius_admin_customer_group_update', 'permission' => true, 'vars' => array('header' => 'sylius.ui.customer_groups', 'subheader' => 'sylius.ui.manage_customer_groups', 'templates' => array('form' => 'SyliusAdminBundle:CustomerGroup:_form.html.twig')))), array('id'), array('GET' => 0, 'PUT' => 1, 'PATCH' => 2), null),
                            599 => array(array('_route' => 'sylius_admin_customer_group_delete', '_controller' => 'sylius.controller.customer_group:deleteAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'vars' => array('header' => 'sylius.ui.customer_groups', 'subheader' => 'sylius.ui.manage_customer_groups', 'templates' => array('form' => 'SyliusAdminBundle:CustomerGroup:_form.html.twig')))), array('id'), array('DELETE' => 0), null),
                            643 => array(array('_route' => 'sylius_admin_exchange_rate_update', '_controller' => 'sylius.controller.exchange_rate:updateAction', '_sylius' => array('section' => 'admin', 'template' => 'SyliusAdminBundle:Crud:update.html.twig', 'redirect' => 'sylius_admin_exchange_rate_update', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_exchange_rates', 'templates' => array('form' => 'SyliusAdminBundle:ExchangeRate:_form.html.twig')))), array('id'), array('GET' => 0, 'PUT' => 1, 'PATCH' => 2), null),
                            651 => array(array('_route' => 'sylius_admin_exchange_rate_delete', '_controller' => 'sylius.controller.exchange_rate:deleteAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_exchange_rates', 'templates' => array('form' => 'SyliusAdminBundle:ExchangeRate:_form.html.twig')))), array('id'), array('DELETE' => 0), null),
                            681 => array(array('_route' => 'sylius_admin_locale_update', '_controller' => 'sylius.controller.locale:updateAction', '_sylius' => array('section' => 'admin', 'template' => 'SyliusAdminBundle:Crud:update.html.twig', 'redirect' => 'sylius_admin_locale_index', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_languages_available_in_the_store', 'templates' => array('form' => 'SyliusAdminBundle:Locale:_form.html.twig')))), array('id'), array('GET' => 0, 'PUT' => 1, 'PATCH' => 2), null),
                            707 => array(array('_route' => 'sylius_admin_order_show', '_controller' => 'sylius.controller.order:showAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'template' => 'SyliusAdminBundle:Order:show.html.twig')), array('id'), array('GET' => 0), null),
                            726 => array(array('_route' => 'sylius_admin_order_history', '_controller' => 'sylius.controller.order:showAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'template' => 'SyliusAdminBundle:Order:history.html.twig')), array('id'), array('GET' => 0), null),
                            738 => array(array('_route' => 'sylius_admin_order_update', '_controller' => 'sylius.controller.order:updateAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'template' => 'SyliusAdminBundle:Order:update.html.twig', 'form' => array('options' => array('validation_groups' => array('sylius_shipping_address_update'))))), array('id'), array('GET' => 0, 'PUT' => 1), null),
                            752 => array(array('_route' => 'sylius_admin_order_cancel', '_controller' => 'sylius.controller.order:applyStateMachineTransitionAction', '_sylius' => array('permission' => true, 'state_machine' => array('graph' => 'sylius_order', 'transition' => 'cancel'), 'redirect' => 'referer')), array('id'), array('PUT' => 0), null),
                            789 => array(array('_route' => 'sylius_admin_order_payment_complete', '_controller' => 'sylius.controller.payment:applyStateMachineTransitionAction', '_sylius' => array('event' => 'complete', 'permission' => true, 'repository' => array('method' => 'findOneByOrderId', 'arguments' => array('id' => '$id', 'orderId' => '$orderId')), 'state_machine' => array('graph' => 'sylius_payment', 'transition' => 'complete'), 'redirect' => 'referer')), array('orderId', 'id'), array('PUT' => 0), null),
                            803 => array(array('_route' => 'sylius_admin_order_payment_refund', '_controller' => 'sylius.controller.payment:applyStateMachineTransitionAction', '_sylius' => array('permission' => true, 'repository' => array('method' => 'findOneByOrderId', 'arguments' => array('id' => '$id', 'orderId' => '$orderId')), 'state_machine' => array('graph' => 'sylius_payment', 'transition' => 'refund'), 'redirect' => 'referer', 'flash' => 'sylius.payment.refunded')), array('orderId', 'id'), array('PUT' => 0), null),
                            827 => array(array('_route' => 'sylius_admin_order_shipment_ship', '_controller' => 'sylius.controller.shipment:updateAction', '_sylius' => array('event' => 'ship', 'repository' => array('method' => 'findOneByOrderId', 'arguments' => array('id' => '$id', 'orderId' => '$orderId')), 'state_machine' => array('graph' => 'sylius_shipment', 'transition' => 'ship'), 'redirect' => 'referer', 'section' => 'admin', 'permission' => true, 'form' => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\ShipmentShipType', 'vars' => array('route' => array('parameters' => array('orderId' => '$orderId', 'id' => '$id'))))), array('id'), array('PUT' => 0), null),
                            874 => array(array('_route' => 'sylius_admin_payment_method_update', '_controller' => 'sylius.controller.payment_method:updateAction', '_sylius' => array('section' => 'admin', 'template' => 'SyliusAdminBundle:Crud:update.html.twig', 'redirect' => 'sylius_admin_payment_method_update', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_payment_methods_available_to_your_customers', 'templates' => array('form' => 'SyliusAdminBundle:PaymentMethod:_form.html.twig')))), array('id'), array('GET' => 0, 'PUT' => 1, 'PATCH' => 2), null),
                            882 => array(array('_route' => 'sylius_admin_payment_method_delete', '_controller' => 'sylius.controller.payment_method:deleteAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_payment_methods_available_to_your_customers', 'templates' => array('form' => 'SyliusAdminBundle:PaymentMethod:_form.html.twig')))), array('id'), array('DELETE' => 0), null),
                            903 => array(array('_route' => 'sylius_admin_payment_method_create', '_controller' => 'sylius.controller.payment_method:createAction', '_sylius' => array('section' => 'admin', 'factory' => array('method' => 'createWithGateway', 'arguments' => array('gatewayFactory' => '$factory')), 'template' => 'SyliusAdminBundle:Crud:create.html.twig', 'redirect' => 'sylius_admin_payment_method_update', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_payment_methods_available_to_your_customers', 'templates' => array('form' => 'SyliusAdminBundle:PaymentMethod:_form.html.twig'), 'route' => array('parameters' => array('factory' => '$factory'))))), array('factory'), array('GET' => 0, 'POST' => 1), null),
                            945 => array(array('_route' => 'sylius_admin_product_update', '_controller' => 'sylius.controller.product:updateAction', '_sylius' => array('section' => 'admin', 'template' => 'SyliusAdminBundle:Crud:update.html.twig', 'redirect' => 'sylius_admin_product_update', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_your_product_catalog', 'templates' => array('form' => 'SyliusAdminBundle:Product:_form.html.twig')))), array('id'), array('GET' => 0, 'PUT' => 1, 'PATCH' => 2), null),
                            953 => array(array('_route' => 'sylius_admin_product_delete', '_controller' => 'sylius.controller.product:deleteAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_your_product_catalog', 'templates' => array('form' => 'SyliusAdminBundle:Product:_form.html.twig')))), array('id'), array('DELETE' => 0), null),
                            976 => array(array('_route' => 'sylius_admin_product_per_taxon_index', '_controller' => 'sylius.controller.product:indexAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'grid' => 'sylius_admin_product_from_taxon', 'template' => 'SyliusAdminBundle:Product:index.html.twig', 'vars' => array('subheader' => 'sylius.ui.manage_your_product_catalog', 'icon' => 'cube'))), array('taxonId'), array('GET' => 0), null),
                            987 => array(array('_route' => 'sylius_admin_product_create', '_controller' => 'sylius.controller.product:createAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'template' => 'SyliusAdminBundle:Crud:create.html.twig', 'redirect' => 'sylius_admin_product_update', 'vars' => array('subheader' => 'sylius.ui.manage_your_product_catalog', 'templates' => array('form' => 'SyliusAdminBundle:Product:_form.html.twig'), 'route' => array('name' => 'sylius_admin_product_create')))), array(), array('GET' => 0, 'POST' => 1), null),
                            1016 => array(array('_route' => 'sylius_admin_product_variant_index', '_controller' => 'sylius.controller.product_variant:indexAction', '_sylius' => array('template' => '@SyliusAdmin/ProductVariant/index.html.twig', 'grid' => 'sylius_admin_product_variant', 'section' => 'admin', 'permission' => true, 'vars' => array('route' => array('parameters' => array('productId' => '$productId')), 'templates' => array('breadcrumb' => '@SyliusAdmin/ProductVariant/Index/_breadcrumb.html.twig'), 'icon' => 'cubes', 'subheader' => 'sylius.ui.manage_variants'))), array('productId'), array('GET' => 0), null),
                            1028 => array(array('_route' => 'sylius_admin_product_variant_create', '_controller' => 'sylius.controller.product_variant:createAction', '_sylius' => array('factory' => array('method' => 'createForProduct', 'arguments' => array('expr:notFoundOnNull(service(\'sylius.repository.product\').find($productId))')), 'template' => '@SyliusAdmin/Crud/create.html.twig', 'grid' => 'sylius_admin_product_variant', 'section' => 'admin', 'redirect' => array('route' => 'sylius_admin_product_variant_index', 'parameters' => array('productId' => '$productId')), 'permission' => true, 'vars' => array('route' => array('parameters' => array('productId' => '$productId')), 'templates' => array('form' => '@SyliusAdmin/ProductVariant/_form.html.twig', 'breadcrumb' => '@SyliusAdmin/ProductVariant/Create/_breadcrumb.html.twig', 'header_title' => '@SyliusAdmin/ProductVariant/Create/_headerTitle.html.twig')))), array('productId'), array('GET' => 0, 'POST' => 1), null),
                            1050 => array(array('_route' => 'sylius_admin_product_variant_update', '_controller' => 'sylius.controller.product_variant:updateAction', '_sylius' => array('template' => '@SyliusAdmin/Crud/update.html.twig', 'grid' => 'sylius_admin_product_variant', 'section' => 'admin', 'redirect' => array('route' => 'sylius_admin_product_variant_index', 'parameters' => array('productId' => '$productId')), 'permission' => true, 'repository' => array('method' => 'findOneByIdAndProductId', 'arguments' => array('id' => '$id', 'productId' => '$productId')), 'vars' => array('route' => array('parameters' => array('id' => '$id', 'productId' => '$productId')), 'templates' => array('form' => '@SyliusAdmin/ProductVariant/_form.html.twig', 'breadcrumb' => '@SyliusAdmin/ProductVariant/Update/_breadcrumb.html.twig')))), array('productId', 'id'), array('GET' => 0, 'PUT' => 1), null),
                            1071 => array(array('_route' => 'sylius_admin_product_variant_bulk_delete', '_controller' => 'sylius.controller.product_variant:bulkDeleteAction', '_sylius' => array('section' => 'admin', 'redirect' => 'referer', 'permission' => true, 'repository' => array('method' => 'findById', 'arguments' => array('$ids')))), array('productId'), array('DELETE' => 0), null),
                            1088 => array(array('_route' => 'sylius_admin_product_variant_delete', '_controller' => 'sylius.controller.product_variant:deleteAction', '_sylius' => array('section' => 'admin', 'redirect' => 'referer', 'permission' => true, 'repository' => array('method' => 'findOneByIdAndProductId', 'arguments' => array('id' => '$id', 'productId' => '$productId')))), array('productId', 'id'), array('DELETE' => 0), null),
                            1105 => array(array('_route' => 'sylius_admin_product_variant_generate', '_controller' => 'sylius.controller.product:updateAction', '_sylius' => array('template' => '@SyliusAdmin/ProductVariant/generate.html.twig', 'section' => 'admin', 'permission' => true, 'redirect' => array('route' => 'sylius_admin_product_variant_index', 'parameters' => array('productId' => '$productId')), 'form' => array('type' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductGenerateVariantsType'), 'repository' => array('method' => 'find', 'arguments' => array('$productId')), 'flash' => 'sylius.product_variant.generate')), array('productId'), array('GET' => 0, 'POST' => 1), null),
                            1159 => array(array('_route' => 'sylius_admin_product_association_type_update', '_controller' => 'sylius.controller.product_association_type:updateAction', '_sylius' => array('section' => 'admin', 'template' => 'SyliusAdminBundle:Crud:update.html.twig', 'redirect' => 'sylius_admin_product_association_type_update', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_association_types_of_your_products', 'templates' => array('form' => 'SyliusAdminBundle:ProductAssociationType:_form.html.twig')))), array('id'), array('GET' => 0, 'PUT' => 1, 'PATCH' => 2), null),
                            1168 => array(array('_route' => 'sylius_admin_product_association_type_delete', '_controller' => 'sylius.controller.product_association_type:deleteAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_association_types_of_your_products', 'templates' => array('form' => 'SyliusAdminBundle:ProductAssociationType:_form.html.twig')))), array('id'), array('DELETE' => 0), null),
                            1207 => array(array('_route' => 'sylius_admin_product_attribute_update', '_controller' => 'sylius.controller.product_attribute:updateAction', '_sylius' => array('section' => 'admin', 'template' => 'SyliusAdminBundle:Crud:update.html.twig', 'redirect' => 'sylius_admin_product_attribute_update', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_attributes_of_your_products', 'templates' => array('form' => 'SyliusAdminBundle:ProductAttribute:_form.html.twig')))), array('id'), array('GET' => 0, 'PUT' => 1, 'PATCH' => 2), null),
                            1219 => array(array('_route' => 'sylius_admin_product_attribute_create', '_controller' => 'sylius.controller.product_attribute:createAction', '_sylius' => array('section' => 'admin', 'factory' => array('method' => 'createTyped', 'arguments' => array('type' => '$type')), 'template' => 'SyliusAdminBundle:Crud:create.html.twig', 'redirect' => 'sylius_admin_product_attribute_update', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_attributes_of_your_products', 'templates' => array('form' => 'SyliusAdminBundle:ProductAttribute:_form.html.twig'), 'route' => array('parameters' => array('type' => '$type'))))), array('type'), array('GET' => 0, 'POST' => 1), null),
                            1229 => array(array('_route' => 'sylius_admin_product_attribute_delete', '_controller' => 'sylius.controller.product_attribute:deleteAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_attributes_of_your_products', 'templates' => array('form' => 'SyliusAdminBundle:ProductAttribute:_form.html.twig')))), array('id'), array('DELETE' => 0), null),
                            1264 => array(array('_route' => 'sylius_admin_product_option_update', '_controller' => 'sylius.controller.product_option:updateAction', '_sylius' => array('section' => 'admin', 'template' => 'SyliusAdminBundle:Crud:update.html.twig', 'redirect' => 'sylius_admin_product_option_update', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_configuration_options_of_your_products', 'templates' => array('form' => 'SyliusAdminBundle:ProductOption:_form.html.twig')))), array('id'), array('GET' => 0, 'PUT' => 1, 'PATCH' => 2), null),
                            1273 => array(array('_route' => 'sylius_admin_product_option_delete', '_controller' => 'sylius.controller.product_option:deleteAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_configuration_options_of_your_products', 'templates' => array('form' => 'SyliusAdminBundle:ProductOption:_form.html.twig')))), array('id'), array('DELETE' => 0), null),
                            1310 => array(array('_route' => 'sylius_admin_product_review_update', '_controller' => 'sylius.controller.product_review:updateAction', '_sylius' => array('section' => 'admin', 'template' => 'SyliusAdminBundle:Crud:update.html.twig', 'redirect' => 'sylius_admin_product_review_update', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_reviews_of_your_products', 'templates' => array('form' => 'SyliusAdminBundle:ProductReview:_form.html.twig')))), array('id'), array('GET' => 0, 'PUT' => 1, 'PATCH' => 2), null),
                            1319 => array(array('_route' => 'sylius_admin_product_review_delete', '_controller' => 'sylius.controller.product_review:deleteAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_reviews_of_your_products', 'templates' => array('form' => 'SyliusAdminBundle:ProductReview:_form.html.twig')))), array('id'), array('DELETE' => 0), null),
                            1348 => array(array('_route' => 'sylius_admin_product_review_accept', '_controller' => 'sylius.controller.product_review:applyStateMachineTransitionAction', '_sylius' => array('permission' => true, 'state_machine' => array('graph' => 'sylius_product_review', 'transition' => 'accept'), 'redirect' => 'referer', 'flash' => 'sylius.review.accept')), array('id'), array('PUT' => 0), null),
                            1363 => array(array('_route' => 'sylius_admin_product_review_reject', '_controller' => 'sylius.controller.product_review:applyStateMachineTransitionAction', '_sylius' => array('permission' => true, 'state_machine' => array('graph' => 'sylius_product_review', 'transition' => 'reject'), 'redirect' => 'referer', 'flash' => 'sylius.review.reject')), array('id'), array('PUT' => 0), null),
                            1403 => array(array('_route' => 'sylius_admin_promotion_update', '_controller' => 'sylius.controller.promotion:updateAction', '_sylius' => array('section' => 'admin', 'template' => 'SyliusAdminBundle:Crud:update.html.twig', 'redirect' => 'sylius_admin_promotion_update', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_discounts_and_promotional_campaigns', 'templates' => array('form' => '@SyliusAdmin/Promotion/_form.html.twig')))), array('id'), array('GET' => 0, 'PUT' => 1, 'PATCH' => 2), null),
                            1423 => array(array('_route' => 'sylius_admin_promotion_coupon_index', '_controller' => 'sylius.controller.promotion_coupon:indexAction', '_sylius' => array('template' => '@SyliusAdmin/PromotionCoupon/index.html.twig', 'grid' => 'sylius_admin_promotion_coupon', 'section' => 'admin', 'permission' => true, 'vars' => array('route' => array('parameters' => array('promotionId' => '$promotionId')), 'templates' => array('breadcrumb' => '@SyliusAdmin/PromotionCoupon/Index/_breadcrumb.html.twig'), 'icon' => 'tags', 'subheader' => 'sylius.ui.manage_coupons'))), array('promotionId'), array('GET' => 0), null),
                            1435 => array(array('_route' => 'sylius_admin_promotion_coupon_create', '_controller' => 'sylius.controller.promotion_coupon:createAction', '_sylius' => array('factory' => array('method' => 'createForPromotion', 'arguments' => array('expr:notFoundOnNull(service(\'sylius.repository.promotion\').find($promotionId))')), 'template' => '@SyliusAdmin/Crud/create.html.twig', 'grid' => 'sylius_admin_promotion_coupon', 'section' => 'admin', 'redirect' => array('route' => 'sylius_admin_promotion_coupon_index', 'parameters' => array('promotionId' => '$promotionId')), 'permission' => true, 'vars' => array('route' => array('parameters' => array('promotionId' => '$promotionId')), 'templates' => array('form' => '@SyliusAdmin/PromotionCoupon/_form.html.twig', 'breadcrumb' => '@SyliusAdmin/PromotionCoupon/Create/_breadcrumb.html.twig', 'header_title' => '@SyliusAdmin/PromotionCoupon/Create/_headerTitle.html.twig')))), array('promotionId'), array('GET' => 0, 'POST' => 1), null),
                            1457 => array(array('_route' => 'sylius_admin_promotion_coupon_update', '_controller' => 'sylius.controller.promotion_coupon:updateAction', '_sylius' => array('template' => '@SyliusAdmin/Crud/update.html.twig', 'grid' => 'sylius_admin_promotion_coupon', 'section' => 'admin', 'redirect' => array('route' => 'sylius_admin_promotion_coupon_index', 'parameters' => array('promotionId' => '$promotionId')), 'permission' => true, 'vars' => array('route' => array('parameters' => array('id' => '$id', 'promotionId' => '$promotionId')), 'templates' => array('form' => '@SyliusAdmin/PromotionCoupon/_form.html.twig', 'breadcrumb' => '@SyliusAdmin/PromotionCoupon/Update/_breadcrumb.html.twig'), 'subheader' => 'sylius.ui.manage_discounts_and_promotional_campaigns'))), array('promotionId', 'id'), array('GET' => 0, 'PUT' => 1), null),
                            1474 => array(array('_route' => 'sylius_admin_promotion_coupon_generate', '_controller' => 'sylius.controller.promotion_coupon:generateAction', '_sylius' => array('template' => '@SyliusAdmin/PromotionCoupon/generate.html.twig', 'section' => 'admin', 'redirect' => array('route' => 'sylius_admin_promotion_coupon_index', 'parameters' => array('promotionId' => '$promotionId')), 'permission' => true)), array('promotionId'), array('GET' => 0, 'POST' => 1), null),
                            1495 => array(array('_route' => 'sylius_admin_promotion_coupon_bulk_delete', '_controller' => 'sylius.controller.promotion_coupon:bulkDeleteAction', '_sylius' => array('section' => 'admin', 'redirect' => 'referer', 'permission' => true, 'paginate' => false, 'repository' => array('method' => 'findById', 'arguments' => array('$ids')))), array('promotionId'), array('DELETE' => 0), null),
                            1512 => array(array('_route' => 'sylius_admin_promotion_coupon_delete', '_controller' => 'sylius.controller.promotion_coupon:deleteAction', '_sylius' => array('section' => 'admin', 'redirect' => 'referer', 'permission' => true)), array('promotionId', 'id'), array('DELETE' => 0), null),
                            1523 => array(array('_route' => 'sylius_admin_promotion_delete', '_controller' => 'sylius.controller.promotion:deleteAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_discounts_and_promotional_campaigns', 'templates' => array('form' => '@SyliusAdmin/Promotion/_form.html.twig')))), array('id'), array('DELETE' => 0), null),
                            1578 => array(array('_route' => 'sylius_admin_shipping_category_update', '_controller' => 'sylius.controller.shipping_category:updateAction', '_sylius' => array('section' => 'admin', 'template' => 'SyliusAdminBundle:Crud:update.html.twig', 'redirect' => 'sylius_admin_shipping_category_update', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_shipping_categories_for_your_store', 'templates' => array('form' => 'SyliusAdminBundle:ShippingCategory:_form.html.twig')))), array('id'), array('GET' => 0, 'PUT' => 1, 'PATCH' => 2), null),
                            1587 => array(array('_route' => 'sylius_admin_shipping_category_delete', '_controller' => 'sylius.controller.shipping_category:deleteAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_shipping_categories_for_your_store', 'templates' => array('form' => 'SyliusAdminBundle:ShippingCategory:_form.html.twig')))), array('id'), array('DELETE' => 0), null),
                            1624 => array(array('_route' => 'sylius_admin_shipping_method_update', '_controller' => 'sylius.controller.shipping_method:updateAction', '_sylius' => array('section' => 'admin', 'template' => 'SyliusAdminBundle:Crud:update.html.twig', 'redirect' => 'sylius_admin_shipping_method_update', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_shipping_methods_for_your_store', 'templates' => array('form' => 'SyliusAdminBundle:ShippingMethod:_form.html.twig')))), array('id'), array('GET' => 0, 'PUT' => 1, 'PATCH' => 2), null),
                            1640 => array(array('_route' => 'sylius_admin_shipping_method_archive', '_controller' => 'sylius.controller.shipping_method:updateAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'template' => '@SyliusUi/Grid/Action/archive.html.twig', 'form' => array('type' => 'Sylius\\Bundle\\ResourceBundle\\Form\\Type\\ArchivableType'), 'redirect' => array('route' => 'sylius_admin_shipping_method_index', 'parameters' => array()))), array('id'), array('PATCH' => 0), null),
                            1650 => array(array('_route' => 'sylius_admin_shipping_method_delete', '_controller' => 'sylius.controller.shipping_method:deleteAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_shipping_methods_for_your_store', 'templates' => array('form' => 'SyliusAdminBundle:ShippingMethod:_form.html.twig')))), array('id'), array('DELETE' => 0), null),
                            1678 => array(array('_route' => 'sylius_admin_shop_user_delete', '_controller' => 'sylius.controller.shop_user:deleteAction', '_sylius' => array('section' => 'admin', 'redirect' => 'referer', 'permission' => true)), array('id'), array('DELETE' => 0), null),
                            1717 => array(array('_route' => 'sylius_admin_taxon_update', '_controller' => 'sylius.controller.taxon:updateAction', '_sylius' => array('section' => 'admin', 'template' => 'SyliusAdminBundle:Taxon:update.html.twig', 'redirect' => 'sylius_admin_taxon_update', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_categorization_of_your_products', 'templates' => array('form' => '@SyliusAdmin/Taxon/_form.html.twig')))), array('id'), array('GET' => 0, 'PUT' => 1, 'PATCH' => 2), null),
                            1726 => array(array('_route' => 'sylius_admin_taxon_delete', '_controller' => 'sylius.controller.taxon:deleteAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_categorization_of_your_products', 'templates' => array('form' => '@SyliusAdmin/Taxon/_form.html.twig')))), array('id'), array('DELETE' => 0), null),
                            1748 => array(array('_route' => 'sylius_admin_taxon_create_for_parent', '_controller' => 'sylius.controller.taxon:createAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'template' => 'SyliusAdminBundle:Taxon:create.html.twig', 'redirect' => 'sylius_admin_taxon_update', 'factory' => array('method' => 'createForParent', 'arguments' => array('expr:notFoundOnNull(service("sylius.repository.taxon").find($id))')), 'vars' => array('subheader' => 'sylius.ui.manage_categorization_of_your_products', 'templates' => array('form' => '@SyliusAdmin/Taxon/_form.html.twig')))), array('id'), array('GET' => 0, 'POST' => 1), null),
                            1790 => array(array('_route' => 'sylius_admin_tax_category_update', '_controller' => 'sylius.controller.tax_category:updateAction', '_sylius' => array('section' => 'admin', 'template' => 'SyliusAdminBundle:Crud:update.html.twig', 'redirect' => 'sylius_admin_tax_category_update', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_taxation_of_your_products', 'templates' => array('form' => 'SyliusAdminBundle:TaxCategory:_form.html.twig')))), array('id'), array('GET' => 0, 'PUT' => 1, 'PATCH' => 2), null),
                            1799 => array(array('_route' => 'sylius_admin_tax_category_delete', '_controller' => 'sylius.controller.tax_category:deleteAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_taxation_of_your_products', 'templates' => array('form' => 'SyliusAdminBundle:TaxCategory:_form.html.twig')))), array('id'), array('DELETE' => 0), null),
                            1831 => array(array('_route' => 'sylius_admin_tax_rate_update', '_controller' => 'sylius.controller.tax_rate:updateAction', '_sylius' => array('section' => 'admin', 'template' => 'SyliusAdminBundle:Crud:update.html.twig', 'redirect' => 'sylius_admin_tax_rate_update', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_taxation_of_your_products', 'templates' => array('form' => 'SyliusAdminBundle:TaxRate:_form.html.twig')))), array('id'), array('GET' => 0, 'PUT' => 1, 'PATCH' => 2), null),
                            1840 => array(array('_route' => 'sylius_admin_tax_rate_delete', '_controller' => 'sylius.controller.tax_rate:deleteAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_taxation_of_your_products', 'templates' => array('form' => 'SyliusAdminBundle:TaxRate:_form.html.twig')))), array('id'), array('DELETE' => 0), null),
                            1877 => array(array('_route' => 'sylius_admin_zone_update', '_controller' => 'sylius.controller.zone:updateAction', '_sylius' => array('section' => 'admin', 'template' => 'SyliusAdminBundle:Crud:update.html.twig', 'redirect' => 'sylius_admin_zone_update', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_geographical_zones', 'templates' => array('form' => 'SyliusAdminBundle:Zone:_form.html.twig')))), array('id'), array('GET' => 0, 'PUT' => 1, 'PATCH' => 2), null),
                            1886 => array(array('_route' => 'sylius_admin_zone_delete', '_controller' => 'sylius.controller.zone:deleteAction', '_sylius' => array('section' => 'admin', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_geographical_zones', 'templates' => array('form' => 'SyliusAdminBundle:Zone:_form.html.twig')))), array('id'), array('DELETE' => 0), null),
                            1923 => array(array('_route' => 'sylius_admin_zone_create', '_controller' => 'sylius.controller.zone:createAction', '_sylius' => array('section' => 'admin', 'factory' => array('method' => 'createTyped', 'arguments' => array('type' => '$type')), 'template' => 'SyliusAdminBundle:Crud:create.html.twig', 'redirect' => 'sylius_admin_zone_update', 'permission' => true, 'vars' => array('subheader' => 'sylius.ui.manage_geographical_zones', 'templates' => array('form' => 'SyliusAdminBundle:Zone:_form.html.twig'), 'route' => array('parameters' => array('type' => '$type'))))), array('type'), array('GET' => 0, 'POST' => 1), null),
                            2024 => array(array('_route' => 'sylius_admin_api_order_cancel', '_controller' => 'sylius.controller.order:applyStateMachineTransitionAction', '_sylius' => array('section' => 'admin_api', 'state_machine' => array('graph' => 'sylius_order', 'transition' => 'cancel'), 'csrf_protection' => false, 'return_content' => false)), array('version', 'id'), array('PUT' => 0), null),
                            2056 => array(array('_route' => 'sylius_admin_api_order_shipment_ship', '_controller' => 'sylius.controller.shipment:updateAction', '_sylius' => array('event' => 'ship', 'repository' => array('method' => 'findOneByOrderId', 'arguments' => array('id' => '$id', 'orderId' => '$orderId')), 'state_machine' => array('graph' => 'sylius_shipment', 'transition' => 'ship'), 'section' => 'admin_api', 'form' => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\ShipmentShipType')), array('version', 'orderId', 'id'), array('PUT' => 0), null),
                            2091 => array(array('_route' => 'sylius_admin_api_order_payment_complete', '_controller' => 'sylius.controller.payment:applyStateMachineTransitionAction', '_sylius' => array('event' => 'complete', 'repository' => array('method' => 'findOneByOrderId', 'arguments' => array('id' => '$id', 'orderId' => '$orderId')), 'state_machine' => array('graph' => 'sylius_payment', 'transition' => 'complete'), 'section' => 'admin_api', 'csrf_protection' => false, 'return_content' => false)), array('version', 'orderId', 'id'), array('PUT' => 0), null),
                            2101 => array(array('_route' => 'sylius_admin_api_order_show', '_controller' => 'sylius.controller.order:showAction', '_sylius' => array('serialization_groups' => array('Default', 'Detailed'), 'serialization_version' => '$version', 'section' => 'admin_api', 'permission' => false)), array('version', 'id'), array('GET' => 0), null),
                            2202 => array(array('_route' => 'sylius_admin_api_cart_item_create', '_controller' => 'sylius.controller.order_item:createAction', '_sylius' => array('serialization_version' => '$version', 'form' => 'Sylius\\Bundle\\AdminApiBundle\\Form\\Type\\OrderItemType', 'factory' => array('method' => 'createForCart', 'arguments' => array('expr:notFoundOnNull(service(\'sylius.repository.order\').findCartById($cartId))')), 'serialization_groups' => array('Default', 'DetailedCart'))), array('version', 'cartId'), array('POST' => 0), null),
                            2299 => array(array('_route' => 'sylius_admin_api_checkout_show', '_controller' => 'sylius.controller.order:showAction', '_sylius' => array('serialization_version' => '$version', 'serialization_groups' => array('Detailed'))), array('version', 'id'), array('GET' => 0), null),
                            2327 => array(array('_route' => 'sylius_admin_api_checkout_addressing', '_controller' => 'sylius.controller.order:updateAction', '_sylius' => array('serialization_version' => '$version', 'form' => 'Sylius\\Bundle\\AdminApiBundle\\Form\\Type\\AddressType', 'repository' => array('method' => 'find', 'arguments' => array('$orderId')), 'state_machine' => array('graph' => 'sylius_order_checkout', 'transition' => 'address'))), array('version', 'orderId'), array('PUT' => 0), null),
                            2424 => array(array('_route' => 'sylius_admin_api_checkout_complete', '_controller' => 'sylius.controller.order:updateAction', '_sylius' => array('serialization_version' => '$version', 'form' => array('type' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Checkout\\CompleteType', 'options' => array('validation_groups' => 'sylius_checkout_complete')), 'repository' => array('method' => 'find', 'arguments' => array('$orderId')), 'state_machine' => array('graph' => 'sylius_order_checkout', 'transition' => 'complete'))), array('version', 'orderId'), array('PUT' => 0), null),
                            2568 => array(array('_route' => 'sylius_admin_api_customer_index', '_controller' => 'sylius.controller.customer:indexAction', '_sylius' => array('serialization_version' => '$version', 'serialization_groups' => array('Default'), 'paginate' => '$limit', 'sortable' => true, 'sorting' => array('id' => 'desc'))), array('version'), array('GET' => 0), null),
                            2585 => array(array('_route' => 'sylius_admin_api_customer_show', '_controller' => 'sylius.controller.customer:showAction', '_sylius' => array('serialization_version' => '$version', 'serialization_groups' => array('Detailed'))), array('version', 'id'), array('GET' => 0), null),
                            2594 => array(array('_route' => 'sylius_admin_api_customer_create', '_controller' => 'sylius.controller.customer:createAction', '_sylius' => array('serialization_version' => '$version', 'serialization_groups' => array('Detailed'), 'form' => array('type' => 'Sylius\\Bundle\\AdminApiBundle\\Form\\Type\\CustomerProfileType'))), array('version'), array('POST' => 0), null),
                            2631 => array(array('_route' => 'sylius_admin_api_customer_order_index', '_controller' => 'sylius.controller.order:indexAction', '_sylius' => array('serialization_version' => '$version', 'paginate' => '$limit', 'filterable' => true, 'criteria' => array('customer' => '$id'), 'sortable' => true, 'sorting' => array('updatedAt' => 'desc'), 'csrf_protection' => false)), array('version', 'id'), array('GET' => 0), null),
                            2779 => array(array('_route' => 'sylius_admin_api_payment_method_show', '_controller' => 'sylius.controller.payment_method:showAction', '_sylius' => array('serialization_groups' => array('Default', 'Detailed'), 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)), array('version', 'code'), array('GET' => 0), null),
                            2793 => array(array('_route' => 'sylius_admin_api_payment_index', '_controller' => 'sylius.controller.payment:indexAction', '_sylius' => array('serialization_groups' => array('Default'), 'grid' => 'sylius_admin_api_payment', 'serialization_version' => '$version', 'section' => 'admin_api', 'permission' => false)), array('version'), array('GET' => 0), null),
                            2810 => array(array('_route' => 'sylius_admin_api_payment_show', '_controller' => 'sylius.controller.payment:showAction', '_sylius' => array('serialization_groups' => array('Default', 'Detailed'), 'serialization_version' => '$version', 'section' => 'admin_api', 'permission' => false)), array('version', 'id'), array('GET' => 0), null),
                            2921 => array(array('_route' => 'sylius_admin_api_product_review_accept', '_controller' => 'sylius.controller.product_review:applyStateMachineTransitionAction', '_sylius' => array('state_machine' => array('graph' => 'sylius_product_review', 'transition' => 'accept'), 'csrf_protection' => false)), array('version', 'productCode', 'id'), array('POST' => 0, 'PUT' => 1, 'PATCH' => 2), null),
                            2936 => array(array('_route' => 'sylius_admin_api_product_review_reject', '_controller' => 'sylius.controller.product_review:applyStateMachineTransitionAction', '_sylius' => array('state_machine' => array('graph' => 'sylius_product_review', 'transition' => 'reject'), 'csrf_protection' => false)), array('version', 'productCode', 'id'), array('POST' => 0, 'PUT' => 1, 'PATCH' => 2), null),
                            3016 => array(array('_route' => 'sylius_admin_api_product_attribute_index', '_controller' => 'sylius.controller.product_attribute:indexAction', '_sylius' => array('serialization_groups' => array('Default'), 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)), array('version'), array('GET' => 0), null),
                            3045 => array(array('_route' => 'sylius_admin_api_product_attribute_create', '_controller' => 'sylius.controller.product_attribute:createAction', '_sylius' => array('serialization_version' => '$version', 'factory' => array('method' => 'createTyped', 'arguments' => array('type' => '$type')))), array('version', 'type'), array('POST' => 0), null),
                            3270 => array(array('_route' => 'sylius_admin_api_taxon_products_update_position', '_controller' => 'sylius.controller.update_product_taxon_position:updatePositionsAction', '_sylius' => array('serialization_version' => '$version')), array('version', 'taxonCode'), array('PUT' => 0), null),
                            3369 => array(array('_route' => 'sylius_admin_api_tax_rate_index', '_controller' => 'sylius.controller.tax_rate:indexAction', '_sylius' => array('serialization_groups' => array('Default'), 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)), array('version'), array('GET' => 0), null),
                            3386 => array(array('_route' => 'sylius_admin_api_tax_rate_show', '_controller' => 'sylius.controller.tax_rate:showAction', '_sylius' => array('serialization_groups' => array('Default', 'Detailed'), 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)), array('version', 'code'), array('GET' => 0), null),
                            3414 => array(array('_route' => 'sylius_admin_api_shipment_index', '_controller' => 'sylius.controller.shipment:indexAction', '_sylius' => array('serialization_groups' => array('Default'), 'grid' => 'sylius_admin_api_shipment', 'serialization_version' => '$version', 'section' => 'admin_api', 'permission' => false)), array('version'), array('GET' => 0), null),
                            3431 => array(array('_route' => 'sylius_admin_api_shipment_show', '_controller' => 'sylius.controller.shipment:showAction', '_sylius' => array('serialization_groups' => array('Default', 'Detailed'), 'serialization_version' => '$version', 'section' => 'admin_api', 'permission' => false)), array('version', 'id'), array('GET' => 0), null),
                            3511 => array(array('_route' => 'sylius_admin_api_shipping_method_show', '_controller' => 'sylius.controller.shipping_method:showAction', '_sylius' => array('serialization_groups' => array('Default', 'Detailed'), 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)), array('version', 'code'), array('GET' => 0), null),
                            3531 => array(array('_route' => 'sylius_admin_api_zone_index', '_controller' => 'sylius.controller.zone:indexAction', '_sylius' => array('serialization_groups' => array('Default'), 'serialization_version' => '$version', 'section' => 'admin_api', 'criteria' => array('code' => '$code'), 'permission' => false)), array('version'), array('GET' => 0), null),
                            3560 => array(array('_route' => 'sylius_admin_api_zone_create', '_controller' => 'sylius.controller.zone:createAction', '_sylius' => array('serialization_version' => '$version', 'factory' => array('method' => 'createTyped', 'arguments' => array('type' => '$type')))), array('version', 'type'), array('POST' => 0), null),
                            3615 => array(array('_route' => 'sylius_shop_ajax_user_check_action', '_controller' => 'sylius.controller.shop_user:showAction', '_format' => 'json', '_sylius' => array('repository' => array('method' => 'findOneByEmail', 'arguments' => array('email' => '$email')), 'serialization_groups' => array('Secured'))), array('_locale'), array('GET' => 0), null),
                            3663 => array(array('_route' => 'sylius_shop_ajax_cart_add_item', '_controller' => 'sylius.controller.order_item:addAction', '_format' => 'json', '_sylius' => array('factory' => array('method' => 'createForProduct', 'arguments' => array('expr:notFoundOnNull(service(\'sylius.repository.product\').find($productId))')), 'form' => array('type' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Order\\AddToCartType', 'options' => array('product' => 'expr:notFoundOnNull(service(\'sylius.repository.product\').find($productId))')), 'redirect' => array('route' => 'sylius_shop_cart_summary', 'parameters' => array()), 'flash' => 'sylius.cart.add_item')), array('_locale'), array('POST' => 0), null),
                            3723 => array(array('_route' => 'sylius_shop_ajax_cart_item_remove', '_controller' => 'sylius.controller.order_item:removeAction', '_format' => 'json', '_sylius' => array('flash' => 'sylius.cart.remove_item')), array('_locale', 'id'), array('DELETE' => 0), null),
                            3785 => array(array('_route' => 'sylius_shop_ajax_render_province_form', '_controller' => 'sylius.controller.province:choiceOrTextFieldFormAction', '_sylius' => array('template' => '@SyliusShop/Common/Form/_province.html.twig')), array('_locale'), array('GET' => 0), null),
                            3849 => array(array('_route' => 'sylius_shop_partial_taxon_show_by_slug', '_controller' => 'sylius.controller.taxon:showAction', '_sylius' => array('template' => '$template', 'repository' => array('method' => 'findOneBySlug', 'arguments' => array('$slug', 'expr:service(\'sylius.context.locale\').getLocaleCode()')))), array('_locale', 'slug'), array('GET' => 0), null),
                            3917 => array(array('_route' => 'sylius_shop_partial_taxon_index_by_code', '_controller' => 'sylius.controller.taxon:indexAction', '_sylius' => array('template' => '$template', 'repository' => array('method' => 'findChildren', 'arguments' => array('$code', 'expr:service(\'sylius.context.locale\').getLocaleCode()')))), array('_locale', 'code'), array('GET' => 0), null),
                            3973 => array(array('_route' => 'sylius_shop_partial_cart_summary', '_controller' => 'sylius.controller.order:widgetAction', '_sylius' => array('template' => '$template')), array('_locale'), array('GET' => 0), null),
                            4031 => array(array('_route' => 'sylius_shop_partial_cart_add_item', '_controller' => 'sylius.controller.order_item:addAction', '_sylius' => array('template' => '$template', 'factory' => array('method' => 'createForProduct', 'arguments' => array('expr:notFoundOnNull(service(\'sylius.repository.product\').find($productId))')), 'form' => array('type' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Order\\AddToCartType', 'options' => array('product' => 'expr:notFoundOnNull(service(\'sylius.repository.product\').find($productId))')), 'redirect' => array('route' => 'sylius_shop_cart_summary', 'parameters' => array()))), array('_locale'), array('GET' => 0), null),
                            4099 => array(array('_route' => 'sylius_shop_partial_product_index_latest', '_controller' => 'sylius.controller.product:indexAction', '_sylius' => array('template' => '$template', 'repository' => array('method' => 'findLatestByChannel', 'arguments' => array('expr:service(\'sylius.context.channel\').getChannel()', 'expr:service(\'sylius.context.locale\').getLocaleCode()', '!!int $count')))), array('_locale', 'count'), array('GET' => 0), null),
                            4160 => array(array('_route' => 'sylius_shop_partial_product_show_by_slug', '_controller' => 'sylius.controller.product:showAction', '_sylius' => array('template' => '$template', 'repository' => array('method' => 'findOneByChannelAndSlug', 'arguments' => array('expr:service(\'sylius.context.channel\').getChannel()', 'expr:service(\'sylius.context.locale\').getLocaleCode()', '$slug')))), array('_locale', 'slug'), array('GET' => 0), null),
                            4250 => array(array('_route' => 'sylius_shop_partial_product_review_latest', '_controller' => 'sylius.controller.product_review:indexAction', '_sylius' => array('template' => '$template', 'repository' => array('method' => 'findLatestByProductId', 'arguments' => array('$productId', '!!int $count'))), 'count' => 3), array('_locale', 'productId', 'count'), array('GET' => 0), null),
                            4333 => array(array('_route' => 'sylius_shop_partial_product_association_show', '_controller' => 'sylius.controller.product_association:showAction', '_sylius' => array('template' => '$template')), array('_locale', 'productId', 'id'), array('GET' => 0), null),
                            4368 => array(array('_route' => 'sylius_shop_homepage', '_controller' => 'sylius.controller.shop.homepage:indexAction'), array('_locale'), array('GET' => 0), null),
                            4408 => array(array('_route' => 'sylius_shop_login', '_controller' => 'sylius.controller.security:loginAction', '_sylius' => array('template' => '@SyliusShop/login.html.twig', 'logged_in_route' => 'sylius_shop_account_dashboard')), array('_locale'), array('GET' => 0), null),
                            4455 => array(array('_route' => 'sylius_shop_login_check', '_controller' => 'sylius.controller.security:checkAction'), array('_locale'), array('POST' => 0), null),
                            4496 => array(array('_route' => 'sylius_shop_logout'), array('_locale'), array('GET' => 0), null),
                            4539 => array(array('_route' => 'sylius_shop_register', '_controller' => 'sylius.controller.customer:createAction', '_sylius' => array('template' => '@SyliusShop/register.html.twig', 'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Customer\\CustomerRegistrationType', 'event' => 'register', 'redirect' => array('route' => 'sylius_shop_account_dashboard'), 'flash' => 'sylius.customer.register')), array('_locale'), array('GET' => 0, 'POST' => 1), null),
                            4593 => array(array('_route' => 'sylius_shop_request_password_reset_token', '_controller' => 'sylius.controller.shop_user:requestPasswordResetTokenAction', '_sylius' => array('template' => '@SyliusShop/Account/requestPasswordReset.html.twig', 'redirect' => 'sylius_shop_login')), array('_locale'), array('GET' => 0, 'POST' => 1), null),
                            4656 => array(array('_route' => 'sylius_shop_password_reset', '_controller' => 'sylius.controller.shop_user:resetPasswordAction', '_sylius' => array('template' => '@SyliusShop/Account/resetPassword.html.twig', 'redirect' => 'sylius_shop_login')), array('_locale', 'token'), array('GET' => 0, 'POST' => 1), null),
                            4697 => array(array('_route' => 'sylius_shop_user_request_verification_token', '_controller' => 'sylius.controller.shop_user:requestVerificationTokenAction'), array('_locale'), array('POST' => 0), null),
                            4747 => array(array('_route' => 'sylius_shop_user_verification', '_controller' => 'sylius.controller.shop_user:verifyAction', '_sylius' => array('redirect' => 'sylius_shop_account_dashboard')), array('_locale', 'token'), array('GET' => 0), null),
                            4799 => array(array('_route' => 'sylius_shop_product_show', '_controller' => 'sylius.controller.product:showAction', '_sylius' => array('template' => '@SyliusShop/Product/show.html.twig', 'repository' => array('method' => 'findOneByChannelAndSlug', 'arguments' => array('expr:service(\'sylius.context.channel\').getChannel()', 'expr:service(\'sylius.context.locale\').getLocaleCode()', '$slug')))), array('_locale', 'slug'), array('GET' => 0), null),
                            4845 => array(array('_route' => 'sylius_shop_product_index', '_controller' => 'sylius.controller.product:indexAction', '_sylius' => array('template' => '@SyliusShop/Product/index.html.twig', 'grid' => 'sylius_shop_product')), array('_locale', 'slug'), array('GET' => 0), null),
                            4906 => array(array('_route' => 'sylius_shop_product_review_index', '_controller' => 'sylius.controller.product_review:indexAction', '_sylius' => array('template' => '@SyliusShop/ProductReview/index.html.twig', 'repository' => array('method' => 'findAcceptedByProductSlugAndChannel', 'arguments' => array('$slug', 'expr:service(\'sylius.context.locale\').getLocaleCode()', 'expr:service(\'sylius.context.channel\').getChannel()')))), array('_locale', 'slug'), array('GET' => 0), null),
                            4970 => array(array('_route' => 'sylius_shop_product_review_create', '_controller' => 'sylius.controller.product_review:createAction', '_sylius' => array('template' => '@SyliusShop/ProductReview/create.html.twig', 'form' => array('options' => array('validation_groups' => array('sylius', 'sylius_review'))), 'factory' => array('method' => 'createForSubjectWithReviewer', 'arguments' => array('expr:notFoundOnNull(service(\'sylius.repository.product\').findOneByChannelAndSlug(service(\'sylius.context.channel\').getChannel(), service(\'sylius.context.locale\').getLocaleCode(), $slug))', 'expr:service(\'sylius.context.customer\').getCustomer()')), 'redirect' => array('route' => 'sylius_shop_product_show', 'parameters' => array('slug' => '$slug')), 'flash' => 'sylius.review.wait_for_the_acceptation')), array('_locale', 'slug'), array('GET' => 0, 'POST' => 1), null),
                            5058 => array(array('_route' => 'sylius_shop_checkout_start', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction', 'route' => 'sylius_shop_checkout_address'), array('_locale'), array('GET' => 0), null),
                            5109 => array(array('_route' => 'sylius_shop_checkout_address', '_controller' => 'sylius.controller.order:updateAction', '_sylius' => array('event' => 'address', 'flash' => false, 'template' => 'SyliusShopBundle:Checkout:address.html.twig', 'form' => array('type' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Checkout\\AddressType', 'options' => array('customer' => 'expr:service(\'sylius.context.customer\').getCustomer()')), 'repository' => array('method' => 'findCartForAddressing', 'arguments' => array('expr:service(\'sylius.context.cart\').getCart().getId()')), 'state_machine' => array('graph' => 'sylius_order_checkout', 'transition' => 'address'))), array('_locale'), array('GET' => 0, 'PUT' => 1), null),
                            5169 => array(array('_route' => 'sylius_shop_checkout_select_shipping', '_controller' => 'sylius.controller.order:updateAction', '_sylius' => array('event' => 'select_shipping', 'flash' => false, 'template' => 'SyliusShopBundle:Checkout:selectShipping.html.twig', 'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Checkout\\SelectShippingType', 'repository' => array('method' => 'findCartForSelectingShipping', 'arguments' => array('expr:service(\'sylius.context.cart\').getCart().getId()')), 'state_machine' => array('graph' => 'sylius_order_checkout', 'transition' => 'select_shipping'))), array('_locale'), array('GET' => 0, 'PUT' => 1), null),
                            5228 => array(array('_route' => 'sylius_shop_checkout_select_payment', '_controller' => 'sylius.controller.order:updateAction', '_sylius' => array('event' => 'payment', 'flash' => false, 'template' => 'SyliusShopBundle:Checkout:selectPayment.html.twig', 'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Checkout\\SelectPaymentType', 'repository' => array('method' => 'findCartForSelectingPayment', 'arguments' => array('expr:service(\'sylius.context.cart\').getCart().getId()')), 'state_machine' => array('graph' => 'sylius_order_checkout', 'transition' => 'select_payment'))), array('_locale'), array('GET' => 0, 'PUT' => 1), null),
                            5280 => array(array('_route' => 'sylius_shop_checkout_complete', '_controller' => 'sylius.controller.order:updateAction', '_sylius' => array('event' => 'complete', 'flash' => false, 'template' => 'SyliusShopBundle:Checkout:complete.html.twig', 'repository' => array('method' => 'findCartForSummary', 'arguments' => array('expr:service(\'sylius.context.cart\').getCart().getId()')), 'state_machine' => array('graph' => 'sylius_order_checkout', 'transition' => 'complete'), 'redirect' => array('route' => 'sylius_shop_order_pay', 'parameters' => array('tokenValue' => 'resource.tokenValue')), 'form' => array('type' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Checkout\\CompleteType', 'options' => array('validation_groups' => 'sylius_checkout_complete')))), array('_locale'), array('GET' => 0, 'PUT' => 1), null),
                            5323 => array(array('_route' => 'sylius_shop_contact_request', '_controller' => 'sylius.controller.shop.contact:requestAction', '_sylius' => array('redirect' => 'sylius_shop_homepage')), array('_locale'), array('GET' => 0, 'POST' => 1), null),
                            5374 => array(array('_route' => 'sylius_shop_order_thank_you', '_controller' => 'sylius.controller.order:thankYouAction', '_sylius' => array('template' => '@SyliusShop/Order/thankYou.html.twig')), array('_locale'), array('GET' => 0), null),
                            5427 => array(array('_route' => 'sylius_shop_order_pay', '_controller' => 'sylius.controller.payum:prepareCaptureAction', '_sylius' => array('redirect' => array('route' => 'sylius_shop_order_after_pay'))), array('_locale', 'tokenValue'), array('GET' => 0), null),
                            5478 => array(array('_route' => 'sylius_shop_order_after_pay', '_controller' => 'sylius.controller.payum:afterCaptureAction'), array('_locale'), array('GET' => 0, 'POST' => 1), null),
                            5527 => array(array('_route' => 'sylius_shop_order_show', '_controller' => 'sylius.controller.order:updateAction', '_sylius' => array('template' => '@SyliusShop/Order/show.html.twig', 'repository' => array('method' => 'findOneBy', 'arguments' => array(array('tokenValue' => '$tokenValue'))), 'form' => array('type' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Checkout\\SelectPaymentType', 'options' => array('validation_groups' => array())), 'redirect' => array('route' => 'sylius_shop_order_pay', 'parameters' => array('tokenValue' => 'resource.tokenValue')), 'flash' => false)), array('_locale', 'tokenValue'), array('GET' => 0, 'PUT' => 1), null),
                            5577 => array(array('_route' => 'sylius_shop_account_order_index', '_controller' => 'sylius.controller.order:indexAction', '_sylius' => array('section' => 'shop_account', 'template' => '@SyliusShop/Account/Order/index.html.twig', 'grid' => 'sylius_shop_account_order')), array('_locale'), array('GET' => 0), null),
                            5635 => array(array('_route' => 'sylius_shop_account_order_show', '_controller' => 'sylius.controller.order:showAction', '_sylius' => array('section' => 'shop_account', 'template' => '@SyliusShop/Account/Order/show.html.twig', 'repository' => array('method' => 'findOneByNumberAndCustomer', 'arguments' => array('$number', 'expr:service(\'sylius.context.customer\').getCustomer()')))), array('_locale', 'number'), array('GET' => 0), null),
                            5692 => array(array('_route' => 'sylius_shop_account_address_book_index', '_controller' => 'sylius.controller.address:indexAction', '_sylius' => array('section' => 'shop_account', 'template' => '@SyliusShop/Account/AddressBook/index.html.twig', 'paginate' => false, 'repository' => array('method' => 'findByCustomer', 'arguments' => array('expr:service(\'sylius.context.customer\').getCustomer()')))), array('_locale'), array('GET' => 0), null),
                            5752 => array(array('_route' => 'sylius_shop_account_address_book_create', '_controller' => 'sylius.controller.address:createAction', '_sylius' => array('section' => 'shop_account', 'template' => '@SyliusShop/Account/AddressBook/create.html.twig', 'factory' => array('method' => 'createForCustomer', 'arguments' => array('expr:service(\'sylius.context.customer\').getCustomer()')), 'redirect' => array('route' => 'sylius_shop_account_address_book_index', 'parameters' => array()), 'flash' => 'sylius.customer.add_address')), array('_locale'), array('GET' => 0, 'POST' => 1), null),
                            5822 => array(array('_route' => 'sylius_shop_account_address_book_update', '_controller' => 'sylius.controller.address:updateAction', '_sylius' => array('section' => 'shop_account', 'template' => '@SyliusShop/Account/AddressBook/update.html.twig', 'repository' => array('method' => 'findOneByCustomer', 'arguments' => array('$id', 'expr:service(\'sylius.context.customer\').getCustomer()')), 'redirect' => array('route' => 'sylius_shop_account_address_book_index', 'parameters' => array()))), array('_locale', 'id'), array('GET' => 0, 'PUT' => 1), null),
                            5887 => array(array('_route' => 'sylius_shop_account_address_book_delete', '_controller' => 'sylius.controller.address:deleteAction', '_sylius' => array('section' => 'shop_account', 'repository' => array('method' => 'findOneByCustomer', 'arguments' => array('$id', 'expr:service(\'sylius.context.customer\').getCustomer()')), 'redirect' => 'sylius_shop_account_address_book_index')), array('_locale', 'id'), array('DELETE' => 0), null),
                            5969 => array(array('_route' => 'sylius_shop_account_address_book_set_as_default', '_controller' => 'sylius.controller.customer:updateAction', '_sylius' => array('section' => 'shop_account', 'template' => '@SyliusShop/Account/AddressBook/_defaultAddressForm.html.twig', 'form' => array('type' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Customer\\CustomerDefaultAddressType', 'options' => array('customer' => 'expr:service(\'sylius.context.customer\').getCustomer()')), 'repository' => array('method' => 'find', 'arguments' => array('expr:service(\'sylius.context.customer\').getCustomer()')), 'redirect' => array('route' => 'sylius_shop_account_address_book_index', 'parameters' => array()), 'flash' => 'sylius.customer.set_address_as_default')), array('_locale', 'id'), array('GET' => 0, 'PATCH' => 1), null),
                            6012 => array(array('_route' => 'sylius_shop_account_root', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction', 'route' => 'sylius_shop_account_dashboard', 'permanent' => true), array('_locale'), array('GET' => 0), null),
                            6064 => array(array('_route' => 'sylius_shop_account_dashboard', '_controller' => 'sylius.controller.customer:showAction', '_sylius' => array('template' => '@SyliusShop/Account/dashboard.html.twig', 'repository' => array('method' => 'find', 'arguments' => array('expr:service(\'sylius.context.customer\').getCustomer()')))), array('_locale'), array('GET' => 0), null),
                            6119 => array(array('_route' => 'sylius_shop_account_profile_update', '_controller' => 'sylius.controller.customer:updateAction', '_sylius' => array('template' => '@SyliusShop/Account/profileUpdate.html.twig', 'form' => 'Sylius\\Bundle\\CustomerBundle\\Form\\Type\\CustomerProfileType', 'repository' => array('method' => 'find', 'arguments' => array('expr:service(\'sylius.context.customer\').getCustomer()')), 'redirect' => array('route' => 'sylius_shop_account_profile_update', 'parameters' => array()))), array('_locale'), array('GET' => 0, 'PUT' => 1), null),
                            6178 => array(array('_route' => 'sylius_shop_account_change_password', '_controller' => 'sylius.controller.shop_user:changePasswordAction', '_sylius' => array('template' => '@SyliusShop/Account/changePassword.html.twig', 'redirect' => 'sylius_shop_account_dashboard')), array('_locale'), array('GET' => 0, 'POST' => 1), null),
                            6238 => array(array('_route' => 'sylius_shop_switch_currency', '_controller' => 'sylius.controller.shop.currency_switch:switchAction'), array('_locale', 'code'), array('GET' => 0), null),
                            6296 => array(array('_route' => 'sylius_shop_switch_locale', '_controller' => 'sylius.controller.shop.locale_switch:switchAction'), array('_locale', 'code'), array('GET' => 0), null),
                            6333 => array(array('_route' => 'payum_capture_do', '_controller' => 'Payum\\Bundle\\PayumBundle\\Controller\\CaptureController::doAction'), array('payum_token'), null, null),
                            6367 => array(array('_route' => 'payum_notify_do_unsafe', '_controller' => 'Payum\\Bundle\\PayumBundle\\Controller\\NotifyController::doUnsafeAction'), array('gateway'), null, null),
                            6384 => array(array('_route' => 'payum_notify_do', '_controller' => 'Payum\\Bundle\\PayumBundle\\Controller\\NotifyController::doAction'), array('payum_token'), null, null),
                            6449 => array(array('_route' => 'liip_imagine_filter_runtime', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterRuntimeAction'), array('filter', 'hash', 'path'), array('GET' => 0), null),
                            6476 => array(array('_route' => 'liip_imagine_filter', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterAction'), array('filter', 'path'), array('GET' => 0), null),
                        );

                        list($ret, $vars, $requiredMethods, $requiredSchemes) = $routes[$m];

                        foreach ($vars as $i => $v) {
                            if (isset($matches[1 + $i])) {
                                $ret[$v] = $matches[1 + $i];
                            }
                        }

                        $hasRequiredScheme = !$requiredSchemes || isset($requiredSchemes[$context->getScheme()]);
                        if ($requiredMethods && !isset($requiredMethods[$canonicalMethod]) && !isset($requiredMethods[$requestMethod])) {
                            if ($hasRequiredScheme) {
                                $allow += $requiredMethods;
                            }
                            break;
                        }
                        if (!$hasRequiredScheme) {
                            $allowSchemes += $requiredSchemes;
                            break;
                        }

                        return $ret;
                }

                if (6476 === $m) {
                    break;
                }
                $regex = substr_replace($regex, 'F', $m - $offset, 1 + strlen($m));
                $offset += strlen($m);
            }
        }
        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        return null;
    }
}
