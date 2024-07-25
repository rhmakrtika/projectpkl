@extends('layouts.backend')
@section('content')
<h6 class="mb-0 text-uppercase">Order Summery</h6>
<hr>
<div class="card">
    <div class="card-body">
        <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
            <table class="table mb-0 table-striped">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Cover</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                    </tr>
                </thead>
                <tbody>
            @foreach ($recap as $item)
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            {{-- <img src="https://placehold.co/800x500/png" class="w-100 mb-4 rounded" alt="..."> --}}
                            <center>
                                <img src="{{ asset('backend/assets/images/rekapan.jpeg' . $item->cover) }}" class="w-10 mb-4 rounded" width="50%">
                            </center>
                            <tr>
                                <td>
                                    <h5 align="center">{{ $item->name }}</h5>
                                </td>
                                {{-- <td>
                                    <h5>{{ $item->tempat_tinggal }}</h5>
                                </td>
                                <td>
                                    <h5>{{ $item->jenis_kelamin }}</h5>
                                </td> --}}
                                <td>
                                    <h5 align="center">{{ $item->email }}</h5>
                                </td>
                            </tr>
                            <h5 class="card-title mb-4"></h5>
                            <p class="card-text mb-4"></p>
                            <a href="{{ route('recap.show', $item->id) }}" class="btn btn-outline-secondary w-100 raised" type="submit">see details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </tbody>
    </table>
        </div>
    </div>
</div>
@endsection

