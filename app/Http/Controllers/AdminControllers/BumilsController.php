<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Models\Balitas;
use App\Models\Bumils;
use App\Models\Kaders;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class BumilsController extends Controller
{
    public function index()
    {
        $bumils = Bumils::all();
        return view('admin.ibuHamil', [
            'bumils' => $bumils
        ]);
    }


    public function create()
    {
        $bumil = Bumils::all();
        $kaders = Kaders::all();
        return view('admin.tambahDataBumil', [
            'bumil' => $bumil,
            'kaders' => $kaders,
        ]);
    }


    public function store(Request $request)
    {
        $dataBumil = $request->validate([
            'nama' => ['required', 'max:255'],
            'nik' => ['required', 'unique:bumils,nik', 'max:16'],
            'tmpt_lahir' => ['required', 'max:100'],
            'tgl_lahir' => ['required'],
            'alamat' => ['required', 'max:255'],
            'umur' => ['required'],
            'telp' => ['required'],
            'email' => ['required', 'max:100'],
            'tb' => ['required'],
            'bb' => ['required'],
            'lila' => ['required'],
            'kader_id_bumil' => ['required'],
        ]);

        Bumils::create($dataBumil);
        return redirect('/ibu-hamil');
    }


    public function formUpdateBumil($id)
    {
        $bumils = Bumils::find($id);
        $kaders = Kaders::all();
        return view('admin.updateDataBumil', [
            'bumils' => $bumils,
            'kaders' => $kaders,
            'title' => 'Update Data Ibu Hamil'
        ]);
    }


    public function update(Request $request, $id)
    {
        $bumils = Bumils::find($id);
        $kaders = Kaders::all();
        $bumils->nama = $request->nama;
        $bumils->nik = $request->nik;
        $bumils->tmpt_lahir = $request->tmpt_lahir;
        $bumils->tgl_lahir = $request->tgl_lahir;
        $bumils->alamat = $request->alamat;
        $bumils->umur = $request->umur;
        $bumils->tb = $request->tb;
        $bumils->bb = $request->bb;
        $bumils->lila = $request->lila;
        $bumils->kader_id_bumil = $request->kader_id_bumil;

        $bumils->save();
        return redirect('/ibu-hamil');
    }


    public function destroy($id)
    {
        Bumils::destroy(Bumils::find($id)->id);
        Bumils::destroy($id);
        return back();
    }
}
