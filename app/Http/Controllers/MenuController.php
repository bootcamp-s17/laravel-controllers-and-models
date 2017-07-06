<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    
  function index() {

    $title = "Wampa's Ice Cream Cavern";
    $items = \App\MenuItem::all();

    return view('icecream.menu', compact('title', 'items'));

  }




}
