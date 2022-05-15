<!DOCTYPE html>
<head>
    <meta charest="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     @yield('head')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="style.css">
    <style>  @import url('https://fonts.googleapis.com/css2?family=Koulen&display=swap');</style>
    @yield('link')

</head>
<body style="background-color: rgba(243, 243, 243, 0.932);">
    <nav id="navbar" class="navbar shadow  "  style="background-color: rgba(0, 128, 128, 0.863); " >
        <div class="navbar-brand ms-5 " style="display: flex;">
            <img src="{{ asset('./uploads/nlog.png') }}" alt=""  width="50"  height="47" class="d-inline-block align-text-top">
            <div  class = "site-brand">
                Loca<span>Five</span>
            </div>
        </div>
        <ul class="nav nav-pills">
            @if(auth()->check())
              <div class="input-group mb-1 mt-1">
                   @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                        <a class="btn btn-outline shadow-none " type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{ Auth::user()->profile_photo_url }}" alt=""  width="40" height="40"   class="rounded-circle img-responsive"></a>
                  @endif
                     <ul class="dropdown-menu dropdown-menu-end me-3 ">
                        <li><a class="dropdown-item" href="{{ route('profile.show') }}">{{auth()->user()->name}}</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <li><button class="dropdown-item" type="submit" > Logout</button></li>
                        </form>
                     </ul>
              </div>
            @else
            <li class="nav-item ">
                <a class="nav-link text-light" href="{{ url('/') }}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="{{ route('login') }}">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="{{ route('register') }}">Registre</a>
            </li>
            @endif
        </ul>
      </nav>
      <div class="container">
          @yield('content')
      </div>
      </div class="container-fluid mt-10 mb-10" >
      <div >
        <br><br><br><br><br><br>
     </div>
    <div class="container mt-10 ">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header " >{{ __('Verify Your Email Address') }}</div>

                    <div class="card-body text-center ">
                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                                {{ __('A fresh verification link has been sent to your email address.') }}
                            </div>
                        @endif

                        {{ __('Before proceeding, please check your email for a verification link.') }}
                        {{ __('If you did not receive the email') }},
                        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                            @csrf
                            <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-primary my-3 ">{{ __('click here to request another') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
      <div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

<footer>

</footer>



</html>

<style>
    .site-brand{
        color: #fff;
        font-size: 2.4rem;
        font-family: 'Raleway', sans-serif;
        font-weight: 600;
        opacity: 0.95;
    }
    .site-brand span{
        font-weight: 300;
    }
    </style>

