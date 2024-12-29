<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function formkelas()
    {
        return view ('tugas.formkelas');
    }
    public function edit(Request $request, $id)
    {
        $kelas = Kelas::findOrFail($id);
        return view ('tugas.formkelas-edit', ['kelas' => $kelas]);
    }
    public function ubah(Request $request, $id)
    {
        $kelas = Kelas::findOrFail($id);
        $kelas->update($request->all());
        return redirect('/tabelkelas');
    }
    public function tabelkelas()
    {
        $kelas = Kelas::all();
        return view ('tugas.tabelkelas',['kelaslist' => $kelas]);
    }
    public function hasil(Request $request)
    {
        $kelas = Kelas::create($request->all());
        return redirect('/tabelkelas');
    }
    public function hapus($id)
    {
        $kelas = Kelas::findOrFail($id);
        return view('tugas.tabelkelas-delete', ['kelas' => $kelas]);
    }
    public function lenyap($id)
    {
        $deletedKelas = Kelas::findOrFail($id);
        $deletedKelas->delete();

        return redirect ('/tabelkelas');
    }
}
