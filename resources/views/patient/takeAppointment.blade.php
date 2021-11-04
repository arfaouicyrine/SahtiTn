<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('css/appointment.css') }}">
<link rel="stylesheet" href="{{ asset('fontawesome/css/all.css') }}">
<title>SaHtI | Réservation </title>
</head>
<body>
<!-- first navbar -->




<div class="container">
    <span><a href="{{ url('/') }}" style="color:#97AABD ;text-decoration:none ">Sahti</a></span>
     <div class="image-wrapper">
         <img src="{{ asset('images/undraw_Booking_re_gw4j.svg') }}" style="width: 600px ;margin-left:-74px ; margin-top:90px;" alt="">
     </div>
                <div class="form-wrapper" style="margin-left: 600px;">
                    <h3 style="color: #97AABD">Prendre un rendez-vous</h3>
                    <form action="{{ url( $id.'/reserve') }}" method="POST">
                        @csrf
                        <div class="form-input">
                            <label for="name">Saisir votre demande</label>
                        <input type="text" name="description">
                        </div>


                          <div class="button-wrapper">
                        <button type="submit" class="button button--filled"> Enregistrer</button>
                          </div>
                    </form>
                </div>

</div>


<style>
    section#appointment container{
        padding: 70px 15px ;
        max-width: 1600px ;
        margin: 0 auto ;
        display: flex;
        justify-content: space-evenly ;
        align-items: center ;
        flex-direction: row ;

    }
</style>

</body>
</html>
