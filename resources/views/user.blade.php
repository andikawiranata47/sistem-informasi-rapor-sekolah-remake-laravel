@extends('layouts.main')

@section('judul')
    <title>{{ $judul }}</title>
@endsection

@section('navbar')
    <form class="d-flex align-items-center h-100" action="/user">
    @endsection

    @section('container')
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="d-xl-flex justify-content-between align-items-start">
                    <h2 class="text-dark font-weight-bold mb-2"> Halaman User </h2>
                </div>
                <div class="row">
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body pb-3">
                                <h4 class="card-title d-inline">Tabel Daftar User</h4>
                                <div class="float-right">

                                    <button type="button" class="btn btn-success mb-2" data-toggle="modal"
                                        data-target="#addModal">Tambah</button>
                                </div>

                                <table class="table table-bordered table-responsive">
                                    <thead>
                                        <tr>
                                            <th width="">No</th>
                                            <th width="25%">Nama</th>
                                            <th width="">NIP/NIK</th>
                                            <th width="20%">Email</th>
                                            <th width="50%">Akses</th>
                                            <th width="5%">TTD</th>
                                            <th width=""></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 0; ?>
                                        @foreach ($users as $user)
                                            <?php $i++; ?>
                                            <tr class="text-wrap">
                                                <td><?= $i ?></td>
                                                <td class="text-wrap">{{ $user->nama }}</td>
                                                <td>{{ $user->nip }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td class="text-wrap">{{ $user->akses }}</td>
                                                <td>{{ $user->ttd }}</td>
                                                <td class="text-center">
                                                    <button type="button" class="btn btn-inverse-primary btn-icon btn-edit"
                                                        style="height: 30px;">Edit</button>
                                                    <button type="button"
                                                        class="btn btn-inverse-danger btn-icon btn-delete"
                                                        style="height: 30px;">Hapus</button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{-- {{ $users->links() }} --}}
                                <div class="d-flex justify-content-end">
                                    <div class="form-group col-sm-2 mt-3 d-flex">
                                        <label for="pagination" class="mt-3 ml-3 mr-3">show</label>
                                        <select class="form-control" id="pagination">
                                            <option value="50" @if ($items == 50) selected @endif>50
                                            </option>
                                            <option value="100" @if ($items == 100) selected @endif>100
                                            </option>
                                            <option value="150" @if ($items == 150) selected @endif>150
                                            </option>
                                            <option value="200" @if ($items == 200) selected @endif>200
                                            </option>
                                            <option value="999999" @if ($items == 999999) selected @endif>999999
                                            </option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <script>
                    document.getElementById('pagination').onchange = function() {
                        window.location = "{{ $users->url(1) }}&items=" + this.value;
                    };
                </script>
            @endsection
