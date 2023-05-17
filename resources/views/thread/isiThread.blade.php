@extends('layouts.main')

@section('container')
{{-- {{dd($thread);}} --}}
    <!-- thread -->
    <style>
      body{
    background-color: rgb(39, 39, 39)!important;
    margin-left: 83px;
}

a{
	text-decoration: none !important;
}

.bg-red{
    background-color:rgb(189, 30, 30);
}

.btn-red{
    --bs-btn-color: #fff !important;
    --bs-btn-bg:rgb(189, 30, 30)!important;
    --bs-btn-hover-color: #fff;
    --bs-btn-hover-bg: rgb(175, 27, 27) ;
    --bs-btn-hover-border-color: rgb(175, 27, 27);
    --bs-btn-focus-shadow-rgb: 130, 138, 145;
    --bs-btn-active-color: #fff;
    --bs-btn-active-bg: rgb(175, 27, 27);
    --bs-btn-active-border-color:rgb(175, 27, 27);
    --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
    --bs-btn-disabled-color: #fff;
    --bs-btn-disabled-bg: #6c757d;
    --bs-btn-disabled-border-color: #6c757d;
}

.Wh-1{
    width: 100PX;
    height: 50px;
}

.lebih_banyak{
    text-align: right;
    padding-top: 20px;
    color: white;
}
/*sidebar*/
.sidebar{
    background-color: #bd1e1e;
	Bottom: 0;
    box-shadow: 0px 3px 12px 0px rgba(14, 25, 26, 0.3);
    color: #520044;
    display: flex;
    flex-direction: column;
    font-family: rubik, helvetica, arial, sans-serif;
    justify-content: space-between;
    left: 0;
    padding: 10px 0 18px;
    position: fixed;
    top: 0;
    width: 75px;
    z-index: 500;
}

.sidebar_atas, .sidebar_bawah, .sidebar_nav{
    display: flex;
    flex-direction: column;
    align-items: center;
}

.sidebar_teks-link{
	max-width: 100%;
}

.sidebar_teks-link {
	margin-top: 4px;
    margin-bottom: 10px;
    color: aliceblue !important;
	max-width: 58px;
    text-transform: uppercase;
    font-size: 10px;
    line-height: 1.5;
    text-align: center;
    transition: color, opacity 0.3s;
    position: relative;
    font-weight: 700;
    overflow: hidden;
}


.sidebar_icon{
    margin-top: 30px;
    margin-bottom: 25px ;
    position: relative;
    display: inline-grid;
    align-items: center;
    justify-items: center;
    height: 55px;
    width: 55px;
    background-color: rgba(255, 255, 255, 0);
    border-radius: 50%;
    overflow: hidden;
    transition-duration: 0.5s;
    transition-property: background-color, color;
}

.sidebar_icon :hover{
    border: 2px solid #ff6b6b ;
    background-color: #ff6b6b;
    color: #fff;
}

.sidebar_links{
    width: 100%;
}

.sidebar_link{
    width: 100%;
    padding: 0;
    display: flex;
    align-items: center;
    flex-direction: column;
    margin-top: 10px;
}


.sidebar_link-icon{
    margin: 0;
    height: 50px;
    width: 50px;
    display: inline-grid;
    align-items: center;
    justify-items: center;
    border-radius: 50%;
    transition: background-color 0.5s;
    border: 2px solid transparent;
    background-color: #eeeeee;
}
/* register */
.sidebar_link-icon:hover, .sidebar_register:hover{
    border: 2px solid transparent;
    border-color: #8f8f8fbb;
    background-color: #ffffff;
}

.sidebar_register{
    margin: 0;
    height: 50px;
    width: 50px;
    display: inline-grid;
    align-items: center;
    justify-items: center;
    border-radius: 50%;
    transition: background-color 0.5s;
    border: 2px solid transparent;
}
.sidebar_register-text{
    margin-left: 16px;
    margin-top: 15px;
    margin-bottom: 13px;
    padding-left: 10px;
    position: relative;
    font-weight: 700;
    overflow: hidden;
}

.dropdown_register-content .sidebar_teks-link{
    margin: auto;
}
.dropdown_register-content{
    height: 150px;
    width: 200px;
    margin-bottom:2px;
    bottom: 0;
    left: 75px;
    position: fixed;
    top: auto;
    transform: none;
    min-width: 0;
    max-width: 200px;
    display: none;
    border-radius: 10px;
    border-color: #5c5c5c;
    border: 2px solid transparent;
    background-color: white;
}

.dropdown_register-content hr{
    margin: 10px;
}

.sidebar_bawah:hover .dropdown_register-content{
    display: block;
    background-color: white;
    border: 3px solid;
    border-color: black;
}

.dropdown_register-content a{
    color: black;
    padding: 12px 16px;
    display: block;

}

.daftar-teks{
    font-family: 'inter' ;
    padding: 10px;
    text-align: center;
    font-size: 40px;
    font-weight: 1000;
}
.regis_daftar{
    background-color: #bd1e1e;
    border: 2px solid transparent;
    border-color: rgb(189, 30, 30);
    width: 170px;
    height: 30px;
    margin: auto;
    position: static;
}

.garis{
    width: 172px;
    height: 1px;
    background-color: #cccccc;
    border-color: #bd1e1e;
    margin:auto;
    margin-top: 7px;
    margin-bottom: 7px;
}

.regis_login_{
    background-color: #ffffff;
    width: 170px;
    height: 30px;
    margin:auto;
    position: static;  
}

.regis_login{
    background-color: #ffffff;
    border: 2px solid transparent;
    border-color: #bd1e1e;
    width: 170px;
    height: 30px;
    margin:auto;
    position: static;  
}

.sidebar_teks-link-regis {
    padding: 0px !important;
    margin: auto;
    top: 6px;
    color: rgb(255, 255, 255) !important;
    text-transform: uppercase;
    font-size: 12px;
    line-height: 1.5;
    text-align: center;
    transition: color, opacity 0.3s;
    position: relative;
    font-weight: 700;
    overflow: hidden;
}

#login.sidebar_teks-link-regis{
    color: #bd1e1e !important;
}

#login1.sidebar_teks-link-regis{
    color: #bd1e1e !important;
    top: 0px !important;
}

#submit-auth{
    width: 300px;
    height: 40px;
    border-radius: 10px;
}

.form-registtration{
    text-align: center;
}

/*wibu.com*/
.logo{
    width: 600px;
    height: 130px;
    margin: auto;
    margin-top: 20px;
    margin-bottom: 20px;    
}
/*Rekomendasi*/
.rekomendasi_layout{
    height: auto;
    
}

.rekomendasi{
    display: flex;
    justify-content: center;
}

.rekomendasi_anime{
    margin: 20px;
    width: 350px;
    height:320px ;
    background-color: #bd1e1e;
    border-radius: 10px;
}
.rekomendasi_anime-foto{
    width: 350px;
    height: 207px;
    background-color: #b9b9b9;
    border-top-right-radius: 10px;
    border-top-left-radius: 10px;
    overflow: hidden;
}

.rekomendasi-judul{
    margin-top: 20px;
    color: #ffffff;
    font-weight: bold;
    text-align: center;
    font-size: 30px;
}
/*kontainer*/

.container_thread-populer{
    display: flex;
    height: auto;
    justify-content: center;
}

/*popular*/
.kategori_teks{
    text-align: center;
    color: #ffffff;
    font-size: 24px;
    padding-top: 5px;
}

.poster_text {
    color: #000000;
}

.populer_layout{
    width: 970px;
    height: auto;
    margin-left: 4%;
    display: grid;
}

.populer{
    display: block;
    margin-top: 15px;
    margin-bottom: 30px;
}

.populer_atas{
    height:40px;
    display: flex;
}

.populer_bawah{
    height: auto;
    background-color: #ffffff;
    display: flex;
    justify-content: center;
}

.poster{
    width: 170px;
    margin: 10px;
    margin-top: 15px;
}

.poster_foto-anime{
    height: 240px;
    background-color: #5c5c5c;   
}

.poster_foto-karakter{
    width: 173px;
    height: 174px;
    background-color: #5c5c5c; 
    overflow: hidden;  
}

.border{
    width: 173px;
    height: 174px;
    border: 2px solid;
    border-color: #000000;
}
.poster_text{
    margin-top: 5px;
    width: 170px;
    text-align: center;
    font-size: 18px;
    font-weight: 700;
   }

.poster_text-asal {
    margin-top: 5px;
    width: 170px;
    text-align: center;
    font-size: 14px;
    color: black;
}
.populer_kategori{
    background-color: #bd1e1e;
    width: 250px;
    text-align: center;
    color: #eeeeee;
    font-size: 24px;
    margin-right: 605px;
}

/*thread*/
.thread_layout{
    background-color: #ffffff;
    margin-left: 4% ;
    width: 330px;
    height: 800px;
    display: block;
}

.thread_atas{
    background-color: #bd1e1e;
    height: 40px;
    display: block;
}

.thread_teks-atas{
    text-align: center;
    color: #ffffff;
    font-size: 24px;
    padding: 5px;
}

.thread_bawah{
    padding: 15px;
    background-color: #ffffff;
    display: grid;
    height: auto;
}

.thread{
    margin: auto;
    margin-bottom: 10px;
}
.thread-content-container{
    background: #f3f3f3;
    box-shadow: 0 1px 3px -1px rgba(0, 0, 0, 0.4);
}

.thread-content:hover{
    background: #eeebeb !important;
}

.thread-content{
    margin: auto;
    display: grid;
    width: 270px;
    height: 35px;
    border-top: 1px solid transparent;
    border-color: #d1d1d1;
    
}
.thread-text-atas{
    color: #bdbdbd;
    font-size: 20px;
}

.thread-text{
    margin: auto;
    text-align: center;
    color: #808080;
}

/*karakter page*/

.karakter-page_layout ,.anime-page_layout{
    width: 1000px;
    margin: auto;
    display: block;
    background-color: #ffffff;
}
.block_karakter{
    height: 40px;
    background-color: #bd1e1e;
    margin: 0px;
}
.karakter_page, .anime_page{
    background-color: #ffffff;
    height: auto;
    margin: 0px;
    display: flex;
}
.karakter_informasi-text{
    font-size: 28px;
    font-family: 'Roboto';
    font-weight: bold;
}
.karakter_informasi-singkat, .karakter_informasi-penampilan, .karakter_informasi-sejarah{
    margin-left: 20px;
    width: 550px;
}

.karakter_profile{
    background-color: #ffffff;
    width: 270px;
    margin: auto;
    margin-top: 30px;
    border: 2px solid transparent;
    border-color: #808080;
}
.karakter_profile .karakter_informasi-text{
    text-align: center;
    color: #ffffff;
    padding-top: 7px;
    font-size: 20px;
    font-family: 'Roboto';
    font-weight: bold;
}

.karakter_informasi-singkat p{
    text-indent: 5%;
}

.karakter_profile-foto{
    height: 270px;
    background-color: #b9b9b9;
    margin-top: 3px ;
    margin-bottom: 3px;
}

.karakter_profile-content_layout{
    display: grid;
}

.karakter_profile-content_layout .block_karakter{
    height: auto;
}
.karakter_profile-content_layout .karakter_informasi-text{
    padding: 4px;
}

.karakter_profile-content{
    height: auto;
    border-top: 2px solid transparent;
    border-bottom: 2px solid transparent;
    border-color: #808080;
    margin-top: 1px;
    display: flex;
}

.karakter_profile-content-info{
    width: 80px;
    background-color: #e2e1e1;
}

.karakter_profile-content-info- ,anime_informasi-content-info- {
    padding-left: 3px;
}

/*Galerry*/

.galery{
    width: 900px;
    margin: 20px;

}

.galery_atas{
    display: flex;
}

.galery_atas .lebih_banyak{
    color: #272727;
    left: 10px;
}

.galery_atas-judul{
    background-color: #bd1e1e;
    width: 250px;
    text-align: center;
    color: #eeeeee;
    font-size: 24px;
    margin-right: 550px;
}

.block{
    height: 10px;
    background-color: #bd1e1e;
    margin: 0px;  
}

.galery_bawah{
    height: auto;
}

.galery_bawah-content{
    height: auto;
    display: flex;
}

.galery_bawah-content .poster{
    margin: 7px ;
}

.galery_bawah-content .poster_foto-karakter{
    height: 166px ;
}

/*anime page*/

.anime_informasi-layout{
    display: flex;
    margin: 10px;
}

.anime_informasi-content{
    font-weight: bold;
}
.anime_foto{
    background-color: #808080;
    width: 300px;
    height: 204px;
}

.anime_informasi{
    display: grid;
    margin: 10px;
    margin-top: 2px;
}

.anime_informasi-content{
    display: flex;
}

.sinopsis{
    margin: 15px;
    margin-bottom: 70px;
}

.sinopsis h4{
    margin-bottom: 0px;
}

.sinopsis p{
    margin-top: 5px;
}

/*populer*/

.popular_layout{
    width: 1000px;
    margin: auto;
}

.popular_atas{
    display: block;
}

.popular_judul{
    background-color: #bd1e1e;
    width: 200px;
    height: 25px;
    font-size: 20px;
    text-align: center;
    color: #ffffff;
}

.popular_bar{
    background-color: #bd1e1e;
    height: 38px;
}

.popular_bawah{
    height: auto;
    display: block;
    background-color: #ffffff;
    padding-bottom: 50px;
}

.popular_top{
    display: grid;
}

.popular_top__1{
    margin-top: 30px;
    display: flex ;
}

.popular_top__23{
    margin-top: -30px;
    display: flex ;
}

.karakter_foto, .anime_foto-popular{
    margin: auto;
    display: grid;
}

.popular_top__23 .karakter_foto{
    margin: auto;
}
.mahkota-kiri{
    position: relative;
    left: 100px;
    top: 30px;
}
.mahkota-kanan{
    position: relative;
    right: 100px;
    top: 30px;
}


.karakter_foto-content{
    margin: auto;
    background-color: #808080;
    width: 174px;
    height: 174px;
    border: 2px solid #2b2b2b ;
}

.karakter_foto-nama{
    text-align: center;
    font-weight: bold;
}

.anime_foto-content{
    margin: auto;
    background-color: #808080;
    border: 2px solid #2b2b2b;
    width: 233px;
    height: 137px;
}

.anime_foto-nama, .karakter_foto-asal{
    text-align: center;
}

.popular_content{
    margin-top: 50px;
    margin-left: 30px;
    display: flex;
}

.popular_content .karakter_foto{
    margin: 5px;
    margin-left: 10px;
    background-color: #808080;
    width: 170px;
    height: 170px;
}

.popular_content .anime_foto-content .anime_foto-nama{
    margin: 5px;
    margin-left: 20px;
    background-color: #808080;
}

.waktu_popular{
    display: flex;
    align-items: center;
    margin-left:30px;
    width: fit-content;
    border: 2px solid;
    border-color: #bd1e1e;
}

.waktu{
    width: fit-content;
    height: auto;
    font-size: 18px;
    margin-right: 30px;
    padding-top: 3px;
    color: #eeeeee;
}

.waktu_popular:hover .segitiga{
 transform: rotate(0.5turn);
}

.waktu_popular:hover {
    width: 105px;
    border: 2px solid;
    padding-bottom: 5px;
    color: #881111;
}

.waktu_popular:hover .waktu_popular-dropdown{
    display: block;
}

.waktu_popular-dropdown{
    top: 63px;
    margin-left: -2px;
    width: 105px;
    background-color: #ffffff;
    display: block;
    border: 2px solid ;
    border-color: #9b9b9b;
    position: absolute;
    display: none;
} 

.waktu_popular-dropdown .waktu{
    margin: auto;
    font-size: 18px;
    padding-top: 3px;
    color: #272727;
}

.waktu_popular-dropdown .waktu-warp{
    background-color: #ffffff;
    margin: 0px;
}

.waktu_popular-dropdown .waktu-warp:hover{
    background-color: #c2c2c2;
}

.waktu_popular-dropdown hr{
    margin: 0px;
}
#week::after,#week-::after{
    content: 'Week';
}

#month::after,#month-::after{
    content: 'Month';
}

#all-time::after,#all-time-::after{
    content: 'All Time';
}

/*akun*/

.akun_layout{
    width: 400px;
    height: 430px;
    margin: auto;
    background-color: #ffffff;
}

.akun{
    padding-top: 30px;
    margin: auto;
    overflow: hidden;
    text-align: center;
}

.akun-teks {
    text-align: center;
    font-family: 'Inter';
    font-size: 32px;
    font-weight: bolder;
    margin-top: 40px;
}

input{
    margin: 10px;
}

.input_akun{
    margin: auto;
    display: grid;
    width: 200px;
}

.input_akun .btn_submit{
    margin: auto;
    margin-top: 25px;
    width: 150px;
    height: 25px;
    border-radius: 5px;
    background-color: #bd1e1e;
    color: #ffffff;
}

.input_akun p{
    text-align: center;
}

.thread-page{
    width: 904px;
}
.thread-list_layout{
    position: relative;
    margin-left: 4%;
}
.thread-body {
    font-family: Arial, sans-serif;
    background-color: #ffffff;
    min-height: 190px;
}

.thread-header {
    background-color: #ffffff;
    width: 904px;
    height: 138px;
    border-bottom: 1px solid #cccccc;
}

.thread-h1 {
    padding: 10px;
    margin: 0;
    font-size: 24px;
}

.thread-article {
    padding: 10px;
    margin: 0;
    font-size: 24px;
}

.thread-article2 {
    margin: 0;
    font-size: 18px;
    padding: 10px;
    border-bottom: 1px solid #cccccc;
}

.thread-button {
    background-color: #bd1e1e;
    color: #ffffff;
    border: none;
    padding: 10px 20px;
    width: 262px;
    height: 79px;
    cursor: pointer;
    border-radius: 5px;
    text-align: center;
    position: relative;
}

.thread-button:hover {
    background-color: #bd1e1e;
}

.thread-teks-uname {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
    width: 904px;
    height: 50px;
    padding: 10px;
}

.thread-balasan {
    font-family: Arial, sans-serif;
    width: 904px;
    height: auto;
}

.thread-komen input[type="text"] {
    width: 1271px;
    height: 315px;
    padding: 10px;
    border: 1px solid #ccc;
    margin-bottom: 20px;
    box-sizing: border-box;
    background-color: #ffffff;
    font-family: Arial, sans-serif;
    font-size: 14px;
}

.comment-box input[type="text"] {
    width: 904px;
    height: 315px;
    padding: 10px;
    box-sizing: border-box;
    border: 1px solid #ccc;
    margin-bottom: 10px;
    font-family: Arial, sans-serif;
    font-size: 14px;
    text-align: left;
}

#comment-box1 {
    background-color: #f7f7f7;
    position: relative;
    width: 904px;
    height: 315px;
    padding: 20px;
    color: rgb(0, 0, 0);
}

/* 
#comment-box1::after {
	content: "uidbiudbiu";
	position: absolute;
	height: 25px;
	width: 25px;
	bottom: -25px;
	left: 90%;
	background-color: #f3f4f7;
	clip-path: polygon(0 0, 100% 0, 100% 100%);
} */
.thread-list {
    list-style: none;
    padding: 0;
    margin: 0;
    background-color: #ffffff;
    position: relative;
}

.thread-list li {
    border-bottom: 1px solid #ddd;
    padding: 20px;
}

.thread-list li:last-child {
    border-bottom: none;
}

.thread-list li h3 {
    margin: 0;
    font-size: 24px;
}

.thread-list li h3 a {
    color: #333;
    text-decoration: none;
}

.thread-list li p.thread-description {
    margin: 10px 0;
}

.thread-list li p.thread-meta {
    font-style: italic;
    color: #999;
    margin: 0;
}

.thread-button-start {
    background-color: #bd1e1e;
    color: #ffffff;
    border: none;
    padding: 10px 20px;
    width: 80px;
    height: 50px;
    cursor: pointer;
    border-radius: 5px;
    text-align: center;
    position: relative;
}

.thread-header-list {
    background-color: #ffffff;
    padding: 10px;
    /* width: 904px;
        height: 138px; */
    border-bottom: 1px solid #cccccc;
}

.text-create-thread {
    font: arial;
    font-size: 36px;
    color: #fff;
}

.create-thread {
    background-color: #f7f7f7;
    position: relative;
    width: 1271px;
    height: 315px;
    padding: 20px;
}

#comment-box2 {
    background-color: #f7f7f7;
    position: relative;
    width: 1252px;
    height: 104px;
    padding: 20px;
    color: rgb(0, 0, 0);
}

#comment-box3 {
    background-color: #f7f7f7;
    position: relative;
    width: 1252px;
    height: 315px;
    padding: 20px;
    color: rgb(0, 0, 0);
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    z-index: 1;
}

.dropdown-content a {
    display: block;
    padding: 10px;
    text-decoration: none;
    color: black;
    background-color: white;
    stroke: black;
    width: 502px;
    height: 102px;
    text-align: left;
    border-bottom: 2px solid transparent;
    border-color: black;
}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropbtn {
    background-color: #ffffff;
    color: black;
    padding: 10px;
    font-size: 16px;
    border: none;
    width: 522px;
    height: 102px;
    text-align: left;
    border-bottom: 2px solid transparent;
    border-color: black;
}

.dropbtn:hover {
    background-color: #ffffff;
}

.thread_layout-page {
    padding: 30px;
    background-color: #2c2b2b;
    display: flex;
}
.custom-input {
    width: 522px;
    height: 103px;
    font-size: 32px;
  }

.form-control-costum{
    background-color: #ffffff !important;
    border-radius: 0px !important;
    border: 0px solid #ced4da !important;
    border-bottom: 1px solid #ced4da !important;
}
    </style>
    <div class="thread_layout-page">
        <div class="thread-page">
            <div class="thread-header">
                <div class="thread-h1">{{$thread->judul}}</div>
                <div class="thread-teks-uname">
                    <p>Dibuat oleh <a href="#">{{$user[0]->name}}</a>{{$thread->created_at}}</p>
                </div>
            </div>
            <div class="thread-body">
                <div class="thread-article">
                    <p>{{$thread->comment}}
                    </p>
                </div>
            </div>
            <h5 class="mt-5" style="color: aliceblue;">COMMENT:</h5>
            <div class="thread-balasan">
              {{-- {{dd($comment->user_id);}} --}}
              @if($comment)
                @foreach($comment as $item)
                {{-- {{dd($item->user->name);}} --}}
                <div class="thread-body">
                    <div class="thread-teks-uname">
                        <p>Dibuat oleh <a href="#">{{$item->user->name}}</a> {{$item->created_at}}</p>
                    </div>
                    <div class="thread-article2">
                        <p>{{$item->comment}}</p>
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
                  <input type="hidden" name="thread_id" value={{$thread->id}}>
                    <textarea  type="text" id="comment-box1" name="comment" placeholder="Balas..." required></textarea>
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
                <div class="thread_bawah">
                  <!-- thread-->
                  <div class="thread">
                    <div class="thread-text-atas">Thread</div>
                    <div class="thread-content-container">
                      <a href="#" class="thread-content">
                        <div class="thread-text"> thread </div>
                      </a>
                      <a href="#" class="thread-content">
                        <div class="thread-text"> thread </div>
                      </a>
                      <a href="#" class="thread-content">
                        <div class="thread-text"> thread </div>
                      </a>
                      <a href="#" class="thread-content">
                        <div class="thread-text"> thread </div>
                      </a>
                      <a href="#" class="thread-content">
                        <div class="thread-text"> thread </div>
                      </a>
                  </div>
                  </div>
                  <!--diskusi-->
                  <div class="thread">
                    <div class="thread-text-atas">Diskusi</div>
                    <div class="thread-content-container">
                      <a href="#" class="thread-content">
                        <div class="thread-text"> thread </div>
                      </a>
                      <a href="#" class="thread-content">
                        <div class="thread-text"> thread </div>
                      </a>
                      <a href="#" class="thread-content">
                        <div class="thread-text"> thread </div>
                      </a>
                      <a href="#" class="thread-content">
                        <div class="thread-text"> thread </div>
                      </a>
                      <a href="#" class="thread-content">
                        <div class="thread-text"> thread </div>
                      </a>      
                      <a href="#" class="thread-content">
                        <div class="thread-text"> thread </div>
                      </a>
                      <a href="#" class="thread-content">
                        <div class="thread-text"> thread </div>
                      </a>
                      <a href="#" class="thread-content">
                        <div class="thread-text"> thread </div>
                      </a>
                      <a href="#" class="thread-content">
                        <div class="thread-text"> thread </div>
                      </a>
                      <a href="#" class="thread-content">
                        <div class="thread-text"> thread </div>
                      </a>
                      <a href="#" class="thread-content">
                        <div class="thread-text"> thread </div>
                      </a>
                      <a href="#" class="thread-content">
                        <div class="thread-text"> thread </div>
                      </a>
                      <a href="#" class="thread-content">
                        <div class="thread-text"> thread </div>
                      </a>
                      <a href="#" class="thread-content">
                        <div class="thread-text"> thread </div>
                      </a>
                      <a href="#" class="thread-content">
                        <div class="thread-text"> thread </div>
                      </a>
                  </div>
                  </div>
                </div>
              </div>
        </div>

        

@endsection
