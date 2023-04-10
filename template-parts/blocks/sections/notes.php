<?php

/**
 * "notes" Block Template.
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
$className = 'w-notes';

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
    <div class="notes">
        <div class="container">
            <div class="flower">
                <img src="<?=  get_stylesheet_directory_uri() . '/assets/images/Vector 330 (Stroke).webp' ?>" alt="">
            </div>

            <div class="notes-main">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="items-left">
                            <div class="left-image">
                                <img src="<?=  get_stylesheet_directory_uri() . '/assets/images/img-flower(1).webp' ?>" alt="">
                            </div>

                            <ul class="list-socal">
                                <li>
                                    <a href="">
                                    <img src="<?=  get_stylesheet_directory_uri() . '/assets/images/Frame 9985.webp' ?>" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                    <img src="<?=  get_stylesheet_directory_uri() . '/assets/images/Frame 10007.webp' ?>" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href=""><img src="<?=  get_stylesheet_directory_uri() . '/assets/images/Frame 9986.webp' ?>" alt=""></a>
                                </li>
                                <li>
                                    <a href=""><img src="<?=  get_stylesheet_directory_uri() . '/assets/images/Frame 9987.webp' ?>" alt=""></a>
                                </li>
                            </ul>

                            <div class="click">
                                <i class="i-show bi bi-arrow-up-short"></i>
                                <i class="i-hide bi bi-arrow-up-short"></i>
                                <p>Click vào liên kết để mua hàng</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-12">
                        <div class="items-right">
                            <div class="items-top">
                                <h2>Một số lưu ý</h2>

                                <ul class="list-number"> 
                                    <li>
                                        <img src="<?=  get_stylesheet_directory_uri() . '/assets/images/Group 987.webp' ?>" alt="">
                                        <p>Ngày dùng từ 2-3 lần</p>
                                    </li>
                                    <li>
                                        <img src="<?=  get_stylesheet_directory_uri() . '/assets/images/Group 981.webp' ?>" alt="">
                                        <p>Dùng ngay sau khi xuất hiện vết mẩn, ngứa, mụn… để hiệu quả tốt nhất</p>
                                    </li>
                                    <li>
                                        <img src="<?=  get_stylesheet_directory_uri() . '/assets/images/Group 988.webp' ?>" alt="">
                                        <p>Dùng được hàng ngày để dưỡng da, giúp da mềm, mịn</p>
                                    </li>
                                </ul>
                            </div>

                            <div class=items-bot>
                                <h2>Mua hàng online dễ dàng.</h2>
                                <ul class="list-dot">
                                    <li>Đặc biệt tiện lợi khi chỉ cần vài Click chuột để mau sản phẩm. </li>
                                    <li> Các sự kiện ưu đãi và trợ giá được thực hiện liên tục.</li>
                                    <li>Giao hàng tận nhà nhanh chóng.</li>
                                </ul>

                                <a href="">
                                    <p>
                                        Hướng dẫn mua hàng  <span><i class="bi bi-arrow-right"></i></span>
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php 
add_action( 'wp_footer', 'notesScript', 99, 1 );
if (!function_exists('notesScript'))   {
    function notesScript() { ?>
        <script async>
            ( function ( $ ) {
                
            }( jQuery ) );
        </script>
    <?php }
}