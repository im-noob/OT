<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- boot strap css -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="{{url('/')}}/css/welcome.css">
 <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="{{url('/')}}/js/jquery-3.2.1.js"></script>

</head>

 
<body>

		<div class="topnav" id="myTopnav">
		  <a href="{{url('/')}}/superAdmin/Home" class="active">Home</a>
		  <a href="{{url('/')}}/superAdmin/entry">Question Entry</a>
		  <a href="{{url('/')}}">Create Package</a>
		  <a href="{{url('/')}}">Create Defrant</a>
		  <a href="{{url('/')}}/superAdmin/update">Modify Question</a>
		   <a href="{{url('/')}}/superAdmin/full">Full Control</a>
		  <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
		</div>

		<!-- Body part -->
		<div class="container-flude">		
			@yield('content')
		</div>

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

		<!-- Popper JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="{{url('/')}}/js/welcome.js"></script>
		

		<script>
			/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
		function myFunction() {
		    var x = document.getElementById("myTopnav");
		    if (x.className === "topnav") {
		        x.className += " responsive";
		    } else {
		        x.className = "topnav";
		    }
		}

		</script>

</body>
</html>