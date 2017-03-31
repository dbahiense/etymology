<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
	/** READ **/
	public function index(){

		$results = DB::table('lemma')
            ->join('etymology', 'lemma.id', '=', 'etymology.lemma_id_fk')
            ->join('gloss', 'etymology.id', '=', 'gloss.etymology_id')
            ->join('wold_meanings', 'gloss.gloss', '=', 'wold_meanings.meaning')
            ->select('lemma.*')
            ->where('gloss.gloss', 'like', '%ocean%')
            ->get();

		return view('index',['results' => $results]);
	}

}
