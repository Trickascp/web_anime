<?php

namespace App\Http\Controllers;

use App\Series;
use App\Episode;
use Illuminate\Http\Request;

class EpisodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function list($series)
    {   
        $series     = Series::where('judul', $series)->first();

        $id_series  = $series->id;

        $get        = Episode::where('id_series', $id_series)->orderBy('nama', 'ASC')->paginate(5);
        return view('admin.episode.list_epsd')->withGet($get);

    }


    public function index()
    {
        $rating = Series::orderBy('rating', 'DESC')->get();
        
        $get = Episode::orderBy('created_at', 'DESC')->paginate(16);
        return view('welcome')->withGet($get)->withRating($rating);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $series = Series::all();
        return view('admin.episode.create')->withSeries($series);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        
        $new            = new Episode;
        $new->nama      = $req->nama;
        $new->id_series = $req->series;

        $file     = $req->file('video');
        $filename = $file->getClientOriginalName();
        $name     = 'UNIMU_'.$filename;
        $req->file('video')->move('video/',$name);
        $new->video = $name;

        $new->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Episode  $episode
     * @return \Illuminate\Http\Response
     */
    public function show($anime, $id)
    {
        
        $find      = Series::where('judul','=', $anime)->first();
        $id_series = $find->id;
        
        $vid       = Episode::find($id);
        $prev      = Episode::where('id', '<', $id)->where('id_series', $id_series)->max('id');
        $next      = Episode::where('id', '>', $id)->where('id_series', $id_series)->min('id');
        
        $all       = Episode::where('id_series', $id_series)->get();
        $recent    = Episode::orderBy('id', 'DESC')->get();

        return view('video')->withNext($next)->withPrev($prev)->withAll($all)->withVid($vid)->withRecent($recent);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Episode  $episode
     * @return \Illuminate\Http\Response
     */
    public function edit(Episode $episode)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Episode  $episode
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Episode $episode)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Episode  $episode
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $del = Episode::find($id);
        $del->delete();
        return back();

    }
}
