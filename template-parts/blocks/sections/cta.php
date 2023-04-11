<?php

/**
 * "CTA" Block Template.
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
$className = 'w-cta';

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
    <div class="cta">
        <div class="container">
            <div class="cta-main">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="cta-left">
                            <div class="question">
                                hỏi đáp nhanh 
                            </div>

                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h2 class="mb-0">
                                            <button class="btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                <p class="light active">Kem Yoosun rau má có phải là thuốc không?</p>
                                                <div class="view">
													<div class="show">
                                                        <i class="bi bi-arrow-down-short"></i>
													</div>
													<div class="hide">
                                                        <i class="bi bi-x"></i>
													</div>
												</div>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="card-body">
                                            Yoosun rau má KHÔNG PHẢI là thuốc. Sản phẩm được Sở y tế Hà Nội cấp phép lưu hành với chức năng của một sản phẩm dược mỹ phẩm. Vì thế, người dùng hoàn toàn có thể tự ra hiệu thuốc mua để dùng khi gặp các vấn đề về da như mẩn ngứa, rôm sảy, hăm da, côn trùng cắn…
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h2 class="mb-0">
                                            <button class="btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                <p class="light">Kem Yoosun rau má có chứa Corticoid không?</p>
                                                <div class="view">
													<div class="show">
                                                        <i class="bi bi-arrow-down-short"></i>
													</div>
													<div class="hide">
                                                        <i class="bi bi-x"></i>
													</div>
												</div>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                        <div class="card-body">
                                        Yoosun rau má KHÔNG PHẢI là thuốc. Sản phẩm được Sở y tế Hà Nội cấp phép lưu hành với chức năng của một sản phẩm dược mỹ phẩm. Vì thế, người dùng hoàn toàn có thể tự ra hiệu thuốc mua để dùng khi gặp các vấn đề về da như mẩn ngứa, rôm sảy, hăm da, côn trùng cắn…
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h2 class="mb-0">
                                            <button class="btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                <p class="light">Yoosun rau má có dùng được cho trẻ sơ sinh không?</p>
                                                <div class="view">
													<div class="show">
                                                        <i class="bi bi-arrow-down-short"></i>
													</div>
													<div class="hide">
                                                        <i class="bi bi-x"></i>
													</div>
												</div>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                        <div class="card-body">
                                        Yoosun rau má KHÔNG PHẢI là thuốc. Sản phẩm được Sở y tế Hà Nội cấp phép lưu hành với chức năng của một sản phẩm dược mỹ phẩm. Vì thế, người dùng hoàn toàn có thể tự ra hiệu thuốc mua để dùng khi gặp các vấn đề về da như mẩn ngứa, rôm sảy, hăm da, côn trùng cắn…
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="headingFour">
                                        <h2 class="mb-0">
                                            <button class="btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                <p class="light">Kem bôi da Yoosun rau má trị mụn có tốt không?</p>
                                                <div class="view">
													<div class="show">
                                                        <i class="bi bi-arrow-down-short"></i>
													</div>
													<div class="hide">
                                                        <i class="bi bi-x"></i>
													</div>
												</div>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                        <div class="card-body">
                                        Yoosun rau má KHÔNG PHẢI là thuốc. Sản phẩm được Sở y tế Hà Nội cấp phép lưu hành với chức năng của một sản phẩm dược mỹ phẩm. Vì thế, người dùng hoàn toàn có thể tự ra hiệu thuốc mua để dùng khi gặp các vấn đề về da như mẩn ngứa, rôm sảy, hăm da, côn trùng cắn…
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="headingFive">
                                        <h2 class="mb-0">
                                            <button class="btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                <p class="light">Yoosun rau má có trị thâm không?</p>
                                                <div class="view">
													<div class="show">
                                                        <i class="bi bi-arrow-down-short"></i>
													</div>
													<div class="hide">
                                                        <i class="bi bi-x"></i>
													</div>
												</div>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                                        <div class="card-body">
                                        Yoosun rau má KHÔNG PHẢI là thuốc. Sản phẩm được Sở y tế Hà Nội cấp phép lưu hành với chức năng của một sản phẩm dược mỹ phẩm. Vì thế, người dùng hoàn toàn có thể tự ra hiệu thuốc mua để dùng khi gặp các vấn đề về da như mẩn ngứa, rôm sảy, hăm da, côn trùng cắn…
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="headingSix">
                                        <h2 class="mb-0">
                                            <button class="btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                                <p class="light">Kem Yoosun rau má có trị mụn ẩn không?</p>
                                                <div class="view">
													<div class="show">
                                                        <i class="bi bi-arrow-down-short"></i>
													</div>
													<div class="hide">
                                                        <i class="bi bi-x"></i>
													</div>
												</div>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                                        <div class="card-body">
                                        Yoosun rau má KHÔNG PHẢI là thuốc. Sản phẩm được Sở y tế Hà Nội cấp phép lưu hành với chức năng của một sản phẩm dược mỹ phẩm. Vì thế, người dùng hoàn toàn có thể tự ra hiệu thuốc mua để dùng khi gặp các vấn đề về da như mẩn ngứa, rôm sảy, hăm da, côn trùng cắn…
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="headingSeven">
                                        <h2 class="mb-0">
                                            <button class="btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                                <p class="light">Yoosun rau má có trị mụn đầu đen không?</p>
                                                <div class="view">
													<div class="show">
                                                        <i class="bi bi-arrow-down-short"></i>
													</div>
													<div class="hide">
                                                        <i class="bi bi-x"></i>
													</div>
												</div>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
                                        <div class="card-body">
                                        Yoosun rau má KHÔNG PHẢI là thuốc. Sản phẩm được Sở y tế Hà Nội cấp phép lưu hành với chức năng của một sản phẩm dược mỹ phẩm. Vì thế, người dùng hoàn toàn có thể tự ra hiệu thuốc mua để dùng khi gặp các vấn đề về da như mẩn ngứa, rôm sảy, hăm da, côn trùng cắn…
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="headingEight">
                                        <h2 class="mb-0">
                                            <button class="btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                                <p class="light">Dùng Yoosun rau má có bắt nắng không?</p>
                                                <div class="view">
													<div class="show">
                                                        <i class="bi bi-arrow-down-short"></i>
													</div>
													<div class="hide">
                                                        <i class="bi bi-x"></i>
													</div>
												</div>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
                                        <div class="card-body">
                                        Yoosun rau má KHÔNG PHẢI là thuốc. Sản phẩm được Sở y tế Hà Nội cấp phép lưu hành với chức năng của một sản phẩm dược mỹ phẩm. Vì thế, người dùng hoàn toàn có thể tự ra hiệu thuốc mua để dùng khi gặp các vấn đề về da như mẩn ngứa, rôm sảy, hăm da, côn trùng cắn…
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-12">
                        <div class="cta-right">
                            <img src="<?=  get_stylesheet_directory_uri() . '/assets/images/image 18 (3).webp' ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php 
add_action( 'wp_footer', 'ctascript', 99, 1 );
if (!function_exists('ctascript'))   {
    function ctascript() { ?>
        <script async>
            ( function ( $ ) {
                var header = document.getElementById("accordionExample");
	    var btns = header.getElementsByClassName("light");
	    for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
	    var current = document.getElementsByClassName("active");
	    current[0].className = current[0].className.replace(" active", "");
        console.log(current)
	    this.className += " active";
	    });
	    }
            }( jQuery ) );

       

        </script>
    <?php }
}