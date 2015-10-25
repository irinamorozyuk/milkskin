<!-- sidebar start -->
		<div id="sidebar">
			<div class="sidebar_icon"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/sidebar_icon.png" alt="Sidebar Icon" /></div>
            <div id="searchform"><?php include(TEMPLATEPATH . '/searchform.php'); ?></div>
            <div id="rss"><a href="<?php bloginfo('rss2_url'); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/spacer.gif" alt="RSS" /></a></div>
			<div id="welcome"><p><?php include(TEMPLATEPATH . '/welcome.php'); ?></p></div>
			<!-- sidebar sub start -->
		<div id="sidebar_sub" class="clearfix">
            <ul>
			 <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar2') ) : ?>
				<li class="recent_comments">
					<?php get_recent_comments(array('number' => 5)); ?>
				</li>
				<li class="recent_posts">
					<h2><img src="<?php bloginfo('stylesheet_directory'); ?>/images/recent_posts.gif" /></h2>
					<ul>
						<?php get_archives('postbypost', 5); ?>
					</ul>
				</li>
			<?php endif; ?>
             </ul>
		</div>
<!-- sidebar sub end -->
			<div id="sidebar_main" class="clearfix">
            <ul>
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar1') ) : ?>
                <li>
                    <h2>Рубрики</h2>
                    <ul>
<div class="sidebar_icon"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/sidebar_icon.png" alt="Sidebar Icon" /></div>
                        <?php wp_list_cats('sort_column=name&optioncount=0&hierarchical=0'); ?>
                    </ul>
                </li>
                <li>
                    <h2>Архивы</h2>
                    <ul>
                        <?php wp_get_archives('type=monthly'); ?>
                    </ul>
                </li>
              
             <?php endif; ?>
			 </ul>
			 </div>

		</div>
<!-- sidebar end -->
