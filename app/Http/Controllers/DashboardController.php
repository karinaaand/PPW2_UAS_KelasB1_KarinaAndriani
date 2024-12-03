<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;

class DashboardController extends Controller
{
    public function index()
    {

        $transaksi_count = Transaksi::withTrashed()->count();

        return view('dashboard', ['transaksi_count' => $transaksi_count]);
    }
}
