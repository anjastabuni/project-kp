<x-layout>
    <div class="container mx-auto mt-10">
      <h1 class="text-2xl font-bold mb-5">Data Mahasiswa Proposal</h1>
      
      <div class="flex justify-between items-center mb-3">
        <a href="/tambah-mhs" class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-700">Tambah Mahasiswa</a>
        <div class="flex space-x-4">
          <input type="text" placeholder="Cari Mahasiswa..." class="my-5 px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
          <select class="my-5 px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            <option value="">Filter Tahun</option>
            <option value="2021">2023 Ganjil</option>
            <option value="2022">2023 Genap</option>
            <option value="2023">2024 Ganjil</option>
          </select>
        </div>
      </div>
      
      <table class="min-w-full bg-white mt-5">
        <thead class="bg-gray-800 text-white">
          <tr>
            <th class="w-1/12 py-3 px-4 uppercase font-semibold text-sm">No</th>
            <th class="w-2/12 py-3 px-4 uppercase font-semibold text-sm">NPM</th>
            <th class="w-2/12 py-3 px-4 uppercase font-semibold text-sm">Nama Mahasiswa</th>
            <th class="w-3/12 py-3 px-4 uppercase font-semibold text-sm">Email</th>
            <th class="w-2/12 py-3 px-4 uppercase font-semibold text-sm">Telp</th>
            <th class="w-1/12 py-3 px-4 uppercase font-semibold text-sm">Opsi</th>
          </tr>
        </thead>
        <tbody class="text-gray-700">
          <tr>
            <td class="py-3 px-4">1</td>
            <td class="py-3 px-4">18411017</td>
            <td class="py-3 px-4">Rebly</td>
            <td class="py-3 px-4">reblymegibtabuni@gmail.com</td>
            <td class="py-3 px-4">081248069721</td>
            <td class="py-3 px-4">
              <button class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-700">Edit</button>
              <button class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-700">Delete</button>
            </td>
          </tr>
          <tr class="bg-gray-100">
            <td class="py-3 px-4">2</td>
            <td class="py-3 px-4">18411017</td>
            <td class="py-3 px-4">Rebly</td>
            <td class="py-3 px-4">reblymegibtabuni@gmail.com</td>
            <td class="py-3 px-4">081248069721</td>
            <td class="py-3 px-4">
              <button class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-700">Edit</button>
              <button class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-700">Delete</button>
            </td>
          </tr>
          <!-- Tambahkan baris lain sesuai kebutuhan -->
        </tbody>
      </table>
    </div>
  </x-layout>
  