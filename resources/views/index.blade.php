@extends('layout')
@section('title')
    Bienvenida
@stop
@section('content')
<figure class="logo">
    <img src="./assets/img/logo-slim-soft.png" alt="">
</figure>
<p class="user-logged">Bienvenido {{ $user->name }}</p>
<section class="toothbrush">
    <div class="toothbrush__dial">
        <input type="text" id="dial" class="dial" value="50">
    </div>
    <figure class="toothbrush__image">
        <img src="./assets/img/cepillo-normal.png" alt="">
    </figure>
    <div class="toothbrush__indicators">
        <a id="indicator-one" class="toothbrush__indicator active" href=""><img src="./assets/img/numero-01.png" alt=""></a>
        <a id="indicator-two" class="toothbrush__indicator" href=""><img src="./assets/img/numero-02.png" alt=""></a>
    </div>
</section>
<a href="{{ route('logout_path') }}">Cerrar sesión</a>
@stop