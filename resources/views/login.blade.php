<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="icon" href="Logo.png">
  </head>
    <body>
        <div class="akun_layout">
          <div class="akun">
            <div class="akun-teks">Sign in with Email</div>
            <div class="input_akun">
              <input type="email" placeholder="EMAIL">
              <input type="password" placeholder="PASSWORD">
              <button class="btn_submit" type="submit"> Login </button>
              <p>Belum punya akun? <a href="/register">Sign Up</a></p>
            </div>
          </div>
        </div>
    </body>
</html>