<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
  <!-- halaman Login -->
  <div class="wrapper">
    <div class="form-box login">
      <h2>login</h2>
      @if($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $item)
              <li>{{ $item }}</li>
          @endforeach
        </ul>
      </div>
      @endif
      <form method="POST" action="{{ route('loginUser') }}">
        @csrf
        <div class="input-box">
          <input type="email" required value="{{ old('email') }}" name="email">
          <label>Email</label>
        </div>
        <div class="input-box">
          <input type="password" required name="password">
          <label>Password</label>
        </div>
        <button type="submit" class="btn">Login</button>
        <div class="login-register">
          <p><a href="/register" class="register-link">Sing-in</a></p>
        </div>
      </form>
    </div>
  </div>
  <script>
    // Mengecek apakah ada pesan selamat datang dalam session
    @if (session('role') === 'admin')
        // Menampilkan alert jika peran pengguna adalah admin
        alert('Selamat datang admin!');
    @elseif (session('role') === 'siswa')
        // Menampilkan alert jika peran pengguna adalah siswa
        alert('Selamat datang siswa!');
    @endif
</script>

</body>
</html>