@extends('layouts.main')

@section('container')
 <!--animepage-->
 <div class="anime-page_layout">
  <div class="block_karakter">
    <p id="title" >{{$anime->judul}}</p>
  </div>
  <div class="anime_page">
      <div class="anime_informasi-layout">
          <div class="anime_foto"><img src="foto/OPM.jpeg" alt="" width="300" height="204"></div>
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
                  <div class="anime_informasi-content-info-">{{$anime->ratings}}</div> 
              </div>  
              <div class="anime_informasi-content">
                  <div class="anime_informasi_content-info">Jumlah episode :</div>
                  <div class="anime_informasi-content-info-">{{$anime->jumlah_episode}}</div> 
              </div>  
              <div class="anime_informasi-content">
                  <div class="anime_informasi_content-info">Studio :</div>
                  <div class="anime_informasi-content-info-">{{$anime->Sstudio}}</div> 
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
      {{$anime->sinopsis}}
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
          <a href="/karakterpage" class="poster">
              <div class="poster_foto-karakter"><img src="foto/Saitama.jpeg" alt="" width="173" height="166"></div>
              <div class="poster_teks">
                <div class="poster_foto-karakter-teks__nama">Nama : Saitama</div>
                <div class="poster_foto-karakter-teks__role">Role : Main Karakter</div>
              </div>
          </a>
          <a href="#" class="poster">
              <div class="poster_foto-karakter"></div>
              <div class="poster_teks">
                <div class="poster_foto-karakter-teks__nama">Nama</div>
                <div class="poster_foto-karakter-teks__role">Role</div>
              </div>
          </a>
          <a href="#" class="poster">
              <div class="poster_foto-karakter"></div>
              <div class="poster_teks">
                <div class="poster_foto-karakter-teks__nama">Nama</div>
                <div class="poster_foto-karakter-teks__role">Role</div>
              </div>
          </a>
          <a href="#" class="poster">
              <div class="poster_foto-karakter"></div>
              <div class="poster_teks">
                <div class="poster_foto-karakter-teks__nama">Nama</div>
                <div class="poster_foto-karakter-teks__role">Role</div>
              </div>
          </a>
          <a href="#" class="poster">
              <div class="poster_foto-karakter"></div>
              <div class="poster_teks">
                <div class="poster_foto-karakter-teks__nama">Nama</div>
                <div class="poster_foto-karakter-teks__role">Role</div>
              </div>
          </a>
        </div>
        <div class="galery_bawah-content">
          <a href="#" class="poster">
              <div class="poster_foto-karakter"></div>
              <div class="poster_teks">
                <div class="poster_foto-karakter-teks__nama">Nama</div>
                <div class="poster_foto-karakter-teks__role">Role</div>
              </div>
          </a>
          <a href="#" class="poster">
              <div class="poster_foto-karakter"></div>
              <div class="poster_teks">
                <div class="poster_foto-karakter-teks__nama">Nama</div>
                <div class="poster_foto-karakter-teks__role">Role</div>
              </div>
          </a>
          <a href="#" class="poster">
              <div class="poster_foto-karakter"></div>
              <div class="poster_teks">
                <div class="poster_foto-karakter-teks__nama">Nama</div>
                <div class="poster_foto-karakter-teks__role">Role</div>
              </div>
          </a>
          <a href="#" class="poster">
              <div class="poster_foto-karakter"></div>
              <div class="poster_teks">
                <div class="poster_foto-karakter-teks__nama">Nama</div>
                <div class="poster_foto-karakter-teks__role">Role</div>
              </div>
          </a>
          <a href="#" class="poster">
              <div class="poster_foto-karakter"></div>
              <div class="poster_teks">
                <div class="poster_foto-karakter-teks__nama">Nama</div>
                <div class="poster_foto-karakter-teks__role">Role</div>
              </div>
          </a>
        </div>
      </div>
    </div>    
</div>
@endsection
