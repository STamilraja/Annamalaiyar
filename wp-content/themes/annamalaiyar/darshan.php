<?php /* Template Name: Darshan Page */ ?>
<?php get_header(); ?>
			<!-- Container -->

			<main>
					<!-- Welcome Content Section  -->
	        <section class="bg-primary">
	            <div class="container center767">
									<h1><?=get_the_title();?></h1>
									<p><?=apply_filters('the_content', $post->post_content);?></p>
	            </div>
	        </section>

	    </main>
			<!-- Footer Content-->
		  <?php include 'footer.php'?>
		</div>
  </body>
</html>
