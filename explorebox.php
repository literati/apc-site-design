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
                    start_at_slide:     '3',
                    start_zoom_adjust:  '3' 
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

    <!-- One Big Row  -->
    <div class="row big">

      <!-- The Story  -->
      <div class="six columns">
        <div class="panel whiteout radius storytitle">
          <h5>THE OBLONG BOX</h5>
          <a class="tiny button iframe" href="readbox.php">Reading Mode</a>
        </div>
        <div class="panel whiteout story radius">
          <?php include "stories/box.txt"; ?></div>
      </div>

      <!-- Meta Information -->
      <div class="six columns metainfo">

        <!-- Document Overview -->
        <ul class="accordion">
          <li class="active">
            <div class="title">
              <h5>Document Overview</h5>
            </div>
            <div class="content">
              <ul class="panel callout radius whiteout">
                <li>Title</li>
                <ul><li>The Oblong Box</li></ul>
                <li>Description</li>
                <ul><li>"The Oblong Box" is a tale by Edgar Allan Poe.  First published in September 1844 in Godey’s Lady’s Book, it is a story about a sea voyage and a mysterious box.</li></ul>
                <li>Creator</li>
                <ul><li>Edgar Allan Poe</li></ul>
                <li>Publisher</li>
                <ul><li>Godey's Magazine and Lady's Book</li></ul>
                <li>Date</li>
                <ul><li>September 1844</li></ul>
                <li>Language</li>
                <ul><li>English</li></ul>
                <li>Type</li>
                <ul><li>Short Story</li></ul>
              </ul>
            </div>
          </li>
        </ul>

        <!-- Timeline -->
        <ul class="accordion">
          <li class="active">
            <div class="title">
              <h5>Timeline</h5>
            </div>
            <div class="content">
              <iframe class="timeIF" src="timeline/timeline.php"></iframe>
            </div>
          </li>
        </ul>

        <!-- Map -->
        <ul class="accordion">
          <li class="active">
            <div class="title">
              <h5>Map</h5>
            </div>
            <div class="content">
              <iframe class="mapIF" src="map/map.php"></iframe>
            </div>
          </li>
        </ul>

      </div>

    </div>

    <!-- BEGIN Story Navigation -->
    <div class="row storynav">
      <div class="twelve columns">
        <?php include "components/storynav.php"; ?></div>
    </div>
    <!-- END Story Navigation -->

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