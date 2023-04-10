<?php

/**
 * "Online Shop" Block Template.
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
$className = 'w-os';

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
    <div class="container">
        <div class="online-shop-container">
            <div class="os-left">
                <div class="slider-heading-wrapper">
                    <h2>Mua hàng online dễ dàng.</h2>
                    <div class="line"></div>
                </div>
                <ul class="os-left-desc">
                    <li><a href="#" class="os-left-link">Đặc biệt tiện lợi khi chỉ cần vài Click chuột để mau sản
                            phẩm.</a></li>
                    <li><a href="#" class="os-left-link">Các sự kiện ưu đãi và trợ giá được thực hiện liên tục.</a></li>
                    <li><a href="#" class="os-left-link">Giao hàng tận nhà nhanh chóng.</a></li>
                </ul>
            </div>
            <div class="os-right">
                <div class="os-right-bg">
                    <img src="<?= get_stylesheet_directory_uri() . '/assets/images/cart-os.png' ?>" alt="">
                    <div class="os-right-click">
                        <span class="icons-wrapper">
                            <i class="bi bi-arrow-up-short"></i>
                        </span>
                        <span>Click vào liên kết để mua hàng</span>
                    </div>
                    <div class=" os-right-wrapper">

                        <a href="#" class="os-right-link">
                            <div class="os-right-image">
                                <img src="<?= get_stylesheet_directory_uri() . '/assets/images/shoppe-os.png' ?>"
                                    alt="">
                            </div>

                            <p>Shopee
                                ĐẠI BẮC
                                Miền Bắc</p>
                        </a>
                        <a href="#" class="os-right-link">
                            <div class="os-right-image">
                                <img src="<?= get_stylesheet_directory_uri() . '/assets/images/shoppe-os.png' ?>"
                                    alt="">
                            </div>

                            <p>Shopee
                                ĐẠI BẮC
                                Miền Nam</p>
                        </a>
                        <a href="#" class="os-right-link">
                            <div class="os-right-image">
                                <img src="<?= get_stylesheet_directory_uri() . '/assets/images/tiki-os.png' ?>" alt="">
                            </div>
                            <p>TIKI
                                ĐẠI BẮC</p>
                        </a>
                        <a href="#" class="os-right-link">
                            <div class="os-right-image">
                                <img src="<?= get_stylesheet_directory_uri() . '/assets/images/lazada-os.png' ?>"
                                    alt="">
                            </div>

                            <p>LAZADA
                                ĐẠI BẮC</p>
                        </a>

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<?php
add_action('wp_footer', 'osscript', 99, 1);
if (!function_exists('osscript')) {
    function osscript()
    { ?>
<script async>
(function($) {

}(jQuery));
</script>
<?php }
}