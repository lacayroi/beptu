<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<section id="main-body">
    <div class="container">
        <div class="row">
			<div id="content">
				<div id="featured-posts">
					<div class="row">
						<div id="category-posts">
							<div class="row">
							<?php if ( have_posts() ) : ?>
							
								<?php custom_breadcrumbs(); ?>

								<header class="page-header">
									<?php
										the_archive_title( '<h1 class="page-title">', '</h1>' );
										the_archive_description( '<div class="taxonomy-description">', '</div>' );
									?>
								</header><!-- .page-header -->

								<?php
								
								$categories = get_the_category();
								$cat_name = $categories[0]->slug;
								?>
								
								<!-- start featured post -->
								<div class="archive-feature-category">
									<div class="slider row class-test3">
										<div class="main-slider">
											<div class="featured-posts" id="featured-posts">
											<?php
												$i = 0;
												$r = new WP_Query( array(
													'meta_key'=> meta-checkbox,
													'meta_value'       => 'yes',
													'category_name'       => $cat_name,
													'posts_per_page'         => 3,
													'order_by' => ID,
												) );
												while($r->have_posts()) : $r->the_post();
												$len = count($r->the_post);
												$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'post_featured_archive' );
												if ($i == 0) {
											?>
												<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
													<div class="featured_post hentry" itemscope itemtype="http://schema.org/Article">
														
														<meta content="<?php echo $image[0]; ?>" itemprop="image">
														<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>">
														</a>
														<div class="slider-wraper-inner">
															<h2 class="entry-title slider-title first" itemprop="name headline"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
															<div class="hidden">
																<time itemprop="dateCreated" class="meta-date updated" datetime="2017-01-15T08:18:27+00:00">
																	<meta itemprop="datePublished" content="<?php the_time(get_option('date_format')); ?>"><?php the_time(get_option('date_format')); ?></time>
																<span itemprop="author" class="fn"><i class="fa fa-user"></i> 
																	<?php 
																		$author_id=$post->post_author;
																		echo the_author_meta( 'display_name' , $author_id ); 
																	?>
																</span>
															</div>
															<div class="share-wrap">
																<div class="share" id="share_<?php echo $post->ID; ?>">
																	<span id="fttext_share_<?php echo $post->ID; ?>" class="text-share"><i class="fa fa-share"></i></span>
																	<div id="fticon_share_<?php echo $post->ID; ?>" class="social hidden">
																		<a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-facebook"></i></a>
																		<a href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-twitter"></i></a>
																		<a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-google-plus"></i></a>
																		<a href="https://www.pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>" title="Share on Pinterest" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-pinterest"></i></a>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
													<div class="row">
													<?php 
														} else {
													?>
														<div class="col-lg-12 col-md-12 col-sm-6 col-xs-12 mgb-10">
															<?php 
																$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'post_cat_archive' );
															?>
															<div class="featured_post hentry" itemscope itemtype="http://schema.org/Article">
																<meta content="<?php echo $image[0]; ?>" itemprop="image">
																<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>">
																</a>
																<div class="slider-wraper-inner">
																	<h2 class="entry-title slider-title count" itemprop="name headline"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
																	<div class="hidden">
																		<time itemprop="dateCreated" class="meta-date updated" datetime="2017-01-07T16:13:15+00:00">
																			<meta itemprop="datePublished" content="<?php the_time(get_option('date_format')); ?>"><?php the_time(get_option('date_format')); ?></time>
																		<span itemprop="author" class="fn"><i class="fa fa-user"></i> 
																			<?php 
																				$author_id=$post->post_author;
																				echo the_author_meta( 'display_name' , $author_id ); 
																			?>
																		</span>
																	</div>
																	<div class="share-wrap">
																		<div class="share" id="share_<?php echo $post->ID; ?>">
																			<span id="fttext_share_<?php echo $post->ID; ?>" class="text-share"><i class="fa fa-share"></i></span>
																			<div id="fticon_share_<?php echo $post->ID; ?>" class="social hidden">
																				<a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-facebook"></i></a>
																				<a href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-twitter"></i></a>
																				<a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-google-plus"></i></a>
																				<a href="https://www.pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>" title="Share on Pinterest" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-pinterest"></i></a>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<?php
															}
															$i++;
															endwhile; 
															wp_reset_query();
														?>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- end featured post -->
								
								
								<main id="main" class="site-main main-feed main-archive" role="main">
									
									<div id="vn-main-feed">
										<?php
											global $count_post; 
											$count_post = 0;
										?>
										<?php if (have_posts()) : while (have_posts()) : the_post(); $count_post++; 
										if($count_post == 1): 
												?>
													<div class="vn-entry col-md-4 col-sm-4 col-xs-12 <?php if ($count_post % 2 <> 0) echo ' clear-both-768 clear-both-480'; ?>" itemscope itemtype="http://schema.org/Article">
														<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
															<div class="featured-img">
																<?php //vania_data_over(true, true, true) ?>
																<span itemprop='image' itemscope itemtype='http://schema.org/ImageObject'>
																	<a href="
																		<?php esc_url( the_permalink() ); ?>" itemprop='contentUrl url' title="
																		<?php printf( esc_html__( '%s', 'vania' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">
																		<?php the_post_thumbnail('vn_posts_l_new', array('class' => 'img-responsive','itemprop' => 'image')); ?>
																	</a>
																	<span class="hidden" itemprop='width'>360</span>
																	<span class="hidden" itemprop='height width'>216</span>
																</span>
																<a class="hidden" itemprop="mainEntityOfPage" href="
																	<?php esc_url( the_permalink() ); ?>" title="
																	<?php printf( esc_html__( 'Permalink to %s', 'vania' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">
																</a>
																<?php 
																		the_title( sprintf( '
																<h2 itemprop="name headline" class="hidden-lg hidden-md hidden-sm hidden-xs entry-title entry-title-home-cat">
																	<a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a>
																</h2>' );                                 
																		?>
															</div>
															<div class="entry-content entry-fade">
																<?php the_title( sprintf( '
																<span class="hidden-lg1 hidden-md1 entry-title">
																	<a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a>
																</span>' ); ?>
																<div class="entry-meta">
																	<?php 
																		$author_id=$post->post_author;
																		echo the_author_meta( 'display_name' , $author_id ); 
																	?>
																	<br/>
																	<time itemprop="dateCreated" class="meta-date updated" datetime="<?php the_time(get_option('date_format')); ?>">
																		<meta itemprop="datePublished" content="<?php the_time(get_option('date_format')); ?>"><?php the_time(get_option('date_format')); ?>
																	<span class="vcard author hidden"><span itemprop="author" class="fn"><i class="fa fa-user"></i> 
																	<?php 
																		$author_id=$post->post_author;
																		echo the_author_meta( 'display_name' , $author_id ); 
																	?></span></span>
																	<div class="share-wrap">
																		<div class="share" id="share_btcn<?php echo $post->ID; ?>">
																			<span id="fttext_share_btcn<?php echo $post->ID; ?>" class="text-share"><i class="fa fa-share"></i></span>
																			<div id="fticon_share_btcn<?php echo $post->ID; ?>" class="social hidden">
																				<a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-facebook"></i></a>
																				<a href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-twitter"></i></a>
																				<a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-google-plus"></i></a>
																				<a href="https://www.pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>" title="Share on Pinterest" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-pinterest"></i></a>
																			</div>
																		</div>
																	</div>
																</div>
																<ul class="list-prev-post">
														<?php else: ?>
															<li>
																<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
															</li>
														<?php endif; ?>  
														
													<?php if($count_post == 3){ echo '</ul></div></article></div>'; $count_post =0;} ?>                                    
										
										<?php endwhile; else : 
											get_template_part( 'no-results' );
															
										endif; ?>
														
									</div> <!-- /vn-main-feed -->
									

									<?php if ( $wp_query->max_num_pages > 1 )  { hr_pagenavi(); }; ?>


								</main> <!-- /main -->
							
							<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>
