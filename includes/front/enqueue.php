<?php

function m_enqueue(): void {
	wp_register_style('m_font_rubik_pacifico',
		'https://fonts.googleapis.com/css2?family=Pacifico&family=Rubik:wght@300;400;500;700&display=swap',
		[],
		null);
	wp_register_style('m_bootstrap_icons', get_theme_file_uri('assets/bootstrap-icons/bootstrap-icons.css'));
	wp_register_style('m_public_css', get_theme_file_uri('assets/public/index.css'));

	wp_enqueue_style('m_font_rubik_pacifico');
	wp_enqueue_style('m_bootstrap_icons');
	wp_enqueue_style('m_public_css');
}
