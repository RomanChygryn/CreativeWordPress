  $(document).ready(function(){

    		$('#newsMore').click(function(event){
          event.preventDefault();
    			$('#newsWrapper').toggleClass('wrapper--active');
          if ($('#newsWrapper').hasClass( "wrapper--active" )) {
            $('#newsMore').text("Hide");
          } else {
            $('#newsMore').text("Show more");
          }
    	})

  });
