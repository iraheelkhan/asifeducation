<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Experience;
use Auth;
use Session;
class ExperienceController extends Controller
{
   public function __construct(){
       $this->middleware('auth');
   }

   public function first(){
		return view('experience.firstexperience');
	}

	public function create(Request $request)
   	{
   		//loading model for the view
   		
   		$userid = Auth::user()->id;
   		$user_email = Auth::user()->email;
   		$experience = new Experience;
   		$validated = $request->validate([	
   			"company_name" => 'required|max:50',
   			"description" => 'required|max:200',
   			"designation" => 'required|min:3',
   			"from_date" => 'required',
   			"to_date" => 'required',
   		]);
   		$experience->company_name= $request->company_name;
   		$experience->description= $request->description;
   		$experience->designation= $request->designation;
   		$experience->title= $request->title;
   		$experience->from_date = $request->from_date;
   		$experience->to_date= $request->to_date;
   		$experience->user_id= $userid;
   		$experience->save();

   		Session::flash('message', 'Step 3 - Experience Data Successfull Added'); 
   		return redirect('register/step4');

   	}
}
