<?php

namespace App\Http\Controllers;
use App\Models\Obat;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    public function index()
    {
        return view('dokter.dashboard');
    }

    public function showPeriksa()
    {
        return view('dokter.periksa');
    }

    public function showObat()
    {
     
        $obats = Obat::latest()->get();
        return view('dokter.obat', compact('obats'));
    }


    public function storeObat(Request $request)
    {
        // Logic to store the obat data
        $request->validate([
            'nama_obat' => 'required|string|max:255',
            'kemasan' => 'required|string|max:69',
            'harga' => 'required|integer',
        ]);
        
        Obat::create($request->all());
        toastr()->success('Obat Berhasil Ditambahkan');
        return redirect()->route('obatDokter');
    }

    public function edit($id)
    {
        return view('obat.edit', compact('id'));
    }

    public function update(Request $request, $id)
    {
        // Logic to update the obat data
        return redirect()->route('obat.index')->with('success', 'Obat updated successfully.');
    }

    public function destroy($id)
    {
        // Logic to delete the obat data
        return redirect()->route('obat.index')->with('success', 'Obat deleted successfully.');
    }
}
