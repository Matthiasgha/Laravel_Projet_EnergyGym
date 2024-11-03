@extends('base')
@section('title', $title)  
@section('content')
<div class="container">
<h2>Accueil</h2>
<p class="description">Energym est une salle de sport moderne et dynamique, conçue pour répondre aux besoins de tous les passionnés de fitness, des débutants aux athlètes confirmés. Située au cœur de la ville, cette salle propose un espace d'entraînement complet où chacun peut progresser à son rythme et dans un environnement motivant.
    Chez Energym, vous trouverez des équipements de pointe qui garantissent des séances variées et efficaces, ainsi que des espaces d'entraînement fonctionnel parfaitement adaptés aux besoins de tous. Que vous souhaitiez travailler votre cardio, développer votre musculature, améliorer votre souplesse ou simplement vous défouler, nous avons tout ce qu'il faut pour que vos objectifs deviennent réalité.
    Notre offre inclut une large gamme de cours collectifs, allant du HIIT et de la musculation aux séances de yoga et de pilates. Ces cours sont animés par des coachs certifiés et expérimentés, qui sont là pour vous guider, vous conseiller et vous motiver tout au long de votre parcours. Leur expertise vous aidera à adopter les meilleures techniques pour maximiser vos résultats tout en évitant les blessures.
    L'équipe d'Energym est passionnée par le sport et l'accompagnement personnalisé. Elle met tout en œuvre pour créer une ambiance conviviale et positive, dans laquelle chaque membre se sent encouragé et soutenu. Peu importe votre niveau, nous nous engageons à vous fournir l'encadrement et les ressources dont vous avez besoin pour atteindre vos objectifs et repousser vos limites.  
    Rejoignez Energym et vivez une expérience unique, où la performance, la santé et le bien-être sont au cœur de chaque séance !</p>
    <div class="carrousel">
        <input type="radio" name="carrousel" id="image1" checked>
        <input type="radio" name="carrousel" id="image2">
        <input type="radio" name="carrousel" id="image3">
        <div class="carrousel-images">
            <div class="slide" id="slide1">
                <img src="./img/Appareils-de-musculation-professionnels.jpg" alt="Image 1">
            </div>
            <div class="slide" id="slide2">
                <img src="./img/boxe-muay-thai-02.jpg" alt="Image 2">
            </div>
            <div class="slide" id="slide3">
                <img src="./img/spc-170127-1061_5.jpg" alt="Image 3">
            </div>
        </div>
        <div class="navigation">
            <label for="image1" class="nav-button"></label>
            <label for="image2" class="nav-button"></label>
            <label for="image3" class="nav-button"></label>
        </div>
    </div>
    
</div>
@endsection
