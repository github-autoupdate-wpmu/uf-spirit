<?php
$layout_version = '1.0.0';

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php');

$products_header = upfront_create_region(
			array (
  'name' => 'products-header',
  'title' => 'Products Header',
  'type' => 'clip',
  'scope' => 'local',
  'container' => 'products-header',
  'position' => 1,
  'allow_sidebar' => true,
),
			array (
  'version' => '1.0.0',
  'row' => 78,
  'breakpoint' => 
  (array)(array(
     'tablet' => 
    (array)(array(
       'edited' => false,
       'col' => 24,
    )),
     'mobile' => 
    (array)(array(
       'edited' => false,
       'col' => 24,
    )),
  )),
  'sub_regions' => 
  array (
    0 => false,
  ),
  'background_type' => 'image',
  'background_color' => '#ffffff',
  'bg_padding_type' => 'varied',
  'top_bg_padding_num' => '80',
  'bottom_bg_padding_num' => 0,
  'bg_padding_num' => 0,
  'background_style' => 'full',
  'background_default' => 'hide',
  'background_position_y' => '50',
  'background_position_x' => '50',
  'origin_position_y' => '50',
  'origin_position_x' => '50',
  'background_size_percent' => '100',
  'background_image' => '{{upfront:style_url}}/images/single-page-mpproducts/img-gallery-five.jpg',
  'background_image_ratio' => 0.67000000000000003996802888650563545525074005126953125,
)
			);

$products_header->add_element("PlainTxt", array (
  'columns' => '24',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1479086303567-1713',
  'id' => 'module-1479086303567-1713',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h1 style="text-align: center;">PRODUCTS</h1>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1479086303566-1397',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'preset' => 'default',
    'padding_slider' => '15',
    'top_padding_num' => '15',
    'left_padding_num' => '15',
    'right_padding_num' => '15',
    'bottom_padding_num' => '15',
    'lock_padding' => '',
    'use_padding' => 'yes',
    'usingNewAppearance' => true,
    'is_edited' => true,
    'current_preset' => 'default',
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'use_padding' => 'yes',
      )),
       'current_property' => 'use_padding',
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1479086383723-1853',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'clear' => true,
      'col' => 12,
      'order' => 1,
    ),
    'mobile' => 
    array (
      'clear' => true,
      'col' => 7,
      'order' => 1,
    ),
    'current_property' => 
    array (
      0 => 'order',
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 12,
    ),
    'current_property' => 
    array (
      0 => 'col',
    ),
    'mobile' => 
    array (
      'col' => 7,
    ),
  ),
));

$regions->add($products_header);

$main = upfront_create_region(
			array (
  'name' => 'main',
  'title' => 'Main Area',
  'type' => 'clip',
  'scope' => 'local',
  'container' => 'main',
  'position' => 10,
  'allow_sidebar' => true,
),
			array (
  'row' => 140,
  'background_type' => 'color',
  'background_color' => '#ufc6',
  'version' => '1.0.0',
  'breakpoint' => 
  (array)(array(
     'tablet' => 
    (array)(array(
       'edited' => false,
       'col' => 24,
    )),
     'mobile' => 
    (array)(array(
       'edited' => false,
       'col' => 24,
    )),
  )),
  'sub_regions' => 
  array (
    0 => false,
  ),
  'bg_padding_type' => 'equal',
  'top_bg_padding_num' => 0,
  'bottom_bg_padding_num' => 0,
  'bg_padding_num' => 0,
)
			);

$main->add_element("Uspacer", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1479086678108-1678 upfront-module-spacer',
  'id' => 'module-1479086678108-1678',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24 upfront-object-spacer',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1479086678108-1299',
    'current_preset' => 'default',
    'preset' => 'default',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1479086678108-1411',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 1,
    ),
    'mobile' => 
    array (
      'col' => 1,
    ),
  ),
));

$main->add_element("PlainTxt", array (
  'columns' => '22',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1479086466982-1260',
  'id' => 'module-1479086466982-1260',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p><a target="_self" data-upfront-link-type="homepage" href="{{upfront:home_url}}">HOME</a> / <a href="{{upfront:home_url}}/store/" target="_self" data-upfront-link-type="entry">STORE</a> / PRODUCTS</p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1479086466982-1778',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'preset' => 'breadcrumbs',
    'padding_slider' => '15',
    'top_padding_num' => '15',
    'left_padding_num' => '15',
    'right_padding_num' => '15',
    'bottom_padding_num' => '15',
    'lock_padding' => '',
    'use_padding' => 'yes',
    'usingNewAppearance' => true,
    'is_edited' => true,
    'anchor' => '',
    'current_preset' => 'breadcrumbs',
    'theme_style' => '',
    'breakpoint_presets' => 
    (array)(array(
       'desktop' => 
      (array)(array(
         'preset' => 'breadcrumbs',
      )),
    )),
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'use_padding' => 'yes',
      )),
       'current_property' => 'use_padding',
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1479086477224-1195',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'clear' => true,
      'col' => 12,
      'order' => 1,
    ),
    'mobile' => 
    array (
      'clear' => true,
      'col' => 7,
      'order' => 1,
    ),
    'current_property' => 
    array (
      0 => 'order',
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 12,
    ),
    'current_property' => 
    array (
      0 => 'col',
    ),
    'mobile' => 
    array (
      'col' => 7,
    ),
  ),
));

$main->add_element("Uspacer", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1479086679978-1681 upfront-module-spacer',
  'id' => 'module-1479086679978-1681',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24 upfront-object-spacer',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1479086679978-1590',
    'current_preset' => 'default',
    'preset' => 'default',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1479086679977-1338',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 1,
    ),
    'mobile' => 
    array (
      'col' => 1,
    ),
  ),
));

$main->add_element("Uspacer", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1479086471183-1196 upfront-module-spacer',
  'id' => 'module-1479086471183-1196',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24 upfront-object-spacer',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1479086471183-1750',
    'current_preset' => 'default',
    'preset' => 'default',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1479086471182-1750',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 1,
    ),
    'mobile' => 
    array (
      'col' => 1,
    ),
  ),
));

$main->add_element("PostData", array (
  'columns' => '22',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1467787537272-1394',
  'id' => 'module-1467787537272-1394',
  'options' => 
  array (
    'type' => 'PostDataModel',
    'view_class' => 'PostDataView',
    'has_settings' => 1,
    'class' => 'c24 upost-data-object upost-data-object-post_data',
    'id_slug' => 'post-data',
    'data_type' => 'post_data',
    'preset' => 'mp-products',
    'row' => 52,
    'type_parts' => 
    array (
      0 => 'date_posted',
      1 => 'title',
      2 => 'content',
    ),
    'date_posted_format' => 'F j, Y g:i a',
    'content' => 'content',
    'post-part-date_posted' => '<div class="upostdata-part date_posted">
	Posted on <span class="date">{{date}}</span></div>',
    'post-part-title' => '<div class="upostdata-part title">
	<h1>{{title}}</h1>
</div>
',
    'post-part-content' => '<div class="upostdata-part content">
	{{content}}
</div>',
    'element_id' => 'post-data-object-1467787537271-1215',
    'top_padding_num' => 15,
    'bottom_padding_num' => 15,
    'use_padding' => 'yes',
    'usingNewAppearance' => true,
    'left_padding_num' => 15,
    'right_padding_num' => 15,
    'lock_padding' => '',
    'anchor' => '',
    'current_preset' => 'mp-products',
    'breakpoint_presets' => 
    (array)(array(
       'desktop' => 
      (array)(array(
         'preset' => 'mp-products',
      )),
       'tablet' => 
      (array)(array(
         'preset' => 'mp-products-for-tablet',
      )),
    )),
    'preset_style' => '#page .default.upost-data-object-post_data .upostdata-part.date_posted {
    letter-spacing: 0.5px;
    text-transform: uppercase;
}
#page .default.upost-data-object-post_data .upostdata-part.title h1 {
    letter-spacing: -0.2px;
    text-transform: uppercase;
}
',
    'predefined_date_format' => '0',
    'static-date_posted-use-typography' => 'yes',
    'static-date_posted-font-family' => 'Oswald',
    'static-date_posted-fontstyle' => '300 normal',
    'static-date_posted-weight' => '300',
    'static-date_posted-style' => 'normal',
    'static-date_posted-font-size' => '15',
    'static-date_posted-line-height' => '1.3',
    'static-date_posted-font-color' => '#ufc2',
    'static-title-use-typography' => 'yes',
    'static-title-font-family' => 'Open Sans',
    'static-title-fontstyle' => '700 normal',
    'static-title-weight' => '700',
    'static-title-style' => 'normal',
    'static-title-font-size' => '25',
    'static-title-line-height' => '1.3',
    'static-title-font-color' => '#ufc7',
    'theme_preset' => 'true',
    'calculated_left_indent' => 0,
    'calculated_right_indent' => 0,
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'use_padding' => 'yes',
      )),
       'current_property' => 'lock_padding',
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1467787553104-1347',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'clear' => true,
      'col' => 12,
      'order' => 2,
    ),
    'mobile' => 
    array (
      'clear' => true,
      'col' => 7,
      'order' => 2,
    ),
    'current_property' => 
    array (
      0 => 'order',
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 12,
    ),
    'current_property' => 
    array (
      0 => 'col',
    ),
    'mobile' => 
    array (
      'col' => 7,
    ),
  ),
  'objects' => 
  array (
    0 => 
    array (
      'columns' => '22',
      'margin_left' => '0',
      'margin_right' => '0',
      'margin_top' => '0',
      'margin_bottom' => '0',
      'class' => 'upfront-post-data-part part-content',
      'view_class' => 'PostDataPartView',
      'part_type' => 'content',
      'wrapper_id' => 'wrapper-1467787537270-1603',
      'type' => 'PostDataPartModel',
      'id_slug' => 'post-data-part',
      'element_id' => 'post-data-part-object-1467787537271-1078',
      'padding_slider' => 15,
      'use_padding' => 'yes',
      'wrapper_breakpoint' => 
      array (
        'tablet' => 
        array (
          'col' => 12,
        ),
        'mobile' => 
        array (
          'col' => 7,
        ),
      ),
      'top_padding_num' => 15,
      'left_padding_num' => 15,
      'right_padding_num' => 15,
      'bottom_padding_num' => 15,
      'lock_padding' => '',
      'row' => 52,
      'current_preset' => 'default',
      'preset' => 'default',
      'new_line' => true,
      'breakpoint' => 
      array (
        'tablet' => 
        array (
          'col' => 12,
          'use_padding' => 'yes',
          'hide' => 0,
        ),
        'current_property' => 
        array (
          0 => 'lock_padding',
        ),
        'mobile' => 
        array (
          'col' => 7,
        ),
      ),
    ),
  ),
));

$main->add_element("Uspacer", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1479086473529-1239 upfront-module-spacer',
  'id' => 'module-1479086473529-1239',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24 upfront-object-spacer',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1479086473529-1833',
    'current_preset' => 'default',
    'preset' => 'default',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1479086473528-1937',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 1,
    ),
    'mobile' => 
    array (
      'col' => 1,
    ),
  ),
));

$regions->add($main);

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php');

