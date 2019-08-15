<?php

namespace App\Http\Controllers;


use App\Series;
use App\Genre;
use Illuminate\Http\Request;


class SearchController extends Controller
{
    

	public function text(Request $req)
	{
		$tit = $req->s;
		$s = Series::where('judul', 'LIKE', '%'.$req->s.'%')->get();
		return view('search.text')->withGet($s)->withTit($tit);

	}


	public function genre($id)
	{

		$tit = Genre::find($id);

		$series = Series::with('genre')->whereHas('genre', function($q) use ($id){
           $q->where('id',$id);
      	   })->orderBy('id', 'DESC')->paginate(5);

		return view('search.gen')->withGet($series)->withTit($tit);


	}



}
