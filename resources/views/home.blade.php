@extends('layout')

@section('content')

    <div class="banner">
        <h1>Bienvenue sur mon <strong>portfolio</strong> !</h1>
    </div>

    <div class="home">
        <div class="profil">
            <img class="pdp" src="/images/pdp.png">
            <p>TOM ENGELIBERT</p>
            <P class="devfull">Je suis développeur <strong>Full/Stack</strong></P>
            <img class="trait" src="/images/trait.png">
        </div>


        <div class="firstprojects">

        </div>

        <div class="fleche">
            <img src="/images/arrow.png">
            <p>Mes dernières réalisations </p>
            <button>Voir mes réalisations</button>
        </div>

    </div>

    <div class="presentation">

        <div class="texte">
            <h2>Présentation</h2>
            <p>Bonjour à tous, je m'appelle Tom Engélibert. Actuellement en Licence Professionnelle - Métiers du Numérique - Conception, Rédaction et Réalisation WEB, je suis à la recherche d'un master en Développement Web.</p>
            <button>Voir mon CV</button>
        </div>

        <div class="parcours">
            <img src="/images/parcours.png">
        </div>
    </div>


@endsection
