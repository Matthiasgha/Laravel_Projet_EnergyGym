@extends('base')
@section('title', $title)  
@section('content')
<div class="container">
    <div class="scroll-top">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11l7-7 7 7M5 19l7-7 7 7" />
        </svg>
      </div>
    <h2>Abonnements</h2>
    <p>Découvrez nos offres d'abonnement adaptées à tous vos besoins !</p>
    <div class="abonnements-section">
        <div class="abonnement-card">
            <h2 class="h2">Mensuel</h2>
            <p>Accès illimité</p>
            <p class="price">45€/mois</p>
        </div>
        
        <div class="abonnement-card">
            <h2 class="h2">Annuel</h2>
            <p>Accès illimité + 2 séances de coaching offertes</p>
            <p class="price">480€/an</p>
        </div>
        
        <div class="abonnement-card">
            <h2 class="h2">Séance unique</h2>
            <p>Pour un essai ou un accès ponctuel</p>
            <p class="price">10€</p>
        </div>
    </div>

    <h2 class="h2">Services supplémentaires</h2>
    <ul class="services-list">
        <li>Cours offerts à tous les abonnées</li>
        <li>Coaching personnalisé</li>
        <li>Programmes d'entraînement sur mesure</li>
        <li>Séances de nutrition et de conseils diététiques</li>
        <li>Wi-Fi gratuit et bar à smoothies santé</li>
    </ul>

    <p class="invitation">Energym vous invite à venir découvrir une nouvelle approche du fitness, où chaque entraînement est une expérience motivante et énergisante !</p>
</div>

@endsection
