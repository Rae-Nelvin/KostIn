<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use App\Models\KostDetail;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions= Transaction::query()
                            ->join('kosts', 'transactions.kost_id', '=', 'kosts.id')
                            ->join('users', 'transactions.user_id', '=', 'users.id')
                            ->join('pictures', 'transactions.bukti_pembayaran', '=', 'pictures.id')
                            ->where('kosts.owner_id', '=', Auth::user()->id)
                            ->select('transactions.*', 'pictures.path as path')
                            ->get();

        return view('owner.manage-transactions', compact('transactions'));
    }

    public function detail($id)
    {
        $transaction = Transaction::find($id);
        
        return view('owner.transasction-detail', compact('trasnaction'));
    }

    public function accept($id)
    {
        $transaction = Transaction::find($id);
        $transaction->status = 'Paid';
        $transaction->save();
        
        $kost = KostDetail::where('kost_id', '=', $transaction->kost_id)->first();
        $kost->jumlah_penghuni = $kost->jumlah_penghuni + 1;

        return redirect('owner/manage-transactions');
    }

    public function reject($id)
    {
        $transaction = Transaction::find($id);
        $transaction->status = 'Rejected';
        $transaction->save();

        return redirect('owner/manage-transactions');
    }
}
