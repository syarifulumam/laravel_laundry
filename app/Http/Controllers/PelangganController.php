<?php

namespace App\Http\Controllers;

use App\Http\Requests\PelangganRequest;
use Illuminate\Support\Str;
use App\Models\Pelanggan;

class PelangganController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $data = Pelanggan::orderBy('id','desc')->get();
        return view('pelanggan.index', compact('data'));
    }
    public function create()
    {
        return view('pelanggan.create');
    }
    public function store(PelangganRequest $request)
    {
        $request['telepon'] = Str::remove('-',$request->telepon);
        Pelanggan::create($request->all());
        return redirect('pelanggan');
    }
    public function edit($id)
    {
        $data = Pelanggan::find($id);
        return view('pelanggan.edit', compact('data'));
    }
    public function update(PelangganRequest $request,$id)
    {
        Pelanggan::find($id)->update($request->all());
        return redirect('pelanggan');
    }
    public function destroy($id)
    {
        Pelanggan::find($id)->delete();
        return back();
    }
}
