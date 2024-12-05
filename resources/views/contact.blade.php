@extends('base')
@section('title', $title)  
@section('content')
<div class="container-form">
    <div class="scroll-top">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11l7-7 7 7M5 19l7-7 7 7" />
        </svg>
      </div>
 <h2>Contactez Energym</h2>
    <div class="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2254.8135506579015!2d3.0686723365072024!3d50.62819246758885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c2d59118928ab7%3A0xd0f3b05faaf1c4c!2sLe%20Cnam!5e0!3m2!1sfr!2sfr!4v1730668304358!5m2!1sfr!2sfr" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>     
   <form class="contact-form"><br>
            <label for="email">Votre email :</label>
            <input type="email" id="email" name="email" required placeholder="email@example.com">
            <label for="demande">Votre demande :</label>
            <input type="text" id="demande" name="demande" required>
            <label for="message">Votre message :</label>
            <textarea id="message" name="message" rows="4" required ></textarea>
            <button type="submit">Envoyer le message</button>
        </form>
    </div>
@endsection
