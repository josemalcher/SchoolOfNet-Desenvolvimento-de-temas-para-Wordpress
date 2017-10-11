<?php get_header(); ?>
<?php //get_header('personalizado'); ?>

    <div class="container">
        <h3>Posts da categoria - <?= single_cat_title(); ?></h3>
        <div class="row">
            <div class="col-md-9">
                <?php
                if (have_posts()):
                    echo '<ul class="media-list">';
                    while (have_posts()) : the_post();
                        // Formando estutura da thumbnail com Bootstrap
                        $image = '';
                        if (has_post_thumbnail()):
                            $image = sprintf('<div class="media-left"><a href="%s">%s</a></div>',
                                get_the_permalink(), get_the_post_thumbnail());
                        endif;

                        // Formando estrutura de conteúdo com Boostrap
                        $body = sprintf('<div class="media-body"><h3 class="media-heading"><a href="%s">%s</a></h3><p>%s</p></div>',
                            get_the_permalink(), get_the_title(), get_the_content('Mais[...]'));

                        // Imprimindo estrutura completa de imagem com conteúdo
                        printf('<li>%s%s</li>', $image, $body);
                        echo '<hr>';
                    endwhile;
                    echo "<ul>";
                else:
                    echo "<p>Ainda não temos post.</p>";
                endif;
                ?>
            </div>
            <div class="col-md-3">
                <?php get_sidebar(); ?>
            </div>
            <!--<div class="col-md-3">
            <?php //get_sidebar('personalizado'); ?>
        </div>-->
        </div>
    </div>

<?php //get_footer('personalizado'); ?>
<?php get_footer(); ?>