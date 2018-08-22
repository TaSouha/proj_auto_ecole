<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class ModerateurController extends Controller
{
    public function __construct(){
    	$this->middleware('moderateur');
    }

    public function index(){
    	// return Auth::guard('admin')->user();
    	return view('moderateur.dashboard');
    }
}
