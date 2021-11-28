<?php

namespace App\Http\Controllers;

use App\Http\Requests\OperatorRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class OperatorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $data = User::orderBy('created_at','desc')->get();
        return view('operator.index', compact('data'));
    }
    public function create()
    {
        return view('operator.create');
    }
    public function store(OperatorRequest $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'password' => Hash::make($request->password),
        ]);
        return redirect('operator');
    }
    public function edit($id)
    {
        $data = User::find($id);
        return view('operator.edit', compact('data'));
    }
    public function update(OperatorRequest $request,$id)
    {
        User::find($id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
        ]);

        return redirect('operator');
    }
    public function destroy($id)
    {
        User::find($id)->delete();
        return back();
    }

}
