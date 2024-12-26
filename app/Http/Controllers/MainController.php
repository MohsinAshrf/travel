<?php

namespace App\Http\Controllers;
// namespace App\Http\Controllers\Auth;

use App\Models\Book;
use App\Models\Contact;
use App\Models\Pkg;
use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class MainController extends Controller
{
    public function dashboard(){
        $totalUsers = User::count();
        $totalContact = Contact::count();
        $totalBook = Book::count();
        $totalPkg = Pkg::count();
        return view('admin.dashboard',compact('totalUsers','totalContact','totalBook','totalPkg'));
    }
    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        // dd(Hash::make('password'));
        
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($request->only('email', 'password'), $request->remember)) {
            // Redirect to dashboard if login is successful
            return redirect()->route('dashboard');
        }

        // Redirect back with an error message
        return back()->with('error', 'Invalid credentials.');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
