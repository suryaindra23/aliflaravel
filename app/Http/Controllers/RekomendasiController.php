<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rekomendasi;

class RekomendasiController extends Controller
{
    public function index(Request $request)
    {
        // Ambil nilai dari radio button
        $rasa = $request->input('rasa');
        $warnaSambal = $request->input('warna_sambal');
        $harga = $request->input('harga');
        $porsi = $request->input('porsi');
        $parkir = $request->input('parkir');
        $tempatMakan = $request->input('tempat_makan');

        // Gunakan nilai dari radio button untuk melakukan query di database
        $rekomendasi = Rekomendasi::where('rasa_sambal', $rasa)
            ->where('warna_sambal', $warnaSambal)
            ->where('harga', $harga)
            ->where('porsi_makan', $porsi)
            ->where('parkir', $parkir)
            ->where('tempat_makan', $tempatMakan)
            ->get(['penjual', 'alamat', 'jam_buka', 'jam_tutup']);

        // Kembalikan hasil query
        return view('rekomendasi', ['rekomendasi' => $rekomendasi]);
    }
}
