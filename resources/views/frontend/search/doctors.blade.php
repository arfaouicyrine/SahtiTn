@extends('layouts.inc.front-navbar')
        <section class="search " style="margin-top: 120px;">
            <div class="container">
                <div class="col-lg-10">
                    <div class="row">
                        <div class="col-lg-2">
                       <img src="{{ asset('images/undraw_File_searching_re_3evy.svg') }}" alt="" class="search-img" id="search_img" style="width:200px ; margin-left:-90px;" >
                        </div>
                        <div class="col-lg-10" style="margin-top: 90px ;" >
                            <form action="{{  url('/search/doctor') }}" method="POST" class="form-horizontal">
                                {{ csrf_field() }}
                               <div class="form-group row">
                                   <div class="col-lg-6">
                                      <select name="location" id="location" class="form-control dropdown" class="categories" style="border-radius: 5px ; background-color: white  ; margin-left:25px; " >
                                          @foreach ( $locations as $location )
                                               <option value="{{  $location->id }}">{{ $location->title }}</option>
                                          @endforeach

                                       </select>
                                   </div>
                                   <div class="col-lg-4">
                                       <select name="department" id="department" class="form-control dropdown" class="categories" style="border-radius: 5px ; background-color: white  ; margin-left:25px; " >
                                           @foreach ($department as  $item)
                                             <option value="{{ $item->id }}">{{ $item->name }}</option>
                                           @endforeach
                                       </select>
                                   </div>
                                   <div class="col-lg-2">
                                       <input type="submit" name="seacrhdoc" class="btn btn-default " value="Chercher" style="margin-top: 5px ;  background-color: #C96567; margin-left: 5px">
                                   </div>
                               </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <!-- endSearch Bar -->

         <section class="doctor">
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
                                                     <h6 class="text-dark mb-0" style="font-size:1rem;font-weight:800; margin-top:16px;"><i class="fas fa-graduation-cap"></i> {{ $row->educations }}</h6>
                                                     <h6 class="text-dark mb-0" style="font-size:1rem;font-weight:800; margin-top:16px;"><i class="fas fa-briefcase-medical"></i> {{ $row->department->name }}</h6>
                                                     <h6 class="text-dark mb-0" style="font-size:1rem;font-weight:800; margin-top:16px;"><i class="fas fa-phone"></i> {{ $row->mobileNo }}</h6>
                                                     <h6 class="text-dark mb-0" style="font-size:1rem;font-weight:800;margin-top:16px;"><i class="fas fa-map-marker-alt"></i>   {{ $row->address }}</h6>
                                                     <h6 class="text-dark mb-0" style="font-size:1rem;font-weight:800;margin-top:16px;"><i class="fas fa-map-marker-alt"></i>   {{ $row->consultation_fee }}</h6>
                                             </div>
                                         </div>
                                         <div class="col-md-2  border-right border-left">
                                             <div class="text-right">


                                             </div>

                                             <div class="text">
                                                 <div>
                                                     <a href="{{ url('/view/'.$row->id.'/reserve') }}" class="btn" style="background-color: #97AABD ;
                                                     border-radius:50px; height:60px; margin-left:-80px; margin-top:135px; padding:16px;">Reserver maintenant </a>
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

         </section>








</div>

</body>
</html>
<style>

@import url('https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:ital,wght@1,300&display=swap');
</style>


<script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


<script type="text/javascript" >


$(document).ready(function(){
    var _token =   $('input[name="_token"]').val()
    $.ajax({
            url: "{{ route('department.fetch') }}",
         method: "POST" ,
        data: {_token:_token},
         success: function(data){
             $('#department').fadeIn();
             $('#department').html(data);
            //alert(data);
                     }
                 });

});






$(document).ready(function(){
    if(window.location == "http://localhost:8000/search-doctor"){
                   var _token =   $('input[name="_token"]').val()
    $.ajax({
            url: "{{ route('department.doctor') }}",
         method: "GET" ,
        data: {_token:_token},
         success: function(data){
           //  $('#doctors').fadeIn();
     $('#doctors').html(data);
          //  alert(data);
                     }
                 });
    }


});
</script>
