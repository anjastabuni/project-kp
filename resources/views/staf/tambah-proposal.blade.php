<x-layout>
    <div class="py-12">
        <h2 class="text-2xl font-bold">Tambah Data Proposal</h2>
        <form action="" method="post">
        <div class="mt-8 max-w-md">
          <div class="grid grid-cols-1 gap-6">
            <label class="block">
              <span class="text-gray-700">Judul Proposal</span>
              <input
                type="text"
                class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0"
                placeholder=""
              />
            </label>
            <label class="block">
              <span class="text-gray-700">Nama Pembimbing</span>
              <input
                type="text"
                class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0"
                placeholder=""
              />
            </label>
            <label class="block">
                <span class="text-gray-700">Tanggal Daftar</span>
                <input
                  type="date"
                  class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0"
                />
              </label>
          </div>
          <button type="submit" class="mt-5 w-full rounded-md bg-green-500 text-white px-2 py-2 hover:bg-green-700">Tambahkan</button>
        </div>
        
        </form>
    </div>
</x-layout>