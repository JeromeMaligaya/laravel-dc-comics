@extends('layouts.app')

@section('content')
<main>
    <section class="container my-4" id="form">
        <div class="row justify-content-center">
            <div class="col-5">
                <form method="POST" action="{{ route("sneaker-store") }}">
                    @csrf

                    <div class="mb-3">
                      <label for="brand" class="form-label">Brand:</label>
                      <input type="text" class="form-control" id="brand" name="brand">
                    </div>
                    <div class="mb-3">
                      <label for="model" class="form-label">Model:</label>
                      <input type="text" class="form-control" id="model" name="model">
                    </div>
                    <div class="mb-3">
                      <label for="colorway" class="form-label">Colorway:</label>
                      <input type="text" class="form-control" id="colorway" name="colorway">
                    </div>
                    <div class="mb-3">
                      <label for="year_release" class="form-label">Year Release:</label>
                      <input type="text" class="form-control" id="year_release" name="year_release">
                    </div>
                    <div class="mb-3">
                      <label for="retail_price" class="form-label">Retail Price:: </label>
                      <input type="text" class="form-control" id="retail_price" name="retail_price">
                    </div>
                    <div class="mb-3">
                      <label for="actual_price" class="form-label">Actual Price:</label>
                      <input type="text" class="form-control" id="actual_price" name="actual_price">
                    </div>
                    <div class="mb-3">
                      <label for="img_url" class="form-label">Image URL:</label>
                      <input type="text" class="form-control" id="img_url" name="img_url">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-warning">Reset</button>
                </form>
            </div>
        </div>
    </section>
</main>
@endsection
