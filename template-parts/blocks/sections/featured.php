<?php

/**
 * "Featured" Block Template.
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
$className = 'w-featured py-5';

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
        <ul class="list">
            <li class="items">
                <div class="icon">
                    <img src="<?= get_stylesheet_directory_uri() . '/assets/images/Group 856.webp' ?>" alt=""
                        class="img-fluid">
                </div>
                <div class="icon-content">
                    <h5>AN TOÀN LÀNH TÍNH</h5>
                    <p>Với dịch chiết rau má Không Corticoid, không Parabens</p>
                </div>
            </li>
            <li class="items">
                <div class="icon">
                    <img src="<?= get_stylesheet_directory_uri() . '/assets/images/Group 911.webp' ?>" alt=""
                        class="img-fluid">
                </div>
                <div class="icon-content">
                    <h5>98% HÀI LÒNG</h5>
                    <p>Theo kết quả khảo sát các mẹ trên webtretho 2019</p>
                </div>
            </li>
            <li class="items">
                <div class="icon">
                    <img src="<?= get_stylesheet_directory_uri() . '/assets/images/icon _like_.webp' ?>" alt=""
                        class="img-fluid">
                </div>
                <div class="icon-content">
                    <h5>SẢN PHẨM UY TÍN</h5>
                    <p>Ra đời từ năm 2004 được hàng triệu người tin dùng</p>
                </div>
            </li>
            <li class="items">
                <div class="icon">
                    <img src="<?= get_stylesheet_directory_uri() . '/assets/images/icon _setting two_.webp' ?>" alt=""
                        class="img-fluid">
                </div>
                <div class="icon-content">
                    <h5>NHÀ MÁY ĐẠT CHUẨN CGMP- ASEAN</h5>
                    <p>Đảm bảo an toàn, chất lượng</p>
                </div>
            </li>
            <li class="items">
                <div class="icon">
                    <img src="<?= get_stylesheet_directory_uri() . '/assets/images/icon _drone_.webp' ?>" alt=""
                        class="img-fluid">
                </div>
                <div class="icon-content">
                    <h5>BÁN RỘNG RÃI</h5>
                    <p>Tại các nhà thuốc trên toàn quốc</p>
                </div>
            </li>
        </ul>
    </div>
</section>
<?php 
add_action( 'wp_footer', 'featuredScript', 99, 1 );
if (!function_exists('featuredScript'))   {
    function featuredScript() { ?>
<script async>
(function($) {

}(jQuery));
</script>
<?php }
}