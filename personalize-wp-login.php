<?php
    /*  
    *   Plugin Name: Personalize wp-login
    *   Plugin URI: http://gabrielsoligo.com/
    *   Description: Opções para personlizar sua sua página de login do WordPress
    *   Version: 0.1
    *   Author: Gabriel Soligo
    *   Author URI: http://gabrielsoligo.com
    *   License: GPL2
    */

    /*
    *	Variaveis Globais
    */
    $plugins_url =  WP_PLUGIN_URL . '/personalize-wp-login';

    /*
    *   Add link no menu configurações
    */
    function personalize_menu(){        
        // https://codex.wordpress.org/Function_Reference/add_options_page
        // add_options_page( $page_title, $menu_title, $capability, $menu-slug, $function )
        
        add_options_page(
            'Personalize wp-login',
            'Personalize wp-login',
            'read',
            'personalize-wp-login',
            'personalize_options_page'
        );
    }
    add_action( 'admin_menu', 'personalize_menu' );


    /*
    *   Pagina principal - Configurações gerais
    */
    function personalize_options_page(){

        //Testando se o usuário tem permissão de administrador
        if ( !current_user_can('update_core')) {
            wp_die( $message = 'Para personalizar sua página de login você precisa ser um usuário com privilégios de administrador.', $title = 'Acesso negado!' );
        }

        require('inc/options-page.php');

    }


    /*
    *   Chamada de styles
    */
    function personalize_backend_styles(){

        wp_enqueue_style( 'personalize_backend_css', plugins_url( 'personalize-wp-login/css/admin.css' ) );
        wp_enqueue_style( 'personalize_backend_css_bootstrap', plugins_url( 'personalize-wp-login/css/bootstrap.min.css' ) );

    }
    add_action( 'admin_head', 'personalize_backend_styles' );

    /*
    *   Chamada de Scripts
    */
    function personalize_backend_scripts(){

        wp_enqueue_script( 'personalize_backend_js_bootstrap', plugins_url( 'personalize-wp-login/js/bootstrap.min.js' ) );
        wp_enqueue_script( 'personalize_backend_js_bootstrap', plugins_url( 'personalize-wp-login/js/media.js' ) );

    }
    add_action( 'admin_enqueue_scripts', 'personalize_backend_scripts' );


    add_action( 'admin_enqueue_scripts', 'mw_enqueue_color_picker' );
    function mw_enqueue_color_picker( $hook_suffix ) {
        // first check that $hook_suffix is appropriate for your admin page
        wp_enqueue_style( 'wp-color-picker' );
        wp_enqueue_script( 'my-script-handle', plugins_url('js/colors.js', __FILE__ ), array( 'wp-color-picker' ), false, true );
    }

