@extends('layouts.main')

@section('container')
    @if($patients->count())
        <div class="d-flex flex-column">
            <h3 class="text-center">List Patient</h3>
            <a href="{{ url('/vaccines') }}" class="btn btn-primary" style="width: 200px;">Register Patient</a>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Vaccine</th>
                    <th scope="col">Name</th>
                    <th scope="col">NIK</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">No Hp</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @php($count=1)
                @foreach($patients as $patient)
                    <tr>
                        <th scope="row">{{ $count++ }}</th>
                        <td>{{ $patient->vaccines->name }}</td>
                        <td>{{ $patient->name }}</td>
                        <td>{{ $patient->nik }}</td>
                        <td>{{ $patient->alamat }}</td>
                        <td>{{ $patient->no_hp }}</td>
                        <td class="w-25">
                            <a href="/patient/update" class="btn btn-warning me-2">Edit</a>
                            <a href="#" class="btn btn-danger ms-2">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    @else
        <div class="d-flex flex-column">
            <p class="text-secondary text-center">There is no data...</p>
            <a href="{{ url('/vaccines') }}" class="btn btn-primary mx-auto" style="width: 200px;">Register Patient</a>
        </div>
    @endif
@endsection
