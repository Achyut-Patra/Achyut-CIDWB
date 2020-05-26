<?php

namespace App\Http\Controllers\frontend;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Keyofficial;
use DB;
class OrgstructController extends Controller
{
    public function index(){
    	$keyofficial = Keyofficial::with(['officialrank','officialtype'])->where('type',1)->where('flag',1)->orderBy('order','ASC')->get()->groupBy('order');
    	
    	//echo "<pre>";
    	//print_r($keyofficial);
    	//die();
    	return view('frontend.orgstruct', compact('keyofficial'));
    }
    public function dsp(){
    	
    	return view('frontend.dsp');
    }

    public function inspector(){
    	
    	return view('frontend.inspector');
    }
}
