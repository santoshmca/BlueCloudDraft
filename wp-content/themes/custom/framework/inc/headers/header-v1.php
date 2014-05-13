<header id="header" class="header clearfix">
		
	<div class="container">
	
		<div class="five columns">
			<div class="logo">
				<?php if($data['media_logo'] != "") { ?>
					<a href="<?php echo home_url(); ?>/"><img src="<?php echo $data['media_logo']; ?>" alt="<?php bloginfo('name'); ?>" class="logo_standard" /></a>
					<?php if($data['media_logo_retina'] != '') { ?><a href="<?php echo home_url(); ?>/"><img src="<?php echo $data['media_logo_retina'] ?>" width="<?php echo $data['logo_width']; ?>" height="<?php echo $data['logo_height']; ?>" alt="<?php bloginfo('name'); ?>" class="logo_retina" /></a><?php } ?>
				<?php } else { ?>
					<a href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a>
				<?php } ?>
			</div>
		</div>
		
		<div id="navigation" class="eleven columns clearfix">
		
			<?php if($data['check_searchform'] == true) { ?>
				<form action="<?php echo home_url(); ?>/" id="header-searchform" method="get">
				        <input type="text" id="header-s" name="s" value="" autocomplete="off" />
				        <input type="submit" value="Search" id="header-searchsubmit" />
				</form>
			<?php } ?>
		
			<?php wp_nav_menu(array('theme_location' => 'main_navigation', 'menu_id' => 'nav')); ?>

		</div>

	</div>
	
</header>