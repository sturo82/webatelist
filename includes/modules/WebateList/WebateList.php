<?php

class WELI_WebateLists extends ET_Builder_Module {

	public $slug       = 'weli_webate';
	public $vb_support = 'on';

	public function init() {
		$this->name = esc_html__( 'Webate List', 'weli-webate' );
		//$this->fullwidth = true;
		
	}

	public function get_fields() {
		return array(
			'heading'     => array(
				'label'           => esc_html__( 'Heading', 'weli-webate' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Input your desired heading here.', 'weli-webate' ),
				'toggle_slug'     => 'main_content',
			),
			'content'     => array(
				'label'           => esc_html__( 'Content', 'weli-webate' ),
				'type'            => 'tiny_mce',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Content entered here will appear below the heading text.', 'weli-webate' ),
				'toggle_slug'     => 'main_content',
			),
		);
	}

	public function render( $unprocessed_props, $content = null, $render_slug ) {
		ob_start();
		include 'template.php';
		$content = ob_get_clean();
		return $content;
		/*return sprintf(
			'<h1 class="simp-simple-header-heading">%1$s</h1>
			<p>%2$s</p>',
			esc_html( $this->props['heading'] ),
			$this->props['content']
		);*/
	}
}

new WELI_WebateLists;
