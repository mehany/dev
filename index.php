<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <link href="assets/stylesheets/screen.css" media="screen, projection" rel="stylesheet" type="text/css" />
    <link href="assets/stylesheets/joyride/joyride-2.1.css" rel="stylesheet" />
    <style>
        /* Set the background image sources */
        .ui-mobile [data-role=page], .ui-mobile [data-role=dialog], .ui-page{position: relative;}
        #newyork { background-image: url(../../_assets/img/newyork.jpg); }
        #buenosaires { background-image: url(../../_assets/img/buenosaires.jpg); }
        #paris { background-image: url(../../_assets/img/paris.jpg); }
        #capetown { background-image: url(../../_assets/img/capetown.jpg); }
        #seoul { background-image: url(../../_assets/img/seoul.jpg); }
        #sydney { background-image: url(../../_assets/img/sydney.jpg); }
        </style>

    <title>EM57 | Web developer</title>
</head>
<body role="document">
<div data-role="page" id="demo-page" data-theme="t">

    <div data-role="header" data-theme="t">
        <h1>Swipe left or right</h1>
        <a href="#left-panel" data-theme="t" data-icon="arrow-r" data-iconpos="notext" data-shadow="false" data-iconshadow="false" class="ui-icon-nodisc">Open left panel</a>
        <a href="#right-panel" data-theme="t" data-icon="arrow-l" data-iconpos="notext" data-shadow="false" data-iconshadow="false" class="ui-icon-nodisc">Open right panel</a>
    </div><!-- /header -->

    <div data-role="content">

        <dl>
            <dt>Swipe <span>verb</span></dt>
            <dd><b>1.</b> to strike or move with a sweeping motion</dd>
        </dl>

        <a href="#demo-intro" data-rel="back" class="back-btn" data-role="button" data-mini="true" data-inline="true" data-icon="back" data-iconpos="right">Back to demo intro</a>

    </div><!-- /content -->

    <div data-role="panel" id="left-panel" data-theme="t">

        <p>Left reveal panel.</p>
        <a href="#" data-rel="close" data-role="button" data-mini="true" data-inline="true" data-icon="delete" data-iconpos="right">Close</a>

    </div><!-- /panel -->

    <div data-role="panel" id="right-panel" data-display="push" data-position="right" data-theme="t">

        <p>Right push panel.</p>
        <a href="#" data-rel="close" data-role="button" data-mini="true" data-inline="true" data-icon="delete" data-iconpos="right">Close</a>

    </div><!-- /panel -->

</div><!-- /page -->


<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/bootstrap-sprockets.js"></script>
<script src="assets/js/joyride/jquery.cookie.js"></script>
<script src="assets/js/joyride/jquery.joyride-2.1.js"></script>
<script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>



<script type="text/javascript">
    $( document ).on( "pageinit", "#demo-page", function() {

        $( document ).on( "swipeleft swiperight", "#demo-page", function( e ) {
            // We check if there is no open panel on the page because otherwise
            // a swipe to close the left panel would also open the right panel (and v.v.).
            // We do this by checking the data that the framework stores on the page element (panel: open).
            if ( $.mobile.activePage.jqmData( "panel" ) !== "open" ) {
                if ( e.type === "swipeleft"  ) {
                    $( "#right-panel" ).panel( "open" );
                } else if ( e.type === "swiperight" ) {
                    $( "#left-panel" ).panel( "open" );
                }
            }
        });
    });

    </script>

</body>
</html>
