<x-layout>
    <div class="container mx-auto mt-10">
        <h1 class="text-2xl font-bold mb-5">Edit Status Proposal</h1>
        <form action="{{ route('staf.status.update', $status->id_status) }}" method="POST" class="bg-white p-6 rounded-lg shadow-md">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="id_status" class="block text-gray-700 font-bold mb-2">Id Status:</label>
                <input type="text" name="id_status" value="{{ $status->id_status }}" id="id_status" class="w-full border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-yellow-500" required>
            </div>
            <div class="mb-4">
                <label for="status" class="block text-gray-700 font-bold mb-2">Status:</label>
                <input type="text" name="status" value="{{ $status->status }}" id="status" class="w-full border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-yellow-500" required>
            </div>
            <div class="mb-4">
                <label for="keterangan" class="block text-gray-700 font-bold mb-2">Keterangan:</label>
                <textarea name="keterangan" id="keterangan" rows="4" class="w-full border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-yellow-500" required>{{ $status->keterangan }}</textarea>
            </div>
            <div class="flex justify-end">
                <a href="{{ route('staf.status.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded-lg shadow hover:bg-gray-600 transition-colors duration-300 mr-2">Batal</a>
                <button type="submit" class="bg-yellow-500 text-gray-800 px-4 py-2 rounded-lg shadow hover:bg-yellow-600 transition-colors duration-300">Simpan</button>
            </div>
        </form>
    </div>
</x-layout>
