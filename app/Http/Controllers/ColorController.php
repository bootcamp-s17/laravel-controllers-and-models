<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ColorController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


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

  function destroy($id) {

    $color = \App\Color::find($id);
    $color->delete();
    return redirect('color');

  }


}
