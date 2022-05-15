<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>LocaFive</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- font awesome cdn -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- fonts -->
        <link rel = "stylesheet" href = "font/fonts.css">
        <!-- normalize css -->
        <link rel = "stylesheet" href = "css/normalize.css">
        <!-- custom css -->
        <link rel = "stylesheet" href = "css/utility.css">
        <link rel = "stylesheet" href = "css/style.css">
        <link rel = "stylesheet" href = "css/responsive.css">
        <link rel="stylesheet" type="text/css" href="{{ url('/css/welcome.css') }}">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    </head>

    <body style="background-color: rgba(243, 243, 243, 0.932); overflow-x: hidden;">
        <!-- navbar  -->
        <nav class = "navbar  py-0">
                <div class="navbar-brand ms-5" style="display: flex;">
                    <img src="{{ asset('./uploads/nlog.png') }}" alt=""  width="50"  height="37" class="d-inline-block align-text-top mt-2">
                        <div href = "#" class = "site-brand">
                             Loca<span>Five</span>
                        </div>
                </div>
                    <ul class = "navbar-nav">
                        <div class="input-group mb-1 mt-1">
                            @if(auth()->check())
                            <li class = "nav-item ms-2">
                                <a href="{{ url('/') }}" class = "nav-link text-light ">Home</a>
                            </li>
                            <li class = "nav-item ms-3 ">
                                <a href = "" class = "nav-link text-light">Add an Ad</a>
                            </li>
                            <li class = "nav-item ms-3 ">
                                <a href = "{{ url('/home') }}" class = "nav-link text-light" >All Products</a>
                            </li>
                            @else
                                <li class = "nav-item ms-2">
                                    <a href="{{ url('/') }}" class = "nav-link text-light">Home</a>
                                </li>
                                <li class = "nav-item ms-3 ">
                                    <a href = "" class = "nav-link text-light">Add an Ad</a>
                                </li>
                                <li class = "nav-item ms-3 ">
                                    <a class = "nav-link text-light" href="{{ route('login') }}">Login</a>
                                </li>
                                <li class = "nav-item ms-3 ">
                                    <a href="{{ route('register') }}" class = "nav-link text-light">Register</a>
                                </li>
                                <li class = "nav-item ms-3 me-3">
                                    <a href = "#testimonials" class = "nav-link text-light">Contact</a>
                                </li>
                            @endif
                        </div>
                    </ul>
        </nav>
        <!-- end of navbar  -->


        <!-- header -->
        <header class = "flex" src="{{ asset('./uploads/nlog.png') }}">
            <div class = "container">
                <div class = "header-title">
                    <h1>Try a new experience</h1>
                    <a href="#" class = "btn btn-primary" style="font-size: 20px; margin-bottom:6%;" >Add Adds</a>
                </div>
                <div class = "header-form">
                    <h2>Choose your Product :</h2>
                    <form class = "flex">
                        <input type = "text" class = "form-control" placeholder="Product name">
                        <input type="date" class = "form-control" placeholder="Date">
                        <input type="text" class = "form-control" placeholder="Ville">
                        <input type="submit" class = "btn btn-primary" value = "Search">
                    </form>
                </div>
            </div>
        </header>
        <!-- header -->


        <!-- testimonials section -->
        <section id = "testimonials" class = "py-4" style="margin-left:10%; ">
            <div class = "container" >
                <div class = "title-wrap" style="margin-right:10%; ">
                    <span class = "sm-title">what our clients need</span>
                    <h2 class = "lg-title">Premium Ads</h2>
                </div>

                <div class="row my-5 " >
                    <div class="row my-10 " >
                        <div class="row" >
                            @foreach($premium as $prem)
                              <div class="col-md-4 mb-5" >
                                  <div class="card shadow"  style="width: 20rem; height: 26rem; " >
                                      <img src="{{asset('./uploads/'.$prem->image)}}" class="card-img-top "  height="200" alt="...">
                                      <div class="card-body"  >
                                          <div style="display: flex;">
                                          <h4 class="card-title">{{$prem->nom}},</h4>
                                          {{-- <h5 class="card-title">{{$objet->user->name}}</h5>--}}
                                          <p class="card-text mt-1">{{$prem->prix}} Dh</p>
                                          </div>
                                          <i class="fas fa-map-marker-alt"> {{$prem->ville}}</i>
                                          <p class="card-text">{{Str::limit($prem->description,50)}}</p>
                                          <a href="#" class = "btn btn-primary" style="font-size: 14px; " >Reserve</a>
                                          <a href="{{ url('') }}/home/details_annonce/{{$prem->id}}" style="margin-left: 30%;"> <i class="fas fa-eye" ></i> </a>
                                          <i class="fas fa-star" style='color: #f3da35'></i>
                                      </div>
                                  </div>
                          </div>
                          @endforeach
                     </div>
                     <div class="d-flex justify-content-center">
                        {{ $premium-> links() }}

                    </div>
                </div>
        </section>

        <!-- featured section -->
        <section id = "featured" class = "py-4"  >
            <div class = "container">
                <div class = "title-wrap" style="margin-right:10%; ">
                    <span class = "sm-title">You will find here everything you need</span>
                    <h2 class = "lg-title"> Our Ads</h2>
                </div>
                <div class="row my-5 ms-3">
                    <div class="row my-10">
                        <div class="row">
                            @foreach($annonces as $annonce)
                              <div class="col-md-4 mb-5">
                                  <div class="card shadow"  style="width: 20rem; height: 26rem; " >
                                      <img src="{{asset('./uploads/'.$annonce->image)}}" class="card-img-top "  height="200" alt="...">
                                      <div class="card-body"  >
                                          <div style="display: flex;">
                                          <h4 class="card-title">{{$annonce->nom}},</h4>
                                          {{-- <h5 class="card-title">{{$objet->user->name}}</h5>--}}
                                          <p class="card-text mt-1">{{$annonce->prix}} Dh</p>
                                          </div>
                                          <i class="fas fa-map-marker-alt"> {{$annonce->ville}}</i>
                                          <p class="card-text">{{Str::limit($annonce->description,50)}}</p>
                                          <a href="#" class = "btn btn-primary" style="font-size: 14px; " >Reserve</a>
                                          <a href="{{ url('') }}/home/details_annonce/{{$annonce->id}}" style="margin-left: 40%;"> <i class="fas fa-eye" ></i> </a>
                                      </div>
                                  </div>
                          </div>
                          @endforeach
                     </div>
                     <div class="d-flex justify-content-center">

                         {{ $annonces-> links() }}
                     </div>
                </div>

         </div>
         </div>
        </section>
     <!-- end of featured section -->

<!--Section: Contact v.2-->
<section  id = "testimonials" class = "py-4">

    <!--Section heading-->
    <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
        a matter of hours to help you.</p>


        <div class="row">
            <div class="card " style="height:350px; width: 30%;  margin-left:38%;">
        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5">
            <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                <!--Grid row-->
                <div class="row" >

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0" style= "">
                            <input type="text" id="name" name="name" class="form-control" placeholder="your name">

                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="email" name="email" class="form-control" placeholder="your email">
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <input type="text" id="subject" name="subject" class="form-control" placeholder="Subject">
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form " style="margin-left: 10%;">
                            <textarea type="text" id="message" name="message" rows="4" class="form-control md-textarea" placeholder="Write here your message"></textarea>
                        </div>

                    </div>
                </div>
                <!--Grid row-->

            </form>

            <div class="text-center text-md-left ">
                <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Send</a>
            </div>
            <div class="status"></div>
        </div>
            </div>

        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-3 text-center">
            <ul class="list-unstyled mb-0">
                <li><i class="fas fa-map-marker-alt fa-2x"></i>
                    <p>San Francisco, CA 94126, USA</p>
                </li>

                <li><i class="fas fa-phone mt-4 fa-2x"></i>
                    <p>+ 01 234 567 89</p>
                </li>

                <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                    <p>contact@mdbootstrap.com</p>
                </li>
            </ul>
        </div>
        <!--Grid column-->

    </div>
<br>
</section>
<!--Section: Contact v.2-->

        <!-- footer -->
        <footer class = "py-4">
            <div class = "container footer-row">
                <div class = "footer-item">
                    <a href = "index.html" class = "site-brand">
                        Loca<span>Five</span>
                    </a>
                    <p class = "text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet voluptates maiores nam vitae iusto. Placeat rem sint voluptas natus exercitationem autem quod neque, odit laudantium reiciendis ipsa suscipit veritatis voluptate.</p>
                </div>

                <div class = "footer-item">
                    <h2>Follow us on: </h2>
                    <ul class = "social-links">
                        <li>
                            <a href = "#">
                                <i class = "fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href = "#">
                                <i class = "fab fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href = "#">
                                <i class = "fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href = "#">
                                <i class = "fab fa-pinterest"></i>
                            </a>
                        </li>
                        <li>
                            <a href = "#">
                                <i class = "fab fa-google-plus"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class = "footer-item">
                    <h2>Quick Links:</h2>
                    <ul>
                        <li><a href = "#">Home</a></li>
                        <li><a href = "#">Contact Us</a></li>
                        <li><a href = "#">Login</a></li>
                        <li><a href = "#">Be Partner</a></li>
                    </ul>
                </div>

                <div class = "subscribe-form footer-item">
                    <h2>Subscribe for Newsletter!</h2>

                        <input type = "submit" class = "btn btn-primary" value = "Register">

                </div>
            </div>
        </footer>
        <!-- end of footer -->

        <!-- js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>


<script>
    let navbarDiv = document.querySelector('.navbar');
window.addEventListener('scroll', () => {
    if(document.body.scrollTop > 40 || document.documentElement.scrollTop > 40){
        navbarDiv.classList.add('navbar-cng');
    } else {
        navbarDiv.classList.remove('navbar-cng');
    }
});


const navbarCollapseDiv = document.getElementById('navbar-collapse');
const navbarShowBtn = document.getElementById('navbar-show-btn');
const navbarCloseBtn = document.getElementById('navbar-close-btn');
// show navbar
navbarShowBtn.addEventListener('click', () => {
    navbarCollapseDiv.classList.add('navbar-collapse-rmw');
});

// hide side bar
navbarCloseBtn.addEventListener('click', () => {
    navbarCollapseDiv.classList.remove('navbar-collapse-rmw');
});

document.addEventListener('click', (e) => {
    if(e.target.id != "navbar-collapse" && e.target.id != "navbar-show-btn" && e.target.parentElement.id != "navbar-show-btn"){
        navbarCollapseDiv.classList.remove('navbar-collapse-rmw');
    }
});

// stop transition and animatino during window resizing
let resizeTimer;
window.addEventListener('resize', () => {
    document.body.classList.add("resize-animation-stopper");
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(() => {
        document.body.classList.remove("resize-animation-stopper");
    }, 400);
});
</script>
