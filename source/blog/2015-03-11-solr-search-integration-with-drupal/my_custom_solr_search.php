$view = new view();
$view->name = 'my_custom_solr_search';
$view->description = '';
$view->tag = 'default';
$view->base_table = 'search_api_multi';
$view->human_name = 'My Custom Solr Search';
$view->core = 7;
$view->api_version = '3.0';
$view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

/* Display: Master */
$handler = $view->new_display('default', 'Master', 'default');
$handler->display->display_options['title'] = 'Search';
$handler->display->display_options['css_class'] = 'search-form';
$handler->display->display_options['use_more_always'] = FALSE;
$handler->display->display_options['access']['type'] = 'none';
$handler->display->display_options['cache']['type'] = 'none';
$handler->display->display_options['query']['type'] = 'views_query';
$handler->display->display_options['exposed_form']['type'] = 'input_required';
$handler->display->display_options['exposed_form']['options']['submit_button'] = 'Search';
$handler->display->display_options['exposed_form']['options']['expose_sort_order'] = FALSE;
$handler->display->display_options['exposed_form']['options']['text_input_required'] = 'Enter a search term and click Search to see results';
$handler->display->display_options['exposed_form']['options']['text_input_required_format'] = 'filtered_html';
$handler->display->display_options['pager']['type'] = 'full';
$handler->display->display_options['pager']['options']['items_per_page'] = '10';
$handler->display->display_options['style_plugin'] = 'default';
$handler->display->display_options['row_plugin'] = 'fields';
/* Relationship: Searchable Profiles: User (indexed) */
$handler->display->display_options['relationships']['profiles_user']['id'] = 'profiles_user';
$handler->display->display_options['relationships']['profiles_user']['table'] = 'search_api_multi';
$handler->display->display_options['relationships']['profiles_user']['field'] = 'profiles_user';
/* Relationship: User: UMIACS staff profile */
$handler->display->display_options['relationships']['profile_umiacs_staff']['id'] = 'profile_umiacs_staff';
$handler->display->display_options['relationships']['profile_umiacs_staff']['table'] = 'entity_user';
$handler->display->display_options['relationships']['profile_umiacs_staff']['field'] = 'profile_umiacs_staff';
$handler->display->display_options['relationships']['profile_umiacs_staff']['relationship'] = 'profiles_user';
/* Field: Searchable Content: Title (indexed) */
$handler->display->display_options['fields']['searchable_content_title']['id'] = 'searchable_content_title';
$handler->display->display_options['fields']['searchable_content_title']['table'] = 'search_api_multi';
$handler->display->display_options['fields']['searchable_content_title']['field'] = 'searchable_content_title';
$handler->display->display_options['fields']['searchable_content_title']['label'] = '';
$handler->display->display_options['fields']['searchable_content_title']['element_type'] = 'h3';
$handler->display->display_options['fields']['searchable_content_title']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['searchable_content_title']['link_to_entity'] = 1;
/* Field: Searchable Content » The main body text: Text (indexed) */
$handler->display->display_options['fields']['searchable_content_body_value']['id'] = 'searchable_content_body_value';
$handler->display->display_options['fields']['searchable_content_body_value']['table'] = 'search_api_multi';
$handler->display->display_options['fields']['searchable_content_body_value']['field'] = 'searchable_content_body_value';
$handler->display->display_options['fields']['searchable_content_body_value']['label'] = '';
$handler->display->display_options['fields']['searchable_content_body_value']['alter']['max_length'] = '230';
$handler->display->display_options['fields']['searchable_content_body_value']['alter']['strip_tags'] = TRUE;
$handler->display->display_options['fields']['searchable_content_body_value']['alter']['trim'] = TRUE;
$handler->display->display_options['fields']['searchable_content_body_value']['alter']['preserve_tags'] = '<em>';
$handler->display->display_options['fields']['searchable_content_body_value']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['searchable_content_body_value']['link_to_entity'] = 0;
/* Field: Searchable Profiles: User (indexed) */
$handler->display->display_options['fields']['profiles_user']['id'] = 'profiles_user';
$handler->display->display_options['fields']['profiles_user']['table'] = 'search_api_multi';
$handler->display->display_options['fields']['profiles_user']['field'] = 'profiles_user';
$handler->display->display_options['fields']['profiles_user']['label'] = '';
$handler->display->display_options['fields']['profiles_user']['exclude'] = TRUE;
$handler->display->display_options['fields']['profiles_user']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['profiles_user']['link_to_entity'] = 1;
$handler->display->display_options['fields']['profiles_user']['view_mode'] = 'full';
$handler->display->display_options['fields']['profiles_user']['bypass_access'] = 0;
/* Field: User: Name */
$handler->display->display_options['fields']['name']['id'] = 'name';
$handler->display->display_options['fields']['name']['table'] = 'entity_user';
$handler->display->display_options['fields']['name']['field'] = 'name';
$handler->display->display_options['fields']['name']['relationship'] = 'profiles_user';
$handler->display->display_options['fields']['name']['label'] = '';
$handler->display->display_options['fields']['name']['exclude'] = TRUE;
$handler->display->display_options['fields']['name']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['name']['link_to_entity'] = 0;
/* Field: Searchable Profiles: Full name (indexed) */
$handler->display->display_options['fields']['profiles_field_full_name']['id'] = 'profiles_field_full_name';
$handler->display->display_options['fields']['profiles_field_full_name']['table'] = 'search_api_multi';
$handler->display->display_options['fields']['profiles_field_full_name']['field'] = 'profiles_field_full_name';
$handler->display->display_options['fields']['profiles_field_full_name']['label'] = '';
$handler->display->display_options['fields']['profiles_field_full_name']['alter']['make_link'] = TRUE;
$handler->display->display_options['fields']['profiles_field_full_name']['alter']['path'] = 'people/[name]';
$handler->display->display_options['fields']['profiles_field_full_name']['element_type'] = 'h3';
$handler->display->display_options['fields']['profiles_field_full_name']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['profiles_field_full_name']['type'] = 'computed_field_unsanitized';
/* Field: Profile: Photo */
$handler->display->display_options['fields']['field_photo']['id'] = 'field_photo';
$handler->display->display_options['fields']['field_photo']['table'] = 'entity_profile2';
$handler->display->display_options['fields']['field_photo']['field'] = 'field_photo';
$handler->display->display_options['fields']['field_photo']['relationship'] = 'profile_umiacs_staff';
$handler->display->display_options['fields']['field_photo']['label'] = '';
$handler->display->display_options['fields']['field_photo']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['field_photo']['click_sort_column'] = 'fid';
$handler->display->display_options['fields']['field_photo']['settings'] = array(
  'image_style' => 'headshot_48x48',
  'image_link' => 'content',
);
$handler->display->display_options['fields']['field_photo']['delta_offset'] = '0';
/* Sort criterion: Search: Relevance */
$handler->display->display_options['sorts']['search_api_relevance']['id'] = 'search_api_relevance';
$handler->display->display_options['sorts']['search_api_relevance']['table'] = 'search_api_multi';
$handler->display->display_options['sorts']['search_api_relevance']['field'] = 'search_api_relevance';
$handler->display->display_options['sorts']['search_api_relevance']['order'] = 'DESC';
/* Filter criterion: Search: Fulltext search */
$handler->display->display_options['filters']['search_api_multi_fulltext']['id'] = 'search_api_multi_fulltext';
$handler->display->display_options['filters']['search_api_multi_fulltext']['table'] = 'search_api_multi';
$handler->display->display_options['filters']['search_api_multi_fulltext']['field'] = 'search_api_multi_fulltext';
$handler->display->display_options['filters']['search_api_multi_fulltext']['exposed'] = TRUE;
$handler->display->display_options['filters']['search_api_multi_fulltext']['expose']['operator_id'] = 'search_api_multi_fulltext_op';
$handler->display->display_options['filters']['search_api_multi_fulltext']['expose']['operator'] = 'search_api_multi_fulltext_op';
$handler->display->display_options['filters']['search_api_multi_fulltext']['expose']['identifier'] = 'search_api_multi_fulltext';
$handler->display->display_options['filters']['search_api_multi_fulltext']['expose']['remember_roles'] = array(
  2 => '2',
  1 => 0,
  6 => 0,
  4 => 0,
  5 => 0,
  3 => 0,
);

/* Display: Page */
$handler = $view->new_display('page', 'Page', 'page');
$handler->display->display_options['exposed_block'] = TRUE;
$handler->display->display_options['path'] = 'my-custom-solr-search';
