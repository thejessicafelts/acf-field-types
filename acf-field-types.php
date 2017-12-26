<?php

add_action('acf/init', 'add_SAMPLE_field_group');
function add_SAMPLE_field_group() {

  acf_add_local_field_group(
  array(
    'key'                         => '',
    'title'                       => '',
    'fields'                      => array(

  /* ===========================================================================
      Text Field
  =========================================================================== */

      array(
        'key'                     => '',
        'label'                   => '',
        'name'                    => '',
        'type'                    => 'text',
        'instructions'            => '',
        'required'                => 0,
        'conditional_logic'       => 0,
        'wrapper'                 => array(
          'width'                 => '',
          'class'                 => '',
          'id'                    => '',
        ),
        'default_value'           => '',
        'placeholder'             => '',
        'prepend'                 => '',
        'append'                  => '',
        'maxlength'               => '',
        'readonly'                => 0,
        'disabled'                => 0,
      ),

  /* ===========================================================================
      Text Area Field
  =========================================================================== */

      array(
        'key'                     => '',
        'label'                   => '',
        'name'                    => '',
        'type'                    => 'textarea',
        'instructions'            => '',
        'required'                => 0,
        'conditional_logic'       => 0,
        'wrapper'                 => array(
          'width'                 => '',
          'class'                 => '',
          'id'                    => '',
        ),
        'default_value'           => '',
        'placeholder'             => '',
        'maxlength'               => '',
        'rows'                    => '',
        'new_lines'               => 'wpautop', // Also accepts 'br' and ''
        'readonly'                => 0,
        'disabled'                => 0,
      ),

  /* ===========================================================================
      Number Field
  =========================================================================== */

      array(
        'key'                     => '',
        'label'                   => '',
        'name'                    => '',
        'type'                    => 'number',
        'instructions'            => '',
        'required'                => 0,
        'conditional_logic'       => 0,
        'wrapper'                 => array(
          'width'                 => '',
          'class'                 => '',
          'id'                    => '',
        ),
        'default_value'           => '',
        'placeholder'             => '',
        'prepend'                 => '',
        'append'                  => '',
        'min'                     => '',
        'max'                     => '',
        'step'                    => '',
      ),

  /* ===========================================================================
      Range Field
  =========================================================================== */

      array(
        'key'                     => '',
        'label'                   => '',
        'name'                    => '',
        'type'                    => 'range',
        'instructions'            => '',
        'required'                => 0,
        'conditional_logic'       => 0,
        'wrapper'                 => array(
          'width'                 => '',
          'class'                 => '',
          'id'                    => '',
        ),
        'default_value'           => '',
        'min'                     => '',
        'max'                     => '',
        'step'                    => '',
        'prepend'                 => '',
        'append'                  => '',
      ),

  /* ===========================================================================
      Email Field
  =========================================================================== */
      array(
        'key'                     => '',
        'label'                   => '',
        'name'                    => '',
        'type'                    => 'email',
        'instructions'            => '',
        'required'                => 0,
        'conditional_logic'       => 0,
        'wrapper'                 => array(
          'width'                 => '',
          'class'                 => '',
          'id'                    => '',
        ),
        'default_value'           => '',
        'placeholder'             => '',
        'prepend'                 => '',
        'append'                  => '',
      ),

  /* ===========================================================================
      URL Field
  =========================================================================== */

      array(
        'key'                     => '',
        'label'                   => '',
        'name'                    => '',
        'type'                    => 'url',
        'instructions'            => '',
        'required'                => 0,
        'conditional_logic'       => 0,
        'wrapper'                 => array(
          'width'                 => '',
          'class'                 => '',
          'id'                    => '',
        ),
        'default_value'           => '',
        'placeholder'             => '',
      ),

  /* ===========================================================================
      Password Field
  =========================================================================== */

      array(
        'key'                     => '',
        'label'                   => '',
        'name'                    => '',
        'type'                    => 'password',
        'instructions'            => '',
        'required'                => 0,
        'conditional_logic'       => 0,
        'wrapper'                 => array(
          'width'                 => '',
          'class'                 => '',
          'id'                    => '',
        ),
        'default_value'           => '',
        'placeholder'             => '',
        'prepend'                 => '',
        'append'                  => '',
      ),

  /* ===========================================================================
      WYSIWYG Field
  =========================================================================== */

      array(
        'key'                     => '',
        'label'                   => '',
        'name'                    => '',
        'type'                    => 'wysiwyg',
        'instructions'            => '',
        'required'                => 0,
        'conditional_logic'       => 0,
        'wrapper'                 => array(
          'width'                 => '',
          'class'                 => '',
          'id'                    => '',
        ),
        'default_value'           => '',
        'tabs'                    => 'all', // Also accepts 'visual' and 'text'
      ),

  /* ===========================================================================
      OEMBED Field
  =========================================================================== */

      array(
        'key'                     => '',
        'label'                   => '',
        'name'                    => '',
        'type'                    => 'oembed',
        'instructions'            => '',
        'required'                => 0,
        'conditional_logic'       => 0,
        'wrapper'                 => array(
          'width'                 => '',
          'class'                 => '',
          'id'                    => '',
        ),
        'default_value'           => '',
        'width'                   => '',
        'height'                  => '',
      ),

  /* ===========================================================================
      Image Field
  =========================================================================== */

      array(
        'key'                     => '',
        'label'                   => '',
        'name'                    => '',
        'type'                    => 'image',
        'instructions'            => '',
        'required'                => 0,
        'conditional_logic'       => 0,
        'wrapper'                 => array(
          'width'                 => '',
          'class'                 => '',
          'id'                    => '',
        ),
        'default_value'           => '',
        'return_format'           => 'array', // Also accepts 'url' and 'id'
        'preview_size'            => 'thumbnail',
        'library'                 => 'all', // Also Accepts 'uploadedTo'
        'min_width'               => 0,
        'min_height'              => 0,
        'min_size'                => 0, // Minimum Size in MB, Can include units: eg. '256KB'
        'max_width'               => 0,
        'max_height'              => 0,
        'max_size'                => 0, // Maximum Size in MB, Can include units: eg. '256KB'
        'mime_types'              => '', // CSV List of acceptable file types
      ),

  /* ===========================================================================
      File Field
  =========================================================================== */

      array(
        'key'                     => '',
        'label'                   => '',
        'name'                    => '',
        'type'                    => 'file',
        'instructions'            => '',
        'required'                => 0,
        'conditional_logic'       => 0,
        'wrapper'                 => array(
          'width'                 => '',
          'class'                 => '',
          'id'                    => '',
        ),
        'default_value'           => '',
        'return_format'           => 'array', // Also accepts 'url' and 'id'
        'preview_size'            => 'thumbnail',
        'library'                 => 'all', // Also accepts 'uploadedTo'
        'min_size'                => 0, // Minimum Size in MB, Can include units: eg. '256KB'
        'max_size'                => 0, // Maximum Size in MB, Can include units: eg. '256KB'
        'mime_types'              => '', // CSV List of acceptable file types
      ),

  /* ===========================================================================
      Gallery Field
  =========================================================================== */

      array(
        'key'                     => '',
        'label'                   => '',
        'name'                    => '',
        'type'                    => 'gallery',
        'instructions'            => '',
        'required'                => 0,
        'conditional_logic'       => 0,
        'wrapper'                 => array(
          'width'                 => '',
          'class'                 => '',
          'id'                    => '',
        ),
        'default_value'           => '',
        'min'                     => '',
        'max'                     => '',
        'preview_size'            => 'thumbnail',
        'library'                 => 'all', // Also accepts 'uploadedTo',
        'min_width'               => 0,
        'min_height'              => 0,
        'min_size'                => 0, // Minimum Size in MB, Can include units: eg. '256KB'
        'max_width'               => 0,
        'max_height'              => 0,
        'max_size'                => 0, // Maximum Size in MB, Can include units: eg. '256KB'
        'mime_types'              => '', // CSV List of acceptable file types
      ),

  /* ===========================================================================
      Select Field
  =========================================================================== */

      array(
        'key'                     => '',
        'label'                   => '',
        'name'                    => '',
        'type'                    => 'select',
        'instructions'            => '',
        'required'                => 0,
        'conditional_logic'       => 0,
        'wrapper'                 => array(
          'width'                 => '',
          'class'                 => '',
          'id'                    => '',
        ),
        'default_value'           => '',
        'choices'                 => array(
          'key'                   => 'value',
        ),
        'allow_null'              => 0,
        'multiple'                => 0,
        'ui'                      => 0,
        'ajax'                    => 0,
        'placeholder'             => '',
      ),

  /* ===========================================================================
      Checkbox Field
  =========================================================================== */

      array(
        'key'                     => '',
        'label'                   => '',
        'name'                    => '',
        'type'                    => 'checkbox',
        'instructions'            => '',
        'required'                => 0,
        'conditional_logic'       => 0,
        'wrapper'                 => array(
          'width'                 => '',
          'class'                 => '',
          'id'                    => '',
        ),
        'default_value'           => '',
        'choices'                 => array(
          'key'                   => 'value',
        ),
        'layout'                  => 'vertical', // Also accepts 'horizontal'
      ),

  /* ===========================================================================
      Radio Field
  =========================================================================== */

      array(
        'key'                     => '',
        'label'                   => '',
        'name'                    => '',
        'type'                    => 'radio',
        'instructions'            => '',
        'required'                => 0,
        'conditional_logic'       => 0,
        'wrapper'                 => array(
          'width'                 => '',
          'class'                 => '',
          'id'                    => '',
        ),
        'default_value'           => '',
        'choices'                 => array(
          'key'                   => 'value',
        ),
        'other_choice'            => 0, // Custom choice
        'save_other_choice'       => 0, // Save custom choice values
        'layout'                  => 'vertical', // Also accepts 'horizontal'
      ),

  /* ===========================================================================
      Button Group Field
  =========================================================================== */

      array(
        'key'                     => '',
        'label'                   => '',
        'name'                    => '',
        'type'                    => 'button_group',
        'instructions'            => '',
        'required'                => 0,
        'conditional_logic'       => 0,
        'wrapper'                 => array(
          'width'                 => '',
          'class'                 => '',
          'id'                    => '',
        ),
        'default_value'           => '',
        'choices'                 => array(
          'key'                   => 'value',
        ),
        'allow_null'              => 0,
        'layout'                  => 'horizontal', // Also accepts 'vertical'
        'return_format'           => 'value',
      ),

  /* ===========================================================================
      True/False Field
  =========================================================================== */

      array(
        'key'                     => '',
        'label'                   => '',
        'name'                    => '',
        'type'                    => 'true_false',
        'instructions'            => '',
        'required'                => 0,
        'conditional_logic'       => 0,
        'wrapper'                 => array(
          'width'                 => '',
          'class'                 => '',
          'id'                    => '',
        ),
        'default_value'           => '',
        'message'                 => 0,
      ),

  /* ===========================================================================
      Link Field
  =========================================================================== */

      array(
        'key'                     => '',
        'label'                   => '',
        'name'                    => '',
        'type'                    => 'link',
        'instructions'            => '',
        'required'                => 0,
        'conditional_logic'       => 0,
        'wrapper'                 => array(
          'width'                 => '',
          'class'                 => '',
          'id'                    => '',
        ),
        'return_format'           => 'array', // Also accepts 'url'
      ),

  /* ===========================================================================
      Post Object Field
  =========================================================================== */

      array(
        'key'                     => '',
        'label'                   => '',
        'name'                    => '',
        'type'                    => 'post_object',
        'instructions'            => '',
        'required'                => 0,
        'conditional_logic'       => 0,
        'wrapper'                 => array(
          'width'                 => '',
          'class'                 => '',
          'id'                    => '',
        ),
        'default_value'           => '',
        'post_type'               => '',
        'taxonomy'                => '',
        'allow_null'              => 0,
        'multiple'                => 0,
        'return_format'           => 'object', // Also accepts 'id'
      ),

  /* ===========================================================================
      Page Link Field
  =========================================================================== */

      array(
        'key'                     => '',
        'label'                   => '',
        'name'                    => '',
        'type'                    => 'page_link',
        'instructions'            => '',
        'required'                => 0,
        'conditional_logic'       => 0,
        'wrapper'                 => array(
          'width'                 => '',
          'class'                 => '',
          'id'                    => '',
        ),
        'default_value'           => '',
        'post_type'               => '',
        'taxonomy'                => '',
        'allow_null'              => 0,
        'multiple'                => 0,
      ),

  /* ===========================================================================
      Relationship Field
  =========================================================================== */

      array(
        'key'                     => '',
        'label'                   => '',
        'name'                    => '',
        'type'                    => 'relationship',
        'instructions'            => '',
        'required'                => 0,
        'conditional_logic'       => 0,
        'wrapper'                 => array(
          'width'                 => '',
          'class'                 => '',
          'id'                    => '',
        ),
        'default_value'           => '',
        'post_type'               => '',
        'taxonomy'                => '',
        'filters'                 => array( // Specify available filters to search for posts
          'search',
          'post_type',
          'taxonomy'
        ),
        'elements'                => array(), // Specify visual elements for each post
        'min'                     => 0,
        'max'                     => 0,
        'return_format'           => 'object', // Also accepts 'id'
      ),

  /* ===========================================================================
      Taxonomy Field
  =========================================================================== */

      array(
        'key'                     => '',
        'label'                   => '',
        'name'                    => '',
        'type'                    => 'taxonomy',
        'instructions'            => '',
        'required'                => 0,
        'conditional_logic'       => 0,
        'wrapper'                 => array(
          'width'                 => '',
          'class'                 => '',
          'id'                    => '',
        ),
        'default_value'           => '',
        'taxonomy'                => '',
        'field_type'              => 'checkbox', // Also accepts 'multi-select', 'radio', and 'select'
        'allow_null'              => 0,
        'load_save_terms'         => 0,
        'return_format'           => 'id', // Also accepts 'object'
        'add_term'                => 1,
      ),

  /* ===========================================================================
      User Field
  =========================================================================== */

      array(
        'key'                     => '',
        'label'                   => '',
        'name'                    => '',
        'type'                    => 'user',
        'instructions'            => '',
        'required'                => 0,
        'conditional_logic'       => 0,
        'wrapper'                 => array(
          'width'                 => '',
          'class'                 => '',
          'id'                    => '',
        ),
        'default_value'           => '',
        'role'                    => array(), // Array of roles to limit the users available for selection
        'allow_null'              => 0,
        'multiple'                => 0,
      ),

  /* ===========================================================================
      Google Maps Field
  =========================================================================== */

      array(
        'key'                     => '',
        'label'                   => '',
        'name'                    => '',
        'type'                    => 'google_map',
        'instructions'            => '',
        'required'                => 0,
        'conditional_logic'       => 0,
        'wrapper'                 => array(
          'width'                 => '',
          'class'                 => '',
          'id'                    => '',
        ),
        'default_value'           => '',
        'center_lat'              => '',
        'center_lng'              => '',
        'zoom'                    => '',
        'height'                  => '',
      ),

  /* ===========================================================================
      Date Picker Field
  =========================================================================== */

      array(
        'key'                     => '',
        'label'                   => '',
        'name'                    => '',
        'type'                    => 'date_picker',
        'instructions'            => '',
        'required'                => 0,
        'conditional_logic'       => 0,
        'wrapper'                 => array(
          'width'                 => '',
          'class'                 => '',
          'id'                    => '',
        ),
        'display_format'          => 'm/d/Y',
        'return_format'           => 'm/d/Y',
        'first_day'               => 0, // 0 = Sunday
      ),

  /* ===========================================================================
      Date Time Picker Field
  =========================================================================== */

      array(
        'key'                     => '',
        'label'                   => '',
        'name'                    => '',
        'type'                    => 'date_time_picker',
        'instructions'            => '',
        'required'                => 0,
        'conditional_logic'       => 0,
        'wrapper'                 => array(
          'width'                 => '',
          'class'                 => '',
          'id'                    => '',
        ),
        'display_format'          => 'm/d/Y g:i a',
        'return_format'           => 'm/d/Y g:i a',
        'first_day'               => 0, // 0 = Sunday
      ),

  /* ===========================================================================
      Time Picker Field
  =========================================================================== */

      array(
        'key'                     => '',
        'label'                   => '',
        'name'                    => '',
        'type'                    => 'time_picker',
        'instructions'            => '',
        'required'                => 0,
        'conditional_logic'       => 0,
        'wrapper'                 => array(
          'width'                 => '',
          'class'                 => '',
          'id'                    => '',
        ),
        'display_format'          => 'g:i a',
        'return_format'           => 'g:i a',
      ),

  /* ===========================================================================
      Color Field
  =========================================================================== */

      array(
        'key'                     => '',
        'label'                   => '',
        'name'                    => '',
        'type'                    => 'color_picker',
        'instructions'            => '',
        'required'                => 0,
        'conditional_logic'       => 0,
        'wrapper'                 => array(
          'width'                 => '',
          'class'                 => '',
          'id'                    => '',
        ),
        'default_value'           => '',
      ),

  /* ===========================================================================
  =========================================================================== */

    ),
    'location'                    => array(
      array(
        array(
          'param'                 => 'options_page',
          'operator'              => '==',
          'value'                 => 'PAGE_NAME'
        ),
      ),
    ),
    'menu_order'                  => 0,
    'position'                    => 'normal',
  	'style'                       => 'default',
  	'label_placement'             => 'top',
  	'instruction_placement'       => 'label',
  	'hide_on_screen'              => '',
  ));
}










?>
