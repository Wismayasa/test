<?php

namespace App\Http\Controllers;

use App\Models\Barangkeluar;
use App\Models\Barang;
use Illuminate\Http\Request;

class BarangkeluarController extends Controller
{
    public function index(Request $request)
    {   
        $keyword = $request->keyword;

        $data['page'] = 'barangkeluar';
        $data['result'] = Barangkeluar::where('tanggalKeluar', 'LIKE', '%'.$keyword.'%')
                                        ->orwhere('jumlahKeluar', 'LIKE', '%'.$keyword.'%')
                                        ->orwhere('satuan', 'LIKE', '%'.$keyword.'%')
                                        ->latest()->paginate(5);
        return view('page.barangkeluar.list')->with($data);
    }

    public function create()
    {   
        $data['page'] = 'barangkeluar';
        $data['barang'] = Barang::get();
        return view('page.barangkeluar.create')->with($data);
    }

    public function store(Request $request)
    {   
        $input = $request->all();
        $barangkeluar = Barangkeluar::create($input);
        if($barangkeluar){
            return redirect()->route('barangkeluar.index')->withErrors(['msg'=>'success']);
        }else{
            return redirect()->route('barangkeluar.index')->withErrors(['msg'=>'failed']);
        }
    }

    public function show($id)
    {
        
    }

    
    public function edit($id)
    {   
        $data['page'] = 'barangkeluar';
        $data['barang'] = Barang::get();
        $data['result'] = Barangkeluar::find($id);
        return view('page.barangkeluar.edit')->with($data);
    }

    public function update(Request $request, $id)
    {   
        $input = $request->all();

        $data = Barangkeluar::find($id);
        $data = $data->update($input);

        
        if($data){
            return redirect()->route('barangkeluar.index')->withErrors(['msg'=>'success']);
        }else{
            return redirect()->route('barangkeluar.index')->withErrors(['msg'=>'failed']);
        }
    }

    public function destroy($id)
    {   
        $data = Barangkeluar::find($id)->delete();
            
        if($data){
            return redirect()->back()->withErrors(['msg'=>'success']);
        }else{
            return redirect()->back()->withErrors(['msg'=>'failed']);
        }
    }
}
