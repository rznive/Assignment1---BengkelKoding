<?php

namespace App\Http\Controllers;
use App\Models\Periksa;
use App\Models\User;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function index()
    {
        $showTotalPeriksa = Periksa::where('id_pasien', auth()->id())->count();
        $sudahDitangani = Periksa::where('id_pasien', auth()->id())->whereNotNull('tgl_periksa')->count();
        $belumDitangani = Periksa::where('id_pasien', auth()->id())->whereNull('tgl_periksa')->count();
        $showTotalBiaya = Periksa::where('id_pasien', auth()->id())->sum('biaya_periksa');
        return view('pasien.dashboard', compact('showTotalPeriksa', 'sudahDitangani', 'belumDitangani', 'showTotalBiaya'));
    }

    public function showPeriksa()
    {
        $showDokter = User::where('role', 'dokter')->get();
        $periksa = Periksa::with('dokter')->where('id_pasien', auth()->id())->get();
        return view('pasien.periksa', compact('showDokter', 'periksa'));
    }

    public function storePeriksa(Request $request)
    {
        $request->validate([
            'id_dokter' => 'required|integer',
            'id_pasien' => 'required|integer',
            'tgl_periksa' => 'nullable|string',
            'catatan' => 'nullable|string|max:255',
            'biaya_periksa' => 'nullable|integer',
        ]);

        Periksa::create($request->all());
        toastr()->success('Pemeriksaan Berhasil Ditambahkan');
        return redirect()->route('periksaPasien');
    }
}
