<x-admin-dashboard>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ibu Hamil') }}
        </h2>
    </x-slot>

    <div class="py-16 w-auto relative z-0 overflow-x-auto">
        <a href="{{route("addBumils")}}" class="p-2 px-4 bg-green-500 absolute top-2 text-white rounded-full shadow-sm hover:bg-green-700" type="submit"><i class="mr-1 fas fa-plus-circle"></i> Tambah data Ibu Hamil</a>
        <div class="w-auto mx-auto sm:px-0.5 lg:px-1 overflow-x-scroll">
            <div class="bg-white shadow sm:rounded-lg">
                <table class="min-w-full bg-white">
                    <thead class="bg-pink-700 text-white">
                        <tr>
                            <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">#</th>
                            <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Nama Bumil</th>
                            <th class="w-1/3 text-center py-3 px-4 uppercase font-semibold text-sm">NIK</th>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm">TTL</th>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Alamat</th>
                            <th class="text-center py-3 px-4 uppercase font-semibold text-sm">Telp</td>
                            <th class="text-center py-3 px-4 uppercase font-semibold text-sm">Email</td>
                            <th class="text-center py-3 px-4 uppercase font-semibold text-sm">Umur</th>
                            <th class="text-center py-3 px-4 uppercase font-semibold text-sm">TB</td>
                            <th class="text-center py-3 px-4 uppercase font-semibold text-sm">BB</td>
                            <th class="text-center py-3 px-4 uppercase font-semibold text-sm">Lila</td>
                            <th class="text-center py-3 px-4 uppercase font-semibold text-sm">Petugas</td>
                            <th class="py-3 px-4 uppercase font-semibold text-sm">Aksi</td>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">

                        @php
                            $n = 1;
                        @endphp

                        @foreach ($bumils as $bumil)

                        <tr>
                            <td class="w-1/3 text-left py-3 px-4">{{$n++}}</td>
                            <td class="w-1/3 text-left py-3 px-4">{{$bumil->nama}}</td>
                            <td class="w-1/3 text-center py-3 px-4">{{$bumil->nik}}</td>
                            <td class=" text-left py-3 px-4 text-sm">{{$bumil->tmpt_lahir}}, {{$bumil->tgl_lahir}}</td>
                            <td class="text-left py-3 px-4 text-sm">{{$bumil->alamat}}</td>
                            <td class="text-center py-3 px-4 text-sm">{{$bumil->telp}}</td>
                            <td class="text-center py-3 px-4 text-sm"><a href="">{{$bumil->email}}</a></td>
                            <td class="text-center py-3 px-4">{{$bumil->umur}}th</td>
                            <td class="text-center py-3 px-4">{{$bumil->tb}}cm</td>
                            <td class="text-center py-3 px-4">{{$bumil->bb}}kg</td>
                            <td class="text-center py-3 px-4">{{$bumil->lila}}cm</td>
                            <td class="text-center py-3 px-4">{{$bumil->bumilsKader->nama}}</td>
                            <td class="text-left py-3 px-4">
                                <div class="flex w-full">
                                    <a href="{{ route('update-data-bumil', ['id'=>$bumil->id]) }}" class="mr-2 p-2 bg-yellow-300 text-sm rounded-md hover:bg-yellow-500 hover:text-white cursor-pointer">Update</a>
                                    <form action="{{ route('delete-bumil', ['id'=>$bumil->id]) }}" method="POST" class="inline">
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
            </div>
        </div>
    </div>
</x-admin-dashboard>
