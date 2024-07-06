<x-app-layout>
    <div class="container mx-auto mt-10">
        <h1 class="text-2xl font-bold mb-5 text-gray-900">Data Users</h1>

        <table class="min-w-full bg-white mt-5 border border-gray-300 rounded-lg overflow-hidden">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="w-1/12 py-3 px-4 uppercase font-semibold text-sm border border-gray-300">No</th>
                    <th class="w-2/12 py-3 px-4 uppercase font-semibold text-sm border border-gray-300">Nama</th>
                    <th class="w-3/12 py-3 px-4 uppercase font-semibold text-sm border border-gray-300">Email</th>
                    <th class="w-2/12 py-3 px-4 uppercase font-semibold text-sm border border-gray-300">Role</th>
                    <th class="w-1/12 py-3 px-4 uppercase font-semibold text-sm border border-gray-300">Opsi</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                @foreach ($users as $index => $user)
                <tr class="hover:bg-gray-50 transition-colors duration-200 {{ Auth::user()->id == $user->id ? 'bg-yellow-100' : '' }}">
                    <td class="py-3 px-4 border border-gray-300">{{ $index + 1 }}</td>
                    <td class="py-3 px-4 border border-gray-300">{{ $user->name }}</td>
                    <td class="py-3 px-4 border border-gray-300">{{ $user->email }}</td>
                    <td class="py-3 px-4 border border-gray-300">{{ $user->role }}</td>
                    <td class="py-3 px-4 border border-gray-300 flex space-x-2">
                        <a href="{{ route('users.edit', $user->id) }}" class="bg-yellow-500 text-gray-800 px-3 py-1 rounded hover:bg-yellow-600 transition-colors duration-300">Edit</a>
                        <form action="{{ route('users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 transition-colors duration-300">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
