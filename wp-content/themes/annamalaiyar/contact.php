<?php /* Template Name: Contact Page */ ?>
<?php get_header(); ?>
			<!-- Container -->

			<main>
					<!-- Welcome Content Section  -->
	        <section class="bg-primary bg-alt">
	            <div class="container container-padding center767">
									<h2><?=get_the_title();?></h2>
									<?php
										// $page = get_page_by_title( 'Contact Us' );
										// $content = apply_filters('the_content', $page->post_content);
										// echo $content;
									?>
									<?php echo do_shortcode( '[pirate_forms]' ) ?>
	            </div>
	        </section>

	    </main>
			<!-- Footer Content-->
		  <?php include 'footer.php'?>
		</div>
  </body>
</html>
