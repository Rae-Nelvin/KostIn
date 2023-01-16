<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kost;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $kosts = Kost::where('status', 1)->count();
        $users = User::where('role_id', '!=', 1)->count();
        $transactions = Transaction::count();

        return view('admin.dashboard', compact('kosts', 'users', 'transactions'));
    }
}
