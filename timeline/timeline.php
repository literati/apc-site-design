
<!DOCTYPE html>
<html lang="en"><!--
  	 
  	88888888888 d8b                        888 d8b                888888   d8888b  
  	    888     Y8P                        888 Y8P                   88b d88P  Y88b 
  	    888                                888                       888 Y88b
  	    888     888 88888b d88b     d88b   888 888 88888b     d88b   888   Y888b
  	    888     888 888  888  88b d8P  Y8b 888 888 888  88b d8P  Y8b 888      Y88b
  	    888     888 888  888  888 88888888 888 888 888  888 88888888 888        888 
  	    888     888 888  888  888 Y8b      888 888 888  888 Y8b      88P Y88b  d88P 
  	    888     888 888  888  888   Y8888  888 888 888  888   Y8888  888   Y8888P
  	                                                                d88P            
  	                                                              d88P             
  	                                                            888P              
  	 -->
    <head>
        <!-- jQuery -->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <!-- BEGIN TimelineJS -->
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
        <!-- END TimelineJS -->
    </head>
    <body>  
        <div id="my-timeline"></div>
    </body>
