<?php 
/**** Admin Paneli Çağırma ****/

require_once ('cdn/adminpaneli.php');

/**** Ozel Bilesenler ****/

require_once ('cdn/bilesenler.php');

/**** Ozel Bilesenler ****/

require_once ('cdn/sonyorumlar.php');

/**** STANDART BILESENLERI KALDIRMA ****/

function remove_default_widgets() 
{ unregister_widget('WP_Widget_Pages'); 
unregister_widget('WP_Widget_Calendar'); 
unregister_widget('WP_Widget_Archives'); 
unregister_widget('WP_Widget_Links');
 unregister_widget('WP_Widget_Meta');
 unregister_widget('WP_Widget_Search');
 unregister_widget('WP_Widget_Text');
 unregister_widget('WP_Widget_Categories');
 unregister_widget('WP_Widget_Recent_Posts');
 unregister_widget('WP_Widget_Recent_Comments');
 unregister_widget('WP_Widget_RSS');
 unregister_widget('WP_Widget_Tag_Cloud');
 unregister_widget('WP_Nav_Menu_Widget'); } 
 
 /**** BILESEN UYUMU ****/
 add_action('widgets_init', 'remove_default_widgets', 11);
 if ( function_exists('register_sidebar') )
	 register_sidebar(array('name' => 'Yan Menü','before_widget' => '<div class=footerbilesen>','after_widget' => '</div>','before_title' => '<div class=footerbilesenbaslik>','after_title' => '</div>',));

 /**** ONE CIKARILMIS GORSEL ****/ 
 
 add_theme_support( 'post-thumbnails' );set_post_thumbnail_size( 150, 150, true );

/**** YAZI LIMIT AYARLAMA ****/function ozet($max_char, $more_link_text = '(devamı&raquo;)', $stripteaser = 0, $more_file = '') {    $content = get_the_content($more_link_text, $stripteaser, $more_file);    $content = apply_filters('the_content', $content);    $content = str_replace(']]>', ']]&gt;', $content);    $content = strip_tags($content);   if (strlen($_GET['p']) > 0) {      echo "";      echo $content;            echo " ";   }   else if ((strlen($content)>$max_char) && ($espacio = strpos($content, " ", $max_char ))) {        $content = substr($content, 0, $espacio);        $content = $content;        echo "";        echo $content;        echo " ";           }   else {      echo "";      echo $content;            echo " ";   }}
?>
