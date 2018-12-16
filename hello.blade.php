<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use Session;
use App\allclass;
use Illuminate\Support\Facades\Redirect;
use DB;


session_start();


class AddStudentController extends Controller
{
    public function index(){
    	
    	return view('admin.student.index');
    }


    public function create(){

    	$classes = allclass::all();
        return view('admin.student.create', compact('classes'));
    
    }

    public function store(Request $request){



        $user = new User;

       
    	$data['first_name']=$request->first_name;
    	$data['last_name']=$request->last_name;
    	$data['sex']=$request->sex;
        $data['dob']=$request->dob;
    	$data['class']=$request->class;
    	$data['email']=$request->email;
    	$data['status']=$request->status;
    	$data['address']=$request->address;
    	$data['roll']=$request->roll;
    	$data['registration']=$request->registration;
    	$data['phone']=$request->phone;
    	$data['class_id']=$request->class_id;
    	$data['father_name']=$request->father_name;
    	$data['mother_name']=$request->mother_name;
    	$data['parent_phone']=$request->phone; 
    	$image=$request->file('photo'); 




    	if ($image) {
    		$image_name = str_random(10);
    		$ext=strtolower($image->getclientoriginalExtension());
    		$image_full_name=$image_name.'.'.$ext;
    		$upload_path='photos/';
    		$image_url=$upload_path.$image_full_name;
    		$success=$image->move($upload_path,$image_full_name);
    		if ($success) {
    			$data['photo'] = $image_url;
    			$stdid=DB::table('students')->insertGetId($data);

    			Session::put('success', 'Student Added Succesfully');
    			
    			return redirect()->back()->with('success', 'Student Added Succesfully');
    		}
    	}
    	$data['image']=$image_url;
    	DB::table('students')->insert($data);
    	Session::put('success', 'Student Added Succesfully');
    	return redirect()->back()->with('success', 'Student Added Succesfully');
    }

        $data=[];
         $data['first_name']=$request->first_name;
        $data['last_name']=$request->last_name;
        $data['sex']=$request->sex;
        $data['user_id']=$request->$stdid;
        DB::table('users')->insert($data);
          


    public function delete($id){
        DB::table('students')
        ->where('id', $id)
        ->delete();

         return redirect()->back()->with('success', 'Student Deleted Successfully'); 

     
    }
    
}

$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

