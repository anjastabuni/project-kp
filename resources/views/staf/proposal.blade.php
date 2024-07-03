<x-layout>
    <div class="container mx-auto mt-10">
      <h1 class="text-2xl font-bold mb-5">Data Proposal</h1>
      
      <div class="flex justify-between items-center mb-3">
        <a href="/staf/tambah-proposal" class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-700">Tambah Data</a>
        <input type="text" placeholder="Cari Mahasiswa..." class="my-5 px-4 py-2 border rounded-lg w-1/3 focus:outline-none focus:ring-2 focus:ring-blue-500">
      </div>
      
      <table class="min-w-full mt-5 table-auto  border-collapse border border-slate-600  ">
        <thead class="bg-gray-800 text-white">
          <tr>
            <th class="w-1/12 py-3 px-4 uppercase font-semibold text-sm border border-slate-600">No</th>
            <th class="w-3/12 py-3 px-4 uppercase font-semibold text-sm border border-slate-600">Judul Proposal</th>
            <th class="w-3/12 py-3 px-4 uppercase font-semibold text-sm border border-slate-600">Dosen Pembimbing</th>
            <th class="w-2/12 py-3 px-4 uppercase font-semibold text-sm border border-slate-600">Tanggal Pengajuan</th>
            <th class="w-1/12 py-3 px-4 uppercase font-semibold text-sm border border-slate-600">Opsi</th>
          </tr>
        </thead>
        <tbody class="text-gray-700">
          @foreach ($proposals as $proposal)
          <tr>
            <td class="py-3 px-4 border border-slate-600">{{  $no++ }}</td>
            <td class="py-3 px-4 border border-slate-600">{{ $proposal->judul }}</td>
            <td class="py-3 px-4 border border-slate-600">{{ $proposal->pembimbing }}</td>
            <td class="py-3 px-4 border border-slate-600">{{ $proposal->tgl_pengajuan }}</td>
            <td class="py-3 px-4 border border-slate-600">
              <button class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-700">Edit</button>
              <button class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-700">Delete</button>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </x-layout>
  