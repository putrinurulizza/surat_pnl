@extends('layouts.main')

@section('content')
    <div class="container p-3 ps-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
                <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Data User</li>
            </ol>
            <h2 class="font-weight-bolder mt-3 mb-3">Data User</h2>
        </nav>

        <button class="btn btn-dark fs-6 fw-normal" data-bs-toggle="modal" data-bs-target="#tambahUser"><i
                class="fa-solid fa-square-plus fs-4 me-2"></i>Tambah</button>

        <div class="card p-4 mt-3">
            {{-- Tabel User --}}
            <table id="myTable" class="table responsive nowrap table-bordered table-striped align-middle"
                style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Putri</td>
                        <td>putri123</td>
                        <td>Admin</td>
                        <td class="">
                            <button class="btn btn-warning mt-3" data-bs-toggle="modal" data-bs-target="#editUser"><i
                                    class="fa-solid fa-pen-to-square "></i></button>
                            <button class="btn btn-danger mt-3" data-bs-toggle="modal" data-bs-target="#hapusUser"><i
                                    class="fa-solid fa-trash "></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
            {{-- / Tabel User --}}

            {{-- Modal Hapus User --}}
            <div class="modal" id="hapusUser" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Hapus Data User</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>Apakah Anda Yakin Untuk Menghapus Data User Ini?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="button" class="btn btn-primary">Hapus</button>
                        </div>
                    </div>
                </div>
            </div>
            {{-- / Modal Hapus User --}}
        </div>

        <!-- Modal Tambah User -->
        <x-form_modal>
            @slot('id', 'tambahUser')
            @slot('title', 'Tambah Data User')
            {{-- @slot('route', route('data-rekening.store')) --}}

            <div class="row">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="mb-3">
                    <label for="role" class="form-label">Role</label>
                    <select class="form-select" id="role" name="role">
                        <option value="1 - Admin" selected>1 - Admin</option>
                        <option value="2 - Mahasiswa">2 - Mahasiswa</option>
                    </select>
                </div>
            </div>
        </x-form_modal>
        <!-- Akhir Modal Tambah User -->

    </div>
    </div>
    </div>
@endsection
