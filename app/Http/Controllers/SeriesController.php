<?php

namespace App\Http\Controllers;

use App\Series;
use App\Genre;
use App\Episode;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index($anime)
    {
        
        $get  = Series::where('judul', $anime)->first();
        $id   = $get->id;
        $epsd = Episode::where('id_series', $id)->orderBy('nama', 'ASC')->get();
        return view('detail')->withGet($get)->withEpsd($epsd);



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $genre = Genre::all();
        return view('admin.series.create')->withGenre($genre);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {

        $this->validate($req, [
            'judul'        => 'required|max:30',
            'rating'       => 'required|max:10',
            'release'      => 'required|max:10',
            'sinopsis'     => 'required',
            'status'       => 'required',
            'poster'       => 'required|file|image|mimes:jpeg,png',
        ]);
        
        $new = new Series;
        $new->judul    = $req->judul;
        $new->sinopsis = $req->sinopsis;
        $new->rating   = $req->rating;
        $new->release  = $req->release;
        $new->status   = $req->status;

        $file = $req->file('poster');

        $filename = $file->getClientOriginalName();
        $name     = 'UNIMU_'.$filename;
        $req->file('poster')->move('poster/',$name);
        $new->poster = $name;

        $new->save();
        $new->genre()->sync($req->genre, false);
        return redirect('home');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Series  $series
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        
        $all = Series::all();
        $recent    = Episode::orderBy('id', 'DESC')->get();
        return view('list_anime')->withAll($all)->withRecent($recent);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Series  $series
     * @return \Illuminate\Http\Response
     */
    public function edit($judul)
    {
        $genre  = Genre::pluck('nama','id')->all();
        $slug   = Series::where('judul','=', $judul)->first();
        $id     = $slug->id;
        $edit   = Series::find($id);
        return view('admin.series.edit')->withE($edit)->withGenre($genre);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Series  $series
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req)
    {
        $up = Series::find($req->id);
        $up->judul     = $req->judul;
        $up->sinopsis  = $req->sinopsis;
        $up->rating    = $req->rating;
        $up->status   = $req->status;

        $file = $req->file('poster');

        if(!$file)
        {

            $up->update();
            $up->genre()->sync($req->genre);
            return redirect('home');

        }else{
            
            $filename = $file->getClientOriginalName();
            $name     = 'UNIMU_'.$filename;
            $req->file('poster')->move('poster/',$name);
            $up->poster = $name;

            $up->update();
            $up->genre()->sync($req->genre);
            return redirect('home');

        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Series  $series
     * @return \Illuminate\Http\Response
     */
    public function destroy($judul)
    {
        
        $slug   = Series::where('judul','=', $judul)->first();

        $id = $slug->id;

        $del = Series::find($id);
        $del->delete();
        return back();


    }
}
