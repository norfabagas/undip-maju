<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UnitBisnis;
use App\Value;
use App\FrontConfig;
use App\VisiMisi;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tagline = FrontConfig::where('config_name', '=', 'tagline')->first();
        $unit = UnitBisnis::get();
        $value = Value::get();
        $telepon = FrontConfig::where('config_name', '=', 'telepon')->first();
        $jamkerja = FrontConfig::where('config_name', '=', 'jamkerja')->first();
        return view('front.index')
            ->with('unit', $unit)
            ->with('value', $value)
            ->with('telepon', $telepon)
            ->with('jamkerja', $jamkerja)
            ->with('tagline', $tagline);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        $unit = UnitBisnis::get();
        return view('front.about')
            ->with('unit', $unit);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function UnitBisnis($url)
    {
        $unit = UnitBisnis::where('url', '=', $url)->first();
        $id = $unit->id;
        $visi = VisiMisi::where('id_unit', '=', $id)
            ->where('tipe', '=', 'visi')
            ->first();

        $misi = VisiMisi::where('id_unit', '=', $id)
            ->where('tipe', '=', 'misi')
            ->get();

        $nilai = VisiMisi::where('id_unit', '=', $id)
            ->where('tipe', '=', 'nilai')
            ->get();

        return view('front.unit')
            ->with('unit', $unit)
            ->with('visi', $visi)
            ->with('misi', $misi)
            ->with('nilai', $nilai);
    }

    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        return view('front.contact');
    }

    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

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
