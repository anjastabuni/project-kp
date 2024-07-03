<x-layout>
    <div class="py-12">
        <form action="" method="post">
        <h2 class="text-2xl font-bold">Tambah data Mahasiswa</h2>
        <div class="mt-8 max-w-md">
          <div class="grid grid-cols-1 gap-6">
            <label class="block">
              <span class="text-gray-700">NPM</span>
              <input
                type="text"
                class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0"
                placeholder=""
              />
            </label>
            <label class="block">
              <span class="text-gray-700">Nama Mahasiswa</span>
              <input
                type="text"
                class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0"
                placeholder=""
              />
            </label>
            <label class="block">
              <span class="text-gray-700">Email</span>
              <input
                type="email"
                class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0"
                placeholder="john@example.com"
              />
            </label>
            <label class="block">
              <span class="text-gray-700">Telp</span>
              <input
                type="number"
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