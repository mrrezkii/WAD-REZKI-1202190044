@extends('layouts.main')

@section('container')
    <div class="d-flex flex-column">
        <h3 class="text-center">Insert/Edit Vaccine</h3>
        <form action="#" method="POST" enctype="multipart/form-data">
            <div class="form-group mb-3 mx-5">
                <label for="vaccine" class="form-label">Vaccine Name</label>
                <input type="text" class="form-control" id="vaccine" name="vaccine" required>
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
    </div>
@endsection
