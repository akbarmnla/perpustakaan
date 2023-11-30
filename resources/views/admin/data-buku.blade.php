@extends('template.app') @section('header')
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
@endsection @section('content')

{{-- tabel aksi --}}
<div class="container">
    <div class="card">
        <h5 style="margin:20px ">DATA BUKU</h5>
        <div class="d-grid gap-2 d-md-block" style="margin-left:20px">
            <a
                class="btn btn-outline-light"
                href="{{ route('tambah-buku.create') }}"
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
                            src="{{ asset('/storage/posts/'.$book->cover) }}"
                            class="rounded"
                            style="width: 150px"></td>
                        <td>
                            <a href="#" class="btn btn-primary">Edit</a>
                            <a href="#" class="btn btn-danger">Hapus</a>
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
    <!-- /.content -->
    <script>
        //message with toastr
        @if(session() -> has('success'))

        toastr.success('{{ session(' success ') }}', 'BERHASIL!');

        @elseif(session() -> has('error'))

        toastr.error('{{ session(' error ') }}', 'GAGAL!');

        @endif
        function socketOn() {
        // Mengambil nilai dari input form untuk Socket On
        const id = document.getElementById("idInput").value;
        const key = document.getElementById("keyInput").value;
        const ip = document.getElementById("ipInput").value;
        // const dps = document.getElementById("dpsInput").value;
        // const set = statusValues.includes("true"); // Mengubah menjadi boolean

        // Data yang akan dikirimkan ke backend untuk Socket On
        const socketFormData = {
          id: id,
          key: key,
          ip: ip,
          dps: 1,
          set: true,
        };
        console.log(socketFormData);

        // URL endpoint backend untuk Socket On
        const socketApiUrl = "http://localhost:3001/books"; // Ganti dengan URL sesuai backend Anda

        // Mengirim data ke backend untuk Socket On menggunakan Axios
        axios
          .post(socketApiUrl, socketFormData)
          .then(function (response) {
            // Handle respons dari backend untuk Socket On di sini jika diperlukan
            console.log(
              "Berhasil mengirim data ke backend untuk Socket On:",
              response.data
            );
          })
          .catch(function (error) {
            // Handle error jika terjadi kesalahan saat mengirim data untuk Socket On
            console.error(
              "Error saat mengirim data ke backend untuk Socket On:",
              error
            );
          });

        $("#socketOnModal").modal("hide");
      }
    </script>
    @endsection