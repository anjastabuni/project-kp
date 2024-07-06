<x-app-layout>
    <div class="container mx-auto mt-10">
        <h1 class="text-2xl font-bold mb-5">Data Proposal Mahasiswa</h1>
        
        <div class="flex justify-between items-center mb-3">
            
            <div class="flex space-x-4">
                <form action="{{ route('ketua-prodi.laporan.index') }}" method="GET">
                    <select name="tahun" class="my-5 px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500" onchange="this.form.submit()">
                        <option value="">Tahun</option>
                        <option value="2019" {{ request('tahun') == '2019' ? 'selected' : '' }}>2019</option>
                        <option value="2018" {{ request('tahun') == '2018' ? 'selected' : '' }}>2018</option>
                        <option value="2017" {{ request('tahun') == '2017' ? 'selected' : '' }}>2017</option>
                    </select>
                </form>
                <form action="{{ route('ketua-prodi.laporan.index') }}" method="GET">
                    <select name="status" class="my-5 px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500" onchange="this.form.submit()">
                        <option value="">Status</option>
                        @foreach($statuses as $status)
                            <option value="{{ $status->id_status }}" {{ request('status') == $status->id_status ? 'selected' : '' }}>
                                {{ $status->status }}
                            </option>
                        @endforeach
                    </select>
                </form>
            </div>
            <form action="{{ route('ketua-prodi.laporan.index') }}" method="GET">
                <div class="flex items-center mb-4">
                    <input 
                        type="text" 
                        name="search" 
                        value="{{ request('search') }}" 
                        placeholder="Cari Mahasiswa berdasarkan NPM atau Nama..." 
                        class="my-5 px-4 py-2 border rounded-lg w-full md:w-1/2 focus:outline-none focus:ring-2 focus:ring-yellow-500"
                    />
                    <button type="submit" class="ml-2 bg-yellow-500 text-white px-4 py-2 rounded-lg hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-500">
                        Cari
                    </button>
                </div>
            </form>
            <!-- Tombol Cetak -->
        <div class="flex space-x-4">
            <button onclick="window.print()" class="px-4 py-2 bg-yellow-500 text-white rounded-lg hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-500">
                Cetak
            </button>
        </div>
        </div>

        
        
        <table class="min-w-full bg-white mt-5 border border-gray-300 rounded-lg overflow-hidden">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="w-1/12 py-3 px-4 uppercase font-semibold text-sm border border-gray-300">No</th>
                    <th class="w-2/12 py-3 px-4 uppercase font-semibold text-sm border border-gray-300">NPM</th>
                    <th class="w-2/12 py-3 px-4 uppercase font-semibold text-sm border border-gray-300">Nama Mahasiswa</th>
                    <th class="w-2/12 py-3 px-4 uppercase font-semibold text-sm border border-gray-300">Telp</th>
                    <th class="w-3/12 py-3 px-4 uppercase font-semibold text-sm border border-gray-300">Judul Proposal</th>
                    <th class="w-2/12 py-3 px-4 uppercase font-semibold text-sm border border-gray-300">Dosen Pembimbing</th>
                    <th class="w-3/12 py-3 px-4 uppercase font-semibold text-sm border border-gray-300">Status</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                @forelse($proposals as $index => $proposal)
                    <tr class="hover:bg-gray-50 transition-colors duration-200">
                        <td class="py-3 px-4 border border-gray-300">{{ $index + 1 }}</td>
                        <td class="py-3 px-4 border border-gray-300">{{ $proposal->id_mahasiswa }}</td>
                        <td class="py-3 px-4 border border-gray-300">{{ $proposal->mahasiswa->nama }}</td>
                        <td class="py-3 px-4 border border-gray-300">{{ $proposal->mahasiswa->telp }}</td>
                        <td class="py-3 px-4 border border-gray-300">{{ $proposal->judul }}</td>
                        <td class="py-3 px-4 border border-gray-300">{{ $proposal->pembimbing }}</td>
                        <td class="py-3 px-4 border border-gray-300">{{ $proposal->status->status }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="py-3 px-4 border border-gray-300 text-center">Tidak ada data proposal</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <style>
        @media print {
            body * {
                visibility: hidden;
            }
            .container, .container * {
                visibility: visible;
            }
            .container {
                position: absolute;
                left: 0;
                top: 0;
                width: 100%;
            }
        }
    </style>
</x-app-layout>
