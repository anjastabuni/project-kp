<!-- Sidebar -->
<aside class="bg-gray-800 w-full md:w-64 h-screen md:h-full md:flex md:flex-col">
    <div class="text-white p-4 text-xl font-bold hidden md:block">
      Dashboard Ketua Prodi
    </div>
    
    <nav class="mt-4 md:mt-0 flex md:flex-col">
      <!-- Dashboard -->
      <a href="{{ route('ketua-prodi.dashboard') }}" class="flex items-center py-2.5 px-4 text-white hover:bg-gray-700 transition duration-200">
        <i class="fas fa-tachometer-alt text-gray-400 mr-3"></i>
        <span>Dashboard</span>
      </a>
      
      
      <!-- Other Menu Items -->
      <a href="{{ route('ketua-prodi.laporan.index') }}" class="flex items-center py-2.5 px-4 text-white hover:bg-gray-700 transition duration-200">
        <i class="fas fa-archive text-gray-400 mr-3"></i>
        <span>Laporan</span>
      </a>
      <a href="{{ route('ketua-prodi.profil.index') }}" class="flex items-center py-2.5 px-4 text-white hover:bg-gray-700 transition duration-200">
        <i class="fas fa-user-cog text-gray-400 mr-3"></i>
        <span>Profil</span>
      </a>
      <a href="/logout" class="flex items-center py-2.5 px-4 text-white hover:bg-gray-700 transition duration-200">
        <i class="fas fa-sign-out-alt text-gray-400 mr-3"></i>
        <span>Keluar</span>
      </a>
    </nav>
  </aside>
  