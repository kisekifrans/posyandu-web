<x-admin-dashboard>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Balita') }}
        </h2>
    </x-slot>

    <div class="py-16 w-auto relative z-0 overflow-x-auto">
        <a href="{{route("addBalitas")}}" class="p-2 px-4 bg-green-500 absolute top-2 text-white rounded-full shadow-sm hover:bg-green-700" type="submit"><i class="mr-1 fas fa-plus-circle"></i> Tambah data Balita</a>
        <div class="w-auto mx-auto sm:px-0.5 lg:px-1 overflow-x-scroll">
            <div class="bg-white shadow sm:rounded-lg">

                    <table class="min-w-full bg-white">
                        <thead class="bg-blue-700 text-white">
                            <tr>
                                <th class=" text-left py-3 px-4 uppercase font-semibold text-sm">#</th>
                                <th class="w-1/5 text-left py-3 px-4 uppercase font-semibold text-sm">Nama Balita</th>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">TTL</th>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Alamat</th>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Orang tua</td>
                                <th class="text-center py-3 px-4 uppercase font-semibold text-sm">NIK</td>
                                <th class="text-center py-3 px-4 uppercase font-semibold text-sm">Telp</td>
                                <th class="text-center py-3 px-4 uppercase font-semibold text-sm">Email</td>
                                <th class="text-center py-3 px-4 uppercase font-semibold text-sm">Umur</td>
                                <th class="text-center py-3 px-4 uppercase font-semibold text-sm">TB</td>
                                <th class="text-center py-3 px-4 uppercase font-semibold text-sm">BB</td>
                                <th class="text-center py-3 px-4 uppercase font-semibold text-sm">LK</td>
                                <th class="text-center py-3 px-4 uppercase font-semibold text-sm">Petugas</td>
                                <th class="py-3 px-4 uppercase font-semibold text-sm">Aksi</td>
                            </tr>
                        </thead>
                        <tbody class="text-gray-700">

                            @php
                                $n = 1;
                            @endphp
                            @foreach ($balitas as $bayi)

                            <tr>
                                <td class=" text-left py-3 px-4">{{$n++}}</td>
                                <td class="w-1/5 text-left py-3 px-4">{{$bayi->nama}}</td>
                                <td class=" text-left py-3 px-4 text-sm">{{$bayi->tmpt_lahir}}, {{$bayi->tgl_lahir}}</td>
                                <td class="text-left py-3 px-4 text-sm">{{$bayi->alamat}}</td>
                                <td class="text-left py-3 px-4 text-sm">
                                    <b>Ayah </b> : <br>{{$bayi->nama_ayah}} <br>
                                    <b>Ibu </b> : <br> {{$bayi->nama_ibu}}
                                </td>
                                <td class="text-left py-3 px-4 text-sm">
                                    <b>Ayah </b> : {{$bayi->nik_ayah}} <br>
                                    <b>Ibu </b> : {{$bayi->nik_ibu}}
                                </td>
                                <td class="text-left py-3 px-4 text-sm">{{$bayi->telp}}</td>
                                <td class="text-left py-3 px-4 text-sm"><a href="">{{$bayi->email}}</a></td>
                                <td class="text-left py-3 px-4">{{$bayi->umur}}bulan</td>
                                <td class="text-left py-3 px-4">{{$bayi->tb}}cm</td>
                                <td class="text-left py-3 px-4">{{$bayi->bb}}kg</td>
                                <td class="text-left py-3 px-4">{{$bayi->lk}}cm</td>
                                <td class="text-center py-3 px-4">{{$bayi->balitasKader->nama}}</td>
                                <td class="text-left py-3 px-4">
                                    <div class="flex w-full">
                                        <a href="{{ route('update-data-balita', ['id'=>$bayi->id]) }}" class="mr-2 p-2 bg-yellow-300 text-sm rounded-md hover:bg-yellow-500 hover:text-white cursor-pointer">Update</a>
                                        <form action="{{ route('delete-balita', ['id'=>$bayi->id]) }}" method="POST" class="inline">
                                            @csrf
                                            @method('delete')
                                            <button onclick="return confirm('Apakah anda yakin menghapus data ini ?')" class="p-2 bg-red-300 text-sm rounded-md hover:bg-red-500 hover:text-white cursor-pointer">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                {{-- </div> --}}
            </div>
        </div>
    </div>
</x-admin-dashboard>
