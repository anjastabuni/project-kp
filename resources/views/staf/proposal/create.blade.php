<x-layout>
    <div class="container mx-auto py-12 px-4">
        <h2 class="text-3xl font-bold mb-8 text-gray-900 text-center">Tambah Data Proposal</h2>
        <form action="{{ route('staf.proposal.store') }}" method="post">
            @csrf
            <div class="max-w-3xl mx-auto bg-white p-8 rounded-lg shadow-lg">
                <div class="grid grid-cols-1 gap-6 md:grid-cols-2 md:gap-8">
                    <!-- ID Proposal -->
                    <div class="col-span-1">
                        <label class="block">
                            <span class="text-gray-700">ID Proposal</span>
                            <input
                                type="text" name="id_proposal"
                                class="mt-1 block w-full rounded-md bg-gray-100 border border-gray-300 focus:border-yellow-500 focus:bg-white focus:ring-0"
                                placeholder="Masukkan ID Proposal"
                                value="{{ old('id_proposal') }}"
                            />
                            @error('id_proposal')
                                <span class="text-red-500 text-sm">{{ $message }}</span>  <!-- Menambahkan pesan error untuk id_proposal -->
                            @enderror
                        </label>
                    </div>
                    <!-- NPM -->
                    <div class="col-span-1">
                        <label class="block">
                            <span class="text-gray-700">NPM</span>
                            <input
                                type="text" name="id_mahasiswa"
                                class="mt-1 block w-full rounded-md bg-gray-100 border border-gray-300 focus:border-yellow-500 focus:bg-white focus:ring-0"
                                placeholder="Masukkan NPM Mahasiswa"
                                value="{{ old('id_mahasiswa') }}"
                            />
                            @error('id_mahasiswa')
                                <span class="text-red-500 text-sm">{{ $message }}</span>  <!-- Menambahkan pesan error untuk id_mahasiswa -->
                            @enderror
                        </label>
                    </div>
                    <!-- Judul Proposal -->
                    <div class="col-span-1">
                        <label class="block">
                            <span class="text-gray-700">Judul Proposal</span>
                            <input
                                type="text" name="judul"
                                class="mt-1 block w-full rounded-md bg-gray-100 border border-gray-300 focus:border-yellow-500 focus:bg-white focus:ring-0"
                                placeholder="Masukkan Judul Proposal"
                                value="{{ old('judul') }}"
                            />
                            @error('judul')
                                <span class="text-red-500 text-sm">{{ $message }}</span>  <!-- Menambahkan pesan error untuk judul -->
                            @enderror
                        </label>
                    </div>
                    <!-- Nama Pembimbing -->
                    <div class="col-span-1">
                        <label class="block">
                            <span class="text-gray-700">Nama Pembimbing</span>
                            <input
                                type="text" name="pembimbing"
                                class="mt-1 block w-full rounded-md bg-gray-100 border border-gray-300 focus:border-yellow-500 focus:bg-white focus:ring-0"
                                placeholder="Masukkan Nama Pembimbing"
                                value="{{ old('pembimbing') }}"
                            />
                            @error('pembimbing')
                                <span class="text-red-500 text-sm">{{ $message }}</span>  <!-- Menambahkan pesan error untuk pembimbing -->
                            @enderror
                        </label>
                    </div>
                    <!-- Tanggal Pengajuan -->
                    <div class="col-span-1">
                        <label class="block">
                            <span class="text-gray-700">Tanggal Pengajuan</span>
                            <input
                                type="date" name="tgl_pengajuan"
                                class="mt-1 block w-full rounded-md bg-gray-100 border border-gray-300 focus:border-yellow-500 focus:bg-white focus:ring-0"
                                value="{{ old('tgl_pengajuan') }}"
                            />
                            @error('tgl_pengajuan')
                                <span class="text-red-500 text-sm">{{ $message }}</span>  <!-- Menambahkan pesan error untuk tgl_pengajuan -->
                            @enderror
                        </label>
                    </div>
                    <!-- Status Proposal -->
                    <div class="col-span-1">
                        <label class="block">
                            <span class="text-gray-700">Status Proposal</span>
                            <select
                                name="id_status"
                                class="mt-1 block w-full rounded-md bg-gray-100 border border-gray-300 focus:border-yellow-500 focus:bg-white focus:ring-0"
                            >
                                <option value="">Pilih Status</option>
                                @foreach($statuses as $status)
                                    <option value="{{ $status->id_status }}">{{ $status->status }}</option>
                                @endforeach
                            </select>
                            @error('id_status')
                                <span class="text-red-500 text-sm">{{ $message }}</span>  <!-- Menambahkan pesan error untuk id_status -->
                            @enderror
                        </label>
                    </div>
                </div>
                <button type="submit" class="mt-6 w-full rounded-md bg-yellow-500 text-gray-800 px-4 py-2 hover:bg-yellow-600 transition-colors duration-300">Tambahkan</button>
            </div>
        </form>
    </div>
</x-layout>