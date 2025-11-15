<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $page = \App\Models\Page::where('url','/')->first();
    // dd($page);
    if(!$page) abort(404);
    $menu = \App\Models\Page::select('tytul','url')
                    ->where('opublikowana', true)
                    ->where('aktywny', true)
                    ->get();

    return view('strona',compact('page','menu'));
});

Route::get('/{slug}', function ($slug) {
    $page = \App\Models\Page::where('url',$slug)->first();
    if(!$page) abort(404);
    $menu = \App\Models\Page::select('tytul','url')
                    ->where('opublikowana', true)
                    ->where('aktywny', true)
                    ->get();

    return view('strona',['page'=>$page,'menu'=>$menu]);
});
