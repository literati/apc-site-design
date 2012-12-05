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

<script type="text/javascript">
    $(window).scroll(function() {
      $('.whiteout').css('top', $(this).scrollTop()-75 + "px");
      $('.whiteout').css('position', 'relative');
      if($(this).scrollTop() < 100){
        $('.whiteout').css('position', 'static');
      }
    });
</script>

</head>

<body>


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
                    <a class='iframe' href="readmummy.php">Some Words with a Mummy</a>
                  </li>
                  <li>
                    <a href="readbox.php">The Oblong Box</a>
                  </li>
                  <li>
                    <a href="readmountains.php">A Tale of the Ragged Mountains</a>
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
                    <a href="explorebox.php">The Oblong Box</a>
                  </li>
                  <li>
                    <a href="exploremountains.php">A Tale of the Ragged Mountains</a>
                  </li>
                </ul>
              </li>
            </ul>
          </section>
        </nav>
      </div>

    </div>

    <!-- One Big Row  -->
    <div class="row big">

      <!-- The Story  -->

      <div class="six columns">
        <div class="panel whiteout radius">
          <?php include "stories/mummy.txt"; ?></div>
      </div>
      <div class="six columns measureme">

        <ul class="accordion">
          <li class="active">
            <div class="title">
              <h5>Dublin Core</h5>
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

        <ul class="accordion">
          <li>
            <div class="title">
              <h5>Timeline</h5>
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

        <ul class="accordion">
          <li>
            <div class="title">
              <h5>Map</h5>
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
    <div class="row storynav">
      <div class="twelve columns">
        <div class="panel">
          <h5>EDGAR ALLAN POE</h5>
          <div class="panel callout radius">
            <table class="twelve">
              <tr>
                <td>
                  <a href="exploremummy.php">
                    <img src="images/mummy.svg" alt="mummy" width="50"/>
                  </a>
                </td>
                <td>
                   <a href="explorebox.php">
                  <img src="images/box.svg" alt="box" width="50"/>
                  </a>
                </td>
                <td>
                   <a href="exploremounts.php">
                  <img src="images/mounts.svg" alt="mountains" width="50"/>
                  </a>
                </td>
              </tr>
              <tr>
                <td>
                  <a class="button" href="exploremummy.php">Some Words with a Mummy</a>
                </td>
                <td>
                  <a class="button" href="exploremummy.php">The Oblong Box</a>
                </td>
                <td>
                  <a class="button" href="exploremummy.php">A Tale of the Ragged Mountains</a>
                </td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <footer class="row">

    </footer>

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