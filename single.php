 <?php get_header(); ?>

	
	<div id="sol" class="solacek beyazol padding10" style="box-shadow:0 0 5px #d0d0d0">	
		
		
		<div class="icerik">
			<div class="icerikBaslik"><h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2></div>			
					
			
			 <div class="temizle"></div>	
			
			
			<div class="konu ust10">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<p>				
				<?php the_content(); ?>

					<?php wp_link_pages(array('before' => '<p class="sayfalar"><strong>Sayfalar:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

					<?php $trend = get_post_meta($post->ID,'trend', true);if($trend != "") {  ?>

					<?php }else{ ?><?php } ?><div class="temizle"></div>

					<?php $resim = get_post_meta($post->ID,'video', true);$yazi =  get_post_meta($post->ID,'normalvideo', true);if($resim != "") {  ?>

					<div class="video">	<center><script type='text/javascript' src='<?php bloginfo('template_url'); ?>/ext/js/jwplayer.js'></script><div id='mediaplayer'></div><script type="text/javascript">  jwplayer('mediaplayer').setup({    'flashplayer': '<?php bloginfo('template_url'); ?>/ext/js/player.swf',    'id': 'playerID',    'width': '540',    'height': '380',    'file': 'http://www.youtube.com/watch?v=<?php echo $resim; ?>',	'skin': '<?php bloginfo('template_url'); ?>/ext/js/bekle.zip',    'controlbar': 'bottom'  });</script></center></div>

					<?php } elseif($resim == "" && $yazi != "") { ?><div class="video"><center><?php echo $yazi; ?></center></div><?php }else{ ?><?php } ?><div class="temizle"></div>

				
				</p>
				
				<?php endwhile; else: ?>

		<?php endif; ?>

				
				
			</div><!--konu-->
			
			<div class="yazaralani">
				<div class="icbaslik"><h2><?php the_author(); ?> hakkında kısa bilgi</h2></div>
				<p class="authorpic"><?php echo  get_avatar( get_the_author_email(), '105' ); ?></p>
				<p class="authorcont"><?php  the_author_description(); ?></p>				
			</div><!--yazaralani-->	
			<div class="temizle"></div>
			
			
			
			
			
			
			
			
			
			
			<div class="benzery ust10">
			<div class="icbaslik"><h2>Bu Konuya Benzer Yazılar</h2></div>
			<ul>
			
				
				<?php $categories = get_the_category($post->ID); if ($categories) { $category_ids = array(); 
			foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
			$args=array( 'category__in' => $category_ids,
			'post__not_in' => array($post->ID),
			'showposts'=>4, // Gösterilecek benzer yazı sayısı
			'caller_get_posts'=>1);
			$my_query = new wp_query($args);
			if( $my_query->have_posts() ) {
			echo '';
			while ($my_query->have_posts()) {
			$my_query->the_post();
			?>
			<li>
				<?php if ( has_post_thumbnail() ) {the_post_thumbnail();} else {echo '';}?>
				<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
				<p><?php echo substr(get_the_excerpt(), 0,100); ?>...</p>
				</li>
			<?php
			}	echo '';
			}
			wp_reset_query();
			}
			?>
			
			
			
				
				
			</ul>
			</div><!--benzery-->	


			
		</div><!--icerik-->
		
	<div class="temizle"></div>			
				 <?php comments_template(); ?>
	
	</div><!--sol-->

	

<?php get_footer(); ?>	