@extends('layouts.app')
@section('titulo', 'Minimercado')
@section('cabecera', 'Casa real - uniformes, ropa deportiva y más.')
@section('contenido')
 <div class="hero min-h-screen" style="background-image:
url(https://images.unsplash.com/photo-1466027397211-20d0f2449a3f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1418&q=80);">
 <div class="hero-overlay bg-opacity-60"></div>
 <div class="hero-content text-center text-neutral-content">
 <div class="max-w-md">
 <h1 class="mb-5 text-5xl font-bold">¡Estamos comprometidos contigo!</h1>
 <p class="mb-5">Aquí encontrará los mejores productos y los mejores precios.
Nuestros envíos no tienen costo y nuestras prendas son de la mejor calidad.</p>
 <a href="{{route('productos.index')}}" class="btn btn-primary">Iniciar experiencia</a>
 </div>
 </div>
 </div>
@endsection