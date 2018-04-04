<!doctype html>
<html lang="en">

	<head>
		<!-- meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- CSRF Token -->
    	<meta name="csrf-token" content="{{ csrf_token() }}">
	  	<!-- user defined:start -->
	  		<!-- custom css -->
	  		<link rel="stylesheet" href="{{url('/')}}/css/welcome.css">
	  		<!-- OFFLINE -->
	  		<link rel="stylesheet" href="{{url('/')}}/css/offline-theme-dark-indicator.css" />
		<!-- user defined:end -->
		<!-- font -->
		
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  		<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  		<!-- font aswome -->
  		<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js" integrity="sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ" crossorigin="anonymous"></script>
  		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<!-- bootstrap -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" />
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
		<!-- user defined:start -->
			<!-- home file -->
			<script type="text/javascript" src="{{url('/')}}/js/welcome.js"></script>
			<script type="text/javascript" src="{{url('/')}}/js/searchable.js"></script>
			<!-- OFLINE -->
			<script src="{{url('/')}}/js/offline.min.js"></script>
			<script>
			var run = function(){
			  var req = new XMLHttpRequest();
			  req.timeout = 5000;
			  req.open('GET', 'http://localhost', true);
			  req.send();
			}

			setInterval(run, 3000);
			</script>
			
		<!-- user defined:end -->

		<title>Online Test - Home Welcome Test Series at lowest cost</title>
	</head>
	<body>
		<!-- nav bar -->
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <a class="navbar-brand" href="#">
		    <img src="{{url('/')}}/image/OT.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
		    Bootstrap
		  </a>
		  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
		    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
		      <li class="nav-item active">
		        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Test</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Blog</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">About Us</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Contact Us</a>
		      </li>
		    </ul>
		    <a href="{{url('/')}}/login"><button type="button" class="btn btn-outline-primary bold">Login</button></a>
		    <a href="{{url('/')}}/register"><button type="button" class="btn btn-outline-danger bold">Sign Up</button></a>

		    <form class="form-inline my-2 my-lg-0">
		      <input class="form-control mr-sm-2" id = "search" type="search" placeholder="Search" aria-label="Search">
		      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		    </form>
		    
		  </div>
		</nav>
		<!-- Section:nav-bar -->
		
		<!-- cursoule:starat-->
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		  <ol class="carousel-indicators">
		    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		  </ol>
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img class="d-block w-100" src="{{url('/')}}/image/img1.jpg" alt="First slide">
		      <div class="carousel-caption">
			    <h5>We are Back</h5>
			    <p>Java AP</p>
			  </div>
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="{{url('/')}}/image/img2.jpg" alt="Second slide">
		      <div class="carousel-caption">
			    <h5>>We are Back</h5>
			    <p>Java AP</p>
			  </div>
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="{{url('/')}}/image/img3.jpg" alt="Third slide">
		      <div class="carousel-caption">
			    <h5>>We are Back</h5>
			    <p>Java AP</p>
			  </div>
		    </div>
		  </div>
		  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
		<!-- cursoule:end -->
		<br>
		<!-- Button Group Selection -->
		<div class="b-group">
			<div class="container b-group">
				<!-- button group -->
				<div align="center">
					<h3 id = "whyus" align="center">Test For you</h3>
					<div class="btn-group" role="group" aria-label="Button group with nested dropdown">
						


					    <button type="button" class="btn btn-primary filter-button" data-filter="all" >All</button>

	   				    <button type="button" class="btn btn-primary filter-button" data-filter="{{$course_data[0]->Course_name}}">{{$course_data[0]->Course_name}}</button>
					    <button type="button" class="btn btn-primary filter-button" data-filter="{{$course_data[1]->Course_name}}">{{$course_data[1]->Course_name}}</button>


						<div class="btn-group" role="group">
						    <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Other</button>
						    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
						    	@for($i = 2 ; $i<count($course_data) ; $i++ )
						    		<button class="dropdown-item filter-button" data-filter="{{$course_data[
						    		$i]->Course_name}}" >{{$course_data[$i]->Course_name}}</button>
						    	@endfor
						    </div>
						</div>
					</div>
				</div>
				<br>
				<!-- filter data -->
				<div class="row">
					@foreach($all_data as $data)
				        <div class="col-md-3 filter {{$data->Course_name}}">
				            <div class="each-item">
				                <img class="port-image" src="{{url('/')}}/image/filter-bg.jpg"/>
				                <div class="centered">{{$data->package_name}}-{{$data->Course_name}}</div>
				                <div class="cap1">
				                    <h3>{{$data->package_name}}-{{$data->Course_name}}</h3>
				                    <p>{{$data->description}}</p>
				                </div>
				                <div class="cap2">
				                    <p class="text-center">Visit</p>
				                </div>
				                
				            </div>
				            
				        </div>
			        @endforeach  
			    </div>
			</div>
			<br>

		</div>

		<!-- Button Group Selection:end -->
		<br>
		<!-- why to choose us -->
		<div class="container">
			<h3 id = "whyus" align="center">Why you Choose Us !</h3>
			<div class="row">
				<div align="center" class="col-sm-4">
					<span  ><i class="far fa-sun fa-3x"></i></span>
					<h4>Daily Quiz &amp; Capsule</h4>
					<p>Attempt the questions bilingual as per your prefer language &amp; feel real exam environment</p>
				</div>
				<div align="center" class="col-sm-4">
					<span  ><i class="far fa-sun fa-3x"></i></span>
					<h4>Daily Quiz &amp; Capsule</h4>
					<p>Attempt the questions bilingual as per your prefer language &amp; feel real exam environment</p>
				</div>
				<div align="center" class="col-sm-4">
					<span  ><i class="far fa-sun fa-3x"></i></span>
					<h4>Daily Quiz &amp; Capsule</h4>
					<p>Attempt the questions bilingual as per your prefer language &amp; feel real exam environment</p>
				</div>
			</div>
		</div>
		<!-- why to choose us:end -->

		<br>

		<!-- auto biography -->
		<div class="course-testimonials">
			<div class="wrapper">
				<div class="title auto-title"><h3 align="center">What Student Say?</h3></div>
				<div id="carousel2" class="carousel slide" data-ride="carousel">

				  <ol class="carousel-indicators">
				    <li data-target="#carousel2" data-slide-to="0" class="active"></li>
				    <li data-target="#carousel2" data-slide-to="1"></li>
				    <li data-target="#carousel2" data-slide-to="2"></li>
				  </ol>
				  <div class="carousel-inner">
				    <div class="carousel-item active">
				      <div class="d-block w-100 bg-blue" id="auto-div" alt="First slide"></div>
				      <div class="carousel-caption">
				      	<img class="col-sm-6 avtar-dp" src="{{url('/')}}/image/top1.png" alt="Second slide">
					    <h5>Amrnath Singh</h5>
					    <p>Thank you OnlineTest.com you make me proud to myself</p>
					  </div>
				    </div>
				    <div class="carousel-item">
				      <div class="d-block w-100" id="auto-div" alt="First slide"></div>
				      <div class="carousel-caption">
				      	<img class="col-sm-6 avtar-dp" src="{{url('/')}}/image/top1.png" alt="Second slide">
					    <h5>Amrnath Singh</h5>
					    <p>Thank you OnlineTest.com you make me proud to myself</p>
					  </div>
				    </div>
				    <div class="carousel-item">
				      <div class="d-block w-100" id="auto-div"  alt="First slide"></div>
				      <div class="carousel-caption">
				      	<img class="col-sm-6 avtar-dp" src="{{url('/')}}/image/top1.png" alt="Second slide">
					    <h5>Amrnath Singh</h5>
					    <p>Thank you OnlineTest.com you make me proud to myself</p>
					  </div>
				    </div>
				  </div>
				  <a class="carousel-control-prev" href="#carousel2" role="button" data-slide="prev">
				    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="carousel-control-next" href="#carousel2" role="button" data-slide="next">
				    <span class="carousel-control-next-icon" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>
				</div>
				</div>
			</div>
		</div>
		<!-- auto biography:end -->

		<br>

		<!-- student love us -->
		<div class="col-xs-12">
			<div class="studentLove">
				<div class="row">
					<div class="col-xs-12 col-sm-4 ">
						<div class="number"><span >0</span></div>
						<div class="text">Students Love Us</div>
					</div>
					<div class="col-xs-12 col-sm-4 ">
						<div class="number"><span >0</span></div>
						<div class="text">Questions attempted</div>
					</div>
					<div class="col-xs-12 col-sm-4 ">
						<div class="number"><span >0</span></div>
						<div class="text">Tests attempted</div>
					</div>
				</div>
			</div>
		</div>
		<!-- student love:end -->

		<br>

		<!-- overlay:start -->
		<div class="container-fluid bg-overlay">
			<div align="center">
				<h2>Lets Take a Toor...</h2>
				<br>
				<br>
				<br>
		        <a href="{{url('/')}}/register"><button type="button" class="btn btn-primary btn-lg">Get Started</button></a>
		        <BR>
		        <BR>
		        <BR>
		        <br>
		        <br>
		        <h1>Start Your Test Now..!!!</h1>
			</div>
		</div>

		<!-- overlay:end -->
		
		<br>

		<!-- in news -->
		<div class="container">
			<h3 align="center">In News !</h3>
			<div class="row">
				<div align="center" class="col-sm-3">
					<a href="#" target="_BLANK">
						<img src="https://cdn.toprankers.com/images/yahoo-02250d78af688.png" alt="Yahoo!">
					</a>	
				</div>
				<div align="center" class="col-sm-3">
					<a href="#" target="_BLANK">
						<img src="https://cdn.toprankers.com/images/yahoo-02250d78af688.png" alt="Yahoo!">
					</a>	
				</div>
				<div align="center" class="col-sm-3">
					<a href="#" target="_BLANK">
						<img src="https://cdn.toprankers.com/images/yahoo-02250d78af688.png" alt="Yahoo!">
					</a>	
				</div>
				<div align="center" class="col-sm-3">
					<a href="#" target="_BLANK">
						<img src="https://cdn.toprankers.com/images/yahoo-02250d78af688.png" alt="Yahoo!">
					</a>	
				</div>
			</div>
		</div>
		<!-- new:end -->

		<br>

		<!--Footer-->
		<footer class="foot">
		    <div class="container">
		        <div class="row">
		            <div class="col-md-6 col-sm-6" style="padding:0px">
                        <a href="https://kb.youth4work.com/tagged/y4w-media" class="fontcolor">Home</a><span style="color: #e6e6e6">&nbsp;|&nbsp;</span>
                        <a href="https://kb.youth4work.com/tagged/press" class="fontcolor">Test</a><span style="color: #e6e6e6">&nbsp;|&nbsp;</span>
                        <a href="https://www.youth4work.com/ContactUs" class="fontcolor">Blog</a><span style="color: #e6e6e6">&nbsp;|&nbsp;</span>
                        <a href="https://www.cos.youth4work.com/youth4work/jobs" class="fontcolor">Contact Us</a><span style="color: #e6e6e6">&nbsp;|&nbsp;</span>
                        <a href="https://www.youth4work.com/site_maps" class="fontcolor">About Us</a>
		            </div>
		            <div class="col-md-4" >
		                <p style="text-align:right;">mail : sarkariformbharo121@gmail.com</p>
		            </div> 
		        </div>
		        <hr class="fontcolor">
	            <div class="row">
                    <div class="col-md-12">
                        <div class="row">

                            <div class="col-md-1">
                        <p>hello</p>
                            </div>
                            <div class="col-md-1">
                        <p>hello</p>
                            </div>
                            <div class="col-md-1">
                        <p>hello</p>
                            </div>
                        </div>
                    </div>
	            </div>
		    </div>
		    <!-- social buttons -->
			<div align="center ">
			    <div class="social-button">
			     	<a href=""><i id="social-fb" class="fab fa-facebook-square fa-3x social"></i></a>
		            <a href=""><i id="social-tw" class="fab fa-twitter-square fa-3x social"></i></a>
		            <a href=""><i id="social-gp" class="fab fa-google-plus-square fa-3x social"></i></a>
		            <a href=""><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a>
				</div>
			</div>
            <div class="footerfoot">
                <p>this is copyed by sarkariformbharo.com</p>
		    </div>
		</footer>
		<!--/.Footer-->
		<script>

		</script>
	</body>
</html>