<?php

namespace App\Http\Controllers;
use App\Http\Requests\TodoRequest;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index(){
        return view('todos.index');
    }
    public function create(){
        return view('todos.create');
    }
    public function store(TodoRequest $request){
        //return $request->all();
        Todo::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'is_completed'=>0
        ]);
        $request->session()->flash('alert-success','todo created');
        return redirect()->route('todos.index'); 
    }
}

