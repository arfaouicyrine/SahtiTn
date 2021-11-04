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
   <div class="container " style="margin-top: 150px ; margin-left:10px;">
     <!-- Heading -->
     <div class="row">
        <div class="col-md-12">

        <!--Card content-->
        <div class="card">
            <div class="card-body d-sm-flex justify-content-between">

          <h4 class="mb-2 mb-sm-0 pt-1">
            <span>Rendez-Vous en attente </span>
          </h4>

        </div>
        </div>
        </div>
      </div>


      @if (session('status'))
      <h6>{{ session('status')}}</h6>
       @endif
       <div class="responsive-container" >

            <table class="table table-striped table-bordered">
                <thead>
                    <th style="width:50px">N°</th>
                    <th style="width:50px">Nom du Patient</th>
                    <th style="width:50px">Description </th>
                    <th style="width:50px">Action</th>
                </thead>

  <tbody>
  @foreach ( $appointments as $item)
    @if($item->status!=='Annulé')
      <tr>
        <td>{{ $item->id }}</td>
    <td>{{ $item->user->name }}</td>
     <td>{{ $item->description }}</td>


    <td>
        @if ($item->status=="Attente")
        <a href="{{ url('/setSchedule/'.$item->id) }}" class="badge badge-pill  px-3 py-2" style="background-color: #C96567; text-decoration:none ">Accepter</a>
        <a href="#" class="badge badge-pill  px-3 py-2" style="background-color: #97AABD ; text-decoration:none">Supprimer</a>
        @else
            <span> Confirmé</span>
            @endif
    </td>
</tr>
    @endif

  @endforeach




  </tbody>
</table>
 </div>
    </div>
     </div>
      </div>
      </div>
<style>
    body > div.main-content > div > div.responsive-container > table > thead > tr > th{
    font-family: var(--font-family);
    font-size: 0.7rem;


}
</style>



    </div>
</body>
</html>
