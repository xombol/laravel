<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact_new;
use App\Models\User;

class UsersController extends Controller {

    public function admins()
    {
        $admins = User::where('role', 'admin')->paginate(15);

        return view('admin.users.admins',['users' => $admins]);

    }
    public function clients()
    {
        $clients = User::where('role', 'user')->paginate(15);

        return view('admin.users.admins',['users' => $clients]);

    }
}
