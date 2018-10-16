	<?php get_sidebar(); ?>
	
	
	
	
	</div><!--orta-->
	</div><!--tahsinsungur-->
	
	 <div class="temizle"></div>	
	 
	<div class="sosyallesmeler beyazol">
	
		<div class="dinlediklerim solacek">
			<h2>müzikGaleri</h2>
				<ul>
				<?php $dinlediklerim = new WP_Query("showposts=7&cat=15"); while($dinlediklerim->have_posts()) : $dinlediklerim->the_post();?>
				<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				<?php endwhile; ?>
				</ul>
		</div><!--dinlediklerim-->
		
		
		<div class="izlediklerim solacek">
			<h2>videoGaleri</h2>
				<ul>
				<?php $izlediklerim = new WP_Query("showposts=3&cat=14"); while($izlediklerim->have_posts()) : $izlediklerim->the_post();?>
					<li><a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) {the_post_thumbnail();} else {echo '';}?>
					<h3><?php the_title(); ?></h3>	</a><p class="sosOkunma"><?php if(function_exists('the_views')) { the_views(); } ?></p><div class="temizle"></div></li>
					<?php endwhile; ?>
					
				</ul>
		</div><!--izlediklerim-->
		
		<div class="fotoblog">
			<h2>fotoGaleri</h2>
				<ul>
				<?php $fotolog = new WP_Query("showposts=6&cat=13"); while($fotolog->have_posts()) : $fotolog->the_post();?>
					<li><a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) {the_post_thumbnail();} else {echo '';}?></li>
					<?php endwhile; ?>
					<div class="temizle"></div>
				</ul>
		</div><!--izlediklerim-->
		
	</div><!--sosyallesmeler //-->
	
 <div class="temizle"></div>

<div id="footer">
	<div class="dieykafali">
	
		<div class="solacek">
		<h1><?php echo get_option('copyright'); ?></h1>
		</div>	
		<div class="footmenu">
		<li><a href="<?php bloginfo('url'); ?>"> Ana Sayfa</a></li>
		<li><a href="<?php bloginfo('url'); ?>/hakkimda"> Hakkımda</a></li>
		<li><a href="<?php bloginfo('url'); ?>/iletisim"> iletişim</a></li>
		<li><a href="<?php bloginfo('url'); ?>/reklam-ver"> Reklam Ver</a></li>
		</div>
		
	</div><!--dieykafali-->
	</div><!--sagdayiz-->
</div><!--footer-->

	<?php wp_footer(); ?>
</body>
</html>