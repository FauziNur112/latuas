<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\latuas;

class latuasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function show()
    {
        $datalatuas = latuas::with('jabatan')->paginate(2);
        return view('latih', compact('datalatuas'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create-latih');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        latuas::create([
            'nama'=> $request->nama,
            'uang'=> $request->uang,
            'tanggal'=> $request->tanggal
        ]);

        return redirect('latuas');
    }

    /**
     * Display the specified resource.
     */
    // public function show(string $id)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $datuas = latuas::findorfail($id);
        return view('edit-latih', compact('datuas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $datuas = latuas::findorfail($id);
        $datuas->update($request->all());
        return redirect('latuas');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $datuas = latuas::findorfail($id);
        $datuas->delete();
        return redirect('latuas');
    }
}
