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
    public function update(Request $request, $id){
    
        $this->validate($request, Register::$rules);
        $form = $request->all(); // 更新された値
        unset($form['_token']); // いらないカラムを削除
        $register = Register::where('id', $id)->update($form); //Register::fin($id)で該当のデータを探す。で、更新された値の中から$idに当たる値を読んで、変数$registerに代入。更新する
        return redirect('/');
    }
    public function delete(Request $request, $id){  
        Register::find($request->id)->delete($id);
        return redirect('/');    
    }
}