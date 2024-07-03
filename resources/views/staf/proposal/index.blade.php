<x-layout>
  <div class="container mx-auto mt-10 px-4">
      <h1 class="text-3xl font-bold mb-6 text-gray-900">Data Proposal</h1>
      
      <div class="flex justify-between items-center mb-6">
          <a href="{{ route('staf.proposal.create') }}" class="bg-yellow-500 text-gray-800 px-4 py-2 rounded-lg shadow hover:bg-yellow-600 transition-colors duration-300">Tambah Data</a>
          <div class="relative w-full md:w-1/3">
              <input type="text" placeholder="Cari Proposal..." class="w-full px-4 py-2 border border-gray-300 rounded-lg bg-gray-100 text-gray-700 focus:outline-none focus:ring-2 focus:ring-yellow-500">
              <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                  <i class="fas fa-search text-gray-500"></i>
              </div>
          </div>
      </div>
      
      <table class="min-w-full mt-5 table-auto border-collapse border border-gray-300 rounded-lg overflow-hidden">
          <thead class="bg-gray-900 text-white">
              <tr>
                  <th class="w-1/12 py-3 px-4 uppercase font-semibold text-sm border border-gray-300">No</th>
                  <th class="w-3/12 py-3 px-4 uppercase font-semibold text-sm border border-gray-300">Judul Proposal</th>
                  <th class="w-3/12 py-3 px-4 uppercase font-semibold text-sm border border-gray-300">Dosen Pembimbing</th>
                  <th class="w-2/12 py-3 px-4 uppercase font-semibold text-sm border border-gray-300">Tanggal Pengajuan</th>
                  <th class="w-1/12 py-3 px-4 uppercase font-semibold text-sm border border-gray-300">Opsi</th>
              </tr>
          </thead>
          <tbody class="bg-white text-gray-700">
              @foreach ($proposals as $proposal)
              <tr class="hover:bg-gray-50 transition-colors duration-200">
                  <td class="py-3 px-4 border border-gray-300">{{ $no++ }}</td>
                  <td class="py-3 px-4 border border-gray-300">{{ $proposal->judul }}</td>
                  <td class="py-3 px-4 border border-gray-300">{{ $proposal->pembimbing }}</td>
                  <td class="py-3 px-4 border border-gray-300">{{ $proposal->tgl_pengajuan }}</td>
                  <td class="py-3 px-4 border border-gray-300 flex space-x-2">
                      <a href="{{ route('staf.proposal.edit', $proposal->id_proposal) }}" class="bg-yellow-500 text-gray-800 px-3 py-1 rounded hover:bg-yellow-600 transition-colors duration-300">Edit</a>
                      <form action="{{ route('staf.proposal.destroy', $proposal->id_proposal) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus proposal ini?');" class="inline-block">
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
