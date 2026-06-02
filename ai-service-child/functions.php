<?php
/**
 * Функции дочерней темы для AI-сервиса
 */

// Подключаем стили родительской темы
function ai_service_enqueue_styles() {
    wp_enqueue_style( 
        'parent-style', 
        get_template_directory_uri() . '/style.css' 
    );
    
    wp_enqueue_style( 
        'ai-service-style', 
        get_stylesheet_uri(), 
        array( 'parent-style' ),
        wp_get_theme()->get( 'Version' )
    );
}
add_action( 'wp_enqueue_scripts', 'ai_service_enqueue_styles' );

// Подключаем шрифты для AI-сервиса
function ai_service_google_fonts() {
    wp_enqueue_style(
        'ai-service-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Space+Grotesk:wght@400;500;600;700&display=swap',
        array(),
        null
    );
}
add_action( 'wp_enqueue_scripts', 'ai_service_google_fonts' );
