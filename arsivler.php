<?php
/*
Template Name: Arsivler
*/
?>
<?php get_header(); ?>
	<div id="sol" class="solacek beyazol padding10" style="box-shadow:0 0 5px #d0d0d0">	
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
			
			
			
			<div class="icerik"><!--   ########################################### - -->
						
				
					<div class="icerikBaslik" style="padding-left:3px"><h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2></div>
					<div class="konu">
							<ul class="arsivler">
							
									<h2>Yıllara Göre </h2>

<ul class="arsivler">
    <?php wp_get_archives('type=yearly'); ?>
</ul>
<div class="temizle"></div>
							<h2>Aylara Göre</h2>
    <?php wp_get_archives('type=monthly'); ?>
</ul>
<div class="temizle"></div>
	
			<h2>Yazarlar</h2>

<ul class="arsivler">

<?php wp_list_authors('show_fullname=1&optioncount=1&orderby=post_count&order=DESC'); ?>
</ul>
<div class="temizle"></div>
					</div>
			<div class="temizle"></div></div><!--  konugenel --><!--  ########################################### -->
			<?php endwhile; else: ?>
			<?php endif; ?>	

</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>