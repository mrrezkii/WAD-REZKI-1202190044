@extends('layouts.main')

@section('container')
    <div class="d-flex flex-column d-none">
        <p class="text-secondary text-center">There is no data...</p>
        <a href="/vaccines" class="btn btn-primary mx-auto" style="width: 200px;">Register Patient</a>
    </div>
    <div class="d-flex flex-column">
        <h3 class="text-center">List Patient</h3>
        <a href="/vaccines" class="btn btn-primary" style="width: 200px;">Register Patient</a>
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
            <tr>
                <th scope="row">1</th>
                <td>Astra Zeneca 2</td>
                <td>Rezki</td>
                <td>1202190044</td>
                <td>Kediri, Jatim</td>
                <td>085608845319</td>
                <td class="w-25">
                    <a href="/patient/update" class="btn btn-warning me-2">Edit</a>
                    <a href="#" class="btn btn-danger ms-2">Delete</a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection