<?php $options = get_option( 'portafolio_theme_settings' ); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">

<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
    
<!-- Stylesheet & Favicon -->
<link rel="icon" type="image/png" href="<?php echo $options['favicon']; ?>" />

<?php if(is_page_template( 'template-portfolio.php') || is_tax ('portfolio_cats')) { ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/style.css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/prettyphoto.css" />
<?php } else { ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" /> <?php } ?>
<!-- Google Fonts -->

<!-- WP Head -->
<?php if ( is_single() || is_page() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>

<script type="text/javascript" charset="utf-8">
/*jQuery(function($){
	$(document).ready(function(){
		//Image opacity hover-over
		var opacity = 1, toOpacity = 0.7, duration = 300;
		$('.opacity').css('opacity',opacity).hover(
		function() {
		$(this).fadeTo(duration,toOpacity);},
		function() {
		$(this).fadeTo(duration,opacity);
		} );
	// superFish
	$('ul.sf-menu').supersubs({
		minWidth:    16, // minimum width of sub-menus in em units
		maxWidth:    40, // maximum width of sub-menus in em units
		extraWidth:  1 // extra width can ensure lines don't sometimes turn over
     })
    	.superfish(); // call supersubs first, then superfish
	});
}); */
</script>

<?php if(is_front_page()) { ?>
<script type="text/javascript">
jQuery(function($){
$(window).load(function() {
//homepage Slider
	$('#slider').nivoSlider({
		directionNav: true,
		directionNavHide: true,
		captionOpacity: 0.8,
		controlNav: false,
		boxCols: 8,
		boxRows: 4,
		slices: 15,
		effect:'<?php if($options['effect'] != '') { echo $options['effect']; } else { echo 'fade'; } ?>',
		animSpeed: <?php if($options['anim_speed'] != '') { echo $options['anim_speed']; } else { echo 500; } ?>,
		pauseTime: <?php if($options['pause_time'] != '') { echo $options['pause_time']; } else { echo 3000; } ?>
	});
	});
});
</script>
<?php } ?>

<?php 
// Get And Show Analytics Code 
echo stripslashes($options['analytics']); 
?>

</head>
<body <?php body_class($class); ?>>
<div id="header-wrap">
    <div id="header" class="clearfix">
        <div id="logo">
        	<?php if($options['logo'] !='') { ?>
            <a  style="float : left" href="<?php bloginfo( 'url' ) ?>/" title="<?php bloginfo( 'name' ) ?>" rel="home"><img src="<?php echo $options['logo']; ?>" alt="<?php bloginfo( 'name' ) ?>" /></a>
            <?php } else { ?>
            <?php if (is_front_page()) { ?>
            <h1><a href="<?php bloginfo( 'url' ) ?>/" title="<?php bloginfo( 'name' ) ?>" rel="home"><?php bloginfo( 'name' ) ?></a></h1>
            <?php } else { ?>
            <h2><a href="<?php bloginfo( 'url' ) ?>/" title="<?php bloginfo( 'name' ) ?>" rel="home"><?php bloginfo( 'name' ) ?></a></h2>
            <?php } } ?>
            <h1><a href="<?php bloginfo( 'url' ) ?>/">Infiniment-Pixel<br /><span>Frédéric BAQUE – Photographies</span></a></h1>
        </div>
        <!-- END logo -->
        
        <div id="navigation" class="clearfix">
            <?php
            //define main navigation
            wp_nav_menu( array(
                'theme_location' => 'main nav',
                'sort_column' => 'menu_order',
                'menu_class' => 'sf-menu',
                'fallback_cb' => 'default_menu'
            )); ?>
        </div>
        <!-- END navigation -->   
    </div><!-- END header -->
</div><!-- END header-wrap -->
<div id="wrap">