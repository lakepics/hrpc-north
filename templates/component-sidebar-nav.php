<?php
if ( $page_content ) {
echo '<p class="sidebar-nav-heading">On This Page:</p><ul class="sidebar-nav">';
foreach ($page_content as $section) {
    echo '<li><span class="bullet"><img src="/hrpc-north/wp-content/themes/hhs-master-s8.4.2/dist/images/molecule.svg"><img src="/hrpc-north/wp-content/themes/hhs-master-s8.4.2/dist/images/molecule.svg"></span><a href="#' . $section['anchor_name'] . '">' . $section['heading'] . '</a></li>';
}
echo '</ul>';}
?>
