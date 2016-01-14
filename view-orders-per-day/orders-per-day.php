$view = new view();
$view->name = 'orders_by_day';
$view->description = '';
$view->tag = 'default';
$view->base_table = 'commerce_order';
$view->human_name = 'orders by day';
$view->core = 7;
$view->api_version = '3.0';
$view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

/* Display: Master */
$handler = $view->new_display('default', 'Master', 'default');
$handler->display->display_options['title'] = 'orders by day';
$handler->display->display_options['use_more_always'] = FALSE;
$handler->display->display_options['group_by'] = TRUE;
$handler->display->display_options['access']['type'] = 'none';
$handler->display->display_options['cache']['type'] = 'none';
$handler->display->display_options['query']['type'] = 'views_query';
$handler->display->display_options['exposed_form']['type'] = 'basic';
$handler->display->display_options['pager']['type'] = 'full';
$handler->display->display_options['pager']['options']['items_per_page'] = '10';
$handler->display->display_options['style_plugin'] = 'table';
$handler->display->display_options['style_options']['columns'] = array(
  'order_id' => 'order_id',
);
$handler->display->display_options['style_options']['default'] = '-1';
$handler->display->display_options['style_options']['info'] = array(
  'order_id' => array(
    'sortable' => 0,
    'default_sort_order' => 'asc',
    'align' => '',
    'separator' => '',
    'empty_column' => 0,
  ),
);
/* Field: MIN(Commerce Order: Created date) */
$handler->display->display_options['fields']['created']['id'] = 'created';
$handler->display->display_options['fields']['created']['table'] = 'commerce_order';
$handler->display->display_options['fields']['created']['field'] = 'created';
$handler->display->display_options['fields']['created']['group_type'] = 'min';
$handler->display->display_options['fields']['created']['date_format'] = 'custom';
$handler->display->display_options['fields']['created']['custom_date_format'] = 'Y-m-d';
$handler->display->display_options['fields']['created']['second_date_format'] = 'long';
/* Field: COUNT(DISTINCT Commerce Order: Order ID) */
$handler->display->display_options['fields']['order_id']['id'] = 'order_id';
$handler->display->display_options['fields']['order_id']['table'] = 'commerce_order';
$handler->display->display_options['fields']['order_id']['field'] = 'order_id';
$handler->display->display_options['fields']['order_id']['group_type'] = 'count_distinct';
$handler->display->display_options['fields']['order_id']['label'] = 'Count';
/* Field: SUM(Commerce Order: Order total) */
$handler->display->display_options['fields']['commerce_order_total']['id'] = 'commerce_order_total';
$handler->display->display_options['fields']['commerce_order_total']['table'] = 'field_data_commerce_order_total';
$handler->display->display_options['fields']['commerce_order_total']['field'] = 'commerce_order_total';
$handler->display->display_options['fields']['commerce_order_total']['group_type'] = 'sum';
$handler->display->display_options['fields']['commerce_order_total']['label'] = 'Total Amount';
$handler->display->display_options['fields']['commerce_order_total']['element_type'] = '0';
$handler->display->display_options['fields']['commerce_order_total']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['commerce_order_total']['element_wrapper_type'] = '0';
$handler->display->display_options['fields']['commerce_order_total']['element_default_classes'] = FALSE;
$handler->display->display_options['fields']['commerce_order_total']['click_sort_column'] = 'amount';
$handler->display->display_options['fields']['commerce_order_total']['settings'] = array(
  'calculation' => FALSE,
);
$handler->display->display_options['fields']['commerce_order_total']['group_column'] = 'amount';
$handler->display->display_options['fields']['commerce_order_total']['field_api_classes'] = TRUE;
/* Sort criterion: Commerce Order: Created date */
$handler->display->display_options['sorts']['created']['id'] = 'created';
$handler->display->display_options['sorts']['created']['table'] = 'commerce_order';
$handler->display->display_options['sorts']['created']['field'] = 'created';
$handler->display->display_options['sorts']['created']['granularity'] = 'day';

/* Display: Page */
$handler = $view->new_display('page', 'Page', 'page');
$handler->display->display_options['path'] = 'orders-by-day';

