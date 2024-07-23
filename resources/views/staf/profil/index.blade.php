<x-layout>
    <div class="container mx-auto  mt-10">
        <h1 class="text-2xl font-bold mb-5 text-gray-900">Profil</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <!-- Card untuk menampilkan data user -->
            <div class="bg-white rounded-lg overflow-hidden shadow-md border border-gray-300">
                <img class="w-full h-48 object-cover object-center" src="{{ asset('img/' . $user->profil) }}" alt="Foto Profil">
                <div class="px-6 py-4">
                    <p class="text-gray-700 text-sm">Nama: {{ $user->name }}</p>
                    <p class="text-gray-700 text-sm">Email: {{ $user->email }}</p>
                    <p class="text-gray-700 text-sm">Role: {{ $user->role }}</p>
                </div>
                <div class="px-6 py-4 flex justify-end">
                    <a href="{{ route('staf.profil.edit', $user->id) }}" class="bg-yellow-500 text-gray-800 px-3 py-1 rounded hover:bg-yellow-600 transition-colors duration-300">Edit</a>
                    {{-- <form action="{{ route('users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 transition-colors duration-300 ml-2">Delete</button>
                    </form> --}}
                </div>
            </div>
        </div>
    </div>
</x-layout>
