<h1 class="entry-title _cf"><?php the_title() ?></h1><!-- Post title -->
<?php if( !post_password_required() ): ?>
<div class="hd entry_meta"> <!-- Meta holder -->
    <a href="<?php the_permalink() ?>" class="ico_link date"><?php the_date() ?></a>  <!-- Date -->
    
	<?php $title = esc_attr( __( 'View all posts by ', LANGUAGE_ZONE ) . get_the_author() ); ?>
	<a class="ico_link author" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ) ?>" title="<?php echo $title ?>">
		<?php echo get_the_author() ?>
	</a>  <!-- Author -->
	
	<?php // category
	 $categories = get_the_category_list( __( ', ', LANGUAGE_ZONE ) );
	 if( $categories ):
	?>
		<span class="ico_link categories">  <!-- Categories -->
			<?php echo $categories ?>
		</span>
	<?php endif ?>
	
	<?php //tags
	 $tags = get_the_tag_list( '', __( ', ', 'dt' ) );
	 if( $tags ):			
	?>
		<span class="ico_link tags">   <!-- Tags -->
			<?php echo $tags ?>
		</span>
    <?php endif ?>
</div>
<div class="entry_meta b"></div>
	<?php if( has_post_thumbnail() && ('status' != get_post_format()) && !get_post_meta( $post->ID, 'hide_f', true ) ): // post featuredimage ?>
		<?php
		$args = array(	'post_id'	=>$post->ID,
						'width'		=>630,
						'upscale'	=>false
					);
		$thumb = dt_get_thumbnail( $args );
		?>
			<a href="<?php echo $thumb['b_href'] ?>" class="alignleft dt_highslide_image" title="<?php echo $thumb['caption'] ?>">
				<img <?php echo $thumb['size'][3] ?> alt="<?php echo $thumb['alt'] ?>" src="<?php echo $thumb['t_href'] ?>"/>
			</a>  <!-- Featured image -->
	<?php endif ?>
	<?php if( 'status' == get_post_format() ): ?>	
	<div class="blockquote_bg status">
        <blockquote>
			<span class="quotes-l">
				<span class="quotes-r">				
					<?php the_content() ?>
				</span>
			</span>
		</blockquote>
	</div>
	<?php else:
		the_content();
		wp_link_pages();
	?>
	<?php endif; ?>
	<?php comments_template(); ?>
<?php else: ?>
	<?php echo get_the_password_form(); ?>
<?php endif; // pass protection ?>
