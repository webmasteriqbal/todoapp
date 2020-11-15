<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TodoApp;

class TodoAppController extends Controller
{
    public function index()
    {
        return view('browse');
    }


    public function create()
    {
        return view('create-edit');
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);



        // TodoApp::create([
        //     'title' => $request->title,
        //     'content' => $request->content
        // ]);



        TodoApp::create($request->all());
    }
}
