<!DOCTYPE html>
<html lang="en">
<head>

      <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
@yield('title')
    <!-- Bootstrap core CSS -->
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="{{asset('assets/css/heroic-features.css')}}" rel="stylesheet">
    @yield('style')

</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="/home">EasyShop</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
 <a class="nav-link" href="{{route('shoppingCart.index')}}"><i class="fa fa-shopping-cart"></i> Cart <strong>
@if(Cart::instance('default')->count() > 0)
    ({{Cart::instance('default')->count()}})
@else
(0)

@endif


 </strong>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-item nav-link dropdown-toggle mr-md-2" href="#" id="bd-versions"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-user"></i> {{Auth::check()? Auth::user()->name : 'Account'}}
                    </a>
                    @if(Auth::check())
                     <div class="dropdown-menu dropdown-menu-right" aria-labelledby="bd-versions">
             <a class="dropdown-item " href="/user/profile">My Profile</a>
                                     <a class="dropdown-item " href="{{route('userLogout')}}">Logout</a>


                    </div>
                    @else
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="bd-versions">
                        <a class="dropdown-item " href="{{route('userLogin')}}">Sign In</a>
                        <a class="dropdown-item" href="{{route('userSignup')}}">Sign Up</a>
                    </div>
                    @endif
                </li>
            </ul>
        </div>
    </div>
</nav>

 <div class="container">
@yield('content')
</div>

<!-- Bootstrap core JavaScript -->



<script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
@yield('script')



</body>

</html>
