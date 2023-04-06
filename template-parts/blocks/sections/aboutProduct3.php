<?php

/**
 * "About Product 3" Block Template.
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
$className = 'w-ap3';

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
        <div class="aboutproduct_3 text-center">
            <div class="col-12">
                
                <div class="aboutproduct3_box_centent">
                    <div class="product3_box">
                        <div class="content_product3">
                            <img src="<?=  get_stylesheet_directory_uri() . '/assets/images/yoosun_rauma.png' ?>" alt="">
                            <h4 class="product3_title">Cực kỳ lành tính</h4>
                        </div> 
                        <div class="product3_item box_one">
                            <div class="product_img">
                            <img src="<?=  get_stylesheet_directory_uri() . '/assets/images/image_36.png' ?>" alt="">
                            </div>
                            <div class="product_item_center">
                            <h6 class="product_item_h6">
                                D-Panthenol
                            </h6>
                            <p class="product_item_p">
                                Làm dịu da,giảm ngứa rát cho da,làm trơn , mềm da
                            </p>
                            </div>
                        </div>  
                        <div class="product3_item box_two">
                            <div class="product_img">
                            <img src="<?=  get_stylesheet_directory_uri() . '/assets/images/image_38.png' ?>" alt="">
                            </div>
                            <div class="product_item_center">
                            <h6 class="product_item_h6">
                                D-Panthenol
                            </h6>
                            <p class="product_item_p">
                            Kích thích tái tạo tế bào da, cải thiện làn da bị tổn thương. Ngoài ra, dân gian còn dùng Rau má để làm mát, ngăn ngừa rôm sảy và mẩn ngứa.
                            </p>
                            </div>
                        </div>  
                        <div class="product3_item box_three">
                            <div class="product_img">
                            <img src="<?=  get_stylesheet_directory_uri() . '/assets/images/image_38.png' ?>" alt="">
                            </div>
                            <div class="product_item_center">
                            <h6 class="product_item_h6">
                            CHLORHEXIDINE DIGLUCONATE 
                            </h6>
                            <p class="product_item_p">
                            Bảo vệ da khỏi tác động của vi khuẩn, ngăn ngừa mụn một một cách hiệu quả.
                            </p>
                            </div>
                        </div>  
                        <div class="product3_item box_four">
                            <div class="product_img">
                            <img src="<?=  get_stylesheet_directory_uri() . '/assets/images/image_37.png' ?>" alt="">
                            </div>
                            <div class="product_item_center">
                            <h6 class="product_item_h6">
                            VITAMIN E
                            </h6>
                            <p class="product_item_p">
                            Ngăn ngừa sự lão hóa do tác dụng của tia UV và oxy hóa, đồng thời giữ ẩm cho da, giúp da luôn mịn màng.
                            </p>
                            </div>
                        </div>  
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<?php 
add_action( 'wp_footer', 'ap3script', 99, 1 );
if (!function_exists('ap3script'))   {
    function ap3script() { ?>
        <script async>
            ( function ( $ ) {
                
            }( jQuery ) );
        </script>
    <?php }
}