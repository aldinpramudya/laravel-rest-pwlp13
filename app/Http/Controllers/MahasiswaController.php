<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMahasiswaRequest;
use App\Http\Requests\UpdateMahasiswaRequest;
use App\Http\Resources\MahasiswaResources;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return MahasiswaResources::collection(Mahasiswa::paginate(5));
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
    public function store(StoreMahasiswaRequest $request)
    {
        //return response()->json('hello');
        return new MahasiswaResources(Mahasiswa::create(
            [
                'Nim'=>$request->Nim,
                'Nama'=>$request->Nama,
                'Email'=>$request->Email,
                'TanggalLahir'=>$request->TanggalLahir,
                'Jurusan'=>$request->Jurusan,
                'No_Handphone'=>$request->No_Handphone,
            ]
        ));
    }

    /**
     * Display the specified resource.
     */
    public function show(Mahasiswa $mahasiswa)
    {
        return new MahasiswaResources($mahasiswa);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMahasiswaRequest $request, Mahasiswa $mahasiswa)
    {
        $mahasiswa->update(
            [
                'Nim'=>$request->Nim,
                'Nama'=>$request->Nama,
                'Email'=>$request->Email,
                'TanggalLahir'=>$request->TanggalLahir,
                'Jurusan'=>$request->Jurusan,
                'No_Handphone'=>$request->No_Handphone,
            ]
        );
        return new MahasiswaResources($mahasiswa);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();
        return response()->noContent();
    }
}
