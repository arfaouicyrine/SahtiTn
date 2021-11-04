<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
     <link rel="stylesheet" href="{{ URL::asset('/css/login.css') }}"  type="text/css" >
    <title>SaHtI | Connexion</title>


</head>
<body >
<div class="container">
    <span> <a href="{{ url('/') }}" style="color: #202d49 ; font-size:2rem; text-decoration:none;">Sahti | Acceuil</a></span>
    <div class="row">
      
    <div class="image-wrapper ">
   <img src="{{ asset('images/login.svg') }}"  alt="image">
    </div>

     <div class="form-wrapper ">
    <h3 class="signin-text mb-3" style="text-align:center"> S'identifier</h3>
    <form action="{{ route('login') }}" method="POST">
    @csrf
     <div class="form-input">
            <input id="email" type="email" name="email" required autocomplete="email" placeholder="Email">

        </div>

     <div class="form-input">
            <input id="password" type="password" name="password" required autocomplete="password" placeholder="Mot de passe">

        </div>

    <div class="form-group form-check">
        <input type="checkbox" name="checkbox" class="form-check-input" id="checkbox">
        <label class="form-check-label" for="checkbox">Me souviens </label>
    </div>
    <button type="submit"   class="btn btn-class">Se connecter</button>
        @if (Route::has('password.request'))
                                    <a class="btn btn-link centered" style=" color:black ;" href="{{ route('password.request') }}">
                                        {{ __('Mot de passe oublié') }}
                                    </a>
                                @endif
    <h5 class="inscrit" style="text-align: center ; text-decoration:none ;">Vous n'avez pas un compte ? <a href="{{ route('register') }}" style="color:#C96567;" > S'inscrire </a></h5>

    </form>
    </div>


    </div>
</div>











</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
</html>
