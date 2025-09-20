<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    // Menampilkan halaman login (opsional jika pakai Route::view)
    public function showLogin()
    {
        return view('admin.login');
    }

    // Proses login
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $admin = Admin::where('email', $request->email)->first();

        if($admin && Hash::check($request->password, $admin->password)){
            session(['admin_logged_in' => true, 'admin_id' => $admin->id]);
            return redirect()->route('admin.beranda');
        }

        return back()->withErrors(['email' => 'Email atau password salah']);
    }

    // Logout
    public function logout()
    {
        session()->forget(['admin_logged_in','admin_id']);
        return redirect()->route('admin.login');
    }
}
