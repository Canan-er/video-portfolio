<?php
/*
 * @package swp-portfolio
 * @since 1.0.0
*/
if (!class_exists('Swp_Portfolio_Custom_Post_Type')){
class Swp_Portfolio_Custom_Post_Type {

	private static $instance;

    function __construct() {

        add_action( 'init', array( $this, 'create_post_type' ) );

    }

    /**
	 * getInstance();
	 * @since 1.0.0
	 * */
	public static function getInstance(){
		if (null == self::$instance){
			self::$instance = new self();
		}
		return self::$instance;
	}

    function create_post_type() {
    	$labels = array(
		'name'                  => esc_html__( '作品集',  'swp-portfolio' ),
		'singular_name'         => esc_html__( '作品',  'swp-portfolio' ),
		'menu_name'             => esc_html__( '作品', 'swp-portfolio' ),
		'name_admin_bar'        => esc_html__( '作品', 'swp-portfolio' ),
        'add_new'            => esc_html__( '添加新作品', 'swp-portfolio'),
        'add_new_item'       => esc_html__( '添加新作品', 'swp-portfolio' ),
        'new_item'           => esc_html__( '新作品', 'swp-portfolio' ),
        'edit_item'          => esc_html__( '编辑作品', 'swp-portfolio' ),
        'view_item'          => esc_html__( '查看作品', 'swp-portfolio' ),
        'all_items'          => esc_html__( '全部作品', 'swp-portfolio' ),
        'search_items'       => esc_html__( '搜索作品', 'swp-portfolio' ),
        'parent_item_colon'  => esc_html__( 'Parent : Portfolio', 'swp-portfolio' ),
        'not_found'          => esc_html__( '没有找到作品。', 'swp-portfolio'),
        'not_found_in_trash' => esc_html__( '在回收站中找不到作品。', 'swp-portfolio' ),
        'not_found_in_trash' => esc_html__( '作品集', 'swp-portfolio' ),
        // Overrides the “Featured Image” label
        'featured_image'        => esc_html__( 'Portfolio Image', 'swp-portfolio' ),

        // Overrides the “Set featured image” label
        'set_featured_image'    => esc_html__( 'Set Portfolio image', 'swp-portfolio' ),

        // Overrides the “Remove featured image” label
        'remove_featured_image' => esc_html__( 'Remove Portfolio image', 'swp-portfolio' ),

        // Overrides the “Use as featured image” label
        'use_featured_image'    => esc_html__( 'Use as Portfolio image', 'swp-portfolio' ),

	);

        register_post_type( 
            'portfolio',
            array(
                'labels'             => $labels,
                'public'             => true,
                'supports'            =>array( 'title', 'editor','thumbnail', 'author' ),
                'hierarchical'       => false,
                'rewrite'            => array( 'slug' => 'portfolio' ),
                'menu_icon'          => 'dashicons-images-alt2',
                'has_archive' => true,
            )
        );

    }

} // end class


 if (class_exists('Swp_Portfolio_Custom_Post_Type')){
		Swp_Portfolio_Custom_Post_Type::getInstance();
	}

} //endif 


