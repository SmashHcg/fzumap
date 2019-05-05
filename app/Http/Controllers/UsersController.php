<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\User;

class UsersController extends Controller
{
    public function create()
    {
        return view('users.create');
    }

    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:8|max:16',
            'password' => 'required|confirmed|min:6|max:16'
        ]);

        $user = User::create([
            'name' => $request->name,
            'password' => bcrypt($request->password),
        ]);

        session()->flash('success', '欢迎使用福大校园地图APP~');
        return redirect()->route('users.show', [$user]);
    }
}