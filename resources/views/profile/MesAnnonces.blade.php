@extends('layout')
@section('link')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
@endsection

@section('title')
My ADDS
@endsection

@section('content')
     @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
     @endif
     @if(session()->has('Active'))
        <div class="alert alert-success">
            {{ session()->get('Active') }}
        </div>
     @endif
     @if(session()->has('Archive'))
        <div class="alert alert-success">
            {{ session()->get('Archive') }}
        </div>
     @endif

       <div ><br> </div>
         <!-- testimonials section -->
         <section id = "testimonials" class = "py-4" style="margin-left:10%; ">
            <div class = "container" >
                <div class = "title-wrap" style="margin-right:10%; ">
                    <span class = "sm-title">Here you can see</span>
                    <h2 class = "lg-title">Your Latest Ads</h2>
                </div>

                <div class="row my-5 " >
                    <div class="row my-10 " >
                        <div class="row" >
                            @php
                               $i = 0;
                            @endphp
                        @foreach($ann as $annonce)
                              @php
                                 $i++;
                                 if($i > 3) break;
                              @endphp
                              <div class="col-md-4 mb-5" >
                                  <div class="card shadow"  style="width: 20rem; height: 26rem; " >
                                      <img src="{{asset('./uploads/'.$annonce->image)}}" class="card-img-top "  height="200" alt="...">
                                      <div class="card-body"  >
                                          <div style="display: flex;">
                                          <h4 class="card-title">{{$annonce->nom}},</h4>
                                          {{-- <h5 class="card-title">{{$objet->user->name}}</h5>--}}
                                          <p class="card-text mt-1 ">{{$annonce->prix}} Dh</p>
                                          </div>
                                          <i class="fas fa-map-marker-alt"> {{$annonce->ville}}</i>
                                          <p class="card-text">{{Str::limit($annonce->description,50)}}</p>
                                          <a href="{{ url('') }}/home/ArchiveAnn/{{$annonce->id}}/{{ auth()->user()->id }}" class = "btn btn-primary" style="font-size: 14px; " >Archive</a>
                                          <a href="{{ url('') }}/home/PartVoirAnnonce/{{$annonce->id}}" style="margin-left: 60%;"> <i class="fas fa-eye" ></i> </a>
                                      </div>
                                  </div>
                          </div>
                          @endforeach
                     </div>
                </div>
        </section>
        <section id = "testimonials" class = "py-4" style="margin-left:10%; ">
            <div class = "container" >
                <div class = "title-wrap" style="margin-right:10%; ">
                    <span class = "sm-title">Here you can</span>
                    <h2 class = "lg-title">Manage Your Adds</h2>
                </div>

                <table class="table table-hover my-5">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Product</th>
                        <th scope="col">Name</th>
                        <th scope="col">Descreption</th>
                        <th scope="col">City</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @php
                            $number_output = 0;
                        @endphp
                        @foreach( $ann as $pst)
                        @php
                          $number_output++;
                       @endphp
                      <tr>
                        <th scope="row">{{ $number_output}}</th>
                        <td><img src="{{asset('./uploads/'.$pst->image)}}" class="card-img-top " width="10" height="50" alt="..."></td>
                        <td><h6 class="card-title">{{$pst->nom}}</h6></td>
                        <td><p class="card-text">{{Str::limit($pst->description,50)}}</p></td>
                        <td><p class="card-text">{{$pst->ville}}</p></td>
                        <td><a href="{{ url('') }}/home/ArchiveAnn/{{$pst->id}}/{{ auth()->user()->id }}" style='color: balck'><i class="fas fa-archive"></i></i></a> <a href="#" style='color: green'><i class="fas fa-edit"></i></a> <a href="#" style='color: red'><i class="fa fa-trash" aria-hidden="true"></i></a> </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
        </section>
 @endsection

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
