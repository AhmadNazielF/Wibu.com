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
      @if(session()->has('loginFailed'))
          <div class="alert alert-danger" role="alert">
            {{session('loginFailed') }}
          </div>
      @endif
      <div class="akun_layout">
          <div class="akun">
          <form action="/login" method="post">
            @csrf <!-- Menambahkan token CSRF di dalam form -->
            <div class="form-floating">
              <label for="Email">Email</label>
              <div class="input-group has-validation mb-1">
                <input type="email" name="email" class="form-control @error('email')is-invalid @enderror" id="Email" placeholder="Email" autofocus required value="{{old('email')}}">
                @error('email')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
            </div>
            <div class="form-floating">
              <label for="Password">Password</label>
              <div class="input-group has-validation mb-1">
                <input type="password" name="password" class="form-control @error('password')is-invalid @enderror" id="Password" placeholder="Password"  autofocus required>
                @error('password')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
            </div>
            <div class="button">
              <button type="submit" class="btn_submit">Login</button>
            </div>  
              <p>Belum punya akun? <a href="register">Sign Up</a></p>
              </form>
            </div>
          </div>
        </div>
    </body>
</html>