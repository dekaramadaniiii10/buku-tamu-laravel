<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BukuTamu;

class BukuTamuController extends Controller
{
    public function create()
    {
        return view('buku_tamu.create');
    }

    public function store(Request $request)
    {
        BukuTamu::create($request->all());

        return redirect('/')
            ->with('success', 'Data berhasil disimpan');
    }

    public function index()
    {
        $data = BukuTamu::latest()->get();
        $totalTamu = BukuTamu::count();

        return view('buku_tamu.index', compact('data', 'totalTamu'));
    }

    public function edit($id)
    {
        $tamu = BukuTamu::findOrFail($id);

        return view('buku_tamu.edit', compact('tamu'));
    }

    public function update(Request $request, $id)
    {
        $tamu = BukuTamu::findOrFail($id);

        $tamu->update($request->all());

        return redirect('/admin');
    }

    public function destroy($id)
    {
        BukuTamu::destroy($id);

        return redirect('/admin');
    }
}