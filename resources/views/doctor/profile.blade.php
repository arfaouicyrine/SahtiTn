<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Tableau de bord du docteur</title>
    <link rel="stylesheet" href="{{ asset('css/doctor.css') }}">

    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
      <link rel="stylesheet" href="{{ asset('css/adminRegesteredUsers.css') }}">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
</head>
<body>
    <input type="checkbox" id="nav-toggle">
   <div class="sidebar">
     <div class="sidebar-brand">
         <h2> <span><img src="https://img.icons8.com/dusk/64/000000/doctors-bag.png"/></span>     SaHtI Tn</h2>
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
             <div>
                 <h4>{{ Auth::user()->name }}</h4>
             </div>

           </div>
    </header>

       <div class="container" style="margin-top: 150px ; margin-left:10px;">
            <h2 style="color: #C96567 ; text-align:center ;" >Modifier mon profile</h2>
            <form action="{{ url('profile-edit') }}" method="POST">
           {{ csrf_field() }}
             <div class="row">

                           <div class="col-md-6">
                             <div class="form-group">
                                 <label for="">Nom et Prénom</label>
                                 <input type="text" name="name" class="form-control" value="{{ Auth::user()->name }}">
                             </div>
                         </div>



                         <div class="col-md-6">
                             <div class="form-group">
                                 <label for="">Numéro de télephone</label>
                                  <input type="text" name="mobileNo" value="{{ Auth::user()->mobileNo }}" class="form-control">
                             </div>
                         </div>



                         <div class="col-md-6">
                             <div class="form-group">
                                 <label for="">Adresse</label>
                                  <input type="heure" name="address" value="{{ Auth::user()->address }}" class="form-control" >
                             </div>
                         </div>



                         <div class="col-md-6">
                             <div class="form-group">
                                 <label for="">Date de naissance</label>
                                  <input type="date" name="date_of_birth" value="{{ Auth::user()->date_of_birth }}" class="form-control" >
                             </div>
                         </div>


                          <div class="col-md-6 mt-5">
                             <div class="form-group">
                                 <label for="gender">Choisir un genre</label>
                                <select name="gender" id="gender">
                                    <option value="femme">Femme</option>
                                    <option value="homme">Homme</option>
                                </select>
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

                          <div class="col-md-6 mt-5" style="margin-left: 266px;">
                             <div class="form-group">
                                 <label for="">Image</label>
                                 <input type="file" name="image" id="">
                             </div>
                         </div>





 </div>
</div>

   <button type="submit" class="btn" style="background-color: #C96567; border-color:#C96567; margin-left:400px; margin-top:20px;">
      Modifier
</button>
      </form>
    </div>
  </div>
</div>





</div>
  </div>
</body>
</html>

<style>
.form-control {
    border: 1px solid #cfd1d8;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
    font-size: .825rem;
    background: #ffffff;
    color: #2e323c;
}
</style>
