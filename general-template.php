<?php 

/*

Template Name: General Template

*/
?>

<?php get_header(); ?>
    <div class="content-area">
        <main>
            <section class="middle-area">
                <div class="container">
                    <div class="general-template">
                        <?php
                        //Se houver algum post
                        if( have_posts() ):
                            //Enquanto houver posts, mostre-os
                            while( have_posts() ): the_post();
                        ?>

                        <article>
                            <h2><?php the_title(); ?></h2>
                            <p>Published in <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?></p>
                            <p>Categories: <?php the_category( ' ' ); ?></p>
                            <p><?php the_tags( 'Tags: ', ', ' )?></p>
                            <?php echo get_the_content(); ?>
                        </article>

                        <p>Este modelo de páginas é igual em todas as páginas selecionadas</p>

                        <?php
                            endwhile;
                        else:
                        ?>
                        <p>There's nothing yet to be displayed...</p>

                        <?php endif; ?>
                    </div>
                </div>
            </section>
        </main>
    </div>
<?php get_footer(); ?>