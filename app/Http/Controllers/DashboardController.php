<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display the user dashboard
     *
     * @return \View
     */
    public function index()
    {
        return view('dashboard.index');
    }

}
