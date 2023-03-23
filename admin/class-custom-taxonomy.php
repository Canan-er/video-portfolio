<?php
/*
 * @package Quray-extra
 * @since 1.0.0
*/
if (!class_exists('Swp_Portfolio_Custom_Taxonomy')){
class Swp_Portfolio_Custom_Taxonomy {

	private static $instance;

    function __construct() {

        add_action( 'init', array( $this, 'create_taxonomy' ) );

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

    function create_taxonomy() {
        $labels = array(
                'name'              => esc_html__( '作品分类',  'swp-portfolio' ),
                'singular_name'     => esc_html__( '作品分类', 'swp-portfolio' ),
                'search_items'      => esc_html__( '搜索分类', 'swp-portfolio' ),
                'all_items'         => esc_html__( '全部分类', 'swp-portfolio' ),
                'parent_item'       => esc_html__( '父类别', 'swp-portfolio' ),
                'parent_item_colon' => esc_html__( '父类别:', 'swp-portfolio' ),
                'edit_item'         => esc_html__( '编辑分类', 'swp-portfolio' ),
                'update_item'       => esc_html__( '更新分类', 'swp-portfolio' ),
                'add_new_item'      => esc_html__( '添加新分类', 'swp-portfolio' ),
                'new_item_name'     => esc_html__( '新分类名称', 'swp-portfolio' ),
                'menu_name'         => esc_html__( '分类', 'swp-portfolio' ),
            );

            $args = array(
                'hierarchical'      => true,
                'labels'            => $labels,
                'show_ui'           => true,
                'show_admin_column' => true,
                'query_var'         => true,
                'rewrite'           => array( 'slug' => 'portfolio-category' ),
            );

        register_taxonomy( 'portfolio-category', array( 'portfolio' ), $args );

    } //end function



} // end class


 if (class_exists('Swp_Portfolio_Custom_Taxonomy')){
		Swp_Portfolio_Custom_Taxonomy::getInstance();
	}

} //endif 