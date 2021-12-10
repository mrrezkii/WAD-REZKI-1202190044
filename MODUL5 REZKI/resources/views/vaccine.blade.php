@extends('layouts.main')

@section('container')
    @if($vaccines->count())
        <div class="d-flex flex-column">
            <h3 class="text-center">List Vaccine</h3>
            <a href="{{ url('/vaccine/create') }}" class="btn btn-primary" style="width: 200px;">Add Vaccine</a>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @php($count=1)
                @foreach($vaccines as $vaccine)
                    <tr>
                        <th scope="row">{{ $count++ }}</th>
                        <td>{{ $vaccine->name }}</td>
                        <td>{{ "Rp " . number_format($vaccine->price, 2, ',', '.') }}</td>
                        <td class="w-25">
                            <a href="{{ url("/vaccine/$vaccine->id") }}" class="btn btn-warning me-2">Edit</a>
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
            <a href="{{ url('/vaccine/create') }}" class="btn btn-primary mx-auto" style="width: 200px;">Add Vaccine</a>
        </div>
    @endif
@endsection
