<?php

namespace App\Http\Controllers;

use App\Http\Requests\PaketLaundryRequest;
use App\Models\Paket_laundry;
use Illuminate\Http\Request;

class PaketLaundryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $data = Paket_laundry::orderBy('created_at','desc')->get();
        return view('paket_laundry.index', compact('data'));
    }
    public function create()
    {
        return view('paket_laundry.create');
    }
    public function store(PaketLaundryRequest $request)
    {
        Paket_laundry::create($request->all());
        return redirect('paket_laundry');
    }
    public function edit($id)
    {
        $data = Paket_laundry::find($id);
        return view('paket_laundry.edit',compact('data'));
    }
    public function update(PaketLaundryRequest $request,$id)
    {
        Paket_laundry::find($id)->update($request->all());
        return redirect('paket_laundry');
    }
    public function destroy($id)
    {
        Paket_laundry::find($id)->delete();
        return back();
    }
}
