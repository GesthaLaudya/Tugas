<?php

namespace App\Http\Controllers;

use App\Models\DaftarTamu;
use Illuminate\Http\Request;

class DaftarTamuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $daftarTamus = DaftarTamu::orderBy('name', 'asc')->paginate(10);
        return view('daftartamu', compact('daftarTamus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(DaftarTamu $daftarTamu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DaftarTamu $daftarTamu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DaftarTamu $daftarTamu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DaftarTamu $daftarTamu)
    {
        //
    }
}
