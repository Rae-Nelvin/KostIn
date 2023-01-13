<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Kost;
use App\Models\Picture;
use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function create($id)
    {
        $transactions = Kost::find($id);

        return view('user.cart', compact('kost'));
    }

    public function store(Request $request)
    {
        $transactions = Transaction::where('user_id', '=', Auth::user()->id)->get();
        foreach ($transactions as $transaction) {
            if($transaction->status == 'Unpaid')
            {
                return redirect('user/dashboard')->with('Error', 'You have upstanding transaction!');
            }
        }

        $request->validate([
            'mulai_stay' => ['required', 'date'],
            'akhir_stay' => ['requuired', 'date'],
        ]);

        $kost = Kost::find($request->kost_id);

        Transaction::create([
            'user_id' => Auth::user()->id,
            'kost_id' => $kost->id,
            'status' => 'Unpaid',
            'mulai_stay' => Carbon::make($request->mulai_stay),
            'akhir_stay' => Carbon::make($request->akhir_stay),
            'total_price' => $kost->price,
        ]);

        return redirect('user/dashboard');
    }

    public function submitBuktiBayar(Request $request)
    {
        $transaction = Transaction::find($request->transaction_id);
        $kost = Kost::find($transaction->kost_id);
        $imagePath = $request->file('image')->store('/public/images/transactions/' . Auth::user()->name . '/kost/' . $kost->name );
        $imagePath = str_replace('public/', '', $imagePath);

        $cover = Picture::create([
            'path' => $imagePath
        ]);

        $transaction->status = 'Pending';
        $transaction->bukti_pembayaran = $cover->id;
        $transaction->save();

        return redirect('user/dashboard');
    }

    public function delete($id)
    {
        $transaction = Transaction::find($id);
        $transaction->delete();
        
        return redirect('user/dashboard');
    }
}
