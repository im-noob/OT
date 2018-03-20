<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
@yield('title')
<!-- boot strap css -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="{{url('/')}}/css/welcome.css">
 <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
</head>


<body>

            <div class="topnav" id="myTopnav">
                    
                  <a href="{{url('/')}}">Discuss</a>
                   <a href="{{url('/')}}">Blog</a>
                   <a href="{{url('/')}}">Practice</a>
                   <a href="{{url('/')}}/superAdmin/package">Test</a>
                   <a href="{{url('/')}}/superAdmin/Home" class="active">Home</a>
                  <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
            </div>

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
<footer class="foot">
    <div class="container">
        <div class="row">

            <div class="col-md-5 col-sm-6" style="padding:0px">
                        <a href="https://kb.youth4work.com/tagged/y4w-media" class="fontcolor">About Us</a><span style="color: #e6e6e6">&nbsp;|&nbsp;</span>
                        <a href="https://kb.youth4work.com/tagged/press" class="fontcolor">Press</a><span style="color: #e6e6e6">&nbsp;|&nbsp;</span>
                        <a href="https://www.youth4work.com/ContactUs" class="fontcolor">Contact Us</a><span style="color: #e6e6e6">&nbsp;|&nbsp;</span>
                        <a href="https://www.cos.youth4work.com/youth4work/jobs" class="fontcolor">Careers</a><span style="color: #e6e6e6">&nbsp;|&nbsp;</span>
                        <a href="https://www.youth4work.com/site_maps" class="fontcolor">Sitemap</a>
            </div>
            <div class="col-md-*" style="text-align:right;">
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
    <div class="row">

                    <div class="col-md-12 footerfoot">
                        <p>this is copyed by sarkariformbharo.com</p>

                    </div>
    </div>
    
</footer>

</html>


