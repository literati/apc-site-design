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

    <!-- Included CSS Files, use foundation.css if you do not want minified code -->
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">

    <!-- Load fonts -->
    <link href='http://fonts.googleapis.com/css?family=Abel|Alice' rel='stylesheet' type='text/css'>

    <!-- Custom Modernizr for Foundation -->
    <script src="js/modernizr.foundation.js"></script>

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <!-- BEGIN TimelineJS -->
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
    <div id="container">

      <!-- Header and Nav -->
      <div class="row">
        <div class="twelve columns">
          <nav class="top-bar contain-to-grid">
            <ul>
              <li class="name">
                <h1>
                  <a href="index.php">ANTEBELLUM PRINT CULUTRE</a>
                </h1>
              </li>
              <li class="toggle-topbar">
                <a href="#"></a>
              </li>
            </ul>
            <section>
              <ul class="right">
                <li class="has-dropdown">
                  <a href="#">READ</a>
                  <ul class="dropdown">
                    <li>
                      <a href="readmummy.php">Some Words with a Mummy</a>
                    </li>
                    <li>
                      <a href="readbox.html">The Oblong Box</a>
                    </li>
                    <li>
                      <a href="readmountains.html">A Tale of the Ragged Mountains</a>
                    </li>
                  </ul>
                </li>
                <li class="has-dropdown">
                  <a href="#">EXPLORE</a>
                  <ul class="dropdown">
                    <li>
                      <a href="exploremummy.php">Some Words with a Mummy</a>
                    </li>
                    <li>
                      <a href="explorebox.html">The Oblong Box</a>
                    </li>
                    <li>
                      <a href="exploremountains.html">A Tale of the Ragged Mountains</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </section>
          </nav>
        </div>

      </div>

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

      <!-- Sotry Navigation -->
      <div class="row">
        <div class="twelve columns">
          <div class="panel">
            <h5>EDGAR ALLAN POE</h5>
            <div class="panel callout radius">
              <table class="twelve">
                <tr>
                  <td>
                    <a href="exploremummy.php"><img src="images/mummy.svg" alt="mummy" width="50"/></a>
                  </td>
                  <td>
                    <img src="images/box.svg" alt="box" width="50"/>
                  </td>
                  <td>
                    <img src="images/mounts.svg" alt="mountains" width="50"/>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a class="button" href="mummy.php">Some Words with a Mummy</a>
                  </td>
                  <td>
                    <a class="button" href="#">The Oblong Box</a>
                  </td>
                  <td>
                    <a class="button" href="#">A Tale of the Ragged Mountains</a>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>

      <!-- Footer -->
      <footer class="row"></footer>

    </div>

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

</body>
  </html>