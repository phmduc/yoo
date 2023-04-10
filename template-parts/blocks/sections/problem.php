<?php

/**
 * "problem" Block Template.
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
$className = 'w-problem';

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
    <div class="container w-problem">
         <div class="row">
            <div class="col-xl-6">
                <div class="problem_box">
                    <h5 class="problem_title">
                        Các vấn đề da
                    </h5>
                    <div class="problem_item">
                        <p class="problem_item_p">
                            Click các liên kết để xem thêm các chia sẻ hữu ích cho các vấn đề về da từ Yoosun rau má
                        </p>
                        <div class="problem_box_btn">
                            <div class="row ">
                                <div class="col-lg-6">
                                    <div href="" class="problem_box_item mb-3">
                                        <span class="problem_box_item_span">Côn trùng cắn</span>
                                        <i class="bi bi-arrow-right"></i>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div href="" class="problem_box_item mb-3">
                                        <span class="problem_box_item_span">Hăm da</span>
                                        <i class="bi bi-arrow-right"></i>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div href="" class="problem_box_item mb-3">
                                        <span class="problem_box_item_span">Rôm sảy & mẩn ngứa</span>
                                        <i class="bi bi-arrow-right"></i>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div href="" class="problem_box_item mb-3">
                                        <span class="problem_box_item_span">Mụn và thâm sẹo</span>
                                        <i class="bi bi-arrow-right"></i>
                                    </div>
                                </div>
                                   
                                
                                                                     
                                
                            </div>
                        </div>
                       <div class="problem_bot_item">
                       <a class="problem_bot text-center d-block ">
                            Các vấn đề ngoài da khác
                            <i class="bi bi-arrow-right"></i>
                        </a>
                       </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="problem_pepole_box">
                    <div class="problem_img_one">
                        <img src="<?=  get_stylesheet_directory_uri() . '/assets/images/pepole_1.png' ?>" class="img-fluid"  alt="">
                    </div>
                    <div class="problem_img_two">
                        <img src="<?=  get_stylesheet_directory_uri() . '/assets/images/pepole_2.png' ?>" class="img-fluid img-two"  alt="">
                    </div>
                    <div class="problem_img_three">
                        <img src="<?=  get_stylesheet_directory_uri() . '/assets/images/pepole_3.png' ?>"  class="img-fluid" alt="">
                    </div>
                    <div class="problem_img_chamtron">
                    <img src="<?=  get_stylesheet_directory_uri() . '/assets/images/chamtron.png' ?>"  class="img-fluid" alt="">
                    </div>
                </div>
            </div>
         </div>   
    </div>
</section>
<?php 
add_action( 'wp_footer', 'problemscript', 99, 1 );
if (!function_exists('problemscript'))   {
    function problemscript() { ?>
        <script async>
            ( function ( $ ) {
                
            }( jQuery ) );
        </script>
    <?php }
}