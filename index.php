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
    <meta charset="utf-8" />

    <!-- Set the viewport width to device width for mobile -->
    <meta name="viewport" content="width=device-width" />

    <title>Antebellum Print Culture</title>

    <!-- Colorbox.js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <link rel="stylesheet" href="colorbox/colorbox.css" />

    <!-- Included CSS Files, use foundation.css if you do not want minified code -->
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">

    <!-- Load fonts -->
    <link href='http://fonts.googleapis.com/css?family=Abel|Alice' rel='stylesheet' type='text/css'>

    <!-- Custom Modernizr for Foundation -->
    <script src="js/modernizr.foundation.js"></script>

    <!-- TimelineJS -->
    <script type="text/javascript" src="js/storyjs-embed.js"></script>
    <script>
            $(document).ready(function() {
                createStoryJS({
                    type:       'timeline',
                    width:      '100%',
                    height:     '400',
                    source:     'http://literati.cct.lsu.edu/omeka/rest/timeline/find?tale=mummy&output=omeka-json&callback=Storyjs_jsonp_data',
                    embed_id:   'my-timeline',
                    debug:      true
                });
            });
    </script>

</head>

<body>

    <!-- Header and Nav -->
    <?php include "components/header.php"; ?>

    <!-- Two-up Content Blocks  -->
    <div class="row">

      <div class="eight columns">
        <div class="panel">
          <h5>TIMELINE</h5>
          <div id="my-timeline"></div>
        </div>
      </div>

      <div class="four columns">
        <div class="panel">
          <h5>ABOUT</h5>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
        </div>
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

    <script src="colorbox/jquery.colorbox.js"></script>
    <script>
      $(document).ready(function(){
        $(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});
      });
    </script>

</body>
  </html>