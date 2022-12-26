<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Merek;
use Illuminate\Http\Response;

class MerekController extends Controller
{
    public function index(){
        $merek = Merek::orderBy('merek', 'asc')->paginate(20);
        return view('merek.index', compact('merek'));
    }

    public function create(){
        return view('merek.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'merek' => 'required',
            'negara_asal' => 'required',
        ]);

        $merek = Merek::create([
            'merek' => $request->merek,
            'negara_asal' => $request->negara_asal,
        ]);

        return redirect()->route('merek.index')
            ->with('success', 'Merek ' . $merek['merek'] . ' Berhasil Ditambahkan! ');
    }


}
