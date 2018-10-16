<?php
 
function wp_popho_menu() {
    // Üstü Menü Özellikleri:
        add_menu_page(__('Minnimallize','popho'), __('Minnimallize','popho'), 6, basename(__FILE__) , 'wp_popho_admin', get_bloginfo('template_url').'/img/adminpaneli.png');
}
add_action('admin_menu', 'wp_popho_menu');
 
$popho_options = (
    array(
 
				array(__('Tema Genel Ayarlar','popho'), array(
			array('copyright', __('','popho'), __('Copyright Metnini Giriniz:','popho'),'',''),
			array('aramayap', __('Arama yapılacak site adresini yazınız','popho'), __('Arama yapılacak site:','popho'),'',''),
			array('aramametni', __('Arama formunda görünecek metni giriniz...','popho'), __('Arama Metnini Giriniz:','popho'),'',''),
			array('sponsor', __('','popho'), __('Sponsor Kategori ID:','popho'),'',''),
			array('tema-renk', __('','popho'), __('Tema Renginizi Seçin','popho'),__('Kullanmak istediğiniz rengi seçin','popho'),'select_options','turuncu|kirmizi|default|yesil','turuncu|kirmizi|default|yesil'),


			)
        ),

		
			   array(__('Sidebar Renkli Kategori Menü Ayarları','popho'), array(
            array('wordpressa', __('WordPress kategorisine ait link giriniz.','popho'), __('WordPress Kategorisi:','popho'),'',''),
			array('cssa', __('CSS kategorisine ait link giriniz','popho'), __('CSS Kategorisi:','popho'),'',''),
			array('kisisela', __('Kişisel kategorisine ait link giriniz','popho'), __('Kişisel Kategorisi:','popho'),'',''),
			array('videolara', __('Videolarım kategorisine ait link giriniz','popho'), __('Videolarım Kategorisi:','popho'),'',''),
			array('muziklera', __('Müzikler kategorisine ait link giriniz','popho'), __('Müzikler Kategorisi:','popho'),'',''),
			array('genela', __('Genel kategorisine ait link giriniz','popho'), __('Genel Kategorisi:','popho'),'',''),
            )
        ),
		
			   array(__('Reklam Ayarları','popho'), array(
            array('1reklam', __('','popho'), __('1.Reklam Resim:','popho'),'',''),
			array('1reklamurl', __('','popho'), __('1.Reklam URL:','popho'),'',''),
			array('2reklam', __('','popho'), __('2.Reklam Resim:','popho'),'',''),
			array('2reklamurl', __('','popho'), __('2.Reklam URL:','popho'),'',''),
			array('3reklam', __('','popho'), __('3.Reklam Resim:','popho'),'',''),
			array('3reklamurl', __('','popho'), __('3.Reklam URL:','popho'),'',''),
			array('4reklam', __('','popho'), __('4.Reklam Resim:','popho'),'',''),
			array('4reklamurl', __('','popho'), __('4.Reklam URL:','popho'),'',''),
			array('5reklam', __('','popho'), __('5.Reklam Resim:','popho'),'',''),
			array('5reklamurl', __('','popho'), __('5.Reklam URL:','popho'),'',''),
			array('6reklam', __('','popho'), __('6.Reklam Resim:','popho'),'',''),
			array('6reklamurl', __('','popho'), __('6.Reklam URL','popho'),'',''),
            )
        ),
		
		   array(__('Alt kısımda bulunan kategorileri ayarlayın.<span style="font-size:11px">   {dinlediklerim,izlediklerim,fotogaleri}</span>','popho'), array(
            array('dinlediklerim', __('Dinlediklerim kategori ID sini buraya giriniz.','popho'), __('Dinlediklerim Kategorisi:','popho'),'',''),
			array('izlediklerim', __('İzlediklerim kategori ID sini buraya giriniz.','popho'), __('İzlediklerim Kategorisi:','popho'),'',''),
			array('fotogaleri', __('Foto Galeri kategori ID sini buraya giriniz.','popho'), __('Foto Galerim Kategorisi:','popho'),'',''),
            )
        ),
		
        array(__('Sosyal Ağlar','popho'), array(
            array('facebook', __('','popho'), __('Facebook:','popho'),'',''),
            array('twitter', __('','popho'), __('Twitter:','popho'),'',''),
			array('google', __('','popho'), __('Google Plus:','popho'),'',''),
            array('youtube', __('','popho'), __('Youtube:','popho'),'',''),
			array('behance', __('','popho'), __('Behance:','popho'),'',''),
            array('rss', __('','popho'), __('RSS:','popho'),'',''),
			array('skype', __('','popho'), __('Skype:','popho'),'',''),
            array('instagram', __('','popho'), __('Instagram:','popho'),'',''),
            )
        )
    )
	
);
 
foreach($popho_options as $section) {
    foreach($section[1] as $option) {
        add_option($option[0], $option[1]);
    }
}
 
function wp_popho_admin_css() {
    ?>
 
    <?php
}
add_action('admin_head', 'wp_popho_admin_css');
 
function wp_popho_admin() {
 
    global $popho_options;
 
    if ($_POST['save_popho_options']) {
 
        foreach($popho_options as $section) {
            foreach($section[1] as $option) {
                update_option($option[0],stripslashes($_POST[$option[0]]));
            }
        }
 
        /* Başarılı */
        echo '<div id="message" class="updated fade"><p><strong>'.__('Ayarlarınız Kaydedildi! :)','popho').'</strong></p></div>';
    }
	
    ?>
 
    <div class="wrap">
        <h2><?php _e('Minnimallize WordPress Blog Theme', 'popho'); ?></h2>
        <form method="post" action="admin.php?page=adminpaneli.php" id="popho_form">
		<style>
		input[type="submit"]{float:right;box-shadow:0 0 3px #d0d0d0;border:1px solid #95a5a6;text-decoration:none;font-family:helvetica;color:#95a5a6;background:#FFF;padding:10px;}
		input[type="submit"]:hover{border:1px solid #3498db;color:#3498db}
</style>
            <?php
            foreach($popho_options as $section) {
                echo '<h3>'.$section[0].'</h3><div class="popho_section"><table cellspacing="0" cellpadding="0" class="form-table">';
                foreach($section[1] as $option) {
                    echo '<tr valign="top">';
 
                    echo '<th><label for="'.$option[0].'">'.$option[2].'</label></th><td>';
 
                    if ($option[4]=='yesno') {
                        $yes = '';
                        $no = '';
                        if (get_option($option[0])=='yes') $yes='selected="selected"'; else $no='selected="selected"';
                        echo '<select name="'.$option[0].'">
                            <option value="yes" '.$yes.'>'.__('Yes','popho').'</option>
                            <option value="no" '.$no.'>'.__('No','popho').'</option>
                        </select>';
                    } elseif ($option[4]=='textarea') {
                        echo '<textarea id="'.$option[0].'" name="'.$option[0].'" cols="40" rows="4">'.get_option($option[0]).'</textarea>';
                    } elseif ($option[4]=='select_options') {
                        $selected = '';
                        echo '<select name="'.$option[0].'">';
 
                        $names = explode('|', $option[5]);
                        $values = explode('|', $option[6]);
                        $selected = get_option($option[0]);
 
                        $loop = 0;
 
                        if ($names) {
                            foreach ($names as $name) {
 
                                echo '<option value="'.$values[$loop].'" ';
 
                                if ($selected==$values[$loop]) echo 'selected="selected"';
 
                                echo '>'.$name.'</option>';
 
                                $loop++;
                            }
                        }
                        echo '</select>';
                    } else {
                        echo '<input type="text" id="'.$option[0].'" name="'.$option[0].'" size="50" value="'.get_option($option[0]).'" />';
                    }
 
                    if ($option[3]) echo '<br/><span class="setting-description">'.$option[3].'</span>';
 
                    echo '</td></tr>';
                }
                echo '</table></div><br class="clear" />';
            }
            ?>
            <input type="submit" value="<?php _e('Ayarları Kaydet', 'popho'); ?>" name="save_popho_options" />
        </form>
    </div>
 
    <?php    } ?>