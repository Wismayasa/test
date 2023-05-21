<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    public function index(Request $request)
    {   
        $keyword = $request->keyword;

        $data['page'] = 'user';
        $data['result'] = User::where('name', 'LIKE', '%'.$keyword.'%')
                                ->orwhere('name', 'LIKE', '%'.$keyword.'%')
                                ->orwhere('username', 'LIKE', '%'.$keyword.'%')
                                ->latest()->paginate(5);
        
        return view('page.user.list')->with($data);
    }

    public function create()
    {   
        $data['page'] = 'user';
        return view('page.user.create')->with($data);
    }

    public function store(Request $request)
    {   
        $input = $request->except('password');
        $input['password'] = Hash::make($request->password);
        $user = User::create($input);
        if($user){
            return redirect()->route('user.index')->withErrors(['msg'=>'success']);
        }else{
            return redirect()->route('user.index')->withErrors(['msg'=>'failed']);
        }
    }

    public function show($id)
    {
        
    }

    
    public function edit($id)
    {   
        $data['page'] = 'user';
        $data['result'] = user::find($id);
        return view('page.user.edit')->with($data);
    }

    public function update(Request $request, $id)
    {   
        $input = $request->except('password');

        if($request->password != ''){
            $input['password'] = Hash::make($request->password);
        }
        $data = User::find($id);
        $data = $data->update($input);

        
        if($data){
            return redirect()->route('user.index')->withErrors(['msg'=>'success']);
        }else{
            return redirect()->route('user.index')->withErrors(['msg'=>'failed']);
        }
    }

    public function destroy($id)
    {   
        $data = User::find($id)->delete();
            
        if($data){
            return redirect()->back()->withErrors(['msg'=>'success']);
        }else{
            return redirect()->back()->withErrors(['msg'=>'failed']);
        }
    }
}
