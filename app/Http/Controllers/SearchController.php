<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
	/** READ **/
	public function index(){



/*
$results = DB::raw("select * from lemma l 
  inner join etymology e on l.id=e.lemma_id_fk 
  inner join gloss g on e.id = g.etymology_id 
  inner join wold_meanings w on g.gloss=w.meaning
  where g.gloss like '%flower%' limit 100");

*/
      $results = DB::table('lemma')
      ->join('etymology', 'lemma.id', '=', 'etymology.lemma_id_fk')
      ->join('gloss', 'etymology.id', '=', 'gloss.etymology_id')
      ->join('wold_meanings', 'gloss.gloss', '=', 'wold_meanings.meaning')
      ->where('gloss.gloss', 'like', '%flower%')
      ->get();

		return view('index',['results' => $results]);
	}

}



/*

$results
select * from lemma l 
inner join etymology e on l.id=e.lemma_id_fk 
inner join gloss g on e.id = g.etymology_id 
inner join wold_meanings w on g.gloss=w.meaning
where g.gloss like '%flower%' #paper, ocean, etc.
limit 5000;

*/