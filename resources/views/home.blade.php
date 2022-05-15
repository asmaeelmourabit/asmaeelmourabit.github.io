@extends('layout')

@section('link')
    <link rel="stylesheet" type="text/css" href="{{ url('/css/homeclient.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
@endsection

@section('title')
     Acceuil
@endsection

{{--  @section('li')
    @if(auth()->check())
        @if(  strcmp( auth()->user()->role_user ,"P") == 0)
            <li><a class="dropdown-item" href="{{  url('/myProduct') }}">My Products </a></li>
            {{--  <li><a class="dropdown-item" href="{{  url('/ajouterObjet') }}">Add</a></li>
        @endif

    @endif
@endsection
--}}
{{--
@section('nav')
   @if(auth()->check())
        @if(  strcmp( auth()->user()->role_user ,"P") == 0)
            <li class="nav-item mt-2 ">
                <a class="nav-link text-light" href="{{  url('/ajouterObjet') }}">Add an Ad</a>
            </li>
        @endif
   @endif
@endsection
--}}
 @section('contentfluid')
 @if(session()->has('success'))
 <div class="alert alert-success">
     {{ session()->get('success') }}
 </div>
@endif
<section id = "testimonials" class = "py-4" style="margin-left:10%; ">
    <div class = "container" >
<div class = "header-form" style="background-color: rgba(243, 243, 243, 0.932);">
    <div class = "title-wrap" style="margin-right:10%; ">
        <span class = "sm-title">here you can</span>
        <h2 class = "lg-title">Search your product</h2>
    </div>
    <form class = "flex">
        <input type = "text" class = "form-control mb-2" placeholder="Product name">
        <input type="date" class = "form-control mb-2" placeholder="Date">
        <input type="text" class = "form-control mb-3" placeholder="Ville">
        <input type="submit" class = "btn btn-primary" value = "Search">
    </form>
</div>
    </div>
</section>
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

                                  <a href="{{ url('') }}/home/voir_annonce/{{$prem->id}}" style="margin-left: 55%;"><i class="fas fa-eye"></i></a>
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
                                  <a href="{{ url('') }}/home/voir_annonce/{{$annonce->id}}" style="margin-left: 60%;"> <i class="fas fa-eye" ></i> </a>
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


 @endsection


