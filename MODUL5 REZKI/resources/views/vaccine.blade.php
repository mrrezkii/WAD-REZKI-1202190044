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
                            <a href="{{ url("/vaccine/$vaccine->id/edit") }}" class="btn btn-warning me-2">Edit</a>
                            <button onclick="btnDelete('{{ $vaccine->id }}', '{{ $vaccine->name }}')"
                                    class="btn btn-danger ms-2" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                Delete
                            </button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <form id="deleteAction" method="POST">
                    @csrf
                    @method("DELETE")
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="deleteModalLabel"></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body" id="hidden-value"></div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <script type="text/javascript">
            const modal = document.getElementById("deleteModal");
            modal.addEventListener('hidden.bs.modal', function (_) {
                document.getElementById("id").remove();
                document.getElementById("deleteModalLabel").innerText = "";
            });

            function btnDelete(id, name) {
                document.getElementById("deleteModalLabel").innerText = "Are you sure want to delete\t" + name + " ?";
                document.getElementById("deleteAction").action = "/vaccine/" + id;

            }
        </script>
    @else
        <div class="d-flex flex-column">
            <p class="text-secondary text-center">There is no data...</p>
            <a href="{{ url('/vaccine/create') }}" class="btn btn-primary mx-auto" style="width: 200px;">Add Vaccine</a>
        </div>
    @endif
@endsection
