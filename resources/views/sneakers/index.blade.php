@extends('layouts.app')

@section('content')
<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="text-center">My sneakers collection</h1>
            </div>
            <div class="col-12">
                <a href="{{ route('sneaker-crate') }}" class="btn btn-primary">Adde a new Sneaker in your collection</a>
            </div>
            <div class="col-10">
                <ul class="row">
                    @forelse ($sneakers as $sneaker)
                    <li class="col-4 g-3">
                        <div id="sneaker-card" class="card py-4">
                            <div class="img-box">
                                <img src="{{ $sneaker->img_url}}" class="card-img-top img-fluid" alt="{{ $sneaker->id}}">
                            </div>
                            <div class="card-body">
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
                        <div class="d-flex justify-content-center py-3">
                            <a href="{{ route('sneaker-show', ['id' => $sneaker->id]) }}" class="btn btn-primary">Show more</a>
                        </div>
                    </li>
                    @empty
                    <h1>There are not sneakers in your collection yet!</h1>
                    @endforelse
                </ul>
            </div>
        </div>
    </div>
</main>
@endsection
