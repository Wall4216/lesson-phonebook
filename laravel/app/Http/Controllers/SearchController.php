<?php

namespace App\Http\Controllers;

use App\Models\Phonebook;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $s = $request->s;
        $users = Phonebook::where('name', 'LIKE', "%{$s}")->OrderBy('name')->paginate(10);
        return view('home', compact('users'));
    }
}
