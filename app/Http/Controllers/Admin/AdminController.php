<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Manajemen;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $books = Manajemen::with('detailmanajemen')->get();

        return view('admin.dashboard', compact('books'));
     }
    
}
