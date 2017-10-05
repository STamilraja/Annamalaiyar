<?php /* Template Name: News Page */ ?>
<?php get_header(); ?>
			<!-- Container -->

			<main>
				<section class="well5 bg-secondary">
						<div class="container">
								<h2 class="ttu">News</h2>

								<div class="row">

									<?php query_posts('cat=5&showposts=3&order=ASC'); ?>
										<?php while (have_posts()) : the_post();
											$args = array('post_type' => 'attachment', 'post_parent' => $post->ID);
												$attachments = get_posts( $args );
											?>
											<div class="col-md-12 col-sm-12 col-xs-12">
													<article class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
															<time class="ff__mod" datetime="2015-01-01">16/08/2015</time>
															<h4 class="ttu ff__mod"><?=get_the_title();?></h4>
															<p> <?php $content=apply_filters('the_content', $post->post_content);
																$postOutput = preg_replace('/<img[^>]+./','', $content);
																echo $postOutput;
															?></p>
															<a href="#" class="btn btn-primary btn__mod">read more</a>
													</article>
											</div>
											<?php endwhile;?>
								</div>
						</div>
				</section>
	    </main>
			<!-- Footer Content-->
		  <?php include 'footer.php'?>
		</div>
  </body>
</html>
