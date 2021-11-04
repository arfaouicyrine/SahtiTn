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


     <div class="container-fluid" style="margin-top: 175px;">
     <div class="row">
         <div class="col-md-12">
             <h6>Ajouter article</h6>
             <a href="{{ url('article')}}" class="badge bg-danger py 2 text-white float-right " > Retour </a>
         </div>
     </div>

     <div class="row">
         <div class="col-md-12">
            <div class="card">
                  @if (session('status'))
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Article Ajouté</strong>{{ session('status')}}
                    <button type="button " class="close" data_dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>

                    </div>
                    @endif
                <div class="card-body">
                    <form action="{{ url('article-store') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                       <div class="row">
                           <div class="col-md-12">
                             <div class="form-group">
                                 <label for="">Titre</label>
                                 <input type="text" name="title" class="form-control" >
                             </div>
                         </div>



                         <div class="col-md-12">
                             <div class="form-group">
                                 <label for="">Description</label>
                                 <textarea rows="4" name="description" class="form-control" placeholder="Tapez une description"> </textarea>
                             </div>
                         </div>

                          <div class="col-md-6" style="margin-top: 16px;">
                             <div class="form-group">
                                 <label for="">Choisir un department</label>

                                 <select name="department_id">
                                     @foreach ($department as $ditem)
                                          <option value="{{ $ditem->id }}"> {{ $ditem->name }} </option>

                                     @endforeach

                                </select>
                         </div>
                        </div>


                          <div class="col-md-12">
                             <div class="form-group">
                                 <label class="mt-5" for="">Choisir une image</label>
                                 <input type="file" name="image" id="" >
                             </div>
                         </div>





                          <div class="col-md-12 mt-3">
                             <div class="form-group">
                              <button type="submit"class="btn" style="border-color:#C96567 ; background-color: #C96567; margin-left:400px">
                                   Ajouter
                              </button>
                             </div>
                         </div>



                      </div>
                    </form>
                </div>
            </div>
         </div>
     </div>





 </div>
















        </div>
</body>
</html>
