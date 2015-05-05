<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="../framework/bootstrap/2.0/js/bootstrap.min.js"></script>
<script src="../framework/jquery/jquery.mobile.custom.min.js"></script>

    <script>
    $(document).ready(function() {
		    $("#myCarousel").swiperight(function() {
		    	$("#myCarousel").carousel('prev');
		    });
		    $("#myCarousel").swipeleft(function() {
		    	$("#myCarousel").carousel('next');
		    });
			
    });
        
    </script>