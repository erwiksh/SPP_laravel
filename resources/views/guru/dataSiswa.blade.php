@extends('layout.spp')
@section('navSiswa')
Pembayaran SPP
@endsection
@section('siswa') 

<div class="table-container">
    <div class="table-button d-flex justify-content-between">
        <a href="#" class="btn btn-primary">Tambah Data</a>
        <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">
                <i class="fas fa-search"></i> <!-- Ikon pencarian dari Font Awesome -->
            </button>
        </form>
        
    </div>

    <!-- Table -->
    <table class="bordered-table">
        <thead>
            <tr>
                <th>Nama Siswa</th>
                <th>Kelas</th>
                <th>Jurusan</th>
                <th>Tanggal Pembayaran</th>
                <th>Jumlah</th>
            </tr>
        </thead>
        <tbody>
            <!-- Data Rows -->
                @foreach($data as $d)
                <tr>
                    <td scope="data">{{ $d->name }}</td>
                    <td scope="data">{{ $d->class }}</td>
                    <td scope="data">{{ $d->major }}</td>
                    <td scope="data">{{ $d->paymentDate }}</td>
                    <td scope="data">{{ $d->sum }}</td>
                </tr>
               @endforeach
        
            <!-- Tambahkan baris data lainnya di sini -->
        </tbody>
    </table>
    <!-- End Table -->

    <!-- Page Nation -->
    <nav class="pagination-container" aria-label="Page navigation example">
        <ul class="pagination justify-content-start">
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>
    <!-- End Page Nation -->
</div>
@endsection

@section('as')
Sebagai Admin
@endsection


{{-- @foreach ($datas as $data)
<tr>
    <td scope="data">{{ $data->nama }}</td>
    <td scope="data">{{ $data->kelas }}</td>
    <td scope="data">{{ $data->tanggalPembayaran }}</td>
    <td scope="data">{{ $data->jumlah }}</td>
</tr>
@endforeach --}}
       