<?php /* Template Name: About Page */ ?>
<?php get_header(); ?>
			<!-- Container -->

			<main>
					<!-- Welcome Content Section  -->
	        <section class="bg-primary">
	            <div class="container center767">
									<h1><?=get_the_title();?></h1>
									<?php
										$page = get_page_by_title( 'About Temple' );
										$content = apply_filters('the_content', $page->post_content);
										echo $content;
									?>
	            </div>
	        </section>

	    </main>
			<!-- Footer Content-->
		  <?php include 'footer.php'?>
		</div>
  </body>
</html>
