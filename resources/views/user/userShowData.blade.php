<x-user-dashboard>
    <!--Lead Card-->
    <x-slot name="lead">
        <div class="grid lg:grid-cols-3 sm:grid-cols-1 gap-5 h-full rounded overflow-hidden">
                <div class="bg-white w-full md:h-96 flex flex-col items-center justify-center rounded-lg shadow-md">
                    <p class="mb-7 font-bold">Hai Bunda dan Balita</p>
                    <img src="{{ asset('img/hello.svg') }}" class="w-full md:w-96">
                    <p class="mt-5 text-2xl font-medium">Dummy User</p>
                </div>

                <div class="w-full col-span-2 grid lg:grid-cols-2 sm:grid-cols-1 sm:gap-y-5  bg-white shadow-md">
                    <div class="flex-1 rounded-t rounded-b-none overflow-hidden w-full">
                        <h1 class="w-full text-gray-600 font-semibold text-lg pt-6 px-6">Informasi Personal</h1>
                        <div class="px-6">
                                <div class="flex flex-col">
                                    <label for="nama" class="text-sm font-normal">Nama : </label>
                                    <input type="text" name="nama" id="nama" class="px-2 py-1 text-sm border rounded">
                                </div>

                                <div class="flex flex-col">
                                    <label for="ttl" class="text-sm font-normal">TTL : </label>
                                    <input type="text" name="ttl" id="ttl" class="px-2 py-1 text-sm border rounded">
                                </div>

                                <div class="flex flex-col">
                                    <label for="nik" class="text-sm font-normal">NIK : </label>
                                    <input type="text" name="nik" id="nik" class="px-2 py-1 text-sm border rounded">
                                </div>

                                <div class="flex flex-col">
                                    <label for="alamat" class="text-sm font-normal">Alamat : </label>
                                    <input type="text" name="alamat" id="alamat" class="px-2 py-1 text-sm border rounded">
                                </div>
                        </div>

                        <h1 class="w-full text-gray-600 font-semibold text-lg pt-6 px-6">Informasi Personal</h1>
                        <div class="px-6 mb-5">
                            <div class="flex flex-col">
                                <label for="ayah" class="text-sm font-normal">Ayah : </label>
                                <input type="text" name="ayah" id="ayah" class="px-2 py-1 text-sm border rounded">
                            </div>

                            <div class="flex flex-col">
                                <label for="nik_ayah" class="text-sm font-normal">NIK Ayah : </label>
                                <input type="text" name="nik_ayah" id="nik_ayah" class="px-2 py-1 text-sm border rounded">
                            </div>

                            <div class="flex flex-col">
                                <label for="ibu" class="text-sm font-normal">Ibu : </label>
                                <input type="text" name="ibu" id="ibu" class="px-2 py-1 text-sm border rounded">
                            </div>

                            <div class="flex flex-col">
                                <label for="nik_ibu" class="text-sm font-normal">NIK Ibu : </label>
                                <input type="text" name="nik_ibu" id="nik_ibu" class="px-2 py-1 text-sm border rounded">
                            </div>

                            <div class="flex flex-col">
                                <label for="telp" class="text-sm font-normal">Telepon : </label>
                                <input type="text" name="telp" id="telp" class="px-2 py-1 text-sm border rounded">
                            </div>

                            <div class="flex flex-col">
                                <label for="email" class="text-sm font-normal">Email : </label>
                                <input type="email" name="email" id="email" class="px-2 py-1 text-sm border rounded">
                            </div>
                        </div>
                    </div>

                    <div class="flex-1  rounded-t rounded-b-none overflow-hidden">
                        <h1 class="w-full text-gray-600 font-semibold text-lg pt-6 px-6">Informasi Kesehatan</h1>
                        <div class="px-6">
                                <div class="flex flex-col">
                                    <label for="nama" class="text-sm font-normal">Tinggi Badan : </label>
                                    <input type="text" name="nama" id="nama" class="px-2 py-1 text-sm border rounded w-full">
                                </div>

                                <div class="flex flex-col">
                                    <label for="ttl" class="text-sm font-normal">Berat Badan : </label>
                                    <input type="text" name="ttl" id="ttl" class="px-2 py-1 text-sm border rounded">
                                </div>

                                <div class="flex flex-col">
                                    <label for="nik" class="text-sm font-normal">Lingkar Kepala : </label>
                                    <input type="text" name="nik" id="nik" class="px-2 py-1 text-sm border rounded">
                                </div>

                                <div class="flex flex-col">
                                    <label for="alamat" class="text-sm font-normal">Status : </label>
                                    <input type="text" name="alamat" id="alamat" class="px-2 py-1 text-sm border rounded">
                                </div>
                        </div>
                    </div>
                </div>
        </div>
    </x-slot>

    <x-slot name="search">
    </x-slot>
    <!--/Lead Card-->
</x-user-dashboard>
