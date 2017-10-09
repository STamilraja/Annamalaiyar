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

	        <!-- <section class="well3 bg-secondary">
	            <div class="container">
	                <div class="row">
	                    <div class="col-md-4 col-xs-12 center767">
	                        <div class="thumbnail">
	                            <img class="wow fadeInLeft" data-wow-duration="2s" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/page-1_img05.jpg" alt=""/>
	                            <img class="wow fadeInLeft" data-wow-duration="2s" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/page-1_img06.jpg" alt=""/>
	                            <img class="wow fadeInLeft" data-wow-duration="2s" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/page-1_img07.jpg" alt=""/>
	                        </div>
	                    </div>

	                    <div class="col-md-8 col-sm-12 col-xs-12 center767">
	                        <div class="resp-tabs">
	                            <ul class="resp-tabs-list">
	                                <li>About us</li>
	                                <li>The Staff</li>
	                                <li>New Services</li>
	                                <li>Hot Offers</li>
	                            </ul>
	                            <div class="resp-tabs-container">
	                                <div>
	                                    <h6 class="ttu fw-n">Consectetuer adipiscing elit</h6>

	                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum
	                                        molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit
	                                        varius mi. Cum sociis natoque penatibus et magnis dis parturient montes,
	                                        nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Monc odio,
	                                        gravida at, cursus nec, luctus a, lorem. Maecenas tristique orci ac sem. Duis
	                                        ultricies pharetra magna. Donec accumsan malesuada orci. Donec sit amet eros.
	                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum
	                                        dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum
	                                        vel, cursus eleifend, elit. tor wisi et urna. Aliquam erat volutpat. Duis ac
	                                        turpis. Integer rutrum ante eu lacus.</p>

	                                    <h6 class="ttu fw-n"> Praesent vestibulum molestie lacus</h6>

	                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum
	                                        molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit
	                                        varius mi. Cum sociis natoque penatibus et magnis dis parturient montes,
	                                        nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Monc odio,
	                                        gravida at, cursus nec, luctus a, lorem. Maecenas tristique orci ac sem. Duis
	                                        ultricies pharetra magna. </p>
	                                </div>

	                                <div>
	                                    <h6 class="ttu fw-n"> Praesent vestibulum molestie lacus</h6>

	                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum
	                                        molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit
	                                        varius mi. Cum sociis natoque penatibus et magnis dis parturient montes,
	                                        nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Monc odio,
	                                        gravida at, cursus nec, luctus a, lorem. Maecenas tristique orci ac sem. Duis
	                                        ultricies pharetra magna. </p>

	                                    <h6 class="ttu fw-n">Consectetuer adipiscing elit</h6>

	                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum
	                                        molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit
	                                        varius mi. Cum sociis natoque penatibus et magnis dis parturient montes,
	                                        nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Monc odio,
	                                        gravida at, cursus nec, luctus a, lorem. Maecenas tristique orci ac sem. Duis
	                                        ultricies pharetra magna. Donec accumsan malesuada orci. Donec sit amet eros.
	                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum
	                                        dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum
	                                        vel, cursus eleifend, elit. tor wisi et urna. Aliquam erat volutpat. Duis ac
	                                        turpis. Integer rutrum ante eu lacus.</p>
	                                </div>

	                                <div>
	                                    <h6 class="ttu fw-n">Consectetuer adipiscing elit</h6>

	                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum
	                                        molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit
	                                        varius mi. Cum sociis natoque penatibus et magnis dis parturient montes,
	                                        nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Monc odio,
	                                        gravida at, cursus nec, luctus a, lorem. Maecenas tristique orci ac sem. Duis
	                                        ultricies pharetra magna. Donec accumsan malesuada orci. Donec sit amet eros.
	                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum
	                                        dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum
	                                        vel, cursus eleifend, elit. tor wisi et urna. Aliquam erat volutpat. Duis ac
	                                        turpis. Integer rutrum ante eu lacus.</p>

	                                    <h6 class="ttu fw-n"> Praesent vestibulum molestie lacus</h6>

	                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum
	                                        molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit
	                                        varius mi. Cum sociis natoque penatibus et magnis dis parturient montes,
	                                        nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Monc odio,
	                                        gravida at, cursus nec, luctus a, lorem. Maecenas tristique orci ac sem. Duis
	                                        ultricies pharetra magna. </p>
	                                </div>
	                                <div>
	                                    <h6 class="ttu fw-n"> Praesent vestibulum molestie lacus</h6>

	                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum
	                                        molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit
	                                        varius mi. Cum sociis natoque penatibus et magnis dis parturient montes,
	                                        nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Monc odio,
	                                        gravida at, cursus nec, luctus a, lorem. Maecenas tristique orci ac sem. Duis
	                                        ultricies pharetra magna. </p>

	                                    <h6 class="ttu fw-n">Consectetuer adipiscing elit</h6>

	                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum
	                                        molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit
	                                        varius mi. Cum sociis natoque penatibus et magnis dis parturient montes,
	                                        nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Monc odio,
	                                        gravida at, cursus nec, luctus a, lorem. Maecenas tristique orci ac sem. Duis
	                                        ultricies pharetra magna. Donec accumsan malesuada orci. Donec sit amet eros.
	                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum
	                                        dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum
	                                        vel, cursus eleifend, elit. tor wisi et urna. Aliquam erat volutpat. Duis ac
	                                        turpis. Integer rutrum ante eu lacus.</p>

	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </section> -->

	        <!-- <section class="well4">
	            <div class="container">
	                <div class="row">
	                    <ul class="icon-list">
	                        <li class="col-md-4 col-sm-6 col-xs-6">
	                            <h5 class="ttu"><a href="#">molestie lacus</a></h5>

	                            <p>Lorem ipsum dolor sit amet, conseetuer adipiscing elit. Praesent vestibum molestie
	                                lacusenean nonummy hendrerit.</p>
	                        </li>

	                        <li class="col-md-4 col-sm-6 col-xs-6">
	                            <h5 class="ttu"><a href="#">molestie lacus</a></h5>

	                            <p>Lorem ipsum dolor sit amet, conseetuer adipiscing elit. Praesent vestibum molestie
	                                lacusenean nonummy hendrerit.</p>
	                        </li>

	                        <li class="col-md-4 col-sm-6 col-xs-6">
	                            <h5 class="ttu"><a href="#">molestie lacus</a></h5>

	                            <p>Lorem ipsum dolor sit amet, conseetuer adipiscing elit. Praesent vestibum molestie
	                                lacusenean nonummy hendrerit.</p>
	                        </li>
	                        <li class="col-md-4 col-sm-6 col-xs-6">
	                            <h5 class="ttu"><a href="#">molestie lacus</a></h5>

	                            <p>Lorem ipsum dolor sit amet, conseetuer adipiscing elit. Praesent vestibum molestie
	                                lacusenean nonummy hendrerit.</p>
	                        </li>

	                        <li class="col-md-4 col-sm-6 col-xs-6">
	                            <h5 class="ttu"><a href="#">molestie lacus</a></h5>

	                            <p>Lorem ipsum dolor sit amet, conseetuer adipiscing elit. Praesent vestibum molestie
	                                lacusenean nonummy hendrerit.</p>
	                        </li>

	                        <li class="col-md-4 col-sm-6 col-xs-6">
	                            <h5 class="ttu"><a href="#">molestie lacus</a></h5>

	                            <p>Lorem ipsum dolor sit amet, conseetuer adipiscing elit. Praesent vestibum molestie
	                                lacusenean nonummy hendrerit.</p>
	                        </li>
	                    </ul>
	                </div>

	            </div>
	        </section> -->

	        <!-- <section class="parallax" data-url="<?php echo get_stylesheet_directory_uri();?>/assets/images/parallax2.jpg" data-mobile="true" data-speed="0.7" data-direction="inverse">
	            <div class="container">
	                <div class="row">

	                    <blockquote class="blockquote1 center767">
	                        <div class="col-md-4">
	                            <cite class="md-add2">Bhagavad Gita:</cite>
	                        </div>
	                        <div class="col-md-8 border-add border-add__mod">
	                            <q>“The peace of God is with them <br/> whose mind and soul are in harmony, <br/> who are
	                                free from desire and wrath,
	                                <br/> who know their own soul.” </q>
	                        </div>
	                    </blockquote>
	                </div>
	            </div>
	        </section> -->

	        <section class="well5 bg-secondary">
	            <div class="container">
	                <h2 class="ttu">Articles</h2>

	                <div class="row">

										<?php query_posts('cat=4&showposts=3&order=ASC'); ?>
											<?php while (have_posts()) : the_post();
												$args = array('post_type' => 'attachment', 'post_parent' => $post->ID);
											  	$attachments = get_posts( $args );
											  ?>
												<div class="col-md-4 col-sm-4 col-xs-12">
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
	                    <!-- <div class="col-md-4 col-sm-4 col-xs-12">
	                        <article class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
	                            <time class="ff__mod" datetime="2015-01-01">16/08/2015</time>
	                            <h4 class="ttu ff__mod">consectetuer adipiscing elit Praesent vestibulum</h4>

	                            <p class="ff__mod p__mod">Lorem ipsum dolor sit amet, consectetuer adipi scing elit.
	                                Praesent vestibulum molestie
	                                nonummy hendrerit mauris. Phasellus porta. Fusce susc varius mi. Cum sociis natoque pen
	                                et magnis dis parturient montes, nascetur ridicus mus. Nulla dui. Fusce feu giat
	                                malesuada odio. Morbi nunc odio.</p>
	                            <a href="#" class="btn btn-primary btn__mod">read more</a>
	                        </article>
	                    </div>

	                    <div class="col-md-4 col-sm-4 col-xs-12">
	                        <article class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.6s">
	                            <time class="ff__mod" datetime="2015-01-01">16/08/2015</time>
	                            <h4 class="ttu ff__mod">consectetuer adipiscing elit Praesent vestibulum</h4>

	                            <p class="ff__mod p__mod">Lorem ipsum dolor sit amet, consectetuer adipi scing elit.
	                                Praesent vestibulum molestie
	                                nonummy hendrerit mauris. Phasellus porta. Fusce susc varius mi. Cum sociis natoque pen
	                                et magnis dis parturient montes, nascetur ridicus mus. Nulla dui. Fusce feu giat
	                                malesuada odio. Morbi nunc odio.</p>
	                            <a href="#" class="btn btn-primary btn__mod">read more</a>
	                        </article>
	                    </div>

	                    <div class="col-md-4 col-sm-4 col-xs-12">
	                        <article class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.9s">
	                            <time class="ff__mod" datetime="2015-01-01">16/08/2015</time>
	                            <h4 class="ttu ff__mod">consectetuer adipiscing elit Praesent vestibulum</h4>

	                            <p class="ff__mod p__mod">Lorem ipsum dolor sit amet, consectetuer adipi scing elit.
	                                Praesent vestibulum molestie
	                                nonummy hendrerit mauris. Phasellus porta. Fusce susc varius mi. Cum sociis natoque pen
	                                et magnis dis parturient montes, nascetur ridicus mus. Nulla dui. Fusce feu giat
	                                malesuada odio. Morbi nunc odio.</p>
	                            <a href="#" class="btn btn-primary btn__mod">read more</a>
	                        </article>
	                    </div> -->
	                </div>
	            </div>
	        </section>

	        <section class="well5">
	            <div class="container">
	                <h2 class="ttu">Gallery</h2>

	                <div class="row offs">
	                    <div class="col-md-4 col-sm-4 col-xs-12">
	                        <a class="thumb thumbnail2" data-fancybox-group="1" href="<?php echo get_stylesheet_directory_uri();?>/assets/images/page-1_img08_original.jpg">
	                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/page-1_img08.jpg" alt=""/>

	                            <span class="thumb_overlay"></span>
	                        </a>
	                    </div>

	                    <div class="col-md-4 col-sm-4 col-xs-12">
	                        <a class="thumb thumbnail2" data-fancybox-group="1" href="<?php echo get_stylesheet_directory_uri();?>/assets/images/page-1_img09_original.jpg">
	                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/page-1_img09.jpg" alt=""/>

	                            <span class="thumb_overlay"></span>
	                        </a>
	                    </div>

	                    <div class="col-md-4 col-sm-4 col-xs-12">
	                        <a class="thumb thumbnail2" data-fancybox-group="1" href="<?php echo get_stylesheet_directory_uri();?>/assets/images/page-1_img10_original.jpg">
	                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/page-1_img10.jpg" alt=""/>

	                            <span class="thumb_overlay"></span>
	                        </a>
	                    </div>
	                </div>

	                <div class="row text-center">
	                    <div class="col-md-4 col-sm-4 col-xs-12">
	                        <a class="thumb thumbnail2" data-fancybox-group="1" href="<?php echo get_stylesheet_directory_uri();?>/assets/images/page-1_img11_original.jpg">
	                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/page-1_img11.jpg" alt=""/>

	                            <span class="thumb_overlay"></span>
	                        </a>
	                    </div>

	                    <div class="col-md-4 col-sm-4 col-xs-12">
	                        <a class="thumb thumbnail2" data-fancybox-group="1" href="<?php echo get_stylesheet_directory_uri();?>/assets/images/page-1_img12_original.jpg">
	                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/page-1_img12.jpg" alt=""/>

	                            <span class="thumb_overlay"></span>
	                        </a>
	                    </div>

	                    <div class="col-md-4 col-sm-4 col-xs-12">
	                        <a class="thumb thumbnail2" data-fancybox-group="1" href="<?php echo get_stylesheet_directory_uri();?>/assets/images/page-1_img13_original.jpg">
	                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/page-1_img13.jpg" alt=""/>

	                            <span class="thumb_overlay"></span>
	                        </a>
	                    </div>

	                    <a href="<?php echo get_home_url();?>/index.php/gallery/" class="btn btn-default btn-sm">View all</a>
	                </div>
	            </div>
	        </section>

	        <!-- <section class="well6 bg-alt">
	            <div class="container">
	                <div class="row">
	                    <div class="owl-carousel2">
	                        <div class="item text-center">
	                            <blockquote class="blockquote2">
	                                <p>“</p>

	                                <div class="box">
	                                    <div class="box_aside">
	                                        <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/page-1_img14.jpg" alt=""/>
	                                    </div>
	                                    <div class="box_cnt box_cnt__no-flow">
	                                        <q>Quisque nulla. Vestibulum libero nisl, porta vel, scelerisque eget, malesuada
	                                            at, neque. Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi.
	                                            Aenean nec eros. Vestibulum ante ipsum primis in faucibus orci luctus et
	                                            ultrices posuere cubilia Curae spened leo. Ut pharetra augue nec augue. Nam
	                                            elit magna, hendrerit sit amet.
	                                        </q>
	                                        <cite>Maria Pitcher, California.</cite>
	                                    </div>
	                                </div>
	                            </blockquote>

	                        </div>

	                        <div class="item">
	                            <blockquote class="blockquote2">
	                                <p>“</p>

	                                <div class="box">
	                                    <div class="box_aside">
	                                        <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/page-1_img14.jpg" alt=""/>
	                                    </div>
	                                    <div class="box_cnt box_cnt__no-flow">
	                                        <q>Vestibulum ante ipsum primis in faucibus orci luctus et
	                                            ultrices posuere cubilia Curae spened leo.Quisque nulla. Vestibulum libero
	                                            nisl, porta vel, scelerisque eget, malesuada
	                                            at, neque. Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi.
	                                            Aenean nec eros. Ut pharetra augue nec augue. Nam
	                                            elit magna, hendrerit sit amet.
	                                        </q>
	                                        <cite>Linda Gibson, California.</cite>
	                                    </div>
	                                </div>
	                            </blockquote>

	                        </div>

	                        <div class="item">
	                            <blockquote class="blockquote2">
	                                <p>“</p>
	                                <div class="box">
	                                    <div class="box_aside">
	                                        <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/page-1_img14.jpg" alt=""/>
	                                    </div>
	                                    <div class="box_cnt box_cnt__no-flow">
	                                        <q>Quisque nulla. Vestibulum libero nisl, porta vel, scelerisque eget, malesuada
	                                            at, neque. Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi.
	                                            Aenean nec eros. Vestibulum ante ipsum primis in faucibus orci luctus et
	                                            ultrices posuere cubilia Curae spened leo. Ut pharetra augue nec augue. Nam
	                                            elit magna, hendrerit sit amet.
	                                        </q>
	                                        <cite>Monika Rollton, New York</cite>
	                                    </div>
	                                </div>
	                            </blockquote>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </section> -->

	    </main>
			<!-- Footer Content-->
		  <?php include 'footer.php'?>
		</div>
  </body>
</html>
