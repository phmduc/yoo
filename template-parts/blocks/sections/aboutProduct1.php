<?php

/**
 * "About Product 1" Block Template.
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
$className = 'w-ap1';

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
    <div class="about-product-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="image">
                        <img src="<?=  get_stylesheet_directory_uri() . '/assets/images/Group 914.webp' ?>" alt="">
                        <div class="image-ct1">
                            <img src="<?=  get_stylesheet_directory_uri() . '/assets/images/Vector 335.webp' ?>" alt="">
                            <p>
                                <b>An toàn tuyệt đối cho da bé</b> Không Corticoid, không Parabens
                            </p>
                        </div>
                        <div class="image-ct2">
                            <img src="<?=  get_stylesheet_directory_uri() . '/assets/images/Vector 336.webp' ?>" alt="">
                            <p>
                                <b>Hiệu quả với hầu</b> hết các vấn đề về da của trẻ sơ sinh, trẻ nhỏ và cả người lớn.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="about-pr">
                        <h3>
                        Từ nguồn nguyên liệu an toàn, thân thiện
                        </h3>
                        <div class="about-para">
                            <p>
                            Để đưa được các ứng dụng quý báu của rau má vào kem bôi da Yoosun Rau má đòi hỏi phải có phương pháp chiết xuất phù hợp nhằm lấy ra các hoạt chất, làm cho dược liệu có tác dụng mạnh hơn và giảm các tác dụng phụ không mong muốn.
                            </p>
                            <p>
                            Vì thế, Dược Đại Bắc đã đầu tư kỹ lưỡng từ trang thiết bị đến nghiên cứu quy trình để tự chiết xuất rau má. Đồng thời, lựa chọn nguồn rau má mọc tự nhiên, được thu hoạch vào tháng 3, tháng 4 hàng năm - giai đoạn mà cây rau má phát triển tốt nhất và có hàm lượng chất cao nhất để đưa vào chiết xuất….
                            </p>
                        </div>

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
add_action( 'wp_footer', 'ap1script', 99, 1 );
if (!function_exists('ap1script'))   {
    function ap1script() { ?>
        <script async>
            ( function ( $ ) {
                
            }( jQuery ) );
        </script>
    <?php }
}