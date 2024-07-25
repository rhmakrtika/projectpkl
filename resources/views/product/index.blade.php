@extends('layouts.backend')
@section('content')
<h6 class="mb-0 text-uppercase">Product Page</h6>
<hr>
<div class="card">
    <div class="card-body">
        <div class="col-lg-2">
            <a href="{{ route('product.create') }}" class="btn btn-success px-4 raised d-flex gap-2" >
                <i class="material-icons-outlined">account_circle</i>
                Add Product
            </a>
        </div>
        <table class="table mb-0 table-striped">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Category</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Cover</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($product as $item)
                <tr>
                    <th scope="row">{{ $loop->index+1 }}</th>
                    <td>{{ $item->name_product }}</td>
                    <td>{{ $item->price }}</td>
                    <td>{{ $item->category }}</td>
                    <td>{{ $item->stock }}</td>
                    <td>
                        <img src="{{ asset('/images/product/' . $item->cover) }}" class="rounded"
                            style="width: 150px">
                    </td>
                    <td>
                        <a href="{{ route('product.show', $item->id) }}" class="btn btn-primary gap-2"><i class="material-icons-outlined">search</i></a>
                        <a href="{{ route('product.edit', $item->id) }}" class="btn btn-warning px-5">Edit</a>
                        <a class="btn ripple btn-danger px-5" href="{{ route('product.destroy', $item->id) }}"
                             onclick="event.preventDefault();
                                     document.getElementById('destroy-form').submit();">
                            Hapus
                        </a>
                        <form id="destroy-form" action="{{ route('product.destroy', $item->id) }}"
                            method="POST" class="d-none">
                            @method('DELETE')
                            @csrf
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
