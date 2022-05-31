<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Models\Balitas;
use App\Models\Bumils;
use App\Models\Kaders;
use Illuminate\Http\Request;

class KadersController extends Controller
{
    public function index()
    {
        $kaders = Kaders::all();
        return view('admin.kader', [
            'kaders' => $kaders
        ]);
    }

    public function create()
    {
        $kaders = Kaders::all();
        return view('admin.tambahDataKader', [
            'kaders' => $kaders
        ]);
    }

    public function store(Request $request)
    {
        $kaderData = $request->validate([
            'nama' => ['required', 'max:255'],
            'nik' => ['required', 'unique:kaders,nik', 'max:16'],
            'tmpt_lahir' => ['required', 'max:100'],
            'tgl_lahir' => ['required'],
            'alamat' => ['required', 'max:255'],
            'telp' => ['required'],
            'email' => ['required', 'max:100'],
        ]);

        Kaders::create($kaderData);
        return redirect('/petugas-posyandu');
    }



    public function formUpdateKader($id)
    {
        $kaders = Kaders::find($id);
        return view('admin.updateDataKader', [
            'kaders' => $kaders,
            'title' => 'Update Data Petugas Posyandu'
        ]);
    }


    public function update(Request $request, $id)
    {
        $kaders = Kaders::find($id);
        $kaders->nama = $request->nama;
        $kaders->nik = $request->nik;
        $kaders->tmpt_lahir = $request->tmpt_lahir;
        $kaders->tgl_lahir = $request->tgl_lahir;
        $kaders->alamat = $request->alamat;
        $kaders->email = $request->alamat;
        $kaders->telp = $request->telp;
        $kaders->save();
        return redirect('/petugas-posyandu');
    }


    public function destroy($id)
    {
        Kaders::destroy(Kaders::find($id)->id);
        Kaders::destroy($id);
        return back();
    }
}
