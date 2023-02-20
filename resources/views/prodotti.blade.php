{{-- INCLUDIAMO IL LAYOUT NEL QUALE INSERIRE IL CONTENUTO --}}
@extends('layouts.app')
@section('page-title', 'Tutti i prodotti - La Molisana')
{{-- VADO AD INSERIRE IL CONTENUTO DELIMITATO DA SECTION ALL'INTERNO DI YIELD --}}
@section('content')
<div class="container">
    <h2 class="my-4">Tutti i prodotti</h2>
    <div class="row">
        @foreach($products as $product)
        <div class="col-12 col-sm-6 col-md-4">
            <a href="{{ route('detail-product', ['titolo' => $product['titolo']])}}">
                <div class="card m-2">
                    <img class="card-img-top img-fluid" src="{{ $product['src'] }}" alt="{{ $product['titolo']}}" />
                    <div class="card-body">
                        <h4>{{ $product['titolo'] }}</h4>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection
