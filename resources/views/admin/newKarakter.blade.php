@extends('layouts.main')

@section('container')
   <!--Karakter page-->
   <div class="karakter-page_layout">
    <form action="">
        @csrf
        <div class="block_karakter">
         <input type="text" class="input-new" id="title" placeholder="Anime Title">
        </div>
        <div class="karakter_page">
        <!--informasi karakter-->
        <div class="karakter_informasi">
            <div class="karakter_informasi-singkat mt-5">
                <textarea class="input-new" name="" id="karakter" placeholder="Deskripsi singkat"></textarea>
            </div>
            <div class="karakter_informasi-penampilan">
            <div class="karakter_informasi-text">Penampilan</div>
            <hr>
            <textarea class="input-new" name="" id="karakter" placeholder="..."></textarea>
            </div>
            <div class="karakter_informasi-sejarah">
            <div class="karakter_informasi-text">Sejarah</div>
            <hr>
            <textarea class="input-new" name="" id="karakter" cols="30" placeholder="..."></textarea>
            </div>
        </div>
        <div class="karakter_profile">
            <div class="block_karakter karakter_informasi-text">
                <input type="text" class="input-new" id="title" placeholder="Nama">
            </div>
            <div class="karakter_profile-foto"><img src="foto/Saitama.jpeg" alt="" width="270px" height="270px"></div>
            <div class="karakter_profile-content_layout">
            <div class="block_karakter">
                <div class="karakter_informasi-text">profile</div>
            </div>
            <div class="karakter_profile-content">
                <div class="karakter_profile-content-info"> Umur</div>
                <div class="karakter_profile-content-info-"><input type="text" class="input-new" placeholder="..."></div>
            </div>
            <div class="karakter_profile-content">
                <div class="karakter_profile-content-info">Status</div>
                <div class="karakter_profile-content-info-"><input type="text" class="input-new" placeholder="..."></div>
            </div>
            <div class="karakter_profile-content">
                <div class="karakter_profile-content-info">Gender</div>
                <div class="karakter_profile-content-info-"><input type="text" class="input-new" placeholder="..."></div>
            </div>
            <div class="karakter_profile-content">
                <div class="karakter_profile-content-info">Tinggi</div>
                <div class="karakter_profile-content-info-"><input type="text" class="input-new" placeholder="..."></div>
            </div>
            </div>
            </div>
        </div> 
    </form>
    </div>
  </div>

  
@endsection
