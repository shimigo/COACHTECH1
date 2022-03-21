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
        $form = $request->all();
        Register::create($form);
        return redirect('/');
    }
}