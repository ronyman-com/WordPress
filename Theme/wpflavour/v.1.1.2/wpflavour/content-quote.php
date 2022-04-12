<article id="post-<?php the_ID(); ?>"<?php post_class(); ?>>
<div class="wpfl_post">
<div class="postcontent">
<div class="entry-content">
<?php if(TemplateToaster_theme_option('ttr_read_more_button')):
the_content( '<span class="button">'.TemplateToaster_theme_option('ttr_read_more').'</span>' );
else:
the_content( TemplateToaster_theme_option('ttr_read_more') ); 
endif;?>
<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'wpflavour' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
</div><!-- .entry-content -->
</div>
<div class="entry-meta">
<?php TemplateToaster_entry_meta(); ?>
<?php if ( comments_open() && ! is_single() ) : ?>
<span class="comments-link">
<?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a comment', 'wpflavour' ) . '</span>', __( 'One comment so far', 'wpflavour' ), __( 'View all % comments', 'wpflavour' ) ); ?>
</span><!-- .comments-link -->
<?php endif; // comments_open() ?>
<?php edit_post_link( __( 'Edit This', 'wpflavour' ), '<span class="edit-link">', '</span>' ); ?>
</div><!-- .entry-meta -->
</div>
</article><!-- #post -->
