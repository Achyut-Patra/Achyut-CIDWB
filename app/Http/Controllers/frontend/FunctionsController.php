<?php

namespace App\Http\Controllers\frontend;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Functions;
class FunctionsController extends Controller
{
    public function index(){
    	$functions = Functions::all();
        
    	return view('frontend.functions', compact('functions'));
    }
    
}
