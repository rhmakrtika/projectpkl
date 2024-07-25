@extends('layouts.backend')
@section('content')
<h6 class="mb-0 text-uppercase">Product Page</h6>
<hr>
<div class="card">
    <div class="card-body">
        <table class="table mb-0 table-striped">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Id_Booking</th>
                    <th scope="col">Pay</th>
                    <th scope="col">Return</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($booking as $item)
                <tr>
                    <th scope="row">{{ $loop->index+1 }}</th>
                    <td>{{ $item->id_booking }}</td>
                    <td>{{ $item->pay }}</td>
                    <td>{{ $item->return }}</td>
                    {{-- <td>
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
                    </td> --}}
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
