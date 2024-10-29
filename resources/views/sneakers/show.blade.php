@extends('layouts.app')

@section('page-title', 'Sneaker Show ' . $sneaker->id)

@section('content')
<main>
    <section id="sneaker-item">
        <div class="container">
            <div class="sneaker-card">
                <div class="img-box">
                    <img src="{{ $sneaker->img_url }}" alt="{{ $sneaker->id }}">
                </div>
                <div class="sneaker-info">
                    <h5 class="card-title">{{ $sneaker->brand }}</h5>
                    <h5>{{ $sneaker->model }} - {{ $sneaker->colorway }}</h5>
                    <p class="card-text">
                      Released on {{ $sneaker->year_release}}
                    </p>
                    <p class="card-text">
                      Retail price &euro;{{ $sneaker->retail_price}}
                    </p>
                    <p class="card-text">
                      Actual market price &euro;{{ $sneaker->actual_price}}
                    </p>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
