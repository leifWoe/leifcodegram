<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
       return view('posts.create');
    }
    public function store()
    {
        //return view('posts.create');
        $data = request()->validate([
            'caption' => 'required',
            'image' => ['required', 'image'],
        ]);

        dd(\request('image')->store('uplaods', 'public'));

        auth()->user()->posts()->create($data);

        dd(request()->all());
    }
}
