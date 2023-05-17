@extends('layouts.main')

@section('container')
    <!-- thread -->
    <div class="thread_layout-page">
        <div class="thread-page">
            <div class="thread-header">
                <div class="thread-h1">Judul Thread</div>
            </div>
            <div class="thread-teks-uname">
                <p>Dibuat oleh <a href="#">Username</a> pada 3 April 2023</p>
            </div>
            <div class="thread-body">
                <div class="thread-article">
                    <p>Isi Thread</p>
                </div>
            </div>
            <div class="thread-balasan">
                <h2>Balasan:</h2>
            </div>
            <div class="thread-body">
                <div class="thread-article2">
                    <p>Balasan 1...</p>
                </div>
            </div>
            <div class="thread-body">
                <div class="thread-article2">
                    <p>Balasan 2...</p>
                </div>
            </div>
        </div>
        <div class="thread_layout">
            <div class="thread">
                <div class="thread-text-atas">Diskusi</div>
                <div class="thread-content-container">
                    <a href="#" class="thread-content">
                        <div class="thread-text"> thread </div>
                    </a>
                    <a href="#" class="thread-content">
                        <div class="thread-text"> thread </div>
                    </a>
                    <a href="#" class="thread-content">
                        <div class="thread-text"> thread </div>
                    </a>
                    <a href="#" class="thread-content">
                        <div class="thread-text"> thread </div>
                    </a>
                    <a href="#" class="thread-content">
                        <div class="thread-text"> thread </div>
                    </a>
                    <a href="#" class="thread-content">
                        <div class="thread-text"> thread </div>
                    </a>
                    <a href="#" class="thread-content">
                        <div class="thread-text"> thread </div>
                    </a>
                    <a href="#" class="thread-content">
                        <div class="thread-text"> thread </div>
                    </a>
                    <a href="#" class="thread-content">
                        <div class="thread-text"> thread </div>
                    </a>
                    <a href="#" class="thread-content">
                        <div class="thread-text"> thread </div>
                    </a>
                    <a href="#" class="thread-content">
                        <div class="thread-text"> thread </div>
                    </a>
                    <a href="#" class="thread-content">
                        <div class="thread-text"> thread </div>
                    </a>
                    <a href="#" class="thread-content">
                        <div class="thread-text"> thread </div>
                    </a>
                    <a href="#" class="thread-content">
                        <div class="thread-text"> thread </div>
                    </a>
                    <a href="#" class="thread-content">
                        <div class="thread-text"> thread </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- <div id="comment-box1"> -->
    <form action="/comment" method="post">
    <input type="textarea" id="comment-box1" name="comment" required>
    <!-- </div> -->
    {{-- <div class="thread-komen">
    </div> --}}
    <br><br>
    <div class="thread-button">Balas</div>
    </form>
@endsection
