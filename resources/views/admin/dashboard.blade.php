<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>SaHtI | Administration</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
</head>
<body>
    <input type="checkbox" id="nav-toggle">
   <div class="sidebar">
     <div class="sidebar-brand">
         <h2> <span><img src="https://img.icons8.com/dusk/64/000000/doctors-bag.png"/></span>Sahti</h2>
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
             <li>  <a href="{{ url('hospital') }}"> <span class="las la-hospital mr-3"></span> <span></span> Hôpital</a>    </li>

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

       <main> <div class="cards">
          <div class="card-single">
              <div>
                  <h1>2</h1>
                  <span>Nouveau rendez-vous</span>
              </div>
              <div>
                  <span class="las la-users"></span>
              </div>
          </div>

           <div class="card-single">
              <div>
                  <h1>4</h1>
                  <span>Factures</span>
              </div>
              <div>
                  <span class="las la-users"></span>
              </div>
          </div>

          <div class="card-single">
              <div>
                  <h1>50 like</h1>
                  <span>Dernier Article</span>
              </div>
              <div>
                  <span class="las la-users"></span>
              </div>
          </div>


           <div class="card-single">
              <div>
                  <h1>71 commentaires </h1>
                  <span>Dernier Article</span>
              </div>
              <div>
                  <span class="las la-users"></span>
              </div>
          </div>

        </div>

        <div class="recent-grid">
            <div class="articles">
             <div class="card">
                 <div class="card-header">
                        <h3>Recent Articles </h3>
                        <button><a href="{{ url('article')}}" style="color: white;">Voir tous</a> <span class="las la-arrow-right"></span></button>
                 </div>
                 <div class="card-body">
                     <div class="table-responsive">
                         <table width="100%">
                          <thead>
                              <tr>
                                  <td>Nom d'article</td>
                                    <td>Départment</td>
                                     <td>Status</td>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <td>Covid</td>
                                   <td>Dematologie</td>
                                   <td><span class="status"> </span>2 personnes lu cet article</td>
                              </tr>
                              <tr>
                                  <td>Covid</td>
                                   <td>Dematologie</td>
                                   <td><span class="status"></span>2 personnes lu cet article</td>
                              </tr>
                              <tr>
                                  <td>Covid</td>
                                   <td>Dematologie</td>
                                   <td><span class="status"> </span>2 personnes lu cet article</td>
                              </tr>
                              <tr>
                                  <td>Covid</td>
                                   <td>Dematologie</td>
                                   <td><span class="status"></span> 2 personnes lu cet article</td>
                              </tr>
                              <tr>
                                  <td>Covid</td>
                                   <td>Dematologie</td>
                                   <td><span class="status"></span>2 personnes lu cet article</td>
                              </tr>
                          </tbody>
                     </table>
                     </div>
                 </div>
             </div>
            </div>

            <div class="patients">
                <div class="card">
                    <div class="card-header">
                        <h3>Patients</h3>
                        <button>Voir tous <span class="las la-arrow-right"></span></button>
                    </div>
                    <div class="card-body">


                        <div class="patient">
                          <div class="info">
                                <img src="{{ asset('images/3.jpg') }}" width="40px" height="40px" alt="">
                                <div>
                                    <h4>Nom du patient</h4>
                                    <small>Num de téléphone</small>
                                </div>
                          </div>
                          <div class="contact">
                              <span class="las la-user-circle"></span>
                              <span class="las la-comment"></span>
                              <span class="las la-phone"></span>

                            </div>
                        </div>

                          <div class="patient">
                          <div class="info">
                                <img src="{{ asset('images/3.jpg') }}" width="40px" height="40px" alt="">
                                <div>
                                    <h4>Nom du patient</h4>
                                    <small>Num de téléphone</small>
                                </div>
                          </div>
                          <div class="contact">
                              <span class="las la-user-circle"></span>
                              <span class="las la-comment"></span>
                              <span class="las la-phone"></span>

                            </div>
                        </div>

                         <div class="patient">
                          <div class="info">
                                <img src="{{ asset('images/3.jpg') }}" width="40px" height="40px" alt="">
                                <div>
                                    <h4>Nom du patient</h4>
                                    <small>Num de téléphone</small>
                                </div>
                          </div>
                          <div class="contact">
                              <span class="las la-user-circle"></span>
                              <span class="las la-comment"></span>
                              <span class="las la-phone"></span>

                            </div>
                        </div>


                          <div class="patient">
                          <div class="info">
                                <img src="{{ asset('images/3.jpg') }}" width="40px" height="40px" alt="">
                                <div>
                                    <h4>Nom du patient</h4>
                                    <small>Num de téléphone</small>
                                </div>
                          </div>
                          <div class="contact">
                              <span class="las la-user-circle"></span>
                              <span class="las la-comment"></span>
                              <span class="las la-phone"></span>

                            </div>
                        </div>

                  </div>
                </div>
            </div>

        </div>
</main>







</div>
</body>
</html>
