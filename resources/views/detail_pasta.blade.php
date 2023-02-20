@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="row">
                    <div class="col-5">
                        <img src="{{ $single['src']}}" class="img-fluid">
                    </div>
                    <div class="col-7">
                        <div class="p-5">
                            <h2><strong>{{ $single['titolo'] }}</strong></h2>
                            <p>
                                <strong>Descrizione</strong>: {{ $single['descrizione']}}
                            </p>
                            <p><strong>Tipo</strong>: {{ $single['tipo'] }}</p>
                            <p><strong>Cottura</strong>: {{ $single['cottura'] }}</p>
                            <p><strong>Peso</strong>: {{ $single['peso'] }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
