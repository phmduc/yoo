<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php wp_head(); ?>
</head>

<?php
	$navbar_scheme   = get_theme_mod( 'navbar_scheme', 'navbar-white bg-white' ); // Get custom meta-value.
	$navbar_position = get_theme_mod( 'navbar_position', 'static' ); // Get custom meta-value.

	$search_enabled  = get_theme_mod( 'search_enabled', '1' ); // Get custom meta-value.
?>

<body <?php body_class(); ?>>

    <?php wp_body_open(); ?>

    <a href="#main" class="sr-only sr-only-focusable"><?php esc_html_e( 'Skip to main content', 'weable' ); ?></a>

    <div id="wrapper">
        <header>
            <nav id="header"
                class="navbar navbar-expand-md <?php  if ( isset( $navbar_position ) && 'fixed_top' === $navbar_position ) : echo ' fixed-top'; elseif ( isset( $navbar_position ) && 'fixed_bottom' === $navbar_position ) : echo ' fixed-bottom'; endif; if ( is_home() || is_front_page() ) : echo ' home'; endif; ?>">
                <div class="container justify-content-between">
                    <a class="navbar-brand" href="<?php echo esc_url( home_url() ); ?>"
                        title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                        <?php
                            $header_logo = get_theme_mod( 'header_logo' ); // Get custom meta-value.

                            if ( ! empty( $header_logo ) ) :
                        ?>
                        <img src="<?php echo esc_url( $header_logo ); ?>"
                            alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />
                        <?php
                            else :
                                echo esc_attr( get_bloginfo( 'name', 'display' ) );
                            endif;
                        ?>
                    </a>
                    <!-- <?php $links = get_field('links','option'); ?> -->


                    <div id="navbar" class="navbar d-none d-lg-flex p-0">
                        <?php
                            // Loading WordPress Custom Menu (theme_location).
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'main-menu',
                                    'container'      => '',
                                    'menu_class'     => 'navbar-nav w-100 justify-content-center ',
                                    'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
                                    'walker'         => new WP_Bootstrap_Navwalker(),
                                )
                            );

                        ?>
                    </div>
                    <a href="tel:1800 1125" class="phone-number d-none d-lg-block">
                        <i class="bi bi-telephone"></i>
                        1800 1125
                    </a>

                    <div class="mobile-right d-flex d-lg-none align-items-center">
                        <div class="hamburger-menu d-block d-lg-none" id="hamburger-menu">
                            <div class="menu-bar1"></div>
                            <div class="menu-bar2"></div>
                            <div class="menu-bar3"></div>
                        </div>
                    </div>
                </div><!-- /.container -->
            </nav><!-- /#header -->

            <div class="m-menu d-lg-none d-block">
                <a class="navbar-brand" href="<?php echo esc_url( home_url() ); ?>"
                    title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                    <?php
                            $header_logo = get_theme_mod( 'header_logo' ); // Get custom meta-value.

                            if ( ! empty( $header_logo ) ) :
                        ?>
                    <img src="<?php echo esc_url( $header_logo ); ?>"
                        alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />
                    <?php
                            else :
                                echo esc_attr( get_bloginfo( 'name', 'display' ) );
                            endif;
                        ?>
                </a>
                <?php 
				wp_nav_menu(
					array(
						'theme_location' => 'mobile-menu',
						'container'      => '',
						'menu_class'     => 'navbar-nav mr-auto',
						'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
						'walker'         => new WP_Bootstrap_Navwalker(),
					)
				);
			?>
            </div><!-- /.Mobile menu container -->
        </header>
        <div class="overlay"></div>

        <main id="main"
            class="<?= (is_page_template('page-full.php')) || (is_page_template('page-blog.php')) || (is_page_template('page-adviser.php')) || (is_page_template('page-feel.php')) ? 'w-builder' : 'container' ?>"
            <?php if ( isset( $navbar_position ) && 'fixed_top' === $navbar_position ) : echo ' style="padding-top: 57px;"'; elseif ( isset( $navbar_position ) && 'fixed_bottom' === $navbar_position ) : echo ' style="padding-bottom: 100px;"'; endif; ?>>
            <?php
			// If Single or Archive (Category, Tag, Author or a Date based page).
			if ( is_single() || is_archive() ) :
		?>
            <div class="row">
                <div class="col-12">
                    <?php
			endif;
		?>