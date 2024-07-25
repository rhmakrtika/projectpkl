@extends('layouts.backend')
@section('content')
    <h6 class="mb-0 text-uppercase">Sales Summary</h6>
    <hr>
    <div class="card">
        <div class="card-body">
            <table class="table mb-0 table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Pembeli</th>
                        <th scope="col">Pendapatan</th>
                        <th scope="col">Tanggal Pesanan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($recap as $item)
                        <tr>
                            <th scope="row">{{ $loop->index + 1 }}</th>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->tempat_tinggal }}</td>
                            <td>{{ $item->jenis_kelamin }}</td>
                            <td>{{ $item->email }}</td>
                            <td>
                                <img src="{{ asset('backend/assets/images/rekapan.jpeg' . $item->cover) }}" width="50">
                            </td>
                            {{-- <td>{{ $item->role ? 'Admin' : 'User' }}</td> --}}
                            {{-- <td>
                                <form action="{{ route('user.destroy', $item->id) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <a href="{{ route('user.edit', $item->id) }}"
                                        class="btn btn-outline-warning px-3">EDIT</a>
                                    |
                                    <button class="btn btn-outline-danger px-3"
                                        onclick="return confirm('Apakah anda ingin menghapus?')">DELETE</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
