@extends('layouts.main')

@section('container')
    <style>
        body{
            color: white;
            font-family: 'inter';
        }
        .container{
            margin-left:90px !important;
        }

        .poster{
            display: block
        }

        .poster_text{
            color: white;
        }
    </style>
    <h1 class="mb-5">Hasil Pencarian untuk :</h1>

    <h2>Anime</h2>
    <hr>
    <div class="anime">
        @if($anime)
        @foreach($anime as $item)
        <a href="{{'/animepage/'.$item->slug}}" class="poster">
            <div class="poster_foto-anime"><img src="{{asset($item->image)}}" alt="" width="170px" height="240"></div>
            <div class="poster_text">{{$item->judul}}</div>
          </a>
        @endforeach
        @endif
    </div>

    <h2>Karakter</h2>
    <hr>
    <div class="karakter">
        @if($karakter)
        @foreach($karakter as $item)
        <a href="{{'/karakterpage/'.$item->slug}}" class="poster">
            <div class="poster_foto-karakter">
              <div class="border">
              <img src="{{asset($item->image)}}" alt="" width="170px" height="170px">
              </div>
            </div>
            <div class="poster_text">{{$item->nama}}</div>
          </a>
        @endforeach
        @endif
    </div>


    <h2>Thread</h2>
    <hr>
    <div class="thread">
        @if($thread)
        @foreach($thread as $item)
        <ul class="thread-list">
            <li>
                <h3><a href="{{'/thread/'.$item->slug}}">{{$item->judul}}</a></h3>
                <p class="thread-meta">Dibuat oleh <a href="#">{{$item->user->name}}</a> {{$item->created_at}}</p>
            </li>
        </ul>
        @endforeach
        @endif
    </div>

@endsection