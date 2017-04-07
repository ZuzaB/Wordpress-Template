<?php get_header();?>
	<section>
		<div class="photo-wrapper">
			<div class="photo-box">
				<img src="<?php echo bloginfo('template_directory'); ?>/img/img1.jpg" alt=''>
			</div>
			<div class="photo-box">
				<img src="<?php echo bloginfo('template_directory'); ?>/img/img2.jpg" alt=''>
			</div>
		</div>
	</section>
	<section id="main-section">
		<main class="main-content">
			<div class="wrapper">
        <?php if (have_posts()) : ?>
        <?php $i = 1; ?>
        <?php while (have_posts()) : the_post(); ?>  
				<div class="post-box">
					<p class="aside-text aligncenter"><a href="#" class="date">Dec 15, 2016</a></p>
					<h2 class="post-title aligncenter"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
					<p class="aligncenter"><a href="#" class="tag">lifestyle</a> &#124; <a href="#" class="tag">self-development</a></p>
					<img src="<?php echo bloginfo('template_directory'); ?>/img/img3.jpg" class="img-post">
					<p class="main-text">
						<?php the_excerpt(); ?>
					</p>
					<span class="more-text tag">continue reading &#10137;</span>
				</div>
<?php endwhile; ?>
<?php endif; ?>			
			</div>
			<span class="more-text tag alignright">more posts &#10137;</span>
		</main>
		<aside class="aside">
			<div class="wrapper wrapper-aside">
				<div class="sidebar-box">
					<h4 class="aside-titles">Categories</h4>
					<ul class="sidebar menu">
						<li><a href="#" class="tag">self-development</a></li>
						<li><a href="#" class="tag">psychology</a></li>
						<li><a href="#" class="tag">travelling</a></li>
						<li><a href="#" class="tag">tradition</a></li>
						<li><a href="#" class="tag">lifestyle</a></li>
						<li><a href="#" class="tag">culture</a></li>
						<li><a href="#" class="tag">habits</a></li>
					</ul>
				</div>
				<div class="sidebar-box">
					<h4 class="aside-titles">Related posts</h4>
					<ul class="sidebar menu">
						<li class="mini-posts">
							<a href="#" class="tag">
								<h5 class="mini-title">Morning pleasures</h5>
								<img src="<?php echo bloginfo('template_directory'); ?>/img/mini1.jpg" alt="related post">
							</a>
						</li>
						<li class="mini-posts">
							<a href="#" class="tag">
								<h5 class="mini-title">Easy (distr)action</h5>
								<img src="<?php echo bloginfo('template_directory'); ?>/img/mini2.jpg" alt="related post">
							</a>
						</li>
						<li class="mini-posts">
							<a href="#" class="tag">
								<h5 class="mini-title">Meditaion</h5>
								<img src="<?php echo bloginfo('template_directory'); ?>/img/mini3.jpg" alt="related post">
							</a>
						</li>
					</ul>
				</div>
			</div>
		</aside>
	</section>
<?php get_footer();?>