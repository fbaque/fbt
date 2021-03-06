<?php
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>
		<p class="nocomments">This post is password protected. Enter the password to view comments.</p>
	<?php
		return;
	}
	
	$cat = get_the_category(); 

?>

<!-- You can start editing here. -->
<?php if ( comments_open() ) : ?>
<div id="commentsbox">
<h3 id="comments"><?php comments_number('', '1 Commentaire', '% Commentaires' );?></h3>

<?php if ( have_comments() ) : ?>
<ol class="commentlist">
<?php wp_list_comments(
	array(
		'avatar_size' => 55,
	));
?>
</ol>

<div clas,s="comment-nav">
<div class="alignleft"><?php previous_comments_link() ?></div>
<div class="alignright"><?php next_comments_link() ?></div>
</div>

<?php endif; ?>
<?php else :
// comments are closed ?>
<?php endif; ?>


<?php if ( comments_open() ) : ?>

<div id="comment-form">

<div id="respond" >

<h3 id="comments-respond">Laisser un commentaire</h3>

<?php if (!$cat[0]->cat_ID && eregi("/portfolio/",$_SERVER[REQUEST_URI]) ) { 

          $actionAjaxLogin = "actionAjaxLogin('show');";
?>


    <?php	if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('Login Zone')  ) : ?>
  
    <?php endif; ?>
    
<?php }else  {  

          $actionAjaxLogin = "actionAjaxLogin()";
 } ?>

<div class="cancel-comment-reply">
<?php cancel_comment_reply_link(); ?>
</div>

<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
<p>Vous devez être <a href="<?php echo wp_login_url( get_permalink() ); ?>">connecté(e)</a> pour poster un commentaire.</p>
<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

<?php if ( is_user_logged_in() ) : ?>

<p>Connecté(e) en tant que <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a> | <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Déconnexion">Déconnexion &raquo;</a></p>

<?php else : ?>

<p><a id="linkAjaxLogin" onclick="<?php echo $actionAjaxLogin; ?>" href="javascript:void(0);" title="Connexion">Se connecter &raquo;</a></p>

<input type="text" name="author" id="author"  value="Nom prénom*" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;" size="22" tabindex="1" />

<input type="text" name="email" id="email" value="Email*" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;" size="22" tabindex="2" />

<input type="text" name="url" id="url" value="Site Internet" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;" size="22" tabindex="3" />


<?php endif; ?>

<textarea name="comment" id="comment" cols="100%" rows="10" tabindex="4"></textarea><br />

<input name="submit" type="submit" id="commentSubmit" tabindex="5" value="Envoyer" />
<?php comment_id_fields(); ?>
<?php do_action('comment_form', $post->ID); ?>

</form>

<?php endif;
// registration required and not logged in ?>

</div>
</div>
</div>
<?php else :
// comments are closed ?>
<?php endif;
// delete me and the sky will fall on your head ?>