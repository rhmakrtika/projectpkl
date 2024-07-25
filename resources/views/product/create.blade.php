@extends('layouts.backend')
@section('content')
<div class="col-12 col-xl-12">
    <div class="card">
        <div class="card-body p-4">
            <h5 class="mb-4">Add Product</h5>
            <form class="row g-3" method="POST" action="{{ route('product.store') }}"  enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Name Product</label>
                    <div class="position-relative input-icon">
                    <input type="text" class="form-control @error('name_product') is-invalid @enderror" name="name_product"
                        value="{{ old('name_product') }}" placeholder="name product" required>
                    @error('name_product')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Price</label>
                    <div class="position-relative input-icon">
                    <input type="number" class="form-control @error('price') is-invalid @enderror" name="price"
                        value="{{ old('price') }}" placeholder="price" required>
                    @error('price')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Category</label>
                    <div class="position-relative input-icon">
                    <input type="text" class="form-control @error('category') is-invalid @enderror" name="category"
                        value="{{ old('category') }}" placeholder="category" required>
                    @error('category')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Stock</label>
                    <div class="position-relative input-icon">
                    <input type="number" class="form-control @error('stock') is-invalid @enderror" name="stock"
                        value="{{ old('stock') }}" placeholder="stock" required>
                    @error('stock')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>
                </div>
                    <div class="col-md-13">
                        <label for="input14" class="form-label">cover</label>
                        <div class="position-relative input-icon">
                            <input type="file" name="cover" class="form-control @error('cover') is-invalid @enderror" id="input14" placeholder="cover">
                            @error('cover')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                </div>
                <div class="col-md-12">
                    <div class="d-md-flex d-grid align-items-center gap-3">
                        <button type="submit" class="btn btn-grd-primary px-4">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
