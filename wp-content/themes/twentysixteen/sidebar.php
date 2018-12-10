<?php
/**
 * The template for the sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<?php if ( is_active_sidebar( 'sidebar-1' )  ) : ?>
	<aside id="secondary" class="sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</aside><!-- .sidebar .widget-area -->
<?php endif; ?>

<?php if( !is_home() ) { ?>
<div id="sidebar" class="edit-hidden-xs">
	<div id="email-form-sidebar-single">
		<span class="email-form-sidebar-single-title">Want Wrap-up of this week's best articles from Vina.com?</span>
		<form method="post" class="af-form-wrapper" accept-charset="UTF-8" action="https://www.aweber.com/scripts/addlead.pl" target="edit_new">
			<div style="display: none;">
				<input type="hidden" name="meta_web_form_id" value="1273624904">
				<input type="hidden" name="meta_split_id" value="">
				<input type="hidden" name="listname" value="awlist3913805">
				<input type="hidden" name="redirect" value="http://vina.com/thank-you/" id="redirect_0d87bdb0fc51a1043da3cf023dd4cad9">
				<input type="hidden" name="meta_adtracking" value="Vina_Subscribers_Right_Sidebar">
				<input type="hidden" name="meta_message" value="1001">
				<input type="hidden" name="meta_required" value="email">
				<input type="hidden" name="meta_tooltip" value="email||Enter your email address here">
			</div>
			<div id="af-form-1273624904" class="af-form">
				<div id="af-body-1273624904" class="af-body af-standards">
					<div class="af-element">
						<label class="previewLabel" for="awf_field-74058140"></label>
						<div class="af-textWrap">
							<input class="text" id="awf_field-74058140" type="text" name="email" value="Enter your email address here" tabindex="500" onfocus=" if (this.value == 'Enter your email address here') { this.value = ''; }" onblur="if (this.value == '') { this.value='Enter your email address here';} ">
						</div>
						<div class="af-clear"></div>
					</div>
					<div class="af-element buttonContainer">
						<input name="submit" class="submit" type="submit" value="Let Me In" tabindex="501">
						<div class="af-clear"></div>
					</div>
				</div>
			</div>
			<div style="display: none;"><img src="https://forms.aweber.com/form/displays.htm?id=jEzszGxMLJwMLA==" alt="">
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
	<div id="socical-baner">
		<div id="count-link-socical-feedburner" class="count-link-socical">
			<a class="count-link-socical-icon" href="" target="_blank"><span><i class="fa fa-fw"></i></span><p>Subscribe to Feeds</p></a>
			<div class="count-link-socical-right">
				<span class="count-value"></span>
				<span class="count-link-socical-des">Subscribers</span>
			</div>
		</div>
		<div id="count-link-socical-facebook" class="count-link-socical">
			<a class="count-link-socical-icon" href="" target="_blank"><span><i class="fa fa-fw"></i></span><p>Like us on Facebook</p></a>
			<div class="count-link-socical-right">
				<span class="count-value"></span>
				<span class="count-link-socical-des">FANS</span>
			</div>
		</div>
		<div id="count-link-socical-google" class="count-link-socical">
			<a class="count-link-socical-icon" href="" target="_blank"><span><i class="fa fa-fw"></i></span><p>Follow us on Google+</p></a>
			<div class="count-link-socical-right">
				<span class="count-value"></span>
				<span class="count-link-socical-des">Followers</span>
			</div>
		</div>
		<div id="count-link-socical-twitter" class="count-link-socical">
			<a class="count-link-socical-icon" href="" target="_blank"><span><i class="fa fa-fw"></i></span><p>Follow us on Twitter</p></a>
			<div class="count-link-socical-right">
				<span class="count-value"></span>
				<span class="count-link-socical-des">Followers</span>
			</div>
		</div>
		<div id="count-link-socical-slideshare" class="count-link-socical">
			<a class="count-link-socical-icon" href="" target="_blank"><span><i class="fa fa-fw"></i></span><p>Follow us on Slideshare</p></a>
			<div class="count-link-socical-right">
				<span class="count-value"></span>
				<span class="count-link-socical-des">Followers</span>
			</div>
		</div>
	</div>

	<div class="widget popular-posts">
		<h3 class="widget-title"><span>TRENDING POSTS</span></h3>
		<ul class="clearfix">
			<?php
				$i = 0;
				query_posts('orderby=meta_value_num&order=DESC&posts_per_page=5&meta_key=views');
				while(have_posts()) : the_post();
				$len = count(the_post);
				if ($i == 0) {
			?>
				<li>  
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('post_sidebar', array('class' => 'theme-thumb')); ?></a>               
					<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
				</li>
			<?php
				}
				endwhile; 
				wp_reset_query(); 
			?>
		</ul>
	</div>
	<div class="ads-xs-botom1 clearfix"></div>
</div>
<?php } ?>