<x-layout>
    <div class="container mx-auto mt-10">
        <h1 class="text-2xl font-bold mb-5 text-gray-900">Edit Profil</h1>

        <form action="{{ route('staf.profil.update', $user->id) }}" method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded-lg shadow-md">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-bold mb-2">Nama:</label>
                <input type="text" name="name" value="{{ $user->name }}" id="name" class="w-full border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-yellow-500" required>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-bold mb-2">Email:</label>
                <input type="email" name="email" value="{{ $user->email }}" id="email" class="w-full border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-yellow-500" required>
            </div>
            <div class="mb-4">
                <label for="role" class="block text-gray-700 font-bold mb-2">Role:</label>
                <input type="text" name="role" value="{{ $user->role }}" id="role" class="w-full border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-yellow-500" required>
            </div>
            <div class="mb-4">
                <label for="profil" class="block text-gray-700 font-bold mb-2">Foto Profil:</label>
                <input type="file" name="profil" id="profil" class="w-full border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-yellow-500">
                @if ($user->profil)
                    <img src="{{ asset('img/' . $user->profil) }}" alt="Foto Profil" class="mt-2 h-20">
                @endif
            </div>
            <div class="flex justify-end">
                <a href="{{ route('staf.profil.index', $user->id) }}" class="bg-gray-500 text-white px-4 py-2 rounded-lg shadow hover:bg-gray-600 transition-colors duration-300 mr-2">Batal</a>
                <button type="submit" class="bg-yellow-500 text-gray-800 px-4 py-2 rounded-lg shadow hover:bg-yellow-600 transition-colors duration-300">Simpan</button>
            </div>
        </form>
    </div>
</x-layout>
