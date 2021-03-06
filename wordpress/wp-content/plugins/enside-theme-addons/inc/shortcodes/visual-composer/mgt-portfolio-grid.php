<?php

// VC [mgt_portfolio_grid_wp]

vc_map(array(
   "name" 			=> "MGT Portfolio Grid",
   "category" 		=> 'Enside Content',
   "description"	=> "Show portfolio items grid with filter",
   "base" 			=> "mgt_portfolio_grid_wp",
   "class" 			=> "",
   "icon" 			=> "vc_mgt_portfolio_grid",
   
   "params" 	=> array(
   		array(
			"type"			=> "mgt_separator",
			"param_name"	=> generate_separator_name(),
			"heading"		=> "Layout settings",
		),
		array(
			"type"			=> "dropdown",
			"holder"		=> "div",
			"class" 		=> "hide_in_vc_editor",
			"admin_label" 	=> true,
			"heading"		=> "Grid layout",
			"description"	=> "",
			"param_name"	=> "layout",
			"value"			=> array(
				"Equal thumbs"	=> "0",
				"Masonry 1"	=> "1",
				"Masonry 2"	=> "2",
				"Masonry 3"	=> "3",
				"Gallery Slideshow"	=> "4",
				"Compact List"	=> "5",
				"Medium List"	=> "6"
			),
			"std"			=> "0",
			"edit_field_class" => "vc_col-xs-6",
		),
   		array(
			"type"			=> "dropdown",
			"holder"		=> "div",
			"class" 		=> "hide_in_vc_editor",
			"admin_label" 	=> true,
			"heading"		=> "Items per row in grid (columns)",
			"description"	=> "",
			"param_name"	=> "columns",
			"dependency"	=> array(
				"element"	=> "layout",
				"value"		=> Array("0"),
			),
			"value"			=> array(
				"1"	=> "1",
				"2"	=> "2",
				"3"	=> "3",
				"4"	=> "4",
				"5"	=> "5"
			),
			"std"			=> "4",
			"edit_field_class" => "vc_col-xs-6",
		),
		array(
			"type"			=> "dropdown",
			"holder"		=> "div",
			"class" 		=> "hide_in_vc_editor",
			"admin_label" 	=> true,
			"heading"		=> "Slides per row in carousel slider (columns)",
			"description"	=> "",
			"param_name"	=> "slider_columns",
			"dependency"	=> array(
				"element"	=> "layout",
				"value"		=> Array("4"),
			),
			"value"			=> array(
				"1"	=> "1",
				"2"	=> "2",
				"3"	=> "3",
				"4"	=> "4",
				"5"	=> "5"
			),
			"std"			=> "4",
			"edit_field_class" => "vc_col-xs-6",
		),
		array(
			"type"			=> "dropdown",
			"holder"		=> "div",
			"class" 		=> "hide_in_vc_editor",
			"admin_label" 	=> true,
			"heading"		=> "Slider autoplay",
			"description"	=> "",
			"param_name"	=> "slider_autoplay",
			"dependency"	=> array(
				"element"	=> "layout",
				"value"		=> Array("4"),
			),
			"value"			=> array(
				"Enable"	=> "true",
				"Disable"	=> "false",
			),
			"std"			=> "false",
			"edit_field_class" => "vc_col-xs-6",
		),
		array(
			"type"			=> "dropdown",
			"holder"		=> "div",
			"class" 		=> "hide_in_vc_editor",
			"admin_label" 	=> true,
			"heading"		=> "Slider navigation arrows",
			"description"	=> "",
			"param_name"	=> "slider_navigation",
			"dependency"	=> array(
				"element"	=> "layout",
				"value"		=> Array("4"),
			),
			"value"			=> array(
				"Enable"	=> "true",
				"Disable"	=> "false",
			),
			"std"			=> "false",
			"edit_field_class" => "vc_col-xs-6",
		),
		array(
			"type"			=> "dropdown",
			"holder"		=> "div",
			"class" 		=> "hide_in_vc_editor",
			"admin_label" 	=> true,
			"heading"		=> "Slider pagination buttons",
			"description"	=> "",
			"param_name"	=> "slider_pagination",
			"dependency"	=> array(
				"element"	=> "layout",
				"value"		=> Array("4"),
			),
			"value"			=> array(
				"Enable"	=> "true",
				"Disable"	=> "false",
			),
			"std"			=> "false",
			"edit_field_class" => "vc_col-xs-6",
		),
		array(
			"type"			=> "textfield",
			"holder"		=> "div",
			"class" 		=> "hide_in_vc_editor",
			"admin_label" 	=> true,
			"heading"		=> "Slider autoplay speed",
			"param_name"	=> "slider_speed",
			"std"			=> "200",
			"dependency"	=> array(
				"element"	=> "layout",
				"value"		=> Array("4"),
			),
			"edit_field_class" => "vc_col-xs-6",
		),
		array(
			"type"			=> "dropdown",
			"holder"		=> "div",
			"class" 		=> "hide_in_vc_editor",
			"admin_label" 	=> true,
			"heading"		=> "Add spaces between elements in grid",
			"description"	=> "",
			"dependency"	=> array(
				"element"	=> "layout",
				"value"		=> Array("0", "2", "3", "4", "5", "6"),
			),
			"param_name"	=> "spaces",
			"value"			=> array(
				"No"	=> "0",
				"Yes"	=> "1"
			),
			"std"			=> "0",
		),
		array(
			"type"			=> "dropdown",
			"holder"		=> "div",
			"class" 		=> "hide_in_vc_editor",
			"admin_label" 	=> true,
			"heading"		=> "Show View More button in projects boxes",
			"description"	=> "",
			"param_name"	=> "show_viewmore_button",
			"value"			=> array(
				"Show"	=> "1",
				"Hide"	=> "0"
			),
			"std"			=> "show",
			"edit_field_class" => "vc_col-xs-6",
		),
		array(
			"type"			=> "textfield",
			"holder"		=> "div",
			"class" 		=> "hide_in_vc_editor",
			"admin_label" 	=> true,
			"heading"		=> "View more button text",
			"param_name"	=> "viewmore_button_text",
			"std"			=> "View more",
			'dependency' => array(
				'element' => 'show_viewmore_button',
				'value' => '1',
			),
			"edit_field_class" => "vc_col-xs-6",
		),
		array(
			"type"			=> "dropdown",
			"holder"		=> "div",
			"class" 		=> "hide_in_vc_editor",
			"admin_label" 	=> false,
			"heading"		=> "View more button round edges",
			"param_name"	=> "viewmore_button_round_edges",
			"value"			=> array(
				"Disable"	=> "disable",
				"Small"	=> "small",
				"Medium"	=> "medium",
				"Large"	=> "large",
				"Full"	=> "full"
			),
			'dependency' => array(
				'element' => 'show_viewmore_button',
				'value' => '1',
			),
			"description"	=> "Change view more button border radius.",
			"std"			=> "disable",
			"edit_field_class" => "vc_col-xs-6",
		),
		array(
			"type"			=> "dropdown",
			"holder"		=> "div",
			"class" 		=> "hide_in_vc_editor",
			"admin_label" 	=> true,
			"heading"		=> "Show short description in projects boxes",
			"description"	=> "",
			"param_name"	=> "show_description",
			"description"	=> "You can specify description in project edit page.",
			"value"			=> array(
				"Show"	=> "1",
				"Hide"	=> "0"
			),
			"std"			=> "show",
			"edit_field_class" => "vc_col-xs-6",
		),	
		array(
			"type"			=> "dropdown",
			"holder"		=> "div",
			"class" 		=> "hide_in_vc_editor",
			"admin_label" 	=> true,
			"heading"		=> "Text align in project boxes",
			"description"	=> "",
			"param_name"	=> "text_align",
			"value"			=> array(
				"Left"	=> "left",
				"Center"	=> "center"
			),
			"std"			=> "left",
		),	
		// Filter
		array(
			"type"			=> "mgt_separator",
			"param_name"	=> generate_separator_name(),
			"heading"		=> "Filter settings",
		),
		array(
			'type' => 'checkbox',
			'heading' => __( 'Show project categories ajax filter?', 'js_composer' ),
			'param_name' => 'show_filter',
			"dependency"	=> array(
				"element"	=> "layout",
				"value"		=> Array("0", "1", "2", "3", "5", "6"),
			),
		),
		array(
			"type"			=> "dropdown",
			"holder"		=> "div",
			"class" 		=> "hide_in_vc_editor",
			"admin_label" 	=> true,
			"heading"		=> "Portfolio filter align",
			"description"	=> "Portfolio filter horizontal align.",
			"param_name"	=> "filter_align",
			"value"			=> array(
				"Left"	=> "left",
				"Center"	=> "center"
			),
			"std"			=> "left",
			'dependency' => array(
				'element' => 'show_filter',
				'value' => 'true',
			),
			"edit_field_class" => "vc_col-xs-6",
		),
		array(
			"type"			=> "dropdown",
			"holder"		=> "div",
			"class" 		=> "hide_in_vc_editor",
			"admin_label" 	=> true,
			"heading"		=> "Portfolio filter colors",
			"description"	=> "You light colors if you use portfolio element on dark background.",
			"param_name"	=> "filter_color",
			"value"			=> array(
				"Dark"	=> "dark",
				"Light"	=> "light"
			),
			"std"			=> "dark",
			'dependency' => array(
				'element' => 'show_filter',
				'value' => 'true',
			),
			"edit_field_class" => "vc_col-xs-6",
		),
		array(
			"type"			=> "dropdown",
			"holder"		=> "div",
			"class" 		=> "hide_in_vc_editor",
			"admin_label" 	=> true,
			"heading"		=> "Portfolio filter border",
			"description"	=> "Show border around portfolio filter block.",
			"param_name"	=> "filter_border",
			"value"			=> array(
				"Show"	=> "show",
				"Hide"	=> "hide"
			),
			"std"			=> "hide",
			"edit_field_class" => "vc_col-xs-6",
			'dependency' => array(
				'element' => 'show_filter',
				'value' => 'true',
			),
		),
		array(
			"type"			=> "dropdown",
			"holder"		=> "div",
			"class" 		=> "hide_in_vc_editor",
			"admin_label" 	=> true,
			"heading"		=> "Portfolio filter border style",
			"description"	=> "Portfolio filter block border style.",
			"param_name"	=> "filter_border_style",
			"value"			=> array(
				"Rounded"	=> "rounded",
				"Square"	=> "square"
			),
			"std"			=> "rounded",
			'dependency' => array(
				'element' => 'filter_border',
				'value' => 'show',
			),
			"edit_field_class" => "vc_col-xs-6",
		),
		array(
			"type"			=> "textfield",
			"holder"		=> "div",
			"class" 		=> "hide_in_vc_editor",
			"admin_label" 	=> true,
			"heading"		=> "Reset filters button text",
			"param_name"	=> "reset_filter_button_text",
			"dependency"	=> array(
				"element"	=> "layout",
				"value"		=> Array("0", "1", "2", "3", "5", "6"),
			),
			"dependency"	=> array(
				"element"	=> "show_filter",
				"value"		=> Array("1"),
			),
			"std"			=> "All",
			"description"	=> "If you show your portfolio list as part of page with limited items use 'Recent', if you show your portfolio with all items for example on separated Portfolio page use 'All' or other text you need.",
			'dependency' => array(
				'element' => 'show_filter',
				'value' => 'true',
			),
		),
		array(
			"type"			=> "mgt_separator",
			"param_name"	=> generate_separator_name(),
			"heading"		=> "Additional settings",
		),
		array(
			"type"			=> "vc_link",
			"holder"		=> "div",
			"class" 		=> "hide_in_vc_editor",
			"admin_label" 	=> false,
			"heading"		=> "View all portfolio items button (link to Portfolio page)",
			"description"	=> "",
			"param_name"	=> "show_viewall_button",
			"dependency"	=> array(
				"element"	=> "layout",
				"value"		=> Array("0", "1", "2", "3", "5", "6"),
			),
			"std"			=> "",
			"description"	=> "Leave empty if you don't want to have 'View all' button that open your separated portfolio page. You need to choose to create your portfolio page first and choose its url here.",
		),
		array(
			"type"			=> "dropdown",
			"holder"		=> "div",
			"class" 		=> "hide_in_vc_editor",
			"admin_label" 	=> true,
			"heading"		=> "Open portfolio item image in lightbox on grid item click instead of item page",
			"description"	=> "",
			"param_name"	=> "open_image",
			"value"			=> array(
				"No"	=> "0",
				"Yes"	=> "1"
			),
			"std"			=> "0",
			"edit_field_class" => "vc_col-xs-6",
		),
		array(
			"type"			=> "dropdown",
			"holder"		=> "div",
			"class" 		=> "hide_in_vc_editor",
			"admin_label" 	=> true,
			"heading"		=> "Open portfolio item url on grid item click instead of item page",
			"description"	=> "",
			"param_name"	=> "open_url",
			"dependency"	=> array(
				"element"	=> "open_image",
				"value"		=> Array("0"),
			),
			"value"			=> array(
				"No"	=> "0",
				"Yes"	=> "1"
			),
			"std"			=> "0",
			"edit_field_class" => "vc_col-xs-6",
		),
		array(
			"type"			=> "mgt_separator",
			"param_name"	=> generate_separator_name(),
			"heading"		=> "Order and limit",
		),
		array(
			"type"			=> "dropdown",
			"holder"		=> "div",
			"class" 		=> "hide_in_vc_editor",
			"admin_label" 	=> true,
			"heading"		=> "Order By",
			"param_name"	=> "orderby",
			"value"			=> array(
				"ID"	=> "id",
				"Title"	=> "title",
				"Date"	=> "date",
				"Random"	=> "rand",
				"Custom (set order in projects settings)"	=> "custom"
			),
			"std"			=> "date",
			"edit_field_class" => "vc_col-xs-6",
		),
		array(
			"type"			=> "dropdown",
			"holder"		=> "div",
			"class" 		=> "hide_in_vc_editor",
			"admin_label" 	=> true,
			"heading"		=> "Order",
			"param_name"	=> "order",
			"value"			=> array(
				"Desc"	=> "DESC",
				"Asc"	=> "ASC"
			),
			"std"			=> "DESC",
			"edit_field_class" => "vc_col-xs-6",
		),
		array(
			"type"			=> "textfield",
			"holder"		=> "div",
			"class" 		=> "hide_in_vc_editor",
			"admin_label" 	=> true,
			"heading"		=> "Portfolio grid items limit",
			"param_name"	=> "posts_per_page",
			"description"	=> "Leave empty to show ALL portfolio items on your separated portfolio page. ",
			"std"			=> "",
		),
		array(
			"type"			=> "textfield",
			"holder"		=> "div",
			"class" 		=> "hide_in_vc_editor",
			"admin_label" 	=> true,
			"heading"		=> "Show Portfolio items from specific one category only",
			"param_name"	=> "category_name",
			"description"	=> "Input portfolio category SLUG (not name!) here, for example 'web-design'. You can see/set category SLUG when you edit category. Using this option will disable category filter block. Leave empty to show elements from categories.",
			"std"			=> "",
		),
		array(
			"type"			=> "mgt_separator",
			"param_name"	=> generate_separator_name(),
			"heading"		=> "Animation and effects",
		),
		array(
			"type"			=> "dropdown",
			"holder"		=> "div",
			"class" 		=> "hide_in_vc_editor",
			"admin_label" 	=> true,
			"heading"		=> "Grid Items Layout and Hover Effect",
			"description"	=> "",
			"param_name"	=> "item_hover_effect",
			"value"			=> array(
				"1. Text from left, Zoom, Theme Color Overlay" => "0",
				"2. Text from left, Zoom, Transparent Overlay" => "1",
				"3. Text from left, Transparent Overlay" => "2",
				"4. Text from bottom, Zoom, Transparent Overlay" => "3",
				"5. Text from bottom, Transparent Overlay" => "4",
				"6. Image and text always visible, button on hover" => "5",
				"7. Image and text always visible, zoom on hover" => "6",
				"8. Image on hover, text always visible" => "7",
				"9. Image and text always visible" => "8",
				"10. Text below image" => "9"
			),
			"std"			=> "0",
		),
		array(
			"type"			=> "dropdown",
			"holder"		=> "div",
			"class" 		=> "hide_in_vc_editor",
			"admin_label" 	=> true,
			"heading"		=> "Grid animation effect 1",
			"description"	=> "",
			"param_name"	=> "filter_effect_1",
			"dependency"	=> array(
				"element"	=> "layout",
				"value"		=> Array("0", "1", "2", "3", "5", "6"),
			),
			"value"			=> array(
				"Fade" => "fade",
				"Scale" => "scale",
				"TranslateX" => "translateX",
				"TranslateY" => "translateY",
				"TranslateZ" => "translateZ",
				"RotateX" => "rotateX",
				"RotateY" => "rotateY",
				"RotateZ" => "rotateZ",
				"Stagger" => "stagger"
			),
			"std"			=> "fade",
			"edit_field_class" => "vc_col-xs-6",
		),
		array(
			"type"			=> "dropdown",
			"holder"		=> "div",
			"class" 		=> "hide_in_vc_editor",
			"admin_label" 	=> true,
			"heading"		=> "Grid animation effect 2",
			"description"	=> "",
			"param_name"	=> "filter_effect_2",
			"dependency"	=> array(
				"element"	=> "layout",
				"value"		=> Array("0", "1", "2", "3", "5", "6"),
			),
			"value"			=> array(
				"Fade" => "fade",
				"Scale" => "scale",
				"TranslateX" => "translateX",
				"TranslateY" => "translateY",
				"TranslateZ" => "translateZ",
				"RotateX" => "rotateX",
				"RotateY" => "rotateY",
				"RotateZ" => "rotateZ",
				"Stagger" => "stagger"
			),
			"std"			=> "scale",
			"edit_field_class" => "vc_col-xs-6",
		),
		// CSS Animations
		vc_map_add_css_animation( true ),
		
   )

  
));