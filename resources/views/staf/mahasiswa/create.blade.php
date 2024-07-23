<x-layout>
    <div class="container mx-auto py-12 px-4">
        <h2 class="text-3xl font-bold mb-8 text-gray-900 text-center">Tambah Data Mahasiswa</h2>
        <form action="{{ route('staf.mahasiswa.store') }}" method="post">
            @csrf
            <div class="max-w-3xl mx-auto bg-white p-8 rounded-lg shadow-lg">
                <div class="grid grid-cols-1 gap-6 md:grid-cols-2 md:gap-8">
                    @if ($errors->any())
                        <div class="col-span-2 mb-4">
                            <div class="text-red-600 font-medium">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endif
                    <!-- NPM -->
                    <div class="col-span-1">
                        <label for="npm" class="block">
                            <span class="text-gray-700">NPM</span>
                            <input
                                type="text" name="npm" id="npm"
                                class="mt-1 block w-full rounded-md bg-gray-100 border border-gray-300 focus:border-yellow-500 focus:bg-white focus:ring-0"
                                placeholder="Masukkan NPM"
                                value="{{ old('npm') }}"
                            />
                            @error('npm')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </label>
                    </div>
                    <!-- Nama Mahasiswa -->
                    <div class="col-span-1">
                        <label for="nama" class="block">
                            <span class="text-gray-700">Nama Mahasiswa</span>
                            <input
                                type="text" name="nama" id="nama"
                                class="mt-1 block w-full rounded-md bg-gray-100 border border-gray-300 focus:border-yellow-500 focus:bg-white focus:ring-0"
                                placeholder="Masukkan Nama Mahasiswa"
                                value="{{ old('nama') }}"
                            />
                            @error('nama')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </label>
                    </div>
                    <!-- Angkatan -->
                    <div class="col-span-1">
                        <label for="angkatan" class="block">
                            <span class="text-gray-700">Angkatan</span>
                            <input
                                type="text" name="angkatan" id="angkatan"
                                class="mt-1 block w-full rounded-md bg-gray-100 border border-gray-300 focus:border-yellow-500 focus:bg-white focus:ring-0"
                                placeholder="Masukkan Angkatan"
                                value="{{ old('angkatan') }}"
                            />
                            @error('angkatan')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </label>
                    </div>
                    <!-- Email -->
                    {{-- <div class="col-span-1">
                        <label for="email" class="block">
                            <span class="text-gray-700">Email</span>
                            <input
                                type="email" name="email" id="email"
                                class="mt-1 block w-full rounded-md bg-gray-100 border border-gray-300 focus:border-yellow-500 focus:bg-white focus:ring-0"
                                placeholder="Masukkan Email"
                                value="{{ old('email') }}"
                            />
                            @error('email')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </label>
                    </div> --}}
                    <!-- Telp -->
                    <div class="col-span-1">
                        <label for="telp" class="block">
                            <span class="text-gray-700">Telp</span>
                            <input
                                type="number" name="telp" id="telp"
                                class="mt-1 block w-full rounded-md bg-gray-100 border border-gray-300 focus:border-yellow-500 focus:bg-white focus:ring-0"
                                placeholder="Masukkan Nomor Telepon"
                                value="{{ old('telp') }}"
                            />
                            @error('telp')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </label>
                    </div>
                </div>
                <button type="submit" class="mt-6 w-full rounded-md bg-yellow-500 text-gray-800 px-4 py-2 hover:bg-yellow-600 transition-colors duration-300">Tambahkan</button>
            </div>
        </form>
    </div>
</x-layout>
