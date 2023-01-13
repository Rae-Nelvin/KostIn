<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use App\Models\KostDetail;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        $all_transactions = Transaction::all();
        $transactions[] = null;
        $i = 0;
        foreach ($all_transactions as $transaction) {
            $transactions[$i] = $transaction;
            $i++;
        }

        return view('owner.transactions', compact('transactions'));
    }

    public function detail($id)
    {
        $transaction = Transaction::find($id);
        
        return view('owner.transasction-detail', compact('trasnaction'));
    }

    public function acceptTransaction($id)
    {
        $transaction = Transaction::find($id);
        $transaction->status = 'Paid';
        $transaction->save();
        
        $kost = KostDetail::where('kost_id', '=', $transaction->kost_id);
        $kost->jumlah_penghuni = $kost->jumlah_penghuni + 1;

        return redirect('owner/transactions');
    }

    public function rejectTransaction($id)
    {
        $transaction = Transaction::find($id);
        $transaction->status = 'Rejected';
        $transaction->save();

        return redirect('owner/transactions');
    }
}
