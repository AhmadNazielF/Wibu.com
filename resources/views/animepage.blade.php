@extends('layouts.main')

@section('container')
 <!--animepage-->
 <div class="anime-page_layout">
  <div class="block_karakter">
    <div class="kategori_teks">{{$anime->judul}}</div>
  </div>
  <div class="anime_page">
      <div class="anime_informasi-layout">
          <div class="anime_foto"><img src="{{asset($anime->image)}}" alt="" width="300" height="204"></div>
          <div class="anime_informasi">
              <div class="anime_informasi-content">
                  <div class="anime_informasi_content-info">Judul Alternatif :</div>
                  <div class="anime_informasi-content-info-">{{$anime->judul_alternatif}}</div> 
              </div>  
              <div class="anime_informasi-content">
                  <div class="anime_informasi_content-info">Genre :</div>
                  <div class="anime_informasi-content-info-">{{$anime->genre}}</div> 
              </div>  
              <div class="anime_informasi-content">
                  <div class="anime_informasi_content-info">Status :</div>
                  <div class="anime_informasi-content-info-">{{$anime->status}}</div> 
              </div>  
              <div class="anime_informasi-content">
                  <div class="anime_informasi_content-info">Ratings :</div>
                  <div class="anime_informasi-content-info-">{{$anime->rating}}</div> 
              </div>  
              <div class="anime_informasi-content">
                  <div class="anime_informasi_content-info">Jumlah episode :</div>
                  <div class="anime_informasi-content-info-">{{$anime->jumlah_episode}} episodes</div> 
              </div>  
              <div class="anime_informasi-content">
                  <div class="anime_informasi_content-info">Studio :</div>
                  <div class="anime_informasi-content-info-">{{$anime->studio}}</div> 
              </div>  
              <div class="anime_informasi-content">
                  <div class="anime_informasi_content-info">Tahun tayang :</div>
                  <div class="anime_informasi-content-info-">{{$anime->tahun_tayang}}</div> 
              </div>  
          </div>
  </div>
  </div>
  <div class="sinopsis">
      <H4>Sinopsis :</H4>
      <p>{{$anime->sinopsis}}</p>
    </div>

  <div class="galery">
      <div class="galery_atas">
        <div class="galery_atas-judul">
          <div class="kategori_teks">Karakter</div>
        </div>
        <a href="#" class="lebih_banyak">Lebih banyak</a>
      </div>
      <div class="galery_bawah">
        <div class="block"></div>
        <div class="galery_bawah-content">
          @if ($character)
          @foreach ($character as $character)
          <a href="{{'/karakterpage/'.$character->slug}}" class="poster">
              <div class="poster_foto-karakter"><img src="{{asset($character->image)}}" alt="" width="173" height="166"></div>
              <div class="poster_teks">
                <div class="poster_foto-karakter-teks__nama">Nama : {{$character->nama}}</div>
                <div class="poster_foto-karakter-teks__role">Role : {{$character->role}}</div>
              </div>
          </a>
          @endforeach
          @endif
        </div>
      </div>
    </div>    
</div>
@endsection
