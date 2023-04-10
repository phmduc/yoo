<?php

/**
 * "achivement" Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'w-block' . $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'w-achivement';

if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}

$isFullWidth = false;
if (!empty($block['align'])) {
    $isFullWidth = $block['align'] === 'full' ? true : false;
    $className .= ' align-' . $block['align'];
}

// Load values and assign defaults.
?>
<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class="container">
        <div class="slider-heading-wrapper">
            <h2>Thành tựu của Yoosun Rau má</h2>
            <div class="line"></div>
        </div>
        <div class="achivement-slider">
            <div class="achivement-item">

                <div class="achivement-right">
                    <div class="achivement-image">
                        <img src="<?= get_stylesheet_directory_uri() . '/assets/images/achivement-image.png' ?>" alt="">
                    </div>
                    <div class=" achivement-left" style="background-image: url(<?= get_stylesheet_directory_uri() . '/assets/images/bg-ach-left.png' ?>);">

                        <p>Vượt qua rất nhiều ứng cử viên, các thương hiệu đa quốc gia trong ngành hàng mẹ và bé,
                            kem
                            bôi da
                            Yoosun Rau má đã được vinh danh tại hạng mục "Thương hiệu Cộng đồng tin chọn" tại
                            Webtretho
                            AWARD 2023.
                        </p>
                        <p>
                            Đây là giải thưởng uy tín, được tổ chức với mục đích tôn vinh những sản phẩm, dịch vụ
                            chất
                            lượng
                            cao dành cho gia đình Việt. Trong lần đầu tiên tổ chức tại Việt Nam, Webtretho Awards
                            2023
                            thu
                            hút gần 300 thương hiệu tham gia và gần 16.585 lượt bình chọn từ cộng đồng.
                        </p>
                        <a class="achivement-click" href="#">Tìm hiểu thêm</a>
                    </div>
                </div>

            </div>
            <div class="achivement-item">

                <div class="achivement-right">
                    <div class="achivement-image">
                        <img src="<?= get_stylesheet_directory_uri() . '/assets/images/achivement-image.png' ?>" alt="">
                    </div>
                    <div class=" achivement-left" style="background-image: url(<?= get_stylesheet_directory_uri() . '/assets/images/bg-ach-left.png' ?>);">

                        <p>Vượt qua rất nhiều ứng cử viên, các thương hiệu đa quốc gia trong ngành hàng mẹ và bé,
                            kem
                            bôi da
                            Yoosun Rau má đã được vinh danh tại hạng mục "Thương hiệu Cộng đồng tin chọn" tại
                            Webtretho
                            AWARD 2023.
                        </p>
                        <p>
                            Đây là giải thưởng uy tín, được tổ chức với mục đích tôn vinh những sản phẩm, dịch vụ
                            chất
                            lượng
                            cao dành cho gia đình Việt. Trong lần đầu tiên tổ chức tại Việt Nam, Webtretho Awards
                            2023
                            thu
                            hút gần 300 thương hiệu tham gia và gần 16.585 lượt bình chọn từ cộng đồng.
                        </p>
                        <a class="achivement-click" href="#">Tìm hiểu thêm</a>
                    </div>
                </div>

            </div>
            <div class="achivement-item">

                <div class="achivement-right">
                    <div class="achivement-image">
                        <img src="<?= get_stylesheet_directory_uri() . '/assets/images/achivement-image.png' ?>" alt="">
                    </div>
                    <div class=" achivement-left" style="background-image: url(<?= get_stylesheet_directory_uri() . '/assets/images/bg-ach-left.png' ?>);">

                        <p>Vượt qua rất nhiều ứng cử viên, các thương hiệu đa quốc gia trong ngành hàng mẹ và bé,
                            kem
                            bôi da
                            Yoosun Rau má đã được vinh danh tại hạng mục "Thương hiệu Cộng đồng tin chọn" tại
                            Webtretho
                            AWARD 2023.
                        </p>
                        <p>
                            Đây là giải thưởng uy tín, được tổ chức với mục đích tôn vinh những sản phẩm, dịch vụ
                            chất
                            lượng
                            cao dành cho gia đình Việt. Trong lần đầu tiên tổ chức tại Việt Nam, Webtretho Awards
                            2023
                            thu
                            hút gần 300 thương hiệu tham gia và gần 16.585 lượt bình chọn từ cộng đồng.
                        </p>
                        <a class="achivement-click" href="#">Tìm hiểu thêm</a>
                    </div>
                </div>

            </div>
            <div class="achivement-item">

                <div class="achivement-right">
                    <div class="achivement-image">
                        <img src="<?= get_stylesheet_directory_uri() . '/assets/images/achivement-image.png' ?>" alt="">
                    </div>
                    <div class=" achivement-left" style="background-image: url(<?= get_stylesheet_directory_uri() . '/assets/images/bg-ach-left.png' ?>);">

                        <p>Vượt qua rất nhiều ứng cử viên, các thương hiệu đa quốc gia trong ngành hàng mẹ và bé,
                            kem
                            bôi da
                            Yoosun Rau má đã được vinh danh tại hạng mục "Thương hiệu Cộng đồng tin chọn" tại
                            Webtretho
                            AWARD 2023.
                        </p>
                        <p>
                            Đây là giải thưởng uy tín, được tổ chức với mục đích tôn vinh những sản phẩm, dịch vụ
                            chất
                            lượng
                            cao dành cho gia đình Việt. Trong lần đầu tiên tổ chức tại Việt Nam, Webtretho Awards
                            2023
                            thu
                            hút gần 300 thương hiệu tham gia và gần 16.585 lượt bình chọn từ cộng đồng.
                        </p>
                        <a class="achivement-click" href="#">Tìm hiểu thêm</a>
                    </div>
                </div>

            </div>
            <div class="achivement-item">

                <div class="achivement-right">
                    <div class="achivement-image">
                        <img src="<?= get_stylesheet_directory_uri() . '/assets/images/achivement-image.png' ?>" alt="">
                    </div>
                    <div class=" achivement-left" style="background-image: url(<?= get_stylesheet_directory_uri() . '/assets/images/bg-ach-left.png' ?>);">

                        <p>Vượt qua rất nhiều ứng cử viên, các thương hiệu đa quốc gia trong ngành hàng mẹ và bé,
                            kem
                            bôi da
                            Yoosun Rau má đã được vinh danh tại hạng mục "Thương hiệu Cộng đồng tin chọn" tại
                            Webtretho
                            AWARD 2023.
                        </p>
                        <p>
                            Đây là giải thưởng uy tín, được tổ chức với mục đích tôn vinh những sản phẩm, dịch vụ
                            chất
                            lượng
                            cao dành cho gia đình Việt. Trong lần đầu tiên tổ chức tại Việt Nam, Webtretho Awards
                            2023
                            thu
                            hút gần 300 thương hiệu tham gia và gần 16.585 lượt bình chọn từ cộng đồng.
                        </p>
                        <a class="achivement-click" href="#">Tìm hiểu thêm</a>
                    </div>
                </div>

            </div>
            <div class="achivement-item">

                <div class="achivement-right">
                    <div class="achivement-image">
                        <img src="<?= get_stylesheet_directory_uri() . '/assets/images/achivement-image.png' ?>" alt="">
                    </div>
                    <div class=" achivement-left" style="background-image: url(<?= get_stylesheet_directory_uri() . '/assets/images/bg-ach-left.png' ?>);">

                        <p>Vượt qua rất nhiều ứng cử viên, các thương hiệu đa quốc gia trong ngành hàng mẹ và bé,
                            kem
                            bôi da
                            Yoosun Rau má đã được vinh danh tại hạng mục "Thương hiệu Cộng đồng tin chọn" tại
                            Webtretho
                            AWARD 2023.
                        </p>
                        <p>
                            Đây là giải thưởng uy tín, được tổ chức với mục đích tôn vinh những sản phẩm, dịch vụ
                            chất
                            lượng
                            cao dành cho gia đình Việt. Trong lần đầu tiên tổ chức tại Việt Nam, Webtretho Awards
                            2023
                            thu
                            hút gần 300 thương hiệu tham gia và gần 16.585 lượt bình chọn từ cộng đồng.
                        </p>
                        <a class="achivement-click" href="#">Tìm hiểu thêm</a>
                    </div>
                </div>

            </div>

        </div>
    </div>

</section>
<?php
add_action('wp_footer', 'achivementScript', 99, 1);
if (!function_exists('achivementScript')) {
    function achivementScript()
    { ?>
        <script async>
            (function($) {

            }(jQuery));
        </script>
<?php }
}
