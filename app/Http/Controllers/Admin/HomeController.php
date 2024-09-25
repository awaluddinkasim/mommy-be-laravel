<?php

namespace App\Http\Controllers\Admin;

use App\Models\Makanan;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class HomeController extends Controller
{
    public function index(): View
    {
        return view('pages.home', [
            'foods' => Makanan::count(),
            'users' => User::count(),
        ]);
    }
}
