<?php
/**
* Template Name: Anchored Sections Template
*/
?>

<?php while (have_posts()) : the_post(); ?>
<?php get_template_part('templates/page', 'header'); ?>
<?php get_template_part('templates/content', 'page'); ?>
    <div class="content-wrapper">
        <div class="col-md-8 col-xs-12">
            <?php $page_content = get_field('content');
            if ( $page_content )  {
                foreach ($page_content as $section) {
                echo '<section id="' . $section['anchor_name'] .'">
                        <h2>' . $section['heading'] . '</h2>';
                    echo $section['content'];
                    echo '</section>';
                }
            }
            ?>
        </div>
        <div class="col-md-4 col-xs-12">
            <?php
            if ( $page_content ) {
            echo '<ul class="sidebar-nav">';
            foreach ($page_content as $section) {
                echo '<li><a href="#' . $section['anchor_name'] . '">' . $section['heading'] . '</a></li>';
            }
            echo '</ul>';
            }?>
        </div>
    </div>
<?php endwhile; ?>
