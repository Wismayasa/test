<?php

namespace App\Http\Controllers;

use App\Models\Barangmasuk;
use App\Models\Barang;
use Illuminate\Http\Request;

class BarangmasukController extends Controller
{
    public function index(Request $request)
    {   
        $keyword = $request->keyword;

        $data['page'] = 'barangmasuk';
        $data['result'] = Barangmasuk::where('tanggalmasuk', 'LIKE', '%'.$keyword.'%')
                                        ->orwhere('supplier', 'LIKE', '%'.$keyword.'%')
                                        ->orwhere('jumlahMasuk', 'LIKE', '%'.$keyword.'%')
                                        ->orwhere('satuan', 'LIKE', '%'.$keyword.'%')
                                        ->latest()->paginate(5);
        return view('page.barangmasuk.list')->with($data);
    }

    public function create()
    {   
        $data['page'] = 'barangmasuk';
        $data['barang'] = Barang::get();
        return view('page.barangmasuk.create')->with($data);
    }

    public function store(Request $request)
    {   
        $input = $request->all();
        $barangmasuk = Barangmasuk::create($input);
        if($barangmasuk){
            return redirect()->route('barangmasuk.index')->withErrors(['msg'=>'success']);
        }else{
            return redirect()->route('barangmasuk.index')->withErrors(['msg'=>'failed']);
        }
    }

    public function show($id)
    {
        
    }

    
    public function edit($id)
    {   
        $data['page'] = 'barangmasuk';
        $data['barang'] = Barang::get();
        $data['result'] = Barangmasuk::find($id);
        return view('page.barangmasuk.edit')->with($data);
    }

    public function update(Request $request, $id)
    {   
        $input = $request->all();

        $data = Barangmasuk::find($id);
        $data = $data->update($input);

        
        if($data){
            return redirect()->route('barangmasuk.index')->withErrors(['msg'=>'success']);
        }else{
            return redirect()->route('barangmasuk.index')->withErrors(['msg'=>'failed']);
        }
    }

    public function destroy($id)
    {   
        $data = Barangmasuk::find($id)->delete();
            
        if($data){
            return redirect()->back()->withErrors(['msg'=>'success']);
        }else{
            return redirect()->back()->withErrors(['msg'=>'failed']);
        }
    }
}
