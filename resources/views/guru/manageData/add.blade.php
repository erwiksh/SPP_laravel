@extends('layout.spp')
@section('navSiswa')
Pembayaran SPP
@endsection

@section('siswa') 
<div class="container mt-5">
    <div class="row">
      <div class="col-md-6">
        <h2>Form Tambahkan Data</h2>
        <form>
         <div class="form-group">
            <label for="nama" >Nama:</label>
            <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama">
          </div>
          <div class="form-group">
            <label for="jurusan" class="mt-3">Jurusan:</label>
            <select class="form-control" id="jurusan">
              <option value="TI">Teknik Informatika</option>
              <option value="SI">Sistem Informasi</option>
              <option value="TK">Teknik Komputer</option>
            </select>
          </div>
          <div class="form-group">
            <label for="kelas" class="mt-3">Kelas:</label>
            <input type="text" class="form-control" id="kelas" placeholder="Masukkan Kelas">
          </div>
          <button type="submit" class="btn btn-primary mt-4">Tambahkan Data</button>
        </form>
      </div>
      <div class="col-md-6">
        <div class="col-md-6 offset-md-3">
            <!-- Gambar siswa -->
            <div class="card-siswa">
                <div class="content">
                    <div class="logo-major">
                        <img class="logo" src="img/Logo-rpl.jpeg" alt="Logo">
                    </div>
                    <div class="major">
                        Software And Development
                    </div>
                </div>
                <div class="image-container-siswa">
                    <img class="image-siswa" src="img/Logo-eci.jpg" alt="Card Image">
                </div>
                <div class="name">
                    Erwiyana
                </div>
            </div>  
        </div>
      </div>
    </div>
</div>



@endsection

@section('as')
Sebagai Adminn
@endsection