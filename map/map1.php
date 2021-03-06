<!DOCTYPE html>

<head>

<!-- bootstrap -->
  <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
  <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <link rel="stylesheet" href="vendor/bootstrap/2.0.2/css/bootstrap.css" />

  <link rel="stylesheet" href="vendor/leaflet/0.4.4/leaflet.css">
  <!--[if lte IE 8]>
  <link rel="stylesheet" href="vendor/leaflet/0.4.4/leaflet.ie.css" />
  <![endif]-->
  <link rel="stylesheet" href="vendor/leaflet.markercluster/MarkerCluster.css">
  <link rel="stylesheet" href="vendor/leaflet.markercluster/MarkerCluster.Default.css">
  <!--[if lte IE 8]>
  <link rel="stylesheet" href="vendor/leaflet.markercluster/MarkerCluster.Default.ie.css" />
  <![endif]-->
  <link rel="stylesheet" href="vendor/slickgrid/2.0.1/slick.grid.css">
  <link rel="stylesheet" href="vendor/timeline/20120520/css/timeline.css">

  <!-- Recline CSS components -->
  <link rel="stylesheet" href="css/grid.css">
  <link rel="stylesheet" href="css/slickgrid.css">
  <link rel="stylesheet" href="css/graph.css">
  <link rel="stylesheet" href="css/transform.css">
  <link rel="stylesheet" href="css/map.css">
  <link rel="stylesheet" href="css/multiview.css">
  <!-- /Recline CSS components -->

  <!-- 3rd party JS libraries -->
  <script type="text/javascript" src="vendor/jquery/1.7.1/jquery.js"></script>
  <script type="text/javascript" src="vendor/underscore/1.4.2/underscore.js"></script>
  <script type="text/javascript" src="vendor/backbone/0.9.2/backbone.js"></script>
  <script type="text/javascript" src="vendor/mustache/0.5.0-dev/mustache.js"></script>
  <script type="text/javascript" src="vendor/bootstrap/2.0.2/bootstrap.js"></script>
  <script type="text/javascript" src="vendor/flotr2/flotr2.js"></script>
  <script type="text/javascript" src="vendor/leaflet/0.4.4/leaflet.js"></script>
  <script type="text/javascript" src="vendor/leaflet.markercluster/leaflet.markercluster.js"></script>
  <script type="text/javascript" src="vendor/slickgrid/2.0.1/jquery-ui-1.8.16.custom.min.js"></script>
  <script type="text/javascript" src="vendor/slickgrid/2.0.1/jquery.event.drag-2.0.min.js"></script>
  <script type="text/javascript" src="vendor/slickgrid/2.0.1/slick.grid.min.js"></script>
  <script type="text/javascript" src="vendor/moment/1.6.2/moment.js"></script>
  <script type="text/javascript" src="vendor/timeline/20120520/js/timeline.js"></script>

  <!--
    ## Just use the all in one library version rather than individual files

  <script type="text/javascript" src="dist/recline.js"></script>

  -->

  <!-- model and backends -->
  <script type="text/javascript" src="src/ecma-fixes.js"></script>
  <script type="text/javascript" src="src/model.js"></script>
  <script type="text/javascript" src="src/backend.memory.js"></script>
  <script type="text/javascript" src="src/backend.dataproxy.js"></script>
  <script type="text/javascript" src="src/backend.gdocs.js"></script>
  <script type="text/javascript" src="src/backend.elasticsearch.js"></script>
  <script type="text/javascript" src="src/backend.csv.js"></script>
  <script type="text/javascript" src="src/backend.ckan.js"></script>
  <script type="text/javascript" src="src/backend.solr.js"></script>

  <!-- views -->
  <script type="text/javascript" src="src/view.grid.js"></script>
  <script type="text/javascript" src="src/view.slickgrid.js"></script>
  <script type="text/javascript" src="src/view.transform.js"></script>
  <script type="text/javascript" src="src/data.transform.js"></script>
  <script type="text/javascript" src="src/view.graph.js"></script>
  <script type="text/javascript" src="src/view.map.js"></script>
  <script type="text/javascript" src="src/view.timeline.js"></script>
  <script type="text/javascript" src="src/widget.pager.js"></script>
  <script type="text/javascript" src="src/widget.queryeditor.js"></script>
  <script type="text/javascript" src="src/widget.filtereditor.js"></script>
  <script type="text/javascript" src="src/widget.facetviewer.js"></script>
  <script type="text/javascript" src="src/widget.fields.js"></script>
  <script type="text/javascript" src="src/view.multiview.js"></script>

</head>

<body>

<div id="mymap"></div>

<script type="text/javascript">

var data = (function () {
    var json = null;
    $.ajax({
        'async': false,
        'global': false,
        'url': "../mapdata.json",
        'dataType': "json",
        'success': function (data) {
            json = data;
        }
    });
    return json;
})(); 

</script>

<script type="text/javascript">

var dataset = new recline.Model.Dataset({
  	records: data
});

</script>

<script type="text/javascript">
var $el = $('#mymap');
var map = new recline.View.Map({
  model: dataset
});
$el.append(map.el);
map.render();
</script>

</body>
</html>