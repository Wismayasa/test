<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index(Request $request)
    {   
        $keyword = $request->keyword;

        $data['page'] = 'barang';
        $data['result'] = Barang::where('namaBarang', 'LIKE', '%'.$keyword.'%')
                                ->orwhere('satuan', 'LIKE', '%'.$keyword.'%')
                                ->latest()->paginate(5);
        return view('page.barang.list')->with($data);
    }

    public function create()
    {   
        $data['page'] = 'barang';
        return view('page.barang.create')->with($data);
    }

    public function store(Request $request)
    {   
        $input = $request->all();

        $error_validasi = NULL;

        $exsist = Barang::where('namaBarang',$input['namaBarang'])->count();
        if($exsist > 0){
            $error_validasi['namaBarang'] ='Nama Barang sudah ada!';
        }
        if($error_validasi != NULL){
            return redirect()->back()->withInput()->withErrors(['msg'=>$error_validasi]);
        }

        $barang = Barang::create($input);
        if($barang){
            return redirect()->route('barang.index')->withErrors(['msg'=>'success']);
        }else{
            return redirect()->route('barang.index')->withErrors(['msg'=>'failed']);
        }
    }
    
    public function edit($id)
    {   
        $data['page'] = 'barang';
        $data['result'] = Barang::find($id);
        return view('page.barang.edit')->with($data);
    }

    public function update(Request $request, $id)
    {   
        $input = $request->all();

        $error_validasi = NULL;

        $exsist = Barang::where('namaBarang',$input['namaBarang'])->count();
        if($exsist > 0){
            $error_validasi['namaBarang'] ='Nama Barang sudah ada!';
        }
        if($error_validasi != NULL){
            return redirect()->back()->withInput()->withErrors(['msg'=>$error_validasi]);
        }

        $data = Barang::find($id);
        $data = $data->update($input);

        
        if($data){
            return redirect()->route('barang.index')->withErrors(['msg'=>'success']);
        }else{
            return redirect()->route('barang.index')->withErrors(['msg'=>'failed']);
        }
    }
}
