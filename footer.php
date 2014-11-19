<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/bootstrap-sprockets.js"></script>
<script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>
<script type="text/javascript">
    $( document ).on( "pageinit", "#generic-page", function() {
        $( document ).on( "swipeleft", "#generic-page", function( e ) {
            if ( $.mobile.activePage.jqmData( "panel" ) !== "open" ) {
                if ( e.type === "swiperight" ) {
                    $( "#left-panel" ).panel( "open" );
                }
            }
        });
    });
</script>

</body>
</html>
