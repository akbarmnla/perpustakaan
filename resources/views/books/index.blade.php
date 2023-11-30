@extends('template.app') 

@section('header')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Data Buku</h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">
                        <a href="#">Beranda</a>
                    </li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /.content-header -->
@endsection 

@section('content')
{{-- tabel aksi --}}
<div class="container">
    <div class="card">
        <h5 style="margin:20px ">DATA BUKU</h5>
        <div class="d-grid gap-2 d-md-block" style="margin-left:20px">
            <a
                class="btn btn-outline-light"
                href="{{ route('books.create') }}"
                role="button"
                style="background-color: #000851">Tambah Buku</a>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Pengarang</th>
                        <th>Penerbit</th>
                        <th>Stok</th>
                        <th>Jumlah Halaman</th>
                        <th>Cover</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>
                        @forelse ($books as $book)
                        <th>{{ $book->id }}</th>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->author }}</td>
                        <td>{{ $book->publisher}}</td>
                        <td>{{ $book->stock }}</td>
                        <td>{{ $book->pages }}</td>
                        <td><img
                            src="{{ asset('/storage/books/'.$book->cover) }}"
                            class="rounded"
                            style="width: 150px"></td>
                        <td>
                            <a href="#" class="btn btn-primary">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </tbody>
                        @empty
                        <div class="alert alert-danger">
                            Data Post belum Tersedia.
                        </div>
                        @endforelse
                    </table>
                </div>
            </div>
        </div>
    </section>
    @endsection