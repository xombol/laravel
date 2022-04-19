<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller {

    public function index()
    {
        return view('admin.register');
    }
    public function register(RegisterRequest $request)
    {
        $user = new User();

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->role = 'admin';
        $user->ip = $request->ip();

        $user->save();
        $user->assignRole('admin');

        return redirect()->back()->with('success','Сообщение было давлено');


    }
    public function index_user()
    {
        return view('user.register');
    }
    public function register_user(RegisterRequest $request)
    {
        $user = new User();

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->role = 'user';
        $user->ip = $request->ip();

        $user->save();
        $user->assignRole('admin');

        return redirect()->back()->with('success','Пользователь был добавлен!');


    }


}
