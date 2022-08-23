@extends('layout.app')

@section('title')
    Suplier
@endsection

@section('content')
    <div class="card mt-5">
        <div class="card-header">
            <div class="card-title">
                <h5>Data Suplier</h>

                <button type="button" class="btn btn-success btn-sm float-end" data-bs-toggle="modal" data-bs-target="#modalTambah"><i class ="fa fa-plus"></i>
                </button>
            </div>
        </div>

        <div class="card-body">
            <!-- Table -->
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nama</th>
                        <th>Telpon</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>01</td>
                        <td>PT.Artisan Raya 01</td>
                        <td>076456850537</td>
                        <td>Jl.Jakartaraya 10/5 </td>

                        <td>
                            <a href="#" class="btn btn-warning btn-sm"> <i class="fa fa-edit"></i></a>
                            <a href="#" class="btn btn-danger btn-sm"> <i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                </tbody>

            </table>
            <!-- End Table -->
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modalTambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            ...
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Understood</button>
        </div>
        </div>
    </div>
    </div>
@endsection
