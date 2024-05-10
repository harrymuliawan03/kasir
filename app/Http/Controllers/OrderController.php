<?php

namespace App\Http\Controllers;

use App\Models\Order;
use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index()
    {
        return view('order.index');
    }

    public function createOrder(Request $request)
    {
        $data = $request->all();
        $order = new Order();
        
        $order->user_id = Auth::id();
        $order->nama_pemesan = $data['nama_pemesan'];
        $order->nama_menu = $data['nama_menu'];
        $order->jml_porsi = $data['jml_porsi'];
        $order->total_harga = $data['total_harga'];
        $order->potongan_harga = $data['potongan_harga'];
        $order->grand_total = $data['grand_total'];
        $order->save();

        $request->session()->flash('success', 'Pesanan berhasil dibuat.');

        $pdf = PDF::loadView('bill.index', compact('order'))->setPaper('a4', 'landscape');
        return $pdf->stream();
    }
}