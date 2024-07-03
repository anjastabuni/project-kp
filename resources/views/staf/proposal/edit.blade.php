<x-layout>
    <div class="py-12">
        <h2 class="text-2xl font-bold">Edit Data Proposal</h2>
        <form action="{{ route('staf.proposal.update', $proposal->id_proposal) }}" method="post">
            @csrf
            @method('PUT')
            <div class="mt-8 max-w-md">
                <div class="grid grid-cols-1 gap-6">
                    <label class="block">
                        <span class="text-gray-700">ID Proposal</span>
                        <input
                            type="text" name="id_proposal" value="{{ $proposal->id_proposal }}" readonly
                            class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0"
                        />
                    </label>
                    <label class="block">
                        <span class="text-gray-700">Judul Proposal</span>
                        <input
                            type="text" name="judul" value="{{ $proposal->judul }}"
                            class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0"
                        />
                        @error('judul')
                            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                        @enderror
                    </label>
                    <label class="block">
                        <span class="text-gray-700">Nama Pembimbing</span>
                        <input
                            type="text" name="pembimbing" value="{{ $proposal->pembimbing }}"
                            class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0"
                        />
                        @error('pembimbing')
                            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                        @enderror
                    </label>
                    <label class="block">
                        <span class="text-gray-700">Tanggal Pengajuan</span>
                        <input
                            type="date" name="tgl_pengajuan" value="{{ $proposal->tgl_pengajuan }}"
                            class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0"
                        />
                        @error('tgl_pengajuan')
                            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                        @enderror
                    </label>
                </div>
                <button type="submit" class="mt-5 w-full rounded-md bg-green-500 text-white px-2 py-2 hover:bg-green-700">Perbarui</button>
            </div>
        </form>
    </div>
</x-layout>
