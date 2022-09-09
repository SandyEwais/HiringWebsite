<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title>Job Opportunity</title>

    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.css')}}">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script src="https://cdn.tailwindcss.com"></script>
        <script src="//unpkg.com/alpinejs" defer></script>

    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
      <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="{{route('index')}}" class="logo">Global Hiring<em> Website</em></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="{{route('index')}}" class="{{request()->route()->named('index') ? 'active' : ''}}">Home</a></li>
                            <li><a href="{{route('show-jobs')}}" class="{{request()->route()->named('show-jobs') ? 'active' : ''}}">Jobs</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" 
                                class="{{request()->route()->named('about/*') ? 'active' : ''}}">About</a>
                              
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{route('about')}}">About Us</a>
                                    <a class="dropdown-item" href="team.html">Team</a>
                                    <a class="dropdown-item" href="blog.html">Blog</a>
                                    <a class="dropdown-item" href="testimonials.html">Testimonials</a>
                                    <a class="dropdown-item" href="terms.html">Terms</a>
                                </div>
                            </li>
                            <li><a href="{{route('contact')}}">Contact</a></li> 
                            <li><a  style="height: 12px" href="contact.html">Login</a><a href="hh.html">Register</a></li>
                            <li><a  style="height: 12px" href="{{route('create-jobs')}}">Create</a><a href="{{route('create-jobs')}}">New Job</a></li>
                            <li><a  style="height: 12px" href="{{route('show-messages')}}">Show</a><a href="{{route('show-messages')}}">Messages</a></li>
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                    </nav>
                </div>
            </div>
        </div>
    </header>



    <main>
        {{$slot}}
    </main>



    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>
                        Copyright © 2020 Company Name
                        - Template by: <a href="https://www.phpjabbers.com/">PHPJabbers.com</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <x-flash-message/>

    <!-- jQuery -->
    <script src="{{asset('js/jquery-2.1.0.min.js')}}"></script>
    

    <!-- Bootstrap -->
    <script src="{{asset('js/popper.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>

    <!-- Plugins -->
    <script src="{{asset('js/scrollreveal.min.js')}}"></script>
    <script src="{{asset('js/waypoints.min.js')}}"></script>
    <script src="{{asset('js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('js/imgfix.min.js')}}"></script> 
    <script src="{{asset('js/mixitup.js')}}"></script> 
    <script src="{{asset('js/accordions.js')}}"></script>
    
    <!-- Global Init -->
    <script src="{{asset('js/custom.js')}}"></script>



    <script>
        $("#viewBtn").on("click",function(){
            $.post("{{ route('showModal')}}",
            {
                id: $(this).attr('data-id')
            }
            ,function(data){
                console.log(data);
            })
        })
    </script>


  </body>
</html>