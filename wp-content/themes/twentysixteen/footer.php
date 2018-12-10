<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
	<section id="featured-topics" class="slab clearfix">
		<div class="featured-topics container">
			<div class="viewport">
				<div class="trending-links">
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
							<h5 class="subheading"><a href="https://vina.com/travel/">CẨM NANG DU LỊCH</a></h5>
							<ul>
								<li><a href="https://vina.com/travel/hanoi/">Du lịch Hà Nội</a></li>
								<li><a href="https://vina.com/travel/ho-chi-minh-city/">Du lịch Hồ Chí Minh</a></li>
								<li><a href="https://vina.com/travel/da-nang/">Du lịch Đà Nẵng</a></li>
								<li><a href="https://vina.com/travel/da-lat/">Du lịch Đà Lạt</a></li>
								<li><a href="https://vina.com/travel/hoi-an/">Du lịch Hội An</a></li>
								<li><a href="https://vina.com/travel/halong-bay/">Du lịch Sapa</a></li>
							</ul>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
							<h5 class="subheading"><a href="https://vina.com/food/">ĂN CHƠI ẨM THỰC</a></h5>
							<ul class="fancy">
								<li><a href="https://vina.com/food/north/">North Vietnam</a></li>
								<li><a href="https://vina.com/food/central/">Central Vietnam</a></li>
								<li><a href="https://vina.com/food/south/">South Vietnam</a></li>
								<li><a href="https://vina.com/food/traditional-vietnamese-food/">Traditional Vietnam Food</a></li>
								<li><a href="https://vina.com/food/vietnamese-street-food/">Vietnam Street Food</a></li>
							</ul>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
							<h5 class="subheading"><a href="https://vina.com/photos/">KHÁCH SẠN VIỆT NAM</a></h5>
							<ul class="fancy">
								<li><a href="https://vina.com/photos/hanoi/">Khách sạn Hà Nội</a></li>
								<li><a href="https://vina.com/photos/ho-chi-minh/">Khách sạn Đà Nẵng</a></li>
								<li><a href="https://vina.com/photos/da-nang/">Khách sạn Nha Trang</a></li>
								<li><a href="https://vina.com/photos/dalat/">Khách sạn Sapa</a></li>
								<li><a href="https://vina.com/photos/quang-nam/hoi-an/">Khách sạn Hội An</a></li>
								<li><a href="https://vina.com/photos/quang-ninh/halong-bay/">Khách sạn Đà Lạt</a></li>
							</ul>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
							<h5 class="subheading"><a href="https://vina.com/cafe/">HÌNH ẢNH MUÔN MÀU</a></h5>
							<ul class="fancy"></ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<footer>
		<div class="container">
			<div class="col-lg-2 col-md-3 col-sm-3 hidden-xs">
				<div class="logo-footer">
					<img src="<?php echo get_template_directory_uri(); ?>/images/logo-footer.png" alt="<?php bloginfo( 'name' ); ?>" id="logo-footer" />
				</div>
			</div>
			<div class="col-lg-4 visible-lg">
				<div class="row">
					<p class="site-tile-left">Copyright &copy; 2018</p>
					<h1 class="site-title"><a href="<?php echo get_home_url(); ?>" title="<?php bloginfo( 'name' ); ?>">HaiAu</a></h1>
					<p class="site-tile-right">. All Rights Reserved.</p>
				</div>
				<div itemscope="" itemtype="http://schema.org/LocalBusiness">
					<div itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress">
						<span itemprop="streetAddress">72 Miếu Đầm</span>, <span itemprop="addressLocality">Mễ Trì</span>, <span itemprop="addressRegion">Nam Từ Liêm, Hà Nội.</span>
						<br /> View HaiAu on <a href="https://www.google.com/maps/place/C%C3%B4ng+Ty+CP+H%E1%BA%A3i+%C3%82u+Vi%E1%BB%87t+Nam/@21.0059191,105.7803985,17z/data=!3m1!4b1!4m2!3m1!1s0x3135acacce2bbccd:0xb8b1593143822d86" target="_blank" rel="Nofollow">Google Maps</a><span class="hidden" itemprop="email">admin@haiau.com</span> <span itemprop="name" class="hidden">Tập Đoàn Hải Âu – Thương Hiệu Điện Lạnh & Bếp Công Nghiệp Hàng Đầu VN</span>
						<br />Follow HaiAu on <a href="#" target="_blank" rel="publisher">Google Plus</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-5 col-sm-5 hidden-xs">
				<h4>HaiAu Today | Follow us:</h4>
				<span class="bottom-social">
				<a href="https://www.facebook.com/#/" target="_blank"><i
				class="fa fa-facebook"></i></a> <a href="#" target="_blank"><i
				class="fa fa-twitter"></i></a> <a href="https://plus.google.com/" target="_blank"><i class="fa fa-google-plus"></i></a> <a href="#" target="_blank"><i class="fa fa-pinterest"></i></a> <a href="#/" target="_blank"><i class="fa fa-rss"></i></a>
			</span>
				<div class="footer-links hidden-xs">
					<?php 
					wp_nav_menu( array(
						'menu' 			=> 'Social Menu' ,
						'container' 	=> '')
					);
				?>
				</div>
			</div>
			<div class="hidden-lg hidden-md hidden-sm col-xs-12 footer-mobile">
				<h4>Vina Today | Follow us:</h4>
				<p><span class="bottom-social"><a
					href="https://www.facebook.com/"><i
					class="fa fa-facebook"></i></a> <a
					href="#"><i
					class="fa fa-twitter"></i></a>
					<a
					href="https://plus.google.com/"><i
					class="fa fa-google-plus"></i></a> <a
					href="#"><i
					class="fa fa-pinterest"></i></a> <a
					href="<?php echo get_home_url(); ?>/rss/"><i
					class="fa fa-rss"></i></a>
				</span>
				</p>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
				<div class="newsletter-content">
					<div class="textwidget hidden-xs">
						<h4><span class="hidden-sm">Đăng ký nhận bản tin</span><span class="visible-sm">Đăng ký nhận bản tin</span></h4>
					</div>
					<div id="email-form-footer">
						<form method="post" class="af-form-wrapper" accept-charset="UTF-8" action="https://www.aweber.com/scripts/addlead.pl" target="edit_new">
							<div style="display: none;">
								<input type="hidden" name="meta_web_form_id" value="1273624904" />
								<input type="hidden" name="meta_split_id" value="" />
								<input type="hidden" name="listname" value="awlist3913805" />
								<input type="hidden" name="redirect" value="http://vkool.com/thank-you/" id="redirect_0d87bdb0fc51a1043da3cf023dd4cad9" />
								<input type="hidden" name="meta_adtracking" value="VKool_Subscribers_Right_Sidebar" />
								<input type="hidden" name="meta_message" value="1001" />
								<input type="hidden" name="meta_required" value="email" />
								<input type="hidden" name="meta_tooltip" value="email||Enter your email address here" />
							</div>
							<div id="af-form-1273624904" class="af-form">
								<div id="af-body-1273624904" class="af-body af-standards">
									<div class="af-element">
										<label class="previewLabel" for="awf_field-74058140"></label>
										<div class="af-textWrap">
											<input class="text" id="awf_field-74058140" type="text" name="email" value="Enter your email address here" tabindex="500" onfocus=" if (this.value == 'Enter your email address here') { this.value = ''; }" onblur="if (this.value == '') { this.value='Enter your email address here';} " />
										</div>
										<div class="af-clear"></div>
									</div>
									<div class="af-element buttonContainer">
										<input name="submit" class="submit" type="submit" value="Let Me In" tabindex="501" />
										<div class="af-clear"></div>
									</div>
									<span class="icon-email"><i class="fa fa-envelope"></i></span>
								</div>
							</div>
							<div style="display: none;"><img src="https://forms.aweber.com/form/displays.htm?id=jEzszGxMLJwMLA==" alt="" />
							</div>
						</form>
						<script type="text/javascript">
							(function() {
								var IE = /*@cc_on!@*/ false;
								if (!IE) {
									return;
								}
								if (document.compatMode && document.compatMode == 'BackCompat') {
									if (document.getElementById("af-form-1273624904")) {
										document.getElementById("af-form-1273624904").className = 'af-form af-quirksMode';
									}
									if (document.getElementById("af-body-1273624904")) {
										document.getElementById("af-body-1273624904").className = "af-body inline af-quirksMode";
									}
									if (document.getElementById("af-header-1273624904")) {
										document.getElementById("af-header-1273624904").className = "af-header af-quirksMode";
									}
									if (document.getElementById("af-footer-1273624904")) {
										document.getElementById("af-footer-1273624904").className = "af-footer af-quirksMode";
									}
								}
							})();
						</script>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<a id="back-to-top" href="#" rel="nofollow"></a>
    </div>
<?php wp_footer(); ?>	
<!-- hotline, zalo -->
<a href="tel:0905841755" class="hotlinemp" rel="nofollow">
	<div class="mypage-alo-phone" style="">
		<div class="animated infinite zoomIn mypage-alo-ph-circle">
		</div>
		<div class="animated infinite pulse mypage-alo-ph-circle-fill">
		</div>
		<div class="animated infinite tada mypage-alo-ph-img-circle">
		</div>
	</div>
</a>
<a href="https://zalo.me/0399687332" class="numberzalo" rel="nofollow">
	<img src="https://lh3.googleusercontent.com/X7JUHmDCeT845_MgAttYi_F8RsiHQr9ufnRqk2SiyiJZ1KBZgZek9wFOMuOwDuy4leA=w300" alt="0399687332">
</a>
<!-- end -->		
</body>
</html>