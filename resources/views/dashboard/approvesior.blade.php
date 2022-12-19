@extends('layouts.main')

@section('content')
    <div class="container p-3 ps-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
                <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Data Approvesior</li>
            </ol>
            <h2 class="font-weight-bolder mt-3 mb-3">Data Approvesior</h2>
        </nav>
        <button class="btn btn-dark fs-6 fw-normal" onclick="location.href='#'"><i
                class="fa-solid fa-square-plus fs-6 me-2 "></i>Tambah</button>
        <div class="card p-4">

            {{-- Tabel Data Approvesior --}}
            <table id="myTable" class="table responsive nowrap table-bordered table-striped align-middle"
                style="width:100%">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>NAMA</th>
                        <th>NIP</th>
                        <th>JABATAN</th>
                        <th>ALAMAT</th>
                        <th>NO HP</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Muhammad Akbar</td>
                        <td>198776540072</td>
                        <td>Dosen Pembimbing Akademik</td>
                        <td>Lhokseumawe</td>
                        <td>082275815942</td>
                        <td class="">
                            <button class="btn btn-warning mt-3"><i class="fa-solid fa-pen-to-square "></i></button>
                            <button class="btn btn-danger mt-3" data-bs-toggle="modal" data-bs-target="#hapus"><i
                                    class="fa-solid fa-trash "></i></button>
                        </td>
                    </tr>

                    {{-- Modal Hapus Approvesior --}}
                    <div class="modal" id="hapus" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Hapus Data</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Apakah Anda Yakin Untuk Menghapus Data Ini?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                    <button type="button" class="btn btn-primary">Hapus</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- / Modal Hapus Approvesior --}}

                </tbody>
            </table>
            {{-- / Tabel Data Approvesior --}}


        </div>
    </div>
@endsection
