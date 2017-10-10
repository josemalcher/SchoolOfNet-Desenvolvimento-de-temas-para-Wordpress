<?php get_header(); ?>
<?php //get_header('personalizado'); ?>
    <div class="container">
        <h3><?php single_post_title(); ?></h3>
        <div class="row">
            <div class="col-md-9">
                <?php
                if (have_posts()): the_post();
                    the_post_thumbnail('medium');
                    the_content();
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