@extends('layouts.main')

@section('container')
 <!--animepage-->
 <div class="anime-page_layout">
  <div class="block_karakter">
  <form action="" method="post">
    @csrf
    <input type="text" class="input-new" id="title" placeholder="TITLE">
  </div>
  <div class="anime_page">
      <div class="anime_informasi-layout">
          <div class="anime_foto"><img src="foto/OPM.jpeg" alt="" width="300" height="204"></div>
          <div class="anime_informasi">
              <div class="anime_informasi-content">
                  <div class="anime_informasi_content-info">Judul Alternatif :<input type="text" class="input-new" placeholder="..."></div>
                  <div class="anime_informasi-content-info-">-</div> 
              </div>  
              <div class="anime_informasi-content">
                  <div class="anime_informasi_content-info">Genre :</div>
                  <div class="anime_informasi-content-info-"><input type="text" class="input-new" placeholder="..."></div> 
              </div>  
              <div class="anime_informasi-content">
                  <div class="anime_informasi_content-info">Status :</div>
                  <div class="anime_informasi-content-info-"><input type="text" class="input-new" placeholder="..."></div> 
              </div>  
              <div class="anime_informasi-content">
                  <div class="anime_informasi_content-info">Ratings :</div>
                  <div class="anime_informasi-content-info-"><input type="text" class="input-new" placeholder="..."></div> 
              </div>  
              <div class="anime_informasi-content">
                  <div class="anime_informasi_content-info">Jumlah episode :</div>
                  <div class="anime_informasi-content-info-"><input type="text" class="input-new" placeholder="..."></div> 
              </div>  
              <div class="anime_informasi-content">
                  <div class="anime_informasi_content-info">Studio :</div>
                  <div class="anime_informasi-content-info-"><input type="text" class="input-new" placeholder="..."></div> 
              </div>  
              <div class="anime_informasi-content">
                  <div class="anime_informasi_content-info">Tahun tayang :</div>
                  <div class="anime_informasi-content-info-"><input type="text" class="input-new" placeholder="..."></div> 
              </div>  
          </div>
  </div>
  </div>
  <div class="sinopsis">
      <H4>Sinopsis :</H4>
        <textarea class="input-new" name="" id="sinopsis" placeholder="..."></textarea>
    </div>
</form>
@endsection
