<x-layout>
    <div x-data="{ showPrint: false }" class="container mx-auto mt-10">
         <!-- Kop Laporan (hidden by default) -->
         <div x-show="showPrint" class="print-header   mb-10 border-b-2 pb-4" style="display: none; border-bottom: 3px double black;">
            <div class="flex items-center justify-center">
                <div class="">
                    <img src="{{ asset('img/logo-ustj.png') }}" alt="Logo Kampus"  style="max-height: 100px;" class="pr-4">
                </div>
                <div class="text-center ps-4">
                    <h2 class="text-2xl font-bold">Universitas Sains Dan Teknologi Jayapura</h2>
                    <h3 class="text-xl">Fakultas Ilmu Komputer Dan Manajemen</h3>
                    <h3 class="text-xl">Program Studi Teknik Informatika</h3>
                </div>
            </div>
        </div>
        <h1 class="text-2xl font-bold mb-5 ">Data Proposal</h1>
        
        <div class="flex flex-col md:flex-row justify-between items-center mb-2 print-hide">
            <form action="{{ route('staf.data-proposal.index') }}" method="GET" class="flex-1 md:mr-4 mb-4 md:mb-0">
                <div class="flex items-center">
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
            
            <div class="flex flex-col md:flex-row space-y-4 md:space-y-0 md:space-x-4">
                {{-- <form action="{{ route('staf.data-proposal.index') }}" method="GET" class="flex-1">
                    <select name="tahun" class="w-full px-6 pr-9 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500" onchange="this.form.submit()">
                        <option value="">Filter Tahun</option>
                        <option value="2020" {{ request('tahun') == '2020' ? 'selected' : '' }}>2020</option>
                        <option value="2019" {{ request('tahun') == '2019' ? 'selected' : '' }}>2019</option>
                        <option value="2018" {{ request('tahun') == '2018' ? 'selected' : '' }}>2018</option>
                    </select>
                </form> --}}
                <form action="{{ route('staf.data-proposal.index') }}" method="GET" class="flex-1">
                    <select name="status" class="w-full px-6 pr-9 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500" onchange="this.form.submit()">
                        <option value="">Filter Status</option>
                        @foreach($statuses as $status)
                            <option value="{{ $status->id_status }}" {{ request('status') == $status->id_status ? 'selected' : '' }}>
                                {{ $status->status }}
                            </option>
                        @endforeach
                    </select>
                </form>
                <button @click="showPrint = true; window.print(); showPrint = false;" class="px-4 py-2 bg-yellow-500 text-white rounded-lg hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-500 flex items-center space-x-2">
                    <i class="fa-solid fa-print"></i>
                    <span>Cetak</span>
                </button>
            </div>
        </div>
        
        
        <table class="min-w-full bg-white mt-5 border border-gray-300 rounded-lg overflow-hidden">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="w-1/12 py-3 px-4 uppercase font-semibold text-sm border border-gray-300">No</th>
                    <th class="w-2/12 py-3 px-4 uppercase font-semibold text-sm border border-gray-300">NPM</th>
                    <th class="w-2/12 py-3 px-4 uppercase font-semibold text-sm border border-gray-300">Nama Mahasiswa</th>
                    <th class="w-3/12 py-3 px-4 uppercase font-semibold text-sm border border-gray-300">Judul Tugas Akhir</th>
                    <th class="w-2/12 py-3 px-4 uppercase font-semibold text-sm border border-gray-300">Pembimbing</th>
                    {{-- <th class="w-3/12 py-3 px-4 uppercase font-semibold text-sm border border-gray-300">Status</th> --}}
                    <th class="w-3/12 py-3 px-4 uppercase font-semibold text-sm border border-gray-300">Keterangan</th>
                    <th class="w-3/12 py-3 px-4 uppercase font-semibold text-sm border border-gray-300">Semester Genap</th>
                    {{-- <th class="w-2/12 py-3 px-4 uppercase font-semibold text-sm border border-gray-300">Telp/WA</th> --}}
                </tr>
            </thead>
            <tbody class="text-gray-700">
                @forelse($proposals as $proposal)
                    <tr class="hover:bg-gray-50 transition-colors duration-200">
                        <td class="py-3 px-4 border border-gray-300">{{ $no++ }}</td>
                        <td class="py-3 px-4 border border-gray-300">{{ $proposal->id_mahasiswa ?? 'N/A'}}</td>
                        <td class="py-3 px-4 border border-gray-300">{{ $proposal->mahasiswa->nama ?? 'N/A'}}</td>
                        <td class="py-3 px-4 border border-gray-300">{{ $proposal->judul ?? 'N/A'}}</td>
                        <td class="py-3 px-4 border border-gray-300">{{ $proposal->pembimbing ?? 'N/A'}}</td>
                        {{-- <td class="py-3 px-4 border border-gray-300">{{ $proposal->status->status ?? 'N/A'}}</td> --}}
                        <td class="py-3 px-4 border border-gray-300">{{ $proposal->status->keterangan ?? 'N/A'}}</td>
                        <td class="py-3 px-4 border border-gray-300">{{ $proposal->tgl_pengajuan ?? 'N/A'}}</td>
                        {{-- <td class="py-3 px-4 border border-gray-300">{{ $proposal->mahasiswa->telp ?? 'N/A'}}</td> --}}
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="py-3 px-4 border border-gray-300 text-center">Tidak ada data proposal</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        <!-- Footer Laporan (hidden by default) -->
    <div x-show="showPrint" class="print-footer mt-20" style="display: none;">
        <div class="text-end">
            <p class="text-lg ">Mengetahui:</p>
            <p class="mb-12">Ketua Prodi</p>
            <p class="font-bold underline">Rizkial Achmad, S.Kom., M.T</p>
            <p class="">NIDS. 1208098108</p>
        </div>
    </div>
    </div>
    <style>
        @media print {
            /* Hide all elements by default */
            body * {
                visibility: hidden;
            }
            /* Show the container and its children */
            .container, .container * {
                visibility: visible;
            }
            /* Specifically hide the other headers and footers */
            .print-header, .print-footer {
                display: block !important;
                visibility: visible;
            }
            .print-footer {
                display: block !important;
                visibility: visible;
            }
            .print-header {
                visibility: visible;
            }
            .print-footer{
                visibility: visible;
            }
            /* Ensure the table is fully visible */
            table {
                visibility: visible;
            }
            /* Position the container at the top left */
            .container {
                position: absolute;
                left: 0;
                top: 0;
                width: 100%;
            }
            /* Hide filter and search elements */
            .print-hide {
                display: none;
            }
        }
    </style>
</x-layout>
