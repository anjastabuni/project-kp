<!-- Sidebar -->
<aside class="bg-gray-800 w-full md:w-64 h-screen md:h-full md:flex md:flex-col">
  <div class="text-white p-4 text-xl font-bold hidden md:block">
    Dashboard Staf
  </div>
  
  <nav class="mt-4 md:mt-0 flex md:flex-col">
    <!-- Dashboard -->
    <a href="{{ route('staf.dashboard') }}" class="flex items-center py-2.5 px-4 text-white hover:bg-gray-700 transition duration-200">
      <i class="fas fa-tachometer-alt text-gray-400 mr-3"></i>
      <span>Dashboard</span>
    </a>
    
    <!-- Data Master Dropdown -->
    <div x-data="{ open: false }" class="relative">
      <a href="#" @click.prevent="open = !open" class="flex items-center py-2.5 px-4 text-white hover:bg-gray-700 transition duration-200">
        <i class="fas fa-database text-gray-400 mr-3"></i>
        <span>Data Master</span>
        <svg class="ml-auto h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
        </svg>
      </a>
      <div x-show="open" @click.away="open = false" x-transition class="bg-gray-800 text-white py-2 mt-1 rounded-md w-full z-10">
        <a href="{{ route('staf.mahasiswa.index') }}" class="flex items-center py-2.5 px-4 hover:bg-gray-700 transition duration-200">
          <i class="fas fa-user-graduate text-gray-400 mr-3"></i>
          <span>Mahasiswa</span>
        </a>
        <a href="{{ route('staf.proposal.index') }}" class="flex items-center py-2.5 px-4 hover:bg-gray-700 transition duration-200">
          <i class="fas fa-file-alt text-gray-400 mr-3"></i>
          <span>Proposal</span>
        </a>
        
        <a href="{{ route('staf.status.index') }}" class="flex items-center py-2.5 px-4 hover:bg-gray-700 transition duration-200">
          <i class="fas fa-clipboard-list text-gray-400 mr-3"></i>
          <span>Status</span>
        </a>
      </div>
    </div>
    
    <!-- Other Menu Items -->
    <a href="{{ route('staf.data-proposal.index') }}" class="flex items-center py-2.5 px-4 text-white hover:bg-gray-700 transition duration-200">
      <i class="fas fa-archive text-gray-400 mr-3"></i>
      <span>Data Proposal</span>
    </a>
    <a href="{{ route('staf.profil.index') }}" class="flex items-center py-2.5 px-4 text-white hover:bg-gray-700 transition duration-200">
      <i class="fas fa-user-cog text-gray-400 mr-3"></i>
      <span>Profil</span>
    </a>
    <a href="/logout" class="flex items-center py-2.5 px-4 text-white hover:bg-gray-700 transition duration-200">
      <i class="fas fa-sign-out-alt text-gray-400 mr-3"></i>
      <span>Keluar</span>
    </a>
  </nav>
</aside>
