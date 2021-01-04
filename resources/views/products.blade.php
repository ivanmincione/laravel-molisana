@extends('layouts.app')

@section("page-title", "I nostri prodotti - La Molisana")

@section("content")
    <section id="products">
        <div class="container">
            @foreach ($formati as $tipo => $pasta)
                <h1 class="titolo-tipo">{{ $tipo }}</h1>
                <div class="box-card">
                    @foreach ($pasta as $indice => $formato)
                        <div class="card">
                            <img src="{{ $formato['src'] }}" alt="{{ $formato['titolo'] }}">
                            <div class="over">
                                <a href="{{ route('pagina-dettaglio', ['id' => $indice]) }}">
                                    {{ $formato['titolo'] }}
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
    </section>


@endsection
