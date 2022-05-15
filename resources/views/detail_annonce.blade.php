@extends('layout')
@section('link')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ url('/css/details.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection

@section('contentfluid')
<div class="container mt-5 mb-5">
    <div class="card">
        <div class="row g-0">
            <div class="col-md-6 border-end">
             	<div class="d-flex flex-column justify-content-center">
                    <div class="main_image">
                    <br><br><br>

                    <center> <img src="{{url('./uploads/'.$details->image)}}" id="main_product_image" width="450" class="shadow"></center>
                    </div>

                    <div class="thumbnail_images">

                    <br>
                            <img   class="thumbnail_images1 " src="{{ Storage::url($details->profile_photo_path)}}" width="70"></li>
                            <p>{{$details->nom}}</p>
                            <div class="test">
                            <div class="d-flex flex-row">
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bx-star' ></i>
                     </div>
                    <span >441 reviews</span>
                            <br><br><br>


                            </div>	</div>
                </div>
             </div>
                <div class="col-md-6">
                <div class="p-3 right-side">
                <div class="d-flex justify-content-between align-items-center">
            	    <h3>{{$details->nom}}</h3>
                <span class="heart"></i></span>
                </div>
                <div class="mt-2 pr-3 content">


                   <h6><i  class="fa fa-map-marker"> {{$details->ville}}</i></h6>
                   </div>

                    <h6>{{$details->etat}}</h6>
                    <h6>{{$details->prix}} DH/Jour</h6>
                     <div class="ratings d-flex flex-row align-items-center">

                     <div class="d-flex flex-row">
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bx-star' ></i>
                     </div>
                    <span>441 reviews</span>
                     </div>	<div class="mt-5">
                         <h6>Description :</h6>
                     <p>{{$details->description}}</p>
                     <p class="card-text">Posté le :{{$details->date_debut}}</p>
                     </div>
                    </div>

                     <div class="buttons d-flex flex-row mt-5 gap-3">
                    <a href="#" class = "btn text-light " style="font-size: 20px;  margin-left: 300px;
                    margin-bottom: 30px; background-color: rgb(0,128,128);" >Reserver</a>
                    {{-- <button  class="bouton" >Reserver</button> --}}



                    </i>	</div>	</div>	</div>	</div>	</div> </div>

        @endsection
        <style>
p {
    margin-left: 35px;
}
p.card-text{
    color: grey;
}
div.test1{
    font-style: italic;
}
div.test{
    margin-left: 35px;
}

a.btn {
    margin-left: 300px;
    margin-bottom: 30px;
}

 img.thumbnail_images1 {
     border-radius: 50%;
      margin-left: 35px;
}

        </style>
