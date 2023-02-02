<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\Models\PlatNomor;
use Illuminate\Http\Response;

class PlatNomorController extends Controller
{
    public function index(){
        $plat_nomor = PlatNomor::orderBy('kode_negara', 'asc')->paginate(15);
        return view('platNomor.index', compact('plat_nomor'));
    }

    public function create(){
        return view('platNomor.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'kode_negara' => 'required',
            'nama_negara' => 'required',
            'foto_plat' => 'mimes:jpg,jpeg,png|max:2048',
        ]);

        if($request->hasFile('foto_plat')){
            $foto_plat = $request->file('foto_plat');
            $namaFile = $foto_plat->getClientOriginalName();
            $foto_plat->move('upload/platNomor/', $namaFile);
        }

        $plat_nomor = PlatNomor::create([
            'kode_negara' => $request->kode_negara,
            'nama_negara' => $request->nama_negara,
            'namaFile' => $namaFile,
        ]);

        return redirect()->route('plat_nomor.index')
            ->with('success', 'Plat Nomor ' . $plat_nomor['nama_negara'] . ' Berhasil Ditambah!');
    }

}
