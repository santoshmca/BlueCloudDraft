<?php
/*
Template Name: Page: Homepage
*/
?>

<?php get_header(); ?>

	<?php global $data; ?>
        <style>
            #title .container h1{
                font-size: 35px;
                text-align: center;
                line-height: 150%;
            }    
            .member{
                padding-bottom: 5px;
            }
            .member .member-img{
                margin-bottom: 0px;
            }
            .member .member-role{
                margin-bottom:0px;
            }
            .member p{
                position: absolute;
                bottom:0px;
                left: 0px;
                padding: 10px;
                background: #289dcc;
                color: white;
            }
            .member a{
                color:white;
            }
            .member p span{
                clear:both;
                margin:0 auto;
                display: block;
            }
		#title{display:none!important;}
            
        </style>
        <script>
            jQuery(document).ready(function($){
                jQuery('.member p').hide();
                jQuery('.member').hover(
                    function(){
                        //$(this ).children('p').show();
                        $(this ).children('p').slideToggle();
                    }, 
                    function(){
                        jQuery('.member p').hide();
                    });
            });
        </script>

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
	
	</div> <!-- end page-wrap -->
	
<?php get_footer(); ?>
