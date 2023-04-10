<?php

/**
 * "Banner Hero" Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'w-block-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'w-banner';

if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}

$isFullWidth = false;
if( !empty($block['align']) ) {
    $isFullWidth = $block['align'] === 'full' ? true : false;
    $className .= ' align-' . $block['align'];
}

// Load values and assign defaults.
?>
<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="contentBanner">
                    <h1>Mẩn ngứa dịu ngay Sạch bay rôm sảy</h1>
                    <ul class="details">
                        <li>
                            <div class="text-details">Lorem ipsum</div>
                            <div class="text-details">Lorem ipsum</div>
                        </li>
                        <li>
                            <div class="text-details">Lorem ipsum</div>
                            <div class="text-details">Lorem ipsum</div>
                        </li>
                        <li>
                            <div class="text-details">Lorem ipsum</div>
                            <div class="text-details">Lorem ipsum</div>
                        </li>
                    </ul>
                    <div class="note">
                        <div class="icon" style="position: relative;"><img src="<?=  get_stylesheet_directory_uri() . '/assets/images/🦆 icon _mood very good_.webp' ?>" class="img-fluid" style="position: relative;object-fit: cover;" alt=""></div>
                        <div class="text">
                            <h5>KHÔNG COTICOID</h5>
                            <p>An toàn cho trẻ sơ sinh</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="image "><img src="<?=  get_stylesheet_directory_uri() . '/assets/images/cover-fb-C 1.webp' ?>"class="img-fluid" alt=""></div>
</section>
<?php 
add_action( 'wp_footer', 'bannerScripts', 99, 1 );
if (!function_exists('bannerScripts'))   {
    function bannerScripts() { ?>
        <script async>
            ( function ( $ ) {
                
            }( jQuery ) );
        </script>
    <?php }
}