<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>{{ $title }}</title>
    <link rel="stylesheet" type="text/css" href="css/style2.css">
    @vite(['resources/sass/app.scss','resources/js/app.js'])
    <link rel="icon" href="Logo.png">
  </head>
    <body class="bg-black">
      <div class="akun_layout">
        <main class="form-registtration">
          <div class="daftar-teks">Register</div>
          <form action="/register" method="post"> <!-- Menentukan URL dan metode HTTP untuk mengirimkan data form -->
              @csrf <!-- Menambahkan CSRF token untuk melindungi dari serangan CSRF -->
              <!--nama-->
                <div class="form-floating">
                  <label for="Username">Username</label>
                  <div class="input-group has-validation mb-1">
                    <input type="text" name="name" class="form-control  @error('name')is-invalid @enderror" id="name" placeholder="Name" required value="{{old('name')}}">
                    @error('name')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
              <!--email-->
              <div class="form-floating">
                <label for="Email">Email</label>
                <div class="input-group has-validation mb-1">
                  <input type="email" name="email" class="form-control @error('email')is-invalid @enderror" id="Email" placeholder="Email" required value="{{old('email')}}">
                  @error('email')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
              </div>    
              <!--pasword-->
              <div class="form-floating">
                <label for="Password">Password</label>
                <div class="input-group has-validation mb-1">
                  <input type="password" name="password" class="form-control @error('password')is-invalid @enderror" id="Password" placeholder="Password" required>
                  @error('password')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
              </div>
                <div class="button">
                    <button type="submit" class="btn_submit">Daftar</button>
                </div>    
                  <p>Sudah punya akun? <a href="login">Sign in</a></p>
              </div>
          </form>
        </main>
        
    </body>
</html>