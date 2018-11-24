@extends('layouts.tema-store')




@section('background-image')
  <div id="headerwrap" name="home">
@endsection

@section('content')
  <h1>MUSICAL ST<span class="icon icon-radio-checked"></span>RE</h1>
      
  <h2 style="color: white ">¡La música y la felicidad a tu alcance!</h2>
  <a href=" {{ route ('inicio') }}">Ir a la tienda</a>
@endsection