@extends('layouts.app')
@section('page_title')
  Visualizzazione prodotto
@endsection
@section('content')
  <div class="container">
    <h1>Prodotto : {{$product->id}}</h1>

    <ul>
      <li><strong>Nome</strong>{{$product->name}}</li>
      <li><strong>Descrizione</strong>{{$product->description}}</li>
      <li><strong>Categoria</strong>{{$product->category}}</li>
      <li><strong>prezzo</strong>{{$product->price}}</li>
      <li><strong>Prezzo scontato</strong>{{$product->sale_price ? $product->sale_price :'-' }}</li>
    </ul>
      <a class="nav-link" href="{{route('products.index')}}">Torna alla lista prodotti <span class="sr-only">(current)</span></a>
  </div>


@endsection
