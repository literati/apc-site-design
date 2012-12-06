<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if IE 8]>
<html class="no-js lt-ie9" lang="en">
  <![endif]-->
  <!--[if gt IE 8]>
  <!-->
  <html class="no-js" lang="en">
    <!--<![endif]-->

<head>

    <!-- Colorbox for Reading View -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <link rel="stylesheet" href="colorbox/colorbox.css" />

    <meta charset="utf-8" />

    <!-- Set the viewport width to device width for mobile -->
    <meta name="viewport" content="width=device-width" />

    <title>Antebellum Print Culture</title>

    <!-- Included CSS Files, use foundation.css if you do not want minified code -->
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">

    <!-- Load fonts -->
    <link href='http://fonts.googleapis.com/css?family=Abel|Alice' rel='stylesheet' type='text/css'>

    <!-- Custom Modernizr for Foundation -->
    <script src="js/modernizr.foundation.js"></script>

    <!-- Move Story Window with Scroll -->
    <script type="text/javascript">
      $(window).scroll(function() {
        $('.story').css('top', $(this).scrollTop()-100 + "px");
        $('.story').css('position', 'relative');
        if($(this).scrollTop() < 100){
          $('.story').css('position', 'static');
        }
      });
    </script>

    <!-- TimelineJS -->
    <script type="text/javascript" src="js/storyjs-embed.js"></script>
    <script>
            $(document).ready(function() {
                createStoryJS({
                    type:       'timeline',
                    width:      '100%',
                    height:     '500',
                    source:     'http://literati.cct.lsu.edu/omeka/rest/timeline/find?tale=mummy&output=omeka-json&callback=Storyjs_jsonp_data',
                    embed_id:   'my-timeline',
                    debug:      true,
                    start_at_slide:     '3',                            //OPTIONAL START AT SPECIFIC SLIDE
                    start_zoom_adjust:  '3'                           //OPTIONAL TWEAK THE DEFAULT ZOOM LEVEL
                });
            });
        </script>

</head>

<body>

    <!-- Header and Nav -->
    <?php include "components/header.php"; ?>

    <!-- One Big Row  -->
    <div class="row big">

      <!-- The Story  -->
      <div class="six columns">
        <div class="panel whiteout radius storytitle">
          <h5>SOME WORDS WITH A MUMMY</h5>
          <a class="tiny button iframe" href="readmummy.php">Reading Mode</a>
        </div>
        <div class="panel whiteout story radius">
          <?php include "stories/mummy.txt"; ?></div>
      </div>

      <!-- Meta Information -->
      <div class="six columns measureme">

        <!-- Dubline Core -->
        <ul class="accordion">
          <li class="active">
            <div class="title">
              <h5>Document Overview</h5>
            </div>
            <div class="content">
              <p>
                Dublin Core... Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
            </div>
          </li>
        </ul>

        <!-- Timeline -->
        <ul class="accordion">
          <li>
            <div class="title">
              <h5>Timeline</h5>
            </div>
            <div class="content">
              <iframe src="timeline/timeline.php" 
                    width="100%" 
                    height="520px"
                    seamless
                    scrolling="no"
                    frameborder="0"></iframe>
            </div>
          </li>
        </ul>

        <!-- Map -->
        <ul class="accordion">
          <li>
            <div class="title">
              <h5>Map</h5>
            </div>
            <div class="content">
                <iframe src="map/map.php" 
                    width="100%" 
                    height="520px"
                    seamless
                    scrolling="no"
                    frameborder="0"></iframe>
            
            </div>
          </li>
        </ul>

        <!-- Media -->
        <ul class="accordion">
          <li>
            <div class="title">
              <h5>Media</h5>
            </div>
            <div class="content">
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
            </div>
          </li>
        </ul>

      </div>

    </div>

    <!-- Story Navigation -->
    <?php include "components/storynav.php"; ?>

    <!-- Footer -->
    <footer class="row"></footer>

    <div class="bottomImg"></div>

    <!-- Latest version of jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Included JS Files (Unminified) -->
    <!-- [JS Files] -->
    <!-- We include all the unminified JS as well. Uncomment to use them instead -->

    <!-- Included JS Files (Minified) -->
    <script src="js/foundation.min.js"></script>

    <!-- Initialize JS Plugins -->
    <script src="js/app.js"></script>

    <!-- Colorbox -->
    <script src="colorbox/jquery.colorbox.js"></script>
    <script>
      $(document).ready(function(){
        $(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});
      });
    </script>

</body>
  </html>
