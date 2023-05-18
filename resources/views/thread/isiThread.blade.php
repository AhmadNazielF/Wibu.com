@extends('layouts.main')

@section('container')
    <div class="thread_layout-page">
        <div class="thread-page">
            <div class="thread-header">
                <div class="thread-h1">{{ $thread->judul }}</div>
                <div class="thread-teks-uname">
                    <p>Dibuat oleh <a href="#">{{ $user[0]->name }}</a>{{ $thread->created_at }}</p>
                </div>
            </div>
            <div class="thread-body">
                <div class="thread-article">
                    <p>{{ $thread->comment }}
                    </p>
                </div>
            </div>
            <h5 class="mt-5" style="color: aliceblue;">COMMENT:</h5>
            <div class="thread-balasan">
                {{-- {{dd($comment->user_id);}} --}}
                @if ($comment)
                    @foreach ($comment as $item)
                        {{-- {{dd($item->user->name);}} --}}
                        <div class="thread-body">
                            <div class="thread-teks-uname">
                                <p>Dibuat oleh <a href="#">{{ $item->user->name }}</a> {{ $item->created_at }}</p>
                            </div>
                            <div class="thread-article2">
                                <p>{{ $item->comment }}</p>
                            </div>
                        </div>
                        <br>
                    @endforeach
                @endif
            </div>
            <!-- <div id="comment-box1"> -->
            <div>
                <h5 class="mt-5" style="color: aliceblue;">POST COMMENT:</h5>
                <form action="" method="POST">
                    @csrf
                    <input type="hidden" name="thread_id" value={{ $thread->id }}>
                    <textarea type="text" id="comment-box1" name="comment" placeholder="Balas..." required></textarea>
                    <!-- </div> -->
                    {{-- <div class="thread-komen">
                    </div> --}}
                    <br>
                    <button type="submit" class="btn btn-red my-1 Wh-1">
                        Balas
                    </button>
                </form>
            </div>
        </div>
        <div class="thread_layout">
            <a href="#" class="thread_atas">
                <div class="thread_teks-atas"> Thread dan diskusi</div>
            </a>
            @if ($threadall)
            <div class="thread_bawah">
                <!-- thread-->
                <div class="thread">
                    <div class="thread-text-atas">Thread</div>
                    @foreach ($threadall as $item)
                    <div class="thread-content-container">
                        <a href="{{'/thread/'.$item->slug}}" class="thread-content">
                            <div class="thread-text"> {{$item->judul}}</div>
                        </a>
                    @endforeach
                </div>
                </div>
            </div>
            @endif
        </div>



    @endsection
