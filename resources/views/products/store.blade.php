@extends('layouts.app')
@section('page_title')
  Inserimento prodotto
@endsection

@section('content')
  <div class="container">
    <h1>nuovo prodotto inserito con successo</h1>
    <a class="nav-link" href="{{route('products.index')}}">Torna alla lista prodotti <span class="sr-only">(current)</span></a>
  </div>

@endsection
