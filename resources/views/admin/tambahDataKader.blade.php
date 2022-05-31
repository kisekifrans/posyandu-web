<x-admin-dashboard>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            {{ __('Tambah Data Petugas Posyandu') }}
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form action="{{ route('addKaders') }}" method="POST" class="p-10 px-16 bg-white rounded shadow-xl grid lg:grid-cols-1 gap-10">
                    @csrf

                    <div class="">
                        <h2 class="text-lg font-semibold">Data Petugas</h2>
                        <div class="mb-3">
                            <label class="block text-sm text-gray-600" for="nama">Nama</label>
                            <div class="">
                                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="nama" name="nama" value="{{old('nama')}}" type="text" placeholder="Nama Petugas">
                                @error('nama')
                                <p class="text-red-500 text-sm mt-2">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="block text-sm text-gray-600" for="nik">NIK</label>
                            <div class="">
                                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="nik" name="nik" value="{{old('nik')}}" type="text" placeholder="NIK Petugas">
                                @error('nik')
                                <p class="text-red-500 text-sm mt-2">{{$message}}</p>
                                 @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="block text-sm text-gray-600" for="tmpt_lahir">Tempat Lahir</label>
                            <div class="">
                                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="tmpt_lahir" name="tmpt_lahir" value="{{old('tmpt_lahir')}}" type="text" placeholder="Tempat Lahir Petugas">
                                @error('tmpt_lahir')
                                <p class="text-red-500 text-sm mt-2">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="block text-sm text-gray-600" for="tgl_lahir">Tanggal Lahir</label>
                            <div class="">
                                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="tgl_lahir" name="tgl_lahir" value="{{old('tgl_lahir')}}" type="date" placeholder="">
                                @error('tgl_lahir')
                                <p class="text-red-500 text-sm mt-2">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="block text-sm text-gray-600" for="alamat">Alamat</label>
                            <div class="">
                                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="alamat" name="alamat" value="{{old('alamat')}}" type="text" placeholder="Masukkan Alamat Petugas">
                                @error('alamat')
                                <p class="text-red-500 text-sm mt-2">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="block text-sm text-gray-600" for="email">Email</label>
                            <div class="">
                                <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" id="email" name="email" value="{{old('email')}}" type="text" placeholder="Masukkan Email Aktif">
                                @error('email')
                                <p class="text-red-500 text-sm mt-2">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="block text-sm text-gray-600" for="telp">Telp</label>
                            <div class="">
                                <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" id="telp" name="telp" type="tel" value="{{old('telp')}}" placeholder="Masukkan Nomor Telp Aktif">
                                @error('telp')
                                <p class="text-red-500 text-sm mt-2">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="">
                        @csrf
                        <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 hover:bg-green-500 shadow rounded" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
</x-admin-dashboard>
