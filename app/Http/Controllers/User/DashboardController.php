<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $transactions = Transaction::where('user_id', '=', Auth::user()->id)->get();

        return view('user.dashboard', compact('transactions'));
    }
}
