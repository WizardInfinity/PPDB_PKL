<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function formsiswa()
    {
        $kelas = Kelas::select('id', 'class')->get();
        return view ('tugas.formsiswa', ['kelas' => $kelas]);
    }
    public function edit(Request $request, $id)
    {
        $siswa = Siswa::with('kelass')->findOrFail($id);
        $kelas = Kelas::where('id', '!=', $siswa->kelas)->get(['id','class']);
        return view ('tugas.formsiswa-edit', ['siswa' => $siswa, 'kelas' => $kelas]);
    }
    public function ubah(Request $request, $id)
    {
        $siswa = Siswa::findOrFail($id);
        $siswa->update($request->all());
        return redirect('/tabelsiswa');
    }
    public function tabelsiswa()
    {
        $siswa = Siswa::all();
        return view ('tugas.tabelsiswa',['siswalist' => $siswa]);
    }
    public function hasil(Request $request)
    {
        $siswa = Siswa::create($request->all());
        return redirect('/tabelsiswa');
    }
    public function hapus($id)
    {
        $siswa = Siswa::findOrFail($id);
        return view('tugas.tabelsiswa-delete', ['siswa' => $siswa]);
    }
    public function lenyap($id)
    {
        $deletedSiswa = Siswa::findOrFail($id);
        $deletedSiswa->delete();

        return redirect ('/tabelsiswa');
    }
}
