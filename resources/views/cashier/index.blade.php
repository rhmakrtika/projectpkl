@extends('layouts.backend')
@section('content')
<h6 class="mb-0 text-uppercase">Cashier</h6>
<hr>
<div class="card">
    <div class="card-body">
        <div class="col-lg-2">
            <a href="{{ route('cashier.create') }}" class="btn btn-success px-4 raised d-flex gap-2">
                <i class="material-icons-outlined">account_circle</i>
                Cashier
            </a>
        </div>
        <table class="table mb-0 table-striped">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Name</th>
                    <th scope="col">Residence</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Email</th>
                    {{-- <th scope="col">Password</th>
                    <th scope="col">Confirm Password</th> --}}
                    <th scope="col">Role ?</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cashier as $item)
                <tr>
                    <th scope="row">{{ $loop->index+1 }}</th>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->residence }}</td>
                    <td>{{ $item->gender }}</td>
                    <td>{{ $item->email }}</td>
                    {{-- <td>{{ $item->password }}</td>
                    <td>{{ $item->password_confirmation }}</td> --}}
                    <td>{{ $item->role ? 'Admin' : 'Chasier' }}</td>
                    <td>
                        <a href="{{ route('cashier.show', $item->id) }}" class="btn btn-primary gap-2"><i class="material-icons-outlined">search</i></a>
                        <a href="{{ route('cashier.edit', $item->id) }}" class="btn btn-warning px-5">Edit</a>
                        <a class="btn ripple btn-danger px-5" href="{{ route('cashier.destroy', $item->id) }}" onclick="event.preventDefault();
                            document.getElementById('destroy-form').submit();">
                            Hapus
                        </a>

                        <form id="destroy-form" action="{{ route('cashier.destroy', $item->id) }}"
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
