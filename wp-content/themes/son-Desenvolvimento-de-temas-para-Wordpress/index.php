<?php get_header(); ?>
<?php get_header('personalizado'); ?>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p>Blog da School of Net</p>
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