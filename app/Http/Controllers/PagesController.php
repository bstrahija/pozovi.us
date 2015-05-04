<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{

    /**
     * Display home page
     *
     * @return \View
     */
    public function index()
    {
        return view('pages.index');
    }

}
