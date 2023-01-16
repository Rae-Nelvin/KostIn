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
    public function index()
    {
        $transactions = Transaction::where('user_id', '=', Auth::user()->id)->get();

        return view('user.manage-transactions', compact('transactions'));
    }

    public function store(Request $request)
    {
        $transactions = Transaction::where('user_id', '=', Auth::user()->id)->get();
        foreach ($transactions as $transaction) {
            if($transaction->status == 'Unpaid')
            {
                return redirect('user/manage-transactions')->with('Error', 'You have upstanding transaction!');
            }
        }

        $request->validate([
            'mulai_stay' => ['required', 'date'],
            'lama_sewa' => ['required'],
        ]);

        $akhir_stay = Carbon::parse($request->mulai_stay)->addMonth($request->lama_sewa);

        $kost = Kost::find($request->kost_id);

        Transaction::create([
            'user_id' => Auth::user()->id,
            'kost_id' => $kost->id,
            'status' => 'Unpaid',
            'mulai_stay' => Carbon::make($request->mulai_stay),
            'akhir_stay' => Carbon::make($akhir_stay),
            'total_price' => $kost->price,
        ]);

        return redirect('user/manage-transactions');
    }

    public function submitBuktiBayar(Request $request)
    {
        $transaction = Transaction::find($request->transaction_id);
        $kost = Kost::find($transaction->kost_id);
        $imagePath = $request->file('image')->store('/public/images/transactions/' . Auth::user()->name . '/kost/' . $kost->name );
        $imagePath = str_replace('public/', '', $imagePath);

        $picture = Picture::create([
            'path' => $imagePath
        ]);

        $transaction->status = 'Pending';
        $transaction->bukti_pembayaran = $picture->id;
        $transaction->save();

        return redirect('user/manage-transactions');
    }

    public function delete($id)
    {
        $transaction = Transaction::find($id);
        $transaction->delete();
        
        return redirect('user/manage-transactions');
    }
}
