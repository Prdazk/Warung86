<?php

namespace App\Http\Controllers;

use App\Models\Menu;

class UserMenuController extends Controller
{
    public function popular()
{
    $menus = Menu::where('status', 'tersedia')->get();
    return view('user.dashboard', compact('menus')); // <-- pakai 'user.dashboard'
}

}
