<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use App\Education;
class EducationController extends Controller
{
   public function __construct(){
       $this->middleware('auth');
    }
    public function first(){
		return view('education.firsteducation');
	}

	public function create(Request $request)
   	{
   		//loading model for the view
   		
   		$userid = Auth::user()->id;
   		$user_email = Auth::user()->email;
   		$education = new Education;
   		$validated = $request->validate([	
   			"title" => 'required|max:50',
   			"description" => 'required|max:200',
   			"passing_year" => 'required|numeric',
   			"marks" => 'required',
   			"institute" => 'max:100',
   			"from_date" => 'required',
   			"to_date" => 'required',
   		]);
   		$education->name= $request->title;
   		$education->description= $request->description;
   		$education->passing_year= $request->passing_year;
   		$education->marks_percentage= $request->marks;
   		$education->institute= $request->institute;
   		$education->from_date = $request->from_date;
   		$education->to_date= $request->to_date;
   		$education->user_id= $userid;
   		$education->save();

   		Session::flash('message', 'Step 3 - Educational Data Successfull Added'); 
   		return redirect('register/step4');

   	}
}
