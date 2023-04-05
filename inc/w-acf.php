<?php

/**
 * Load ACF json
 * 
 * @author weable team
 */
function acf_json_load_point($paths)
{
    unset($paths[0]);

    $paths[] = get_template_directory_uri() . '/acf-json';

    return $paths;
}
add_filter('acf/settings/load_json', 'acf_json_load_point');

/**
 * Add ACF option page
 * 
 * @author weable team
 */
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Cấu hình website',
		'menu_title'	=> 'Cấu hình website',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
        'icon_url' => 'dashicons-superhero-alt',
	));
	
}

/**
 * ACF blocks registant
 * 
 * @author weable team
 */
add_action('acf/init', 'tpa_acf_init_block_types');
function tpa_acf_init_block_types() {

    /**
     * Elements registant
     */
    if( function_exists('acf_register_block_type') ) {

        /**
         * [W-Elements] Section
         */
        acf_register_block_type( array(
            'name'              => 'w-element-container',
            'title'             => __('[W-Elements] Section'),
            'description'       => __('Element "Section"'),
            'render_template'   => 'template-parts/blocks/elements/w-element-container.php',
            'category'          => 'formatting',
            'icon'              => 'block-default',
            'mode'              => 'preview',
            'align'             => 'full',
            'keywords'          => array( '[W-Elements] Section', 'acf' ),
            'supports'          => array(
                'align' => true,
                'mode' => false,
                'jsx' => true
            ),
        ));
    }

    /**
     * Blocks registant
     */
    if( function_exists('acf_register_block_type') ) {

        /** 
         * [W-Section] Banner Hero
         */
        acf_register_block_type(array(
            'name'              => 'banner-hero',
            'title'             => __('[W-Section] Banner Hero'),
            'description'       => __('Slider'),
            'render_template'   => 'template-parts/blocks/sections/banner-hero.php',
            'category'          => 'formatting',
            'icon'              => 'block-default',
            'mode'              => 'edit',
            'align'             => 'full',
            'keywords'          => array( '[W-Section] Banner Hero', 'acf' ),
        ));

        /** 
         * [W-Section] Project Items
         */
        acf_register_block_type(array(
            'name'              => 'project-items',
            'title'             => __('[W-Section] Project Items'),
            'description'       => __('Show dự án'),
            'render_template'   => 'template-parts/blocks/sections/project-items.php',
            'category'          => 'formatting',
            'icon'              => 'block-default',
            'mode'              => 'edit',
            'align'             => 'full',
            'keywords'          => array( '[W-Section] Project Items', 'acf' ),
        ));
        /** 
         * [W-Section] Banner 
         */
        acf_register_block_type(array(
            'name'              => 'banner',
            'title'             => __('[W-Section] Banner '),
            'description'       => __('Show dự án'),
            'render_template'   => 'template-parts/blocks/sections/banner.php',
            'category'          => 'formatting',
            'icon'              => 'block-default',
            'mode'              => 'edit',
            'align'             => 'full',
            'keywords'          => array( '[W-Section] Banner ', 'acf' ),
        ));
        /** 
         * [W-Section] Featured
         */
        acf_register_block_type(array(
            'name'              => 'featured',
            'title'             => __('[W-Section] Featured'),
            'description'       => __('Show dự án'),
            'render_template'   => 'template-parts/blocks/sections/featured.php',
            'category'          => 'formatting',
            'icon'              => 'block-default',
            'mode'              => 'edit',
            'align'             => 'full',
            'keywords'          => array( '[W-Section] Featured', 'acf' ),
        ));
         /** 
         * [W-Section] About Product 1
         */
        acf_register_block_type(array(
            'name'              => 'aboutProduct1',
            'title'             => __('[W-Section] About Product 1 '),
            'description'       => __('Show dự án'),
            'render_template'   => 'template-parts/blocks/sections/aboutProduct1.php',
            'category'          => 'formatting',
            'icon'              => 'block-default',
            'mode'              => 'edit',
            'align'             => 'full',
            'keywords'          => array( '[W-Section] About Product 1 ', 'acf' ),
        ));

        /** 
         * [W-Section] Problem
         */
        acf_register_block_type(array(
            'name'              => 'problem',
            'title'             => __('[W-Section] Problem '),
            'description'       => __('Show dự án'),
            'render_template'   => 'template-parts/blocks/sections/problem.php',
            'category'          => 'formatting',
            'icon'              => 'block-default',
            'mode'              => 'edit',
            'align'             => 'full',
            'keywords'          => array( '[W-Section] Problem ', 'acf' ),
        ));

        /** 
         * [W-Section] Slider List
         */
        acf_register_block_type(array(
            'name'              => 'sliderList',
            'title'             => __('[W-Section] Slider List '),
            'description'       => __('Show dự án'),
            'render_template'   => 'template-parts/blocks/sections/sliderList.php',
            'category'          => 'formatting',
            'icon'              => 'block-default',
            'mode'              => 'edit',
            'align'             => 'full',
            'keywords'          => array( '[W-Section] Slider List ', 'acf' ),
        ));

        /** 
         * [W-Section] Team
         */
        acf_register_block_type(array(
            'name'              => 'team',
            'title'             => __('[W-Section] Team '),
            'description'       => __('Show dự án'),
            'render_template'   => 'template-parts/blocks/sections/team.php',
            'category'          => 'formatting',
            'icon'              => 'block-default',
            'mode'              => 'edit',
            'align'             => 'full',
            'keywords'          => array( '[W-Section] Team ', 'acf' ),
        ));

         /** 
         * [W-Section] Slider Post
         */
        acf_register_block_type(array(
            'name'              => 'sliderPost',
            'title'             => __('[W-Section] Slider Post '),
            'description'       => __('Show dự án'),
            'render_template'   => 'template-parts/blocks/sections/sliderPost.php',
            'category'          => 'formatting',
            'icon'              => 'block-default',
            'mode'              => 'edit',
            'align'             => 'full',
            'keywords'          => array( '[W-Section] Slider Post ', 'acf' ),
        ));

          /** 
         * [W-Section] Address
         */
        acf_register_block_type(array(
            'name'              => 'address',
            'title'             => __('[W-Section] Address '),
            'description'       => __('Show dự án'),
            'render_template'   => 'template-parts/blocks/sections/address.php',
            'category'          => 'formatting',
            'icon'              => 'block-default',
            'mode'              => 'edit',
            'align'             => 'full',
            'keywords'          => array( '[W-Section] Address ', 'acf' ),
        ));

        /** 
         * [W-Section] Online Shop
         */
        acf_register_block_type(array(
            'name'              => 'onlineShop',
            'title'             => __('[W-Section] Online Shop '),
            'description'       => __('Show dự án'),
            'render_template'   => 'template-parts/blocks/sections/onlineShop.php',
            'category'          => 'formatting',
            'icon'              => 'block-default',
            'mode'              => 'edit',
            'align'             => 'full',
            'keywords'          => array( '[W-Section] Online Shop ', 'acf' ),
        ));

        
        /** 
         * [W-Section] Commit
         */
        acf_register_block_type(array(
            'name'              => 'commit',
            'title'             => __('[W-Section] Commit '),
            'description'       => __('Show dự án'),
            'render_template'   => 'template-parts/blocks/sections/commit.php',
            'category'          => 'formatting',
            'icon'              => 'block-default',
            'mode'              => 'edit',
            'align'             => 'full',
            'keywords'          => array( '[W-Section] Commit ', 'acf' ),
        ));

         /** 
         * [W-Section] About Product 2
         */
        acf_register_block_type(array(
            'name'              => 'aboutProduct2',
            'title'             => __('[W-Section] About Product 2 '),
            'description'       => __('Show dự án'),
            'render_template'   => 'template-parts/blocks/sections/aboutProduct2.php',
            'category'          => 'formatting',
            'icon'              => 'block-default',
            'mode'              => 'edit',
            'align'             => 'full',
            'keywords'          => array( '[W-Section] About Product 2 ', 'acf' ),
        ));

        /** 
         * [W-Section] About Product 3
         */
        acf_register_block_type(array(
            'name'              => 'aboutProduct3',
            'title'             => __('[W-Section] About Product 3 '),
            'description'       => __('Show dự án'),
            'render_template'   => 'template-parts/blocks/sections/aboutProduct3.php',
            'category'          => 'formatting',
            'icon'              => 'block-default',
            'mode'              => 'edit',
            'align'             => 'full',
            'keywords'          => array( '[W-Section] About Product 3 ', 'acf' ),
        ));
        /** 
         * [W-Section] Page Header
         */
        acf_register_block_type(array(
            'name'              => 'pageHeader',
            'title'             => __('[W-Section] Page Header '),
            'description'       => __('Show dự án'),
            'render_template'   => 'template-parts/blocks/sections/pageHeader.php',
            'category'          => 'formatting',
            'icon'              => 'block-default',
            'mode'              => 'edit',
            'align'             => 'full',
            'keywords'          => array( '[W-Section] Page Header ', 'acf' ),
        ));
        /** 
         * [W-Section] Process
         */
        acf_register_block_type(array(
            'name'              => 'process',
            'title'             => __('[W-Section] Process '),
            'description'       => __('Show dự án'),
            'render_template'   => 'template-parts/blocks/sections/process.php',
            'category'          => 'formatting',
            'icon'              => 'block-default',
            'mode'              => 'edit',
            'align'             => 'full',
            'keywords'          => array( '[W-Section] Process ', 'acf' ),
        ));

         /** 
         * [W-Section] Achivement
         */
        acf_register_block_type(array(
            'name'              => 'achivement',
            'title'             => __('[W-Section] Achivement '),
            'description'       => __('Show dự án'),
            'render_template'   => 'template-parts/blocks/sections/achivement.php',
            'category'          => 'formatting',
            'icon'              => 'block-default',
            'mode'              => 'edit',
            'align'             => 'full',
            'keywords'          => array( '[W-Section] Achivement ', 'acf' ),
        ));

         /** 
         * [W-Section] Steps
         */
        acf_register_block_type(array(
            'name'              => 'steps',
            'title'             => __('[W-Section] Steps '),
            'description'       => __('Show dự án'),
            'render_template'   => 'template-parts/blocks/sections/steps.php',
            'category'          => 'formatting',
            'icon'              => 'block-default',
            'mode'              => 'edit',
            'align'             => 'full',
            'keywords'          => array( '[W-Section] Steps ', 'acf' ),
        ));

        /** 
         * [W-Section] Notes
         */
        acf_register_block_type(array(
            'name'              => 'notes',
            'title'             => __('[W-Section] Notes '),
            'description'       => __('Show dự án'),
            'render_template'   => 'template-parts/blocks/sections/notes.php',
            'category'          => 'formatting',
            'icon'              => 'block-default',
            'mode'              => 'edit',
            'align'             => 'full',
            'keywords'          => array( '[W-Section] Notes ', 'acf' ),
        ));

        /** 
         * [W-Section] Cta
         */
        acf_register_block_type(array(
            'name'              => 'cta',
            'title'             => __('[W-Section] Cta '),
            'description'       => __('Show dự án'),
            'render_template'   => 'template-parts/blocks/sections/cta.php',
            'category'          => 'formatting',
            'icon'              => 'block-default',
            'mode'              => 'edit',
            'align'             => 'full',
            'keywords'          => array( '[W-Section] Cta ', 'acf' ),
        ));
    }

    
}