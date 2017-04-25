
		<aside class="aside">
			<div class="wrapper wrapper-aside">
				<div class="sidebar-box">
					<h4 class="aside-titles">Categories</h4>
					<ul class="sidebar menu">
						<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
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