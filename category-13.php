<?php get_header(); ?>
<div id="sol" class="solacek beyazol padding10" style="box-shadow:0 0 5px #d0d0d0">	

<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
			
			
			<div class="icerik">
			<div class="icerikBaslik"><h2><a href="<?php the_permalink() ?>">fotoGaleri</a></h2></div>	
			
			
				
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					
							
<div class="videolistele">

<?php if (function_exists('has_post_thumbnail')) {

 if ( has_post_thumbnail() ) { ?>

	<div class="videothumb">

<a href="<?php the_permalink(); ?>"><span></span><?php the_post_thumbnail('thumbnail'); ?></a>

</div>

<?php } } ?>

<div class="videobaslik"><h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>

<div class="videoaciklama">Tarih: <?php the_time('j F Y') ?></div></div>

<div class="temizle"></div>



</div>
<?php endwhile; else: ?>
			<?php endif; ?>	
						
					<div class="temizle"></div>
					<div class='wp-pagenavi'> 
				<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?></div>
			</div><!--  soltaraf -->
			

	

		<div class="temizle"></div>

			
			</div>
			
			

<?php get_sidebar(); ?>
<?php get_footer(); ?>