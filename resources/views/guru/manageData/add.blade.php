@extends('layout.spp')
@section('navSiswa')
Pembayaran SPP
@endsection

@section('siswa') 
<div class="container mt-5">
    <div class="row">
      <div class="col-md-6">
        <h2>Form Tambahkan Data</h2>
        <form action="{{ route('insertData') }}" method="POST" enctype="multipart/form-data">
          @csrf
         <div class="form-group">
            <label for="nama" >Nama:</label>
            <input name="name" class="form-control" id="nama" placeholder="Masukkan Nama" required>
          </div>
          <div class="form-group">
            <label for="class" class="mt-3">Kelas:</label>
            <select class="form-control" id="class" name="class" required>
              <option value="X RPL">X RPL</option>
              <option value="XI RPL">XI RPL</option>
              <option value="XII RPL">XII RPL</option>
              <option value="X TJKT">X TJKT</option>
              <option value="XI TJKT">XI TJKT</option>
              <option value="XII TJKT">XII TJKT</option>
              <option value="X PM 1">X PM 1</option>
              <option value="XI PM 1">XI PM 1</option>
              <option value="XII PM 1">XII PM 1</option>
              <option value="X PM 2">X PM 2</option>
              <option value="XI PM 2">XI PM 2</option>
              <option value="XII PM 2">XII PM 2</option>
              <option value="X MPLB 1">X MPLB 1</option>
              <option value="XI MPLB 1">XI MPLB 1</option>
              <option value="XII MPLB 1">XII MPLB 1</option>
              <option value="X MPLB 2">X MPLB 2</option>
              <option value="XI MPLB 2">XI MPLB 2</option>
              <option value="XII MPLB 2">XII MPLB 2</option>
              <option value="X AKL 1">X AKL 1</option>
              <option value="XI AKL 1">XI AKL 1</option>
              <option value="XII AKL 1">XII AKL 1</option>
              <option value="X AKL 2">X AKL 2</option>
              <option value="XI AKL 2">XI AKL 2</option>
              <option value="XII AKL 2">XII AKL 2</option>
            </select>
          </div>
          <div class="form-group">
            <label for="biaya" class="mt-3">Biaya:</label>
            <input type="text" class="form-control" id="biaya" placeholder="Masukkan biaya" name="sum" required>
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