<?php

namespace App\Http\Controllers\Staf;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use DateTime;

class TupoksiController extends Controller
{

	public function index(){
        return view('staf.tupoksi.index');//,$data);
	}

}