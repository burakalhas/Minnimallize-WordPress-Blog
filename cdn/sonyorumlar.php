<?php
	/*
	Plugin Name: Resimli Son Yorumlar
	Author: Burak ALHAS
	Author URI: http://www.burakalhas.com.tr
	Description: WordPress yorumlarınızı resimli şekilde göstermenizi sağlayan, kullanımı oldukça kolay bir eklenti.
	*/
	function resimli_son_yorumlar($args){
		$title = empty($options['title'])?__(' '):attribute_escape($options['title']);
	?>
		<?php echo $before_title . $title . $after_title; ?>
		<?php echo $before_widget; ?>
			<!-- Resimli Son Yorumlar: Başlangıç -->
           
            <div id="resimli-son-yorumlar">
				<?php $comments = get_comments('status=approve&number=5'); ?>
				<ul>
					<?php foreach ($comments as $comment){ ?>
					<li>
						<?php
							$title = get_the_title($comment->comment_post_ID);
							echo '<span class="avatarlar">' . get_avatar($comment, '33') . '</span>';
							echo '<span class="yazar">' . ($comment->comment_author) . '</span>';
						?> 
						<br /> 
						<a href="<?php echo get_permalink($comment->comment_post_ID); ?>" title="<?php echo $title; ?>">
							<span class="icerik"><?php echo wp_html_excerpt($comment->comment_content,20); ?>...</span>
						</a>
					</li>
					<?php }	?>
				</ul>
            </div>
			<!-- Resimli Son Yorumlar: Bitiş -->
		<?php echo $after_widget; ?>
	<?php
	}
	function widget_son_yorumlar() {
		if ( !function_exists('register_sidebars'))
			return;
		$widget_ops = array(
			'classname' =>'resimli_son_yorumlar',
			'description' =>__("Son yorumları resimli bir şekilde göstermenizi sağlar.")
		);
		wp_register_sidebar_widget('widget_son_yorumlar',__('Resimli Son Yorumlar'),'resimli_son_yorumlar',$widget_ops);
	}
	add_action('init', 'widget_son_yorumlar')
?>