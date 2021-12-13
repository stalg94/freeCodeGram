<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create()
    {
        return view('posts.create');
    }

    public function store(){

        $data = request()->validate([
            'caption' => 'required',
            'image' => ['required', 'image'],

        ]);

        auth()->user()->posts()->create($data);

        dd(request()->all());
    }
}
