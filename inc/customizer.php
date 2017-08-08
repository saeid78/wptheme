<?php
function wpb_customize_register($wp_customize) {

  //showcase Section
  $wp_customize->add_section('showcase', array(
    'title' => __('Showcase', 'wpbootstrapsmr'),
    'description' => sprintf(__('Option for showcase', 'wpbootstrapsmr')),
    'priority' => 130
  ));
//Image option
$wp_customize->add_setting('showcase_image', array(
    'default' =>  get_bloginfo('template_directory').'/img/showcase.jpg',
    'type' => 'theme_mod'

));
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_image' , array(
  'label' => __('Showcase Image', 'wpbootstrapsmr'),
  'section' => 'showcase',
  'settings' => 'showcase_image',
  'priority' => 1
)));



//heading option
  $wp_customize->add_setting('showcase_heading', array(
      'default' => _x('WP Theme', 'wpbootstrapsmr'),
      'type' => 'theme_mod'

  ));
  $wp_customize->add_control('showcase_heading', array(

    'label' => __('Heading', 'wpbootstrapsmr'),
    'section' => 'showcase',
    'priority' => 2
  ));
  //text option
  $wp_customize->add_setting('showcase_text', array(
      'default' => _x('This blog post shows a few different types of content that is supported and styled with Bootstrap. Basic typography, images, and code are all supported.', 'wpbootstrapsmr'),
      'type' => 'theme_mod'

  ));
  $wp_customize->add_control('showcase_text', array(

    'label' => __('Text', 'wpbootstrapsmr'),
    'section' => 'showcase',
    'priority' => 3
  ));

  //Button option
  $wp_customize->add_setting('btn_url', array(
      'default' => _x(' http://test.com', 'wpbootstrapsmr'),
      'type' => 'theme_mod'

  ));
  $wp_customize->add_control('btn_url', array(

    'label' => __('Button URL', 'wpbootstrapsmr'),
    'section' => 'showcase',
    'priority' => 4
  ));
    //Button(text) option
  $wp_customize->add_setting('btn_text', array(
      'default' => _x('Read More', 'wpbootstrapsmr'),
      'type' => 'theme_mod'

  ));
  $wp_customize->add_control('btn_text', array(

    'label' => __('Button Text', 'wpbootstrapsmr'),
    'section' => 'showcase',
    'priority' => 4
  ));

}

 add_action ('customize_register', 'wpb_customize_register');
