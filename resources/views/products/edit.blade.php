@extends('layouts.app')

@section('page_title', ' modifica prodotto')

@section('content')

  <div class="container">

    <h1>Modifica prodotto {{$product->id}}</h1>

<form method="post" action="{{route('products.update' , $product->id)}}">
  {{-- indispensabile per passare il contenuto del form alla pagina store altrimenti da errore in quanto laravel non riesce ad effettuare il controllo --}}
  @method('PUT')
  @csrf
  <div class="form-group">
    <label for="name">Nome</label>
    <input type="text" class="form-control" name ="name" placeholder="Inserisci il nome del prodotto" value="{{$product->name}}">
  </div>
  <div class="form-group">
    <label for="description">Descrizione prodotto</label>
    <textarea class="form-control" name ="description" placeholder="inserisci la descrizione">{{$product->description}}</textarea>
  </div>
  <div class="form-group">
    <label for="category">Categoria</label>
    <input type="text" class="form-control" name ="category" placeholder="Inserisci la categoria del prodotto" value="{{$product->category}}">
  </div>
  <div class="form-group">
    <label for="price">Prezzo</label>
    <input type="text" class="form-control" name ="price" placeholder="Inserisci il prezzo del prodotto" value="{{$product->price}}">
  </div>
  <div class="form-group">
    <label for="sale_price">Prezzo scontato</label>
    <input type="text" class="form-control" name ="sale_price" placeholder="Inserisci il prezzo scontato" value="{{$product->sale_price}}">
  </div>
  <button type="submit" class="btn btn-primary">Modifica</button>
</form>

  </div>

@endsection
