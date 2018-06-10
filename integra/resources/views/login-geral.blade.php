@extends('layouts.partials-geral.head')
@extends('layouts.partials-geral.header')

<style type="text/css">
    .bloco-user{
        color: #333;
    }
    .far, .fas, .fa{
        color: #8d48d2;
    }
</style>
<div class="container text-center">
    <h1 style="padding-top: 2em; padding-bottom: 2em;">Login</h1>
    <div class="col-md-12" style="padding-top: 2em;">
        <a href="{{ route('login') }}">
        <div class="col-md-2 col-md-offset-2 col-xs-8 col-xs-offset-2 bloco-user">
          <i class="far fa-user fa-5x"></i>
          <h2>Aluno</h2>
        </div></a>

        <a href="{{ route('admin.login') }}">
        <div class="col-md-2  col-md-offset-1 col-xs-8 col-xs-offset-2 bloco-user">
          <i class="fa fa-graduation-cap fa-5x"></i>
          <h2>Universidade</h2>
        </div></a>
        
        <a href="{{ route('emp.login') }}">
        <div class="col-md-2  col-md-offset-1 col-xs-8 col-xs-offset-2 bloco-user">
          <i class="fas fa-briefcase fa-5x"></i>
          <h2>Empresa</h2>
        </div></a>
    </div>
</div>
@extends('layouts.partials-geral.footer')