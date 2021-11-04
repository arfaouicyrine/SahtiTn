<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>SaHtI | Médecin </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
      <link rel="stylesheet" href="{{ asset('css/adminRegesteredUsers.css') }}">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
</head>
<body>
    <input type="checkbox" id="nav-toggle">
   <div class="sidebar" style="background-color: #9E5A63;">
     <div class="sidebar-brand">
         <h2> <span><img src="https://img.icons8.com/dusk/64/000000/doctors-bag.png"/></span><a href="{{ url('/') }}" style="text-decoration: none ; color:whitesmoke ;">SaHtI</a></h2>
     </div>
     <div class="sidebar-menu">
         <ul>
           <li>  <a href="{{ url('doctor') }}"> <span class="las la-igloo"></span> <span>Acceuil</span>  </a>    </li>
            <li>  <a href="{{ URL::route('doctor.profile') }}" class="active"> <span class="las la-igloo"></span> <span>Mon profile</span>  </a>    </li>
            <li>  <a href="{{ URL::route('doctor.setSchedule') }}"> <span class="las la-igloo"></span> <span>Rendez-vous à venir</span>  </a>    </li>

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
            <h2 style="color: #C96567 ; text-align:center ;" >Ajouter une consultation</h2>
            <form action="{{ url('/setSchedule/'. $app_id) }}" method="POST">
           {{ csrf_field() }}
             <div class="row">

                      <div class="col-md-6">
                             <div class="form-group">
                                 <label for="">Heure du Rendez-vous</label>
                                  <input type="time" name="app_time" class="form-control" >
                             </div>
                         </div>



                         <div class="col-md-6">
                             <div class="form-group">
                                 <label for="">Date du Rendez-vous</label>
                                  <input type="date" name="app_date" class="form-control" >
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
</body>
</html>
