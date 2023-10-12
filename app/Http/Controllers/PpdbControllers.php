<?php

namespace App\Http\Controllers;

use App\Models\Ppdb;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Barryvdh\DomPDF\Facade\pdf;

class PpdbControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ppdb = Ppdb::latest()->paginate(5);
        return view ('ppdb.index',compact('ppdb'))->with('i', (request()->input('page', 1) -1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('ppdb.create');
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
        $request->validate([
            'NamaLengkap' => 'required',
            'jk' => 'required',
            'AlamatLengkap' => 'required',
            'agama' => 'required',
            'asalSMP' => 'required',
            'jurusan' => 'required'
        ]);
        Ppdb::create($request->all());

        return redirect()->route('ppdb.index')->with('succes','Data Berhasil di Input');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ppdb = Ppdb::find($id);
        return view('ppdb.show',compact('ppdb'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ppdb = Ppdb::find($id);
        return view('ppdb.edit',compact('ppdb'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ppdb $ppdb)
    {
        $request->validate([
            'NamaLengkap' => 'required',
            'jk' => 'required',
            'AlamatLengkap' => 'required',
            'agama' => 'required',
            'asalSMP' => 'required',
            'jurusan' => 'required'
        ]);

        $ppdb->update($request->all());

        return redirect()->route('ppdb.index')->with('succes','Data Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ppdb $ppdb)
    {
        $ppdb->delete();

        return redirect()->route('ppdb.index')->with('succes','Data Berhasil di Hapus');
    }

    public function export(){
        $data = Ppdb::all();

        view()->share('data', $data);
        $pdf = PDF::loadView('data_pdf');
        return $pdf->download('datappdb.pdf');

    }

}
