<?php

namespace App\Http\Controllers;

use App\Models\Sertifikasi;
use Illuminate\Http\Request;

class CertificationController extends Controller
{
    public function index(Request $request)
    {
        $sertifikasis = Sertifikasi::where('user_id', $request->user()->id)->get();

        return response()->json([
            'message' => 'Data Sertifikasi Berhasil Diambil',
            'data'    => $sertifikasis,
        ], 200);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_sertifikat'  => 'required|string',
            'lembaga_penerbit' => 'required|string',
            'tanggal_terbit'   => 'required|date',
            'nomor_sertifikat' => 'required|string|unique:sertifikasis,nomor_sertifikat',
            'file_sertifikat'  => 'nullable|string',
            'deskripsi'        => 'required|string',
            'tools'            => 'required|string',
            'kategori'         => 'required|string',
            'jurusan'          => 'required|string',
        ]);

        $sertifikasi = Sertifikasi::create([
            'user_id' => $request->user()->id,
            ...$validated,
        ]);

        return response()->json([
            'message' => 'Sertifikasi Berhasil Disimpan',
            'data'    => $sertifikasi,
        ], 201);
    }
}