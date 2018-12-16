<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class OneClassController extends Controller
{
    public function index(){

    	$onestudents =DB::table('students')
    	->where(['class'=> 1])
    	->get();
    	// print_r($onestudent);
    	
    	return view('admin.class.show', compact('onestudents'));
    }

    public function two(){

    	$onestudents =DB::table('students')
    	->where(['class'=> 2])
    	->get();
    	// print_r($onestudent);
    	
    	return view('admin.class.show', compact('onestudents'));
    }
}
}
