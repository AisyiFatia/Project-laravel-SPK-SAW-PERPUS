@extends('layouts.master')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="{{ route('produk.create') }}" class="btn btn-primary float-right"><i
                    class="fas fa-fw fa-plus-circle"></i>Tambah Data</a>
            <h5 class="m-0 font-weight-bold text-primary">Produk</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="example" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul Buku</th>
                            <th>Tahun Terbit</th>
                            <th width="50px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($produk as $key => $item)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $item->nama_buku }}</td>
                                <td>{{ $item->tahun_terbit }}</td>
                                <td>
                                    <div class="container">
                                        <a href="{{ route('produk.edit', $item->id) }}"
                                            class="btn bg-gradient-success btn-sm text-white"><i
                                                class="fas fa-fw fa-edit"></i></a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
