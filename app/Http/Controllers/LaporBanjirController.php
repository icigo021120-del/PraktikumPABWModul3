<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporBanjirController extends Controller
{
 
    public function index() 
    {

        $defaultLaporan = [
            [
                'nama' => 'Budi Santoso',
                'kecamatan' => 'Dayeuhkolot',
                'desa' => 'Citeureup',
                'tinggi_genangan' => 45,
            ],
            [
                'nama' => 'Siti Aminah',
                'kecamatan' => 'Baleendah',
                'desa' => 'Andir',
                'tinggi_genangan' => 80, 
            ],
            [
                'nama' => 'Rian Hidayat',
                'kecamatan' => 'Bojongsoang',
                'desa' => 'Dayeuhkolot',
                'tinggi_genangan' => 20, 
            ],
        ];

        $laporanBanjir = session()->get('laporan_banjir', $defaultLaporan);

        return view('laporbanjir.index', compact('laporanBanjir'));
    }

    public function form()
    {
        return view('laporbanjir.form');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required|string|max:100',
            'kecamatan' => 'required|string|max:100',
            'desa' => 'required|string|max:100',
            'tinggi_genangan' => 'required|numeric|min:0',
        ]);

        $laporanBanjir = session()->get('laporan_banjir', [
            [
                'nama' => 'Budi Santoso',
                'kecamatan' => 'Dayeuhkolot',
                'desa' => 'Citeureup',
                'tinggi_genangan' => 45,
            ],
            [
                'nama' => 'Siti Aminah',
                'kecamatan' => 'Baleendah',
                'desa' => 'Andir',
                'tinggi_genangan' => 80,
            ],
            [
                'nama' => 'Rian Hidayat',
                'kecamatan' => 'Bojongsoang',
                'desa' => 'Dayeuhkolot',
                'tinggi_genangan' => 20,
            ]
        ]);

        array_unshift($laporanBanjir, $data);

        session()->put('laporan_banjir', $laporanBanjir);

        return redirect()->route('lapor-banjir.index')
                         ->with('success', 'Laporan banjir berhasil dikirim!');
    }

    public function konfirmasi()
    {
        return view('laporbanjir.konfirmasi');
    }
}