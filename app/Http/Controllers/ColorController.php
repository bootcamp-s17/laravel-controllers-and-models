<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ColorController extends Controller
{
    //

  function index() {

    $colors = \App\Color::all();

    return view('color.index', compact('colors'));

  }

  function store(Request $request) {

    $color = new \App\Color;

    $color->hex_code = $request->input('hexCode');
    $color->color_name = $request->input('colorName');

    $color->save();

    return redirect('color');

  }

}
