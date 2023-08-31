@extends('layout.spp')
@section('navSiswa')
Detail Pembayaran
@endsection
@section('siswa') 

<div class="table-container">
    <!-- Table -->
    <table class="bordered-table">
        <thead>
          <tr>
                <th>Bulan</th>
                <th>Detail Pembayaran</th>
                <th>Tanggal Pembayaran</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($datas as $data)
            <tr>
                <td scope="data">{{ $data->bulan }}</td>
                <td scope="data">{{ $data->detailPembayaran }}</td>
                <td scope="data">{{ $data->tanggalPembayaran }}</td>
                <td scope="data">{{ $data->status }}</td>
            </tr>
          @endforeach
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
Sebagai Siswa
@endsection