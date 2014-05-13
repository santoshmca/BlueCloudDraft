<?php
/*
Template Name: Page: benefits
*/
?>

<?php get_header(); ?>

	<?php global $data; ?>
        <style>
            a.button.small{
                font-size: 15px;
                padding: 13px 35px;
            }
        </style>
        

	<?php if (get_post_meta( get_the_ID(), 'minti_titlebar', true ) == 'notitlebar') { ?>
		
		<div id="no-title-divider"></div>
		<?php if($data['check_stripedborder']) { ?><div class="hr-border"></div><?php } ?>
		
	<?php } else { ?>

		<div id="title">
			<div class="container">
					<h1><?php the_title(); ?><?php if($data['text_titledivider'] != "") { echo $data['text_titledivider']; } ?></h1>
					<?php if(get_post_meta( get_the_ID(), 'minti_subtitle', true )){ echo '<h2>'.get_post_meta( get_the_ID(), 'minti_subtitle', true ).'</h2>'; } ?>
			</div>
		</div>
		
		<?php if($data['check_stripedborder']) { ?><div class="hr-border"></div><?php } ?>
	
	<?php } ?>


	<div id="page-wrap" class="container">
                <div class="slider-testimonials">
                    <?php 
                    
                    echo apply_filters( 'the_content','[rev_slider benefits1]')?>
                </div>
            
                <p>&nbsp;</p>
	
		<div id="content" class="sixteen columns">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
				<div class="entry">
	
					<?php the_content(); ?>
	
					<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
	
				</div>
	
			</article>
			
			<?php if(!$data['check_disablecomments']) { ?>
				<?php comments_template(); ?>
			<?php } ?>
	
			<?php endwhile; endif; ?>
		</div> <!-- end content -->
                <p>&nbsp;</p>
                <div class="sign-up-links">
                    <a href="/blueCloudWord/sign-up-now/" target="_self" class=" button white small" rel="slides[buttonlightbox]">Sign Up Now</a>
                    <br />
                    <a href="/blueCloudWord/plans-pricing/">Plans & Pricing</a>
                </div>
                <p>&nbsp;</p>
                
	
	</div> <!-- end page-wrap -->
	
<?php get_footer(); ?>
