@extends('layout.app')
@section('content')
<section class="content">
      <div class="container-fluid">
        <div class="col-12">
          <a href="#" class="btn btn-primary mb-3">Tambah Data</a>
          <div class="card">
            <table class="table table-striped">
              <thead>
                <th>No.</th>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Kategori</th>
                <th>Stok</th>
                <th>Aksi</th>
              </thead>
    
              <tr>
                <td>1</td>
                <td>21223</td>
                <td>Gitar</td>
                <td>Barang</td>
                <td>5</td>

                <td>
                  <a class="btn btn-sm btn-success" href="#">Detail</a>
                  <a class="btn btn-sm btn-warning" href="#">Ubah</a>
                  <a class="btn btn-sm btn-danger" href="#">Hapus</a>
                </td>
              </tr>
            </table>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    @endsection