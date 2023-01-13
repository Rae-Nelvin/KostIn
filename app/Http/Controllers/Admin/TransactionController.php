<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::all();

        return view('admin.transactions', compact('transactions'));
    }

    public function detail($id)
    {
        $transaction = Transaction::find($id);

        return view('admin.transaction-detail', compact('transaction-detail'));
    }
}
