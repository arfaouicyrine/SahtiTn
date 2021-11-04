<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>SaHtI | Administration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
      <link rel="stylesheet" href="{{ asset('css/adminRegesteredUsers.css') }}">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
</head>
<body>
    <input type="checkbox" id="nav-toggle">
   <div class="sidebar">
     <div class="sidebar-brand">
         <h2> <span><img src="https://img.icons8.com/dusk/64/000000/doctors-bag.png"/></span> <a href="{{ url('/') }}" style="text-decoration: none ; color:whitesmoke ;">SaHtI</a></h2>
     </div>
     <div class="sidebar-menu">
         <ul>
        
             <li>  <a href="{{ url('dashboard') }}"> <span class="las la-clipboard-list"></span> <span> <i class="fa fa-pie-chart mr-3"></i> Acceuil</span></a></li>
             <li>  <a href="{{ url('registered-users') }}"> <span class="las la-users"></span> <span>Utilisateurs</span>  </a>    </li>
             <li>  <a href="{{ url('department') }}"> <span class="las la-procedures"></span> <span>Department</span>  </a>    </li>
            <li>  <a href="{{  url('/doctor-list') }}"> <span class="las la-user-md mr-3"></span> <span>Docteurs</span>  </a>    </li>
            <li>  <a href="{{ url('appointment')}}"> <span class="las la-calendar-check"></span> <span>Rendez-vous</span>  </a>    </li>
            <li>  <a href="{{ route('location') }}"> <span class="las la-location-arrow"></span> <span>Adresse</span>  </a>    </li>
            <li>  <a href="{{ url('article')}}"> <span class="las la-newspaper"></span> <span></span> Articles </a>    </li>
             <li>  <a href="{{ url('hospital') }}"> <span class="las la-user-md mr-3"></span> <span></span> Hôpital</a>    </li>

         </ul>
     </div>

</div>

<div class="main-content">
    <header>
            <h2>
            <label for="nav-toggle">
                <span class="las la-bars"></span>
            </label>
            Acceuil
            </h2>

          <div class="search-wrapper">
              <span class="las la-search"></span>
              <input type="search" placeholder="chercher ici ">
          </div>

          <div class="user-wrapper">
              <img src="{{ asset('uploads/doctor/2.jpg') }}" width="40px" height="40px" alt="">
              <div>
             <h4>{{ Auth::user()->name }}</h4>

               </div>
        </div>
    </header>
     <div class="container" style="margin-top: 150px ; margin-left:10px;">
            <h2 style="color: #C96567 ; text-align:center ;" >Modifier une consultation</h2>
            <form action="{{ url('/hospital-update/'.$hospitals->id) }}" method="POST">
          {{ csrf_field() }}
         
             <div class="row">
                           <div class="col-md-6">
                             <div class="form-group">
                                 <label for="">Nom</label>
                                 <input type="text" name="name" class="form-control" value="{{ $hospitals->name }}">
                             </div>
                         </div>
                           <div class="col-md-6">
                             <div class="form-group">
                                 <label for="">Adresse</label>
                                 <input type="text" name="address" class="form-control"   value="{{ $hospitals->address }}">
                             </div>
                         </div>



                         <div class="col-md-6">
                             <div class="form-group">
                                 <label for="">Description</label>
                              <textarea name="description" id="" cols="100" rows="10">{{ $hospitals->description }}</textarea>
                             </div>
                         </div>



                        <div class="col-md-12">
                             <div class="form-group">
                                 <label class="mt-5" for="">Choisir une image</label>
                                 <input type="file" name="image" id="" >
                             </div>
                         </div>


                            <div class="col-md-6  mt-5 ">
                        <div class="form-group">
                        <label for="locations">Choisir votre etat</label>
                      <select id="location_id" name="location_id"  >
                        <option value="">Tunisie </option>
                          @foreach ($locations as $location )
                          <option value="{{ $location->id }}"> {{ $location->title }}</option>
                          @endforeach
                       </select>
                       </div>
                          </div>




 </div>
</div>

   <button type="submit" class="btn" style="background-color: #C96567; border-color:#C96567; margin-left:400px; margin-top:20px;">
      Ajouter
</button>
      </form>
    </div>
  </div>
</div>






        </div>


</div>
</body>
</html>
