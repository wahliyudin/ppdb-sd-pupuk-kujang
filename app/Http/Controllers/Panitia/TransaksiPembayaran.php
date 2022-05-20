<?php

namespace App\Http\Controllers\Panitia;

use App\Http\Controllers\Controller;
use App\Models\ItemPayment;
use App\Models\TypeOfPayment;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TransaksiPembayaran extends Controller
{
    public function index()
    {
        return view('panitia.transaksi-pembayaran.index', [
            'breadcrumb' => [
                'title' => 'Transaksi',
                'path' => [
                    'Transaksi' => 0
                ]
            ],
            'students' => User::with('identity')->where('status_kelulusan', User::STATUS_LULUS)->get(),
            'payment_number' => generatePaymentNumber(new ItemPayment(), 'NC', 'payment_number'),
            'type_of_payments' => TypeOfPayment::latest()->get()
        ]);
    }

    public function payment(Request $request)
    {
        $request->validate([
            'payment_number' => 'required',
            'payment' => 'required',
            'description' => 'required',
            'tanggal' => 'required'
        ]);
        $data = $request->all();
        $data['billing'] = replaceRupiah($data['billing']);
        $data['payment'] = replaceRupiah($data['payment']);
        $data['tanggal'] = Carbon::parse($data['tanggal'])->format('Y-m-d');
        dd($data);
    }
}
