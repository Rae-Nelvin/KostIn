<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::where('role_id', '!=', 1)->get();

        return view('admin.manage-users', compact('users'));
    }

    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect('admin/manage-users');
    }
}
