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
         <h2> <span><img src="https://img.icons8.com/dusk/64/000000/doctors-bag.png"/></span><a href="{{ url('/') }}" style="text-decoration: none ; color:whitesmoke ;">SaHtI</a></h2>
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
             <li>  <a href="{{ url('hospital') }}"> <span class="las la-user-md mr-3"></span> <span></span> Hôpital </a>    </li>

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

    <div class="container" style="margin-top: 140px;">
     <!-- Heading -->
      <div class="card mb-4 wow fadeIn">

        <!--Card content-->
        <div class="card-body d-sm-flex justify-content-between">

          <h4 class="mb-2 mb-sm-0 pt-1">
            <span style="background-color: ">Departments </span>
          </h4>
          <a href="{{ url('department-add') }}" class="btn  float-right" style="border-color:#C96567 ; background-color: #C96567;">Ajouter un department</a>

        </div>

      </div>
      <!-- Heading -->
      <div class="row">
          <div class="col-md-12">
             <div class="card">
                 <div class="card-body">
                      <table class="table table-striped table-bordered">
                <thead>
                    <th>Id </th>
                    <th> Name </th>
                    <th> Description </th>
                     <th>Action</th>


                </thead>
                <tbody>
                    @foreach ($department as $item)
                         <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->description }}</td>

                    <td>
                        <a href="{{ url('department-edit/'.$item->id )}}"  class="badge badge-pill  px-3 py-2" style="background-color: #C96567; text-decoration:none ">Edit</a>
                        <a href="{{  url ('department-delete/'.$item->id) }}" class="badge badge-pill  px-3 py-2" style="background-color: #97AABD ; text-decoration:none">Supprimer</a>
                    </td>


                </tr>
                 @endforeach
                </tbody>

            </table>
                 </div>
             </div>

          </div>
      </div>



 </div>



















    </div>
</body>
</html>
