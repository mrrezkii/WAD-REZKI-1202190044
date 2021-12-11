@extends('layouts.main')

@section('container')
    <div class="d-flex flex-column">
        <h3 class="text-center">{{ "$condition Vaccine" }}</h3>
        @if($condition === 'Input')
            <form action="{{ url('/vaccine') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-3 mx-5">
                    <label for="name" class="form-label">Vaccine Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group mb-3 mx-5">
                    <label for="price" class="form-label">Price</label>
                    <div class="input-group">
                        <span class="input-group-text">Rp</span>
                        <input type="number" class="form-control" id="price" name="price" required>
                    </div>
                </div>
                <div class=" form-group mb-3 mx-5">
                    <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" rows="3" name="description" required></textarea>
            </div>
                <div class="form-group mb-3 mx-5">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" accept="image/png, image/gif, image/jpeg"
                           class="form-control form-control-file" id="image" name="image" required>
                </div>
                <button type="submit" class="btn btn-primary mx-5">Submit</button>
            </form>
        @elseif($condition === 'Edit')
            <form action="{{ url('/vaccine') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group mb-3 mx-5">
                    <label for="name" class="form-label">Vaccine Name</label>
                    <input type="text" name="id" value="{{ $vaccine->id }}" hidden required>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $vaccine->name }}"
                           required>
                </div>
                <div class="form-group mb-3 mx-5">
                    <label for="price" class="form-label">Price</label>
                    <div class="input-group">
                        <span class="input-group-text">Rp</span>
                        <input type="number" class="form-control" id="price" name="price" value="{{ $vaccine->price }}"
                               required>
                    </div>
                </div>
                <div class=" form-group mb-3 mx-5">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" rows="3" name="description"
                              required>{{ $vaccine->description }}</textarea>
                </div>
                <div class="form-group mb-3 mx-5">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" accept="image/png, image/gif, image/jpeg"
                           class="form-control form-control-file" id="image" name="image" value="{{ $vaccine->image }}"
                           required>
                </div>
                <button type="submit" class="btn btn-primary mx-5">Submit</button>
            </form>
        @endif
    </div>
@endsection
