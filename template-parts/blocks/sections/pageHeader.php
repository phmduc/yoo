<?php

/**
 * "Page Header" Block Template.
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
$className = 'w-ph';

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
        <div class="img-ph img-wrap">
            <img src="<?= get_stylesheet_directory_uri() . '/assets/images/Vector 408.webp' ?>" alt="">
        </div>
    </div>
</section>
<?php 
add_action( 'wp_footer', 'phscript', 99, 1 );
if (!function_exists('phscript'))   {
    function phscript() { ?>
<script async>
(function($) {

}(jQuery));
</script>
<?php }
}