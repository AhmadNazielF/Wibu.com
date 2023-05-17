@extends('layouts.main')

@section('container')
    <!-- list thread -->

    <div class="thread-list_layout">
        <div class="thread-header-list">
            <div class="thread-h1">All Thread</div>
        </div>
        <a href="/createThread">
        <button class="btn btn-red my-3 h-1">
            Start Thread
          </button>
        </a>
        @if($threads)
        @foreach($threads as $item)
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
