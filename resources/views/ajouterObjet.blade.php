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
                     Add Product
                 </h5>
             </div>
               <div class="card-body" >
                   <form action="{{ route('objetAdd')}}" enctype="multipart/form-data" method="POST">
                       @csrf
                        <div class="form-group mb-3">
                          <label for="exampleFormControlInput1" class="mb-2" ><h6>Product's name</h6></label>
                          <input type="title" name="nom" class="form-control" id="exampleFormControlInput1" placeholder="Clé Molette">
                        </div>
                        <div class="form-group mb-3">
                          <label for="exampleFormControlSelect1"  class="mb-2"><h6>Product Condition</h6></label>
                          <select class="form-control" name="etat" id="exampleFormControlSelect1">
                            <option value="Mint">Mint </option>
                            <option value="Good">Good  </option>
                            <option value="Correct">Correct </option>

                          </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="exampleFormControlFile1 "  class="mb-2"><h6>Image</h6></label>
                            <div>
                               <input type="file" name="image" class="form-control-file ms-3" id="exampleFormControlFile1">
                            </div>
                        </div>
                        <div class="form-group mb-3">
                          <label for="exampleFormControlTextarea1" class="mb-2"><h6> Description</h6> </label>
                          <textarea class="form-control" name="description" id="exampleFormControlTextarea1" placeholder="Describe your product" rows="3"></textarea>
                        </div>
                        <div class="col-md-12 text-center">
                        <button class="btn btn-primary btn-lg btn-block" width="50"> Add</button>
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
