<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
  <meta charset="utf-8" />

  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />

  <title>Some Words with a Mummy</title>

  <!-- Included CSS Files, use foundation.css if you do not want minified code -->
  <link rel="stylesheet" href="css/foundation.min.css">
  <link rel="stylesheet" href="css/app.css">

  <!-- Custom Modernizr for Foundation -->
  <script src="js/foundation/modernizr.foundation.js"></script>

<style>
body{
	background: #fff url('') repeat fixed; 
}

</style>

</head>

<body>

	<div class="row">
		<div class="twelve columns">
			<div class="panel whiteout">
			<?php include "stories/mummy.txt"; ?>
		</div>
		</div>
	</div>
  <!-- Page Layout HTML here -->

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



                    