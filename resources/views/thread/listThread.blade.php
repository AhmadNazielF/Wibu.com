@extends('layouts.main')

@section('container')
    <!-- list thread -->
    <div>
        <div class="thread-header-list">
            <div class="thread-h1">All Thread</div>
        </div><br>
        <a href="/createThread">
            <div class="thread-button-start"> Start thread </div>
        </a><br>
        <ul class="thread-list">
            <li>
                <h3><a href="/isithread">Judul Thread Pertama</a></h3>
                <p class="thread-description">Deskripsi singkat thread pertama</p>
                <p class="thread-meta">Dibuat oleh <a href="#">Nama Pengguna</a> pada tanggal 1 Januari 2023</p>
            </li>
            <li>
                <h3><a href="#">Judul Thread Kedua</a></h3>
                <p class="thread-description">Deskripsi singkat thread kedua</p>
                <p class="thread-meta">Dibuat oleh <a href="#">Nama Pengguna</a> pada tanggal 2 Januari 2023</p>
            </li>
            <li>
                <h3><a href="#">Judul Thread Ketiga</a></h3>
                <p class="thread-description">Deskripsi singkat thread ketiga</p>
                <p class="thread-meta">Dibuat oleh <a href="#">Nama Pengguna</a> pada tanggal 3 Januari 2023</p>
            </li>
            <li>
                <h3><a href="#">Judul Thread Keempat</a></h3>
                <p class="thread-description">Deskripsi singkat thread Keempat</p>
                <p class="thread-meta">Dibuat oleh <a href="#">Nama Pengguna</a> pada tanggal 3 Januari 2023</p>
            </li>
            <li>
                <h3><a href="#">Judul Thread Kelima</a></h3>
                <p class="thread-description">Deskripsi singkat thread Kelima</p>
                <p class="thread-meta">Dibuat oleh <a href="#">Nama Pengguna</a> pada tanggal 3 Januari 2023</p>
            </li>
            <li>
                <h3><a href="#">Judul Thread Keenam</a></h3>
                <p class="thread-description">Deskripsi singkat thread Keenam</p>
                <p class="thread-meta">Dibuat oleh <a href="#">Nama Pengguna</a> pada tanggal 3 Januari 2023</p>
            </li>
            <li>
                <h3><a href="#">Judul Thread Ketujuh</a></h3>
                <p class="thread-description">Deskripsi singkat thread Ketujuh</p>
                <p class="thread-meta">Dibuat oleh <a href="#">Nama Pengguna</a> pada tanggal 3 Januari 2023</p>
            </li>
        </ul>
    </div>
@endsection
