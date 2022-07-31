<?php

class My_Elementor_Widgets{
    protected static $instance = null;

    public static function get_instance() {
        if (! sset(static::$instance)) {
            static::$instance = new static;
        }
        return static::$instance;
    }
    protected function _construct() {
        require_once ('cards.php');
        add_action ('elementor/widgets/widgets_registered',[&this,'register_widgets']);
    }

    public function register_widgets() {
        \Elementor\Plugin::instance()->widgets_manager->register_widgets_type(new \Elementor\Cards_Widget())
    }

}
add_action ('init','my_elementor_init');
function my_elementor_init(){
    My_Elementor_Widgets::get_instance();
}