<article <?php post_class(); ?>>
    <h2><?php the_title(); ?> - Vídeo</h2>
    <?php the_post_thumbnail( array(275, 275) ); ?>
    <p>Published in <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?></p>
    <p>Categories: <?php the_category( ' ' ); ?></p>
    <p><?php the_tags( 'Tags: ', ', ' ); ?></p>
    <?php echo get_the_content(); ?>
</article>
