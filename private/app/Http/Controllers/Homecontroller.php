<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mobil;

class Homecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('pages.admin');
    }
    
    public function daftar()
    {
        //
        return view('pages.list');
    }

    public function contact()
    {
        //
        return view('pages.contact');
    }

    public function admin()
    {
        //
        $mobil=Mobil::all();
        return view('pages.admin',compact('mobil'));
    }

    public function pelanggan()
    {
        //
        return view('pages.pelanggan');
    }

    public function laporan()
    {
        //
        return view('pages.laporan');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        //
        return view('pages.login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        Mobil::create([
            'nama_mobil'=> request('nama_mobil'),
            'fasilitas'=> request('fasilitas'),
            'harga'=> request('harga'),
            'gambar'=> request('gambar')
        ]);
        return redirect('admin')->with('sukses','Data berhasil disimpan');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mobil = Mobil::find($id);
        return view('pages.edit', ['mobil' => $mobil]);
    }

    public function update(Request $request, $id)
    {
        $mobil = Mobil::find($id);
        $mobil->update($request->all());
        return redirect('admin')->with('update', 'Data berhasil diupdate');
    }

    public function delete($id)
    {
        $mobil = Mobil::findOrFail($id);
        $mobil->delete();
        return redirect('admin')->with('hapus', 'Data berhasil dihapus');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
