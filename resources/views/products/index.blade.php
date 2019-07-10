<h1>Tutti i prodotti</h1>

@forelse ($products as $product)
 id: {{$product->id}} - nome: {{$product->name}} - descrizione: {{$product->description}} - categoria: {{$product->category}}- prezzo: {{$product->price}} <br>
@empty
 <p>non ci sono prodotti</p>
@endforelse
