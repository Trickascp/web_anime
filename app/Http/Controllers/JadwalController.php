<?php

namespace App\Http\Controllers;

use App\Series;
use App\Hari;
use App\Jadwal;
use App\Episode;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $senin  = Jadwal::where('id_hari', '1')->get();
        $selasa = Jadwal::where('id_hari', '2')->get();
        $rabu   = Jadwal::where('id_hari', '3')->get();
        $kamis  = Jadwal::where('id_hari', '4')->get();
        $jumaat = Jadwal::where('id_hari', '5')->get();
        $sabtu  = Jadwal::where('id_hari', '6')->get();
        $minggu = Jadwal::where('id_hari', '7')->get();

        return view('admin.jadwal')->withSenin($senin)
                                   ->withSelasa($selasa)
                                   ->withRabu($rabu)
                                   ->withKamis($kamis)
                                   ->withJumaat($jumaat)
                                   ->withSabtu($sabtu)
                                   ->withMinggu($minggu);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $hari = Hari::find($id);
        $all  = Series::orderBy('judul', 'ASC')->get();
        return view('admin.jadwal.create')->withId($id)->withAll($all)->withHari($hari);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        
        $in = new Jadwal;
        $in->id_series = $req->series;
        $in->id_hari   = $req->hari;
        $in->save();
        return redirect()->route('dash.jadwal');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        
        $recent    = Episode::orderBy('id', 'DESC')->get();

        $senin     = Jadwal::where('id_hari', '1')->get();
        $selasa    = Jadwal::where('id_hari', '2')->get();
        $rabu      = Jadwal::where('id_hari', '3')->get();
        $kamis     = Jadwal::where('id_hari', '4')->get();
        $jumaat    = Jadwal::where('id_hari', '5')->get();
        $sabtu     = Jadwal::where('id_hari', '6')->get();
        $minggu    = Jadwal::where('id_hari', '7')->get();

        return view('jadwal')->withSenin($senin)
                             ->withSelasa($selasa)
                             ->withRabu($rabu)
                             ->withKamis($kamis)
                             ->withJumaat($jumaat)
                             ->withSabtu($sabtu)
                             ->withMinggu($minggu)
                             ->withRecent($recent);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function edit(Jadwal $jadwal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jadwal $jadwal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function destroy($hari, $id)
    {
        
        $del = Jadwal::where('id_hari', $hari)->where('id_series', $id)->first();
        $del->delete();
        return back();


    }
}
