<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function indexRegister()
    {
        return view('admin.auth.register');
    }

    public function register(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
        ]);
        if ($validation->fails()) {
            return redirect()->back()->withErrors($validation)->withInput();
        }

        try {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'is_admin' => ($request->email === "admin@iad.com") ? true : false,
            ]);
        } catch (\Exception $e) {
            Log::error("User can't Registerd get this error: ", $e->getMessage());
            return redirect()->back()->with('error', $e->getMessage());
        }

        if ($user) {
            Auth::login($user);
        }
        return redirect('/admin/create/blog');
    }

    public function indexLogin()
    {
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if ($validation->fails()) {
            return redirect()->back()->withErrors($validation)->withInput();
        }
        $user = User::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            Auth::login($user);
            return redirect('/admin/create/blog');
        } else {
            return redirect()->back()->with('error', 'Incorrect email or password');
        }
    }
}
