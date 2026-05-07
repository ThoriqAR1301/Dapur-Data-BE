<?php

namespace App\Http\Controllers;

use App\Models\Portofolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index(Request $request)
    {
        $portofolios = Portofolio::where('user_id', $request->user()->id)->get();

        return response()->json([
            'message' => 'Data Portfolio Berhasil Diambil',
            'data'    => $portofolios,
        ], 200);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul'       => 'required|string',
            'deskripsi'   => 'required|string',
            'link_github' => 'nullable|string',
            'thumbnail'   => 'nullable|string',
            'kategori'    => 'required|string',
            'nilai'       => 'required|in:A,B,C,D',
            'jenis_porto' => 'required|string',
            'tools'       => 'required|string',
            'teknologi'   => 'required|string',
        ]);

        $portofolio = Portofolio::create([
            'user_id' => $request->user()->id,
            ...$validated,
        ]);

        return response()->json([
            'message' => 'Portfolio Berhasil Disimpan',
            'data'    => $portofolio,
        ], 201);
    }
}