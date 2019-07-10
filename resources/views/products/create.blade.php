@extends('layouts.app')

@section('page_title', ' inserimento nuovo prodotto')

@section('content')

  <div class="container">

<form method="post" action="{{route('products.store')}}">
  <div class="form-group">
    <label for="name">Nome</label>
    <input type="text" class="form-control" name ="name" placeholder="Inserisci il nome del prodotto">
  </div>
  <div class="form-group">
    <label for="description">Descrizione prodotto</label>
    <textarea class="form-control" name ="description" placeholder="inserisci la descrizione"></textarea>
  </div>
  <div class="form-group">
    <label for="category">Categoria</label>
    <input type="text" class="form-control" name ="category" placeholder="Inserisci la categoria del prodotto">
  </div>
  <div class="form-group">
    <label for="price">Prezzo</label>
    <input type="text" class="form-control" name ="price" placeholder="Inserisci il prezzo del prodotto">
  </div>
  <div class="form-group">
    <label for="sale_price">Prezzo scontato</label>
    <input type="text" class="form-control" name ="sale_price" placeholder="Inserisci il prezzo scontato">
  </div>
  <button type="submit" class="btn btn-primary">Invia</button>
</form>

  </div>

@endsection
