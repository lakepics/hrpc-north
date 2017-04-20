<?php
   $slides = get_field("slides");
if ($slides) {
    echo '<div class="hero-slider">';
    foreach ( $slides as $slide ) {
        echo '<div><img src="' . $slide['image'] . '"><div class="overlay-wrapper"><div class="overlay-container"><div class="overlay-content"><h1>' . $slide['overlay_heading'] . '</h1><p>' . $slide['overlay_copy'] . '</p></div></div></div></div>';
    }
    echo '</div>';
}
    ?>
