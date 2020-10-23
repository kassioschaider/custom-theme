<?php get_header(); ?>

<img class="img-fluid" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" 
    widht="<?php echo get_custom_header()->widht; ?>" alt="" />

    <div class="content-area">
        <main>
            <section class="slide">
                <div class="container">
                    <div class="row">Slide</div>
                </div>
            </section>
            <section class="services">
                <div class="container">
                    <div class="row">Serviços</div>
                </div>
            </section>
            <section class="middle-area">
                <div class="container">
                    <div class="row">
                        <div class="news col-md-8">

                            <?php
                            //Se houver algum post
                            if( have_posts() ):
                                //Enquanto houver posts, mostre-os
                                while( have_posts() ): the_post();
                            ?>

                            <?php get_template_part( 'template-parts/content', get_post_format() ); ?>

                            <?php
                                endwhile;
                            else:
                            ?>
                            <p>There's nothing yet to be displayed...</p>

                            <?php endif; ?>

                        </div>
                        <?php get_sidebar( 'blog' ); ?>
                    </div>
                </div>
            </section>
            <section class="map">
                <div class="container">
                    <div class="row">Mapa</div>
                </div>
            </section>
        </main>
    </div>
<?php get_footer(); ?>