@extends('layouts.main')

@section('container')
   <!--Karakter page-->
   <div class="karakter-page_layout">
    <div class="block_karakter">
      <p id="title" >{{$karakter->nama}}</p>
    </div>
    <div class="karakter_page">
      <!--informasi karakter-->
      <div class="karakter_informasi">
        <div class="karakter_informasi-singkat mt-5">
        <p>{{ $karakter->deskripsi}}</p>
        </div>
        <div class="karakter_informasi-penampilan">
          <div class="karakter_informasi-text">Penampilan</div>
          <hr>
          <p>{{$karakter->penampilan}}</p>
        </div>
        <div class="karakter_informasi-sejarah">
          <div class="karakter_informasi-text">Sejarah</div>
          <hr>
          <P>{{$karakter->sejarah}}</P>
        </div>
      </div>
      <div class="karakter_profile">
        <div class="block_karakter karakter_informasi-text">
          {{$karakter->nama}}
        </div>
        <div class="karakter_profile-foto"><img src="{{asset($karakter->image)}}" alt="" width="270px" height="270px"></div>
        <div class="karakter_profile-content_layout">
          <div class="block_karakter">
            <div class="karakter_informasi-text">profile</div>
          </div>
          <div class="karakter_profile-content">
            <div class="karakter_profile-content-info"> Umur</div>
            <div class="karakter_profile-content-info-">{{$karakter->umur}}</div>
          </div>
          <div class="karakter_profile-content">
            <div class="karakter_profile-content-info">Status</div>
            <div class="karakter_profile-content-info-">{{$karakter->status}}</div>
          </div>
          <div class="karakter_profile-content">
            <div class="karakter_profile-content-info">Gender</div>
            <div class="karakter_profile-content-info-">{{$karakter->gender}}</div>
          </div>
          <div class="karakter_profile-content">
            <div class="karakter_profile-content-info">Tinggi</div>
            <div class="karakter_profile-content-info-">{{$karakter->tinggi}}</div>
          </div>
          <div class="karakter_profile-content">
            <div class="karakter_profile-content-info">Role</div>
            <div class="karakter_profile-content-info-">{{$karakter->role}}</div>
          </div>
          </div>
        </div>
      </div>

    <div class="galery">
      <div class="galery_atas">
        <div class="galery_atas-judul">
          <div class="kategori_teks">Gallery</div>
        </div>
        <a href="#" class="lebih_banyak">Lebih banyak</a>
      </div>
      <div class="galery_bawah">
        <div class="block"></div>
        @if ($fanart)
        @foreach ($fanart as $item)
        <div class="galery_bawah-content">
          <a href="#" class="poster">
          <img src="{{asset($item->image)}}" class="poster_foto-karakter">
          </a>
        </div>
        @endforeach
        @endif
      </div>
    </div>    
    </div>
  </div>
@endsection
