<x-layout>
    <div class="container mx-auto mt-10 px-4">
        <h1 class="text-3xl font-bold mb-6 text-gray-900">Data Proposal</h1>
        
        <div class="flex flex-col md:flex-row justify-between items-center mb-6 space-y-4 md:space-y-0 md:space-x-4">
            <a href="{{ route('staf.proposal.create') }}" class="bg-yellow-500 text-gray-800 px-4 py-2 rounded-lg shadow hover:bg-yellow-600 transition-colors duration-300">
                Tambah Data
            </a>
            
            <form action="" method="GET" class="relative w-full md:w-1/2 lg:w-1/3">
                <input 
                    type="text" 
                    name="search" 
                    value="" 
                    placeholder="Cari berdasarkan ID Proposal atau Judul Proposal..." 
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg bg-white focus:outline-none focus:ring-2 focus:ring-yellow-500"
                />
                <button 
                    type="submit" 
                    class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-yellow-500 text-white px-4 py-2 rounded-lg shadow hover:bg-yellow-600 transition-colors duration-300 focus:outline-none focus:ring-2 focus:ring-yellow-500"
                >
                    Cari
                </button>
            </form>
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
