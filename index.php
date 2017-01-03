<?php get_header(); ?>

	
		
			<div id="maincontent">
			<?php get_sidebar("left"); ?>
        	<?php if(have_posts()) : ?>
        		<?php while(have_posts()) : the_post(); ?>
				<div class="post">
					<div class="postbg">
						<div class="contentheader">
							<h1><?php the_title()?></h1>
							<li>نویسنده : <?php the_author(); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; تاریخ انتشار : <?php echo get_the_time('Y/m/d', $post->ID); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;نظرات : 0&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;دسته بندی : <?php the_category(',') ?></li>
						</div>
						<div class="content">
							<li><?php the_content();?></li>
						</div>
						<div class="footercontent">
							<a href="<?php the_permalink(); ?>"><li class="morecontent">ادامه مطلب</li></a>
						</div>
					</div>				
				</div>

				<?php endwhile;?>
			<?php endif ?>
			
</div>
        	
        	
<?php get_footer(); ?>