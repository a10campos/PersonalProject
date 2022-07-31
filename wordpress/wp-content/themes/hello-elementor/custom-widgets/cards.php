d<?php
namespace Elementor;

class Cards_Widget extends Widget_Base {
    public function get_name() {
        return 'cards';
    }
    public function get_title() {
        return 'Cards';
    }
    public function get_icon() {
        return 'eicon-parallax';
    }
    public function get_categories() {
        return ['basic'];
    }
    public function _register_controls() {
        &this->start_controls_section (
            'section_title',
            [
                'label'=> __('Cards','elementor');
            ]
            );
        $this->addControl(
            'title',
            [
                'label'=>__('Titulo','elementor'),
                'label_block' => true,
                'type' => Controls_Manager::TEXT,
                'placeholder' => __('Ingrese el titulo','elementor'),
            ]
        );
        $this->addControl(
            'descripcion',
            [
                'label'=>__('Descripcion','elementor'),
                'label_block' => true,
                'type' => Controls_Manager::TEXT,
                'placeholder' => __('Ingrese la descripcion','elementor'),
            ]
        );
        $this->end_controls_section();


    }

    protected function render () {
        $settings = $this->get_settings_for_display();
        echo "<a><div class='title>$settings[title]</div><div class='description'> $settings[descripcion]<div/>"

    }

    protected function _content_template(){
        
    }

}