<?php

namespace App\Http\Controllers;

use App\Http\Requests\TransaksiRequest;
use App\Models\Paket_laundry;
use App\Models\Pelanggan;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $data = Transaksi::orderBy('created_at','desc')->get();
        return view('transaksi.index', compact('data'));
    }
    public function create()
    {
        $data = Pelanggan::all();
        $paket = Paket_laundry::all();
        return view('transaksi.create', compact('data','paket'));
    }
    public function store(TransaksiRequest $request)
    {
        $paket = Paket_laundry::where('id',$request->paket_laundry_id)->first();
        $request->request->add(['harga' => $this->totalHarga($paket,$request)]);
        Transaksi::create($request->all());
        return redirect('transaksi');
    }

    public function totalHarga($paket,$request)
    {
        if ($request->antar == 'Ya') {
            $result = $paket->harga * $request->berat + 3000;
        } else {
            $result = $paket->harga * $request->berat;
        }
        return $result;    
    }

    public function edit($id)
    {
        $data = Transaksi::find($id);
        $pelanggan = Pelanggan::all();
        $paket = Paket_laundry::all();
        return view('transaksi.edit', compact('data','pelanggan','paket'));
    }

    public function update(TransaksiRequest $request, $id)
    {
        $paket = Paket_laundry::where('id',$request->paket_laundry_id)->first();
        $request->request->add(['harga' => $this->totalHarga($paket,$request)]);
        Transaksi::find($id)->update($request->all());
        return redirect('transaksi');
    }

    public function destroy($id)
    {
        Transaksi::find($id)->delete();
        return back();
    }
}
