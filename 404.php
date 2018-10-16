<?php get_header(); ?>

	<div id="sol" class="solacek beyazol padding10" style="box-shadow:0 0 5px #d0d0d0">	

			
			
			
			<div class="icerik"><!--   ########################################### - -->
						
				
					<div class="icerikBaslik" style="padding-left:3px"><h2><a href="<?php the_permalink() ?>">aradığını bulamadım mork ya :(</a></h2></div>
					<div class="konu">
						<h2>Arama Sonucu</h2>
									<li>Her yeri aradık. </li>
									<li>Köşedeki bakkala sorduk. </li>
									<li>Tüpçünün karşısındaki ayakkabı boyacısına bile sorduk.. </li>
									<li>Ama bulamadık.. </li>
									<li>O yüzden <a href="<?php bloginfo('home'); ?>">buraya</a> tıklayarak anasayfaya gidebilirsin..</li>
									<center><h2>..ya da tekrar arayabilirsin...</h2><?php include 'searchform.php' ?></center>
									
			</ul>
<div class="temizle"></div>
					</div>
			<div class="temizle"></div></div><!--  konugenel --><!--  ########################################### -->
		

</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>