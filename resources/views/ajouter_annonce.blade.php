@extends('layout')
@section('title')
Add Product
@endsection
@section('li')
<li><a class="dropdown-item" href="{{  url('/myProduct') }}">My Products </a></li>
<li><a class="dropdown-item" href="{{  url('/ajouterObjet') }}">Add</a></li>
@endsection

@section('content')

 <div >
    <br><br><br><br>
 </div>

 <div class="row my-8 ">
     <div class="col-md-5 mx-auto ">
        <div class="card">
             <div class="card-header " >
                 <h5 class="card-title">
                    Add an ad
                 </h5>
             </div>
               <div class="card-body" >
                   <form  action="{{ url('/home/creeANNONCE')}}" enctype="multipart/form-data" method="POST">
                       @csrf
                        <div class="wrap-input1 validate-input" >
                          <input class="input1" name="id_objet" type="hidden" value="{{$post->id}}" >
                          <span class="shadow-input1"></span>
                        </div>
                        <div class="form-group mb-3">
                          <label for="exampleFormControlInput1" class="mb-2" ><h6>Price (Dh/day)</h6></label>
                          <input type="title" name="prix" class="form-control" id="exampleFormControlInput1" placeholder="Clé Molette">
                        </div>
                        <div class="form-group mb-3">
                          <label for="exampleFormControlSelect1"  class="mb-2"><h6>City</h6></label>
                          <select class="form-control" name="ville" id="exampleFormControlSelect1">
                            <option value="Casablanca">Casablanca </option>
                            <option value="Marrakech">Marrakech </option>
                            <option value="Tétouan">Tetouan </option>
                            <option value="Tanger">Tanger  </option>
                            <option value="Rabat">Rabat </option>


                          </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="exampleFormControlSelect1"  class="mb-2"><h6>Premium</h6></label>
                            <select class="form-control" name="premium" id="exampleFormControlSelect1" >
                                    <option  value="0">Not Premium</option>
                                    <option  value="1">7 days</option>
                                    <option  value="2">15 days</option>
                                    <option  value="3">30 days</option>
                            </select>
                         </div>
                         <label for="exampleFormControlSelect1"  class="mb-2"><h6>availability date</h6></label>
                         <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker" inline="true">
                            <input  name="date_debut" placeholder="de" type="text" id="example" class="form-control">
                            <label for="example">de</label>
                            <i class="fas fa-calendar input-prefix"></i>
                          </div>
                          <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker" inline="true">
                            <input  name="date_fin" placeholder="à" type="text" id="example" class="form-control">
                            <label for="example">à</label>
                            <i class="fas fa-calendar input-prefix"></i>
                          </div>
                        <div class="col-md-12 text-center">
                        <button class="btn btn-primary btn-lg btn-block" width="50"> Publish</button>
                        </div>
                      </form>
               </div>
         </div>
      </div>
  </div>
  <div >
    <br><br><br><br><br><br> <br><br>
 </div>
  @endsection
