<?php get_header(); ?>

	

<div id="sol" class="solacek mtop15">
	<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
			
	<?php /* If this is a category archive */ if (is_category()) { ?>
	<?php /* If this is a tagged archive */ } elseif (is_tag()) { ?>
 	<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
 	<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
	<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
	<?php /* If this is a author archive */ } elseif (is_author()) { ?>
 	<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
	Arşiv
 	 <?php } ?>
	 
		
		<div class="icerik">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<div class="yazi">
<div class="yazibaslik"><li><a href="<?php the_permalink() ?>"> <?php the_title(); ?> </a></li></div>
	
			
<a href="<?php the_permalink() ?>" class="yaziresim"><?php if ( has_post_thumbnail() ) {the_post_thumbnail();} else {echo '';}?></a>
<p><?php ozet(600)?></p>

<div class="icerikBilgi">
				<li class="icerikYazar solacek"><?php the_author() ?></li>
				<li class="icerikTarih solacek"><?php the_time('j F Y'); ?></li>
				<li class="icerikYorum solacek"><?php comments_number('0 Yorum', '1 Yorum ', '% Yorum' );?></li>
				<li class="icerikOkunma solacek"><?php if(function_exists('the_views')) { the_views(); } ?></li>
				<li class="icerikTamam sagacek"><a href="<?php the_permalink() ?>">devamını oku</a></li>
			
			<div class="temizle"></div>					
			</div><!--icerikBilgi-->			
			
			 <div class="temizle"></div>	
</div>
		

			<?php endwhile; else: ?>
			<?php endif; ?>
			
			
			
			
		</div><!--icerik-->
		<div class='wp-pagenavi' style="margin-bottom:10px;"> 
				<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>	</div>
			<div class="temizle"></div>

	
	
	
	
	
	
	
	
	</div><!--sol-->
	

<?php get_footer(); ?>	