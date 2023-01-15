@extends('base')

@section ('page_title', 'Accueil')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

@section('content')
    <h2> Contact </h2>
        <ul>
            <li>Téléphone : 06 00 00 00 00</li>
            <li>Adresse : 5 Boulevard Louis XIV, 59800 Lille</li>
        </ul>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2530.917058661927!2d3.068986615737832!3d50.62865757950029!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c2d59118928ab7%3A0xd0f3b05faaf1c4c!2sLe%20Cnam!5e0!3m2!1sfr!2sfr!4v1673711234789!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <form>
        <h3>Contactez-nous</h3>
        <div class ="separation"></div>
        <div class ="corps_formulaire">
                <div class="groupe">
                    <label>Votre adresse e-mail :</label>
                    <input type="text">
                    <i class="fa-regular fa-envelope"></i>
                </div>
                <div class="groupe">
                    <label>Votre demande :</label>
                    <input type="text">
                    <i class="fa-solid fa-question"></i>
                </div>
                <div class="groupe">
                    <label>Votre message :</label>
                    <textarea name="" id="" cols="30" rows="10"></textarea>
                    <i class="fa-regular fa-message"></i>
                </div>
        </div>
        <div class="pied_formulaire">
            <button>Envoyer le message</button>
        </div>
    </form>
@endsection