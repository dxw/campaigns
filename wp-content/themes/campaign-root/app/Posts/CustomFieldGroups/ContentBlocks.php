<?php

namespace Dxw\GdsCampaignRoot\Posts\CustomFieldGroups;

class ContentBlocks implements \Dxw\Iguana\Registerable
{
    public function register()
    {
        register_field_group(array(
            'key' => 'group_56e9937e4dc99',
            'title' => 'Content',
            'fields' => array(
                array(
                    'key' => 'field_572b3982eabf4',
                    'label' => 'Content Blocks',
                    'name' => 'content_blocks',
                    'type' => 'flexible_content',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => ''
                    ),
                    'button_label' => 'Add Content Block',
                    'min' => '',
                    'max' => '',
                    'layouts' => array(
                        // Hero
                        array(
                            'key' => '572b45ec7bc15',
                            'name' => 'hero',
                            'label' => 'Hero',
                            'display' => 'row',
                            'sub_fields' => array(
                                array(
                                    'key' => 'field_572c45dc7bc13',
                                    'label' => 'Title',
                                    'name' => 'title',
                                    'type' => 'text',
                                    'instructions' => '',
                                    'required' => 0,
                                    'conditional_logic' => 0,
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => ''
                                    ),
                                    'default_value' => '',
                                    'placeholder' => '',
                                    'prepend' => '',
                                    'append' => '',
                                    'maxlength' => '',
                                    'readonly' => 0,
                                    'disabled' => 0
                                ),
                                array(
                                    'key' => 'field_577a5dcc447fa',
                                    'label' => 'Caption',
                                    'name' => 'caption',
                                    'type' => 'markdown',
                                    'instructions' => '',
                                    'required' => 0,
                                    'conditional_logic' => 0,
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => '',
                                    ),
                                    'autogrow' => 1,
                                    'editor-theme' => 'light',
                                    'preview-theme' => 'github',
                                    'syntax-highlight' => 0,
                                    'syntax-theme' => 'sunburst',
                                    'media-upload' => 0,
                                    'tab-function' => 0,
                                ),
                                array(
                                    'key' => 'field_57724adb499233',
                                    'label' => 'Button Text',
                                    'name' => 'button_text',
                                    'type' => 'text',
                                    'instructions' => '',
                                    'required' => '',
                                    'conditional_logic' => '',
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => '',
                                    ),
                                    'default_value' => '',
                                    'placeholder' => '',
                                    'prepend' => '',
                                    'append' => '',
                                    'maxlength' => '',
                                    'readonly' => 0,
                                    'disabled' => 0,
                                ),
                                array(
                                    'key' => 'field_57724a9ffb445',
                                    'label' => 'Button URL',
                                    'name' => 'button_url',
                                    'type' => 'url',
                                    'instructions' => '',
                                    'required' => '',
                                    'conditional_logic' => 0,
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => '',
                                    ),
                                    'default_value' => '',
                                    'placeholder' => '',
                                ),
                                array(
                                    'key' => 'field_577503ccb2790',
                                    'label' => 'GA Event tracking',
                                    'name' => 'ga_event_tracking',
                                    'type' => 'checkbox',
                                    'instructions' => '',
                                    'required' => 0,
                                    'conditional_logic' => 0,
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => '',
                                    ),
                                    'choices' => array(
                                        'event_tracking' => 'Add Event Tracking',
                                    ),
                                    'default_value' => array(
                                    ),
                                    'layout' => 'vertical',
                                    'toggle' => 0,
                                ),
                                array(
                                    'key' => 'field_578504d141a44',
                                    'label' => 'Event Category',
                                    'name' => 'event_category',
                                    'type' => 'text',
                                    'instructions' => '',
                                    'required' => 1,
                                    'conditional_logic' => array(
                                        array(
                                            array(
                                                'field' => 'field_577503ccb2790',
                                                'operator' => '==',
                                                'value' => 'event_tracking',
                                            ),
                                        ),
                                    ),
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => '',
                                    ),
                                    'default_value' => '',
                                    'placeholder' => '',
                                    'prepend' => '',
                                    'append' => '',
                                    'maxlength' => '',
                                    'readonly' => 0,
                                    'disabled' => 0,
                                ),
                                array(
                                    'key' => 'field_5775055c77eb5',
                                    'label' => 'Event Action',
                                    'name' => 'event_action',
                                    'type' => 'text',
                                    'instructions' => '',
                                    'required' => 1,
                                    'conditional_logic' => array(
                                        array(
                                            array(
                                                'field' => 'field_577503ccb2790',
                                                'operator' => '==',
                                                'value' => 'event_tracking',
                                            ),
                                        ),
                                    ),
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => '',
                                    ),
                                    'default_value' => '',
                                    'placeholder' => '',
                                    'prepend' => '',
                                    'append' => '',
                                    'maxlength' => '',
                                    'readonly' => 0,
                                    'disabled' => 0,
                                ),
                                array(
                                    'key' => 'field_5775057265fb6',
                                    'label' => 'Event Label',
                                    'name' => 'event_label',
                                    'type' => 'text',
                                    'instructions' => '',
                                    'required' => '',
                                    'conditional_logic' => array(
                                        array(
                                            array(
                                                'field' => 'field_577503ccb2790',
                                                'operator' => '==',
                                                'value' => 'event_tracking',
                                            ),
                                        ),
                                    ),
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => '',
                                    ),
                                    'default_value' => '',
                                    'placeholder' => '',
                                    'prepend' => '',
                                    'append' => '',
                                    'maxlength' => '',
                                    'readonly' => 0,
                                    'disabled' => 0,
                                ),
                                array(
                                    'key' => 'field_5741697a2fcb4',
                                    'label' => 'Text Colour',
                                    'name' => 'text_colour',
                                    'type' => 'select',
                                    'instructions' => '',
                                    'required' => 0,
                                    'conditional_logic' => 0,
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => ''
                                    ),
                                    'choices' => array(
                                        'dark' => 'Dark',
                                        'light' => 'Light',
                                    ),
                                    'default_value' => array(
                                        0 => 'dark'
                                    ),
                                    'allow_null' => 0,
                                    'multiple' => 0,
                                    'ui' => 0,
                                    'ajax' => 0,
                                    'placeholder' => '',
                                    'disabled' => 0,
                                    'readonly' => 0
                                ),
                                array(
                                    'key' => 'field_571464645edf3',
                                    'label' => 'Background Image',
                                    'name' => 'background_image',
                                    'type' => 'file',
                                    'instructions' => 'Adds a full width hero image, falls back to a solid background colour if no image is selected',
                                    'required' => 0,
                                    'conditional_logic' => 0,
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => ''
                                    ),
                                    'return_format' => 'array',
                                    'library' => 'all',
                                    'min_size' => '',
                                    'max_size' => '',
                                    'mime_types' => ''
                                ),
                                array(
                                    'key' => 'field_5744637a2fdf4',
                                    'label' => 'Background Colour',
                                    'name' => 'background_colour',
                                    'type' => 'select',
                                    'instructions' => '',
                                    'required' => 0,
                                    'conditional_logic' => 0,
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => ''
                                    ),
                                    'choices' => array(
                                        'brand-primary' => 'Brand Primary',
                                        'brand-secondary' => 'Brand Secondary',
                                        'brand-tertiary' => 'Brand Tertiary'
                                    ),
                                    'default_value' => array(
                                        0 => 'brand-primary'
                                    ),
                                    'allow_null' => 0,
                                    'multiple' => 0,
                                    'ui' => 0,
                                    'ajax' => 0,
                                    'placeholder' => '',
                                    'disabled' => 0,
                                    'readonly' => 0
                                )
                            ),
                            'min' => '',
                            'max' => ''
                        ),
                        // Title
                        array(
                            'key' => '572b45dc7bc15',
                            'name' => 'title',
                            'label' => 'Title',
                            'display' => 'row',
                            'sub_fields' => array(
                                array(
                                    'key' => 'field_572b45dc7bc16',
                                    'label' => 'Title',
                                    'name' => 'title',
                                    'type' => 'text',
                                    'instructions' => '',
                                    'required' => 0,
                                    'conditional_logic' => 0,
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => ''
                                    ),
                                    'default_value' => '',
                                    'placeholder' => '',
                                    'prepend' => '',
                                    'append' => '',
                                    'maxlength' => '',
                                    'readonly' => 0,
                                    'disabled' => 0
                                ),
                                array(
                                    'key' => 'field_577a39f69d299',
                                    'label' => 'Customise Background',
                                    'name' => 'customise_background',
                                    'type' => 'checkbox',
                                    'instructions' => '',
                                    'required' => '',
                                    'conditional_logic' => '',
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => '',
                                    ),
                                    'choices' => array(
                                        'yes' => 'Yes',
                                    ),
                                    'default_value' => array(
                                    ),
                                    'layout' => 'vertical',
                                    'toggle' => 0,
                                ),
                                array(
                                    'key' => 'field_577a3a379d298',
                                    'label' => 'Background Colour',
                                    'name' => 'background_colour',
                                    'type' => 'color_picker',
                                    'instructions' => '',
                                    'required' => '',
                                    'conditional_logic' => array(
                                        array(
                                            array(
                                                'field' => 'field_577a39f69d299',
                                                'operator' => '==',
                                                'value' => 'yes',
                                            ),
                                        ),
                                    ),
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => '',
                                    ),
                                    'default_value' => '',
                                ),
                            ),
                            'min' => '',
                            'max' => ''
                        ),
                        // Subtitle
                        array(
                            'key' => '572c61a9a937c',
                            'name' => 'subtitle',
                            'label' => 'Subtitle',
                            'display' => 'row',
                            'sub_fields' => array(
                                array(
                                    'key' => 'field_572c61a9a937d',
                                    'label' => 'Subtitle',
                                    'name' => 'subtitle',
                                    'type' => 'text',
                                    'instructions' => '',
                                    'required' => 0,
                                    'conditional_logic' => 0,
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => ''
                                    ),
                                    'default_value' => '',
                                    'placeholder' => '',
                                    'prepend' => '',
                                    'append' => '',
                                    'maxlength' => '',
                                    'readonly' => 0,
                                    'disabled' => 0
                                ),
                                array(
                                    'key' => 'field_577a39f69d400',
                                    'label' => 'Customise Background',
                                    'name' => 'customise_background',
                                    'type' => 'checkbox',
                                    'instructions' => '',
                                    'required' => '',
                                    'conditional_logic' => '',
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => '',
                                    ),
                                    'choices' => array(
                                        'yes' => 'Yes',
                                    ),
                                    'default_value' => array(
                                    ),
                                    'layout' => 'vertical',
                                    'toggle' => 0,
                                ),
                                array(
                                    'key' => 'field_577a3a379d29a',
                                    'label' => 'Background Colour',
                                    'name' => 'background_colour',
                                    'type' => 'color_picker',
                                    'instructions' => '',
                                    'required' => '',
                                    'conditional_logic' => array(
                                        array(
                                            array(
                                                'field' => 'field_577a39f69d400',
                                                'operator' => '==',
                                                'value' => 'yes',
                                            ),
                                        ),
                                    ),
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => '',
                                    ),
                                    'default_value' => '',
                                ),
                            ),
                            'min' => '',
                            'max' => ''
                        ),
                        // Content
                        array(
                            'key' => '572c6183a937a',
                            'name' => 'content',
                            'label' => 'Content',
                            'display' => 'row',
                            'sub_fields' => array(
                                array(
                                    'key' => 'field_577a5dcc447fb',
                                    'label' => 'Content',
                                    'name' => 'content',
                                    'type' => 'markdown',
                                    'instructions' => '',
                                    'required' => 0,
                                    'conditional_logic' => 0,
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => '',
                                    ),
                                    'autogrow' => 1,
                                    'editor-theme' => 'light',
                                    'preview-theme' => 'github',
                                    'syntax-highlight' => 0,
                                    'syntax-theme' => 'sunburst',
                                    'media-upload' => 0,
                                    'tab-function' => 0,
                                ),
                                array(
                                    'key' => 'field_5741697a2fab4',
                                    'label' => 'Text Colour',
                                    'name' => 'text_colour',
                                    'type' => 'select',
                                    'instructions' => '',
                                    'required' => 0,
                                    'conditional_logic' => 0,
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => ''
                                    ),
                                    'choices' => array(
                                        'dark' => 'Dark',
                                        'light' => 'Light',
                                    ),
                                    'default_value' => array(
                                        0 => 'dark'
                                    ),
                                    'allow_null' => 0,
                                    'multiple' => 0,
                                    'ui' => 0,
                                    'ajax' => 0,
                                    'placeholder' => '',
                                    'disabled' => 0,
                                    'readonly' => 0
                                ),
                                array(
                                    'key' => 'field_577a39f69d410',
                                    'label' => 'Customise Background',
                                    'name' => 'customise_background',
                                    'type' => 'checkbox',
                                    'instructions' => '',
                                    'required' => '',
                                    'conditional_logic' => '',
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => '',
                                    ),
                                    'choices' => array(
                                        'yes' => 'Yes',
                                    ),
                                    'default_value' => array(
                                    ),
                                    'layout' => 'vertical',
                                    'toggle' => 0,
                                ),
                                array(
                                    'key' => 'field_577a3a379d31a',
                                    'label' => 'Background Colour',
                                    'name' => 'background_colour',
                                    'type' => 'color_picker',
                                    'instructions' => '',
                                    'required' => '',
                                    'conditional_logic' => array(
                                        array(
                                            array(
                                                'field' => 'field_577a39f69d410',
                                                'operator' => '==',
                                                'value' => 'yes',
                                            ),
                                        ),
                                    ),
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => '',
                                    ),
                                    'default_value' => '',
                                ),
                            ),
                            'min' => '',
                            'max' => ''
                        ),
                        // Left Align Image and Caption
                        array(
                            'key' => '572b4473b1181',
                            'name' => 'left_aligned_image',
                            'label' => 'Left-Aligned Image with Caption',
                            'display' => 'row',
                            'sub_fields' => array(
                                array(
                                    'key' => 'field_572b448cb1183',
                                    'label' => 'Image',
                                    'name' => 'image',
                                    'type' => 'image',
                                    'instructions' => 'The image title and caption is pulled automatically. Click the pencil icon on the image to edit.',
                                    'required' => 0,
                                    'conditional_logic' => 0,
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => ''
                                    ),
                                    'return_format' => 'array',
                                    'preview_size' => 'large',
                                    'library' => 'all',
                                    'min_width' => '',
                                    'min_height' => '',
                                    'min_size' => '',
                                    'max_width' => '',
                                    'max_height' => '',
                                    'max_size' => '',
                                    'mime_types' => ''
                                )
                            ),
                            'min' => '',
                            'max' => ''
                        ),
                        // Right Align Image and Caption
                        array(
                            'key' => '572b44d4b1185',
                            'name' => 'right_aligned_image',
                            'label' => 'Right-Aligned Image with Caption',
                            'display' => 'row',
                            'sub_fields' => array(
                                array(
                                    'key' => 'field_572b44d4b1187',
                                    'label' => 'Image',
                                    'name' => 'image',
                                    'type' => 'image',
                                    'instructions' => 'The image title and caption is pulled automatically. Click the pencil icon on the image to edit.',
                                    'required' => 0,
                                    'conditional_logic' => 0,
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => ''
                                    ),
                                    'preview_size' => 'large',
                                    'min_width' => '',
                                    'min_height' => '',
                                    'min_size' => '',
                                    'max_width' => '',
                                    'max_height' => '',
                                    'max_size' => '',
                                    'mime_types' => '',
                                    'return_format' => 'array',
                                    'library' => 'all'
                                )
                            ),
                            'min' => '',
                            'max' => ''
                        ),
                        // Full Width Image
                        array(
                            'key' => '572b456ab118e',
                            'name' => 'full_width_image',
                            'label' => 'Full-width image',
                            'display' => 'row',
                            'sub_fields' => array(
                                array(
                                    'key' => 'field_572b456fb118f',
                                    'label' => 'Image',
                                    'name' => 'image',
                                    'type' => 'image',
                                    'instructions' => 'The image title and caption is pulled automatically. Click the pencil icon on the image to edit.',
                                    'required' => 0,
                                    'conditional_logic' => 0,
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => ''
                                    ),
                                    'return_format' => 'array',
                                    'preview_size' => 'large',
                                    'library' => 'all',
                                    'min_width' => '',
                                    'min_height' => '',
                                    'min_size' => '',
                                    'max_width' => '',
                                    'max_height' => '',
                                    'max_size' => '',
                                    'mime_types' => ''
                                )
                            ),
                            'min' => '',
                            'max' => ''
                        ),
                        // Info Graphic
                        array(
                            'key' => '5772492fcf6e3',
                            'name' => 'info_graphic',
                            'label' => 'Info Graphic',
                            'display' => 'row',
                            'sub_fields' => array(
                                array(
                                    'key' => 'field_5772494f9de0d',
                                    'label' => 'Image',
                                    'name' => 'image',
                                    'type' => 'image',
                                    'instructions' => '',
                                    'required' => 0,
                                    'conditional_logic' => 0,
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => ''
                                    ),
                                    'return_format' => 'array',
                                    'preview_size' => 'full',
                                    'library' => 'all',
                                    'min_width' => '',
                                    'min_height' => '',
                                    'min_size' => '',
                                    'max_width' => '',
                                    'max_height' => '',
                                    'max_size' => '',
                                    'mime_types' => ''
                                ),
                                array(
                                    'key' => 'field_577a5dcc447fc',
                                    'label' => 'Caption',
                                    'name' => 'caption',
                                    'type' => 'markdown',
                                    'instructions' => '',
                                    'required' => 0,
                                    'conditional_logic' => 0,
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => '',
                                    ),
                                    'autogrow' => 1,
                                    'editor-theme' => 'light',
                                    'preview-theme' => 'github',
                                    'syntax-highlight' => 0,
                                    'syntax-theme' => 'sunburst',
                                    'media-upload' => 0,
                                    'tab-function' => 0,
                                ),
                            ),
                            'min' => '',
                            'max' => ''
                        ),
                        // Call to Action
                        array(
                            'key' => '57724a89fb427',
                            'name' => 'call_to_action',
                            'label' => 'Call to Action',
                            'display' => 'row',
                            'sub_fields' => array(
                                array(
                                    'key' => 'field_57724a97fb428',
                                    'label' => 'Title',
                                    'name' => 'title',
                                    'type' => 'text',
                                    'instructions' => '',
                                    'required' => '1',
                                    'conditional_logic' => '',
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => '',
                                    ),
                                    'default_value' => '',
                                    'placeholder' => '',
                                    'prepend' => '',
                                    'append' => '',
                                    'maxlength' => '',
                                    'readonly' => 0,
                                    'disabled' => 0,
                                ),
                                array(
                                    'key' => 'field_57724adb49901',
                                    'label' => 'Button Text',
                                    'name' => 'button_text',
                                    'type' => 'text',
                                    'instructions' => '',
                                    'required' => '1',
                                    'conditional_logic' => '',
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => '',
                                    ),
                                    'default_value' => '',
                                    'placeholder' => '',
                                    'prepend' => '',
                                    'append' => '',
                                    'maxlength' => '',
                                    'readonly' => 0,
                                    'disabled' => 0,
                                ),
                                array(
                                    'key' => 'field_57724a9ffb429',
                                    'label' => 'Button URL',
                                    'name' => 'button_url',
                                    'type' => 'url',
                                    'instructions' => '',
                                    'required' => 1,
                                    'conditional_logic' => 0,
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => '',
                                    ),
                                    'default_value' => '',
                                    'placeholder' => '',
                                ),
                                array(
                                    'key' => 'field_577a39f69a296',
                                    'label' => 'Customise Background',
                                    'name' => 'customise_background',
                                    'type' => 'checkbox',
                                    'instructions' => '',
                                    'required' => '',
                                    'conditional_logic' => '',
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => '',
                                    ),
                                    'choices' => array(
                                        'yes' => 'Yes',
                                    ),
                                    'default_value' => array(
                                    ),
                                    'layout' => 'vertical',
                                    'toggle' => 0,
                                ),
                                array(
                                    'key' => 'field_577a3a379c298',
                                    'label' => 'Background Colour',
                                    'name' => 'background_colour',
                                    'type' => 'color_picker',
                                    'instructions' => '',
                                    'required' => '',
                                    'conditional_logic' => array(
                                        array(
                                            array(
                                                'field' => 'field_577a39f69a296',
                                                'operator' => '==',
                                                'value' => 'yes',
                                            ),
                                        ),
                                    ),
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => '',
                                    ),
                                    'default_value' => '',
                                ),
                                array(
                                    'key' => 'field_577503aab2790',
                                    'label' => 'GA Event tracking',
                                    'name' => 'ga_event_tracking',
                                    'type' => 'checkbox',
                                    'instructions' => '',
                                    'required' => 0,
                                    'conditional_logic' => 0,
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => '',
                                    ),
                                    'choices' => array(
                                        'event_tracking' => 'Add Event Tracking',
                                    ),
                                    'default_value' => array(
                                    ),
                                    'layout' => 'vertical',
                                    'toggle' => 0,
                                ),
                                array(
                                    'key' => 'field_577504d141a44',
                                    'label' => 'Event Category',
                                    'name' => 'event_category',
                                    'type' => 'text',
                                    'instructions' => '',
                                    'required' => 1,
                                    'conditional_logic' => array(
                                        array(
                                            array(
                                                'field' => 'field_577503aab2790',
                                                'operator' => '==',
                                                'value' => 'event_tracking',
                                            ),
                                        ),
                                    ),
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => '',
                                    ),
                                    'default_value' => '',
                                    'placeholder' => '',
                                    'prepend' => '',
                                    'append' => '',
                                    'maxlength' => '',
                                    'readonly' => 0,
                                    'disabled' => 0,
                                ),
                                array(
                                    'key' => 'field_5775055c65eb5',
                                    'label' => 'Event Action',
                                    'name' => 'event_action',
                                    'type' => 'text',
                                    'instructions' => '',
                                    'required' => 1,
                                    'conditional_logic' => array(
                                        array(
                                            array(
                                                'field' => 'field_577503aab2790',
                                                'operator' => '==',
                                                'value' => 'event_tracking',
                                            ),
                                        ),
                                    ),
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => '',
                                    ),
                                    'default_value' => '',
                                    'placeholder' => '',
                                    'prepend' => '',
                                    'append' => '',
                                    'maxlength' => '',
                                    'readonly' => 0,
                                    'disabled' => 0,
                                ),
                                array(
                                    'key' => 'field_5775057265eb6',
                                    'label' => 'Event Label',
                                    'name' => 'event_label',
                                    'type' => 'text',
                                    'instructions' => '',
                                    'required' => '',
                                    'conditional_logic' => array(
                                        array(
                                            array(
                                                'field' => 'field_577503aab2790',
                                                'operator' => '==',
                                                'value' => 'event_tracking',
                                            ),
                                        ),
                                    ),
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => '',
                                    ),
                                    'default_value' => '',
                                    'placeholder' => '',
                                    'prepend' => '',
                                    'append' => '',
                                    'maxlength' => '',
                                    'readonly' => 0,
                                    'disabled' => 0,
                                ),
                            ),
                            'min' => '',
                            'max' => '',
                        ),
                        // Promo repeater
                        array(
                            'key' => 'field_5773c0d2bbc3c',
                            'label' => 'Promo Boxes',
                            'name' => 'promo_boxes',
                            'type' => 'repeater',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'collapsed' => '',
                            'min' => '',
                            'max' => '',
                            'layout' => 'row',
                            'button_label' => 'Add Row',
                            'sub_fields' => array(
                                array(
                                    'key' => 'field_5773c0ecbbc3d',
                                    'label' => 'Promo Block',
                                    'name' => 'promo_block',
                                    'type' => 'flexible_content',
                                    'instructions' => '',
                                    'required' => 0,
                                    'conditional_logic' => 0,
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => '',
                                    ),
                                    'button_label' => 'Add Promo',
                                    'min' => 3,
                                    'max' => '',
                                    'layouts' => array(
                                        array(
                                            'key' => '5773c0f362bdc',
                                            'name' => 'promo',
                                            'label' => 'Promo',
                                            'display' => 'table',
                                            'sub_fields' => array(
                                                array(
                                                    'key' => 'field_5773c108bbc3e',
                                                    'label' => 'Title',
                                                    'name' => 'promo_title',
                                                    'type' => 'text',
                                                    'instructions' => '',
                                                    'required' => 0,
                                                    'conditional_logic' => 0,
                                                    'wrapper' => array(
                                                        'width' => '',
                                                        'class' => '',
                                                        'id' => '',
                                                    ),
                                                    'default_value' => '',
                                                    'placeholder' => '',
                                                    'prepend' => '',
                                                    'append' => '',
                                                    'maxlength' => '',
                                                    'readonly' => 0,
                                                    'disabled' => 0,
                                                ),
                                                array(
                                                    'key' => 'field_577a5dcc447fd',
                                                    'label' => 'Caption',
                                                    'name' => 'promo_caption',
                                                    'type' => 'textarea',
                                                    'instructions' => '',
                                                    'required' => 0,
                                                    'conditional_logic' => 0,
                                                    'wrapper' => array(
                                                        'width' => '',
                                                        'class' => '',
                                                        'id' => '',
                                                    ),
                                                    'default_value' => '',
                                                    'placeholder' => '',
                                                    'maxlength' => '',
                                                    'rows' => '',
                                                    'new_lines' => 'br',
                                                    'readonly' => 0,
                                                    'disabled' => 0,
                                                ),
                                                array(
                                                    'key' => 'field_5773c116bbc40',
                                                    'label' => 'Image',
                                                    'name' => 'promo_image',
                                                    'type' => 'image',
                                                    'instructions' => '',
                                                    'required' => 0,
                                                    'conditional_logic' => 0,
                                                    'wrapper' => array(
                                                        'width' => '',
                                                        'class' => '',
                                                        'id' => '',
                                                    ),
                                                    'return_format' => 'array',
                                                    'preview_size' => 'full',
                                                    'library' => 'all',
                                                    'min_width' => '',
                                                    'min_height' => '',
                                                    'min_size' => '',
                                                    'max_width' => '',
                                                    'max_height' => '',
                                                    'max_size' => '',
                                                    'mime_types' => '',
                                                ),
                                                array(
                                                    'key' => 'field_5773c12abbc41',
                                                    'label' => 'Button URL',
                                                    'name' => 'promo_button_url',
                                                    'type' => 'url',
                                                    'instructions' => '',
                                                    'required' => 0,
                                                    'conditional_logic' => 0,
                                                    'wrapper' => array(
                                                        'width' => '',
                                                        'class' => '',
                                                        'id' => '',
                                                    ),
                                                    'default_value' => '',
                                                    'placeholder' => '',
                                                ),
                                                array(
                                                    'key' => 'field_5773c148bbc42',
                                                    'label' => 'Button Text',
                                                    'name' => 'promo_button_text',
                                                    'type' => 'text',
                                                    'instructions' => '',
                                                    'required' => 0,
                                                    'conditional_logic' => 0,
                                                    'wrapper' => array(
                                                        'width' => '',
                                                        'class' => '',
                                                        'id' => '',
                                                    ),
                                                    'default_value' => '',
                                                    'placeholder' => '',
                                                    'prepend' => '',
                                                    'append' => '',
                                                    'maxlength' => '',
                                                    'readonly' => 0,
                                                    'disabled' => 0,
                                                ),
                                            ),
                                            'min' => '',
                                            'max' => '',
                                        ),
                                    ),
                                ),
                            ),
                        ),
                    )
                )
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'page_template',
                        'operator' => '==',
                        'value' => 'default'
                    )
                )
            ),
            'menu_order' => 0,
            'position' => 'normal',
            'style' => 'default',
            'label_placement' => 'top',
            'instruction_placement' => 'label',
            'hide_on_screen' => array(
                0 => 'custom_fields',
                1 => 'discussion',
                2 => 'comments',
                3 => 'send-trackbacks',
                4 => 'the_content'
            ),
            'active' => 1,
            'description' => ''
        ));
    }
}