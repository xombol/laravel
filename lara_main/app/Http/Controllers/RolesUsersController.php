<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Models\UserLara;

class RolesUsersController extends Controller {

    public function submit(UserRequest $reg) {
        $user = new UserLara();
        $user->login = $reg->input('login');
        $user->name = $reg->input('name');
        $user->password = $reg->input('password');
        $user->role = 'admin';

        $user->save();
        return redirect()->route('admin_reg')->with('success','Пользователь был успешно добавлен!');
    }


}
