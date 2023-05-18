@extends('layouts.main')

@section('container')
    <!--karakter popular-->
    <div class="popular_layout">
        <div class="popular">
            <div class="popular_atas">
                <div class="popular_judul">Karakter Populer</div>
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
        </div>
        <div class="popular_bawah">
            <div class="popular_top">
                <div class="popular_top__1">
                    <div class="karakter_foto">
                        <a href="{{ '/karakterpage/' . $topCharacter[0]->slug }}">
                            <div class="karakter_foto-content"><img src="{{ asset($topCharacter[0]->image) }}"
                                    alt="" width="170" height="170"></div>
                            <div class="karakter_foto-nama">{{ $topCharacter[0]->nama }}</div>
                            <div class="karakter_foto-asal">{{ $topCharacter[0]->anime->judul }}</div>
                        </a>
                    </div>
                </div>
                <div class="popular_top__23">
                    <div class="karakter_foto2 ">
                            <a href="{{ '/karakterpage/' . $topCharacter[1]->slug }}">
                            <div class="karakter_foto-content"><img src="{{ asset($topCharacter[1]->image) }}"
                                    alt="" width="170" height="170"></div>
                            <div class="karakter_foto-nama">{{ $topCharacter[1]->nama }}</div>
                            <div class="karakter_foto-asal">{{ $topCharacter[1]->anime->judul }}</div>
                        </a>
                        </div>
                        <div class="karakter_foto3">
                          <a href="{{ '/karakterpage/' . $topCharacter[2]->slug }}">
                        <div class="karakter_foto-content"><img src="{{ asset($topCharacter[2]->image) }}"
                          alt="" width="170" height="170"></div>
                          <div class="karakter_foto-nama"> {{ $topCharacter[2]->nama }}</div>
                          <div class="karakter_foto-asal">{{ $topCharacter[2]->anime->judul }}</div>
                        </a>
                        </div>
                    </div>
                  </div>
                  <div class="popular_content">
                    <a href="{{ '/karakterpage/' . $topCharacter[3]->slug }}">
                        <div class="karakter_foto">
                            <div class="karakter_foto-content"><img src="{{ asset($topCharacter[3]->image) }}"
                                    alt="" width="170" height="170"></div>
                            <div class="karakter_foto-nama">{{ $topCharacter[3]->nama }}</div>
                            <div class="karakter_foto-asal">{{ $topCharacter[3]->anime->judul }}</div>
                        </div>
                    </a>
                    <a href="{{ '/karakterpage/' . $topCharacter[4]->slug }}">
                        <div class="karakter_foto">
                            <div class="karakter_foto-content"><img src="{{ asset($topCharacter[4]->image) }}"
                                    alt="" width="170" height="170"></div>
                            <div class="karakter_foto-nama">{{ $topCharacter[4]->nama }}</div>
                            <div class="karakter_foto-asal">{{ $topCharacter[4]->anime->judul }}</div>
                        </div>
                    </a>
                    <a href="{{ '/karakterpage/' . $topCharacter[5]->slug }}">
                        <div class="karakter_foto">
                            <div class="karakter_foto-content"><img src="{{ asset($topCharacter[5]->image) }}"
                                    alt="" width="170" height="170"></div>
                            <div class="karakter_foto-nama">{{ $topCharacter[5]->nama }}</div>
                            <div class="karakter_foto-asal">{{ $topCharacter[5]->anime->judul }}</div>
                        </div>
                    </a>
                    <a href="{{ '/karakterpage/' . $topCharacter[6]->slug }}">
                        <div class="karakter_foto">
                            <div class="karakter_foto-content"><img src="{{ asset($topCharacter[6]->image) }}"
                                    alt="" width="170" height="170"></div>
                            <div class="karakter_foto-nama">{{ $topCharacter[6]->nama }}</div>
                            <div class="karakter_foto-asal">{{ $topCharacter[6]->anime->judul }}</div>
                        </div>
                    </a>
                    <a href="{{ '/karakterpage/' . $topCharacter[7]->slug }}">
                        <div class="karakter_foto">
                            <div class="karakter_foto-content"><img src="{{ asset($topCharacter[7]->image) }}"
                                    alt="" width="170" height="170"></div>
                            <div class="karakter_foto-nama">{{ $topCharacter[7]->nama }}</div>
                            <div class="karakter_foto-asal">{{ $topCharacter[7]->anime->judul }}</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="popular_content">

        {{-- <div class="karakter_foto">
                <div class="karakter_foto-content"><img src="{{asset($topCharacter[8]->image)}}" alt="" width="170" height="170"></div>
                <div class="karakter_foto-nama">{{$topCharacter[8]->nama}}</div>
                <div class="karakter_foto-asal">Youjo Senki</div>
              </div>
            
              <div class="karakter_foto">
                <div class="karakter_foto-content"><img src="{{asset($topCharacter[9]->image)}}" alt="" width="170" height="170"></div>
                <div class="karakter_foto-nama">{{$topCharacter[9]->nama}}</div>
                <div class="karakter_foto-asal">Spy x Family</div>
              </div>
             
              <div class="karakter_foto">
                <div class="karakter_foto-content"><img src="{{asset($topCharacter[10]->image)}}" alt="" width="170" height="170"></div>
                <div class="karakter_foto-nama">{{$topCharacter[10]->nama}}</div>
                <div class="karakter_foto-asal">Down Fall</div>
              </div>
          
              <div class="karakter_foto">
                <div class="karakter_foto-content"><img src="{{asset($topCharacter[11]->image)}}" alt="" width="170" height="170"></div>
                <div class="karakter_foto-nama">{{$topCharacter[11]->nama}}</div>
                <div class="karakter_foto-asal">Jujutsu Kaisen</div>
              </div>
    
              <div class="karakter_foto">
                <div class="karakter_foto-content"><img src="{{asset($topCharacter[12]->image)}}" alt="" width="170" height="170"></div>
                <div class="karakter_foto-nama">{{$topCharacter[12]->nama}}</div>
                <div class="karakter_foto-asal">Atack on Titan</div>
              </div> --}}
    </div>
    </div>
    </div>
    </div>
@endsection
