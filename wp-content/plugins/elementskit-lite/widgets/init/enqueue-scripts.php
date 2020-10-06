<?php
namespace ElementsKit_Lite\Widgets\Init;

defined( 'ABSPATH' ) || exit;

class Enqueue_Scripts{

    public function __construct() {

        add_action( 'wp_enqueue_scripts', [$this, 'frontend_js']);
        add_action( 'wp_enqueue_scripts', [$this, 'frontend_css'], 99 );

        add_action( 'elementor/frontend/before_enqueue_scripts', [$this, 'elementor_js'] );
        add_action( 'elementor/editor/after_enqueue_styles', [$this, 'elementor_css'] );

        add_action( 'elementor/preview/enqueue_styles', [ $this, 'enqueue_preview_style' ] );
    }

    public function elementor_js() {
        wp_enqueue_script( 'elementskit-elementor', \ElementsKit_Lite::widget_url() . 'init/assets/js/elementor.js',array( 'jquery', 'elementor-frontend' ), \ElementsKit_Lite::version(), true );
    }

    public function elementor_css() {
        wp_enqueue_style( 'elementskit-panel', \ElementsKit_Lite::widget_url() . 'init/assets/css/editor.css',null, \ElementsKit_Lite::version() );
    }

    public function frontend_js() {
        if(!is_admin()){
            
            /*
            * Register scripts.
            * This scripts are only loaded when the associated widget is being used on a page.
            */
            wp_enqueue_script( 'ekit-core', \ElementsKit_Lite::widget_url() . 'init/assets/js/ekit-core.js', array( 'jquery' ), false, true ); // Core most of the widgets init are bundled //
            wp_register_script( 'goodshare', \ElementsKit_Lite::widget_url() . 'init/assets/js/goodshare.min.js', array( 'jquery' ), false, true ); // sosial share //       
            wp_register_script( 'datatables', \ElementsKit_Lite::widget_url() . 'init/assets/js/datatables.min.js', array( 'jquery' ), false, true ); // table //
        }
    }
    public function frontend_css() {
        if(!is_admin()){
            wp_enqueue_style( 'elementskit-core', \ElementsKit_Lite::widget_url() . 'init/assets/css/ekit-core.css', false, \ElementsKit_Lite::version() );
        };

        if ( is_rtl() ) wp_enqueue_style( 'elementskit-rtl', \ElementsKit_Lite::widget_url() . 'init/assets/css/rtl.css', false, \ElementsKit_Lite::version() );
    }

    public function enqueue_preview_style() {
        if (function_exists( 'wpforms' )) {
            wp_enqueue_style( 'weforms', plugins_url('/weforms/assets/wpuf/css/frontend-forms.css', 'weforms' ), false, \ElementsKit_Lite::version() );
        }

        if(defined('WPFORMS_PLUGIN_SLUG')){
            wp_enqueue_style( 'wpforms', plugins_url( '/'. WPFORMS_PLUGIN_SLUG . '/assets/css/wpforms-full.css', WPFORMS_PLUGIN_SLUG ), false, \ElementsKit_Lite::version() );
        }
    }
}