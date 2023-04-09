<?php

/**
 * "Slider List" Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'w-block-' . $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'w-sl';

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
<section style="background-image: url(<?= get_stylesheet_directory_uri() . '/assets/images/bg-slider.png' ?>);" id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class="container">
        <div class="slider-heading">
            <div class="slider-heading-wrapper">
                <h2>Hàng triệu mẹ tin dùng mỗi năm</h2>
                <div class="line"></div>
            </div>
            <li> <a href="#">Xem tất cả</a></li>
        </div>
        <div class="row slider-list-container mt-4">
            <div class="col-lg-3">
                <a href="#" class="slider-card">
                    <div class="slider-image">
                        <img src="<?= get_stylesheet_directory_uri() . '/assets/images/sliders-1.png' ?>" alt="" />
                        <div class="slider-read">
                            <span>Đọc tin </span> <span>
                                <ion-icon name="arrow-back-outline"></ion-icon>
                            </span>
                        </div>
                    </div>
                    <div class="slider-text">
                        <h6>Giá bán Yoosun Rau má chưa bằng 1 bát phở nhưng có quá trời công dụng</h6>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ut purus in eni
                        </p>
                    </div>

                </a>
            </div>

            <div class="col-lg-3">
                <a href="#" class="slider-card">
                    <div class="slider-image">
                        <img src="<?= get_stylesheet_directory_uri() . '/assets/images/sliders-1.png' ?>" alt="" />
                        <div class="slider-read">
                            <span>Đọc tin </span> <span class="icon-right">
                                <i class="bi bi-chevron-right"></i>
                            </span>
                        </div>
                    </div>
                    <div class="slider-text">
                        <h6>Giá bán Yoosun Rau má chưa bằng 1 bát phở nhưng có quá trời công dụng</h6>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ut purus in eni
                        </p>
                    </div>

                </a>
            </div>

            <div class="col-lg-3">
                <a href="#" class="slider-card">
                    <div class="slider-image">
                        <img src="<?= get_stylesheet_directory_uri() . '/assets/images/sliders-1.png' ?>" alt="" />
                        <div class="slider-read">
                            <span>Đọc tin </span> <span class="icon-right">
                                <i class="bi bi-chevron-right"></i>
                            </span>
                        </div>
                    </div>
                    <div class="slider-text">
                        <h6>Giá bán Yoosun Rau má chưa bằng 1 bát phở nhưng có quá trời công dụng</h6>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ut purus in eni
                        </p>
                    </div>

                </a>
            </div>

            <div class="col-lg-3">
                <a href="#" class="slider-card">
                    <div class="slider-image">
                        <img src="<?= get_stylesheet_directory_uri() . '/assets/images/sliders-1.png' ?>" alt="" />
                        <div class="slider-read">
                            <span>Đọc tin </span> <span class="icon-right">
                                <i class="bi bi-chevron-right"></i>
                            </span>
                        </div>
                    </div>
                    <div class="slider-text">
                        <h6>Giá bán Yoosun Rau má chưa bằng 1 bát phở nhưng có quá trời công dụng</h6>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ut purus in eni
                        </p>
                    </div>

                </a>
            </div>
            <div class="col-lg-3">
                <a href="#" class="slider-card">
                    <div class="slider-image">
                        <img src="<?= get_stylesheet_directory_uri() . '/assets/images/sliders-1.png' ?>" alt="" />
                        <div class="slider-read">
                            <span>Đọc tin </span> <span class="icon-right">
                                <i class="bi bi-chevron-right"></i>
                            </span>
                        </div>
                    </div>
                    <div class="slider-text">
                        <h6>Giá bán Yoosun Rau má chưa bằng 1 bát phở nhưng có quá trời công dụng</h6>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ut purus in eni
                        </p>
                    </div>

                </a>
            </div>
        </div>
        <div>
</section>
<?php
add_action('wp_footer', 'slscript', 99, 1);
if (!function_exists('slscript')) {
    function slscript()
    { ?>
        <script async>

        </script>
<?php }
}
