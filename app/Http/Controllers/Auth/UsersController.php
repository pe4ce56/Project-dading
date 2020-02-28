<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function index()
    {
        $user = \App\User::all()->first();
        return view('auth.setting', ['active' => 'admin', 'user' => $user]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'email' => 'required',
            'oldPassword' => 'required',
            'password' => 'between:8,255|confirmed',
        ]);

        $user = \App\User::find($id);

        if (Hash::check($request->oldPassword, $user->password)) {
            if ($request->has('password')) {
                $user->password = Hash::make($request->password);
            }
            $user->email = $request->email;
            $user->save();
            return redirect('admin/setting')->with('status', 'Email/Password berhasil diubah');
        } else {
            return redirect('admin/setting')->with('status', 'Password Salah');
        }
    }
}
