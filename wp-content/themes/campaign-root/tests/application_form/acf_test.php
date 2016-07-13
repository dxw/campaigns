<?php

class ApplicationForm_Acf_Test extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        \WP_Mock::setUp();
    }

    public function tearDown()
    {
        \WP_Mock::tearDown();
    }

    public function testRegister()
    {
        $acf = new \Dxw\GdsCampaignRoot\ApplicationForm\Acf();

        $this->assertInstanceOf(\Dxw\Iguana\Registerable::class, $acf);

        \WP_Mock::wpFunction('acf_add_local_field_group', [
            'args' => [
                array(
                    'key' => 'group_576c321629352',
                    'title' => 'Application form',
                    'fields' => array(
                        array(
                            'key' => 'field_576c3271e4513',
                            'label' => 'Name',
                            'name' => 'name',
                            'type' => 'text',
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
                            'prepend' => '',
                            'append' => '',
                            'maxlength' => '',
                            'readonly' => 0,
                            'disabled' => 0,
                        ),
                        array(
                            'key' => 'field_576c327fe4514',
                            'label' => 'Government department',
                            'name' => 'government_department',
                            'type' => 'text',
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
                            'prepend' => '',
                            'append' => '',
                            'maxlength' => '',
                            'readonly' => 0,
                            'disabled' => 0,
                        ),
                        array(
                            'key' => 'field_576c3291e4515',
                            'label' => 'Email address',
                            'name' => 'email_address',
                            'type' => 'email',
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
                            'prepend' => '',
                            'append' => '',
                        ),
                        array(
                            'key' => 'field_576c329ae4516',
                            'label' => 'Phone number',
                            'name' => 'phone_number',
                            'type' => 'text',
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
                            'prepend' => '',
                            'append' => '',
                            'maxlength' => '',
                            'readonly' => 0,
                            'disabled' => 0,
                        ),
                        array(
                            'key' => 'field_576c32b7e4517',
                            'label' => 'Description of the campaign/call to action',
                            'name' => 'description',
                            'type' => 'textarea',
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
                            'maxlength' => '',
                            'rows' => '',
                            'new_lines' => 'wpautop',
                            'readonly' => 0,
                            'disabled' => 0,
                        ),
                        array(
                            'key' => 'field_576c32e2e4518',
                            'label' => 'What is the campaign site URL you would like to use?',
                            'name' => 'campaign_url',
                            'type' => 'text',
                            'instructions' => 'If you know what URL you want, include it here. This will usually be in the form www.<campaignname>.gov.uk.',
                            'required' => 1,
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
                            'key' => 'field_576c32fbe4519',
                            'label' => 'Start date for campaign',
                            'name' => 'start_date',
                            'type' => 'date_picker',
                            'instructions' => '',
                            'required' => 1,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'display_format' => 'd/m/Y',
                            'return_format' => 'Y-m-d',
                            'first_day' => 1,
                        ),
                        array(
                            'key' => 'field_576c3326e451a',
                            'label' => 'Expiry date for campaign',
                            'name' => 'expiry_date',
                            'type' => 'date_picker',
                            'instructions' => '',
                            'required' => 1,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'display_format' => 'd/m/Y',
                            'return_format' => 'Y-m-d',
                            'first_day' => 1,
                        ),
                    ),
                    'location' => array(
                        array(
                            array(
                                'param' => 'post_type',
                                'operator' => '==',
                                'value' => 'gds_application',
                            ),
                        ),
                    ),
                    'menu_order' => 0,
                    'position' => 'normal',
                    'style' => 'default',
                    'label_placement' => 'top',
                    'instruction_placement' => 'label',
                    'hide_on_screen' => '',
                    'active' => 1,
                    'description' => '',
                ),
            ],
            'times' => 1,
        ]);

        $acf->register();
    }
}
