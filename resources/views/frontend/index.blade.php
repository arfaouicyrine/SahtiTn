@extends('layouts.frontend')

@section('content')
<header>
    <section>
 <section class="about  py-5 ">
        <div class="row align-items-center container my-5 mx-auto">
            <div class="text col-lg-6  col-md-6 col-12 w-50 pt-5 pb-5">
                <h2>Sahti </h2>
                <h4 style="color: #97AABD">Votre platefrome de prise de rendez-vous </h4>
                <p>Sahti vous fait gagner un temps précieux , il vous permet tout d’abord de partager plus rapidement et efficacement toutes les informations
                  sur les médecins et ces disponibilité . Et cela est effectuer par la fonctionnalité de recherche
                </p>
                <a href="{{ url('search-doctor') }}">Voir plus</a>

            </div>
            <div class="img col-lg-6 col-md-6 col-12 w-50 pt-5 pb-5">
                <img  class="img-fluid" src="{{ asset('images/ab.svg') }}" alt="">

            </div>
        </div>
    </section>
</header>

    <section class="about  py-5 " style="background-color:whitesmoke ;">
        <div class="row align-items-center container my-5 mx-auto">
            <div class="text col-lg-6  col-md-6 col-12 w-50 pt-5 pb-5">
                 <h2>Sahti</h2>
                <h6>Faciliter de prise de rendez-vous</h6>

                <p style="color: #202d49">Sahti est sans doute la solution la plus crédible au
                     problème des déserts médicaux. En effet, certaines régions isolées manquent
                     cruellement de médecins généralistes et il faut parfois faire des dizaines de
                     kilomètres pour consulter.  La télémédecine doit aussi permettre d’obtenir
                     plus facilement un rendez-vous chez un spécialiste alors que les délais sont
                     parfois de plusieurs semaines ou mois. A La Réunion, c’est notamment le cas
                     pour les ophtalmologistes et les dermatologues.
                </p>


            </div>
            <div class="img col-lg-6 col-md-6 col-12 w-50 pt-5 pb-5">
                <img  class="img-fluid" src="{{ asset('images/toto1.svg') }}" alt="">

            </div>
        </div>
    </section>



<section class="discovery py-5">
    <div class="col mx-auto align-items-center my-5">
    <div class="heading text-center pt-5">
        <h2 class="font-weight-bold  text-light">Nos services</h2>
    </div>
    <div class="row mx-auto justify-content-center align-items-center text-center container">
        <div class="one col-lg-3 col-md-3 col-12 w-25 m-2 ">
        <img src="{{ asset('images/undraw_File_searching_re_3evy.svg') }}" class="img-fluid" width="180px" alt="">
        <h5 class="font-weight-bold pt-4">Chercher un médecin</h5>
        <p>Notre plateforme vous donne la possibilité de chercher un médecin prés de vous</p>
        </div>

          <div class="one col-lg-3 col-md-3 col-12 w-25   m-2">
        <img src="{{ asset('images/undraw_Booked_re_vtod.svg') }}"  class="img-fluid " width="220px" alt="">
        <h5 class="font-weight-bold pt-4 ">Prenez un rendez-vous en ligne </h5>
        <p>Envoyer un demande d'un rendez-vous au médecin choisit par la recherche</p>
        </div>

          <div class="one col-lg-3  col-md-3 col-12 w-25 m-2 ">
        <img src="{{ asset('images/undraw_Online_information_re_erks.svg') }}" class="img-fluid" width="190px" alt="">
        <h5 class="font-weight-bold pt-4">Consulter notre Magazine</h5>
        <p> Pour des conseils simples et pratiques sur votre santé .</p>
    </div>

    </div>
    </div>
</section>



 <section class="doctor py-5 ">
        <div class="row align-items-center container my-5 mx-auto">
            <div class="text col-lg-6  col-md-6 col-12 w-50 pt-5 pb-5">
                <h1>Rejoins notre équipe</h1>
                <h3>Vous êtes un médecin ?</h3>
                <p>Notre platrforme vous donne l'occasion de gérer vos patients et vos consultation en ligne .
                   Vous pouvez envoyer un demande de rejoindre à Sahti par email .
                </p>


            </div>
            <div class="img col-lg-6 col-md-6 col-12 w-50 pt-5 pb-5">
                <img  class="img-fluid" src="{{ asset('images/undraw_Team_page_re_cffb.svg') }}" alt="">

            </div>
        </div>
    </section>




<style>
    .container {
        min-height: 100vh ;
        width:100%;
        display: flex ;
        align-items: center ;
        justify-content: center ;

    }
    </style>


@endsection
