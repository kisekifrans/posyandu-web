<x-admin-dashboard>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Petugas Posyandu') }}
        </h2>
    </x-slot>

    <div class="py-16 w-auto relative z-0 overflow-x-auto">
        <a href="{{route("addKaders")}}" class="p-2 px-4 bg-green-500 absolute top-2 text-white rounded-full shadow-sm hover:bg-green-700" type="submit"><i class="mr-1 fas fa-plus-circle"></i> Tambah data Petugas Posyandu</a>
        <div class="w-auto mx-auto sm:px-0.5 lg:px-1 overflow-x-scroll">
            <div class="bg-white shadow sm:rounded-lg">
                    <!-- tabel -->
                    <table class="min-w-full bg-white">
                        <thead class="bg-yellow-700 text-white">
                            <tr>
                                <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">#</th>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Nama petugas</th>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">NIK</th>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">TTL</th>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Alamat</th>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Telp</th>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Email</td>
                                <th class="py-3 px-4 uppercase font-semibold text-sm">Aksi</td>
                            </tr>
                        </thead>
                        <tbody class="text-gray-700">

                            @php
                                $n = 1;
                            @endphp

                            @foreach ($kaders as $kader)
                            <tr>
                                <td class="text-left py-3 px-4">{{$n++}}</td>
                                <td class="w-1/3 text-left py-3 px-4">{{$kader->nama}}</td>
                                <td class=" text-left py-3 px-4">{{$kader->nik}}</td>
                                <td class="text-left py-3 px-4 text-sm"><a class="">{{$kader->tmpt_lahir}}, {{$kader->tgl_lahir}}</a></td>
                                <td class="text-left py-3 px-4 text-sm"><a class="">{{$kader->alamat}}</a></td>
                                <td class="text-left py-3 px-4 text-sm"><a class="">{{$kader->telp}}</a></td>
                                <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="mailto:jonsmith@mail.com">{{$kader->email}}</a></td>
                                <td class="text-left py-3 px-4">
                                    <div class="flex w-full">
                                        <a href="{{ route('update-data-kader', ['id'=>$kader->id]) }}" class="mr-2 p-2 bg-yellow-300 text-sm rounded-md hover:bg-yellow-500 hover:text-white cursor-pointer">Update</a>
                                        <form action="{{ route('delete-kader', ['id'=>$kader->id]) }}" method="POST" class="inline">
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
