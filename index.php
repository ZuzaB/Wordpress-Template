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
					<p class="aside-text aligncenter"><a href="#" class="date"><?php the_date(); ?></a></p>
					<h2 class="post-title aligncenter"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
					<p class="aligncenter"><a href="#" class="tag">lifestyle</a> &#124; <a href="#" class="tag">self-development</a></p>
					<img src="<?php echo bloginfo('template_directory'); ?>/img/img3.jpg" class="img-post">
					<p class="main-text">
						<?php the_excerpt(); ?> 
					</p>
                     <span class="hide"><?php the_content('', true); ?></span>
					<span class="more-text tag">continue reading &#10137;</span>
				</div>
<?php endwhile; ?>
<?php endif; ?>	
        </div>
			<span class="more-text tag alignright">more posts &#10137;</span>
		</main>
<?php get_sidebar();?>			
<?php get_footer();?>