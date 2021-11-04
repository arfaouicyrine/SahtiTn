@extends('layouts.inc.front-navbar')
        <div class="container" style="margin-top: 210px;">
            <div class="row">
                <div class="col-md-12">
                     <div class="row">
                         @foreach ($doctor as $row )
                         <div class="col-md-12 mb-3">
                             <div class="card" style="width: 70rem; height:20rem;">
                                 <div class="card-body">
                                     <div class="row">
                                         <div class="col-md-3">
                                             <div>
                                                 <img src="{{ asset('uploads/doctor/'.$row->image) }}" class="w-100" height="290px;" style="border-radius:15px ;border: whitesmoke 2px outset" alt="">
                                             </div>
                                         </div>
                                         <div class="col-md-7 border-right border-left">
                                             <div>
                                                     <h6 class="mb-0" style="font-size:2rem;font-family: 'Montserrat', sans-serif; color:#C96567;">{{ $row->doctorName }}</h6>
                                                     <h6 class="text-dark mb-0" style="font-size:1rem;font-weight:800;font-family: 'Montserrat', sans-serif; margin-top:16px;"><i class="fas fa-graduation-cap"></i> {{ $row->educations }}</h6>
                                                     <h6 class="text-dark mb-0" style="font-size:1rem;font-weight:800;font-family: 'Montserrat', sans-serif; margin-top:16px;"><i class="fas fa-briefcase-medical"></i> {{ $row->department->name }}</h6>
                                                     <h6 class="text-dark mb-0" style="font-size:1rem;font-weight:800;font-family: 'Montserrat', sans-serif; margin-top:16px;"><i class="fas fa-phone"></i> {{ $row->mobileNo }}</h6>
                                                     <h6 class="text-dark mb-0" style="font-size:1rem;font-weight:800;font-family: 'Montserrat', sans-serif; margin-top:16px;"><i class="fas fa-map-marker-alt"></i>{{ $row->address }}</h6>

                                             </div>
                                         </div>
                                         <div class="col-md-2  border-right border-left">
                                             <div class="text-right">
                                                 <label for="days" style="color: #C96567 ; font-size:0.99rem ; padding:10px; margin-left:-190px;">Les Jours disponibles:</label>
                                                 <h5 class="font-italic" style="color:#00;font-size:0.79rem;font-weight:800;font-family: 'Montserrat', sans-serif;margin-left:-190px;"><i class="fas fa-calendar-day"></i> {{ $row->available_days }}</h5>
                                                 <label for="days"  style="color: #C96567 ; font-size:0.99rem ; padding:10px; margin-left:-190px;">Les heures disponibles:</label>
                                                 <h5 class="font-italic" style="color:#00;font-size:0.79rem;font-weight:800;font-family: 'Montserrat', sans-serif; margin-left:-190px;"><i class="fas fa-hourglass-half"></i> {{$row->working_time}}</h5>
                                                 <label for="days"  style="color: #C96567 ; font-size:0.99rem ; padding:10px; margin-left:-190px;">Prix de consultation:</label>
                                                 <h5 class="font-italic" style="color:#00;font-size:0.79rem;font-weight:800;font-family: 'Montserrat', sans-serif; margin-left:-190px;"><i class="fas fa-dollar-sign"></i> {{$row->consultation_fee}}</h5>

                                             </div>

                                             <div class="text">
                                                 <div>
                                                     <a href="{{ url('/view/'.$row->id.'/reserve') }}" class="btn" style="background-color: #C96567 ;
                                                     border-radius:50px; height:60px; margin-left:-360px; margin-top:35px; padding:16px;">Reserve maintenant </a>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>

                         @endforeach
                     </div>
                </div>
            </div>
        </div>


        <style>
            @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,200&display=swap');
        </style>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>





</body>

</html>

