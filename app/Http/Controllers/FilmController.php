<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('film.index', [
            'title' => 'Film',
            'films' => Film::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('film.create', [
            'title' => 'Tambah Data Film'

        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string',
            'genre' => 'required|string',
            'sutradara' => 'required|string',
            'tahun_rilis' => 'required|integer|min:1900|max:2026',
            'durasi' => 'required|integer',
        ], [
            'judul.required' => 'Judul film wajib diisi.',
            'judul.string' => 'Judul film harus berupa teks.',

            'genre.required' => 'Genre film wajib diisi.',
            'genre.string' => 'Genre film harus berupa teks.',

            'sutradara.required' => 'Nama sutradara wajib diisi.',
            'sutradara.string' => 'Nama sutradara harus berupa teks.',

            'tahun_rilis.required' => 'Tahun rilis wajib diisi.',
            'tahun_rilis.integer' => 'Tahun rilis harus berupa angka.',
            'tahun_rilis.min' => 'Tahun rilis minimal 1900.',
            'tahun_rilis.max' => 'Tahun rilis maksimal 2026.',

            'durasi.required' => 'Durasi film wajib diisi.',
            'durasi.integer' => 'Durasi film harus berupa angka.',
        ]);

        Film::create($validated);

        return to_route('film.index')->with('success', 'Data film berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Film $film)
    {
        return view('film.show', [
            'title' => 'Detail film',
            'film' => $film
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Film $film)
    {
        return view('film.edit', [
            'title' => 'edit Data film',
            'film' => $film
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Film $film)
    {
        $validated = $request->validate([
            'judul' => 'required|string',
            'genre' => 'required|string',
            'sutradara' => 'required|string',
            'tahun_rilis' => 'required|integer|min:1900|max:2026',
            'durasi' => 'required|integer',
        ], [
            'judul.required' => 'Judul film wajib diisi.',
            'judul.string' => 'Judul film harus berupa teks.',

            'genre.required' => 'Genre film wajib diisi.',
            'genre.string' => 'Genre film harus berupa teks.',

            'sutradara.required' => 'Nama sutradara wajib diisi.',
            'sutradara.string' => 'Nama sutradara harus berupa teks.',

            'tahun_rilis.required' => 'Tahun rilis wajib diisi.',
            'tahun_rilis.integer' => 'Tahun rilis harus berupa angka.',
            'tahun_rilis.min' => 'Tahun rilis minimal 1900.',
            'tahun_rilis.max' => 'Tahun rilis maksimal 2026.',

            'durasi.required' => 'Durasi film wajib diisi.',
            'durasi.integer' => 'Durasi film harus berupa angka.',
        ]);

        $film->update($validated);

        return to_route('film.index')->with('success', 'Data film berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(film $film)
    {
        
    $film->delete();

    return to_route('film.index')->with('success', 'Data film berhasil dihapus.');

    }
}
