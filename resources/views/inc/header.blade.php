<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

        <h1 class="logo"><a href="index.html">Adslancing</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                <li><a class="nav-link scrollto" href="#about">About</a></li>
                <li><a class="nav-link scrollto" href="#services">Services</a></li>
                <!--  <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li>-->
                <li><a class="nav-link scrollto" href="#team">Team</a></li>
                <li><a class="nav-link scrollto" href="#pricing">Pricing</a></li>
                <!--<li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
			<ul>
			  <li><a href="#">Drop Down 1</a></li>
			  <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
				<ul>
				  <li><a href="#">Deep Drop Down 1</a></li>
				  <li><a href="#">Deep Drop Down 2</a></li>
				  <li><a href="#">Deep Drop Down 3</a></li>
				  <li><a href="#">Deep Drop Down 4</a></li>
				  <li><a href="#">Deep Drop Down 5</a></li>
				</ul>
			  </li>
			  <li><a href="#">Drop Down 2</a></li>
			  <li><a href="#">Drop Down 3</a></li>
			  <li><a href="#">Drop Down 4</a></li>
			</ul>
		  </li>-->
                <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                @if (Auth::check())
                    <li class="dropdown m-1"><a href="#"><span>{{Auth::user()->name}}</span> <i class="bi bi-chevron-right"></i></a>
                        <ul>
                            <li><a href="{{url('/user/'.Auth::id())}}">Dahboard</a></li>
                            <form action="{{url('/logout')}}" method="post">
								@csrf
								<li><button class='btn btn-warning m-2' type="submit">Logout</button></li>
							</form>
                        </ul>
                    </li>
                @else
                <li><a class="getstarted scrollto" href="{{url('/register')}}">Get Started</a></li>
                <li><a class="getstarted scrollto" href="{{url('/login')}}">Login</a></li>
                @endif
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
