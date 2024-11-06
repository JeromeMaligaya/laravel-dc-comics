@extends('layouts.app')

@section('page-title', 'sneaker index')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <h1 class="text-center">This is your current Sneaker-Bin</h1>
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
                    <form action="{{ route("sneaker-restore", ["id" => $sneaker->id])}}" method="POST" class="w-100 mt-1">
                        @method('PATCH')
                        @csrf
                        <button type="submit" class="btn btn-warning w-100">Restore</button>
                    </form>
                    <form action="{{ route("sneaker-delete", ["id" => $sneaker->id])}}" method="POST" class="w-100 mt-1 mb-5 sneaker-form-delete" data-custom-name="{{ $sneaker->brand }} {{ $sneaker->model }} - {{ $sneaker->colorway }}">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger w-100">Permanent Delete</button>
                    </form>
                </li>
                @empty
                <h1 class="text-center text-bg-danger my-3 p-2 rounded-4">There are not sneakers in your bin! </h1>
                @endforelse
            </ul>
        </div>
    </div>
</div>

@endsection

@section('additional-scripts')
    @vite("resources/js/sneakers/delete-sneaker.js")
@endsection
