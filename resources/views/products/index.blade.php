@extends('layouts.app')

@section('content')

  <div class="container">

    <h1 class="pull-left">Tutti i prodotti</h1>
    <a href="{{route('products.create')}}" class="btn btn-primary pull-right">Aggiungi nuovo Prodotto</a>

    <table class="table table-dark">
  <thead>
    <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>Descrizione</th>
      <th>categoria</th>
      <th>Prezzo</th>
      <th>Prezzo Scontato</th>
      <th>Azioni</th>
    </tr>
  </thead>
  <tbody>
    @forelse ($products as $product)
      <tr>
        <th>{{$product->id}}</th>
        <td>{{$product->name}}</td>
        <td>{{$product->description}}</td>
        <td>{{$product->category}}</td>
        <td>{{$product->price}}</td>
        <td>
   {{-- inserisco un controllo di esempio se per caso non è disponibile il prezzo scontato --}}
          @if ($product->sale_price)
             {{$product->sale_price}}
         @else
           n\n
          @endif
        </td>
        <td><a href="{{route('products.show', $product->id )}}" class="btn btn-info">Visualizza</a></td>
        <td><a href="{{route('products.edit', $product->id )}}" class="btn btn-info">Modifica</a></td></td>
      </tr>

    @empty
      <td colspan"7">

         non ci sono prodotti
      </td>
    @endforelse
  @endsection

  </tbody>
</table>

  </div>



{{-- definisco il title della mia pagina --}}
@section('page_title')
  index dei prodotti

@endsection
