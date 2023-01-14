@extends('base')

@section ('page_title', 'Accueil')

@section('content')
    <h2> Accueil </h2>
    <h3>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima, iure!</h3>
    <img class="medium-size" 
    src="{{asset('img/chris-kendall-sJ6az6-T1u8-unsplash.jpg')}}"  
    alt="Photo_Boxeur">
    <img class="medium-size" 
    src="{{asset('img/dylan-gillis-YJdCZba0TYE-unsplash.jpg')}}"  
    alt="Photo_Yoga">
@endsection