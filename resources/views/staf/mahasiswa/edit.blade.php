<x-layout>
    <div class="py-12">
        <h2 class="text-2xl font-bold">Tambah data Mahasiswa</h2>
        <form action="{{ route('staf.mahasiswa.update', $mahasiswa->npm) }}" method="post">
            @csrf
            @method('PUT')
        <div class="mt-8 max-w-md">
          <div class="grid grid-cols-1 gap-6">
            <label class="block">
              <span class="text-gray-700">NPM</span>
              <input
                type="text" name="npm" value="{{ $mahasiswa->npm }}"
                class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0"
                placeholder=""
              />
            </label>
            <label class="block">
              <span class="text-gray-700">Nama Mahasiswa</span>
              <input
                type="text" name="nama" value="{{ $mahasiswa->nama }}"
                class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0"
                placeholder=""
              />
            </label>
            <label class="block">
              <span class="text-gray-700">Angkatan</span>
              <input
                type="text" name="angkatan" value="{{ $mahasiswa->angkatan }}"
                class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0"
                placeholder=""
              />
            </label>
            <label class="block">
              <span class="text-gray-700">Email</span>
              <input
                type="email" name="email" value="{{ $mahasiswa->email }}"
                class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0"
                placeholder=""
              />
            </label>
            <label class="block">
              <span class="text-gray-700">Telp</span>
              <input
                type="number" name="telp" value="{{ $mahasiswa->telp }}"
                class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0"
                placeholder=""
              />
            </label>
            
          </div>
          <button type="submit" class="mt-5 w-full rounded-md bg-green-500 text-white px-2 py-2 hover:bg-green-700">Tambahkan</button>
        </div>
        </form>
      </div>
</x-layout>