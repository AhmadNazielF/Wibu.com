@extends('layouts.main')

@section('container')
   <!--Karakter page-->
   <div class="karakter-page_layout">
    <div class="block_karakter">
      <p id="title" >One Punch Man</p>
    </div>
    <div class="karakter_page">
      <!--informasi karakter-->
      <div class="karakter_informasi">
        <div class="karakter_informasi-singkat mt-5">
          <p>Saitama (サイタマ, Saitama) adalah protagonis utama dalam seri dan judul One-Punch Man. Dia saat ini adalah makhluk paling kuat yang ada dalam seri tersebut. Saitama menghadapi krisis eksistensial yang diimpose sendiri, karena dia sekarang terlalu kuat untuk mendapatkan sensasi dari pertarungan.</p>
          <p>Awalnya hanya menjadi pahlawan untuk bersenang-senang, Saitama kemudian mendaftar menjadi pahlawan profesional untuk Asosiasi Pahlawan setelah menyadari bahwa tidak ada yang mengakui dirinya sebagai pahlawan, dan membela rumahnya di Z-City dari monster, penjahat, dan ancaman lainnya. Di bawah Asosiasi Pahlawan, dia diberi nama pahlawan Caped Baldy (ハゲマント, Hagemanto; Viz: Bald Cape) dan saat ini berada di peringkat A-Class Rank 39.</p>
        </div>
        <div class="karakter_informasi-penampilan">
          <div class="karakter_informasi-text">Penampilan</div>
          <hr>
          <p>Saitama adalah seorang pria botak yang tampak biasa-biasa saja, dengan tubuh yang tipis tetapi bugar dan memiliki tinggi dan berat badan yang rata-rata. Dia dulunya memiliki rambut hitam pendek yang tebal, namun kehilangannya akibat intensitas regimen pelatihan pahlawan yang dia lakukan.</p>
          <P>Saitama adalah seorang pria botak yang tampak biasa-biasa saja, dengan tubuh yang tipis tetapi bugar dan memiliki tinggi dan berat badan yang rata-rata. Dia dulunya memiliki rambut hitam pendek yang tebal, namun kehilangannya akibat intensitas regimen pelatihan pahlawan yang dia lakukan.</P>
        </div>
        <div class="karakter_informasi-sejarah">
          <div class="karakter_informasi-text">Sejarah</div>
          <hr>
          <P>Saitama adalah karakter utama dalam seri anime One Punch Man. Awalnya, dia adalah seorang pekerja kantoran yang kehilangan semangat hidupnya karena merasa bosan dengan rutinitas sehari-harinya. Namun, setelah bertemu dengan seorang anak laki-laki yang diserang oleh monster, Saitama memutuskan untuk menjadi pahlawan untuk melindungi kota dari ancaman monster.</P>
          <P> Melalui latihan yang sangat intens, Saitama mendapatkan kekuatan luar biasa sehingga dia bisa mengalahkan semua musuhnya hanya dengan satu pukulan. Namun, kekuatan yang dia miliki telah membuatnya merasa bosan dan kurang bergairah dalam hidupnya, karena dia tidak menemukan kepuasan dalam pertarungan.</P>
          <P> Saitama kemudian bergabung dengan Asosiasi Pahlawan dan diakui sebagai pahlawan kelas A. Dia terus melindungi kota dari serangan monster dan menjalani kehidupannya dengan sederhana, tetapi dalam hatinya dia merasa kesepian karena tidak memiliki lawan yang sepadan dengan kekuatannya. Melalui perjalanan dan pertarungan, Saitama akhirnya belajar untuk menemukan makna dan tujuan dalam hidupnya, dan terus menjadi pahlawan yang dihormati dan diakui oleh orang-orang di sekitarnya.</P>
        </div>
      </div>
      <div class="karakter_profile">
        <div class="block_karakter karakter_informasi-text">
          Saitama
        </div>
        <div class="karakter_profile-foto"><img src="foto/Saitama.jpeg" alt="" width="270px" height="270px"></div>
        <div class="karakter_profile-content_layout">
          <div class="block_karakter">
            <div class="karakter_informasi-text">profile</div>
          </div>
          <div class="karakter_profile-content">
            <div class="karakter_profile-content-info"> Umur</div>
            <div class="karakter_profile-content-info-">25</div>
          </div>
          <div class="karakter_profile-content">
            <div class="karakter_profile-content-info">Status</div>
            <div class="karakter_profile-content-info-">Hidup</div>
          </div>
          <div class="karakter_profile-content">
            <div class="karakter_profile-content-info">Gender</div>
            <div class="karakter_profile-content-info-">Laki-laki</div>
          </div>
          <div class="karakter_profile-content">
            <div class="karakter_profile-content-info">Tinggi</div>
            <div class="karakter_profile-content-info-">175cm</div>
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
        <div class="galery_bawah-content">
          <a href="#" class="poster">
            <div class="poster_foto-karakter"></div>
          </a>
          <a href="#" class="poster">
            <div class="poster_foto-karakter"></div>
          </a>
          <a href="#" class="poster">
            <div class="poster_foto-karakter"></div>
          </a>
          <a href="#" class="poster">
            <div class="poster_foto-karakter"></div>
          </a>
          <a href="#" class="poster">
            <div class="poster_foto-karakter"></div>
          </a>
        </div>
      </div>
    </div>    
    </div>
  </div>
@endsection
