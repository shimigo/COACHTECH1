<?php

namespace App\Http\Controllers;

use App\Models\Register;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $items = Register::all();
        return view('index', ['items' => $items]);
    }
    public function create(Request $request)
    {
        $this->validate($request, Register::$rules);
        $item = $request->all();
        Register::create($item);
        return redirect('/');
    }
     public function update(Request $request)
    {
        $this->validate($request, Register::$rules);
        $item = $request->all();
        unset($item['_token']);
        Register::where('id', $request->id)->update($item);
        return redirect('/');
    }
}