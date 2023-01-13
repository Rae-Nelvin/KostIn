<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function index()
    {
        $requests = Request::orderBy('created_at', 'ASC')->get();

        return view('admin.requests', compact('requests'));
    }

    public function accept($id)
    {
        $request = Request::find($id);
        $request->status = 'Accepted';
        $request->save();
        $user = User::find($request->user_id);
        $user->role_id = 2;
        $user->save();

        return redirect('admin.requests');
    }

    public function reject($id)
    {
        $request = Request::find($id);
        $request->status = 'Rejected';
        $request->save();

        return redirect('admin.requests');
    }
}
