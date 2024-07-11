<?php

namespace App\Http\Controllers\Admin;

use App\Models\Galeri;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminGaleriController extends Controller
{
    public function index()
    {
        $galeris = Galeri::get();
        return view('admin.galeri', compact('galeris'));
    }

    public function input()
    {
        return view('admin.galeriinput');
    }

    public function store(Request $request)
    {
        $fileGambar = $request->file('gambar')->store('public/assets/album');
        Galeri::create([
            'judul' => $request['judul'],
            'gambar' => $fileGambar,
            'deskripsi' => $request['deskripsi'],
            'status' => 'Deactive',
        ]);

        return redirect()->route('admin.galeri.index');
    }

    public function edit($id)
    {
        $galeri = Galeri::whereId($id)->first();
        return view('admin.galeriedit', compact('galeri'));
    }

    public function update(Request $request)
    {
        if (!empty($request->file('gambar'))) {
            $fileGambar = $request->file('gambar')->store('public/assets/galeri');
            Galeri::whereId($request->id)->update([
                'judul' => $request['judul'],
                'gambar' => $fileGambar,
                'deskripsi' => $request['deskripsi'],
            ]);
        } else {
            Galeri::whereId($request->id)->update([
                'judul' => $request['judul'],
                'deskripsi' => $request['deskripsi'],
            ]);
        }

        return redirect()->route('admin.galeri.index');
    }

    public function destroy($id)
    {
        Galeri::destroy($id);
        return redirect()->route('admin.galeri.index');
    }
}
