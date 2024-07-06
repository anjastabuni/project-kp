<x-layout>
  <div class="container mx-auto mt-10 px-4">
      <h1 class="text-3xl font-bold mb-6 text-gray-900">Data Mahasiswa</h1>
      
      <div class="flex justify-between items-center mb-6">
          <a href="{{ route('staf.mahasiswa.create') }}" class="bg-yellow-500 text-gray-800 px-4 py-2 rounded-lg shadow hover:bg-yellow-600 transition-colors duration-300">Tambah Mahasiswa</a>
          <div class="relative w-full md:w-1/3">
            <input type="text" placeholder="Cari Proposal..." class="w-full px-4 py-2 border border-gray-300 rounded-lg bg-gray-100 text-gray-700 focus:outline-none focus:ring-2 focus:ring-yellow-500">
            <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                <i class="fas fa-search text-gray-500"></i>
            </div>
        </div>
      </div>
      
      <table class="min-w-full bg-white mt-5 border border-gray-300 rounded-lg overflow-hidden">
          <thead class="bg-gray-800 text-white">
              <tr>
                  <th class="w-1/12 py-3 px-4 uppercase font-semibold text-sm border border-gray-300">No</th>
                  <th class="w-2/12 py-3 px-4 uppercase font-semibold text-sm border border-gray-300">NPM</th>
                  <th class="w-2/12 py-3 px-4 uppercase font-semibold text-sm border border-gray-300">Nama Mahasiswa</th>
                  <th class="w-2/12 py-3 px-4 uppercase font-semibold text-sm border border-gray-300">Angkatan</th>
                  <th class="w-3/12 py-3 px-4 uppercase font-semibold text-sm border border-gray-300">Email</th>
                  <th class="w-2/12 py-3 px-4 uppercase font-semibold text-sm border border-gray-300">Telp</th>
                  <th class="w-1/12 py-3 px-4 uppercase font-semibold text-sm border border-gray-300">Opsi</th>
              </tr>
          </thead>
          <tbody class="text-gray-700">
              @foreach ($mahasiswas as $mahasiswa)
              <tr class="hover:bg-gray-50 transition-colors duration-200">
                  <td class="py-3 px-4 border border-gray-300">{{ $no++ }}</td>
                  <td class="py-3 px-4 border border-gray-300">{{ $mahasiswa->npm }}</td>
                  <td class="py-3 px-4 border border-gray-300">{{ $mahasiswa->nama }}</td>
                  <td class="py-3 px-4 border border-gray-300">{{ $mahasiswa->angkatan }}</td>
                  <td class="py-3 px-4 border border-gray-300">{{ $mahasiswa->email }}</td>
                  <td class="py-3 px-4 border border-gray-300">{{ $mahasiswa->telp }}</td>
                  <td class="py-3 px-4 border border-gray-300 flex space-x-2">
                      <a href="{{ route('staf.mahasiswa.edit', $mahasiswa->npm) }}" class="bg-yellow-500 text-gray-800 px-3 py-1 rounded hover:bg-yellow-600 transition-colors duration-300">Edit</a>
                      <form action="{{ route('staf.mahasiswa.destroy', $mahasiswa->npm) }}" method="POST"  class="delete-form">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 transition-colors duration-300">Hapus</button>
                      </form>
                  </td>
              </tr>
              @endforeach
          </tbody>
      </table>
  </div>
</x-layout>
