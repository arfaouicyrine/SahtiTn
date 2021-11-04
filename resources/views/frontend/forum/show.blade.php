@extends('layouts.inc.front-navbar')
<body style="background-color:whitesmoke;">


        <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">Sahti</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">

                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('forum') }}">Forum Santé</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Chercher Ici
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ url('search-doctor') }}">Chercher un médcin</a></li>
                                <li><a class="dropdown-item" href="{{ url('search-hospital') }}">Chercher un hôpital</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                           </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('magazine') }}">Magazine </a>
                        </li>

                         @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Se connecter') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Inscription  ') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a href="{{ url('my-profile') }}" class="dropdown-item">
                                    Mon Profile
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                       </ul>




                </div>
            </div>
        </nav>

<div class="container" style="margin-top: 180px; background-color:whitesmoke;" >
   <div class="row justify-content-start" >

       <div class="col-md-4">
           <div class="py-2 mt-3" style="margin-top:18rem; margin-left:10px;">
               <a href="{{ route('forum.create') }}" class="btn" style="background-color:#C96567 ; color:white ; " >Posez une question</a>
           </div>
           <div class="card">
                <div class="card-header"><h2 style="font-family: 'Benne', serif;
                                 font-size: 2.5rem;">Departments</h2></div>
                  <div class="card-body">
                       <ul class="list-group">
                   @foreach ($department as $ditem )
                        <li class="list-group-item"> <h6><a href="#" style="color:#202d49; font-family:'Mulish',
        sans-serif;font-size:1.5rem ;">{{ $ditem->name }}</a></h6> </li>

                   @endforeach
                    </ul>
               </div>
           </div>
       </div>
       <div class="col-md-8" style="margin-top: 80px;">
        <div class="card">
               @if (session()->has('success'))
               <div class="alert alert-success">{{ session()->get('success') }}</div>
           @endif
               <div class="card-header"><h2 style="font-family: 'Benne', serif; font-size: 2.5rem;">{{ $forum->title }}</h2></div>


                        <div class="card-body row">
                            <div class="media bg-light rounded shadow-sm bg-light p-2 my-2">
                                <div class="media-body">
                                    <div class="d-flex justify-content-start align-items-start flex-column">
                                        <p class="lead">
                                          Crée par :  {{ $forum->users->name }}</p>
                                         Question sur  :   {{ $forum->department->name }}</p>
                                            <p style="margin-left:555px; background-color:#97AABD" class=" text-black rounded p-2 float-right">{{ $forum->created_at->diffForHumans() }}</p>
                                        <p> {{ $forum->content }} </p>

                                    </div>
                                </div>
                            </div>
                        </div>


        </div>

         <div class="card mt-2">

                <div class="card-header"> Réponse </div>
                <div class="card-body">

                      @foreach ( $forum->reponse as $reponse)
                      <div class="list-group-item">

                          <p>{{ $reponse->reponse }}</p>
                          <div class="d-flex  justify-content-between align-items-center">
                              <small>Posté depuis {{ $reponse->created_at->diffForhumans()}}</small>
                                 <span>
                                  Par :   {{ $reponse->users->name }}
                                 </span>
                          </div>
                          </div>
                 @endforeach

                </div>


            </div>
                  @if (session()->has('success'))
               <div class="alert alert-success">{{ session()->get('success') }}</div>
               @endif
            <div class="card mt-2">

                <div class="card-header">Ajouter une réponse </div>
                <div class="card-body">
                 <form action="{{ route('reponse.store') }}" method="POST">
                   <input type="hidden" name="_token" value="{{ csrf_token() }}">

                       <div class="form-group">
                          <textarea class="form-control" name="reponse" id="reponse" cols="30" rows="5" placeholder="Saisir votre réponse"></textarea>
                        </div>

                      <input type="hidden" name="forum_id" value="{{ $forum->id }}">

                      <div class="form-group">
                          <button type="submit" class="btn btn-success">Valider</button>
                      </div>

                </form>
                </div>


            </div>


    </div>
   </div>
</div>


<style>
    @import url('https://fonts.googleapis.com/css2?family=Mulish:ital,wght@1,200&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Benne&display=swap');
</style>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



</div>
</body>
