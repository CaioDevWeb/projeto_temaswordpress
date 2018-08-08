<?php get_header(); ?>
<?php //get_header('personalizado'); ?>

<main>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h1>Posts abaixo:</h1>
                <?php
                if (have_posts()):
                    echo '<ul class="media-list">';

                    while (have_posts()): the_post();
                        $image = '';
                        if (has_post_thumbnail()) {
                            $image = sprintf('<div class="media-left"><a href="%s">%s</a></div>', get_the_permalink(), get_the_post_thumbnail());
                        }
                        $body = sprintf('<div class="media-body"><h3 class="media-heading"><a href="%s">%s</a></h3><p>%s</p></div>', get_the_permalink(), get_the_title(), get_the_content('Continue lendo...'));

                        printf('<li class="media">%s%s</li>', $image, $body);
                    endwhile;
                    echo '<ul>';
                else:
                    echo '<p>Você não possui posts no momento.</p>';
                endif;
                ?>

            </div>
            <div class="col-md-3">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</main>


<?php //get_footer('personalizado'); ?>
<?php get_footer(); ?>












