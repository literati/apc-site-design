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
                    debug:      false
                });
            });
    </script>

</head>

<body>

    <!-- BEGIN Header -->
    <div class="row">
      <div class="twelve columns">
        <?php include "components/header.php"; ?></div>
    </div>
    <!-- END Header -->

    <!-- BEGIN Page Content  -->

    <div class="row">
      <div class="twelve columns">
        <div class="panel">
          <h5>ABOUT</h5>
          <p>
            <?php include "components/about.txt" ?></p>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="twelve columns">
        <div class="panel">
          <h5>TIMELINE</h5>
          <div id="my-timeline"></div>
        </div>
      </div>
    </div>

    <!-- END Page Content  -->

    <!-- BEGIN Story Navigation -->
    <div class="row storynav">
      <div class="twelve columns">
        <?php include "components/storynav.php"; ?></div>
    </div>
    <!-- END Story Navigation -->

    <div class="bottomImg"></div>

    <!-- Latest version of jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Included JS Files (Minified) -->
    <script src="js/foundation.min.js"></script>

    <!-- Initialize JS Plugins -->
    <script src="js/app.js"></script>

    <!-- BEGIN Colorbox Script -->
    <script src="colorbox/jquery.colorbox.js"></script>
    <script>
      $(document).ready(function(){
        $(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});
      });
     </script>
    <!-- END Colorbox Script -->

</body>
  </html>