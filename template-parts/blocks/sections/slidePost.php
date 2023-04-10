<?php

/**
 * "Slider Post" Block Template.
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
$className = 'w-sp';

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
    <div class="sliderpost">
        <div class="container">
            <h2>
                Tin tức từ Yoonsun rau má 
            </h2>

            <div class="sliderpost-main">
                <div class="sliderpost-list">
                    <div class="slider-bg">
                        <a href="">
                            <div class="slider-items">
                                <div class="image-items">
                                    <img src="<?=  get_stylesheet_directory_uri() . '/assets/images/image 18 (2).webp' ?>" alt="">
                                </div>

                                <div class="text-items">
                                    <p>
                                    Yoosun Rau má nhận danh hiệu ‘Cộng đồng tin chọn’ tại Webtretho AWARDS 2023
                                    </p>

                                    <button>
                                        Đọc tin  <i class="bi bi-chevron-right"></i>
                                    </button>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="slider-bg">
                        <a href="">
                            <div class="slider-items">
                                <div class="image-items">
                                    <img src="<?=  get_stylesheet_directory_uri() . '/assets/images/image 19 (4).webp' ?>" alt="">
                                </div>

                                <div class="text-items">
                                    <p>
                                    Yoosun Rau má nhận danh hiệu ‘Cộng đồng tin chọn’ tại Webtretho AWARDS 2023
                                    </p>

                                    <button>
                                        Đọc tin  <i class="bi bi-chevron-right"></i>
                                    </button>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="slider-bg">
                        <a href="">
                            <div class="slider-items">
                                <div class="image-items">
                                    <img src="<?=  get_stylesheet_directory_uri() . '/assets/images/image 20 (1).webp' ?>" alt="">
                                </div>

                                <div class="text-items">
                                    <p>
                                    Yoosun Rau má nhận danh hiệu ‘Cộng đồng tin chọn’ tại Webtretho AWARDS 2023
                                    </p>

                                    <button>
                                        Đọc tin  <i class="bi bi-chevron-right"></i>
                                    </button>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="slider-bg">
                        <a href="">
                            <div class="slider-items">
                                <div class="image-items">
                                    <img src="<?=  get_stylesheet_directory_uri() . '/assets/images/image 18 (2).webp' ?>" alt="">
                                </div>

                                <div class="text-items">
                                    <p>
                                    Yoosun Rau má nhận danh hiệu ‘Cộng đồng tin chọn’ tại Webtretho AWARDS 2023
                                    </p>

                                    <button>
                                        Đọc tin  <i class="bi bi-chevron-right"></i>
                                    </button>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="slider-bg">
                        <a href="">
                            <div class="slider-items">
                                <div class="image-items">
                                    <img src="<?=  get_stylesheet_directory_uri() . '/assets/images/image 18 (2).webp' ?>" alt="">
                                </div>

                                <div class="text-items">
                                    <p>
                                    Yoosun Rau má nhận danh hiệu ‘Cộng đồng tin chọn’ tại Webtretho AWARDS 2023
                                    </p>

                                    <button>
                                        Đọc tin  <i class="bi bi-chevron-right"></i>
                                    </button>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</section>
<?php 
add_action( 'wp_footer', 'spscript', 99, 1 );
if (!function_exists('spscript'))   {
    function spscript() { ?>
        <script async>
            ( function ( $ ) {
                $('.sliderpost-list').slick({
                    infinite: true,
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    prevArrow:
                    '<button type="button" class="slick-prev "><i class="bi bi-arrow-left"></i></button>',
                    nextArrow:
                    '<button type="button" class="slick-next "><i class="bi bi-arrow-right"></i></button>', 
                    responsive: [
                    {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        }
                    },
                    {
                    breakpoint: 541,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        }
                    }
                ]
                });
            }( jQuery ) );
        </script>
    <?php }
}