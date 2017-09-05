@extends('layout')
@section('title')
    Iniciar sesión
@stop
@section('content')
<img src="./assets/img/colgate-logo.png" alt="" class="login-logo">
<h1 class="login-message">Iniciar sesión</h1>
@include('partials.errors')
<form class="login-form" action="{{ route('login_path') }}" method="post">
    {{ csrf_field() }}
    <p><label for="username">Correo: </label><input class="login-form__input" type="text" name="email" value=""></p>
    <p><label for="password">Contraseña: </label><input class="login-form__input" type="password" name="password"></p>
    <p><input class="login-form__btn" type="submit" value="Iniciar sesión" name="login"></p>
</form>
@stop