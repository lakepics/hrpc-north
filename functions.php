<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
  'lib/assets.php',    // Scripts and stylesheets
  'lib/extras.php',    // Custom functions
  'lib/setup.php',     // Theme setup
  'lib/titles.php',    // Page titles
  'lib/wrapper.php',   // Theme wrapper class
  'lib/customizer.php' // Theme customizer
];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);

// Add Default Bootstrap Nav // Register Custom Navigation Walker
require_once('wp-bootstrap-navwalker.php');

function register_top_nav_menu() {
  register_nav_menu('top-nav-menu',__( 'Top Nav Menu' ));
}
add_action( 'init', 'register_top_nav_menu' );

// dump function, for development purposes
function dump($var)
{
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
}

//change the title from dash to pipe
function wploop_change_separator()
{
return '|';
}
add_filter('document_title_separator', 'wploop_change_separator');



add_shortcode( 'download-button', 'download_button_shortcode' );
function download_button_shortcode( $atts ) {
       extract( shortcode_atts(
               array(
                       'color' => 'blue',
                       'content' => 'Content',
                       'subtitle' => 'Subtitle',
                       'url' => ''
               ),
               $atts
       ));
       return '<p><a class="btn button" href="' . $url . 'target="_blank">' . $content . '&nbsp; &nbsp; <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a></p>';
}


add_shortcode( 'external-button', 'external_button_shortcode' );
function external_button_shortcode( $atts ) {
       extract( shortcode_atts(
               array(
                       'color' => 'blue',
                       'content' => 'Content',
                       'subtitle' => 'Subtitle',
                       'url' => ''
               ),
               $atts
       ));
       return '<p><a class="btn button" href="' . $url . 'target="_blank">' . $content . '&nbsp; &nbsp;<span class="fa fa-external-link" aria-hidden="true"></span></a></p>';
}

/* Add button to text editor */
function download_shortcode_button_script() 
{
    if(wp_script_is("quicktags"))
    {
        ?>
            <script type="text/javascript">
                
                //this function is used to retrieve the selected text from the text editor
                function getSel()
                {
                    var txtarea = document.getElementById("content");
                    var start = txtarea.selectionStart;
                    var finish = txtarea.selectionEnd;
                    return txtarea.value.substring(start, finish);
                }

                QTags.addButton( 
                    "1", 
                    "Download Button", 
                    callback
                );

                function callback()
                {
                    var selected_text = getSel();
                    QTags.insertContent("[download-button content='Enter Button Text Here' url='Enter URL here']");

                }

                //this function is used to retrieve the selected text from the text editor
                function getSel2()
                {
                    var txtarea = document.getElementById("content");
                    var start = txtarea.selectionStart;
                    var finish = txtarea.selectionEnd;
                    return txtarea.value.substring(start, finish);
                }

                QTags.addButton( 
                    "2", 
                    "External Button", 
                    "[External-button content='Enter Button Text Here' url='Enter URL here']",
                );

            </script>
        <?php
    }
}

add_action("admin_print_footer_scripts", "download_shortcode_button_script");


/* Add button to text editor */