<?php

namespace App\Http\Controllers;

use App\Role;
use http\Client\Curl\User;
use Illuminate\Http\Request;

class RoleUserController extends Controller
{
    public function syncUserRole()
    {
        $user = User::first();
        $user->roles()->sync([1, 2]);
        $user->roles()->syncWithoutDetaching([3]);
    }

    public function syncRoleUser()
    {
        $role = Role::find(2);
        $role->users()->syncWithoutDetaching([2]); // UserId
    }
}
