<?php
/**
* Template Name: Empty Page Template
*/
?>

<?php while (have_posts()) : the_post(); ?>
<?php get_template_part('templates/page', 'header'); ?>
<?php get_template_part('templates/content', 'page'); ?>
    <div class="content-wrapper">
                <?php get_template_part('templates/component', 'back-to-top'); ?>
        <div class='col-md-12'>
            <?php echo get_field('canvas'); ?>
        </div>
    </div>
<?php endwhile; ?>
