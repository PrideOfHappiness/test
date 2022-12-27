<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mesin;
use Illuminate\Http\Response;

class MesinController extends Controller
{
    public function index(){
        $mesin = Mesin::orderBy("nama_mesin", 'asc')->paginate(5);
        return view('mesin.index', compact('mesin'));
    }

    public function create(){
        return view('mesin.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'nama_mesin' => 'required',
        ]);

        $mesin = Mesin::create([
            'nama_mesin' => $request->nama_mesin,
        ]);

        return redirect()->route('mesin.index')
            ->with('success', 'Data Mesin ' . $mesin['nama_mesin'] . ' Berhasil Ditambahkan! ');
    }

}
