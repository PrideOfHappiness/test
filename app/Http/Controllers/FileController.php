<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\Models\File;
use App\Models\Mesin;
use App\Models\Merek;
use App\Models\PlatNomor;
use Illuminate\Http\Response;

class FileController extends Controller
{
    public function index(){
        $file = File::latest()->paginate(15);
        return view('file.index', compact('file'));
    }

    public function create(){
        $merek = Merek::orderBy('nama_merek', 'asc')->get();
        $platNomor = PlatNomor::selectRaw("id, kode_negara, nama_negara, concat(plat_nomors.kode_negara, ' - ', plat_nomors.nama_negara)
            as negara")->orderBy('negara', 'asc')->get();
        $mesin = Mesin::orderBy('nama_mesin', 'asc')->get();
        return view('file.create', compact('merek', 'platNomor', 'mesin'));
    }

    public function store(Request $request){
        $this->validate($request, [
            'id_merek' => 'required',
            'nama' => 'required',
            'id_mesin' => 'required',
            'id_plat' => 'required',
            'foto_mobil' => 'mimes:jpg,jpeg,png|max:2048',
        ]);

        if($request->hasFile('foto_mobil')){
            $foto_mobil = $request->file('foto_mobil');
            $namaFile = $foto_mobil->getClientOriginalName();
            $foto_mobil->move('upload/mobil/', $namaFile);
        }

        $file = File::create([
            'id_merek' => $request->id_merek,
            'nama' => $request->nama,
            'id_mesin' => $request->id_mesin,
            'id_plat' => $request->id_plat,
            'namaFile' => $namaFile,
        ]);

        return redirect()->route('mobil.index')
            ->with('success', 'Data Mobil Berhasil Ditambah!');
    }
}
