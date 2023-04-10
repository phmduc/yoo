<?php

/**
 * "Commit" Block Template.
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
$className = 'w-commit';

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
        <h2 class="text-center">CAM KẾT CHẤT LƯỢNG TỪ YOOSUN RAU MÁ</h2>
        <div class="row align-items-center justify-content-around">
            <div class="col-lg-5">
                <div class="img-wrap">
                    <img src="<?=  get_stylesheet_directory_uri() . '/assets/images/Group 946.webp' ?>" class="img-fluid" alt="">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="content">
                    <div class="boxContent">
                        <h3>An toàn & Lành tính</h3>
                        <p></p>
                        <ul>
                            <li>Thành phần chính là dịch chiết rau má</li>
                            <li>Không chứa các chất gây hại cho da như parabens, corticoid</li>
                        </ul>
                    </div>
                    <div class="boxContent">
                        <h3>Đa năng công dụng</h3>
                        <p>Giải quyết nhiều vấn đề về da:</p>
                        <ul>
                            <li>Trẻ em: Ngăn ngừa rôm sảy, mẩn ngứa, hăm da; Làm dịu vết côn trùng đốt, muỗi cắn…</li>
                            <li>Người lớn: Làm xẹp mụn trứng cá, dưỡng da, làm mát da, làm dịu vết bỏng và cháy nắng nhẹ…</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php 
add_action( 'wp_footer', 'commitscript', 99, 1 );
if (!function_exists('commitscript'))   {
    function commitscript() { ?>
        <script async>
            ( function ( $ ) {
                
            }( jQuery ) );
        </script>
    <?php }
}