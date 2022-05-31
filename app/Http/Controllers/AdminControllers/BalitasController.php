<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Models\Balitas;
use App\Models\Bumils;
use App\Models\Kaders;
use Illuminate\Http\Request;

class BalitasController extends Controller
{
    public function index()
    {
        $balitas = Balitas::all();
        return view('admin.balita', [
            'balitas' => $balitas
        ]);
    }


    public function create()
    {
        $balitas = Balitas::all();
        $kaders = Kaders::all();
        return view('admin.tambahDataBalita', [
            'balitas' => $balitas,
            'kaders' => $kaders
        ]);
    }


    public function store(Request $request)
    {
        $dataBalita = $request->validate([
            'nama' => ['required', 'max:255'],
            'tmpt_lahir' => ['required', 'max:100'],
            'tgl_lahir' => ['required'],
            'alamat' => ['required', 'max:255'],
            'nama_ayah' => ['required', 'max:255'],
            'nik_ayah' => ['required', 'unique:balitas,nik_ayah', 'max:16'],
            'nama_ibu' => ['required', 'max:255'],
            'nik_ibu' => ['required', 'unique:balitas,nik_ibu', 'max:16'],
            'telp' => ['required'],
            'email' => ['required', 'max:100'],
            'umur' => ['required'],
            'tb' => ['required'],
            'bb' => ['required'],
            'lk' => ['required'],
            'kader_id_balita' => ['required'],
        ]);

        Balitas::create($dataBalita);
        return redirect('/balita');
    }


    public function formUpdateBalita($id)
    {
        $balitas = Balitas::find($id);
        $kaders = Kaders::all();
        return view('admin.updateDataBalita', [
            'balitas' => $balitas,
            'kaders' => $kaders,
            'title' => 'Update Data Balita'
        ]);
    }


    public function update(Request $request, $id)
    {
        $balitas = Balitas::find($id);
        $kaders = Kaders::all();
        $balitas->nama = $request->nama;
        $balitas->nama_ayah = $request->nama_ayah;
        $balitas->nama_ibu = $request->nama_ibu;
        $balitas->nik_ayah = $request->nik_ayah;
        $balitas->nik_ibu = $request->nik_ibu;
        $balitas->tmpt_lahir = $request->tmpt_lahir;
        $balitas->tgl_lahir = $request->tgl_lahir;
        $balitas->alamat = $request->alamat;
        $balitas->umur = $request->umur;
        $balitas->tb = $request->tb;
        $balitas->bb = $request->bb;
        $balitas->lk = $request->lk;
        $balitas->kader_id_balita = $request->kader_id_balita;

        $balitas->save();
        return redirect('/balita');
    }



    public function destroy($id)
    {
        Balitas::destroy(Balitas::find($id)->id);
        Balitas::destroy($id);
        return back();
    }
}
