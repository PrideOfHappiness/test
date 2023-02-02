<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Merek;
use Illuminate\Http\Response;

class MerekController extends Controller
{
    public function index(){
        $merek = Merek::orderBy('nama_merek', 'asc')->paginate(10);
        $jumlahMerek = Merek::orderBy('nama_merek', 'asc')->count();
        return view('merek.index', compact('merek', 'jumlahMerek'));
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

    public function edit($id){
        $merek = Merek::find($id);
        return view('merek.edit', compact('merek'));
    }

    public function update(Request $request, $id){
        $merek = Merek::find($id);

        $this->validate($request, [
            'nama_merek' => 'required',
            'negara_asal' => 'required',
        ]);

        $merek->update($request->all());

        return redirect()->route('merek.index')
            ->with('success', 'Data Merek ' . $merek['nama_merek'] . ' Berhasil Diubah! ');
    }

    public function destroy($id){
        $merek = Merek::find($id);
        $merek->delete();

        return redirect()->route('merek.index')
            ->with('success', 'Merek ' . $merek['nama_merek'] . ' Berhasil DIhapus! ');
    }

    public function show($id){
        $merek = Merek::find($id);
        return view('merek.show', compact('merek'));
    }


}
