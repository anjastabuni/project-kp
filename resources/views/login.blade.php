<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <title>Login</title>
    <style>
        body {
            background-image: url('path-to-your-background-image.jpg');
            background-size: cover;
            background-position: center;
        }
    </style>
</head>
<body class="h-full flex items-center justify-center">
  <div class="flex max-w-4xl bg-white shadow-lg rounded-lg overflow-hidden">
    <!-- Konten Kiri -->
    <div class="lg:flex lg:w-1/2 bg-gray-100 p-8 items-center justify-center flex-col text-center">
      <img class="h-15 text-center mb-4" src="img/logo-ustj.png" alt="Logo USTJ">
      <h1 class="text-3xl font-bold text-gray-900">SIPP Teknik Informatika</h1>
      <p class="mt-2 text-lg text-gray-700">Fakultas Ilmu Komputer Dan Manajemen</p>
      <p class="mt-2 text-lg text-gray-700">Universitas Sains dan Teknologi Jayapura</p>
    </div>

    <!-- Konten Kanan -->
    <div class="flex flex-1 flex-col justify-center px-6 py-12 lg:w-1/2">
      <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <h1 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Masuk</h1>
      </div>

      <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-md">
        <form class="space-y-6" action="" method="POST">
          @csrf
          <div>
            <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Alamat Email</label>
            <div class="mt-2">
              <input id="email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-yellow-500 sm:text-sm sm:leading-6">
              @if ($errors->has('email'))
                <span class="text-red-500 text-sm">{{ $errors->first('email') }}</span>
              @endif
            </div>
          </div>

          <div>
            <div class="flex items-center justify-between">
              <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
              <div class="text-sm">
                <a href="#" class="font-semibold text-yellow-600 hover:text-yellow-500">Lupa password?</a>
              </div>
            </div>
            <div class="mt-2">
              <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-yellow-500 sm:text-sm sm:leading-6">
              @if ($errors->has('password'))
                <span class="text-red-500 text-sm">{{ $errors->first('password') }}</span>
              @endif
            </div>
          </div>

          <div>
            <button type="submit" class="flex w-full justify-center rounded-md bg-yellow-500 px-4 py-2 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-yellow-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-yellow-500">Masuk</button>
          </div>
          @if ($errors->has('login'))
            <div class="mt-4 text-red-500 text-sm text-center">
              {{ $errors->first('login') }}
            </div>
          @endif
        </form>
      </div>
    </div>
  </div>

  <!-- Sertakan SweetAlert -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <!-- Script untuk SweetAlert -->
  @if(session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Sukses!',
            text: '{{ session('success') }}',
        });
    </script>
  @endif

  @if($errors->any())
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Kesalahan!',
            text: '{{ $errors->first() }}',
        });
    </script>
  @endif

  <!-- Script untuk kesalahan login spesifik -->
  @if ($errors->has('login'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Gagal Masuk',
            text: 'Email atau password salah!',
        });
    </script>
  @endif
</body>
</html>
