<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Search;

class SearchController extends Controller
{
    /**
     * Show search result for given string.
     * 
     * @param \Illuminate\Http\Request
     * @param int
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $pageNumber = 1)
    {
        if (empty($request->q)) {
            return view('pages.search')->with(['articles' => [], 'q' => $request->q]);
        }
        $articles = Search::articles($request->q, $pageNumber);
                  
        return view('pages.search')->with(['articles' => $articles, 'q' => $request->q]);
    }
}
