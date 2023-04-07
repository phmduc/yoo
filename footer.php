			<?php
				// If Single or Archive (Category, Tag, Author or a Date based page)
				if ( is_single() || is_archive() ) :
			?>
			</div><!-- /.col -->

			<?php
						// get_sidebar();
					?>

			</div><!-- /.row -->
			<?php
				endif;
			?>
			</main><!-- /#main -->
			<footer id="footer">
				<section class="align-full copyright">
					<div class="social">
						<div class="container">
							<div class="row ">
								<div class="col-12">
									<div class="divSocial d-flex">
										<div class="logo">
											<img src="<?=  get_stylesheet_directory_uri() . '/assets/images/image 25.webp' ?>" class="img-fluid" alt="">
										</div> 
										<div class="list">
											<h6>Ghé thămhăm hệ sinh thái của Yoosun rau má.</h6>
											<ul>
												<li>
													<a href="#">
														<div class="icon youtube"><i class="bi bi-youtube"></i></div>
														/@yoosunrauma9097
														SS</a>
													</li>
													<li>
														<a href="#">
															<div class="icon tiktok"><i class="bi bi-tiktok"></i></div>
															<div class="iconImg "><img src="<?=  get_stylesheet_directory_uri() . '/assets/images/image 46.webp' ?>" class="img-fluid" alt=""></div>
														/@yoosunrauma
													</a>
												</li>
												<li><a href="#"><div class="icon facebook"><i class="bi bi-facebook"></i></div>/yoosun.vn</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="recommendation text-center">
						<p>* Sản phẩm này không phải là thuốc. Kết quả có thể khác nhau tùy theo cơ địa của mỗi người</p>
					</div>
					<div class="certification">
						<div class="container">
							<div class="row">
								<div class="col-12">
									<div class="divCertifi">
										<div class="logoCertifi"><img src="<?=  get_stylesheet_directory_uri() . '/assets/images/image 26.webp' ?>" class="img-fluid" alt=""></div>
										<div class="logoCertifi"><img src="<?=  get_stylesheet_directory_uri() . '/assets/images/image 27.webp' ?>" class="img-fluid" alt=""></div>
										<p class="text">Số giấy chứng nhận ĐKKD: 0102000559 do phòng ĐKKD<br>Sở Kế hoạch và Đầu tư Thành phố Hà Nội cấp ngày 23/05/2000.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="branchs" style="background: rgba(3, 149, 44, 0.69);">
						<div class="container">
							<div class="row">
								<div class="col-12">
									<h4 class="text-center" style="color: #FFFFFF;">CÁC CHI NHÁNH CỦA ĐẠI BẮC GROUP</h4>
									<div class="listBranchs">
										<ul class="box">
											<li>
												<div class="icon"></div>
												<div class="nameBranch">
													<img src="<?=  get_stylesheet_directory_uri() . '/assets/images/Group 833.webp' ?>" class="img-fluid" alt="">
												</div>
											</li>
											<li>
												<div class="icon"><i class="bi bi-geo-alt"></i></div>
												<p>Số 11 đường Công nghiệp 4, KCN Sài Đồng B, P. Thạch Bàn, Q.Long Biên, Hà Nội.</p>
											</li>
											<li>
												<div class="icon"><i class="bi bi-telephone"></i></div>
												<p>0243 7761 445</p>
											</li>
											<li>
												<div class="icon"><img src="<?=  get_stylesheet_directory_uri() . '/assets/images/🦆 icon _fax_.webp' ?>" class="img-fluid" alt=""></div>
												<p>0243 7761 448 </p>
											</li>
										</ul>
										<ul class="box">
											<li>
												<div class="icon"></div>
												<div class="nameBranch">
													<img src="<?=  get_stylesheet_directory_uri() . '/assets/images/Group 835.webp' ?>" class="img-fluid" alt="">
												</div>
											</li>
											<li>
												<div class="icon"><i class="bi bi-geo-alt"></i></div>
												<p>315 Ỷ Lan Nguyễn Phi, Phường Hòa Cường Bắc, Quận Hải Châu, TP Đà Nẵng.</p>
											</li>
											<li>
												<div class="icon"><i class="bi bi-telephone"></i></div>
												<p>0236 3638 222</p>
											</li>
											<li>
												<div class="icon"><img src="<?=  get_stylesheet_directory_uri() . '/assets/images/🦆 icon _fax_.webp' ?>" class="img-fluid" alt=""></div>
												<p>0236 3638 224 </p>
											</li>
										</ul>
										<ul class="box">
											<li>
												<div class="icon"></div>
												<div class="nameBranch">
													<img src="<?=  get_stylesheet_directory_uri() . '/assets/images/Group 834.webp' ?>" class="img-fluid" alt="">
												</div>
											</li>
											<li>
												<div class="icon"><i class="bi bi-geo-alt"></i></div>
												<p>25/16/17-21 Lê Thị Kỉnh, Ấp 3, Xã Phước Kiển, Huyện Nhà Bè, Tp. Hồ Chí Minh.</p>
											</li>
											<li>
												<div class="icon"><i class="bi bi-telephone"></i></div>
												<p>028 6265 7038</p>
											</li>
											<li>
												<div class="icon"><img src="<?=  get_stylesheet_directory_uri() . '/assets/images/🦆 icon _fax_.webp' ?>" class="img-fluid" alt=""></div>
												<p>028 6264 6868 </p>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			</footer>
			<?php
		wp_footer();
	?>
			</body>

			</html>