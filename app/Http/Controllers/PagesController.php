<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class PagesController extends Controller
{
    public function new(){
        // return response(null, 500)->view('errors.500');
        return abort(404);
    }

    public function store(Request $request){
        return abort(404);
        return response(null, 500)->view('errors.500');
        $request->validate([
            'todo' => 'required'
        ]);
        $todo_name =  $request->todo;
        // $todo_name = $request->input('todo');
        $new_todo = new Todo();
        $new_todo->todo = $todo_name;
        $new_todo->save();

        return redirect()->back();
    }
}
