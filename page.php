<?php get_header(); ?>


	<div class="temizle"></div>
	
	<div id="sol" class="solacek beyazol padding10" style="box-shadow:0 0 5px #d0d0d0;">	
		
		
		<div class="icerik">
			<div class="icerikBaslik"><h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2></div>			
			<div class="singleBilgi">
				
						
			</div><!--icerikBilgi-->			
			
			 <div class="temizle"></div>	
			
			
			<div class="konu ust10">				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<p>				
				<?php the_content(); ?>

					<?php wp_link_pages(array('before' => '<p class="sayfalar"><strong>Sayfalar:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

					<?php $trend = get_post_meta($post->ID,'trend', true);if($trend != "") {  ?>

					<div class="facebookbegencen"><script charset="utf-8" src="http://widgets.twimg.com/j/2/widget.js"></script><script>new TWTR.Widget({  version: 2,  type: 'search',  search: '<?php echo $trend; ?> lang:tr',  interval: 3000,  title: '',  subject: '',  width: 'auto',  height: 200,  theme: {    shell: {      background: '#ffffff',      color: '#808080'    },    tweets: {      background: '#ffffff',      color: '#5e5c5e',      links: '#1985b5'    }  },  features: {    scrollbar: true,    loop: true,    live: true,    behavior: 'default'  }}).render().start();</script></div>

					<?php }else{ ?><?php } ?><div class="temizle"></div>

					<?php $resim = get_post_meta($post->ID,'video', true);$yazi =  get_post_meta($post->ID,'normalvideo', true);if($resim != "") {  ?>

					<div class="video">	<center><script type='text/javascript' src='<?php bloginfo('template_url'); ?>/ext/js/jwplayer.js'></script><div id='mediaplayer'></div><script type="text/javascript">  jwplayer('mediaplayer').setup({    'flashplayer': '<?php bloginfo('template_url'); ?>/ext/js/player.swf',    'id': 'playerID',    'width': '540',    'height': '380',    'file': 'http://www.youtube.com/watch?v=<?php echo $resim; ?>',	'skin': '<?php bloginfo('template_url'); ?>/ext/js/bekle.zip',    'controlbar': 'bottom'  });</script></center></div>

					<?php } elseif($resim == "" && $yazi != "") { ?><div class="video"><center><?php echo $yazi; ?></center></div><?php }else{ ?><?php } ?><div class="temizle"></div>

				
				</p>
				
				<?php endwhile; else: ?>

		<?php endif; ?>

				
				
			</div><!--konu-->
			
			
			
			
			
			
			
		</div><!--icerik-->
		
	
	</div><!--sol-->

	

<?php get_footer(); ?>	