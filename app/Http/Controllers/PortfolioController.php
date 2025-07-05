<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $portfolios = Portfolio::latest()->get();
        return view('portfolio.index', compact('portfolios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('portfolio.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif',
            'nama_proyek' => 'required|string|max:255',
            'kategori' => 'required|string',
            'tanggal_pembuatan' => 'required|date',
            'link' => 'required|url',
            'deskripsi' => 'required|string',
        ]);

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $hashedName = $file->hashName();
            $file->move(public_path('assets/img/portfolio'), $hashedName);
            $data['foto'] = 'assets/img/portfolio/' . $hashedName;
        }

        Portfolio::create($data);
        return redirect()->route('portfolio.index')->with('success', 'Proyek berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Portfolio $portfolio)
    {
        return view('portfolio.show', compact('portfolio'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Portfolio $portfolio)
    {
        return view('portfolio.edit', compact('portfolio'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Portfolio $portfolio)
    {
        $data = $request->validate([
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'nama_proyek' => 'required|string|max:255',
            'kategori' => 'required|string',
            'tanggal_pembuatan' => 'required|date',
            'link' => 'required|url',
            'deskripsi' => 'required|string',
        ]);

        if ($request->hasFile('foto')) {
            // Hapus foto lama (dari public folder)
            if ($portfolio->foto && file_exists(public_path($portfolio->foto))) {
                unlink(public_path($portfolio->foto));
            }

            $file = $request->file('foto');
            $hashedName = $file->hashName(); // nama file otomatis dengan hash + ekstensi
            $file->move(public_path('assets/img/portfolio'), $hashedName);
            $data['foto'] = 'assets/img/portfolio/' . $hashedName;
        }

        $portfolio->update($data);
        return redirect()->route('portfolio.index')->with('success', 'Proyek berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Portfolio $portfolio)
    {
        if ($portfolio->foto && file_exists(public_path($portfolio->foto))) {
            unlink(public_path($portfolio->foto));
        }

        $portfolio->delete();

        return redirect()->route('portfolio.index')->with('success', 'Proyek berhasil dihapus');
    }
}
