<?php get_header(); ?>
			<!-- Container -->

			<main>
					<!-- Welcome Content Section  -->
	        <section class="bg-primary">
	            <div class="container center767">
									<?php
										$page = get_page_by_title( 'Welcome Content' );
										$content = apply_filters('the_content', $page->post_content);
										echo $content;
									?>
	            </div>
	        </section>
					<div class="container center767">
							<?php
								// $page = get_page_by_title( 'Home Articles' );
								// $content = apply_filters('the_content', $page->post_content);
								// echo $content;
							?>
					</div>
	        <section class="well2 bg-secondary">
	            <div class="container">
	                <div class="owl-carousel">
											<?php
												$page = get_page_by_title( 'Home Content1' );
												$content = apply_filters('the_content', $page->post_content);
												echo substr($content,3,-3);
											?>
	                </div>
	            </div>
	        </section>

	        <section class="parallax" data-url="<?php echo get_stylesheet_directory_uri();?>/assets/images/annamalaiyar_slide1.jpg" data-mobile="true" data-speed="0.7">
	            <div class="container">
	                <div class="row">

	                    <blockquote class="blockquote1 center767">
	                        <div class="col-md-4">
	                            <cite class="md-add2">Bhagavad Gita:</cite>
	                        </div>
	                        <div class="col-md-8 border-add border-add__mod">
	                            <q>"Fear not what is not real, never <br/> was and never will be. What is real, <br/> always
	                                was and
	                                cannot be <br/> destroyed."</q>
	                        </div>
	                    </blockquote>
	                </div>
	            </div>
	        </section>

	        <section class="well5 bg-secondary">
	            <div class="container">
	                <h2 class="ttu">Articles</h2>

	                <div class="row row-eq-height">

										<?php query_posts('cat=4&showposts=3&order=ASC'); ?>
											<?php while (have_posts()) : the_post();
												$args = array('post_type' => 'attachment', 'post_parent' => $post->ID);
											  	$attachments = get_posts( $args );
											  ?>
												<div class="col-md-4 col-sm-4 col-xs-12" style="vertical-align:bottom;">
		                        <article class="wow fadeInUp"  style="vertical-align:bottom;" data-wow-duration="2s" data-wow-delay="0.3s">
		                            <time class="ff__mod" datetime="2015-01-01">16/08/2015</time>
		                            <h4 class="ttu ff__mod"><?=get_the_title();?></h4>
																<p> <?php $content=apply_filters('the_content', $post->post_content);
																	$postOutput = preg_replace('/<img[^>]+./','', $content);
																	echo substr($postOutput,200);
																?></p>

		                        </article>
														<div class="align-bottom" style="vertical-align:bottom;bottom:0 !important;"><a href="#" class="btn btn-primary btn__mod align-bottom">read more</a></div>
		                    </div>
												<?php endwhile;?>
	                 </div>
	            </div>
	        </section>

	        <section class="well5">
	            <div class="container">
	                <h2 class="ttu">Gallery</h2>

										<?php
											// $page = get_page_by_title( 'Gallery' );
											// $content = apply_filters('the_content', $page->post_content);
											// echo $content;
										?>


	                <div class="row offs">
											<div class="col-md-4 col-sm-4 col-xs-12">
	                        <a class="thumb thumbnail2" data-fancybox-group="1" href="<?php echo get_stylesheet_directory_uri();?>/assets/images/page-1_img08.jpg">
	                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/page-1_img08.jpg" alt=""/>

	                            <span class="thumb_overlay"></span>
	                        </a>
	                    </div>

	                    <div class="col-md-4 col-sm-4 col-xs-12">
	                        <a class="thumb thumbnail2" data-fancybox-group="1" href="<?php echo get_stylesheet_directory_uri();?>/assets/images/page-1_img09.jpg">
	                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/page-1_img09.jpg" alt=""/>

	                            <span class="thumb_overlay"></span>
	                        </a>
	                    </div>

	                    <div class="col-md-4 col-sm-4 col-xs-12">
	                        <a class="thumb thumbnail2" data-fancybox-group="1" href="<?php echo get_stylesheet_directory_uri();?>/assets/images/page-1_img10.jpg">
	                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/page-1_img10.jpg" alt=""/>

	                            <span class="thumb_overlay"></span>
	                        </a>
	                    </div>
	                </div>

	                <div class="row text-center">
	                    <div class="col-md-4 col-sm-4 col-xs-12">
	                        <a class="thumb thumbnail2" data-fancybox-group="1" href="<?php echo get_stylesheet_directory_uri();?>/assets/images/page-1_img11.jpg">
	                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/page-1_img11.jpg" alt=""/>

	                            <span class="thumb_overlay"></span>
	                        </a>
	                    </div>

	                    <div class="col-md-4 col-sm-4 col-xs-12">
	                        <a class="thumb thumbnail2" data-fancybox-group="1" href="<?php echo get_stylesheet_directory_uri();?>/assets/images/page-1_img12.jpg">
	                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/page-1_img12.jpg" alt=""/>

	                            <span class="thumb_overlay"></span>
	                        </a>
	                    </div>

	                    <div class="col-md-4 col-sm-4 col-xs-12">
	                        <a class="thumb thumbnail2" data-fancybox-group="1" href="<?php echo get_stylesheet_directory_uri();?>/assets/images/page-1_img13.jpg">
	                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/page-1_img13.jpg" alt=""/>

	                            <span class="thumb_overlay"></span>
	                        </a>
	                    </div>

	                    <a href="<?php echo get_home_url();?>/index.php/gallery/" class="btn btn-default btn-sm">View all</a>
	                </div>
	            </div>
	        </section>
	    </main>
			<!-- Footer Content-->
		  <?php include 'footer.php'?>
		</div>
  </body>
</html>
