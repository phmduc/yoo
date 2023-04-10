<?php

/**
 * "steps" Block Template.
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
$className = 'w-steps';

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
   <div class="container mt-4 w-steps">
   <h5 class="problem_title ">
                        Cách sử dụng đơn giản
                    </h5>
    <div class="row">
        
        <div class="col-xl-6 col-md-6">
                    
                    <div class="steps_box_cententr">
                        
                        <h4 class="steps_title ">
                            Làm theo các bước sau 
                        </h4>
                        <div class="steps_img_contentcart">
                            <div class="steps_img_item">
                                <img src="<?=  get_stylesheet_directory_uri() . '/assets/images/vit.png' ?>" alt="" class="img-fluid ">
                            </div>
                        <ul class="steps_box_ul">
                            <li class="steps_one">
                                 <img src="<?=  get_stylesheet_directory_uri() . '/assets/images/Group_973.png' ?>" class="img-fluid" alt="">
                                 <a href="">Lấy 1 lượng vừa đủ Yoosun rau má ra đầu ngón tay hoặc tăm bông sạch</a>
                                 <img src="<?=  get_stylesheet_directory_uri() . '/assets/images/Vector_420.png' ?>" class="img-fluid vector_one" alt="">
                            </li>
                            <li class="pl-4 steps_two">
                                 <img src="<?=  get_stylesheet_directory_uri() . '/assets/images/Group_972.png' ?>" class="img-fluid" alt="">
                                 <a href="">Rửa sạch tay và vùng da cần tác động rồi dùng khăn mềm thấm khô</a>
                                 <img src="<?=  get_stylesheet_directory_uri() . '/assets/images/Vector_421.png' ?>" class="img-fluid vector_two" alt="">
                            </li>
                            <li>
                                 <img src="<?=  get_stylesheet_directory_uri() . '/assets/images/Group_971.png' ?>" class="img-fluid" alt="">
                                 <a href="">Bôi kem lên vùng da cần tác động</a>
                                 <img src="<?=  get_stylesheet_directory_uri() . '/assets/images/Vector_422.png' ?>" class="img-fluid vector_three" alt="">
                            </li>
                            <li class="pl-5">
                                 <img src="<?=  get_stylesheet_directory_uri() . '/assets/images/Group_970.png' ?>" class="img-fluid" alt="">
                                 <a href="">Massage nhẹ nhàng để kem thấm sâu hơn</a>
                            </li>
                        </ul>
                        </div>
                    </div>
        </div>
        <div class="col-xl-6 col-md-6">
            <div class="steps_img">
                <img src="<?=  get_stylesheet_directory_uri() . '/assets/images/trecon.png' ?>" class="img-fluid" alt="">
            </div>
        </div>
    </div>
   </div>
</section>
<?php 
add_action( 'wp_footer', 'stepsScript', 99, 1 );
if (!function_exists('stepsScript'))   {
    function stepsScript() { ?>
        <script async>
            ( function ( $ ) {
                
            }( jQuery ) );
        </script>
    <?php }
}