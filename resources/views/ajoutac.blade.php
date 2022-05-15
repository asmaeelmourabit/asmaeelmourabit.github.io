<!DOCTYPE html>
<head>
    <style>
    
    </style>
    <meta charest="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>@yield('title')</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="style.css">

</head>
    <nav id="navbar-example2" class="navbar navbar-light bg-light px-3">
        <a class="navbar-brand" href=""><img src="{{ asset('./uploads/Logo.png') }}" alt="" width="30"  height="24" margin-left="20" class="d-inline-block align-text-top">LocaFive</a>
        <ul class="nav nav-pills">
<div class="input-group mb-3">

                <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                     {{ auth()->user()->name }}</button><ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="{{ route('profile.show') }}">profile </a></li>
                        <li><a class="dropdown-item" href="{{  url('/home/ajouter') }}">Ajouter </a></li>
                        <li><a class="dropdown-item" href="{{ url('') }}/home/MesAnnonces/{{ auth()->user()->id }}">Mes Annonces Actives</a></li>
                        
                  <li><a class="dropdown-item" href="{{ url('') }}/home/MesAnnoncesAch/{{ auth()->user()->id }}">Mes Annonces Archivées</a></li>
                        <li><hr class="dropdown-divider"></li>
                  
        <li><a class="dropdown-item" href="{{ route('logout')}}">Logout</a></li>

                </ul>
              </div>
    </nav>
      <div class="container">
          @yield('content')
      </div>
      </div class="container-fluid">
      @yield('contentfluid')
      <div>
      

<div class="row my-5">
    @foreach($posts as $post)
   <div class="col-md-4">
        <div class="card" style="width: 18rem;">
            <img src="{{asset('./uploads/'.$post->image)}}" class="card-img-top" alt="...">
            <div class="card-body">
               <h5 class="card-title">{{$post->nom}}</h5>
                    <p class="card-text">{{Str::limit($post->description,100)}}</p>
                    <a href="{{ url('') }}/home/voir_objet/{{$post->id}}" class="btn btn-primary">Voir<?php echo $post['id'];?></a>
                    <a href="{{ url('') }}/home/creeAnnonce/{{$post->id}}" class="btn btn-primary">Lancer Annonce<?php echo $post['id'];?></a>
            </div>
        </div>
   </div>
   @endforeach
</div>





      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
    