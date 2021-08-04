<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AppModel;

class AppController extends Controller
{
    public function index() {
        $allItem = AppModel::all();
        return view('welcome', ['items' => $allItem]);
    }

    public function store(Request $request) {
        $newItem = new AppModel();
        $newItem->setItem($request->get('item'));
        $newItem->save();
        return redirect()->route('index_path');
    }
}
