<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Page;

use App\Http\Requests;

class MainCtrl extends Controller
{
    public function  index()
    {
        $home = Page::where('route', 'home')->first();
        return view('index', ['home' => $home]);

    }
    public function show($route)
    {
        $home = Page::where('route', $route)->first();
        return view('index', ['home' => $home]);
    }
    public function edit($route)
    {
        $home = Page::where('route', $route)->first();
        return view('edit', ['home' => $home]);
    }
    public function update(Request $request)
    {
        $reqALL = $request->all();
        /*dd($reqALL);*/
        $content = Page::where('route','home')->first();
        /*$content -> fill($reqALL);*/
        $content -> title = $reqALL['title'];
        $content -> description = $reqALL['description'];
        $edit_content = $content -> content;
        $edit_content -> logo = $request->input('logo');
        $content -> content = $edit_content;
        $content ->save();
    }

}
