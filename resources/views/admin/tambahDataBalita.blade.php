<x-admin-dashboard>
    <x-slot name="header">
        <h2 class="font-bold text-2xl text-gray-800 leading-tight text-center">
            {{ __('Tambah Data Balita') }}
        </h2>
    </x-slot>

    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-3 lg:px-5">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form action="{{ route('addBalitas') }}" method="POST" class="p-10 bg-white rounded shadow-xl grid lg:grid-cols-2 gap-10">

                    @csrf
                    <div class="">
                        <h2 class="text-lg font-semibold">Data Balita</h2>
                        <div class="mb-3">
                            <label class="block text-sm text-gray-600" for="nama">Nama</label>
                            <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="nama" name="nama" value="{{old('nama')}}" type="text" placeholder="Nama Balita">
                            @error('nama')
                                <p class="text-red-500 text-sm mt-2">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="block text-sm text-gray-600" for="tmpt_lahir">Tempat Lahir</label>
                            <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="tmpt_lahir" value="{{old('tmpt_lahir')}}" name="tmpt_lahir" type="text" placeholder="Tempat Lahir Balita">
                            @error('tmpt_lahir')
                                <p class="text-red-500 text-sm mt-2">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="block text-sm text-gray-600" for="tgl_lahir">Tanggal Lahir</label>
                            <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="tgl_lahir" name="tgl_lahir" value="{{old('tgl_lahir')}}" type="date" placeholder="">
                            @error('tgl_lahir')
                                <p class="text-red-500 text-sm mt-2">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="block text-sm text-gray-600" for="alamat">Alamat</label>
                            <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="alamat" name="alamat" value="{{old('alamat')}}" type="text" placeholder="Masukkan Alamat Balita">
                            @error('alamat')
                                <p class="text-red-500 text-sm mt-2">{{$message}}</p>
                            @enderror
                        </div>

                        <h2 class="text-lg font-semibold mt-5">Data Orang Tua</h2>
                        <div class="mb-3">
                            <label class="block text-sm text-gray-600" for="nama_ayah">Nama Ayah</label>
                            <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="nama_ayah" name="nama_ayah" value="{{old('nama_ayah')}}" type="text" placeholder="Masukkan Nama Ayah">
                            @error('nama_ayah')
                                <p class="text-red-500 text-sm mt-2">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="block text-sm text-gray-600" for="nik_ayah">NIK Ayah</label>
                            <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="nik_ayah" name="nik_ayah" value="{{old('nik_ayah')}}" type="text" placeholder="Masukkan NIK Ayah">
                            @error('nik_ayah')
                                <p class="text-red-500 text-sm mt-2">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="block text-sm text-gray-600" for="nama_ibu">Nama Ibu</label>
                            <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="nama_ibu" name="nama_ibu" value="{{old('nama_ibu')}}" type="text" placeholder="Masukkan Nama Ibu">
                            @error('nama_ibu')
                                <p class="text-red-500 text-sm mt-2">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="block text-sm text-gray-600" for="nik_ibu">NIK Ibu</label>
                            <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="nik_ibu" name="nik_ibu" value="{{old('nik_ibu')}}" type="text" placeholder="Masukkan NIK Ibu">
                            @error('nik_ibu')
                                <p class="text-red-500 text-sm mt-2">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="block text-sm text-gray-600" for="email">Email</label>
                            <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" id="email" name="email" value="{{old('email')}}" type="text" placeholder="Masukkan Email Aktif">
                            @error('email')
                                <p class="text-red-500 text-sm mt-2">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="block text-sm text-gray-600" for="telp">Telp</label>
                            <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" id="telp" name="telp" value="{{old('telp')}}" type="tel" placeholder="Masukkan Nomor Telp Aktif">
                            @error('telp')
                                <p class="text-red-500 text-sm mt-2">{{$message}}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="">
                        <h2 class="text-lg font-semibold">Keterangan Balita</h2>
                        <div class="grid grid-cols-2 gap-x-10 gap-y-3">
                            <div class="">
                                <label class="block text-sm text-gray-600" for="umur">Umur</label>
                                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="umur" name="umur" value="{{old('umur')}}" type="number" placeholder="Umur Balita">
                                @error('umur')
                                <p class="text-red-500 text-sm mt-2">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="">
                                <label class="block text-sm text-gray-600" for="tb">Tinggi</label>
                                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="tb" name="tb" value="{{old('tb')}}" type="number" placeholder="Tinggi Balita">
                                @error('tb')
                                <p class="text-red-500 text-sm mt-2">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="">
                                <label class="block text-sm text-gray-600" for="bb">Berat</label>
                                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="bb" name="bb" value="{{old('bb')}}" type="number" placeholder="Berat Balita">
                                @error('bb')
                                <p class="text-red-500 text-sm mt-2">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="">
                                <label class="block text-sm text-gray-600" for="lk">Lingkar Kepala</label>
                                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="lk" name="lk" value="{{old('lk')}}" type="number" placeholder="Lingkar Kepala Balita">
                                @error('lk')
                                <p class="text-red-500 text-sm mt-2">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="">
                                <label class="block text-sm text-gray-600" for="kader_id_balita">Petugas Posyandu</label>
                                <select class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="kader_id_balita" name="kader_id_balita" value="{{old('kader_id_balita')}}" type="text" placeholder="Petugas">
                                    <option selected disabled value="">-- Pilih Kader --</option>
                                    @foreach ($kaders as $kader)
                                    <option value="{{$kader->id}}">{{$kader->nama}}</option>
                                    @endforeach
                                </select>
                                @error('kader_id_balita')
                                <p class="text-red-500 text-sm mt-2">{{$message}}</p>
                                @enderror
                            </div>

                        </div>
                    </div>

                    <div class="mt-2">
                        <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 hover:bg-green-500 shadow rounded" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-admin-dashboard>
