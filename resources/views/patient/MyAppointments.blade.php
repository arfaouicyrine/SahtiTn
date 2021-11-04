@extends('layouts.inc.front-navbar')
<body style="background-color: whitesmoke; margin-top :180px ;">
    <div class="container">
      <div class="row">
          <div class="content">
               <h2 class="page-title" style="margin-bottom: 55px; color:#202d49;">Mes réservations :</h2>
              <table class="table table-striped">
             <thead style=" color:#C96567 ;">
                  
                  
                  <th>Nom du Médecin</th>
                  <th>Date et heure du rendez-vous</th>
                  <th>Description</th>

             </thead>
             <tbody>
                 @foreach ($user->appointments as $item )
                 <tr>

                   
                   
                     <td>{{ $item->doctor->doctorName }}</td>
                       <td>{{ $item->app_date.' '.$item->app_time }}</td>
                     <td>{{ $item->description}}</td>
                     
                    </tr>
                 @endforeach
             
     
             </tbody>
          </table>
          </div>
      </div>

    </div>
</body>   
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

