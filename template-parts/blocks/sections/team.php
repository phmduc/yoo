<?php

/**
 * "team" Block Template.
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
$className = 'w-team';

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
    <div class="bgr-img">
        <img src="<?= get_stylesheet_directory_uri() . '/assets/images/image_13-removebg-preview.webp' ?>" alt="">
    </div>
    <div class="content">
        <div class="container">
            <div class="title text-center">
                <h2>Đội ngũ chuyên gia của Yoosun Rau má</h2>
            </div>
            <div class="row align-items-end justify-content-between">
                <div class="col-md-6">
                    <div class="img-doctor img-wrap">
                        <img src="<?= get_stylesheet_directory_uri() . '/assets/images/image 31.webp' ?>" alt="">
                    </div>
                </div>
                <div class="col-md-5 mb-5">
                    <div class="decs">
                        <p>Trong gần 20 năm có mặt trên thị trường, Yoosun Rau má luôn hướng tới mục tiêu “Bảo vệ làn da
                            Việt”, đặc biệt là làn da của trẻ nhỏ, với thành phần chiết xuất từ thiên nhiên, an toàn và
                            lành tính.</p>
                        <p>
                            Vì thế, mỗi một tuýp Yoosun Rau má trước khi tới tay người tiêu dùng đều được đội ngũ dược
                            sĩ cao cấp nghiên cứu và kiểm soát chặt chẽ để đảm bảo 3 yếu tố là chất lượng, hiệu quả và
                            độ an toàn.
                        </p>
                        <p>Bên cạnh đó, đội ngũ dược sĩ của chúng tôi luôn luôn sẵn sàng lắng nghe và đồng hành cùng
                            từng nỗi băn khoăn của khách hàng.</p>
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
</section>
<?php 
add_action( 'wp_footer', 'teamScript', 99, 1 );
if (!function_exists('teamScript'))   {
    function teamScript() { ?>
<script async>
(function($) {

}(jQuery));
</script>
<?php }
}