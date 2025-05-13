<?php

namespace App\Http\Controllers;

use App\Models\Manajemen;
use Illuminate\Http\Request;

class BacaController extends Controller
{
    public function index(string $id) 
    {
        $book = Manajemen::with('detailmanajemen')->findOrFail($id);

        return view('baca', compact('book'));
    }
}
