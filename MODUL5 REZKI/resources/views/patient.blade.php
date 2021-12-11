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
                            <a href="{{ url("/patient/$patient->id/edit") }}" class="btn btn-warning me-2">Edit</a>
                            <button onclick="btnDelete('{{ $patient->id }}', '{{ $patient->name }}')" href="#"
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
    @else
        <div class="d-flex flex-column">
            <p class="text-secondary text-center">There is no data...</p>
            <a href="{{ url('/vaccines') }}" class="btn btn-primary mx-auto" style="width: 200px;">Register Patient</a>
        </div>
    @endif
    <script type="text/javascript">
        const modal = document.getElementById("deleteModal");
        modal.addEventListener('hidden.bs.modal', function (_) {
            document.getElementById("id").remove();
            document.getElementById("deleteModalLabel").value = "";
        });

        function btnDelete(id, name) {
            document.getElementById("deleteModalLabel").innerText = "Are you sure want to delete" + name + " ?";
            let addElement = document.createElement("input");
            Object.assign(addElement, {
                id: "id",
                name: "id",
                type: "text",
                hidden: "hidden",
                value: id
            });

            document.getElementById("hidden-value").append(addElement);
            document.getElementById("deleteAction").action = "/patient/" + id;

        }
    </script>
@endsection
