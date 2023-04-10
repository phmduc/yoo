<?php

/**
 * "process" Block Template.
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
$className = 'w-process';

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
    <div class="process">
        <div class="container">
            <div class="pro-header">
                <h2>
                Quy trình sản xuất Yoosun Rau má
                </h2>
                <div class="header-right">
                    <span>Kéo qua</span>
                    <img src="<?=  get_stylesheet_directory_uri() . '/assets/images/Vector 416.webp' ?>" alt="">
                    <div class="dot"></div>
                </div>
            </div>
        </div>

        <div class="process-main" onmousedown="startDragging(event)" onmousemove="dragScroll(event)" onmouseup="stopDragging(event)">
            <div class="width-lg">
                <div class="item-main">
                    <img src="<?=  get_stylesheet_directory_uri() . '/assets/images/Group 947.webp' ?>" alt="">
                    <div class="info">
                        <h6>Nghiên cứu công thức</h6>
                        <p>
                        Nghiên cứu kỹ lưỡng để Yoosun Rau má có công thức tối ưu nhất.
                        </p>
                    </div>
                </div>

                <div class="item-main">
                    <img src="<?=  get_stylesheet_directory_uri() . '/assets/images/Group 948.webp' ?>" alt="">
                    <div class="info">
                        <h6>Thử nghiệm và đánh giá mẫu thửt</h6>
                        <p>
                        Đánh giá độ an toàn và hiệu quả của Yoosun Rau má.
                        </p>
                    </div>
                </div>

                <div class="item-main">
                    <img src="<?=  get_stylesheet_directory_uri() . '/assets/images/Group 949.webp' ?>" alt="">
                    <div class="info">
                        <h6>Lựa chọn, kiểm tra nguyên vật liệu đầu vào</h6>
                        <p>
                        Nguồn nguyên vật liệu đầu vào được kiểm soát hết sức chặt chẽ.
                        </p>
                    </div>
                </div>

                <div class="item-main">
                    <img src="<?=  get_stylesheet_directory_uri() . '/assets/images/Group 950.webp' ?>" alt="">
                    <div class="info">
                        <h6>Pha chế</h6>
                        <p>
                        Pha chế theo công thức đã nghiên cứu dưới sự hỗ trợ của máy móc hiện đại trong điều kiện sạch đúng tiêu chuẩn cGMP.
                        </p>
                    </div>
                </div>

                <div class="item-main">
                    <img src="<?=  get_stylesheet_directory_uri() . '/assets/images/Group 951.webp' ?>" alt="">
                    <div class="info">
                        <h6>Đóng gói</h6>
                        <p>
                        Kiểm soát chặt chẽ về điều kiện và chất lượng đóng gói theo đúng tiêu chuẩn, quy trình.
                        </p>
                    </div>
                </div>

                <div class="item-main">
                    <img src="<?=  get_stylesheet_directory_uri() . '/assets/images/Group 947.webp' ?>" alt="">
                    <div class="info">
                        <h6>Nghiên cứu công thức</h6>
                        <p>
                        Nghiên cứu kỹ lưỡng để Yoosun Rau má có công thức tối ưu nhất.
                        </p>
                    </div>
                </div>
            </div>
                
        </div>
    </div>
</section>
<?php 
add_action( 'wp_footer', 'processscript', 99, 1 );
if (!function_exists('processscript'))   {
    function processscript() { ?>
        <script async>
            ( function ( $ ) {
                
            }( jQuery ) );

            var container = document.querySelector('.process-main');
                var isDragging = false;
                var startX, scrollLeft;

                container.addEventListener('mouseenter', () => {
                container.classList.add('active');
                });

                container.addEventListener('mouseleave', () => {
                container.classList.remove('active');
                });

                function startDragging(e) {
                isDragging = true;
                startX = e.pageX - container.offsetLeft;
                scrollLeft = container.scrollLeft;
                }

                function stopDragging(e) {
                isDragging = false;
                }

                function dragScroll(e) {
                if (!isDragging) return;
                e.preventDefault();
                const x = e.pageX - container.offsetLeft;
                const walk = (x - startX) * 2; // scroll speed
                container.scrollLeft = scrollLeft - walk;
                }
        </script>
    <?php }
}