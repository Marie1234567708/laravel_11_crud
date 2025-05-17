@extends('layouts.app')
@section('content')
<div class="row justify-content-center mt-3">
    <div class="col-md-10">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <span>Product Information</span>
                <a href="{{ route('products.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
            </div>
            <div class="card-body">
                <div class="row">

                    <!-- Left Column: Product Details -->
                    <div class="col-md-6">
                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-label text-md-end text-start"><strong>Code:</strong></label>
                            <div class="col-md-8" style="line-height: 35px;">{{ $product->code }}</div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-label text-md-end text-start"><strong>Name:</strong></label>
                            <div class="col-md-8" style="line-height: 35px;">{{ $product->name }}</div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-label text-md-end text-start"><strong>Quantity:</strong></label>
                            <div class="col-md-8" style="line-height: 35px;">{{ $product->quantity }}</div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-label text-md-end text-start"><strong>Price:</strong></label>
                            <div class="col-md-8" style="line-height: 35px;">{{ $product->price }}</div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-label text-md-end text-start"><strong>Description:</strong></label>
                            <div class="col-md-8" style="line-height: 35px;">{{ $product->description }}</div>
                        </div>
                    </div>

                    <!-- Right Column: Product Image -->
                    <div class="col-md-6 text-center">
                        @if ($product->photo)
                            <img src="{{ asset('storage/' . $product->photo) }}" alt="Product Photo" class="img-fluid rounded shadow" style="max-height: 300px;">
                        @else
                            <div class="text-muted mt-4">No photo uploaded.</div>
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
