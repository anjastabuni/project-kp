<x-layout>
  <div class="container mx-auto mt-10">
      <h1 class="text-2xl font-bold mb-5">Data Proposal Mahasiswa</h1>
      
      <div class="flex justify-between items-center mb-3">
          <input type="text" placeholder="Cari Mahasiswa..." class="my-5 px-4 py-2 border rounded-lg w-1/2 focus:outline-none focus:ring-2 focus:ring-blue-500">
          <div class="flex space-x-4">
              <form action="{{ route('staf.proposal.index') }}" method="GET">
                  <select name="tahun" class="my-5 px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" onchange="this.form.submit()">
                      <option value="">Filter Tahun</option>
                      <option value="2021">2023 Ganjil</option>
                      <option value="2022">2023 Genap</option>
                      <option value="2023">2024 Ganjil</option>
                  </select>
              </form>
              <form action="{{ route('staf.proposal.index') }}" method="GET">
                  <select name="status" class="my-5 px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" onchange="this.form.submit()">
                      <option value="">Filter Status</option>
                      @foreach($statuses as $status)
                          <option value="{{ $status->id_status }}">{{ $status->status }}</option>
                      @endforeach
                  </select>
              </form>
          </div>
      </div>
      
      <table class="min-w-full border-collapse border border-slate-500 mt-5 table-auto">
          <thead class="bg-gray-800 text-white">
              <tr>
                  <th class="w-1/12 py-3 px-4 uppercase font-semibold text-sm border border-slate-700">No</th>
                  <th class="w-2/12 py-3 px-4 uppercase font-semibold text-sm border border-slate-700">NPM</th>
                  <th class="w-2/12 py-3 px-4 uppercase font-semibold text-sm border border-slate-700">Nama Mahasiswa</th>
                  <th class="w-2/12 py-3 px-4 uppercase font-semibold text-sm border border-slate-700">Email</th>
                  <th class="w-2/12 py-3 px-4 uppercase font-semibold text-sm border border-slate-700">Telp</th>
                  <th class="w-3/12 py-3 px-4 uppercase font-semibold text-sm border border-slate-700">Judul Proposal</th>
                  <th class="w-2/12 py-3 px-4 uppercase font-semibold text-sm border border-slate-700">Dosen Pembimbing</th>
                  <th class="w-3/12 py-3 px-4 uppercase font-semibold text-sm border border-slate-700">Status</th>
              </tr>
          </thead>
          <tbody class="text-gray-700">
              @forelse($proposals as $index => $proposal)
                  <tr>
                      <td class="py-3 px-4 border border-slate-700">{{ $no++ }}</td>
                      <td class="py-3 px-4 border border-slate-700">{{ $proposal->id_mahasiswa }}</td>
                      <td class="py-3 px-4 border border-slate-700">{{ $proposal->mahasiswa->nama }}</td>
                      <td class="py-3 px-4 border border-slate-700">{{ $proposal->mahasiswa->email }}</td>
                      <td class="py-3 px-4 border border-slate-700">{{ $proposal->mahasiswa->telp }}</td>
                      <td class="py-3 px-4 border border-slate-700">{{ $proposal->judul }}</td>
                      <td class="py-3 px-4 border border-slate-700">{{ $proposal->pembimbing }}</td>
                      <td class="py-3 px-4 border border-slate-700">{{ $proposal->status->status }}</td>
                  </tr>
              @empty
                  <tr>
                      <td colspan="8" class="py-3 px-4 border border-slate-700 text-center">Tidak ada data proposal</td>
                  </tr>
              @endforelse
          </tbody>
      </table>
  </div>
</x-layout>
