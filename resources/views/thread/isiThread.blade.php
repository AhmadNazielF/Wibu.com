@extends('layouts.main')

@section('container')
    <!-- thread -->
    <div class="thread_layout-page">
        <div class="thread-page">
            <div class="thread-header">
                <div class="thread-h1">Judul Thread</div>
                <div class="thread-teks-uname">
                    <p>Dibuat oleh <a href="#">Username</a> pada 3 April 2023</p>
                </div>
            </div>
            <div class="thread-body">
                <div class="thread-article">
                    <p>Isi Thread Lorem ipsum dolor, sit amet consectetur adipisicing elit. Pariatur dolorem explicabo, fuga culpa temporibus tenetur nemo tempora quasi consectetur mollitia veritatis nobis eos illo non. Aut quae incidunt quibusdam dolorum.
                    </p>
                </div>
            </div>
            <h5 class="mt-5" style="color: aliceblue;">COMMENT:</h5>
            <div class="thread-balasan">
                <div class="thread-body">
                    <div class="thread-teks-uname">
                        <p>Dibuat oleh <a href="#">Username</a> pada 3 April 2023</p>
                    </div>
                    <div class="thread-article2">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis dolorum, iusto, quis asperiores quia pariatur error, culpa nobis officia rerum et quasi. Enim minus eveniet qui quos voluptate beatae laboriosam.</p>
                    </div>
                </div>
                <br>
                <div class="thread-body">
                    <div class="thread-teks-uname">
                        <p>Dibuat oleh <a href="#">Username</a> pada 3 April 2023</p>
                    </div>
                    <div class="thread-article2">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta accusantium, error dolorem exercitationem magni asperiores eaque numquam delectus blanditiis temporibus, enim, quibusdam recusandae expedita! Quis quos eligendi maxime quaerat labore.</p>
                    </div>
                </div>
             </div>
                <!-- <div id="comment-box1"> -->
                <div> 
                <h5 class="mt-5" style="color: aliceblue;">POST COMMENT:</h5>   
                <form action="/comment" method="post">
                    <textarea  type="text" id="comment-box1" name="comment" placeholder="Balas..." required></textarea>
                    <!-- </div> -->
                    {{-- <div class="thread-komen">
                    </div> --}}
                    <br>
                    <button class="btn btn-red my-1 Wh-1">
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
