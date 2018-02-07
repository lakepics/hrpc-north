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
    <div class="col-md-8">
            <?php echo '<h2>' . get_field('first_row_header') . '</h2>';
                echo get_field('first_row_content');
            ?>
            </div>

<?php 

$news= get_field('news');
    echo '<div class="col-sm-12 col-md-4 home-content__news-updates">';
    echo '<h2 class="home-content__news-wrapper__heading">News & Announcements</h2>';
    foreach ($news as $new) {    
        echo '<div class="home-content__news-wrapper__single">';
            echo '<div class="home-content__news-wrapper__single-date">' . $new['date'] . '</div>';      
                echo '<h4>' . $new['heading'] . '</h4>';      
                echo '<p>' . $new['content'] . '...</p>';
                echo '<div class="home-content__news-wrapper__single-read"><a href="' . $new['link'] . '"><span class="ql-anchor" php="">Read More <i class="fa fa-chevron-right" aria-hidden="true"></i></span></a>';
                echo '</div>';
        echo '</div>';
    }

    echo '<a href="http://hrpcnorth.ucla.edu/news-archives/"><div class="home-content__button">
    View Archives
</div></a>';
echo'</div>';

    ?>
<?php endwhile; ?>




