@extends('template.app')

@section('header')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0">Tambah Data Anggota</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Beranda</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
@endsection

@section('content')
<div class="container">
    <div class="card">
        <h5 style="margin:20px ">TAMBAH DATA ANGGOTA</h5>
        <div class="mb-3 row m-3">
            <label for="inputNama" class="col-sm-2 col-form-label">Nama Lengkap</label>
            <div class="col-sm-8">
              <input type="text" class="form-control"  placeholder="Masukkan Nama Lengkap" id="inputNama">
            </div>
        </div>
        <div class="mb-3 row m-3">
            <label for="inputEmail" class="col-sm-2 col-form-label">Alamat Email</label>
            <div class="col-sm-8">
              <input type="email" class="form-control"  placeholder="Masukkan Alamat Email" id="inputEmail">
            </div>
        </div>
        <div class="mb-3 row m-3">
            <label for="inputPassword" class="col-sm-2 col-form-label">Password Email</label>
            <div class="col-sm-8">
              <input type="password" class="form-control"  placeholder="Masukkan Password Email" id="inputPassword">
            </div>
        </div>
        <div class="mb-3 row m-3">
            <label for="inputAlamat" class="col-sm-2 col-form-label">Alamat Tinggal</label>
            <div class="col-sm-8">
              <input type="text" class="form-control"  placeholder="Masukkan Alamat" id="inputAlamat">
            </div>
        </div>
        <div class="mb-5 row m-3 ">
            <label for="inputPassword" class="col-sm-2 col-form-label">No Telepon</label>
            <div class="col-sm-8">
              <input type="text" class="form-control"  placeholder="Masukkan No Telepon" id="inputNoTelepon">
            </div>
        </div>

        <div class="d-grid gap-2 d-md-block p-3" style="margin-left: 182px; gap:50px">
            <button class="btn btn-primary" type="button">Tambah</button>
            <button class="btn btn-danger" type="button">Batal</button>
          </div>


    

@endsection