<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>SaHtI | Administration </title>
    <link rel="stylesheet" href="{{ asset('css/doctor.css') }}">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
</head>
<body>
    <input type="checkbox" id="nav-toggle">
   <div class="sidebar" style="background-color: #202d49 ;">
     <div class="sidebar-brand">
         <h2> <span><img src="https://img.icons8.com/dusk/64/000000/doctors-bag.png"/></span> Sahti</h2>
     </div>
     <div class="sidebar-menu">
         <ul>
            <li>  <a href="#" class="active"> <span class="las la-igloo"></span> <span>Mon profile</span>  </a>    </li>
             <li>  <a href="#"> <span class="las la-clipboard-list"></span> <span> Paramètres de planification </span></a></li>
             <li>  <a href="#"> <span class="las la-igloo"></span> <span>Rendez-vous à venir</span>  </a>    </li>
             <li>  <a href="#"> <span class="las la-igloo"></span> <span>Articles</span>  </a>    </li>

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
             <h4>Nom du docteur</h4>
               <small>Spécialité du médecin</small>
               </div>
        </div>
    </header>
