<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Makanan;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MakananController extends Controller
{
    public function index(): View
    {
        return view('pages.makanan', [
            'foods' => Makanan::orderBy('nama')->get(),
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'nama' => 'required',
            'kalori' => 'required',
            'porsi' => 'required',
        ]);

        Makanan::create($data);

        return $this->back('success', 'Data makanan berhasil ditambahkan');
    }

    public function destroy(Makanan $makanan): RedirectResponse
    {
        $makanan->delete();

        return $this->back('success', 'Data makanan berhasil dihapus');
    }
}
