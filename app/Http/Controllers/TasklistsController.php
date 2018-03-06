<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Tasklist;    // 追加

class TasklistsController extends Controller
{
    
    
    
    
    public function index()
    {
        $tasklists = Tasklist::all();

        return view('tasklists.index', [
            'tasklists' => $tasklists,
        ]);
    }

    
    
    
    public function create()
    {
        $tasklist = new Tasklist;

        return view('tasklists.create', [
            'tasklist' => $tasklist,
        ]);
    }

   
   
   
       public function store(Request $request)
    {
        $this->validate($request, [
            'status' => 'required',   // 追加
        ]);
        
        $tasklist = new Tasklist;
        $tasklist->status = $request->status;
        $tasklist->content = $request->content;
        $tasklist->save();

        return redirect('/');
    }

    
    
    
    public function show($id)
    {
        $tasklists = Tasklist::find($id);

        return view('tasklists.show', [
            'tasklist' => $tasklists,
        ]);
        
        
        $tasklists->id;
        
        $hoge = [
            'value', 'value2', 'value3'
        ];
        echo $hoge[0];
        
        
        echo $tasklists['id'];
        echo $tasklists[0];

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tasklist = Tasklist::find($id);

        return view('tasklists.edit', [
            'tasklist' => $tasklist,
        ]);
    }

    
     public function update(Request $request, $id)
    {
         $this->validate($request, [
            'status' => 'required',   // 追加
        ]);
        
        $tasklist = Tasklist::find($id);
        $tasklist->status = $request->status;
        $tasklist->content = $request->content;
        $tasklist->save();

        return redirect('/');
    }

    
    
    
    public function destroy($id)
    {
        $tasklist = Tasklist::find($id);
        $tasklist->delete();

        return redirect('/');
    }
}
