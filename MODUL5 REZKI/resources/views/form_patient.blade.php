@extends('layouts.main')

@section('container')
    <div class="d-flex flex-column">
        <h3 class="text-center">{{ "$condition $vaccine->name Patient" }}</h3>
        @if($condition === 'Register')
            <form action="{{ url('/patient') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-3 mx-5">
                    <label for="vaccine_id" class="form-label">Vaccine Id</label>
                    <input type="text" class="form-control" id="vaccine_id" name="vaccine_id" value="{{ $vaccine->id }}"
                           required
                           readonly>
                </div>
                <div class="form-group mb-3 mx-5">
                    <label for="name" class="form-label">Patient Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group mb-3 mx-5">
                    <label for="nik" class="form-label">NIK</label>
                    <input type="number" class="form-control" id="nik" name="nik" required>
                </div>
                <div class="form-group mb-3 mx-5">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" required>
                </div>
                <div class="form-group mb-3 mx-5">
                    <label for="image_ktp" class="form-label">KTP</label>
                    <input type="file" accept="image/png, image/gif, image/jpeg"
                           class="form-control form-control-file" id="image_ktp" name="image_ktp" required>
                </div>
                <div class="form-group mb-3 mx-5">
                    <label for="no_hp" class="form-label">No Hp</label>
                    <input type="text" class="form-control" id="no_hp" name="no_hp" required>
                </div>
                <button type="submit" class="btn btn-primary mx-5">Submit</button>
            </form>
        @elseif($condition === 'Edit')
            <form action="{{ url("/patient/$patient->id") }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group mb-3 mx-5">
                    <label for="id" class="form-label">Vaccine Id</label>
                    <input type="text" class="form-control" id="vaccine_id" name="vaccine_id" value="{{ $vaccine->id }}"
                           required
                           readonly>
                </div>
                <div class="form-group mb-3 mx-5">
                    <label for="name" class="form-label">Patient Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $patient->name }}" required>
                </div>
                <div class="form-group mb-3 mx-5">
                    <label for="nik" class="form-label">NIK</label>
                    <input type="number" class="form-control" id="nik" name="nik" value="{{ $patient->nik }}" required>
                </div>
                <div class="form-group mb-3 mx-5">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $patient->alamat }}"
                           required>
                </div>
                <div class="form-group mb-3 mx-5">
                    <label for="image_ktp" class="form-label">KTP</label>
                    <input type="file" accept="image/png, image/gif, image/jpeg"
                           class="form-control form-control-file" id="image_ktp" name="image_ktp">
                </div>
                <div class="form-group mb-3 mx-5">
                    <label for="no_hp" class="form-label">No Hp</label>
                    <input type="text" class="form-control" id="no_hp" name="no_hp" value="{{ $patient->no_hp }}"
                           required>
                </div>
                <button type="submit" class="btn btn-primary mx-5">Submit</button>
            </form>
        @endif
    </div>
@endsection
