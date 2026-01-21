<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;

class TransactionController extends Controller
{
    public function store(Request $request)
    {
        $trx = Transaction::create([
            'member_id'       => $request->member_id,
            'book_id'         => $request->book_id,
            'tanggal_pinjam'  => now(),
            'status'          => 'dipinjam'
        ]);

        return response()->json($trx, 201);
    }

    public function returnBook($id)
    {
        $trx = Transaction::findOrFail($id);

        $trx->update([
            'tanggal_kembali' => now(),
            'status'          => 'dikembalikan'
        ]);

        return response()->json($trx);
    }
}
