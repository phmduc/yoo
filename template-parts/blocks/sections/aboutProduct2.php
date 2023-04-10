<?php

/**
 * "About Product 2" Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'w-block-' . $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'w-ap2';

if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}

$isFullWidth = false;
if (!empty($block['align'])) {
    $isFullWidth = $block['align'] === 'full' ? true : false;
    $className .= ' align-' . $block['align'];
}

// Load values and assign defaults.
?>
<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class="w-ap2-container">
        <div class="ap2-image">
            <img src="<?= get_stylesheet_directory_uri() . '/assets/images/pr-img2.png' ?>" alt="">
            <div class="ap2-desc">
                <div class="ap2-heading ap2-item-center">
                    <h2>Yoosun Rau Má dùng trong những trường hợp nào ?</h2>
                </div>
                <div class="ap2-items ap2-items-top">
                    <div class="ap2-item">
                        <div class="ap2-item-image"
                            style="background-image: url(<?= get_stylesheet_directory_uri() . '/assets/images/bg-item-hover.png' ?>);">
                            <img src="<?= get_stylesheet_directory_uri() . '/assets/images/ap2-item-image.png' ?>"
                                alt="">
                            <span>05</span>
                        </div>
                        <p>Dưỡng da, Làm mát da</p>
                    </div>
                    <div class="ap2-item">
                        <div class="ap2-item-image"
                            style="background-image: url(<?= get_stylesheet_directory_uri() . '/assets/images/bg-item-hover.png' ?>);">
                            <img src="<?= get_stylesheet_directory_uri() . '/assets/images/ap2-item-image.png' ?>"
                                alt="">
                            <span>05</span>
                        </div>
                        <p>Ngăn ngừa rôm sảy, mẩn ngứa, hăm da</p>
                    </div>
                </div>
                <div class="ap2-items ap2-items-center">
                    <div class="ap2-item">
                        <div class="ap2-item-image"
                            style="background-image: url(<?= get_stylesheet_directory_uri() . '/assets/images/bg-item-hover.png' ?>);">
                            <img src="<?= get_stylesheet_directory_uri() . '/assets/images/ap2-item-image.png' ?>"
                                alt="">
                            <span>05</span>
                        </div>
                        <p>Tái tạo da, ngừa thâm sẹo</p>
                    </div>
                    <div class="ap2-item">
                        <div class="ap2-item-image"
                            style="background-image: url(<?= get_stylesheet_directory_uri() . '/assets/images/bg-item-hover.png' ?>);">
                            <img src="<?= get_stylesheet_directory_uri() . '/assets/images/ap2-item-image.png' ?>"
                                alt="">
                            <span>05</span>
                        </div>
                        <p>Dịu vết muỗi đốt, côn trùng cắn</p>
                    </div>
                </div>
                <div class="ap2-items ap2-item-bottom">
                    <div class="ap2-item ">
                        <div class="ap2-item-image"
                            style="background-image: url(<?= get_stylesheet_directory_uri() . '/assets/images/bg-item-hover.png' ?>);">
                            <img src="<?= get_stylesheet_directory_uri() . '/assets/images/ap2-item-image.png' ?>"
                                alt="">
                            <span>05</span>
                        </div>
                        <p>Ngăn ngừa mụn và thâm mụn</p>
                    </div>

                </div>
            </div>
        </div>

    </div>
</section>
<?php
add_action('wp_footer', 'ap2script', 99, 1);
if (!function_exists('ap2script')) {
    function ap2script()
    { ?>
<script async>
(function($) {

}(jQuery));
</script>
<?php }
}