<x-app-layout>
  <!-- Header -->
  <header class="bg-gray-100 shadow-md mb-8 p-4">
      <nav class="flex justify-between items-center">
        <div class="flex items-center space-x-4">
          <div>
              <img src="/img/logo-ustj.png" width="60" alt="Logo USTJ">
          </div>
          <div>
              <h2 class="text-2xl font-bold text-gray-900">Sistem Informasi Pendataan Proposal</h2>
              <p class="text-lg text-gray-600">PRODI TEKNIK INFORMATIKA FIKOM-USTJ</p>
          </div>
        </div>
        
        <div class="relative" x-data="{ open: false }">
            <button @click="open = !open" class="flex items-center space-x-2">
                <img class="w-8 h-8 rounded-full" src="{{ asset('img/' . Auth::user()->profil) }}" alt="Profile Picture">
                <span class="text-gray-900">{{ Auth::user()->name }}</span></span>
                <svg class="h-5 w-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </button>
            <div x-show="open" @click.away="open = false" x-transition class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-2 z-10">
                <a href="{{ route('ketua-prodi.profil.index') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Edit Profil</a>
                <a href="/logout" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Log Out</a>
            </div>
        </div>
      </nav>
  </header>

  <!-- Content -->
  <div class="space-y-8">
    <!-- Welcome Card -->
    <div class="container mx-auto mt-10 p-6 bg-white shadow-md rounded-lg">
      <h2 class="text-2xl font-light text-gray-800">Selamat Datang Di</h2>
      <h1 class="text-3xl font-bold text-yellow-600 underlin py-1 rounded-lg mt-2">Aplikasi Pendataan Proposal</h1>
      <p class="text-gray-600 mt-2">Anda login sebagai Ketua Prodi Teknik Informatika</p>
    </div>
  


    
    <!-- Statistik -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
      <!-- Card 1 -->
      <div class="bg-white shadow-md rounded-lg p-6 hover:shadow-xl transition-shadow duration-300">
        <div class="flex items-center space-x-4">
            <i class="fas fa-users text-blue-500 text-3xl"></i>
            <div>
                <h2 class="text-xl font-bold text-gray-800">Total Mahasiswa</h2>
                <p class="mt-2 text-gray-600 text-lg">{{ $totalMahasiswa }}</p>
            </div>
        </div>
      </div>
      
      <!-- Card 2 -->
      <div class="bg-white shadow-md rounded-lg p-6 hover:shadow-xl transition-shadow duration-300">
        <div class="flex items-center space-x-4">
          <i class="fas fa-file-alt text-red-500 text-3xl"></i>
          <div>
              <h2 class="text-xl font-bold text-gray-800">Total Proposal</h2>
              <p class="mt-2 text-gray-600 text-lg">{{ $totalProposal }}</p>
          </div>
        </div>
      </div>
      
      <!-- Card 3 -->
      <div class="bg-white shadow-md rounded-lg p-6 hover:shadow-xl transition-shadow duration-300">
        <div class="flex items-center space-x-4">
            <i class="fas fa-check-circle text-green-500 text-3xl"></i>
            <div>
                <h2 class="text-xl font-bold text-gray-800">Selesai Proposal</h2>
                <p class="mt-2 text-gray-600 text-lg">{{ $selesaiProposal }}</p>
            </div>
        </div>
      </div>
      
      <!-- Card 4 -->
      <div class="bg-white shadow-md rounded-lg p-6 hover:shadow-xl transition-shadow duration-300">
        <div class="flex items-center space-x-4">
          <i class="fas fa-spinner text-yellow-500 text-3xl"></i>
          <div>
              <h2 class="text-xl font-bold text-gray-800">Proses Proposal</h2>
              <p class="mt-2 text-gray-600 text-lg">{{ $prosesProposal }}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
