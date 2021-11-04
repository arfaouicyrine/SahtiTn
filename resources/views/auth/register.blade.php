<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">

    <title>SaHtI | Inscription </title>
</head>
<body>
<div class="container">
       <span> <a href="{{ url('/') }}" style="color: #202d49 ; font-size:2rem; text-decoration:none;">Sahti | Acceuil</a></span>
    <div class="image-wrapper">
        <img src="{{ asset('images/undraw_profile_image_re_ic2f.svg') }}" alt="vector">
    </div>
    @if ($errors->any())
    <ul>
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
    </ul>
    @endif
    <div class="form-wrapper">
        <form action="{{ route('register') }}" method="POST" autocomplete="off" class="contact-form">
           {{ csrf_field() }}
            <!-- step one -->
         <div class="form active">
             <h1 class="form-title"> Rejoinez-nous </h1>
             <p class="form-subtitle">Informations personnelles </p>
        <div class="form-input">
            <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nom et Prénom">
          @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
        </div>
         <div class="form-input col-md-3">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"  placeholder="Email">
             @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
        </div>
         <div class="form-input col-md-3">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Mot de passe">
             @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
        </div>
          <div class="form-input password col-md-3">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirmez votre mot de passe">
        </div>




        <div class="form-input col-md-3">
            <input type="text" placeholder="Numéro de Téléphone" name="mobileNo" id="mobileNo">
        </div>

         <div class="form-input col-md-3">
           <label for="role_as">Vous étes ?</label>
           <select name="role_as" id="role_as">
               <option value="">Vous étes </option>
               <option value="doctor" id="doctor">Médecin</option>
               <option value="patient" id="patient">Patient</option>
           </select>

        </div>
        <div class="form-input col-md-3">
             
            <select name="gender" id="gender">
                <option value="" >Choisir un genre</option>
                <option value="femme">Femme</option>
                <option value="homme">Homme</option>
            </select>
        </div>

           <div class="form-input col-md-3">
           <label for="locations">Choisir votre etat</label>
           <select id="location_id" name="location_id"  >
           <option value="">Choisir votre </option>
           @foreach ($locations as $location )
                   <option value="{{ $location->id }}"> {{ $location->title }}</option>
           @endforeach
          </select>
        </div>


        <div class="button-wrapper">
            <button type="submit" class="button button--filled"> Enregistrer </button>
        </div>
        </div>
           </div>
     </form>
    </div>
</div>
</body>

</html>

