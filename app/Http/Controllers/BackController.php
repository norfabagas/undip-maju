<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FrontConfig;
use App\UnitBisnis;
use App\Value;
use App\Tag;
use App\User;
use App\Blog;
use App\BlogTag;
use App\Category;
use App\Contact;
use App\VisiMisi;
use Validator;

use Illuminate\Support\Facades\Input;
use File;
use Storage;

class BackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('back.index');
    }

    public function general()
    {
        //title config
        $title = FrontConfig::where('config_name', '=', 'title')->first();
        //tagline config
        $tagline = FrontConfig::where('config_name', '=', 'tagline')->first();
        //facebook config
        $facebook = FrontConfig::where('config_name', '=', 'facebook')->first();
        //twitter config
        $twitter = FrontConfig::where('config_name', '=', 'twitter')->first();
        //googleplus config
        $googleplus = FrontConfig::where('config_name', '=', 'googleplus')->first();
        //alamat config
        $alamat = FrontConfig::where('config_name', '=', 'alamat')->first();
        //telepon config
        $telepon = FrontConfig::where('config_name', '=', 'telepon')->first();
        // email config
        $email = FrontConfig::where('config_name', '=', 'email')->first();
        // jam kerja config
        $jamkerja = FrontConfig::where('config_name', '=', 'jamkerja')->first();
        // kota config
        $kota = FrontConfig::where('config_name', '=', 'kota')->first();
        return view('back.general')
        ->with('title', $title)
        ->with('tagline', $tagline)
        ->with('facebook', $facebook)
        ->with('twitter', $twitter)
        ->with('googleplus', $googleplus)
        ->with('alamat', $alamat)
        ->with('telepon', $telepon)
        ->with('email', $email)
        ->with('jamkerja', $jamkerja)
        ->with('kota', $kota);
    }

    public function generalstore(Request $request)
    {
        if (isset($request->title)) {
            $a = FrontConfig::where('config_name', '=', 'title')->first();
            $a->config_value = $request->title;
            $a->save();
        }

        if (isset($request->tagline)) {
            $a = FrontConfig::where('config_name', '=', 'tagline')->first();
            $a->config_value = $request->tagline;
            $a->save();
        }

        if (isset($request->facebook)) {
            $a = FrontConfig::where('config_name', '=', 'facebook')->first();
            $a->config_value = $request->facebook;
            $a->save();
        }

        if (isset($request->twitter)) {
            $a = FrontConfig::where('config_name', '=', 'twitter')->first();
            $a->config_value = $request->twitter;
            $a->save();
        }

        if (isset($request->googleplus)) {
            $a = FrontConfig::where('config_name', '=', 'googleplus')->first();
            $a->config_value = $request->googleplus;
            $a->save();
        }

        if (isset($request->alamat)) {
            $a = FrontConfig::where('config_name', '=', 'alamat')->first();
            $a->config_value = $request->alamat;
            $a->save();
        }

        if (isset($request->telepon)) {
            $a = FrontConfig::where('config_name', '=', 'telepon')->first();
            $a->config_value = $request->telepon;
            $a->save();
        }

        if (isset($request->email)) {
            $a = FrontConfig::where('config_name', '=', 'email')->first();
            $a->config_value = $request->email;
            $a->save();
        }

        if (isset($request->jamkerja)) {
            $a = FrontConfig::where('config_name', '=', 'jamkerja')->first();
            $a->config_value = $request->jamkerja;
            $a->save();
        }

        if (isset($request->kota)) {
            $a = FrontConfig::where('config_name', '=', 'kota')->first();
            $a->config_value = $request->kota;
            $a->save();
        }

        return redirect('admin/general');
    }

    public function unit()
    {
        $unit = UnitBisnis::get();
        return view('back.unit')
            ->with('unit', $unit);
    }

    public function unitEdit($id)
    {
        $unit = UnitBisnis::findOrFail($id);
        $visi = VisiMisi::where('id_unit', '=', $id)
            ->where('tipe', '=', 'visi')
            ->first();

        return view('back.unitedit')
            ->with('unit', $unit)
            ->with('visi', $visi);
    }

    public function unitEditStore(Request $request, $id)
    {
        $unit = UnitBisnis::find($id);
        $visi = VisiMisi::where('id_unit', '=', $id)
            ->where('tipe', '=', 'visi')
            ->first();

        if (isset($request->nama)) {
            $unit->nama = $request->nama;
            $unit->url = str_slug($request->nama);
        }

        if (isset($request->nama_lengkap)) {
            $unit->nama_lengkap = $request->nama_lengkap;
        }

        if (isset($request->deskripsi)) {
            $unit->deskripsi = $request->deskripsi;
        }

        if ($request->file('image')) {
            // $ext = Input::file('image')->getClientOriginalExtension();
            $fileName = Input::file('image')->getClientOriginalName();
            $request->file('image')->move('images/unit', $fileName);
            $unit->image = $fileName;
        }

        $unit->save();

        if (isset($request->visi)) {
            $visi->isi = $request->visi;
            $visi->save();
        }

        return redirect('admin/unit');
    }

    public function unitMisi($id)
    {
        $unit = UnitBisnis::find($id);
        $misi = VisiMisi::where('id_unit', '=', $id)
            ->where('tipe', '=', 'misi')
            ->get();
        return view('back.misi')
            ->with('unit', $unit)
            ->with('misi', $misi);
    }

    public function unitMisiStore(Request $request, $id)
    {
        $misi = new VisiMisi();
        $misi->id_unit = $request->id_unit;
        $misi->judul = $request->misi;
        $misi->isi = $request->penjelasan;
        $misi->tipe = 'misi';
        $misi->save();

        return redirect(url()->current());
    }

    public function unitMisiDelete($id)
    {
        $misi = VisiMisi::find($id);
        $misi->delete();

        return redirect(url()->previous());
    }

    public function unitNilai($id)
    {
        $unit = UnitBisnis::find($id);
        $nilai = VisiMisi::where('id_unit', '=', $id)
            ->where('tipe', '=', 'nilai')
            ->get();
        return view('back.nilai')
            ->with('unit', $unit)
            ->with('nilai', $nilai);
    }

    public function unitNilaiStore(Request $request, $id)
    {
        $nilai = new VisiMisi();
        $nilai->id_unit = $request->id_unit;
        $nilai->judul = $request->nilai;
        $nilai->isi = $request->penjelasan;
        $nilai->tipe = 'nilai';
        $nilai->save();

        return redirect(url()->current());
    }

    public function unitNilaiDelete($id)
    {
        $nilai = VisiMisi::destroy($id);
        // $nilai->delete();

        return redirect(url()->previous());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function contact()
    {
        $contact = Contact::orderBy('created_at', 'desc')
            ->paginate('10');
        return view('back.contact')
            ->with('contact', $contact);
    }

    public function contactView($id)
    {
        $contact = Contact::find($id);
        if ($contact->read === 'no') {
            $contact->read = 'yes';
            $contact->save();
        }
        $message = Contact::find($id);

        return view('back.contactview')
            ->with('message', $message);
    }

    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
