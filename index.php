<?php get_header(); ?>

<div id="sol" class="solacek mtop15">

		
		<div class="icerik">
		<?php query_posts($query_string . '&cat=-13,-14,-15'); ?>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<div class="yazi">
<div class="yazibaslik"><li><a href="<?php the_permalink() ?>"> <?php the_title(); ?> </a></li></div>
	
			
<a href="<?php the_permalink() ?>" class="yaziresim"><?php if ( has_post_thumbnail() ) {the_post_thumbnail();} else {echo '';}?></a>
<p><?php ozet(580)?></p>

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