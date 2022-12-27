<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Merek;
use Illuminate\Http\Response;

class MerekController extends Controller
{
    public function index(){
        $merek = Merek::orderBy('nama_merek', 'asc')->paginate(10);
        return view('merek.index', compact('merek'));
    }

    public function create(){
        return view('merek.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'nama_merek' => 'required',
            'negara_asal' => 'required',
        ]);

        $merek = Merek::create([
            'nama_merek' => $request->nama_merek,
            'negara_asal' => $request->negara_asal,
        ]);

        return redirect()->route('merek.index')
            ->with('success', 'Merek ' . $merek['nama_merek'] . ' Berhasil Ditambahkan! ');
    }


}
