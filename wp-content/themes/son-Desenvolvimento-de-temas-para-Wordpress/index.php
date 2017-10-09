<?php get_header(); ?>
<?php get_header('personalizado'); ?>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <?php
                    if(have_posts()):
                        echo "<ul>";
                        while(have_posts()) : the_post();
                            printf('<li>Post: %s, title: %s, content: %s</li>',$post->ID, $post->post_title, $post->post_content);
                        endwhile;
                        echo "</ul>";
                    else:
                        echo "<p> Ainda Não há postagem</p>";
                    endif;
                ?>



            </div>
            <div class="col-md-3">
                <?php get_sidebar(); ?>
            </div>
            <div class="col-md-3">
                <?php get_sidebar('personalizado'); ?>
            </div>

        </div>
    </div>

<?php get_footer('personalizado'); ?>
<?php get_footer(); ?>