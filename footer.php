			<?php
				// If Single or Archive (Category, Tag, Author or a Date based page)
				if ( is_single() || is_archive() ) :
			?>
			</div><!-- /.col -->

			<?php
						// get_sidebar();
					?>

			</div><!-- /.row -->
			<?php
				endif;
			?>
			</main><!-- /#main -->
			<footer id="footer">
			  
			    <section class="align-full copyright">
			        <div class="container">
			            <div class="row align-items-center">
			                <div class="col-12">
			                    <p class="text-center mt-3 mt-lg-0">
			                        <?php printf( esc_html__( '&copy; %1$s %2$s. All rights reserved.', 'weable' ), date_i18n( 'Y' ), get_bloginfo( 'name', 'display' ) ); ?>
			                    </p>
			                </div>
			            </div>
			        </div>
			    </section>
			</footer>
			<?php
		wp_footer();
	?>
			</body>

			</html>