<?php

namespace App\Http\Controllers;

use App\Models\Phonebook;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $users = Phonebook::orderBy('name')->simplePaginate(10);
        return view('home', compact('users'));
    }
}
