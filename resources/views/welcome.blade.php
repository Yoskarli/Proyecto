@extends('layouts.app')

@section('titulo','Pagina principal')

@section('contenido')
<div
  class="hero min-h-screen"
  style="background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSk9d_gdg4-nqNikOtFrYjHwpSRqvs5GCma4w&s)">
  <div class="hero-overlay bg-opacity-60"></div>
  <div class="hero-content text-neutral-content text-center">
    <div class="max-w-md">
      <h1 class="mb-5 text-5xl font-bold">¡Bienvenidos a Carniceria Carnes la Union!</h1>
      <p class="mb-5">
        En nuestra carnicería, nos enorgullecemos de ofrecer las carnes más frescas y de la mejor calidad. Nuestro compromiso con la frescura significa que siempre encontrarás cortes de carne recién preparados y listos para llevar a casa. Además, nos esforzamos por mantener precios competitivos para que puedas disfrutar de la mejor calidad sin comprometer tu bolsillo. ¡Visítanos en nuestra tienda fisica y descubre por qué nuestra carnicería es el lugar perfecto para encontrar carnes frescas a excelentes precios!!Disfruta de tu compra online.
      </p>
      <button class="btn btn-primary">Get Started</button>
    </div>
  </div>
</div>
@endsection
