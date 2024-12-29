<?php

namespace App\Http\Controllers;

use App\Models\Hasil;
use App\Models\FinalProject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\FormCreateRequest;

class FinalProjectController extends Controller
{
    public function website()
    {
        return view ('finalproject.website');
    }
    public function index()
    {
        return view ('finalproject.main');
    }
    public function home()
    {
        return view ('finalproject.home');
    }
    public function formpendaftaran()
    {
        $hasil = Hasil::select('id', 'hasil')->get();
        return view ('finalproject.formpendaftaran',['hasil' => $hasil]);
    }
    public function tambah_formpendaftaran (FormCreateRequest $request)
    {
        // $validated = $request->validate([
        //     'nama' => 'required'
        // ]);

        $extension = $request->file('photo')->getClientOriginalExtension();
        $newName = $request->nama.'-'.now()->timestamp.'.'. $extension;
        $request->file('photo')->storeAs('photo', $newName);

        $request['image'] = $newName;
        $data = FinalProject::create($request->all());

        if ($data) {
            Session::flash('status', 'success');
            Session::flash('message', 'Data Baru Berhasil Ditambahkan');
        }

        return redirect ('/statuspenerimaan');
    }
    public function edit_formpendaftaran (Request $request, $id)
    {
        $data = FinalProject::findOrFail($id);
        return view ('finalproject.edit-formpendaftaran', ['data' => $data]);
    }
    public function statuspenerimaan()
    {
        if (Auth::user()->name != 'Admin' && Auth::user()->name != 'Teacher') {
            $data = FinalProject::Paginate(10);
        } else {
            $data = FinalProject::Paginate(3); 
        }
        return view ('finalproject.statuspenerimaan', ['datalist' => $data]);
    }
    public function statuspenerimaan_hasil (Request $request, $id)
    {
        // $data = FinalProject::findOrFail($id);
        // return view ('finalproject.statuspenerimaan-hasil', ['data' => $data]);
        $data = FinalProject::with('result')->findOrFail($id);
        $hasil = Hasil::where('id', '!=', $data->hasil_peserta)->get(['id','hasil']);
        return view ('finalproject.statuspenerimaan-hasil', ['data' => $data, 'hasil' => $hasil]);
    }
    public function statuspenerimaan_hasil_ubah(Request $request, $id)
    {
        $hasil = FinalProject::findOrFail($id);
        $hasil->update($request->all());

        return redirect ('/hasilpeserta');
    }
    public function ubah_statuspenerimaan(Request $request, $id)
    {
        $extension = $request->file('photo')->getClientOriginalExtension();
        $newName = $request->nama.'-'.now()->timestamp.'.'. $extension;
        $request->file('photo')->storeAs('photo', $newName);

        $request['image'] = $newName;
        $data = FinalProject::findOrFail($id);
        $data->update($request->all());

        return redirect ('/statuspenerimaan');
    }
    public function konfirmasi_hapus($id)
    {
        $data = FinalProject::findOrFail($id);
        return view ('finalproject.hapus-statuspenerimaan', ['data' => $data]); 
    }
    public function lenyap($id)
    {
        $deletedData = FinalProject::findOrFail($id);
        $deletedData->delete();

        return redirect('/statuspenerimaan');
    }
    public function hasilpeserta(Request $request)
    {
        $keyword = $request->keyword;   

        $data = FinalProject::with('result')
                            ->where('nama', 'LIKE', '%'.$keyword.'%')
                            ->orWhere ('asal_sekolah', 'LIKE', '%'.$keyword.'%')
                            ->orWhereHas('result', function($query) use($keyword) {
                                $query->where('hasil', 'LIKE', '%'.$keyword.'%');
                            })
                            ->paginate(8);
        return view ('finalproject.hasilpeserta', ['datalist' => $data]);
    }
    
}