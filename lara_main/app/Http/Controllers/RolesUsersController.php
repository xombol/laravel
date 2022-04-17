<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UserRequest;

class RolesUsersController extends Controller {

    public function submit(UserRequest $reg) {
        $user = new User();
        $user->login = $reg->input('login');
        $user->name = $reg->input('name');
        $user->password = bcrypt($reg->input('password'));
        $user->assignRole('admin');

        $user->save();

        return redirect()
            ->route('admin.register')
            ->with('success','Пользователь был успешно добавлен!');
    }


}
