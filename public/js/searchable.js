 
			$(document).ready(function(){
				$("#search").keyup(function(){
					$key = $("#search").val();
					if($key.length != 0 ){
							
							

					}		
				});


				    function log( message ) {
				      $( "<div>" ).text( message ).prependTo( "#log" );
				      $( "#log" ).scrollTop( 0 );
				    }
				 
				    $( "#search" ).autocomplete({
				      source: function( request, response ) {
				        $key = $("#search").val();
							if($key.length != 0 ){
									
								$.ajax( {
								          url:"searchResult/"+$key,
								          type: "GET",

								          
								          data: {
								            _token: "{{ csrf_token() }}"
								          },
								          success: function( data ) {
								          	console.log(data.list);
								            response( data.list );
								          }

						        } );	

							}else{
								$( "#search" ).autocomplete( "close" );

							}	
				      },
				      minLength: 0,
				      autoFocus: true,
				      delay: 0,
				      select: function( event, ui ) {
				        log( "Selected: " + ui.item.value + " aka " + ui.item.id );
				      }
				    } );
				  } );
							