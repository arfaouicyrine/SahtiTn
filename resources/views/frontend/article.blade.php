@extends('layouts.inc.front-navbar')
<body style="background-color:whitesmoke;">
    <div class="container" style="margin-top: 210px; ">
            <div class="row">
                <div class="col-md-12" >
                     <div class="row">
                         <span style="margin-bottom: 95px; text-align:center; font-size:2rem; color:#C96567;">La prévention santé en conseils simples et pratiques</span>
                         @foreach ($article as $row )
                         <div class="col-md-12 mb-3">
                             <div class="card" style="width: 70rem; height:20rem; background-color:#97AABD">
                                 <div class="card-body">
                                     <div class="row">
                                         <div class="col-md-3">
                                             <div>
                                                 <img src="{{ asset('uploads/articles/'.$row->image) }}" class="w-100" height="290px;" style="border-radius:5px ;border:#97AABD  1px outset" alt="">
                                             </div>
                                         </div>
                                         <div class="col-md-7 border-right border-left">
                                             <div>

                                                     <h3 class="text-dark mb-0" style="font-size:1rem;font-weight:800;font-family: 'Montserrat', sans-serif; margin-top:16px;"><i class="fas fa-newspaper"></i> {{ $row->title}}</h3>
                                                     <h6 class="text-dark mb-0" style="font-size:1rem;font-weight:800;font-family: 'Montserrat', sans-serif; margin-top:16px;"><i class="fas fa-briefcase-medical"></i> {{ $row->description }}</h6>

                                             </div>
                                         </div>
                                         <div class="col-md-2  border-right border-left">
                                             <div class="text-right">
                                                      <h6 style="font-size:1rem;font-weight:800;font-family: 'Montserrat', sans-serif; margin-top:224px; color:#C96567">Article sur :</h6>
                                                      <h6 style="font-size:1rem;font-weight:800;font-family: 'Montserrat', sans-serif; margin-top:12px; color:#C96567">{{ $row->department->name }}</h6>
                                             </div>


                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>

                         @endforeach
                     </div>
                     <div class="d-flex justify-content-center align-items-center">
                            {{ $article->links() }}
               </div>
                </div>
            </div>
        </div>


</body>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,200&display=swap');
        </style>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



