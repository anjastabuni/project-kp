<x-layout>
    <div class="container mx-auto mt-10">
      <h1 class="text-2xl font-bold mb-5">Status Proposal</h1>
    
      <table class="min-w-full bg-white mt-5">
        <thead class="bg-gray-800 text-white ">
          <tr>
            <th class="w-1/12 py-3 px-4 uppercase font-semibold text-sm text-start">No</th>
            <th class="w-2/12 py-3 px-4 uppercase font-semibold text-sm text-start">Status</th>
            <th class="w-2/12 py-3 px-4 uppercase font-semibold text-sm text-start">Keterangan</th>
            <th class="w-2/12 py-3 px-4 uppercase font-semibold text-sm text-start">Opsion</th>
          </tr>
        </thead>
        <tbody class="text-gray-700">
          <tr>
            <td class="py-3 px-4">1</td>
            <td class="py-3 px-4 ">Accepted</td>
            <td class="py-3 px-4">Selesai dan telah disetujui</td>
            <td class="py-3 px-4">
              <a href="/edit-status" class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-700">Edit</a>
              <a href="" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-700">Delete</a>
            </td>
          </tr>
          <tr class="bg-gray-100">
            <td class="py-3 px-4">2</td>
            <td class="py-3 px-4">In Progress</td>
            <td class="py-3 px-4">Masih dalam Proses</td>
            <td class="py-3 px-4">
              <a href="/edit-status" class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-700">Edit</a>
              <a href="" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-700">Delete</a>
            </td>
          </tr>
          <!-- Tambahkan baris lain sesuai kebutuhan -->
        </tbody>
      </table>
    </div>
  </x-layout>
  