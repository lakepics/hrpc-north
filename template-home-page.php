<?php
/**
 * Template Name: Home Page Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
<?php /* no title so commenting this out get_template_part('templates/page', 'header'); */ ?>
<?php get_template_part('templates/component', 'slides'); ?>
<?php get_template_part('templates/component', 'quick-link'); ?>
<div class="home-content">
    <div class="content-wrapper">
    <div class="row">
    <div class="col-md-12">
            <?php echo '<h2>' . get_field('first_row_header') . '</h2>';
                echo get_field('first_row_content');
            ?>
            </div>
    </div>
        </div>
    </div>

<?php endwhile; ?>
