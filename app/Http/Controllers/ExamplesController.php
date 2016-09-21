<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class ExamplesController extends Controller
{
    /**
     * Show the root documentation page (/docs).
     *
     * @return Response
     */
    public function showRoot()
    {
        return view('examples');
    }
}
