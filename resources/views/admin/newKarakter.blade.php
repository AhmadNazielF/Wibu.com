@extends('layouts.main')

@section('container')
   <!--Karakter page-->
   <div class="karakter-page_layout">
    <form action="" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="block_karakter">
            <div class="block_karakter karakter_informasi-text">
            <input name="anime" list="anime" type="select" class="input-new" placeholder="Judul Anime"/>
            <datalist id="anime">
                @foreach ($anime as $value)
                    <option value="{{ $value->judul}}"></option>
                @endforeach
            </datalist> 
            </div>
        </div>
        <div class="karakter_page">
        <!--informasi karakter-->
        <div class="karakter_informasi">
            <div class="karakter_informasi-singkat mt-5">
                <textarea class="input-new" name="deskripsi" id="karakter" placeholder="Deskripsi singkat"></textarea>
            </div>
            <div class="karakter_informasi-penampilan">
            <div class="karakter_informasi-text">Penampilan</div>
            <hr>
            <textarea class="input-new" name="penampilan" id="karakter" placeholder="..."></textarea>
            </div>
            <div class="karakter_informasi-sejarah">
            <div class="karakter_informasi-text">Sejarah</div>
            <hr>
            <textarea class="input-new" name="sejarah" id="karakter" cols="30" placeholder="..."></textarea>
            </div>
        </div>
        <div class="karakter_profile">
            <div class="block_karakter karakter_informasi-text">
                <input type="text" name="nama" class="input-new" id="title" placeholder="Nama">
            </div>
            <div class="karakter_profile-foto"><img src="foto/Saitama.jpeg" alt="" width="270px" height="270px"></div>
            <label for="formFile" class="form-label">Masukan Foto</label>
            <input class="form-control" name="image" type="file" id="formFile">
            <div class="karakter_profile-content_layout">
            <div class="block_karakter">
                <div class="karakter_informasi-text">profile</div>
            </div>
            <div class="karakter_profile-content">
                <div class="karakter_profile-content-info"> Umur</div>
                <div class="karakter_profile-content-info-"><input type="text" name="umur" class="input-new" placeholder="..."></div>
            </div>
            <div class="karakter_profile-content">
                <div class="karakter_profile-content-info">Status</div>
                <div class="karakter_profile-content-info-"><input type="text" name="status" class="input-new" placeholder="..."></div>
            </div>
            <div class="karakter_profile-content">
                <div class="karakter_profile-content-info">Gender</div>
                <div class="karakter_profile-content-info-"><input type="text" name="gender"class="input-new" placeholder="..."></div>
            </div>
            <div class="karakter_profile-content">
                <div class="karakter_profile-content-info">Tinggi</div>
                <div class="karakter_profile-content-info-"><input type="text" name="tinggi"class="input-new" placeholder="..."></div>
            </div>
            <div class="karakter_profile-content">
                <div class="karakter_profile-content-info">Role</div>
                <div class="karakter_profile-content-info-"><input type="text" name="role"class="input-new" placeholder="..."></div>
            </div>
            </div>
            </div>
        </div> 
        <div class="button">
            <button type="submit" class="regis_daftar sidebar_teks-link-regis mt-0" id="submit-auth">Simpan</button>
        </div>
    </form>
    </div>
  </div>

  
@endsection
