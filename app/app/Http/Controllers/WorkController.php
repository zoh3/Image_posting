<?php

namespace App\Http\Controllers;

use App\Work;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    public function index(Work $work)
    {
        return view('index')->with(['works'=> $work->get()]);
    }
    
    public function show(Work $work)
    {
        return view('show')->with(['work' => $work]);
    }
    
    public  function create()
    {
        return view('create');
    }
    
    public function store(Request $request, Work $work)
    {
        // body保存処理準備
        $input = $request['work'];
        
        // 画像があったら以下の保存処理
        if($request->image){
            $image = $request->file('image');
            $path = Storage::disk('s3')->putFile('/', $image, 'public');
            $work->image = Storage::disk('s3')->url($path);
        }
        
        // 保存処理
        $work->fill($input)->save();
        return redirect('/');
    }
    
    public function edit(Work $work)
    {
        return view('edit')->with(['work' => $work]);
    }
    
    public function update(Request $request, Work $work)
    {
        $input = $request['work'];
        $work->fill($input)->save();
        return redirect('works/' . $work->id);
    }
}
