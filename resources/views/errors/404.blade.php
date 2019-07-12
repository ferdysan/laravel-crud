
@extends('layouts.app')
@section('page_title')
pagina non trovata
@endsection
@section('content')
  <div class="container">
    <h1>Custom 404 page</h1>

    <a class="nav-link" href="{{route('products.index')}}">Torna alla lista prodotti <span class="sr-only">(current)</span></a>
  </div>

@endsection
