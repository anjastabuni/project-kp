<x-app-layout>
  <div class="container mx-auto mt-10">
      <h1 class="text-2xl font-bold mb-5">Laporan Proposal</h1>
      
      <div class="flex justify-between items-center mb-3">
          <div class="flex space-x-4">
              <select class="my-5 px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500">
                  <option value="">Filter Tahun</option>
                  <option value="2021">2023 Ganjil</option>
                  <option value="2022">2023 Genap</option>
                  <option value="2023">2024 Ganjil</option>
              </select>
              <select class="my-5 px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500">
                  <option value="">Filter Status</option>
                  <option value="2021">Selesai</option>
                  <option value="2022">Proses</option>
              </select>
          </div>
          <button onclick="window.print()" class="my-5 px-4 py-2 bg-yellow-500 text-white rounded-lg hover:bg-yellow-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500">
              Cetak Laporan
          </button>
      </div>

      <div id="table-container">
          <table class="min-w-full bg-white mt-5 border border-gray-300 rounded-lg overflow-hidden">
              <thead class="bg-gray-800 text-white">
                  <tr>
                      <th class="w-1/12 py-3 px-4 uppercase font-semibold text-sm border border-gray-300">No</th>
                      <th class="w-2/12 py-3 px-4 uppercase font-semibold text-sm border border-gray-300">NPM</th>
                      <th class="w-2/12 py-3 px-4 uppercase font-semibold text-sm border border-gray-300">Nama Mahasiswa</th>
                      <th class="w-2/12 py-3 px-4 uppercase font-semibold text-sm border border-gray-300">Angkatan</th>
                      <th class="w-3/12 py-3 px-4 uppercase font-semibold text-sm border border-gray-300">Email</th>
                      <th class="w-2/12 py-3 px-4 uppercase font-semibold text-sm border border-gray-300">Telp</th>
                      <th class="w-1/12 py-3 px-4 uppercase font-semibold text-sm border border-gray-300">Opsi</th>
                  </tr>
              </thead>
              <tbody class="text-gray-700">
                  <tr class="hover:bg-gray-50 transition-colors duration-200">
                      <td class="py-3 px-4 border border-gray-300">1</td>
                      <td class="py-3 px-4 border border-gray-300">18411017</td>
                      <td class="py-3 px-4 border border-gray-300">Rebly Tabuni</td>
                      <td class="py-3 px-4 border border-gray-300">2024</td>
                      <td class="py-3 px-4 border border-gray-300">rebly18@gmail.com</td>
                      <td class="py-3 px-4 border border-gray-300">081248069721</td>
                      <td class="py-3 px-4 border border-gray-300 flex space-x-2">
                          <a href="" class="bg-yellow-500 text-gray-800 px-3 py-1 rounded hover:bg-yellow-600 transition-colors duration-300">Edit</a>
                          <form action="" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data mahasiswa ini?');" class="inline-block">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 transition-colors duration-300">Hapus</button>
                          </form>
                      </td>
                  </tr>
                  <tr class="hover:bg-gray-50 transition-colors duration-200">
                      <td class="py-3 px-4 border border-gray-300">1</td>
                      <td class="py-3 px-4 border border-gray-300">18411017</td>
                      <td class="py-3 px-4 border border-gray-300">Rebly Tabuni</td>
                      <td class="py-3 px-4 border border-gray-300">2024</td>
                      <td class="py-3 px-4 border border-gray-300">rebly18@gmail.com</td>
                      <td class="py-3 px-4 border border-gray-300">081248069721</td>
                      <td class="py-3 px-4 border border-gray-300 flex space-x-2">
                          <a href="" class="bg-yellow-500 text-gray-800 px-3 py-1 rounded hover:bg-yellow-600 transition-colors duration-300">Edit</a>
                          <form action="" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data mahasiswa ini?');" class="inline-block">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 transition-colors duration-300">Hapus</button>
                          </form>
                      </td>
                  </tr>
                  <tr class="hover:bg-gray-50 transition-colors duration-200">
                      <td class="py-3 px-4 border border-gray-300">1</td>
                      <td class="py-3 px-4 border border-gray-300">18411017</td>
                      <td class="py-3 px-4 border border-gray-300">Rebly Tabuni</td>
                      <td class="py-3 px-4 border border-gray-300">2024</td>
                      <td class="py-3 px-4 border border-gray-300">rebly18@gmail.com</td>
                      <td class="py-3 px-4 border border-gray-300">081248069721</td>
                      <td class="py-3 px-4 border border-gray-300 flex space-x-2">
                          <a href="" class="bg-yellow-500 text-gray-800 px-3 py-1 rounded hover:bg-yellow-600 transition-colors duration-300">Edit</a>
                          <form action="" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data mahasiswa ini?');" class="inline-block">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 transition-colors duration-300">Hapus</button>
                          </form>
                      </td>
                  </tr>
                 
              </tbody>
          </table>
      </div>
  </div>
  
  <style>
      @media print {
          body * {
              visibility: hidden;
          }
          #table-container, #table-container * {
              visibility: visible;
          }
          #table-container {
              position: absolute;
              left: 0;
              top: 0;
              width: 100%;
          }
      }
  </style>
</x-app-layout>
