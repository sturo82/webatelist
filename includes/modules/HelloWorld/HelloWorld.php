<?php

class WELI_HelloWorld extends ET_Builder_Module {

	public $slug       = 'weli_hello_world';
	public $vb_support = 'on';

	protected $module_credits = array(
		'module_uri' => '',
		'author'     => 'Giacomo Surano',
		'author_uri' => 'https://github.com/sturo82',
	);

	public function init() {
		$this->name = esc_html__( 'Hello World', 'weli-webate-list' );
	}

	public function get_fields() {
		return array(
			'content' => array(
				'label'           => esc_html__( 'Content', 'weli-webate-list' ),
				'type'            => 'tiny_mce',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Content entered here will appear inside the module.', 'weli-webate-list' ),
				'toggle_slug'     => 'main_content',
			),
		);
	}

	public function render( $attrs, $content = null, $render_slug ) {
		return sprintf( '<h1>%1$s</h1>', $this->props['content'] );
	}
}

new WELI_HelloWorld;
