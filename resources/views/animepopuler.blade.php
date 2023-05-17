@extends('layouts.main')

@section('container')
  <!--karakter popular-->
  <div class="popular_layout">
    <div class="popular">
        <div class="popular_atas">
            <div class="popular_judul">Anime Populer</div>
            <div class="popular_bar">
              <div class="dropdown ms-5">
                <button class="btn btn-red dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                    <div class="anime_foto-content"><img src="foto/jjba-Sc.jpeg" alt="" width="230" height="134"></div>
                    <div class="anime_foto-nama">JoJo Bizzare Adventure: <br> Stardust Crussader</div>
                  </div>
                </div>
                <div class="popular_top__23">
                  <div class="anime_foto-popular">
                    <div class="anime_foto-content"><img src="foto/aot-4.jpeg" alt="" width="230" height="134"></div>
                    <div class="anime_foto-nama">Attack on Titan<br> Season 4</div>
                  </div>
                  <div class="anime_foto-popular">
                    <div class="anime_foto-content"><img src="foto/viland-sg.jpeg" alt="" width="230" height="134"></div>
                    <div class="anime_foto-nama">Vinlad Saga</div>
                  </div>
                </div>
            </div>
            <div class="popular_content">
              <div class="anime_foto-popular">
                <div class="anime_foto-content"><img src="foto/mobPsyco100.jpg" alt="" width="230" height="134"></div>
                <div class="anime_foto-nama">mobPsyco100</div>
              </div>
              <div class="anime_foto-popular">
                <div class="anime_foto-content"><img src="foto/OPM.jpeg" alt="" width="230" height="134"></div>
                <div class="anime_foto-nama">One Punch Man</div>
              </div>
              <div class="anime_foto-popular">
                <div class="anime_foto-content"><img src="foto/Youjo-senki.jpeg" alt="" width="230" height="134"></div>
                <div class="anime_foto-nama">Youjo Senki</div>
              </div>
              <div class="anime_foto-popular">
                <div class="anime_foto-content"><img src="foto/danshi-koukosei.jpeg" alt="" width="230" height="134"></div>
                <div class="anime_foto-nama">Danshi Koukosei no Nichijou</div>
              </div>
            </div>
            <div class="popular_content">
              <div class="anime_foto-popular">
                <div class="anime_foto-content"><img src="foto/accel-world.jpeg" alt="" width="230" height="134"></div>
                <div class="anime_foto-nama">Accel World</div>
              </div>
              <div class="anime_foto-popular">
                <div class="anime_foto-content"><img src="foto/any-senpai.jpeg" alt="" width="230" height="134"></div>
                <div class="anime_foto-nama">My Anoying Senpai</div>
              </div>
              <div class="anime_foto-popular">
                <div class="anime_foto-content"><img src="foto/bungo-stray-dog.jpeg" alt="" width="230" height="134"></div>
                <div class="anime_foto-nama">Bungou Stray Dog</div>
              </div>
              <div class="anime_foto-popular">
                <div class="anime_foto-content"><img src="foto/jujutsu.jpeg" alt="" width="230" height="134"></div>
                <div class="anime_foto-nama">Jujutsu Kaisen</div>
              </div>
            </div>
          </div>
        </div>
    </div>
 </div>
@endsection
