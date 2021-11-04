@extends('layouts.inc.front-navbar')
@section('title')
 | Mon Profile
@endsection


<hr>
<div class="container bootstrap snippet">
    <div class="row my-5">
  		<div class="col-sm-10"><h1>Mon Profile </h1></div>
    	</div>
    <div class="row">
  		<div class="col-sm-3">

                <input type="file" name="image" class="form-control"> <br>
                 <img src="{{ asset('uploads/profile/'. Auth::user()->image ) }}" alt="" class="w-75" name="image">
                </div>


    	<div class="col-sm-9">


       <div class="tab-content">
            <div class="tab-pane active" id="home">

                  <form class="form" action="{{ url('my-profile-update') }}" method="POST" enctype="multipart/form-data">
                      {{ csrf_field() }}
                    <div class="form-group">
                       <div class="row">
                          <div class="col-md-4">
                              <label for="first_name"><h4>Nom et prénom</h4></label>
                              <input type="text" class="form-control" name="name" id="name"  value="{{ Auth::user()->name }}">
                          </div>

                         <div class="col-md-4">
                              <label for="email"><h4>Email</h4></label>
                              <input type="email" class="form-control" name="email" id="email"  value="{{ Auth::user()->email }}">
                          </div>



                            <div class="col-md-4">
                              <label for="phone"><h4>Numéro de Télephone</h4></label>
                              <input type="text" class="form-control" name="mobileNo" id="mobileNo"   value="{{ Auth::user()->mobileNo }}">
                           </div>





                          <div class="col-md-4">
                             <label for="Address"><h4>Adresse </h4></label>
                              <input type="text" class="form-control" name="address" id="address"  value="{{ Auth::user()->address }}">
                          </div>








                          <div class="col-md-4">
                              <label for="postal"><h4>Date de Naissance</h4></label>
                              <input type="date" class="form-control" name="date_of_birth" id="date_of_birth"  value="{{ Auth::user()->date_of_birth}}">
                          </div>



                           <div class="col-xs-12">
                                <br>
                              	<button class="btn btn-lg" style="background-color: #C96567" type="submit"><i class="glyphicon glyphicon-ok-sign"></i>Enregistrer</button>
                               	<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Annuler</button>
                            </div>
                        </div>
                      </div>
              	</form>

              <hr>

            </div>
       </div>


       <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>




