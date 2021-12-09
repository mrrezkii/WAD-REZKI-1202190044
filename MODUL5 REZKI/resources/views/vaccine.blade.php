@extends('layouts.main')

@section('container')
    <div class="d-flex flex-column d-none">
        <p class="text-secondary text-center">There is no data...</p>
        <a href="/vaccine/add" class="btn btn-primary mx-auto" style="width: 200px;">Add Vaccine</a>
    </div>
    <div class="d-flex flex-column">
        <h3 class="text-center">List Vaccine</h3>
        <a href="/vaccine/add" class="btn btn-primary" style="width: 200px;">Add Vaccine</a>
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
            <tr>
                <th scope="row">1</th>
                <td>Astra Zeneca</td>
                <td>Rp2.0000</td>
                <td class="w-25">
                    <a href="/vaccine/update" class="btn btn-warning me-2">Edit</a>
                    <a href="#" class="btn btn-danger ms-2">Delete</a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
