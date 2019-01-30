<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Personal;
use Session;
class PersonalController extends Controller
{
    public function __construct(){
    	 $this->middleware('auth');
    }

    public function index(){
    	$userid = Auth::user()->id;
    	$user_email = Auth::user()->email;
    	dd($user_email);
    }
	public function first(){
		return view('personal.firstpersonal');
	}
    public function show(){

    	return view('personal.showpersonal');
    }
   
   	public function create(Request $request)
   	{
   		//loading model for the view
   		
   		$userid = Auth::user()->id;
   		$user_email = Auth::user()->email;
   		$personal = new Personal;
   		$validated = $request->validate([	
   			"firstname" => 'required|max:25',
   			"lastname" => 'required|max:25',
   			"address" => 'required|max:100',
   			"address2" => 'max:100',
   			"city" => 'max:50',
   			"age" => 'max:3',
   			"postalcode" => 'max:50',
   			"country" => 'max:50',
   			"phone" => 'max:15',
   			"dob" => 'required',
   			"website" => 'required',
   			"objective" => 'required|max:300',
   			
   		]);
   		$personal->first_name= $request->firstname;
   		$personal->last_name= $request->lastname;
   		$personal->address_1= $request->address;
   		$personal->address_2= $request->address2;
   		$personal->city_name= $request->city;
   		$personal->postal_code = $request->postalcode;
   		$personal->phone= $request->phone;
      $personal->age= $request->age;
   		$personal->country= $request->country;
   		$personal->date_of_birth= $request->dob;
   		$personal->website= $request->website;
   		$personal->objective= $request->objective;
   		$personal->email = $user_email;
   		$personal->user_id = $userid;
   		$personal->save();

   		Session::flash('message', 'Step 1 - Personal Data Successfull Added'); 
   		return redirect('register/step3');

   	}

   	public function edit(Request $request)
   	{
   		# code...
   	}
   	public function update(Request $request)
   	{
   		# code...
   	}
   	
}
