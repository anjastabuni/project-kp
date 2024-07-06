<x-layout>
    <div class="container mx-auto py-12 px-4">
        <h2 class="text-3xl font-bold mb-8 text-gray-900 text-center">Tambah Data Mahasiswa</h2>
        <form action="{{ route('staf.mahasiswa.store') }}" method="post">
            @csrf
            <div class="max-w-lg mx-auto bg-white p-8 rounded-lg shadow-lg">
                <div class="grid grid-cols-1 gap-6">
                    @if ($errors->any())
                        <div class="mb-4">
                            <div class="text-red-600 font-medium">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endif
                    <label class="block">
                        <span class="text-gray-700">NPM</span>
                        <input
                            type="text" name="npm"
                            class="mt-1 block w-full rounded-md bg-gray-100 border border-gray-300 focus:border-yellow-500 focus:bg-white focus:ring-0"
                            placeholder="Masukkan NPM"
                            value="{{ old('npm') }}"
                        />
                    </label>
                    <label class="block">
                        <span class="text-gray-700">Nama Mahasiswa</span>
                        <input
                            type="text" name="nama"
                            class="mt-1 block w-full rounded-md bg-gray-100 border border-gray-300 focus:border-yellow-500 focus:bg-white focus:ring-0"
                            placeholder="Masukkan Nama Mahasiswa"
                            value="{{ old('nama') }}"
                        />
                    </label>
                    <label class="block">
                        <span class="text-gray-700">Angkatan</span>
                        <input
                            type="text" name="angkatan"
                            class="mt-1 block w-full rounded-md bg-gray-100 border border-gray-300 focus:border-yellow-500 focus:bg-white focus:ring-0"
                            placeholder="Masukkan Angkatan"
                            value="{{ old('angkatan') }}"
                        />
                    </label>
                    <label class="block">
                        <span class="text-gray-700">Email</span>
                        <input
                            type="email" name="email"
                            class="mt-1 block w-full rounded-md bg-gray-100 border border-gray-300 focus:border-yellow-500 focus:bg-white focus:ring-0"
                            placeholder="Masukkan Email"
                            value="{{ old('email') }}"
                        />
                    </label>
                    <label class="block">
                        <span class="text-gray-700">Telp</span>
                        <input
                            type="number" name="telp"
                            class="mt-1 block w-full rounded-md bg-gray-100 border border-gray-300 focus:border-yellow-500 focus:bg-white focus:ring-0"
                            placeholder="Masukkan Nomor Telepon"
                            value="{{ old('telp') }}"
                        />
                    </label>
                </div>
                <button type="submit" class="mt-6 w-full rounded-md bg-yellow-500 text-gray-800 px-4 py-2 hover:bg-yellow-600 transition-colors duration-300">Tambahkan</button>
            </div>
        </form>
    </div>
  </x-layout>
  