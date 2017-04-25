<?php get_header(); ?>

    <section id="main-section">
		<main class="main-content">
			<div class="wrapper">
        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>  
				<div class="post-box">
					<p class="aside-text aligncenter"><a href="#" class="date"><?php the_date(); ?></a></p>
					<h2 class="post-title aligncenter"><?php the_title(); ?></h2>
					<p class="aligncenter"><a href="#" class="tag">lifestyle</a> &#124; <a href="#" class="tag">self-development</a></p>
					<?php 
                        if (has_post_thumbnail()){
                            the_post_thumbnail();
                            }
                    ?>
					<p class="main-text">
						<?php the_content(); ?>
					</p>
				</div>
<?php endwhile; ?>
<?php endif; ?>	
        </div>
		</main>
<?php get_sidebar();?>			
<?php get_footer();?>