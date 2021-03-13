<?php

/*Kirki Config File*/

Kirki::add_config('saf-custom-options', array(
    'capability'    => 'edit_theme_options',
    'option_type'   => 'theme_mod',
));

Kirki::add_panel('theme-options', array(
    'priority'    => 10,
    'title'       => esc_html__('Theme Options', 'saf-services'),
));

/* Contact Section */
Kirki::add_section('contact_options', array(
    'title'          => esc_html__('Contact', 'saf-services'),
    'panel'          => 'theme-options',
    'priority'       => 160,
));

/*Address*/
Kirki::add_field('address_field', [
    'type'     => 'textarea',
    'settings' => 'address_setting',
    'label'    => esc_html__('Address', 'saf-services'),
    'section'  => 'contact_options',
    'default'  => esc_html__('2263 Gladwell Street, Carthage, TX, 75633', 'saf-services'),
    'priority' => 10,
]);

/*Phone*/
Kirki::add_field('phone_field', [
    'type'     => 'text',
    'settings' => 'phone_setting',
    'label'    => esc_html__('Phone', 'saf-services'),
    'section'  => 'contact_options',
    'default'  => esc_html__('+1 347 123 4567', 'saf-services'),
    'priority' => 10,
]);

/*Email*/
Kirki::add_field('email_field', [
    'type'     => 'text',
    'settings' => 'email_setting',
    'label'    => esc_html__('Email', 'saf-services'),
    'section'  => 'contact_options',
    'default'  => esc_html__('example@abc.com', 'saf-services'),
    'priority' => 10,
]);

/* Social Media Section */
Kirki::add_section('social_media_options', array(
    'title'          => esc_html__('Social Media', 'saf-services'),
    'panel'          => 'theme-options',
    'priority'       => 160,
));

/*Facebook*/
Kirki::add_field('facebook_field', [
    'type'     => 'text',
    'settings' => 'facebook_setting',
    'label'    => esc_html__('Facebook', 'saf-services'),
    'section'  => 'social_media_options',
    'default'  => esc_html__('#', 'saf-services'),
    'priority' => 10,
]);

/*Twitter*/
Kirki::add_field('twitter_field', [
    'type'     => 'text',
    'settings' => 'twitter_setting',
    'label'    => esc_html__('Twitter', 'saf-services'),
    'section'  => 'social_media_options',
    'default'  => esc_html__('#', 'saf-services'),
    'priority' => 10,
]);

/*Instagram*/
Kirki::add_field('instagram_field', [
    'type'     => 'text',
    'settings' => 'instagram_setting',
    'label'    => esc_html__('Instagram', 'saf-services'),
    'section'  => 'social_media_options',
    'default'  => esc_html__('#', 'saf-services'),
    'priority' => 10,
]);

/*Pinterest*/
Kirki::add_field('pinterest_field', [
    'type'     => 'text',
    'settings' => 'pinterest_setting',
    'label'    => esc_html__('Pinterest', 'saf-services'),
    'section'  => 'social_media_options',
    'default'  => esc_html__('#', 'saf-services'),
    'priority' => 10,
]);

/*Tumblr*/
Kirki::add_field('tumblr_field', [
    'type'     => 'text',
    'settings' => 'tumblr_setting',
    'label'    => esc_html__('Tumblr', 'saf-services'),
    'section'  => 'social_media_options',
    'default'  => esc_html__('#', 'saf-services'),
    'priority' => 10,
]);

/*Google Plus*/
Kirki::add_field('google_plus_field', [
    'type'     => 'text',
    'settings' => 'google_plus_setting',
    'label'    => esc_html__('Google Plus', 'saf-services'),
    'section'  => 'social_media_options',
    'default'  => esc_html__('#', 'saf-services'),
    'priority' => 10,
]);

/*Youtube*/
Kirki::add_field('youtube_field', [
    'type'     => 'text',
    'settings' => 'youtube_setting',
    'label'    => esc_html__('Youtube', 'saf-services'),
    'section'  => 'social_media_options',
    'default'  => esc_html__('#', 'saf-services'),
    'priority' => 10,
]);

/*Linkedin*/
Kirki::add_field('linkedin_field', [
    'type'     => 'text',
    'settings' => 'linkedin_setting',
    'label'    => esc_html__('Linkedin', 'saf-services'),
    'section'  => 'social_media_options',
    'default'  => esc_html__('#', 'saf-services'),
    'priority' => 10,
]);

/* Get Quote Section */
Kirki::add_section('get_quote_options', array(
    'title'          => esc_html__('Get Quote', 'saf-services'),
    'panel'          => 'theme-options',
    'priority'       => 160,
));

/*Contact Form 7*/
Kirki::add_field('get_quote_field', [
    'type'     => 'textarea',
    'settings' => 'get_quote_setting',
    'label'    => esc_html__('Contact Form 7 Shortcode', 'saf-services'),
    'section'  => 'get_quote_options',
    'default'  => esc_html__('[contact-form-7 id="8" title="Get Quote"]', 'saf-services'),
    'priority' => 10,
]);

/* Footer Section */
Kirki::add_section('footer_options', array(
    'title'          => esc_html__('Footer', 'saf-services'),
    'panel'          => 'theme-options',
    'priority'       => 160,
));

/*Footer Copyright*/
Kirki::add_field('footer_field', [
    'type'     => 'textarea',
    'settings' => 'footer_setting',
    'label'    => esc_html__('Footer Copyright', 'saf-services'),
    'section'  => 'footer_options',
    'default'  => esc_html__('Copyright &copy; 2019. SAF Services. All Rights Reserved.', 'saf-services'),
    'priority' => 10,
]);


/* Search Section */
Kirki::add_section('search_options', array(
    'title'          => esc_html__('Search Box', 'saf-services'),
    'panel'          => 'theme-options',
    'priority'       => 160,
));

Kirki::add_field( 'search_box_toggle', [
	'type'        => 'toggle',
	'settings'    => 'search_box_toggle',
	'label'       => esc_html__( 'Hide/Show Search', 'saf-services' ),
	'section'     => 'search_options',
	'default'     => '1',
	'priority'    => 10,
] );

?>