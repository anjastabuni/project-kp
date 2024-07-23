<x-layout>
  <div class="container mx-auto mt-10">
      <h1 class="text-2xl font-bold mb-5">Status Proposal</h1>
      <a href="{{ route('staf.status.create') }}" class="bg-yellow-500 text-gray-800 px-4 py-2 rounded-lg shadow hover:bg-yellow-600 transition-colors duration-300"><i class="fa-solid fa-plus"></i> Status Proposal</a>
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
              @foreach ($statuses as $status) 
              <tr class="hover:bg-gray-50 transition-colors duration-200">
                  <td class="py-3 px-4 border border-gray-300">{{ $no++ }}</td>
                  <td class="py-3 px-4 border border-gray-300">{{ $status->status }}</td>
                  <td class="py-3 px-4 border border-gray-300">{{ $status->keterangan }}</td>
                  <td class="py-3 px-4 border border-gray-300 flex space-x-2 justify-center">
                      <a href="{{ route('staf.status.edit', $status->id_status) }}" class="bg-yellow-500 text-white px-3 py-1 rounded shadow hover:bg-yellow-700 transition-colors duration-300">Edit</a>
                      <form action="{{ route('staf.status.destroy', $status->id_status) }}" method="POST" class="delete-form">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded shadow hover:bg-red-600 transition-colors duration-300">Hapus</button>
                      </form>
                  </td>
              </tr>
              @endforeach
          </tbody>
      </table>
  </div>
</x-layout>
