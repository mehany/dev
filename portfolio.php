<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <link href="assets/stylesheets/screen.css" media="screen, projection" rel="stylesheet" type="text/css" />
    <link href="assets/stylesheets/joyride/joyride-2.1.css" rel="stylesheet" />

    <title>EM57 | Web developer</title>
</head>
<body role="document">
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Bootstrap theme</a>
        </div>
        <div class="navbar-collapse collapse">

        </div><!--/.nav-collapse -->
    </div>
</div>




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

    $( document ).on( "pageinit", "[data-role='page']", function() {
        var page = "#" + $( this ).attr( "id" ),
        // Get the filename of the next page that we stored in the data-next attribute
            next = $( this ).jqmData( "next" ),
        // Get the filename of the previous page that we stored in the data-prev attribute
            prev = $( this ).jqmData( "prev" );
        // Check if we did set the data-next attribute
        if ( next ) {
            // Prefetch the next page
            $.mobile.loadPage( next + ".html" );
            // Navigate to next page on swipe left
            $( document ).on( "swipeleft", page, function() {
                $.mobile.changePage( next + ".html", { transition: "slide" });
            });
            // Navigate to next page when the "next" button is clicked
            $( ".control .next", page ).on( "click", function() {
                $.mobile.changePage( next + ".html", { transition: "slide" } );
            });
        }
        // Disable the "next" button if there is no next page
        else {
            $( ".control .next", page ).addClass( "ui-disabled" );
        }
        // The same for the previous page (we set data-dom-cache="true" so there is no need to prefetch)
        if ( prev ) {
            $( document ).on( "swiperight", page, function() {
                $.mobile.changePage( prev + ".html", { transition: "slide", reverse: true } );
            });
            $( ".control .prev", page ).on( "click", function() {
                $.mobile.changePage( prev + ".html", { transition: "slide", reverse: true } );
            });
        }
        else {
            $( ".control .prev", page ).addClass( "ui-disabled" );
        }
    });
</script>

</body>
</html>
