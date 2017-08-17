<?php
 $quicklinks = get_field('quick_links');
if ($quicklinks) {
    echo '<div class="quick-links"><div class="page-container">';
    foreach ($quicklinks as $content ) {
        echo '<div class="col-sm-3 center-block  text-center">
        <a  class="quicklink-block-hover" href="' . $content['read_more'] . '">
        <i class="' . $content['icon'] . ' quick-link-icon"></i>
        <p class="quicklink-content-p">' . $content['content'] . '</p>
        <span class="ql-anchor"php>Read More <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
        </div>';
    }
    echo '</div></div>';
}
?>
