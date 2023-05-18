@extends('layouts.main')

@section('container')
    <!--karakter popular-->
    <div class="popular_layout">
        <div class="popular">
            <div class="popular_atas">
                <div class="popular_judul">Anime Populer</div>
                <div class="popular_bar">
                    <div class="dropdown ms-5">
                        <button class="btn btn-red dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            week
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">week</a></li>
                            <li><a class="dropdown-item" href="#">month</a></li>
                            <li><a class="dropdown-item" href="#">all time</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="popular_bawah">
                <div class="popular_top">
                  <div class="popular_top__1">
                    <div class="anime_foto-popular">
                              <a href="{{ '/animepage/' . $topAnime[0]->slug }}">
                                <div class="anime_foto-content"><img src="{{ asset($topAnime[0]->image) }}" alt=""
                                        width="230" height="134"></div>
                                <div class="anime_foto-nama">{{ $topAnime[0]->judul }}</div>
                              </a>
                            </div>
                    </div>
                    <div class="popular_top__23">
                      <div class="anime_foto-popular">
                              <a href="{{ '/animepage/' . $topAnime[1]->slug }}">
                                <div class="anime_foto-content"><img src="{{ asset($topAnime[1]->image) }}" alt=""
                                        width="230" height="134"></div>
                                <div class="anime_foto-nama">{{ $topAnime[1]->judul }}</div>
                              </a>
                            </div>
                        <div class="anime_foto-popular">
                              <a href="{{ '/animepage/' . $topAnime[2]->slug }}">
                                <div class="anime_foto-content"><img src="{{ asset($topAnime[2]->image) }}" alt=""
                                        width="230" height="134"></div>
                                <div class="anime_foto-nama">{{ $topAnime[2]->judul }}</div>
                              </a>
                            </div>
                    </div>
                </div>
                <div class="popular_content">
                  <div class="anime_foto-popular">
                          <a href="{{ '/animepage/' . $topAnime[3]->slug }}">
                            <div class="anime_foto-content"><img src="{{ asset($topAnime[3]->image) }}" alt=""
                                    width="230" height="134"></div>
                            <div class="anime_foto-nama">{{ $topAnime[3]->judul }}</div>
                          </a>
                        </div>
                    <div class="anime_foto-popular">
                          <a href="{{ '/animepage/' . $topAnime[4]->slug }}">
                            <div class="anime_foto-content"><img src="{{ asset($topAnime[4]->image) }}" alt=""
                                    width="230" height="134"></div>
                            <div class="anime_foto-nama">{{ $topAnime[4]->judul }}</div>
                          </a>
                        </div>
                    <div class="anime_foto-popular">
                          <a href="{{ '/animepage/' . $topAnime[5]->slug }}">
                            <div class="anime_foto-content"><img src="{{ asset($topAnime[5]->image) }}" alt=""
                                    width="230" height="134"></div>
                            <div class="anime_foto-nama">{{ $topAnime[5]->judul }}</div>
                          </a>
                        </div>
                        <div class="anime_foto-popular">
                          <a href="{{ '/animepage/' . $topAnime[6]->slug }}">
                            <div class="anime_foto-content"><img src="{{ asset($topAnime[6]->image) }}" alt=""
                                    width="230" height="134"></div>
                            <div class="anime_foto-nama">{{ $topAnime[6]->judul }}</div>
                          </a>
                        </div>
                </div>
                {{-- <div class="popular_content">
              <div class="anime_foto-popular">
                <div class="anime_foto-content"><img src="{{asset($topAnime[7]->image)}}" alt="" width="230" height="134"></div>
                <div class="anime_foto-nama">{{$topAnime[7]->judul}}</div>
              </div>
              {{-- <div class="anime_foto-popular">
                <div class="anime_foto-content"><img src="{{asset($topAnime[8]->image)}}" alt="" width="230" height="134"></div>
                <div class="anime_foto-nama">{{$topAnime[8]->judul}}</div>
              </div>
              <div class="anime_foto-popular">
                <div class="anime_foto-content"><img src="{{asset($topAnime[9]->image)}}" alt="" width="230" height="134"></div>
                <div class="anime_foto-nama">{{$topAnime[9]->judul}}</div>
              </div>
              <div class="anime_foto-popular">
                <div class="anime_foto-content"><img src="{{asset($topAnime[10]->image)}}" alt="" width="230" height="134"></div>
                <div class="anime_foto-nama">{{$topAnime[10]->judul}}</div>
              </div> --}}
                {{-- </div> --}}
            </div>
        </div>
    </div>
    </div>
@endsection
