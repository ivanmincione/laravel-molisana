@extends('layouts.app')


@section("content")
    <div class="container">
        <h1>Lista dei prodotti</h1>

        <div class="box-card">

            @foreach ($typePasta as $pasta)
                <div class="card">
                    <img src=" {{ $pasta["src"] }}" alt=" {{ $pasta["titolo"] }}">
                    <div class="over">
                        <a href="#"> {{ $pasta["titolo"] }} </a>
                    </div>
                </div>
            @endforeach

        </div>

    </div>

@endsection
