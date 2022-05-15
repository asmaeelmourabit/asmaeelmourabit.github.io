@extends('layout')
@section('title')
Add Ads
@endsection


@section('content')

 <div >
    <br><br><br><br>
 </div>

 <div class="row my-8  ">
     <div class="col-md-5 mx-auto ">
        <div class="card ">
             <div class="card-header " >
                 <h5 class="card-title">
                    Add an ad
                 </h5>
                 <img class="shadow mb-3"src="{{asset('./uploads/'.$post->image)}}"alt="IMG" style="margin-left: 35%;  " height="150" width="150">
             </div>
               <div class="card-body" >
                   <form  methde="post" action="{{ url('/home/creeANNONCE')}}" >

                        <div class="wrap-input1 validate-input" >
                          <input class="input1" name="id_objet" type="hidden" value="{{$post->id}}" >
                          <span class="shadow-input1"></span>
                        </div>
                        <div class="form-group mb-3">
                          <label for="exampleFormControlInput1" class="mb-2" ><h6>Price (Dh/day)</h6></label>
                          <input type="title" name="prix" class="form-control" id="exampleFormControlInput1" placeholder="200">
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
                         <label for="exampleFormControlSelect1"  class="mb-2"><h6>Availability date</h6></label>
                         <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker" data-validate = "Subject is required">
                            <input class="form-control" type="text" onfocus="(this.type='date')"  name="date_debut" placeholder="de">
                            <span class="shadow-input1"></span>
                        </div>
                          <label for="example"></label>
                          <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker" data-validate = "Subject is required">
                            <input class="form-control" type="text" onfocus="(this.type='date')"  name="date_fin" placeholder="à">
                            <span class="shadow-input1"></span>
                        </div>

				<div class="container-contact1-form-btn" >
					<button class="btn btn-primary  mt-3"  >
						<span >
							Confirmer
							<i class="fa fa-long-arrow-right" type="submit "aria-hidden="true"></i>
						</span>
					</button>
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
