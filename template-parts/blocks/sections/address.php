<?php

/**
 * "address" Block Template.
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
$className = 'w-address';

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
        <div class="row pt-4">
            <div class="col-xl-6  mb-4">
                    
                    <div class="address_img">
                        <img src="<?=  get_stylesheet_directory_uri() . '/assets/images/map.png' ?>" class="image_maps img-fluid" alt="">
                    </div>
            </div>
            <div class="col-xl-6">
                <div class="adress_content">
                    <h4 class="problem_title">
                    Mua Yoosun rau má dễ dàng tại hơn 15.000 nhà thuốc trên toàn quốc
                    </h4>
                    <ul class="adress_ul">
                        <li class="adress_li">
                            <a href="">Hơn 15000 Nhà thuốc, Quầy thuốc phân phối</a>
                        </li>
                        <li class="adress_li">
                            <a href="">Trải khắp 63 tỉnh thành cả nước</a>
                        </li>
                        <li class="adress_li">
                            <a href="">Giá bán phải chăng.</a>
                        </li>
                    </ul>
                    <div class="adress_btn">
                            <a href="#">
                                <span>Cố vấn chuyên môn</span>
                                <span>
                                    Xem ngay nào!
                                    <i class="bi bi-arrow-right"></i>
                                </span>
                            </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php 
add_action( 'wp_footer', 'addressScript', 99, 1 );
if (!function_exists('addressScript'))   {
    function addressScript() { ?>
        <script async>
            ( function ( $ ) {
                
            }( jQuery ) );
        </script>
    <?php }
}