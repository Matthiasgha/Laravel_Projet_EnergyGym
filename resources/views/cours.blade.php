@extends('base')
@section('title', $title)  
@section('content')
<div class="container">
    <div class="scroll-top">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11l7-7 7 7M5 19l7-7 7 7" />
        </svg>
      </div>
    <h2>Cours</h2>
    <p>Horaires d'ouverture de la salle de sport:</p>
    <ul>
        <li>Lundi - Vendredi : 6h00 - 22h00</li>
        <li>Samedi : 8h00 - 20h00</li>
        <li>Dimanche : 9h00 - 18h00</li>
    </ul>

    <h2>Horaires des cours :</h2>
    <div class="cours-section">
        <div class="cours-card">
            <div ><img class="svg" src="./img/zumba.webp" alt=""></div>
            <p class="cours-day">Lundi</p>
            <p class="cours-time">19h00 - 21h00</p>
            <p class="cours-name">Zumba</p>
        </div>
        <div class="cours-card">
            <div ><img class="svg" src="./img/pilates.jpg" alt=""></div>
            <p class="cours-day">Mardi</p>
            <p class="cours-time">19h30 - 21h30</p>
            <p class="cours-name">Pilates</p>
        </div>
        <div class="cours-card">
            <div> <img class="svg" src="./img/boxe.jpg" alt=""></div>
            <p class="cours-day">Jeudi</p>
            <p class="cours-time">20h00 - 22h00</p>
            <p class="cours-name">Boxe Anglaise</p>
        </div>
        <div class="cours-card">
            <div ><img class="svg" src="./img/hiit.webp" alt=""></div>
            <p class="cours-day">Vendredi</p>
            <p class="cours-time">20h00 - 22h00</p>
            <p class="cours-name">HIIT</p>
        </div>
        <div class="cours-card">
            <div ><img class="svg" src="./img/yoga.jpg" alt=""></div>
            <p class="cours-day">Samedi</p>
            <p class="cours-time">9h00 - 11h00</p>
            <p class="cours-name">Yoga</p>
        </div>
    </div>
</div>

@endsection
