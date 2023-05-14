<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Anime Page</title>
    <link rel="stylesheet" type="text/css" href="css/style2.css">
    <link rel="icon" href="Logo.png">
  </head>
    <body>
       <x-sidebar />

         <!--karakter popular-->
         <div class="popular_layout">
            <div class="popular">
                <div class="popular_atas">
                    <div class="popular_judul">Anime Populer</div>
                    <div class="popular_bar">
                      <div class="waktu_popular">
                        <div class="waktu" id="week-"></div>
                        <svg class="segitiga" width="10" height="6" viewBox="0 0 13 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M6.5053 8.99999L0.00206014 0.756337L12.9924 0.743656L6.5053 8.99999Z" fill="white"/>
                          </svg>  
                          <div class="waktu_popular-dropdown">
                            <div class="waktu-warp" onclick="ubahMinggu()">
                            <div class="waktu" id="week"></div>
                          </div>
                            <hr>
                            <div class="waktu-warp" onclick="ubahBulan()">
                            <div class="waktu" id="month"></div>
                            </div>
                            <hr>
                            <div class="waktu-warp" onclick="ubahAllTime()">
                            <div class="waktu" id="all-time"></div>
                            </div>
                          </div>                        
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
         
         <script>
          function ubahMinggu(){
            if(element = document.getElementById('month-')){
              element.id = 'week-'
            } 
              
            if(element = document.getElementById('all-time-')){
              element.id = 'week-'
            } 
          }
          
          function ubahBulan(){
           if(element = document.getElementById('week-')){
              element.id = 'month-'
            }
          
            if(element = document.getElementById('all-time-')){
              element.id = 'month-'
            } 
          }
          
          function ubahAllTime(){
            if(element = document.getElementById('week-')){
              element.id = 'all-time-'
            }
          
            if(element = document.getElementById('month-')){
              element.id = 'all-time-'
            } 
          }
          </script>
    </body>
</html>