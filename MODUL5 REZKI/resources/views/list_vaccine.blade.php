@extends('layouts.main')

@section('container')
    <div class="row">
        @foreach($vaccines as $vaccine)
            <div class="col-md-4 col-sm-6 d-flex align-items-stretch">
                <div class="card mb-5" style="width: 22rem;">
                    <img src="{{ $vaccine->image }}"
                         class="card-img-top" alt="{{ $vaccine->name }}" style="height: 200px;object-fit: cover;">
                    <div class="card-body d-flex and flex-column">
                        <h5 class="card-title">{{ $vaccine->name }}</h5>
                        <h6 class="card-subtitle mb-2 text-secondary">{{ "Rp " . number_format($vaccine->price, 2, ',', '.') }}</h6>
                        <p class="card-text">
                            {{ $vaccine->description }}
                        </p>
                        <a href="/patient/add" class="btn btn-primary w-100 mt-auto">Vaccine Now</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
