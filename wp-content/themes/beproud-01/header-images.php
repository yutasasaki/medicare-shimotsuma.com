<?php if(is_home()){ ?>
	<img src="<?php echo home_url(); ?>/images/h1_blog.jpg" alt="Weblog" >
<?php }elseif(is_page(array('dr','service','clinic','access','price','blog'))){ ?>
	<img src="<?php echo home_url(); ?>/images/h1_<?php echo get_page_uri($post->ID);?>.jpg" alt="<?php the_title(); ?>" >
<?php }else{ ?>
	<img src="<?php echo home_url(); ?>/images/h1_blog.jpg" alt="<?php bloginfo('name'); ?> Rotating Header Image" title="<?php bloginfo('name'); ?> Random Header Image" />
<?php } ?>