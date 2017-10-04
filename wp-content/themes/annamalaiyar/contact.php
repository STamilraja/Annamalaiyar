<?php /* Template Name: Contact Page */ ?>
<?php get_header(); ?>
			<!-- Container -->

			<main>
					<!-- Welcome Content Section  -->
	        <section class="bg-primary">
	            <div class="container center767">
									<?php
										// $page = get_page_by_title( 'Contact Us' );
										// $content = apply_filters('the_content', $page->post_content);
										// echo $content;
									?>
	            </div>
							<?php echo do_shortcode( '[pirate_forms]' ) ?>
	        </section>

	    </main>
			<!-- Footer Content-->
		  <?php include 'footer.php'?>
		</div>
  </body>
</html>
