<?php
/**
* Template Name: Style Guide Template
*/
?>

<?php while (have_posts()) : the_post(); ?>
<?php get_template_part('templates/page', 'header'); ?>
    <div class="content-wrapper">
<style>
.success {
    border-color: #a9e2c2;
    color: #36a367;
}

.info {
    border-color: #9ecdfc;
    color: #297ad3;
}

.notice {
    border-color: #f9ce75;
    color: #e9a00a;
}

.error {
    border-color: #ffbbbb;
    color: #e33131;
}

.heading-2  {
    background-color: #00284a;
    color: white !important;
}
.heading-padding {
	padding: 5px 20px !important;
}
.page-template .wrap .main .content-wrapper .col-md-4 {
       padding: 0px 15px !important; 
}
.max-width-image {
	width: 100%;
}
.padding-25 {
	margin-bottom: 25px;
}
.shadow-one {
	box-shadow: 0 3px 6px rgba(0,0,0,.16), 0 3px 6px rgba(0,0,0,.23);
}
.padding-top-30 {
	margin-top: 30px;
}
.article-box {
	padding-top: 15px;
}
</style>
<h2 style="
    padding-top: 50px;
">BUTTONS</h2>
<div class="row">
    <div class="col-md-6">
        <h5>DOWNLOADABLE CONTENT</h5>
        <p><a class="btn button" href="https://ucla.box.com/s/f1jxarmvvynjfpvokuuz09fxs14o9vwh" target="_blank">H&amp;HS Job Recruitment Process Guide &nbsp; &nbsp; <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a></p>
        <p><a class="btn button" href="#" target="_blank">Example &nbsp; &nbsp; <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a></p>
                <h5>Shortcode</h5>
        <div>
            <pre data-lang='css' class='prettyprint'>
[download-button content='Text Here' url='URL here']
</pre>
        </div>  
    </div>
    <div class="col-md-6">
        <h5>EXTERNAL CONTENT</h5>
        <p><a class="btn button" href="https://www.chr.ucla.edu/hr-administration/recruitment-hiring" target="_blank">CHR Recruitment &amp; Hiring  &nbsp; &nbsp;<span class="fa fa-external-link" aria-hidden="true"></span></a>
            <br>
        </p>
        <p><a class="btn button" href="#" target="_blank">Example &nbsp; &nbsp; <span class="fa fa-external-link" aria-hidden="true"></span></a></p>
                <h5>Shortcode</h5>
        <div>
            <pre data-lang='css' class='prettyprint'>
[external-button content='Text Here' url='URL here']
</pre>
        </div>  
    </div>
</div>
</row>
    <div class="row">
        <div class="col-md-12">
            <h4>Shortcodes</h4>
            <h5>Button Shortcodes - Notice the "External button" and "Download Button" above text editor.  Clicking on it will apply the shortcode in text editor automatically.</h5>
            <a href="http://hrpcnorth-dev.hhs.ucla.edu/wp-content/uploads/2018/02/qt2.png" target="_blank"><img class="max-width-image padding-25" src="http://hrpcnorth-dev.hhs.ucla.edu/wp-content/uploads/2018/02/qt2.png"></a>
        </div>
    </div>
<hr class="ts-divider" style="margin-top:30px;margin-bottom:40px;">
<h2>HEADINGS</h2>
<div class="row">
    <div class="col-md-4">
        <div>
            <h1>Heading 1</h1>
            <h2>Heading 2</h2>
            <h3>Heading 3</h3>
            <h4>Heading 4</h4>
            <h5>Heading 5</h5>
            <h6>Heading 6</h6>
        </div>
    </div>
    <div class="col-md-4">
        <h5>Global Heading</h5>
        <div>
            <pre data-lang='css' class='prettyprint'>
.h2, .h3, .h4, .h5, h3, h4, h5{
    font-family: Proxima Nova Semibold;
}

.h1, .h2, .h3, h1, h2, h3{
    margin-top: 20px;
    margin-bottom: 10px;
}

h1 {
    font-size: 36px;
    font-family: inherit;
}


/* H1 Style for Header */

.page-header h1 {
    font-family: Proxima Nova Regular;
    font-weight: 400;
    font-size: 40px;
    line-height: 106px;
}

h2 {
    font-family: Proxima Nova Semibold;
    font-weight: 600;
    font-size: 28px;
    color: #1e4b87;
    margin-bottom: 15px;
}
</pre>
        </div>
    </div>
    <div class="col-md-4">
        <h5>Font Size</h5>
        <pre data-lang='css' class='prettyprint'>
h1 {
    font-size: 36 px;
}
h2 {
    font-size: 28 px;
}
h3 {
    font-size: 24 px;
}
h4 {
    font-size: 18 px;
}
h5 {
    font-size: 14 px;
}
h6 {
    font-size: 12 px;
}
</pre>
    </div>
</div>
<hr class="ts-divider" style="margin-top:30px;margin-bottom:40px;">
<h2>FORMATING</h2>
<div class="row">
    <div class="col-md-6">
        <h5>PARAGRAPH</h5>
        <div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque mollis lacus augue, a hendrerit leo tristique vitae. Consectetur adipiscing elit. Integer posuere erat a ante. Mauris non ipsum molestie, sagittis elit ac, vulputate odio.</p>
        </div>
    </div>
    <div class="col-md-6">
        <h5>CSS</h5>
        <div>
            <pre data-lang='css' class='prettyprint'>
p {
  font-family: Proxima Nova Regular;
  font-weight: 400;
  line-height: 1.8em;
  color: #333333;
  margin-bottom: 15px;
}
</pre>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-3">
        <h2>LIST UL</h2>
        <div>
            <ul>
                <li>First item</li>
                <li>Second item</li>
                <li>Third item
                    <ul>
                        <li>First item</li>
                        <li>Second item</li>
                        <li>Third item</li>
                    </ul>
                </li>
                <li>Fourth item</li>
                <li>Fifth item</li>
            </ul>
        </div>
    </div>
    <div class="col-md-3">
        <h2>LIST OL</h2>
        <div>
            <ol>
                <li>First item</li>
                <li>Second item</li>
                <li>Third item
                    <ol>
                        <li>First item</li>
                        <li>Second item</li>
                        <li>Third item</li>
                    </ol>
                </li>
                <li>Fourth item</li>
                <li>Fifth item</li>
            </ol>
        </div>
    </div>
    <div class="col-md-6">
        <h5>CSS</h5>
        <div>
            <pre data-lang='css' class='prettyprint'>
ul {
  padding-left: 25px;
  margin-top: 0;
  margin-bottom: 10px;
}

ol {
    padding-left: 25px;
    margin-top: 0;
    margin-bottom: 10px;
}
</pre>
        </div>
    </div>
</div>

    <hr class="ts-divider" style="margin-top:30px;margin-bottom:40px;">
    <h2>Templates Styles</h2>
    <div class="row">
        <div class="col-md-8">
            <a href="http://hrpcnorth.ucla.edu/wp-content/uploads/2018/02/sg1.png" target="_blank"><img class="max-width-image padding-25 shadow-one" src="http://hrpcnorth.ucla.edu/wp-content/uploads/2018/02/sg1.png"></a>

            <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
        </div>
        <div class="col-md-4">
        	<div class="article-box">
        <h4>News Article Page</h4>
            <h5>template-empty-page.php</h5>
        </div>
            <div>
                <p class="padding-top-30">Notice the Heading Structure. The Hierrarchy is used to guide the user's eye as they navigate in website.
                    <ul>
                        <li>H1</li>
                        <li>H2</li>
                            <ul>
                                <li>p</li>
                            </ul>
                        <li>H3</li>
                        <ul>
                            <li>H4</li>
                            <ul>
                                <li>p</li>
                                <li>p</li>
                                <li>p</li>
                                
                            </ul>
                        </ul>          <ul>
                            <li>H4</li>
                            <ul>
                                <li>p</li>
                                <li>p</li>
                                <li>p</li>       
                        </ul>
                        </li>
                    </ul>
            </div>
        </div>
    </div>
</div>
<?php endwhile; ?>
