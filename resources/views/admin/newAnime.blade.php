@extends('layouts.main')

@section('container')
 <!--animepage-->
 <div class="anime-page_layout">
  <div class="block_karakter">
  <form action="new-anime" method="post" enctype="multipart/form-data">
    @csrf
    <input type="text" name="judul" class="input-new" id="title" placeholder="TITLE">
  </div>
  <div class="anime_page">
      <div class="anime_informasi-layout">
        <div class="mb-3">
            <div class="anime_foto"><img src="foto/OPM.jpeg" alt="" width="300" height="204"></div>
            <label for="formFile" class="form-label">Masukan Foto</label>
            <input class="form-control" name="image" type="file" id="formFile">
          </div>
          <div class="anime_informasi">
              <div class="anime_informasi-content">
                  <div class="anime_informasi_content-info">Judul Alternatif :<input type="text" name="judul_alternatif" class="input-new" placeholder="..."></div>
                  <div class="anime_informasi-content-info-">-</div> 
              </div>  
              <div class="anime_informasi-content">
                  <div class="anime_informasi_content-info">Genre :</div>
                  <div class="anime_informasi-content-info-"><input type="text" name="genre" class="input-new" placeholder="..."></div> 
              </div>  
              <div class="anime_informasi-content">
                  <div class="anime_informasi_content-info">Status :</div>
                  <div class="anime_informasi-content-info-"><input type="text" name="status" class="input-new" placeholder="..."></div> 
              </div>  
              <div class="anime_informasi-content">
                  <div class="anime_informasi_content-info">Ratings :</div>
                  <div class="anime_informasi-content-info-"><input type="text" name="ratings" class="input-new" placeholder="..."></div> 
              </div>  
              <div class="anime_informasi-content">
                  <div class="anime_informasi_content-info">Jumlah episode :</div>
                  <div class="anime_informasi-content-info-"><input type="text" name="jumlah_episode" class="input-new" placeholder="..."></div> 
              </div>  
              <div class="anime_informasi-content">
                  <div class="anime_informasi_content-info">Studio :</div>
                  <div class="anime_informasi-content-info-"><input type="text" name="studio" class="input-new" placeholder="..."></div> 
              </div>  
              <div class="anime_informasi-content">
                  <div class="anime_informasi_content-info">Tahun tayang :</div>
                  <div class="anime_informasi-content-info-"><input type="text" name="tahun_tayang" class="input-new" placeholder="..."></div> 
              </div>  
          </div>
  </div>
  </div>
  <div class="sinopsis">
      <H4>Sinopsis :</H4>
        <textarea class="input-new" name="sinopsis" id="sinopsis" placeholder="..."></textarea>
    </div>
    <div class="button">
        <button type="submit" class="regis_daftar sidebar_teks-link-regis mt-0" id="submit-auth">Simpan</button>
    </div> 
</form> 
@endsection
